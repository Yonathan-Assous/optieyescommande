<?php
class cron extends MY_Controller {

	public function __construct(){
        parent::__construct();
	}

	public function testyopayment()
	{
			$this->load->helper('slimpay');
            $this->load->model('m_commande');
            $this->load->model('m_users');

            $date = date('m-Y', strtotime('last day of last month'));
			$date = "12-2019";
            $factures = $this->db->select('magasin')->where('mois', $date)->get('paiements')->result();
			//var_dump($factures);
            $current = array();

            foreach ($factures as $f) {
                $current[] = $f->magasin;
            }

            if (empty($current)) {
                $current = null;
            }


            $facture_client = $this->m_commande->getAllCommandeByMonthAndUser($date, $current);
			echo "<br><br>";
			$data = array();

            $data['status'] = $current;
            $data['total'] = 0;

            if ($facture_client !== false)
                foreach ($facture_client as $key => $facture_cli) {

                    $get_packaging = $this->db->query('SELECT c.tarif_packaging FROM commande c INNER JOIN (SELECT MAX(date_commande) as maxDate FROM commande WHERE DATE_FORMAT(date_commande, "%m-%Y") = "' . $date . '" AND id_users = ' . $facture_cli->id_users . ') AS t WHERE c.date_commande = t.maxDate');
                    $packaging = $get_packaging->result();

                    $id_mandat = $this->db->select('id_mandat')->where('id_users', $facture_cli->id_users)->get('users')->result();
                    $id_mandat = $id_mandat[0]->id_mandat;

                    if ($id_mandat == 0) {
                        $id_mandat = $facture_cli->id_users;
                    }

                    $facture_cli->total += $packaging[0]->tarif_packaging;

                    $dep = substr($facture_cli->cp, 0, -3);

                    $info_user = $this->m_users->getUserById($facture_cli->id_users);


                    $facture = array(
                        'montant' => number_format(($facture_cli->total + ($facture_cli->total * 0.2)), 2, '.', ''),
                        'id_user' => $facture_cli->id_users,
                        'jour_prelevement' => $info_user[0]->jour_prelevement,
                        'id_mandat' => $id_mandat,
                        'date' => date("m-Y", strtotime($facture_cli->date_commande))
                    );

                    $data['facture_slimpay'][$key] = $facture;

                    // Affichage
                    $data['facture'][$key] = array(
                        $facture_cli->nom_magasin,
                        $facture_cli->nom_societe,
                        $facture_cli->id_users,
                        date("m-Y", strtotime($facture_cli->date_commande)),
                        number_format($facture_cli->total, 2, '.', ' '),
                        $facture_cli->tarif_liv
                    );

                    $mandat = getMandat('OPTR' . $id_mandat);

                    $paiement = array(
                        'mandat_status' => $mandat,
                        'mois' => date("m-Y", strtotime($facture_cli->date_commande)),
                        'magasin' => $facture_cli->id_users,
                        'mandat' => $id_mandat,
                        'total' => number_format(($facture_cli->total + ($facture_cli->total * 0.2)), 2, '.', ''),
                    );

                    // Affichage
                    $data['total'] += $facture_cli->total + ($facture_cli->total * 0.2);
                    $data['paiement'][$key] = $paiement;


                   

                }
		
		var_dump($data);
	}
	
	public function payment_test(){
        $this->load->helper('slimpay');
        $this->load->model('m_commande');
            $this->load->model('m_users');

            $date = date('m-Y', strtotime('last day of last month'));
            $date = "09-2023";

           // $date = date('m-Y', time());
        //echo $date;die;
            $factures = $this->db->select('magasin')->where('mois', $date)->get('paiements')->result();
            $current = array();

            foreach ($factures as $f) {
                $current[] = $f->magasin;
            }

            if (empty($current)) {
                $current = null;
            }


            $facture_client = $this->m_commande->getAllCommandeByMonthAndUser($date, $current);
//            var_dump($facture_client);die;
           // var_dump($facture_client);

           $data = array();

            $data['status'] = $current;
            $data['total'] = 0;
            $key2 = 0;

            if ($facture_client !== false)
                foreach ($facture_client as $key => $facture_cli) {

                    $facture_cli->date_commande = $facture_cli->y_m_commande;
                    $sql = 'SELECT tarif_packaging FROM users WHERE id_users = ' . $facture_cli->id_users;
                    $get_packaging = $this->db->query($sql);
                    $packaging = $get_packaging->result();
                    //var_dump($packaging);die;
                    $id_mandat = $this->db->select('id_mandat')->where('id_users', $facture_cli->id_users)->get('users')->result();
                    $id_mandat = $id_mandat[0]->id_mandat;

                    if ($id_mandat == 0) {
                        $id_mandat = $facture_cli->id_users;
                    }
                    $remiseSpecial = $this->m_remise->getTotalRemisesByUser($facture_cli->id_users, $facture_cli->total + $facture_cli->reduction);
                    $facture_cli->total += $packaging[0]->tarif_packaging - $remiseSpecial;

                    $dep = substr($facture_cli->cp, 0, -3);

                    $info_user = $this->m_users->getUserById($facture_cli->id_users);

                    $montant = $facture_cli->total * (1 + $info_user[0]->percent_tva / 100);

                    while ($montant > 0) {
                        if ($montant > 1000) {
                            $montant_new = $montant - 1000;
                            $montant = 1000;
                        }
                        else {
                            ($montant_new = 0);
                        }
                        $facture = array(
                            'montant' => number_format($montant, 2, '.', ''),
                            'id_user' => $facture_cli->id_users,
                            'jour_prelevement' => $info_user[0]->jour_prelevement,
                            'id_mandat' => $id_mandat,
                            'date' => date("m-Y", strtotime($facture_cli->date_commande))
                        );

                        $data['facture_slimpay'][$key2] = $facture;

                        $montant = $montant_new;
                        $key2++;
                    }

                    // Affichage
                    $data['facture'][$key] = array(
                        $facture_cli->nom_magasin,
                        $facture_cli->nom_societe,
                        $facture_cli->id_users,
                        date("m-Y", strtotime($facture_cli->date_commande)),
                        number_format($facture_cli->total, 2, '.', ' '),
                        $facture_cli->tarif_liv
                    );

//                    if ($id_mandat >= 555) {
//                        $mandat = getMandat('OPTR' . $id_mandat . 'BIS');
//                    }
//                    else {
//                        $mandat = getMandat('OPTR' . $id_mandat);
//                        if (!$mandat) {
//                            $mandat = getMandat('OPTR' . $id_mandat . 'BIS');
//                        }
//                    }

                    $paiement = array(
//                        'mandat_status' => $mandat,
                        'mois' => date("m-Y", strtotime($facture_cli->date_commande)),
                        'magasin' => $facture_cli->id_users,
                        'mandat' => $id_mandat,
                        'total' => number_format($facture_cli->total * (1 + $info_user[0]->percent_tva / 100), 2, '.', ''),
                    );

                    // Affichage
                    $data['total'] += $facture_cli->total * (1 + $info_user[0]->percent_tva / 100);
                    $data['paiement'][$key] = $paiement;


                }

        /*
                    echo '<pre>';
                    var_dump($facture_client);
                    echo '</pre>';

                    echo '<pre>';
                    var_dump($facture);
                    echo '</pre>';

                    echo '<pre>';
                    var_dump($paiement);
                    echo '</pre>';
            */
        echo '<pre>';
        print_r($data);
        echo '</pre>';die;
        $this->load->view('admin/payment_process', $data);
//			echo '--------------------------------
//			<pre>';
//			var_dump($data);
//			echo '</pre>';
            
        }


    public function payment_process(){

        if(date('j') == 1) {


            $this->load->helper('slimpay');
            $this->load->model('m_commande');
            $this->load->model('m_users');

            $date = date('m-Y', strtotime('last day of last month'));
            //$date = date('m-Y', time());
//            $date = "09-2023";

            $factures = $this->db->select('magasin')->where('mois', $date)->get('paiements')->result();

            $current = array();

            foreach ($factures as $f) {
                $current[] = $f->magasin;
            }

            if (empty($current)) {
                $current = null;
            }


            $facture_client = $this->m_commande->getAllCommandeByMonthAndUser($date, $current);
//            echo '<pre>';
            //print_r($facture_client);die;

            $data = array();

            $data['status'] = $current;
            $data['total'] = 0;
            $key2 = 0;

            if ($facture_client !== false)
                foreach ($facture_client as $key => $facture_cli) {
                    $facture_cli->date_commande = $facture_cli->y_m_commande;
                    $sql = 'SELECT tarif_packaging FROM users WHERE id_users = ' . $facture_cli->id_users;
                    $get_packaging = $this->db->query($sql);
                    $packaging = $get_packaging->result();

                    $id_mandat = $this->db->select('id_mandat')->where('id_users', $facture_cli->id_users)->get('users')->result();
                    $id_mandat = $id_mandat[0]->id_mandat;
                    if ($id_mandat == 0) {
                        $id_mandat = $facture_cli->id_users;
                    }

                    $remiseSpecial = $this->m_remise->getTotalRemisesByUser($facture_cli->id_users, $facture_cli->total + $facture_cli->reduction);
                    $facture_cli->total += $packaging[0]->tarif_packaging - $remiseSpecial;

                    $dep = substr($facture_cli->cp, 0, -3);

                    $info_user = $this->m_users->getUserById($facture_cli->id_users);

                    $montant = number_format($facture_cli->total * (1 + $info_user[0]->percent_tva / 100), 2, '.', '');

                    while ($montant > 0) {
                        if ($montant > 1000) {
                            $montant_new = $montant - 1000;
                            $montant = 1000;
                        }
                        else {
                            ($montant_new = 0);
                        }
                        $facture = array(
                            'montant' => number_format($montant, 2, '.', ''),
                            'id_user' => $facture_cli->id_users,
                            'jour_prelevement' => $info_user[0]->jour_prelevement,
                            'id_mandat' => $id_mandat,
                            'date' => date("m-Y", strtotime($facture_cli->date_commande))
                        );

                        $data['facture_slimpay'][$key2] = $facture;




                        if ($id_mandat >= 555) {
                            $mandat = getMandat('OPTR' . $id_mandat . 'BIS');
                        }
                        else {
                            $mandat = getMandat('OPTR' . $id_mandat);
                            if (!$mandat) {
                                $mandat = getMandat('OPTR' . $id_mandat . 'BIS');
                            }
                        }
                        $facture['reference_mandat'] = $mandat['reference'];
                        $paiement = array(
                            'mandat_status' => $mandat,
                            'mois' => date("m-Y", strtotime($facture_cli->date_commande)),
                            'magasin' => $facture_cli->id_users,
                            'mandat' => $id_mandat,
                            'total' => number_format($montant, 2, '.', ''),
//                            'total' => number_format(($facture_cli->total + ($facture_cli->total * 0.2)), 2, '.', ''),
                        );

                        // Affichage
                        $data['total'] += $montant;
                        $data['paiement'][$key2] = $paiement;

                        // Mandat consultable chez Slimpay
                        if ($mandat != false) {
                            // Mandat activ é
                            if ($mandat['state'] == 'active') {

                                // Ordre de prélèvement créé
                                if ($payment = createDebit($facture)) {

                                    $paiement['debit_id'] = $payment['id'];
                                    $paiement['status'] = $payment['executionStatus'];
                                    $paiement['execution_date'] = $payment['executionDate'];
                                    $paiement['creation_date'] = $payment['dateCreated'];

                                    $data['status'][$key2] = $payment;

                                } else {
                                    $paiement['status'] = 'slimpay_error';
                                }

                            } else {
                                $paiement['status'] = 'slimpay_inactive';
                            }
                        } else {
                            $paiement['status'] = 'slimpay_false';
                        }

                        $montant = $montant_new;
                        $key2++;

                        // Unset mandat pour enregistrer
                        unset($paiement['mandat_status']);
                    }

//                    $facture = array(
//                        'montant' => number_format($facture_cli->total * (1 + $info_user[0]->percent_tva / 100), 2, '.', ''),
//                        'id_user' => $facture_cli->id_users,
//                        'jour_prelevement' => $info_user[0]->jour_prelevement,
//                        'id_mandat' => $id_mandat,
//                        'date' => date("m-Y", strtotime($facture_cli->date_commande))
//                    );
//
//                    $data['facture_slimpay'][$key] = $facture;

                    // Affichage
                    $data['facture'][$key] = array(
                        $facture_cli->nom_magasin,
                        $facture_cli->nom_societe,
                        $facture_cli->id_users,
                        date("m-Y", strtotime($facture_cli->date_commande)),
                        number_format($facture_cli->total, 2, '.', ' '),
                        $facture_cli->tarif_liv
                    );

//                    if ($id_mandat >= 555) {
//                        $mandat = getMandat('OPTR' . $id_mandat . 'BIS');
//                    }
//                    else {
//                        $mandat = getMandat('OPTR' . $id_mandat);
//                        if (!$mandat) {
//                            $mandat = getMandat('OPTR' . $id_mandat . 'BIS');
//                        }
//                    }
//                    $facture['reference_mandat'] = $mandat['reference'];
//                    $paiement = array(
//                        'mandat_status' => $mandat,
//                        'mois' => date("m-Y", strtotime($facture_cli->date_commande)),
//                        'magasin' => $facture_cli->id_users,
//                        'mandat' => $id_mandat,
//                        'total' => number_format(($facture_cli->total + ($facture_cli->total * 0.2)), 2, '.', ''),
//                    );
//
//                    // Affichage
//                    $data['total'] += $facture_cli->total + ($facture_cli->total * 0.2);
//                    $data['paiement'][$key] = $paiement;
//
//
//                    // Mandat consultable chez Slimpay
//                    if ($mandat != false) {
//                        // Mandat activ é
//                        if ($mandat['state'] == 'active') {
//
//                            // Ordre de prélèvement créé
//                            if ($payment = createDebit($facture)) {
//
//                                $paiement['debit_id'] = $payment['id'];
//                                $paiement['status'] = $payment['executionStatus'];
//                                $paiement['execution_date'] = $payment['executionDate'];
//                                $paiement['creation_date'] = $payment['dateCreated'];
//
//                                $data['status'][$key] = $payment;
//
//                            } else {
//                                $paiement['status'] = 'slimpay_error';
//                            }
//
//                        } else {
//                            $paiement['status'] = 'slimpay_inactive';
//                        }
//                    } else {
//                        $paiement['status'] = 'slimpay_false';
//                    }
//
//
//                    // Unset mandat pour enregistrer
//                    unset($paiement['mandat_status']);

                 //   $this->db->insert('paiements', $paiement);

                }
            $this->load->view('admin/payment_process', $data);

        }

    }

    public function update_commande(){
		$this->load->model('m_commande');
		
        if(($commandes = $this->m_commande->update_etat_commande()) !== false)
            if(isset($commandes['error']))
                log_message('error', "An error occured : ".$commandes['error']);
            else
                log_message('debug', var_dump($commandes));
        else
            log_message('debug', 'No update needed');
    }


    /*private function facture_mensuelle() {

        $this->load->model('m_commande');
        $this->load->model('m_users');

        $date = date('m-Y', strtotime('last day of last month'));
        $dateY = date('Y-m', strtotime('last day of last month'));
        $datemonth = date('m', strtotime('last day of last month'));

        $facture_client = $this->m_commande->getAllCommandeByMonthAndUser($date);


        if($facture_client !== false){
            $generate_pdf = true;
            $data = array();

            $month = array('01' => 'Janvier','02' => 'Février', '03' => 'Mars', '04' => 'Avril', '05' => 'Mai', '06' => 'Juin',
                '07' => 'Juillet', '08' => 'Août', '09' => 'Septembre', '10' => 'Octobre', '11' => 'Novembre', '12' => 'Décembre');


            foreach($facture_client as $key => $facture_cli){
                $piece_jointe = $this->generer_pdf_facture('facture', $dateY ,$facture_cli->id_users,false);
                $piece_jointe = $this->config->item('directory_pdf')."/".$piece_jointe;
                $user = $this->m_users->getUserById($facture_cli->id_users);
                $data['email'] = $user[0]->email;
                $mess_txt = "<html><head></head><body>Madame, Monsieur <br><br> Vous trouverez en pièce jointe de ce mail votre facture du mois de ".$month[$datemonth].".<br><br> Sachez que vous pouvez à tout moment la télécharger dans votre espace client dans l'onglet \"Mes factures\". <br><br>L'équipe OptiEyes.</body></html>";
                $subjet_txt = "Facture Optieyes ".$month[$datemonth]." ".date('Y', strtotime('last day of last month'));
                $this->mail($data,$mess_txt,true,$subjet_txt,$piece_jointe);

                if(file_exists($piece_jointe))
                    unlink($piece_jointe);
            }
        }

    }*/

    public function user_sessions_email() {

        $this->load->model('m_users');

        $sessions = $this->m_users->getLastDaySessions();

        $message = '<html><head></head><body><b>Connexions pour la journée du '.date('d/m/Y', strtotime('yesterday')).'</b><br /><br />';

        $orders = array();

        if($sessions) {
            foreach ($sessions as $s) {
                $message .= 'Magasin <strong>'.$s->user_id.'</strong> -  Connecté <strong>'.$s->login_count.'</strong> fois, ';
                $message .= ($s->has_order ? 'A commandé' : 'N\'a pas commandé');
                $message .= '<br />';
            }
        }


        $data['email'] = 'optieyescommande@gmail.com';
        $data['email_cc'] = 'samuel.zibi@gmail.com';

        $title = 'Connexions de la journée';

        if($this->mail($data, $message, true, $title)) {
            echo 'ok';
        }

    }

    /* WTF */

    public function generation_pdf_commande_journaliere($date=false,$magasin = 1,$envoi_chine = 0){

      $this->load->model('m_commande');

      $disableEmail = false;
      
      if($date == 1 && ($magasin == 1 || $magasin == 2) && $envoi_chine == 0) {
          $disableEmail = true;
      }

      if($date){
        $date = date("Y-m-d H:i:s");
        $return = "";
      }
      else
        $date = date("Y-m-d 21:00:00");
        
      if($envoi_chine == 1){
        $date = date('Y-m-d',strtotime('-1 days'));
      }
      
		
      $data_file['commande_journaliere'] = $this->m_commande->getCommandeJournalierePDF($date,$magasin,$envoi_chine);
      
      $data_file['envoi_chine'] = $envoi_chine;

      if($magasin == 3 && $envoi_chine == 0) {

          $data_file['commande_journaliere'] = $this->m_lens->getDailyOrders();
		  
      }
	  if($magasin == 4 && $envoi_chine == 0) {

          $data_file['commande_journaliere'] = $this->m_montures->getDailyOrders();
		  //var_dump($data_file['commande_journaliere']);
      }

      if($data_file['commande_journaliere'] !== false){
      
       $this->load->model('m_users');
       
        $user = $this->m_users->getUserById(1);
        
        $data['email_cc'] = array('testproxicom@gmail.com');
        
        if($date && $magasin == 2 && $envoi_chine == 0){

            $data_etiquette = array();
            $listId = "";
            
            foreach($data_file['commande_journaliere'] as $commande){

              $info_commande = json_decode($commande->information_commande, true);
            
                $name = $name_gauche = "";

      
                if(isset($info_commande['verre']['diametre']))
                  $name = $commande->libelle_verre." ".$info_commande['verre']['diametre'];
                
                if(isset($info_commande['verre']['diametre_gauche']))
                  $name_gauche = $commande->libelle_verre." ".$info_commande['verre']['diametre_gauche'];
                  
                if(isset($info_commande['verre']['correction_droit']['diametre']))
                		$name = $commande->libelle_verre." ". $info_commande['verre']['correction_droit']['diametre'];
                		
                if(isset($info_commande['verre']['correction_gauche']['diametre']))
                		$name_gauche = $commande->libelle_verre." ". $info_commande['verre']['correction_gauche']['diametre'];
               
               
                if(($name != "" && !isset($list_verre[$name])) || ($name_gauche != "" && !isset($list_verre[$name_gauche]))){
                  if((isset($info_commande['verre']['diametre']) || isset($info_commande['verre']['correction_droit']['diametre'])) && !isset($list_verre[$name]))
                    $list_verre[$name] = array();
                  
                  if((isset($info_commande['verre']['diametre_gauche']) || isset($info_commande['verre']['correction_gauche']['diametre'])) && !isset($list_verre[$name_gauche]))
                    $list_verre[$name_gauche] = array();
                }
               
               if(isset($info_commande['verre']['correction_droit'])){
                  $correction_droit = $info_commande['verre']['correction_droit']['sphere'].' '.$info_commande['verre']['correction_droit']['cylindre'];
                   
                 if(!isset($list_verre[$name][$correction_droit])){
                      $list_verre[$name][$correction_droit] = array();
                      array_push( $list_verre[$name][$correction_droit],$commande->id_commande."_droit");
                 } else {
                 
                    if(!in_array($commande->id_commande."_droit",$list_verre[$name][$correction_droit]))
                      array_push( $list_verre[$name][$correction_droit],$commande->id_commande."_droit") ;
                      
                  }
               }
               
               if(isset($info_commande['verre']['correction_gauche'])) {  
                  $correction_gauche = $info_commande['verre']['correction_gauche']['sphere'].' '.$info_commande['verre']['correction_gauche']['cylindre'];
           
                  if(isset($list_verre[$name_gauche][$correction_gauche])){
                        if(!in_array($commande->id_commande."_gauche",$list_verre[$name_gauche][$correction_gauche]))
                          array_push( $list_verre[$name_gauche][$correction_gauche],$commande->id_commande."_gauche");
                   } else {
                        $list_verre[$name_gauche][$correction_gauche] = array();
                        array_push( $list_verre[$name_gauche][$correction_gauche],$commande->id_commande."_gauche");
                   }
                   
                
                }
            }
            
            $current_id = "";
            foreach($list_verre as $nam){
              foreach($nam as $correc){
                foreach($correc as $commande){
                
                 list($id_commande,$cote) = explode("_",$commande);
                 
                    if($current_id != $id_commande){
                      if($listId != ""){
                        $listId .= ",";
                      }
                      
                      $current_id = $id_commande;
                      $listId .= $id_commande;
                    }
                    
                  $data_etiquette['id_commande'] = $id_commande;
                  $data_etiquette['cote'] = $cote;
                  
                  $this->m_commande->ajouter_etiquette($data_etiquette);
                }
              }
            }
            $data_etiquette = array();
           
            $data_etiquette['etiquette'] = $this->m_commande->getEtiquetteSend($listId);
            $data_etiquette['colonne'] = 1;
            $data_etiquette['ligne'] = 1;

            // A STOCKER
            
            $piece_jointe = $this->config->item('directory_pdf')."/".$this->pdf('etiquette',$data_etiquette, ''.date('Y_m_d_H-i-s'));

            //$this->pdf('etiquette',$data_etiquette, ''.date('d-m-H\hi'));


            $data['email'] = $user[0]->email;
            $data['magasin'] = $magasin;
            $data['envoi_chine'] = $envoi_chine;


            $mess_txt = "Ci joints les étiquettes des commandes : ".$listId;
            $subjet_txt = "Etiquette de stock ";
            $html = false;

            if($disableEmail == false) {
                $this->mail($data, $mess_txt, $html, $subjet_txt, $piece_jointe);
            }

            /*$listIds = explode(",",$listId);

            $data_delete = array();

            foreach($listIds as $id){
              $data_delete['id_commande'] = $id;
              $data_delete['delete'] = 1;

              $this->m_commande->ajouter_etiquette($data_delete);
            }*/

            //unlink($piece_jointe);
        }


      if($envoi_chine == 0) {
          $this->m_commande->updateCommandeSend($date, $magasin);
      }

        if($magasin == 1){
          $piece_jointe = $this->config->item('directory_pdf')."/".$this->pdf('commande_journaliere',$data_file, ''.date('Y_m_d_H-i-s'));
          $mess_txt = "Ci joints les commandes pour la journée du ".date("d/m/Y");
          $subjet_txt = "Commande de fabrication journalière";
          $html = false;
          $data['email'] = $user[0]->email;

        } else if($magasin == 2 && $envoi_chine == 0 ){
           //  A STOCKER
          $piece_jointe = $this->config->item('directory_pdf')."/".$this->pdf('commande_stock_journaliere',$data_file, ''.date('Y_m_d_H-i-s'));
          //$this->pdf('commande_stock_journaliere',$data_file, ''.date('d-m-H\hi'));
          $mess_txt = "Ci joints les commandes stock ";
          $subjet_txt = "Commande de stock journalière";
          $html = false;
          $data['email'] = $user[0]->email;

        } else if($magasin == 3 && $envoi_chine == 0 ){


            $piece_jointe = $this->config->item('directory_pdf')."/".$this->pdf('commande_lentilles_journaliere',$data_file, ''.date('Y_m_d_H-i-s'));
            $mess_txt = "Ci joints les commandes lentilles ";
            $subjet_txt = "Commande de lentilles journalière";
            $html = false;
            $data['email'] = $user[0]->email;

        } else if($magasin == 4 && $envoi_chine == 0 ){


            $piece_jointe = $this->config->item('directory_pdf')."/".$this->pdf('commande_montures_journaliere',$data_file, ''.date('Y_m_d_H-i-s'));
            $mess_txt = "Ci joints les commandes montures ";
            $subjet_txt = "Commande de montures journalière";
            $html = false;
            $data['email'] = $user[0]->email;

        }
		  else if($magasin == 2 && $envoi_chine == 1){


         $piece_jointe = $this->config->item('directory_pdf')."/".$this->pdf('commande_stock_journaliere',$data_file, ''.date('Y_m_d_H-i-s'));
         
          $mess_txt = "<html>
                        <head></head>
                        <body>
                        PLEASE, USE THE EXPRESS SERVICE OF UPS AND TRY TO SEND ALL THIS LENSES TODAY FOR A PICK UP FROM UPS AT 6 PM MAXIMUM.
                        IF YOU HAVE NOT GOT SOME LENSES IN STOCK, MADE THEM. THE PRICE WILL MUST BE ACCORDING TO OUR TABLE STOCK WE MADE TOGETHER.
                        CALL UPS BEFORE 5 PM MAXIMUM FOR THE PICK UP. MY ACCOUNT NUMBER IS R934Y9. I PAYE SHIPMENT AND TAXES.
                        FINALY, SEND ME INVOICES OF LENSES EVERY WEEK.<br><br>
                        HERE IS MY ADRESS<br><br>
                        OPTIEYES FRANCE<br>
                        LOT NUMERO 21<br>
                        PARC VALAD<br>
                        2 RUE DE LA NOUE GUIMANTE<br>
                        77400 SAINT THIBAULT DES VIGNES<br>
                        FRANCE<br>
                        +33618072958 MAXIME<br>
                        +33662599006 JOEL<br><br>
                        DONT FORGET TO SEND ME BY MAIL THE TRACKING NUMBER OF THE BOX YOU SEND TODAY.<br><br>
                        THANK YOU.
                        </body>
                      </html>";


              $subjet_txt = "Order of " . date('m/d/Y',strtotime('-1 days')) . " day / DARMON Optieyes France";
              $html = true;
		  
            array_push($data['email_cc'],$user[0]->email);
            
            $data['email'] = "kaciaoptic@hotmail.com";


        }
        
        $data['magasin'] = $magasin;
        $data['envoi_chine'] = $envoi_chine;

        if($disableEmail == false) {
            // disabled ATM, not used anymore + flooded mailer service, full refact in the next major version
            $this->mail($data, $mess_txt, $html, $subjet_txt, $piece_jointe);
            log_message('debug', 'Mail commande journaliere send');
        }

        
        //unlink($piece_jointe);
      }
      else if(isset($return)){
        echo "no_order";
      }
    }

    public function check_tva(){
        $this->load->model('m_taux_tva');

        $data['taux_tva'] = $this->m_taux_tva->get_tva();
        $data['nouveau_taux'] = $this->m_taux_tva->get_nouveau_taux_tva();

        if($data['taux_tva'] != $data['nouveau_taux']){
			log_message('debug', 'Update TVA '.$data['taux_tva'].' to '.$data['nouveau_taux']);
            $data['taux_tva'] = $data['nouveau_taux'];
            $this->m_taux_tva->update($data);
        }
    }
	
	public function resetNbDayOrder(){
		$this->load->model('m_commande');
		$this->m_commande->resetNbDayOrder();
		$this->m_commande->resetEtiquette();
	}
	
	public function generer_factures($date){
		$this->generer_all_pdf_facture("factures",$date);
	}
  
  public function generer_grille_stock(){
		$this->pdf_grille_stock();
	}
  
  public function getCommandeStockJournalier(){
   $this->load->model('m_commande');
    $data_file['commande_stock'] = $this->m_commande->getCommandeStockJournalier();
    
    $piece_jointe = $this->config->item('directory_pdf')."/".$this->pdf('commande_stock_journaliere',$data_file);
    
    echo $piece_jointe;
	  
    
			/*$data['email'] = $user[0]->email;
			$data['email_cc'] = array('proxicommercefr@gmail.com');
			$mess_txt = "Ci joints les commandes stock pour la journée du ".date('d/m/Y',strtotime("-1 days"));
			$subjet_txt = "Commande stock journalière";
			
			$this->mail($data,$mess_txt,false,$subjet_txt,$piece_jointe);
			
			log_message('debug', 'Mail commande stock journaliere send');*/
			
			//unlink($piece_jointe);
    
  }
}
?>
