<?php
class manuel extends MY_Controller {

    public function __construct(){
        parent::__construct();
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

    public function commande($date=false,$magasin = 1,$envoi_chine = 0){
        $this->load->model('m_commande');

        if($date){
            $date = date("Y-m-d H:i:s");
            $return = "";
        }
        else
            $date = date("Y-m-d 21:00:00");

        if($envoi_chine == 1){
            $date = date('Y-m-d',strtotime('-1 days'));
        }

        $data_file['commande_journaliere'] = $this->m_commande->getCommandeJournaliere($date,$magasin,$envoi_chine);
        $data_file['envoi_chine'] = $envoi_chine;

        if($data_file['commande_journaliere'] !== false){

            $this->load->model('m_users');

            $user = $this->m_users->getUserById(1);
            

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

                    if((isset($info_commande['verre']['correction_droit']) || isset($info_commande['verre']['correction_droit']['diametre']))){
                        $correction_droit = $info_commande['verre']['correction_droit']['sphere'].' '.$info_commande['verre']['correction_droit']['cylindre'];

                        if(!isset($list_verre[$name][$correction_droit])){
                            $list_verre[$name][$correction_droit] = array();
                            array_push( $list_verre[$name][$correction_droit],$commande->id_commande."_droit");
                        } else {

                            if(!in_array($commande->id_commande."_droit",$list_verre[$name][$correction_droit]))
                                array_push( $list_verre[$name][$correction_droit],$commande->id_commande."_droit") ;

                        }
                    }

                    if((isset($info_commande['verre']['correction_gauche']) || isset($info_commande['verre']['correction_gauche']['diametre']))) {
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

                //$piece_jointe = $this->config->item('directory_pdf')."/".$this->pdf('etiquette',$data_etiquette);
                $this->load->view('pdf/etiquette',$data_etiquette);




                /*$listIds = explode(",",$listId);
    
                $data_delete = array();
                 
                foreach($listIds as $id){
                  $data_delete['id_commande'] = $id;
                  $data_delete['delete'] = 1;
                  
                  $this->m_commande->ajouter_etiquette($data_delete);
                }*/


            }


            if($envoi_chine == 0)
                $this->m_commande->updateCommandeSend($date,$magasin);



            if($magasin == 1){

                //$piece_jointe = $this->config->item('directory_pdf')."/".$this->pdf('commande_journaliere',$data_file);
                $this->load->view('pdf/commande_journaliere',$data_file);

            } else if($magasin == 2 && $envoi_chine == 0 ){

                //$piece_jointe = $this->config->item('directory_pdf')."/".$this->pdf('commande_stock_journaliere',$data_file);
                $this->load->view('pdf/commande_stock_journaliere',$data_file);

            } else if($magasin == 2 && $envoi_chine == 1){

                //$piece_jointe = $this->config->item('directory_pdf')."/".$this->pdf('commande_stock_journaliere',$data_file);
                $this->load->view('pdf/commande_stock_journaliere',$data_file);

            }

        }
        else if(isset($return)){
            echo "no_order";
        }
    }
	
	public function commande_sans_teinte($date=false,$magasin = 1,$envoi_chine = 0){
        $this->load->model('m_commande');

        if($date){
            $date = date("Y-m-d H:i:s");
            $return = "";
        }
        else
            $date = date("Y-m-d 21:00:00");

        if($envoi_chine == 1){
            $date = date('Y-m-d',strtotime('-1 days'));
        }

        $data_file['commande_journaliere'] = $this->m_commande->getCommandeJournalierekacia($date,$magasin,$envoi_chine);
		//var_dump($data_file['commande_journaliere']);
        $data_file['envoi_chine'] = $envoi_chine;

        if($data_file['commande_journaliere'] !== false){

            $this->load->model('m_users');

            $user = $this->m_users->getUserById(1);
            

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

                    if((isset($info_commande['verre']['correction_droit']) || isset($info_commande['verre']['correction_droit']['diametre']))){
                        $correction_droit = $info_commande['verre']['correction_droit']['sphere'].' '.$info_commande['verre']['correction_droit']['cylindre'];

                        if(!isset($list_verre[$name][$correction_droit])){
                            $list_verre[$name][$correction_droit] = array();
                            array_push( $list_verre[$name][$correction_droit],$commande->id_commande."_droit");
                        } else {

                            if(!in_array($commande->id_commande."_droit",$list_verre[$name][$correction_droit]))
                                array_push( $list_verre[$name][$correction_droit],$commande->id_commande."_droit") ;

                        }
                    }

                    if((isset($info_commande['verre']['correction_gauche']) || isset($info_commande['verre']['correction_gauche']['diametre']))) {
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

                //$piece_jointe = $this->config->item('directory_pdf')."/".$this->pdf('etiquette',$data_etiquette);
                $this->load->view('pdf/etiquette',$data_etiquette);




                /*$listIds = explode(",",$listId);
    
                $data_delete = array();
                 
                foreach($listIds as $id){
                  $data_delete['id_commande'] = $id;
                  $data_delete['delete'] = 1;
                  
                  $this->m_commande->ajouter_etiquette($data_delete);
                }*/


            }


            if($envoi_chine == 0)
                $this->m_commande->updateCommandeSend($date,$magasin);



            if($magasin == 1){

                //$piece_jointe = $this->config->item('directory_pdf')."/".$this->pdf('commande_journaliere',$data_file);
                $this->load->view('pdf/commande_journaliere',$data_file);

            } else if($magasin == 2 && $envoi_chine == 0 ){

                //$piece_jointe = $this->config->item('directory_pdf')."/".$this->pdf('commande_stock_journaliere',$data_file);
                $this->load->view('pdf/commande_stock_journaliere',$data_file);

            } else if($magasin == 2 && $envoi_chine == 1){

                //$piece_jointe = $this->config->item('directory_pdf')."/".$this->pdf('commande_stock_journaliere',$data_file);
                $this->load->view('pdf/commande_stock_journaliere_sans_teinte',$data_file);

            }

        }
        else if(isset($return)){
            echo "no_order";
        }
    }
	
	public function commande_que_teinte($date=false,$magasin = 1,$envoi_chine = 0){
        $this->load->model('m_commande');

        if($date){
            $date = date("Y-m-d H:i:s");
            $return = "";
        }
        else
            $date = date("Y-m-d 21:00:00");

        if($envoi_chine == 1){
            $date = date('Y-m-d',strtotime('-1 days'));
        }

        $data_file['commande_journaliere'] = $this->m_commande->getCommandeJournaliere($date,$magasin,$envoi_chine);
        $data_file['envoi_chine'] = $envoi_chine;

        if($data_file['commande_journaliere'] !== false){

            $this->load->model('m_users');

            $user = $this->m_users->getUserById(1);
            

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

                    if((isset($info_commande['verre']['correction_droit']) || isset($info_commande['verre']['correction_droit']['diametre']))){
                        $correction_droit = $info_commande['verre']['correction_droit']['sphere'].' '.$info_commande['verre']['correction_droit']['cylindre'];

                        if(!isset($list_verre[$name][$correction_droit])){
                            $list_verre[$name][$correction_droit] = array();
                            array_push( $list_verre[$name][$correction_droit],$commande->id_commande."_droit");
                        } else {

                            if(!in_array($commande->id_commande."_droit",$list_verre[$name][$correction_droit]))
                                array_push( $list_verre[$name][$correction_droit],$commande->id_commande."_droit") ;

                        }
                    }

                    if((isset($info_commande['verre']['correction_gauche']) || isset($info_commande['verre']['correction_gauche']['diametre']))) {
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

                //$piece_jointe = $this->config->item('directory_pdf')."/".$this->pdf('etiquette',$data_etiquette);
                $this->load->view('pdf/etiquette',$data_etiquette);




                /*$listIds = explode(",",$listId);
    
                $data_delete = array();
                 
                foreach($listIds as $id){
                  $data_delete['id_commande'] = $id;
                  $data_delete['delete'] = 1;
                  
                  $this->m_commande->ajouter_etiquette($data_delete);
                }*/


            }


            if($envoi_chine == 0)
                $this->m_commande->updateCommandeSend($date,$magasin);



            if($magasin == 1){

                //$piece_jointe = $this->config->item('directory_pdf')."/".$this->pdf('commande_journaliere',$data_file);
                $this->load->view('pdf/commande_journaliere',$data_file);

            } else if($magasin == 2 && $envoi_chine == 0 ){

                //$piece_jointe = $this->config->item('directory_pdf')."/".$this->pdf('commande_stock_journaliere',$data_file);
                $this->load->view('pdf/commande_stock_journaliere',$data_file);

            } else if($magasin == 2 && $envoi_chine == 1){

                //$piece_jointe = $this->config->item('directory_pdf')."/".$this->pdf('commande_stock_journaliere',$data_file);
                //$this->load->view('pdf/commande_stock_journaliere_que_teinte',$data_file);
				
				$piece_jointe = $this->config->item('directory_pdf')."/".$this->pdf('commande_stock_journaliere_que_teinte',$data_file, ''.date('d_m_H-i-s'));
         
				  $mess_txt = "<html>
								<head></head>
								<body>
								Verres teintés à commander en piece jointe.
								Merci
								</body>
							  </html>";


					  $subjet_txt = "Verres teintés à commander " . date('m/d/Y',strtotime('-1 days')) . " day / Optieyes France";
					  $html = true;

					//array_push($data['email_cc'],$user[0]->email);

					$data['email'] = "optieyescommande@gmail.com";
					$this->mail($data, $mess_txt, $html, $subjet_txt, $piece_jointe);

            }

        }
        else if(isset($return)){
            echo "no_order";
        }
    }

	public function commande_voir_teinte($date=false,$magasin = 1,$envoi_chine = 0){
        $this->load->model('m_commande');

        if($date){
            $date = date("Y-m-d H:i:s");
            $return = "";
        }
        else
            $date = date("Y-m-d 21:00:00");

        if($envoi_chine == 1){
            $date = date('Y-m-d',strtotime('-1 days'));
        }

        $data_file['commande_journaliere'] = $this->m_commande->getCommandeJournaliere($date,$magasin,$envoi_chine);
        $data_file['envoi_chine'] = $envoi_chine;

        if($data_file['commande_journaliere'] !== false){

            $this->load->model('m_users');

            $user = $this->m_users->getUserById(1);
            

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

                    if((isset($info_commande['verre']['correction_droit']) || isset($info_commande['verre']['correction_droit']['diametre']))){
                        $correction_droit = $info_commande['verre']['correction_droit']['sphere'].' '.$info_commande['verre']['correction_droit']['cylindre'];

                        if(!isset($list_verre[$name][$correction_droit])){
                            $list_verre[$name][$correction_droit] = array();
                            array_push( $list_verre[$name][$correction_droit],$commande->id_commande."_droit");
                        } else {

                            if(!in_array($commande->id_commande."_droit",$list_verre[$name][$correction_droit]))
                                array_push( $list_verre[$name][$correction_droit],$commande->id_commande."_droit") ;

                        }
                    }

                    if((isset($info_commande['verre']['correction_gauche']) || isset($info_commande['verre']['correction_gauche']['diametre']))) {
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

                //$piece_jointe = $this->config->item('directory_pdf')."/".$this->pdf('etiquette',$data_etiquette);
                $this->load->view('pdf/etiquette',$data_etiquette);




                /*$listIds = explode(",",$listId);
    
                $data_delete = array();
                 
                foreach($listIds as $id){
                  $data_delete['id_commande'] = $id;
                  $data_delete['delete'] = 1;
                  
                  $this->m_commande->ajouter_etiquette($data_delete);
                }*/


            }


            if($envoi_chine == 0)
                $this->m_commande->updateCommandeSend($date,$magasin);



            if($magasin == 1){

                //$piece_jointe = $this->config->item('directory_pdf')."/".$this->pdf('commande_journaliere',$data_file);
                $this->load->view('pdf/commande_journaliere',$data_file);

            } else if($magasin == 2 && $envoi_chine == 0 ){

                //$piece_jointe = $this->config->item('directory_pdf')."/".$this->pdf('commande_stock_journaliere',$data_file);
                $this->load->view('pdf/commande_stock_journaliere',$data_file);

            } else if($magasin == 2 && $envoi_chine == 1){

                //$piece_jointe = $this->config->item('directory_pdf')."/".$this->pdf('commande_stock_journaliere',$data_file);
                $this->load->view('pdf/commande_stock_journaliere_que_teinte',$data_file);

            }

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