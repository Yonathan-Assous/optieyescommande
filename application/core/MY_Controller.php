<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	var $version = "";
    var $data = "";
    var $dirPdf = "pdf";

    var $lens_config = array(
        'sides' => array(
            'right' => 'Droit',
            'left' => 'Gauche',
        ),
        'attrs' => array(
            'sph' => 'Sphère',
            'cyl' => 'Cylindre',
            'axe' => 'Axe',
            'ray' => 'Rayon',
            'dia' => 'Diamètre',
            'add' => 'Progression',
            'col' => 'Couleur',
            'nd' => 'N/D'
        )
    );
	
	var $montures_config = array(
        
    );
	
	public function __construct(){
        parent::__construct();
        $this->load->helper('url');
		
        $this->load->model('m_users');
        $this->load->model('m_verres');
        $this->load->model('m_lens');
		$this->load->model('m_montures');
        $this->load->model('m_commande');
        $this->load->model('m_generation_verre');
        $this->load->model('m_type_generation_verre');
        $this->load->model('m_grille_fabrication');
        $this->load->model('m_facture_reduction');
        $this->load->model('m_taux_tva');
        $this->load->model('m_grille_tarifaire');
        $this->load->model('m_grille_stock');
        $this->load->model('m_config');
		$this->load->model('m_passer_commande_verre');
        $this->load->model('m_traitement');
        $this->load->model('m_log');
        $this->load->model('m_teinte');
        $this->load->model('m_teledetourage');
        $this->load->model('m_remise');
        $this->load->model('m_intitule_bl');
        $this->load->model('m_type_verre_solaire');
        $this->load->model('m_lenses');
        $this->load->model('m_lens_option');
        $this->load->model('m_verres_stock');
        $this->load->model('m_bl_conditions');

		
		if($this->session->userdata('taux_tva') === false){
			$taux_tva = $this->m_taux_tva->get_tva();
			$this->session->set_userdata('taux_tva', (($taux_tva- 1) * 100));
		}
	}

	public function pdf($file_pdf,$data,$data_name_custom_file="",$stream=false, $orientation = 'portrait', $customsize = false){

        $this->load->helper(array('dompdf', 'file'));

        if($file_pdf == "bon_livraison" || $file_pdf == 'bon_livraison_lentille' || $file_pdf == 'bon_livraison_montures'){
          $file_output = $data[$file_pdf][0]->intitule_bl;
        } else {
          $file_output = $file_pdf;
        }

        /*if($file_pdf != 'bon_livraison_montures')
        {
            if($data_name_custom_file != "")
                    $file_output .= "_".$data_name_custom_file['date'];
        }*/



		if($file_pdf == 'commande_montures_journaliere' || $file_pdf == 'bon_livraison_montures' || $file_pdf =='etiquette_montures' || $file_pdf == 'bon_commande')
		{
			$file_output .= "_".date("Y_m_d_H-i-s");
		}
		else if($file_pdf == 'commande_journaliere' || $file_pdf == 'commande_stock_journaliere' || $file_pdf == 'etiquette' || $file_pdf == 'certificat_authenticite' || $file_pdf =='etiquette_fabrication')
		{
			if($data_name_custom_file != "")
				$file_output .= "_".$data_name_custom_file;
		}
		else
		{
			if($data_name_custom_file != "" && isset($data_name_custom_file['date']))
				$file_output .= "_".$data_name_custom_file['date'];
		}

        if(!$stream) {
            $file_output .= ".pdf";
        }

		//var_dump($data);
        //echo $this->dirPdf."/".$file_pdf;die;
        //print_r($data);die;

        $html = $this->load->view($this->dirPdf."/".$file_pdf, $data, true);
       // echo $html;
		//var_dump($data_name_custom_file);
     //   return;


        if($file_pdf == "factures" || $file_pdf == "grille_stock"){
          echo $html;
          return;
        }
        //echo $html;die;

        $data = pdf_create($html,$file_output,$stream, $orientation, $customsize);
        if(!$stream){
            file_put_contents($this->config->item('directory_pdf').'/'.$file_output, $data);
        }

        return $file_output;
    }

    public function mail($data,$mess_txt,$mess_html,$sujet_txt,$piece_jointe=""){

        $this->load->library('email');

      $this->email->clear(true);
      
        $config['mailtype'] = 'text';

      if($mess_html)
        $config['mailtype'] = 'html';

      $this->email->initialize($config);

      if(isset($data['magasin']) && $data['magasin'] == 2 && $data['envoi_chine'] == 1) {
          $this->email->from('noreply@optieyescommande.com', 'ORDER DARMON OPTIEYES FRANCE ' . date('m/d/Y', strtotime('-1 days')));
      }
      else {
          $this->email->from('noreply@optieyescommande.com', 'Optieyes Commande');
      }

      if(isset($data['email_from'])) {
          $this->email->from($data['email_from'], 'Crystal Commande');
      }
        switch($this->config->item('opti_env')) {
            case 'prod':
                $this->email->to($data['email']);

                if(isset($data['email_cc'])) {
                    $this->email->cc($data['email_cc']);
                }
                if(isset($data['email_cci'])) {
                    $this->email->bcc($data['email_cci']);
                }
                break;
            case 'local': case 'dev':
                $this->email->to('yonathan.optieyes@gmail.com');
                $this->email->from('yonathan.optieyes@gmail.com', 'Crystal Commande');
                //$this->email->cc('testproxicom@gmail.com');
                break;
            default:
                $this->email->to('yonathan.optieyes@gmail.com');
                $this->email->from('yonathan.optieyes@gmail.com', 'Crystal Commande');
        }


        if(isset($data['reply_to'])) {
            $this->email->from($data['reply_to'], 'Optieyes Commande');
            $this->email->reply_to($data['reply_to'], 'Optieyes Commande');
        }

      $this->email->subject($sujet_txt);
      $this->email->message($mess_txt);


      if(!empty($piece_jointe)) {

          if(is_array($piece_jointe)) {

              foreach($piece_jointe as $p => $j) {
                  $this->email->attach($j);
              }

          }
          else
          $this->email->attach($piece_jointe);
      }

            if($this->email->send()) {
                return true;
            }

            //log_message('debug', $this->email->print_debugger());

    }
	
	public function generer_pdf($file_pdf,$id_commande="",$send_mail = false){
        if ($this->session->userdata('logged_in') === true ||$this->session->userdata('is_admin') === true){

			$data = $this->session->userdata('data_user');
			$data['data_admin'] = $this->session->userdata('data_admin');

			if($file_pdf == 'bon_livraison_lentille') {
                $commande = $this->m_lens->getOrderById($id_commande);
                $data['lens'] = $this->m_lens->getLens($commande[0]->lens_id);
                $data['build'] = json_decode($commande[0]->information_commande, true);
			}
			elseif($file_pdf == 'bons_livraison_lentille') {
                $commande = $this->m_lens->getOrders(0, true);
                $data['commande'] = $commande;
            }
			elseif($file_pdf == 'bon_livraison_montures') {
                $commande = $this->m_montures->getOrderById($id_commande);
               // $data['montures'] = "test";//$this->m_montures->getMontures($commande[0]->montures_id);
                
				$data['montures'] = json_decode($commande[0]->information_commande, true);
			}
			elseif($file_pdf == 'bons_livraison_montures') {
                $commande = $this->m_montures->getOrders(0, true);
                $data['commande'] = $commande;
            }
            else {
                $commande = $this->m_commande->getCommandeById($id_commande);
            }

            if(!empty($commande)){
                if(($commande[0]->id_users == $data['user_info']->id_users) || $this->session->userdata('is_admin') === true){

                    if(!empty($commande[0]->libelle_verre_personnalise)){
                        $commande[0]->libelle_verre = $this->remplace_personnalisation_verre($commande[0]->libelle_verre,$commande[0]->libelle_verre_personnalise);
                    }
                    
                    if(!empty($commande[0]->trad_fr)){
                        $commande[0]->libelle_verre = $commande[0]->trad_fr;
                    }

                    if(isset($commande[0]->nouvel_intitule) && !empty($commande[0]->nouvel_intitule)){
                        $commande[0]->intitule_bl = $commande[0]->nouvel_intitule;
                    }

                    if(isset($commande[0]->date_bl) && !empty($commande[0]->date_bl)){
                        $commande[0]->date_commande = $commande[0]->date_bl;
                    }

                    if($this->session->userdata('is_admin') === true){
                        $user_info = $this->m_users->getUserById($commande[0]->id_users);
                        $data['user_info'] = $user_info[0];
                        $admin_info = $this->session->userdata('data_admin');
                        $data['data_admin']['admin_info'] = $admin_info['user_info'];
                    }

                    $info_commande = json_decode($commande[0]->information_commande,true);
				
					if(isset($info_commande['verre']['correction_droit']))
					{
						if(isset($info_commande['verre']['correction_droit']['teinte']) && $info_commande['verre']['correction_droit']['teinte'] != "")
							$data['teinteD'] = $this -> m_commande->getTeinteById($info_commande['verre']['correction_droit']['teinte']);
						if(isset($info_commande['verre']['correction_droit']['traitement']) && $info_commande['verre']['correction_droit']['traitement'] != "" && $info_commande['verre']['correction_droit']['traitement'] != "0")
							$data['traitementD'] = $this -> m_commande->getTraitementByCode($info_commande['verre']['correction_droit']['traitement']);
					}
					if(isset($info_commande['verre']['correction_gauche']))
					{	
						if(isset($info_commande['verre']['correction_gauche']['teinte']) && $info_commande['verre']['correction_gauche']['teinte'] != "")
							$data['teinteG'] = $this -> m_commande->getTeinteById($info_commande['verre']['correction_gauche']['teinte']);
						if(isset($info_commande['verre']['correction_gauche']['traitement']) && $info_commande['verre']['correction_gauche']['traitement'] != "" && $info_commande['verre']['correction_gauche']['traitement'] != "0")
							$data['traitementG'] = $this -> m_commande->getTraitementByCode($info_commande['verre']['correction_gauche']['traitement']);
					}

                    $data[$file_pdf] = $commande;
                    $data['pre_url'] = $this->config->item('pre_url');

                    if($file_pdf == "bon_livraison"){
                        $data_custom_file = "";
                    } else {
                        $data_custom_file = array('id_commande' => $commande[0]->id_commande);
                    }
					
					
					
					 //return $this->load->view('pdf/'.$file_pdf, $data,$data_custom_file, true);

                    if(!$send_mail)
                       return  $this->pdf($file_pdf,$data,$data_custom_file,true); // return $html;
                    else
						return $this->pdf($file_pdf,$data);

                    exit;
                }
            }

        }

        $this->redirect();
    }

    public function generer_pdf_facture($nom_fichier_pdf,$date,$id_users="",$stream = true){
        if($this->session->userdata('logged_in') === true || $this->session->userdata('is_admin') === true){
            $data = $this->session->userdata('data_user');
            $data['data_admin'] = $this->session->userdata('data_admin');
            $data['id_users'] =  !empty($id_users) ? $id_users : $data['user_info']->id_users;
            $data['date'] = $data['date_remise'] = $date;

            $commande = $this->m_commande->getAllCommandeByMonth($data);
//            echo '<pre>';
//            print_r($commande);die;
            $data['tarifPackaging'] = $this->m_users->getTarifPackaging($data['id_users']);

         //   var_dump($commande);
            $reduction = $this->m_facture_reduction->get_reduction($data);

            if(!empty($commande)){
                if(!empty($commande[0]->libelle_verre_personnalise) && !$this->session->userdata('is_admin')){
                    $commande[0]->generation_verre = $this->remplace_personnalisation_verre($commande[0]->generation_verre,$commande[0]->libelle_verre_personnalise);
                }

                $data[$nom_fichier_pdf] = $commande;

                $time = strtotime($data['date']);
                $shippings = $this->m_commande->getShippingsByMonth(date('m-Y', $time), $data['id_users']);

                if($shippings) {
                    $total_ships = $shippings->exp_matin + $shippings->exp_soir;
                }
                else {
                    $total_ships = 0;
                }

                $data['shippings']  = $total_ships;

                $data['pre_url'] = $this->config->item('pre_url');
                $data['date_facture'] = $date;

                if($this->session->userdata('is_admin') === true){
                    $data['pdf_admin'] = true;
                    $data_user = $this->m_users->getUserById($id_users);
                    $data['users_info'] = $data_user[0];
                }

                $data['taux_tva'] = isset($data['users_info']->percent_tva) ? $data['users_info']->percent_tva : $this->session->userdata('taux_tva');
                $data['reduction'] = !empty($reduction) ? $reduction : false;

                $data_custom_file = array('id_users' => $data['id_users'], 'date' => $date);
//                echo '<pre>';
//print_r($data);
//echo '</pre/';die;
               // return $this->load->view('pdf/'.$nom_fichier_pdf, $data,$data_custom_file, true);
                if(!$stream)
                  return $this->pdf($nom_fichier_pdf,$data,$data_custom_file,$stream);
                
                $this->pdf($nom_fichier_pdf,$data,$data_custom_file,$stream);
                
                  
              exit;
            }
        }
        
        if($stream)
          $this->redirect();
    }
    
    public function generer_all_pdf_facture($nom_fichier_pdf,$date){
		$data_pdf = array();
		$data_user = $this->m_users->getUserById(1);  
		$data_pdf['user_info'] = $data_user[0];		
		$data_pdf['date'] = $data_pdf['date_remise'] = $date;
		$data_pdf['pre_url'] = $this->config->item('pre_url');
		$data_pdf['date_facture'] = $date;
		$data_pdf['taux_tva'] = $this->session->userdata('taux_tva');
		
		$commandes = $this->m_commande->getAllCommandeByMonthForAllbill($data_pdf);
    
		if(!empty($commandes)){
			$current_id_users = "";
		  foreach($commandes as $commande){
        if($current_id_users != $commande->id_users){
          $compteur = 0;
          $current_id_users = $commande->id_users;
        }
        
        $data_pdf['users_info'][$commande->id_users] = new stdClass();
        $data_pdf['users_info'][$commande->id_users]->nom_societe = $commande->nom_societe;
        $data_pdf['users_info'][$commande->id_users]->nom_magasin = $commande->nom_magasin;
        $data_pdf['users_info'][$commande->id_users]->adresse = $commande->adresse;
        $data_pdf['users_info'][$commande->id_users]->ville = $commande->ville;
        $data_pdf['users_info'][$commande->id_users]->cp = $commande->cp;
        $data_pdf['users_info'][$commande->id_users]->tel_fixe = $commande->tel_fixe;
        $data_pdf['users_info'][$commande->id_users]->tel_fax = $commande->tel_fax;
        
        $data_pdf[$nom_fichier_pdf][$commande->id_users][$compteur] = new stdClass();
        $data_pdf[$nom_fichier_pdf][$commande->id_users][$compteur]->date_commande = $commande->date_commande;
        $data_pdf[$nom_fichier_pdf][$commande->id_users][$compteur]->id_users = $commande->id_users;
        $data_pdf[$nom_fichier_pdf][$commande->id_users][$compteur]->intitule_bl = $commande->intitule_bl;
        $data_pdf[$nom_fichier_pdf][$commande->id_users][$compteur]->id_commande = $commande->id_commande;
        $data_pdf[$nom_fichier_pdf][$commande->id_users][$compteur]->reference_client = $commande->reference_client;
        $data_pdf[$nom_fichier_pdf][$commande->id_users][$compteur]->generation_verre = $commande->generation_verre;
        $data_pdf[$nom_fichier_pdf][$commande->id_users][$compteur]->TarifLivraison = $commande->TarifLivraison;
        $data_pdf[$nom_fichier_pdf][$commande->id_users][$compteur]->total_commande = $commande->total_commande;
        
        $data_pdf['reduction'][$commande->id_users]= new stdClass();
        $data_pdf['reduction'][$commande->id_users]->reduction = $commande->reduction;
        $compteur++;
		  }
					  
		  $data_custom_file = array('date' => $date);
		
		//return $this->load->view('pdf/'.$nom_fichier_pdf, $data_pdf,$data_custom_file, true);
			
		  $this->pdf($nom_fichier_pdf,$data_pdf,$data_custom_file,true);
		}
    }
	
	public function generer_emargement(){
		if($this->session->userdata('is_admin') === true){
			$data['commandes'] = $this->m_commande->getCommandeEmargement();
			
			$this->pdf("emargement",$data,"",true);
			exit;
		}
		
		$this->redirect();
	}
	
	public function remplace_personnalisation_verre($libelle,$libelle_personnalise){
        $type_generation = array('horizon','fit','ipl','acuform','intuition','top_office','bifocaux_pastille','freestyle_sv');
        $replace = str_replace(' ','_',strtolower($libelle));

        $rep = "";
        foreach($type_generation as $value){
            if(strpos($replace,$value) !== false){
                $rep = $value;
                break;
            }
        }

        if(!empty($rep)){
            $libelle = str_replace($rep,$libelle_personnalise,$replace);
            $libelle = str_replace('_',' ',$libelle);
        }

        return $libelle;
    }

	public function updatePass(){
		if($this->input->is_ajax_request()){
			$data = $this->input->post();
			if(($data_user = $this->m_users->getUsersByMd5($data['secure'])) !== false){
				$new_data['new_pass'] = md5($data_user[0]->email.'&&'.$data['new_pass']);
				$new_data['id_users'] = $data_user[0]->id_users;
				$new_data['old_pass'] = $data_user[0]->pass;

				$this->m_users->updatePassUser($new_data);
				
				if(isset($data['sendPass']) && $data['sendPass'] == 1){
					$mess_txt = "<html><head></head><body><b>Bonjour !</b><br><br> Votre nouveau mot de passe est : ".$data['new_pass']."<br><br> A bientôt sur Optieyes !</body></html>";
					$sujet_txt = "Votre nouveau mot de passe";
					$email = $this->m_users->getUserById($new_data['id_users']);
					$data['email'] = $email[0]->email;
					$this->mail($data,$mess_txt,true,$sujet_txt);
				}

				if($this->session->userdata('logged_in') === true){
					$new_data_users = $this->m_users->getUserById($this->data['user_info']->id_users);

					$new_data_users['user_info'] = $new_data_users[0];
					unset($new_data_users[0]);

					$this->session->set_userdata(array('data_user' => $new_data_users));
				}
				
				//echo $new_data['new_pass'];
			}
			else
				echo "error_no_user_found";
		}
		else
			$this->redirect();
	}
	
	public function CarAleatoire($taille){
        $cars="azertyiopqsdfghjklmwxcvbn0123456789*![]-_"; //Listes des caractères possibles
        $mdp='';
        $long=strlen($cars);
        srand((double)microtime()*1000000); //Initialise le générateur de nombres aléatoires
        for($i=0;$i<$taille;$i++)$mdp=$mdp.substr($cars,rand(0,$long-1),1);
        return $mdp;
    }
	
	public function upload_file($name_input_file){
        $directory = explode("_", $name_input_file);
        $config['upload_path'] = $this->config->item('directory_upload')."/".$directory[2];
		
		if($this->session->userdata('is_admin'))
			$config['allowed_types'] = '*';
		else
			$config['allowed_types'] = 'pdf|jpg|jpeg';
			
		if($this->session->userdata('is_admin'))	
			 $config['max_size'] = '1000000';
		else
			 $config['max_size'] = '10000';
			
        $config['file_name'] = time();

        $this->upload->initialize($config);
		
		if(isset($_GET['update_admin'])){
			$users = $this->m_users->getUserById($_GET['id_users']);
			if($users !== false){
				if($users[0]->document_rib !== null && file_exists($config['upload_path']."/".$users[0]->document_rib)){
					unlink($config['upload_path']."/".$users[0]->document_rib);
				}
			}
		}

        if ( !$this->upload->do_upload($name_input_file)) {
            $this->data['error'] = $this->upload->display_errors();
			
			if(!isset($_GET['update_admin'])){
				echo json_encode(array('error' => $this->data['error']));
			}
			
			return false;
        }
        else {
            $data_file = $this->upload->data();

			if(!isset($_GET['piece_jointe_mail'])){
				$this->m_users->updateUser(array('document_'.$directory[2] => $data_file['file_name'], 'id_users' => (!isset($_GET['update_admin']) ? $this->data['user_info']->id_users : $_GET['id_users'])));
				$this->data['upload_success'] = $this->upload->display_errors();
			}

			if(!isset($_GET['update_admin']) && !isset($_GET['piece_jointe_mail'])){
				$this->data['user_info']->{'document_'.$directory[2]} = $data_file['file_name'];
				$this->data['user_info']->{'valid_document_'.$directory[2]}  = 0;
				$this->session->set_userdata(array('data_user' => $this->data));
			}
			else
				echo json_encode(array('new_file' => $data_file['file_name']));

            unset($this->data['error']);
			
			return true;
        }
    }
    
    public function upload_new_document(){
        $config['upload_path'] = "/static/download/";
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = '1000000';
        $config['file_name'] = time();

        $this->upload->initialize($config);

        /*if ( !$this->upload->do_upload($name_input_file)) {
            if(!isset($_GET['update_admin'])){
              echo json_encode(array('error' => $this->data['error']));
            }
			
            return false;
        }
        else {
            $data_file = $this->upload->data();

          if(!isset($_GET['piece_jointe_mail'])){
            $this->m_users->updateUser(array('document_'.$directory[2] => $data_file['file_name'], 'id_users' => (!isset($_GET['update_admin']) ? $this->data['user_info']->id_users : $_GET['id_users'])));
            $this->data['upload_success'] = $this->upload->display_errors();
          }

          if(!isset($_GET['update_admin']) && !isset($_GET['piece_jointe_mail'])){
            $this->data['user_info']->{'document_'.$directory[2]} = $data_file['file_name'];
            $this->data['user_info']->{'valid_document_'.$directory[2]}  = 0;
            $this->session->set_userdata(array('data_user' => $this->data));
          }
          else
            echo json_encode(array('new_file' => $data_file['file_name']));

            unset($this->data['error']);
			
          return true;
        }*/
    }
    
    public function pdf_grille_stock(){
      $grille_stock = $this->m_grille_stock->getAllGrilleStock();
    
      if(!empty($grille_stock)){
        $data = array();
        $data['grille_stock'] = $grille_stock;
        $this->pdf('grille_stock',$data,"",true,'landscape');
      }
    }
	
	public function redirect($param="/"){
        header("location:".$param);
    }
}
