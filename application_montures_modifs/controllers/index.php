<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(E_ALL);
class index extends MY_Controller {

    public function __construct() {
        parent::__construct();
      
        if($this->session->userdata('data_user') !== false && !isset($this->data['data_user'])){
            $this->data = $this->session->userdata('data_user');
            $this->data['data_admin'] = $this->session->userdata('data_admin');
            $this->data['parametre_lang_datable'] = $this->config->item('parametre_lang_datable');
            $this->data['parametre_export_datable'] = $this->config->item('parametre_export_datable');
            $this->data['taux_tva'] = $this->session->userdata('taux_tva') ;
        }

        if($this->session->userdata('is_admin')){
            $this->logout();
            $this->redirect();
        }

        $this->data['pre_url'] = "/";
        $this->data['version'] = md5("version2");
    }

	public function index(){
        if($this->session->userdata('logged_in') === true)
           $this->commande();
        else
		    $this->login();
	}

	public function certification() {

        if($this->session->userdata('logged_in') === true){

            $config['upload_path']          = FCPATH.'/uploads/docs/';
            $config['allowed_types']        = 'pdf';
            $config['max_size']             = 4096;

            $this->load->library('upload');
            $this->upload->initialize($config);

            if ( ! $this->upload->do_upload('doc'))
            {
                $this->data['error'] = $this->upload->display_errors();
            }
            else {


                $this->data['upload_data'] = $this->upload->data();

                $data['email'] = 'optieyescommande@gmail.com';


                // Génération des PDF
                $doc = $this->data['upload_data']['full_path'];

                $mess_txt = 'Adresse email du client : <strong>'.$this->data['user_info']->email.'</strong>';
                $sujet_txt = 'Demande de certification BL magasin '.$this->data['user_info']->id_users.' - ' . date('d/m/Y') . ' - ' . date('H\hi');

                if($this->mail($data, $mess_txt, true, $sujet_txt, $doc)) {
                    $this->data['status'] = 'email_sent';
                }
                else {
                    $this->data['status'] = 'email_error';
                }

            }

            $this->data['test'] = $this->session->userdata();

            $this->data['page'] = $this->data['title'] = "Certification éléctronique";
            $this->load->view('certification', $this->data);

        }else {
            $this->redirect();
        }

    }

    public function commande(){
        if($this->session->userdata('logged_in') === true){
            $this->data['page'] = $this->data['title'] = "Mes commandes";
            $this->data['modules']['datatables'] = true;
            $this->load->view('mes_commandes',$this->data);

        }else
            $this->redirect();
    }


    public function commandes_lentilles(){
        if($this->session->userdata('logged_in') === true){
            $this->data['page'] = $this->data['title'] = "Mes commandes de lentilles";
            $this->data['modules']['datatables'] = true;
            $this->load->view('mes_commandes_lentilles',$this->data);

        }else
            $this->redirect();
    }
	
	public function commandes_montures(){
        if($this->session->userdata('logged_in') === true){
            $this->data['page'] = $this->data['title'] = "Mes commandes de montures";
            $this->data['modules']['datatables'] = true;
            $this->load->view('mes_commandes_montures',$this->data);

        }else
            $this->redirect();
    }

    public function commande_details(){
        if($this->input->is_ajax_request()) {

            if($this->session->userdata('logged_in') === true) {

                $id_commande = (int)$this->input->post('id');
                $data['page'] = "Commande N°" . $id_commande;
                $data['recap_commande'] = $this->m_commande->getCommandeById($id_commande,$this->data['user_info']->id_users);
                $data['pair'] = $this->m_commande->getOrderByPairId($id_commande);
                $this->load->view('layout/commande-detail', $data);

            }
        }

    }

    
    public function detail_commande($id_commande){
      if($this->session->userdata('logged_in') === true && is_numeric($id_commande)){
        $data = $this->data;
        $data['parametre_lang_datable'] = $this->config->item('parametre_lang_datable');
        $data['parametre_export_datable'] = $this->config->item('parametre_export_datable');
        $data['page'] = 'Mes commandes';
        $data['title'] = "Commande N°".$id_commande;
        $data['recap_commande'] = $this->m_commande->getCommandeById($id_commande,$this->data['user_info']->id_users);
        
        if($data['recap_commande'] === false){
          $this->redirect();
          exit;
        }
          
        $this->load->view('detail_commande',$data);
      } else
            $this->redirect();
    }
	
	 public function mes_commandes_ajax($type = null){
        if($this->session->userdata('logged_in') === true && $this->input->is_ajax_request()){
			$data = $dataOrder = array();
			$data['aaData'] = array();
			
			$dataOrder['id_users'] = $this->data['user_info']->id_users;
			$dataOrder['tri'] = isset($_GET['tri']) ? $_GET['tri'] : "";

            if($type == 'ec') {
                $dataOrder['type_commande'] = '1';
            }

            $data_commande = $this->m_commande->getCommandeByUser($dataOrder);

            if($data_commande !== false)
                foreach($data_commande as $key => $commande){

                    switch($commande->type_commande) {

                        case 1:
                            $prix_commande = $commande->total_commande.' €';
                            break;
                        
                        case 2:
                            $prix_commande = '<del>'.$commande->total_commande.'</del> '.($commande->tarif_express > 0 ? $commande->tarif_express : '0').' €<br />Casse atelier';
                            break;

                        case 3:
                            $prix_commande = '<del>'.$commande->total_commande.'</del> '.($commande->tarif_express > 0 ? $commande->tarif_express : '0').' €<br />Erreur ophta';
                            break;

                    }

                    if($commande->ancienne_commande != '') {
                        $ancienne_ref = 'CR'.$commande->ancienne_commande.'-'.$this->data['user_info']->id_users;
                    }
                    else {
                        $ancienne_ref = '-';
                    }

					if($commande->id_type_generation_verre != 5)
						$etat_commande = $commande->libelle_etat_commande.($commande->id_etat_commande == 6 ? ' le '.date('d/m/Y H:i', strtotime($commande->date_update_commande)) : '').' ('.$commande->id_etat_commande.'/6)';
					else
						$etat_commande = $commande->id_etat_commande == 1 ? "En cours de préparation (".$commande->id_etat_commande."/2)" : $commande->libelle_etat_commande.' le '.date('d/m/Y H:i', strtotime($commande->date_update_commande)).' (2/2)';


                    if($type == 'ec') {

                        $data['aaData'][$key] =
                            array(
                                'CR' . $commande->id_commande . '-' . $this->data['user_info']->id_users,
                                date('d/m/Y H:i:s', strtotime($commande->date_commande)),
                                $ancienne_ref,
                                '<a href="/index/generer_pdf/bon_livraison/' . $commande->id_commande . '" class="btn btn-sm btn-warning"><i class="zmdi zmdi-download"></i> '. $commande->intitule_bl.'</a>',
                                '<del>'.$commande->total_commande.'€ </del> <b>'.number_format(($commande->tarif_express > 0 ? $commande->tarif_express : 0),2,'.',' ').'  €</b>',
                                $commande->reference_client,
                                $commande->generation_verre,
                                $etat_commande,
                                '<a class="commande-info btn btn-icon waves-effect waves-light '.(!empty($commande->commentaire) ? 'btn-warning tooltipster' : 'btn-inverse').'" data-toggle="modal" data-target="#detail-commande" rel="'.$commande->id_commande.'" '.(!empty($commande->commentaire) ? 'original-title="'.htmlentities($commande->commentaire).'" title="'.htmlentities($commande->commentaire).'"' : '').'><i class="zmdi zmdi-'.(!empty($commande->commentaire) ? 'comment' : 'search').'"></i> Voir</a>
                                ',
                            );
                    }
                    else {

                        $data['aaData'][$key] =
                            array(
                                'CR' . $commande->id_commande . '-' . $this->data['user_info']->id_users,
                                date('d/m/Y H:i:s', strtotime($commande->date_commande)),
                                '<a href="/index/generer_pdf/bon_livraison/' . $commande->id_commande . '" class="btn btn-sm btn-warning"><i class="zmdi zmdi-download"></i> '. $commande->intitule_bl.'</a>',
                                $commande->reference_client,
                                $commande->generation_verre,
                                $etat_commande,
                                '<a class="commande-info btn btn-icon waves-effect waves-light '.(!empty($commande->commentaire) ? 'btn-warning tooltipster' : 'btn-inverse').'" data-toggle="modal" data-target="#detail-commande" rel="' . $commande->id_commande . '" ' . (!empty($commande->commentaire) ? 'original-title="' . htmlentities($commande->commentaire) . '" title="'.htmlentities($commande->commentaire).'"' : '') . ' ><i class="zmdi zmdi-'.(!empty($commande->commentaire) ? 'comment' : 'search').'"></i> Voir</a>
                                <a class="btn btn-warning waves-effect wave-light" href="/index/recommande/'.$commande->id_commande.'">Recommander</a>',
                            );

                    }
                }
				
				die(json_encode($data));       
        }else
            $this->redirect();
    }
	
	public function mes_commandes_montures_ajax($type = null){

        $data['aaData'] = array();

        if($this->session->userdata('logged_in') === true && $this->input->is_ajax_request()){

            $user_id = $this->data['user_info']->id_users;

            $sort = isset($_GET['tri']) ? $_GET['tri'] : 0;
            $orders = $this->getMonturesOrders($sort);

            if($orders) {

                foreach($orders as $order)  {

					$details = '';
					$montures = json_decode($order->information_commande, true);
					foreach($montures as $monture) {
						if($monture['id']!=null)
						{
							$details .= '<strong>'.$monture['collection'].' '.$monture['modele']. ':</strong> ' .$monture['size'].' '.$monture['type'].' '.$monture['couleur'].' x'.$monture['qty'].', ';
						}
						else
						{
							$details .= '<strong>Pack '.$monture['pack'].'</strong> x'.$monture['qty'].', ';
						}

					}
					
					$details = rtrim($details,", ");
					
					
                    $etat_commande = $order->id_etat_commande == 1 ? "En cours de préparation (".$order->id_etat_commande."/2)" : 'Expediée le '.date('d/m/Y H:i', strtotime($order->date_update_commande)).' (2/2)';


                    $data['aaData'][] = array(
                        'CR'.$order->id_commande.'-'.$order->id_users,
						$order->reference_client,
                        date('d/m/Y H:i', strtotime($order->date_commande)),
                        '<a href="/index/generer_pdf/bon_livraison_montures/' . $order->id_commande . '" class="btn btn-sm btn-warning"><i class="zmdi zmdi-download"></i> '. $order->intitule_bl.'</a>',
                        //
						$details,
                        $etat_commande,
                        '<a class="commande-montures-info btn btn-icon waves-effect waves-light '.(!empty($order->commentaire) ? 'btn-warning tooltipster' : 'btn-inverse').'" data-toggle="modal" data-target="#detail-commande-montures" rel="' . $order->id_commande . '" ' . (!empty($order->commentaire) ? 'original-title="' . htmlentities($order->commentaire) . '" title="'.htmlentities($order->commentaire).'"' : '') . ' ><i class="zmdi zmdi-'.(!empty($order->commentaire) ? 'comment' : 'search').'"></i> Voir</a>',
                    );

                }

            }

            die(json_encode($data));

        }else
            $this->redirect();
    }
	
    public function mes_commandes_lentilles_ajax($type = null){

        $data['aaData'] = array();

        if($this->session->userdata('logged_in') === true && $this->input->is_ajax_request()){

            $user_id = $this->data['user_info']->id_users;

            $sort = isset($_GET['tri']) ? $_GET['tri'] : 0;
            $orders = $this->getLensOrders($sort);

            if($orders) {

                foreach($orders as $order)  {


                    $etat_commande = $order->id_etat_commande == 1 ? "En cours de préparation (".$order->id_etat_commande."/2)" : 'Expediée le '.date('d/m/Y H:i', strtotime($order->date_update_commande)).' (2/2)';


                    $data['aaData'][] = array(
                        'CR'.$order->id_commande.'-'.$order->id_users,
                        date('d/m/Y H:i', strtotime($order->date_commande)),
                        '<a href="/index/generer_pdf/bon_livraison_lentille/' . $order->id_commande . '" class="btn btn-sm btn-warning"><i class="zmdi zmdi-download"></i> '. $order->intitule_bl.'</a>',
                        $order->reference_client,
                        $order->name,
                        $etat_commande,
                        '<a class="commande-lentilles-info btn btn-icon waves-effect waves-light '.(!empty($order->commentaire) ? 'btn-warning tooltipster' : 'btn-inverse').'" data-toggle="modal" data-target="#detail-commande-lentilles" rel="' . $order->id_commande . '" ' . (!empty($order->commentaire) ? 'original-title="' . htmlentities($order->commentaire) . '" title="'.htmlentities($order->commentaire).'"' : '') . ' ><i class="zmdi zmdi-'.(!empty($order->commentaire) ? 'comment' : 'search').'"></i> Voir</a>',
                    );

                }

            }

            die(json_encode($data));

        }else
            $this->redirect();
    }

    public function reOrder() {

        if($this->input->is_ajax_request()) {

            if($this->session->userdata('logged_in') === true) {

                $data = $this->input->post();

                if($order_data = $this->m_commande->getCommandeById($data['order_id'], $this->data['user_info']->id_users, false)[0]) {

                    $order_data = (array) $order_data;

                    $data_corrections = json_decode($order_data['information_commande'], true);

                    if(isset($data_corrections['verre']['correction_droit'], $data_corrections['verre']['correction_gauche'])) {
                        $verres = 2;
                    }
                    else {
                        $verres = 1;
                    }

                    unset($order_data['id_commande']);
                    unset($order_data['date_annule']);
                    unset($order_data['email_send']);

                    $order_data['date_commande'] = date('Y-m-d H:i:s');
                    $order_data['date_update_commande'] = date('Y-m-d H:i:s');


                    $order_data['pair'] = false;
                    $order_data['ancienne_commande'] = 0;
                    $order_data['premiere_commande'] = 0;
                    $order_data['id_etat_commande'] = 1;
                    $order_data['type_commande'] = 1;


                    $order_data['express'] = false;

                    if(isset($data['express']) && $data['express'] == 1) {
                        $order_data['express'] = true;
                    }

                    $prix_verre = $order_data['prix_verre'];

                    if($order_data['total_remise_paire'] > 0) {
                        $prix_verre += $order_data['total_remise_paire'];
                        $order_data['prix_verre'] = $prix_verre;
                    }

                    $total_commande = $prix_verre*$verres;

                    $order_data['total_commande'] = $total_commande;
                    $order_data['total_remise_paire'] = 0;

                    if ($order = $this->m_commande->addOrder($order_data)) {

                        $day = mktime(0,0,0, date('m'), date('d'), date('Y'));
                        $this->db->where(array('user_id' => $order_data['id_users'], 'day' => $day))->update('user_sessions', array('has_order' => 1));

                        echo json_encode(array('status' => 'ok'));

                    } else {
                        echo json_encode(array('status' => 'error'));
                    }

                }
                else {
                    echo json_encode(array('status' => 'error'));
                }
            }
            else {
                $this->redirect();
            }

        }

    }

    public function addOrder($relance=false,$id_commande=""){
        if($this->input->is_ajax_request()) {

            $data = $this->session->userdata('order');

            $add = $this->input->post();

            $data['express'] = $add['express'];
            $data['express_pair'] = isset($add['express_pair']) ? $add['express_pair'] : 0;
            $data['pair'] = (bool) isset($add['pair']) ? $add['pair'] : false;


            if (!isset($data['nb_multi_commande']) || $data['nb_multi_commande'] == "") {
                $data['nb_multi_commande'] = 1;
            }

            $errors = 0;

            for ($i = 1; $i <= $data['nb_multi_commande']; $i++) {

                if(isset($data['discount'])) {

                    $pair_order_data = $this->m_commande->getCommandeById($data['pair_order_id'], $data['id_users'], $pair = true)[0];

                    $data_corrections = json_decode($data['information_commande'], true);
                    $pair_order_data_corrections = json_decode($pair_order_data->information_commande, true);

                    if(isset($data_corrections['verre']['correction_droit'], $data_corrections['verre']['correction_gauche'])) {
                        $verres = 2;
                    }
                    else {
                        $verres = 1;
                    }

                    if(isset($pair_order_data_corrections['verre']['correction_droit'], $pair_order_data_corrections['verre']['correction_gauche'])) {
                        $pair_verres = 2;
                    }
                    else {
                        $pair_verres = 1;
                    }


                    $data['total_remise_paire'] = 0;
                    $pair_order_data->total_remise_paire = 0;

                    if ($data['discount']['on'] == 'order') {
                        $data['total_remise_paire'] = (($data['prix_verre'] / 100) * $data['discount']['amount']);
                        $data['prix_verre'] = $data['prix_verre'] - $data['total_remise_paire'];
                        $data['prix_verre'] = round($data['prix_verre'], 2, PHP_ROUND_HALF_UP);
                    }
                    else {
                        $pair_order_data->total_remise_paire = (($pair_order_data->prix_verre / 100) * $data['discount']['amount']);
                        $pair_order_data->prix_verre = $pair_order_data->prix_verre - $pair_order_data->total_remise_paire;
                        $pair_order_data->prix_verre = round($pair_order_data->prix_verre, 2, PHP_ROUND_HALF_UP);
                    }

                    $data['total_commande'] = $data['prix_verre']*$verres;
                    $pair_order_data->total_commande = $pair_order_data->prix_verre*$pair_verres;

                    $pair_order_data = (array) $pair_order_data;
                    $pair_order_temp_id = $pair_order_data['id_commande'];

                    unset($pair_order_data['id_commande']);
                    unset($pair_order_data['date_annule']);

                    $pair_order_data['date_commande'] = date('Y-m-d H:i:s');
                    $pair_order_data['date_update_commande'] = date('Y-m-d H:i:s');


                    $pair_order_data['pair'] = false;
                    $pair_order_data['ancienne_commande'] = 0;
                    $pair_order_data['express'] = false;


                    if($data['express_pair'] == 1) {
                        $pair_order_data['express'] = true;
                    }


                    if ($pair_order_id = $this->m_commande->addOrder($pair_order_data)) {

                        if(!isset($pair_order_id['id'])) {
                            echo json_encode(array('status' => 'error', 'message' => 'pair'));
                            exit();
                        }
                        else {
                            $data['premiere_commande'] = $pair_order_id['id'];
                            $data['pair'] = false;
                        }

                        $this->m_commande->delete(array('id_commande' => $pair_order_temp_id), true);

                    }


                }

                // FUCK

                if ($order = $this->m_commande->addOrder($data)) {

                    $day = mktime(0,0,0, date('m'), date('d'), date('Y'));
                    $this->db->where(array('user_id' => $data['id_users'], 'day' => $day))->update('user_sessions', array('has_order' => 1));

                    if($data['pair'] == true) {
                        $message = json_encode(array('status' => 'ok', 'pair' => true, 'order_id' => $order['id']));
                    }
                    else {
                        $message = json_encode(array('status' => 'ok'));
                    }

                } else {
                    ++$errors;
                }
            }

            if($errors == 0) {
                echo $message;
            }
            else {
                echo json_encode(array('status' => 'error'));
            }

            $this->session->unset_userdata('order');
        }
    }

    public function addOrderBACKUP($relance=false,$id_commande=""){
        if($this->input->is_ajax_request()) {
            if ($this->session->userdata('logged_in') === true) {

                $data = $this->session->userdata('order');

                $add = $this->input->post();

                $data['express'] = $add['express'];
                $data['express_pair'] = $add['express_pair'];
                $data['pair'] = (bool) isset($add['pair']) ? $add['pair'] : false;


                if (!isset($data['nb_multi_commande']) || $data['nb_multi_commande'] == "") {
                    $data['nb_multi_commande'] = 1;
                }

                for ($i = 1; $i <= $data['nb_multi_commande']; $i++) {

                    if (isset($data['discount'])) {

                        $pair_order_data = $this->m_commande->getCommandeById($data['pair_order_id'], $data['id_users'], $pair = true)[0];

                        $data_corrections = json_decode($data['information_commande'], true);
                        $pair_order_data_corrections = json_decode($pair_order_data->information_commande, true);

                        if (isset($data_corrections['verre']['correction_droit'], $data_corrections['verre']['correction_gauche'])) {
                            $verres = 2;
                        } else {
                            $verres = 1;
                        }

                        if (isset($pair_order_data_corrections['verre']['correction_droit'], $pair_order_data_corrections['verre']['correction_gauche'])) {
                            $pair_verres = 2;
                        } else {
                            $pair_verres = 1;
                        }


                        $data['total_remise_paire'] = 0;
                        $pair_order_data->total_remise_paire = 0;

                        if ($data['discount']['on'] == 'order') {
                            $data['total_remise_paire'] = (($data['prix_verre'] / 100) * $data['discount']['amount']);
                            $data['prix_verre'] = $data['prix_verre'] - $data['total_remise_paire'];
                            $data['prix_verre'] = round($data['prix_verre'], 2, PHP_ROUND_HALF_UP);
                            $data['total_commande'] = $data['prix_verre'] * $verres;
                        } else {
                            $pair_order_data->total_remise_paire = (($pair_order_data->prix_verre / 100) * $data['discount']['amount']);
                            $pair_order_data->prix_verre = $pair_order_data->prix_verre - $pair_order_data->total_remise_paire;
                            $pair_order_data->prix_verre = round($pair_order_data->prix_verre, 2, PHP_ROUND_HALF_UP);
                            $pair_order_data->total_commande = $pair_order_data->prix_verre * $pair_verres;
                        }

                        $pair_order_data = (array)$pair_order_data;
                        $pair_order_temp_id = $pair_order_data['id_commande'];

                        unset($pair_order_data['id_commande']);
                        unset($pair_order_data['date_annule']);

                        $pair_order_data['date_commande'] = date('Y-m-d H:i:s');
                        $pair_order_data['date_update_commande'] = date('Y-m-d H:i:s');


                        $pair_order_data['pair'] = false;
                        $pair_order_data['ancienne_commande'] = 0;
                        $pair_order_data['express'] = false;

                        if ($add['express_pair'] == 1) {
                            $pair_order_data['express'] = true;
                        }


                        if ($pair_order_id = $this->m_commande->addOrder($pair_order_data)) {

                            if (!isset($pair_order_id['id'])) {
                                echo json_encode(array('status' => 'error', 'message' => 'pair'));
                                exit();
                            } else {
                                $data['premiere_commande'] = $pair_order_id['id'];
                                $data['pair'] = false;
                            }

                            $this->m_commande->delete($pair_order_temp_id, true);

                        }


                    }

                    // FUCK

                    if ($order = $this->m_commande->addOrder($data)) {
                        if ($order['pair'] == true) {
                            echo json_encode(array('status' => 'ok', 'pair' => $data['pair'], 'order_id' => $order['id']));
                        } else {
                            echo json_encode(array('status' => 'ok'));
                        }

                    } else {
                        echo json_encode(array('status' => 'error'));
                    }
                }

                $this->session->unset_userdata('order');
            } else {
                echo 'not_logged';
            }
        }
    }

    public function addOrderBackupAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA($relance=false,$id_commande=""){
        if($this->input->is_ajax_request())
            if($this->session->userdata('logged_in') === true){

                $data = $this->session->userdata('order');

                $add = $this->input->post();
                $data['express'] = $add['express'];
                $data['pair'] = (bool) $add['pair'];

               if(!isset($data['nb_multi_commande']) || $data['nb_multi_commande'] == ""){
                  $data['nb_multi_commande'] = 1;
               }
               
               for($i = 1; $i <= $data['nb_multi_commande'];$i++){

                   if ($order = $this->m_commande->addOrder($data)) {


                       $day = mktime(0,0,0, date('m'), date('d'), date('Y'));


                       $this->db->where(array(
                           'user_id' => $data['id_users'],
                           'day' => $day
                       ))
                           ->update('user_sessions', array(
                               'has_order' => 1
                           ));


                       if(is_numeric($order)) {
                           echo json_encode(array('status' => 'ok', 'pair' => $data['pair'], 'order_id' => $order));
                       }
                       else {
                           echo json_encode(array('status' => 'ok'));
                       }


                   } else {
                       echo json_encode(array('status' => 'error'));
                   }



               }
               
               $this->session->unset_userdata('order');
            }else
               echo "not_logged";
    }


    public function getIdVerre() {

        if($this->session->userdata('logged_in') === true && $this->input->is_ajax_request()){

            $id_verre = intval($_POST['id']);

            $query = $this->db->query('SELECT libelle_verre FROM verres WHERE id_verre='.$id_verre);
            $verre = $query->result();

            echo $verre[0]->libelle_verre;
        }
        else
            $this->redirect();
    }

    public function getPrixVerre() {

        if($this->session->userdata('logged_in') === true && $this->input->is_ajax_request()){

            $id_verre = intval($_POST['id']);
            $grille = $this->data['user_info']->id_grille_tarifaire;

            $query = $this->db->query('SELECT prix_verre FROM grille_tarifaire WHERE id_verre='.$id_verre.' AND id_grille_tarifaire = '.$grille);
            $verre = $query->result();

            echo $verre[0]->prix_verre;

        }
        else
            $this->redirect();
    }


    public function setOrderRecap(){
        if($this->input->is_ajax_request()){
            if($this->session->userdata('logged_in') === true){

                $data = $this->input->post();
                $user = $this->session->userdata('data_user');

                $userdata = $this->m_users->getUserById($user['user_info']->id_users)[0];

                $data['user_info'] = $user['user_info'];
                $data['id_users'] = $user['user_info']->id_users;
                $data['data_admin'] = $this->session->userdata('data_admin');

                $data['id_miroir'] = 0;
                $data['id_etat_commande'] = 1;
                $data['date_commande'] = date('Y-m-d H:i:s');
                $data['date_update_commande'] = $data['date_commande'];
                $data['origine_commande'] = $data['origine_commande'];
                $data['ancienne_commande'] = isset($data['ancienne_commande']) ? $data['ancienne_commande'] : 0;
                $data['taux_tva'] = $this->m_taux_tva->get_tva();
                $data['tarif_livraison'] = $userdata->tarif_livraison;
                $data['tarif_packaging'] = $userdata->tarif_packaging;
                $prix_miroir = 7;

                $pair_order = false;
                if(isset($data['pair_order'])) {
                    $pair_order = $this->m_commande->getCommandeById($data['pair_order'], $user['user_info']->id_users, true)[0];
                    $pair_order_id = $data['pair_order'];
                    $data['type_commande'] = $pair_order->type_commande;
                    $data['reference_client'] = $pair_order->reference_client;
                    $data['pair_order_recap'] = (array) $pair_order;
                }

                if(isset($data['calibre']) && !empty($data['calibre']))
					$data_commande['precalibrage'] = array('calibre' => $data['calibre']);

				if(isset($data['cotea']) && !empty($data['cotea']))
					$data_commande['mesure_freeform']['largeur_boxing'] = $data['cotea'];

				if(isset($data['coteb']) && !empty($data['coteb']))
					$data_commande['mesure_freeform']['hauteur_boxing'] = $data['coteb'];
					
				if(isset($data['cotec']) && !empty($data['cotec']))
					$data_commande['mesure_freeform']['taille_du_pont'] = $data['cotec'];
				
				if(isset($data['coted']) && !empty($data['coted']))
					$data_commande['mesure_freeform']['diametre_utile'] = $data['coted'];
          
        if(isset($data['diametre_verre']) && !empty($data['diametre_verre']))
          	$data_commande['diametre_verre'] = $data['diametre_verre'];
					
					
				if(isset($data_commande['mesure_freeform'] ))	
					foreach($data_commande['mesure_freeform'] as $Key => $val)
						if(empty($val))
							unset($data_commande['mesure_freeform'][$Key]);

                if(isset($data['type_monture']) && !empty($data['type_monture']))
                    $data_commande['monture'] = array('type' => $data['type_monture']);

				if(isset($data['epaisseur_bord_verre']) && !empty($data['epaisseur_bord_verre']))
					$data_commande['bord_verre'] = array('epaisseur' => $data['epaisseur_bord_verre']);

                if(isset($data['sphere_droit']) && isset($data['cylindre_droit']) && isset($data['sphere_gauche']) && isset($data['cylindre_gauche'])) {
                    $data_commande['verre'] = array('correction_droit' => array('sphere' => $data['sphere_droit'],
                        'cylindre' => $data['cylindre_droit']
                    ),
                        'correction_gauche' => array('sphere' => $data['sphere_gauche'],
                            'cylindre' => $data['cylindre_gauche']
                        )
                    );
                }
                elseif(isset($data['sphere_droit']) && isset($data['addition_droit']) && isset($data['sphere_gauche']) && isset($data['addition_gauche'])) {
                    $data_commande['verre'] = array(
                        'correction_droit' => array(
                            'sphere' => $data['sphere_droit'],
                            'addition' => $data['addition_droit'],
                            'cylindre' => 0
                        ),
                        'correction_gauche' => array(
                            'sphere' => $data['sphere_gauche'],
                            'addition' => $data['addition_gauche'],
                            'cylindre' => 0,
                        )
                    );
                }
												
				if(isset($data['axe_droit']))
					$data_commande['verre']['correction_droit']['axe'] = $data['axe_droit'];
					
				if(isset($data['axe_gauche']))
					$data_commande['verre']['correction_gauche']['axe'] = $data['axe_gauche'];
					
				if(isset($data['hauteur']) && !empty($data['hauteur']))
					$data_commande['verre']['hauteur'] = $data['hauteur'];
          
        if(isset($data['hauteur_gauche']) && !empty($data['hauteur_gauche']))
					$data_commande['verre']['hauteur_gauche'] = $data['hauteur_gauche'];
					
				if(isset($data['ecart_puppillaire_droit']) && !empty($data['ecart_puppillaire_droit']))
					$data_commande['verre']['ecart_puppillaire']['droit'] = $data['ecart_puppillaire_droit'];
					
				if(isset($data['ecart_puppillaire_gauche']) && !empty($data['ecart_puppillaire_gauche']))
					$data_commande['verre']['ecart_puppillaire']['gauche'] = $data['ecart_puppillaire_gauche'];
					
				if(isset($data['diametre']))
					$data_commande['verre']['diametre']= $data['diametre'];
          
        if(isset($data['diametre_gauche']))
					$data_commande['verre']['diametre_gauche']= $data['diametre_gauche'];
					
				if(isset($data['traitement']))
					$data_commande['verre']['traitement']= $data['traitement'];
					
				if(isset($data['photocromie']) && !empty($data['photocromie']))
					$data_commande['verre']['photocromie']= $data['photocromie'];
					
				if(isset($data['teinte']) && !empty($data['teinte']))
					$data_commande['verre']['teinte']= $data['teinte'];
					
				if(isset($data['galbe']) && !empty($data['galbe']))
                    $data_commande['verre']['galbe'] = $data['galbe'];

                if(isset($data['angle_pantoscopique']) && !empty($data['angle_pantoscopique']))
                    $data_commande['verre']['angle_pantoscopique'] = $data['angle_pantoscopique'];

                if(isset($data['angle_galbe']) && !empty($data['angle_galbe']))
                    $data_commande['verre']['angle_galbe'] = $data['angle_galbe'];
					
				if(isset($data['distance_verre_oeil']) && !empty($data['distance_verre_oeil']))
                    $data_commande['verre']['distance_verre_oeil'] = $data['distance_verre_oeil'];
					
					
				if(isset($data['dioptrie_droit']) && $data['dioptrie_droit'] != "")
                    $data_commande['verre']['dioptrie_droit'] = $data['dioptrie_droit'];

                if(isset($data['base_droit']) && $data['base_droit']!="")
                    $data_commande['verre']['base_droit'] = $data['base_droit'];


                if(isset($data['dioptrie_gauche']) && $data['dioptrie_gauche'] != "")
                    $data_commande['verre']['dioptrie_gauche'] = $data['dioptrie_gauche'];

                if(isset($data['base_gauche']) && $data['base_gauche']!="")
                    $data_commande['verre']['base_gauche'] = $data['base_gauche'];	
					
                $prix_double = true;

                if(isset($data['addition_droit']))
                    $data_commande['verre']['correction_droit']['addition'] = $data['addition_droit'];

                if(isset($data['addition_gauche']))
                    $data_commande['verre']['correction_gauche']['addition'] = $data['addition_gauche'];

                if(isset($data['degression_droit']))
                    $data_commande['verre']['correction_droit']['degression'] = $data['degression_droit'];

                if(isset($data['degression_gauche']))
                    $data_commande['verre']['correction_gauche']['degression'] = $data['degression_gauche'];

                if(isset($data['only_droit'])){
                    unset($data_commande['verre']['correction_gauche']);
                    unset($data_commande['verre']['diametre_gauche']); 
                    $prix_double = false;
                }

                if(isset($data['only_gauche'])){
                    unset($data_commande['verre']['correction_droit']);
                    unset($data_commande['verre']['diametre_droit']);
                    $prix_double = false;
                }
                
                if(isset( $data['miroir_stock']) &&  $data['miroir_stock'] != 0){
                    $data['id_miroir'] = $data['miroir_stock'];
                    $data_commande['verre']['miroir_stock'] = array(
												'type_miroir' => $data['miroir_stock'],
												'prix_miroir' => $prix_miroir
											  );
                } 
                
                if(isset($data['polarise']) &&  $data['polarise'] != "Non polarisé"){
                    $data_commande['verre']['polarise'] = $data['polarise'];
                } 
				
				if(isset($data['miroir']) && $data['miroir'] != 0){
                    $data['id_miroir'] = $data['miroir'];
					$data_commande['verre']['miroir'] = array(
												'type_miroir' => $data['miroir'],
												'prix_miroir' => $prix_miroir
											  );
											  
					if($prix_double)
						$prix_miroir *=2;
				}

                if(isset($data['carte_auth']) && $data['carte_auth'] == 1) {
                    $data_carte['civilite_client'] = $data['civilite_client'];
                    $data_carte['nom_client'] = $data['nom_client'];
                    $data_carte['prenom_client'] = $data['prenom_client'];
                    $data['information_certificat'] = json_encode($data_carte);
                }
                else {
                    $data['information_certificat'] = '';
                }


                $data['information_commande'] = json_encode($data_commande);

                $id_grille_tarifaire = $this->m_users->getGrilleTarifaire($data['id_users']);

                $prix_verre = $this->m_verres->getPrixVerre($data['id_verre'],$id_grille_tarifaire,$data['id_users']);
				
				if($prix_verre !== false){


                    $supplement = 0;
                    
                    if($data['origine_commande'] == 1 && $prix_verre[0]->supplement == 1) {
                        if($data['user_info']->tarif_supplement > 0) {
                            $supplement = $data['user_info']->tarif_supplement;
                        }
                    }

					if(!empty($prix_verre[0]->libelle_verre_personnalise))
						$prix_verre[0]->libelle_verre = $this->remplace_personnalisation_verre($prix_verre[0]->libelle_verre, $prix_verre[0]->libelle_verre_personnalise);

					$data['total_commande'] = $data['prix_verre'] =  $prix_verre[0]->prix_verre+$supplement;

                    if($data['type_commande'] == 1) {
                        $data['tarif_supplement'] = $supplement;
                    }
                    else {
                        $data['tarif_supplement'] = 0;
                    }

					$data['libelle_verre'] =   $prix_verre[0]->libelle_verre;

                    if($prix_double) {
                        $data['total_commande'] *= 2;
                        $data['tarif_supplement'] *= 2;
                    }
						
					if(isset($data['miroir']) && $data['miroir'] != 0)
						$data['total_commande'] += $prix_miroir;

                    $data['recap_commande'] = $data;


                    if(isset($data['pair_order_recap'])) {

                        $discount = array();

                        $discount['amount'] = $this->m_commande->getDiscountByOrderId($data['pair_order_recap']['id_commande'], true);

                        $pair_verre = floatval($data['pair_order_recap']['prix_verre']);
                        $current_verre = floatval($data['recap_commande']['prix_verre']);

                        if($pair_verre < $current_verre) {
                            $discount['on'] = 'pair_order';
                        }
                        else {
                            $discount['on'] = 'order';
                        }

                        $data['discount'] = $discount;

                        if(isset($pair_order_id)) {
                            $data['pair_order_id'] = $pair_order_id;
                        }

                    }

					$this->session->set_userdata('order', $data);

					$data['recap_commande'] = $data;

					echo $this->load->view('ajax_recap_commande',$data);
				}else{
					 echo "error";
				}
            }
            else
                echo "not_logged";
        }
        else
            $this->redirect();
    }

    public function bons_livraison(){
        if($this->session->userdata('logged_in') === true){
            $this->data['modules']['datatables'] = true;
            $this->data['page'] = $this->data['title'] = "Mes bons de livraisons";
            $this->load->view('mes_bons_livraison',$this->data);
        }else
            $this->redirect();
    }
	
	public function bons_livraison_ajax(){
        if($this->session->userdata('logged_in') === true && $this->input->is_ajax_request()){
            $data = $dataOrder = array();
			$data['aaData'] = array();
			
			$dataOrder['id_users'] = $this->data['user_info']->id_users;
			
            $data_bon_livraison = $this->m_commande->getCommandeByUser($dataOrder);

            if($data_bon_livraison !== false)
                foreach($data_bon_livraison as $key => $bon_livraison)
                    $data['aaData'][$key] =
                        array(
                            'CR'.$bon_livraison->id_commande.'-'.$this->data['user_info']->id_users,
                            date('d/m/Y', strtotime($bon_livraison->date_commande)),
                            $bon_livraison->reference_client,
							$bon_livraison->intitule_bl,
                            $bon_livraison->generation_verre,
                            '<a href="/index/generer_pdf/bon_livraison/'.$bon_livraison->id_commande.'" class="btn btn-icon waves-effect waves-light btn-inverse m-b-5"><i class="zmdi zmdi-download"></i> Télécharger</a>'
                        );

            die(json_encode($data));

        }else
            $this->redirect();
    }

    public function login($recovery=false){
        
        $data['title'] = "Optieyescommande : commande de verres de lunettes pour les professionnels de l'optique";
        $data['page'] = "Connexion";
        $data['recovery'] = $recovery;

        $data['modules'] = array('sweetalert' => true);

		if($recovery) {
            $data['title'] = "Réinitialiser son mot de passe";
            $data['page'] = "Connexion";
        }
        
        $this->load->view('login',$data);
    }

    public function profile(){
        if($this->session->userdata('logged_in') === true){


            // Page restreinte : accessible uniquement après avoir validé le formulaire de login restriction
            $restricted = $this->session->userdata('restriction') ;

            $restriction = $this->getRestriction();
            $this->session->set_userdata('restriction', $restriction);

            if($restricted == 1) {
                $this->redirect();
            }

            $this->data['modules'] = array('sweetalert' => true);
            $this->data['user_info'] = $this->m_users->getUserById($this->data['user_info']->id_users)[0];

            $this->data['page'] = $this->data['title'] = "Profile";
            $this->load->view('profile',$this->data);

        }else
            $this->login();
    }

    public function verif_restriction(){
        if($this->input->is_ajax_request()){
            $data = $this->input->post();
            if($data['restriction_pass'] == $this->data['user_info']->cp){
                $this->session->set_userdata('restriction', 0);
                echo 1;
            }else{
                echo 0;
            }
        }
        else
            $this->redirect();
    }

    public function getRestriction(){

        $this->load->model('m_users');

        if($this->input->is_ajax_request()){
            echo $this->m_users->getUserById($this->data['user_info']->id_users)[0]->restriction_compte;
        }
        else {
            return $this->m_users->getUserById($this->data['user_info']->id_users)[0]->restriction_compte;
        }

    }

    public function recommande($order_id = false) {

        if($this->session->userdata('logged_in') === true){

            $this->data['infos_user'] = $this->m_users->getUserById($this->data['user_info']->id_users);

            if($order = $this->m_commande->getCommandeById($order_id, $this->data['user_info']->id_users, false)) {

                $this->data['recap_commande'] = $order[0];
                $this->data['page'] = $this->data['title'] = "Repasser une commande";

                $this->load->view('reorder', $this->data);

            }
            else {
                $this->redirect('/index/passer_commande');
            }

        }
        else {
            $this->redirect();
        }

    }

    public function passer_commande($pair_order = false){

        $this->load->model('m_users');
        $this->load->helper('slimpay');
        $this->load->library('email');

        $this->data['pair_order'] = false;


        $this->data['modules'] = array('sweetalert' => true, 'touchspin' => true);

        if($this->session->userdata('logged_in') === true){

            $this->data['infos_user'] = $this->m_users->getUserById($this->data['user_info']->id_users);

            if(false !== $pair_order) {
                $this->data['pair_order'] = $this->m_commande->getCommandeById($pair_order, $this->data['user_info']->id_users, true)[0];
            }

            if($this->data['infos_user'][0]->valid_mandat != 1) {

                $checkMandat = getMandat('OPTR' . $this->data['user_info']->id_users);

                if ($checkMandat['state'] == 'active') {

                    $this->m_users->updateUser(array('id_users' => $this->data['user_info']->id_users, 'valid_mandat' => 1, 'document_rib' => 'ok', 'valid_document_rib' => 1));

                    $this->email->from('noreply@optieyescommande.com', 'Optieyes Commande');
                    $this->email->to('optieyescommande@gmail.com');
                    $this->email->cc('testproxicom@gmail.com');

                    $this->email->subject('Client n°' . $this->data['user_info']->id_users . ' a validé son RIB.');

                    $this->email->send();

                }

            }


            $this->data['page'] = $this->data['title'] = "Passer commande";

            $this->data['numero_siret'] = $this->session->userdata('numero_siret');
            $this->data['tva_intracomm'] = $this->session->userdata('tva_intracomm');
            
            $result = $this->m_config->getConfig(array('nom_config' => 'commentaire'));


            $date = new DateTime();
            $date->modify('-60 days');

            $this->data['commentaire_actif'] = json_decode($result[0]->param_config);
            $this->data['id_commandes'] = $this->getUserOrders($date);
            $regions = $this->config->item('regions');

            if(isset($this->data['user_info']->cp)) {
                $dep = substr($this->data['user_info']->cp, 0, -3);
                $this->data['region'] = ($regions[$dep] == "Ile-de-France" ? 1 : 0);
            }
            else {
                $this->data['region'] = 0;
            }

        }
        else {
            $this->redirect();
        }

        $this->load->view('dashboard',$this->data);
    }

    public function submit_mandat() {

        if($this->session->userdata('logged_in') === true && $this->input->is_ajax_request()) {


            $infos_user = $this->m_users->getUserById($this->data['user_info']->id_users);

            $this->load->helper('slimpay');

            $errors = '';

            $iban_info['email'] = $infos_user[0]->email;
            $iban_info['client_ref'] = 'OPTC'.$this->data['user_info']->id_users;
            $iban_info['slm_ref'] = 'OPTR'.$this->data['user_info']->id_users;
            $iban_info['familyName'] = $_POST['familyName'];
            $iban_info['givenName'] = $_POST['givenName'];
            $iban_info['companyName'] = $_POST['companyName'];

            switch($_POST['honorificPrefix']) {
                case 1:
                    $iban_info['honorificPrefix'] = 'Mr';
                    break;
                case 2:
                    $iban_info['honorificPrefix'] = 'Mrs';
                    break;
                case 3:
                    $iban_info['honorificPrefix'] = 'Miss';
            }

            $iban_info['iban'] = str_replace(' ', '', $_POST['iban']);
            $iban_info['city'] = $_POST['city'];
            $iban_info['postalCode'] = $_POST['postalCode'];
            $iban_info['street1'] = $_POST['street1'];
            $iban_info['street2'] = $_POST['street2'];


            foreach($iban_info as $k => $v) {
                $value = trim($v);
                if($k != 'street2') {
                    if (empty($value)) {
                        $errors[$k] = 1;
                    }
                    else {
                        if($k == 'postalCode') {
                            if(!is_numeric($value)) {
                                $errors[$k] = 2;
                            }
                        }
                    }
                }
            }

            if($_POST['iban'] != '') {
                if (!checkIBAN($_POST['iban'])) {
                    $errors['iban'] = 2;
                }
            }
            else {
                $errors['iban'] = 1;
            }


            if(!empty($errors)) {
                echo json_encode($errors);
            }
            else {
                $state = createMandat($iban_info);
                echo json_encode($state);
            }



        }
        else
            $this->redirect();

    }
	
	public function ajax_type_verre($id_magasin, $pair_type = false){
		if($this->session->userdata('logged_in') === true && $this->input->is_ajax_request()){
			$data['type_generation_verre'] = $this->m_type_generation_verre->getTypeGenerationVerre($id_magasin, $pair_type);
			$this->load->view('ajax_type_verre',$data);
		}
		else
			echo "redirect";
	}

    public function mes_factures(){
        if($this->session->userdata('logged_in') === true){
            if($this->data['user_info']->restriction_compte == 0 || $this->session->userdata('restriction') == 0){

                // Page restreinte : accessible uniquement après avoir validé le formulaire de login restriction
                $restricted = $this->session->userdata('restriction') ;

                $restriction = $this->getRestriction();
                $this->session->set_userdata('restriction', $restriction);

                if($restricted == 1) {
                    $this->redirect();
                }

                $this->data['modules']['datatables'] = true;
                $this->data['page'] = $this->data['title'] = "Mes factures";
                
				
                $this->load->view('mes_factures',$this->data);
            }
            else
                $this->redirect();
        }else
            $this->redirect();
    }

	public function mes_factures_ajax(){
		if($this->input->is_ajax_request()){
			$data = array();
			$data['aaData'] = array();
			$total_commande_by_month = $this->m_commande->getTotalCommandeByMonth($this->data['user_info']->id_users);

			if($total_commande_by_month !== false){
				$month = array('Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre');
				$text_mois_en_cours = "Montant de vos commandes depuis le 1er";
				$text_mois_fini = "Facture ";
				foreach($total_commande_by_month as $key => $total_commande)
					$data['aaData'][$key] =
						array(
						   (date("Y-m") > date("Y-m",strtotime($total_commande->date_commande)) ? $text_mois_fini : $text_mois_en_cours).' '.$month[date("n",strtotime($total_commande->date_commande))-1].' '.date("Y",strtotime($total_commande->date_commande)),
						   //number_format($total_commande->total,2,'.',' ').' €',
						   '<a href="/index/generer_pdf_facture/facture/'.date("Y-m",strtotime($total_commande->date_commande)).'" class="btn btn-icon waves-effect waves-light btn-inverse m-b-5"><i class="zmdi zmdi-download"></i> <span>Télécharger</span></a>'
						);
				
			}
			die(json_encode($data));
		}
		else
            $this->redirect();
	}


    public function erreur_casse(){

        setlocale(LC_TIME, 'fr_FR.utf8','fra');

        $this->load->model('m_users');

        if($this->session->userdata('logged_in') === true){
            if($this->data['user_info']->restriction_compte == 0 || $this->session->userdata('restriction') == 0){


                // Page restreinte : accessible uniquement après avoir validé le formulaire de login restriction
                $restricted = $this->session->userdata('restriction') ;

                $restriction = $this->getRestriction();
                $this->session->set_userdata('restriction', $restriction);

                if($restricted == 1) {
                    $this->redirect();
                }


                if($this->data['user_info']->restriction_compte == 1)
                    $this->session->set_userdata('restriction', 1);

                $this->data['modules']['datatables'] = true;
                $this->data['page'] = $this->data['title'] = "Erreur ophtalmologiste / Casse atelier";

                $total_commandes = $this->m_commande->getTotalCommandeByYear($this->data['user_info']->id_users);
                $total_commandes_ec = $this->m_commande->getTotalECCommandeByYear($this->data['user_info']->id_users);

                $taux = $this->m_users->getUserById($this->data['user_info']->id_users);

                $this->data['ec']['taux'] = number_format($taux[0]->taux_erreur,2,'.','');
                $this->data['ec']['used'] = number_format($total_commandes_ec[0]->total, 2,'.','');

                if($total_commandes) {
                    $this->data['ec']['total'] = number_format($total_commandes[0]->total,2,'.','');
                    $this->data['ec']['useable'] = number_format($total_commandes[0]->total*($taux[0]->taux_erreur/100), 2,'.','');
                    $this->data['ec']['rest'] = number_format(($total_commandes[0]->total*($taux[0]->taux_erreur/100))-$total_commandes_ec[0]->total, 2,'.','');
                }
                else {
                    $this->data['ec']['total'] = number_format(0,2,'.','');
                    $this->data['ec']['useable'] = number_format(0, 2,'.','');
                    $this->data['ec']['rest'] = number_format(0, 2,'.','');

                }


                $this->load->view('erreur_casse',$this->data);
            }
            else
                $this->redirect();
        }else
            $this->redirect();
    }

    public function erreur_casse_ajax(){

        setlocale(LC_TIME, 'fr_FR.utf8','fra');

        $this->load->model('m_users');

        if($this->input->is_ajax_request()){
            $data = array();
            $data['aaData'] = array();

            $total_commandes = $this->m_commande->getTotalCommandeByYear($this->data['user_info']->id_users);
            $total_commandes_ec = $this->m_commande->getTotalECCommandeByYear($this->data['user_info']->id_users);

            $taux = $this->m_users->getUserById($this->data['user_info']->id_users);

            $data['aaData'][] = array(
                'Montant total de vos achats depuis le 1er Janvier de l\'année en cours',
                '<strong>'.number_format($total_commandes[0]->total,2,'.','').' €</strong>'
            );

            $data['aaData'][] = array(
                'Montant total utilisable pour commander en casse atelier et erreur ophtalmologiste ( '.$taux[0]->taux_erreur.'% )',
                '<strong>'.number_format($total_commandes[0]->total*($taux[0]->taux_erreur/100), 2,'.','').' €</strong>'
            );

            $data['aaData'][] = array(
                'Montant déjà utilisé pour commander en casse atelier et erreur ophtalmologiste',
                '<strong>'.number_format($total_commandes_ec[0]->total, 2,'.','').' €</strong>'
            );

            $data['aaData'][] = array(
                'Montant total utilisable pour commander en casse atelier et erreur ophtalmologiste au '.strftime('%e %B %Y à %Hh%M', time()),
                '<strong>'.number_format(($total_commandes[0]->total*($taux[0]->taux_erreur/100))-$total_commandes_ec[0]->total, 2,'.','').' €</strong>'
            );

            die(json_encode($data));
        }
        else
            $this->redirect();
    }

    public function ECCreditCheck() {

        $this->load->model('m_users');

        if($this->input->is_ajax_request()){

            if($this->session->userdata('logged_in') === true) {

                $total_commandes = $this->m_commande->getTotalCommandeByYear($this->data['user_info']->id_users);
                $total_commandes_ec = $this->m_commande->getTotalECCommandeByYear($this->data['user_info']->id_users);
                $taux = $this->m_users->getUserById($this->data['user_info']->id_users);

                $credit = number_format(($total_commandes[0]->total * ($taux[0]->taux_erreur / 100)) - $total_commandes_ec[0]->total, 2, '.', ' ');

                die($credit);

            }
            else {
                die('not_logged');
            }
        }
        else
            $this->redirect();

    }

    public function getUserOrders($date = null) {

        if($this->session->userdata('logged_in') === true) {

            $select = '';

            $commandes = $this->m_commande->getAllCommandeByUser($this->data['user_info']->id_users, $date);

            if(is_array($commandes)) {
                foreach($commandes as $c) {
                    $date = strtotime($c->date_commande);
                    $select .= '<option value="'.$c->id_commande.'">'.$c->id_commande.' - '.$c->reference_client.' - '.$c->libelle_verre.' - Commandé le '.date('d/m/Y', $date).'</option>'."\n";
                }
            }


            return $select;

        }
        else {
            $this->redirect();
        }

    }

    public function getGenerationVerre(){
        if($this->input->is_ajax_request() && $this->session->userdata('logged_in') === true){
            if(($data['generation_verre']  = $this->m_generation_verre->getGenerationVerre($this->input->post('id_type_generation_verre'),$this->data['user_info']->id_users, true,false)) !== false){
                echo $this->load->view('ajax_type_generation_verre',$data);
            }
        }
        else
            $this->redirect();
    }

    public function getIndiceVerre(){
        if($this->input->is_ajax_request()){

            $pair_order_id = $this->input->post('pair_order');
            $pair_order = false;

            if(isset($pair_order_id)) {
                $pair_order = $this->m_commande->getCommandeById($pair_order_id, $this->data['user_info']->id_users, $pair = true)[0];
            }

            if(($result = $this->m_generation_verre->getIndiceVerre($this->input->post('id_generation_verre')))!== false ){ //

                // Test sur indices des verres non disponibles pour la correction choisie (première commande de la paire)
                if(isset($pair_order_id) && false !== $pair_order_id) {

                    $pair_corrections = json_decode($pair_order->information_commande); //
                    $outOfRange = array();

                    foreach ($result as $indice) {

                        $args = array(
                            'id_generation_verre' => $this->input->post('id_generation_verre'),
                            'id_indice_verre' => $indice->id_indice_verre
                        );

                        $grille = $this->m_grille_fabrication->getGrilleFabrication($args);

                        $fabrication = json_decode($grille[0]->grille_fabrication_verre);

                        if(isset($fabrication->degression)) {

                            if(isset($pair_corrections->verre->correction_droit->addition)) {
                                $pair_corrections->verre->correction_droit->sphere += $pair_corrections->verre->correction_droit->addition;
                            }

                            if(isset($pair_corrections->verre->correction_gauche->addition)) {
                                $pair_corrections->verre->correction_gauche->sphere += $pair_corrections->verre->correction_gauche->addition;
                            }

                            if(!isset($pair_corrections->verre->correction_droit->degression) && isset($pair_corrections->verre->correction_droit)) {
                                $pair_corrections->verre->correction_droit->degression = $pair_corrections->verre->correction_droit->addition;
                                unset($pair_corrections->verre->correction_droit->addition);
                            }

                            if(!isset($pair_corrections->verre->correction_gauche->degression) && isset($pair_corrections->verre->correction_gauche)) {
                                $pair_corrections->verre->correction_gauche->degression = $pair_corrections->verre->correction_gauche->addition;
                                unset($pair_corrections->verre->correction_gauche->addition);
                            }

                        }

                        // Test sur grilles de fabrications pour l'indice / génération
                        foreach ($fabrication as $key => $props) {
                            foreach ($pair_corrections->verre as $side => $values) {
                                if ($side === 'correction_droit' || $side == 'correction_gauche') {
                                    if(isset($values->$key)) {
                                        if (floatval($values->$key) < floatval($props->deb) || floatval($values->$key) > floatval($props->fin)) {
                                            $outOfRange[] = $indice->id_indice_verre;
                                        }
                                    }
                                }
                            }
                        }

                    }

                    // Unset les indices non compatibles
                    foreach($result as $k => $r) {
                        if(in_array($r->id_indice_verre, $outOfRange)) {
                            unset($result[$k]);
                        }
                    }

                }

                $data['indice_verre'] = $result;

                echo $this->load->view('ajax_indice_verre',$data);

            }
        }
    }

    public function check_login(){
        if($this->input->is_ajax_request()){
           $data = $this->input->post('login'); 
		   if(isset($data['email']) && isset($data['pass'])){
		    $data['email'] = trim($data['email']);
		    $data['pass'] = trim($data['pass']);
			   if(valid_email($data['email'])){
				   if(($data_user = $this->m_users->check($data)) !== false){

					   $this->m_users->updateUser(array('id_users' =>$data_user[0]->id_users, 'users_last_connexion' => date("Y-m-d H:i:s")));

					   $data_user['user_info'] = $data_user[0];
					   unset($data_user[0]);

					   $data_admin = $this->m_users->getUserById(1);
					   $data_admin['admin_info'] = $data_admin[0];
					   unset($data_admin[0]);

					   $numero_siret = $tva_intracomm = "ok";

					   if($data_user['user_info']->id_users != 2){ //id 2 is user test
						   if(!$this->checkSiret($data_user['user_info']->numero_siret)){
							   $numero_siret = "nok";
						   }

						   /*if($this->checkTvaIntraComm($data_user['user_info']->numero_siret) != $data_user['user_info']->tva_intracom){
							   $tva_intracomm = "nok";
						   }*/
					   }

					   $session = array(
						   'logged_in'  => true,
						   'data_user'  => $data_user,
						   'data_admin' => $data_admin,
						   'pass_user'  => $data['pass'],
						   'numero_siret' => $numero_siret,
						   'tva_intracomm'=> $tva_intracomm
					   );

                       $this->m_users->updateLastLogin($data_user['user_info']->id_users);

                       if($data_user['user_info']->login_notification == 1) {
                           $message = '';
                           $data['email'] = 'optieyescommande@gmail.com';
                           $title = 'Le client n° '.$data_user['user_info']->id_users.' s\'est connecté';
                           $this->mail($data, $message, true, $title);
                       }

					   $this->session->set_userdata($session);
					   $this->session->unset_userdata("is_admin");

					   echo json_encode(array('status'=> 'ok'));
				   }else
					   echo json_encode(array('status'=> 'error_log'));
			   }
			   else
					echo json_encode(array('status'=> 'error_log'));
			}else
				echo json_encode(array('status'=> 'error_log'));
        }
        else
            $this->redirect();
    }

    public function updatePassword() {
        if($this->input->is_ajax_request()){

            $user = $this->m_users->getUserById($this->data['user_info']->id_users);


            $old_password = $this->input->post('old_password');
            $password = $this->input->post('password');
            $password_confirm = $this->input->post('password_confirm');

            if(md5($user[0]->email.'&&'.$old_password) == $user[0]->pass) {


                if($password == $password_confirm) {

                    if($password != '') {

                        if($this->m_users->updateUser(array('id_users' => $user[0]->id_users, 'pass' => md5($user[0]->email.'&&'.$password)))){
                            echo json_encode(array('status' => 'ok'));
                        }
                        else {
                            echo json_encode(array('status' => 'error'));
                        }

                    }
                    else {
                        echo json_encode(array('status' => 'empty'));
                    }


                }
                else {
                    echo json_encode(array('status' => 'password_confirm'));
                }
            }
            else {
                echo json_encode(array('status' => 'password'));
            }

        }
        else
            $this->redirect();
    }

    public function updateProfile(){
        if($this->input->is_ajax_request()){
            if($this->checkSiret($_POST['numero_siret'])){
				$controleTva = false;
				
				if(!empty($_POST['tva_intracom'])){
					$controleTva = true;
				}
				
                if(!$controleTva || $this->checkTvaIntraComm($_POST['numero_siret']) == $_POST['tva_intracom']){
                    $_POST['id_users'] = $this->data['user_info']->id_users;

                    if($this->m_users->updateUser($_POST)){
                        $new_data_users = $this->m_users->getUserById($this->data['user_info']->id_users);

                        $new_data_users['user_info'] = $new_data_users[0];
                        unset($new_data_users[0]);

                        $this->session->set_userdata(array('data_user' => $new_data_users));
                        $this->session->set_userdata('numero_siret','ok');
                        $this->session->set_userdata('tva_intracomm','ok');

                        echo json_encode(array('status'=> ''));
                    }
                }
                else{
                    echo json_encode(array('status'=> 'error_tva_intra_comm'));
                }
            }
            else{
                echo json_encode(array('status'=> 'error_siret'));
            }
        }
        else
            $this->redirect();
    }

    public function updateAcces(){
        if($this->input->is_ajax_request()){
            $data = $this->input->post();
            $data['id_users'] = $this->data['user_info']->id_users;

            $this->m_users->updateUser($data);

            $new_data_users = $this->m_users->getUserById($data['id_users']);

            $new_data_users['user_info'] = $new_data_users[0];
            unset($new_data_users[0]);

            $this->session->set_userdata(array('data_user' => $new_data_users));
            $this->session->set_userdata('restriction',$data['restriction_compte']);
        }
        else
            $this->redirect();
    }
    
    public function getDiametre(){
      if($this->input->is_ajax_request()){
          $post = $this->input->post();

          $return = $this->m_grille_stock->getDiametre($post);

          $data = array();

          if($return !== false){

              if($return == 'stock_progressif') {
                  $data = array(70);
              }
              else {
                  foreach($return as $d){

                      $grille_stock = json_decode($d->grille_stock,true);

                      if(array_key_exists($post['sphere'], $grille_stock)){
                          if(in_array($post['cylindre'], $grille_stock[$post['sphere']]))
                              array_push($data,$d->diametre);
                      }
                  }
              }

          }
          
          echo json_encode($data);
      }
    }

    public function getGrilleFabrication(){
      if($this->input->is_ajax_request()){

          $data = $this->input->post();
          $data['id_users'] = $this->data['user_info']->id_users;
          $post = $data;

          if(isset($data['pair_order'])) {
              $data['pair_order'] = $this->m_commande->getCommandeById($data['pair_order'], $data['id_users'], $pair = true)[0];
          }

          if($data['type_commande_verre'] == 1)

              $data['correction'] = $this->m_grille_fabrication->getGrilleFabrication($data);

          else if($data['type_commande_verre'] == 2){
              $data['correction_stock'] = $this->m_grille_stock->getGrilleStock($data);
          }

          $data['post_data'] = $post;

          echo $this->load->view('ajax_correction',$data);
      }
      else
          $this->redirect();

    }



    public function getSpecificVerre(){
        if($this->input->is_ajax_request() && $this->session->userdata('logged_in') === true){
			$data = $this->input->post();
			$data['id_users'] = $this->data['user_info']->id_users;
            $data['user_supplement'] = $this->data['user_info']->tarif_supplement;
			$data['id_grille_tarifaire'] = $this->m_users->getGrilleTarifaire($this->data['user_info']->id_users);
			$data['verre'] =  $this->m_verres->getSpecificVerre($data);
			
			if($data['verre'] !== false)
				foreach($data['verre'] as $value){
					if(!empty($value->libelle_verre_personnalise)){
						$value->libelle_verre = $this->remplace_personnalisation_verre($value->libelle_verre,$value->libelle_verre_personnalise);
					}
				}

			$data['restriction'] = $this->data['user_info']->restriction_compte == 1 ? 1 : 0 ;

			echo $this->load->view('ajax_verre',$data);
        }
        else
            $this->redirect();
    }
	
	public function checkVerreStock(){
		if($this->input->is_ajax_request() && $this->session->userdata('logged_in') === true){
			$CheckVerreStock = array();
			$data = $this->input->post();
			$verres = $this->m_verres->getVerre($data);
			
			if($verres !== false){
				foreach($verres as $key => $verre){

                    if($verre->id_generation_verre == 21) {

                        if (strpos($verre->libelle_verre, $data['teinte']) === false) {
                            continue;
                        }
                    }
                    else {

                        $isPhotocromie = $miroir = $polarise = false;

                        if ($data['photocromie'] != "undefined" && $data['photocromie'] != "Non Photocromique") {
                            $isPhotocromie = true;

                            if (strpos($verre->libelle_verre, $data['photocromie']) === false)
                                continue;

                        } else {
                            if (strpos($verre->libelle_verre, "PhotoGrey") !== false || strpos($verre->libelle_verre, "PhotoBrown") !== false)
                                continue;
                        }

                        if ($data['miroir'] != "undefined" && $data['miroir'] > 0) {
                            $miroir = true;
                            if (strpos($verre->libelle_verre, "miroir") === false)
                                continue;
                            else {
                                $options_miroir = array(1 => 'Miroir Bleu', 2 => 'Miroir Argent', 3 => 'Miroir Doré', 4 => 'Miroir Vert', 5 => 'Miroir Rouge', 6 => 'Miroir Orange', 7 => 'Miroir Rose', 8 => 'Miroir Violet', 9 => 'Miroir Jaune', 10 => 'Miroir Flash');

                                $verre->libelle_verre = str_replace("miroir", $options_miroir[$data['miroir']], $verre->libelle_verre);
                            }
                        }

                        if ($verre->id_generation_verre != 17) {

                            if ($data['polarise'] != "undefined" && $data['polarise'] != "Non polarisé") {

                                $polarise = true;
                                if (strpos($verre->libelle_verre, "polarisé") === false) {
                                    continue;
                                } else {
                                    $verre->libelle_verre = str_replace("polarisé", $data['polarise'], $verre->libelle_verre);
                                }
                            }

                        } else {

                            $polarise = true;

                            if (strpos($verre->libelle_verre, $data['teinte']) === false) {
                                continue;
                            }

                            if (strpos($verre->libelle_verre, $data['polarise']) === false) {
                                continue;
                            }

                        }

                        if (!$miroir && !$polarise) {
                            if (!$isPhotocromie && $data['teinte'] != "undefined" && $data['teinte'] != "Non Teinté") {
                                if (strpos($verre->libelle_verre, $data['teinte']) === false)
                                    continue;
                            } else if (!$isPhotocromie && (strpos($verre->libelle_verre, "G15 C") !== false || strpos($verre->libelle_verre, "Brun C") !== false || strpos($verre->libelle_verre, "Gris C") !== false))
                                continue;

                            if (strpos($verre->libelle_verre, $data['traitement']) === false) {
                                continue;
                            }
                        }

                    }

					$CheckVerreStock[$verre->id_verre]['intitule'] = $verre->libelle_verre;
					$CheckVerreStock[$verre->id_verre]['prix'] = $verre->prix_verre;


				}
			}


            // Bluecoat / Defender

            if(count($CheckVerreStock) > 1) {
                foreach($CheckVerreStock as $id_verre => $v){
                    if(strpos($v['intitule'], "BlueCoat") !== false) {
                        if(strpos($v['intitule'], $data['traitement']) !== false) {
                            $prix_verre = $this->m_verres->getPrixVerre($id_verre,$this->data['user_info']->id_grille_tarifaire, $this->data['user_info']->id_users);
                            echo json_encode(array('intutile' => $v['intitule']." diamètre ".$data['diametre']." (".($prix_verre[0]->prix_verre)." €)", 'id_verre' => $id_verre));
                            exit;
                        }
                    }
                }
            }
		
			if(count($CheckVerreStock) == 1){
				foreach($CheckVerreStock as $id_verre => $v){

                    if($this->data['user_info']->restriction_compte == 0) {
                        $prix_verre = $this->m_verres->getPrixVerre($id_verre, $this->data['user_info']->id_grille_tarifaire, $this->data['user_info']->id_users);
                        echo json_encode(array('intutile' => $v['intitule'] . " diamètre " . $data['diametre'] . " (" . ($prix_verre[0]->prix_verre) . " €)", 'id_verre' => $id_verre));
                    }
                    else {
                        echo json_encode(array('intutile' => $v['intitule'] . " diamètre " . $data['diametre'], 'id_verre' => $id_verre));
                    }

				}
			}else
				echo json_encode(array('intutile' => 'Aucun verre ne correspond à votre recherche', 'id_verre' => ''));
		}
		else{
			echo json_encode(array('disconnect' => true));
		}
	}

    public function subscribe(){
        if($this->input->is_ajax_request()){
            $data = $this->input->post('inscription');

            if($this->checkSiret($data['numero_siret'])){
                //if($this->checkTvaIntraComm($data['numero_siret']) == $data['tva_intracom']){
                    $passAleatoire = $this->CarAleatoire(8);
                    $data['email'] = strtolower($data['email']);
                    $data['pass'] = md5($data['email'].'&&'.$passAleatoire);
                    $data['date_inscription'] = date("Y-m-d H:i:s");

                    if(($return = $this->m_users->addUser($data))!=""){
                        echo json_encode(array('status'=> $return));
                    }
                    else{
                        echo json_encode(array('status'=> 'ok'));


                        //<br><br>
                        //Vous trouverez aussi en pièce jointe de ce mail notre catalogue électronique pour votre logiciel optique. Merci de bien vouloir contacter le service client de votre logiciel et lui fournir le fichier joint à ce mail, pour qu'il puisse vous intégrer notre catalogue Optimize sur votre logiciel d'opticien.
                        
                        $mess_txt = "<html>
										<head></head>
										<body><b>Bonjour</b>!
										<br><br> 
										Cet email fait suite à votre inscription. Voici votre mot de passe : ".$passAleatoire.", il vous permet de vous connecter au site, converservez le précieusement.
										</body>
									</html>";

                        $subjet_txt = "Vos informations de connexion";

                        $this->mail($data,$mess_txt,true,$subjet_txt);
                        // 'static/download/optimize.txt'
                    }
                /*}
                else{
                    echo json_encode(array('status'=> 'error', 'error' => 'tva'));
                }*/
            }
            else{
                echo json_encode(array('status'=> 'error', 'error' => 'siret'));
            }
        }
        else
            $this->redirect();
    }

    public function verre_personnalise(){
		if($this->session->userdata('logged_in') === true){
			$data = $this->session->userdata('data_user');
			$data['page'] = $data['title'] = "Mes verres personnalisés";
			$data['generation_verre'] = $this->m_generation_verre->getGenerationVerre(NULL,$data['user_info']->id_users,false);
			$this->load->model('m_verres_generation_personnalise');
			$data['verre_personnalise'] = $this->m_verres_generation_personnalise->getVerrePersonnalise($data['user_info']->id_users);

			$this->load->view('verre_perso',$data);
		}
		else
			$this->redirect();
    }	

    public function addPerso(){
        if($this->input->is_ajax_request()){
            $data = $this->input->post();
            $data['id_users'] = $this->data['user_info']->id_users;
            $this->load->model('m_verres_generation_personnalise');

            $this->m_verres_generation_personnalise->ajoutVerrePersonnalise($data);
        }
    }

    public function upload(){
        if ($this->input->post() !== FALSE)
            if(empty($this->data['user_info']->document_rib) || $this->data['user_info']->valid_document_rib == 2){

                if($this->data['user_info']->valid_document_rib == 0 || $this->data['user_info']->valid_document_rib == 2){
                    $return = $this->upload_file('upload_file_rib');

					if($return !== false){
						$data['email'] = $this->data['data_admin']['admin_info']->email;
						$mess_txt = "<html><head></head><body> Un nouveau rib vient d'être envoyé par le magasin ".$this->data['user_info']->id_users."</body></html>";
						$sujet_txt = "Reception document rib";

						$this->mail($data,$mess_txt,true,$sujet_txt);
					}
				}
            }

            $this->redirect("/index/profile");
    }

    private function checkSiret($siret= ""){
        // On ne garde que les chiffres
        $siret = preg_replace("/[^\d]+/", '', $siret);

        if($this->checkLuhn($siret)) return true; else return false;
    }

    private function checkTvaIntraComm($siret){
        $siren = substr($siret,0,9);
        if($this->checkLuhn($siren)) {
            // N°TVA = FR + clé + SIREN
			$clee = (( 12 + 3 * ( $siren % 97 ) ) % 97 );
			
            return "FR" . ($clee<10 ? '0' : ''). $clee . $siren;
        }

        return false;
    }

    private function checkLuhn($number) {
		settype($number, 'string');
		$sumTable = array(array(0,1,2,3,4,5,6,7,8,9),array(0,2,4,6,8,1,3,5,7,9));
		$sum = $flip = 0;
		for ($i = strlen($number) - 1; $i >= 0; $i--) {
			$sum += $sumTable[$flip++ & 0x1][$number[$i]];
		}
		
		if($sum % 10 === 0) return true; else return false;
    }

    public function error_404(){
        if($this->session->userdata('logged_in') === true){
            $this->data['page'] = $this->data['title'] = "404";
            $this->load->view('404',$this->data);
        }else
            $this->login();
    }

    public function sendMailresetPass(){
        if($this->input->is_ajax_request()){
            $data = $this->input->post();
			$data['numero_finess'] = trim($data['numero_finess']);
            if(!empty($data['numero_finess'])){
                if(($data = $this->m_users->getUserByNumeroFiness($data['numero_finess'])) !== false){
                    $data['email'] = $data[0]->email;
                    $lien = '<a href="'.$this->config->item('base_url').'index/recovery/'.$data[0]->pass.'">'.$this->config->item('base_url')."index/recovery/".$data[0]->pass.'</a>';
                    $mess_txt = "<html><head></head><body><b>Bonjour</b>!<br><br> cet email fait suite à une demande de réinitialisation de mot de passe. Cliquer sur le lien suivant pour accèder à la page de changement de mot de passe : <br><br>".$lien." <br><br> Si cette demande ne provient pas de vous, veuillez ne pas tenir compte de cet email.<br><br> A bientôt sur Optieyes !</body></html>";

                    $subjet_txt = "Réinitialisation de votre mot de passe";

                    $this->mail($data,$mess_txt,true,$subjet_txt);
                }
                else{
                    echo "numero_siret_does_not_exist";
                }
            }
            else
                echo "empty_numero_siret";
        }
        else
            $this->redirect();
    }

    public function recovery($md5){
        if(($data = $this->m_users->getUsersByMd5($md5)) !== false){
            $this->login(true);
        }
        else
            $this->redirect();
    }

	public function unsubscribe(){
		if($this->input->is_ajax_request() && $this->session->userdata('logged_in') === true){
			$this->m_users->updateUser(array('id_users' => $this->data['user_info']->id_users, 'active' => 0));
			$this->logout();
		}
	}

    public function redirect($param="/"){
        header("location:".$param);
    }

    public function logout(){
        $this->load->library('session');
		$this->session->sess_destroy();
        $this->redirect();
    }
	
	
	public function download($path,$file){
		$this->load->helper('download');
	
		$data = file_get_contents("static/".$path."/".$file);

		force_download($file, $data); 
	}


    public function get_lens_brands(){
        if($this->input->is_ajax_request()){

            $generation = (int) $this->input->post('generation');
            $progressive = (int) $this->input->post('progressive');
            $toric = (int) $this->input->post('toric');

            $brands = $this->m_lens->getAvailableBrands($generation, $progressive, $toric);

            if($brands) {
                echo '<select class="form-control" name="brand">';
                echo '<option>Sélectionner une marque</option>';
                foreach($brands as $brand) {
                    echo '<option value="'.$brand->id.'">'.$brand->name.'</option>'."\n";
                }
                echo '</select>';
            }
            else {
                echo 'Aucun produit ne correspond à votre recherche';
            }
        }
    }


    public function get_lenses(){

        if($this->input->is_ajax_request()){

            $args = array(
                'generation_id' => (int) $this->input->post('generation'),
                'brand_id' => (int) $this->input->post('brand'),
                'progressive' => (int) $this->input->post('progressive'),
                'toric' => (int) $this->input->post('toric'),
            );


            if(false !== $lenses = $this->m_lens->getLenses($args)) {

                foreach($lenses as $lens) {
                    echo '<div class="item">';
                    echo '<div class="thumb"><img src="'.site_url('uploads/'.$lens->image).'" /></div>';
                    echo '<b>'.$lens->name.'</b><br />';
                    echo 'Boite de '.$lens->packaging.'<br />';
                    echo '<span class="price">'.number_format($lens->price, 2, ',', '').'€</span><br />';
                    echo '<a class="btn btn-warning product-select" rel="'.$lens->id.'">Choisir</a>';
                    echo '</div>';
                }

            }
            else {
                echo 'Aucun produit ne correspond à votre recherche';
            }
        }

    }

    public function get_lens_info($lens_id = false){

        if(false !== $lens = $this->m_lens->getLens($lens_id)) {

            var_dump($lens);

        }

    }

    public function get_lens_config(){

        if($this->input->is_ajax_request()) {

            $config = $this->lens_config;

            $lens_id = (int) $this->input->post('id');

            if(false !== $lens = $this->m_lens->getLensConfigurator($lens_id)) {

                $build_data = json_decode($lens[0]->data);

                echo '<div class="product-config">';

                echo '<input type="hidden" name="lens_id" value="'.$lens_id.'">';


                foreach($config['sides'] as $k => $v) {

                    echo '<div class="side" data-side="'.$k.'">';

                    echo '<div class="mask"></div>';

                    echo '<h4>Corrections Oeil '.$v.'</h4>
                            <div class="form-horizontal">';

                    foreach($build_data as $attr => $props) {

                        if(false !== $props) {

                            /*echo '<pre>';
                            var_dump($props);
                            echo '</pre>';*/


                            echo '<div class="form-group">
                                        <label class="col-sm-3 text-center" for="'.$attr.'['.$k.']">'.$config['attrs'][$attr].'</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="'.$attr.'['.$k.']" name="build['.$attr.']['.$k.']">';

                            switch($props->type) {

                                case 'range':

                                    $numItems = count($props->data);
                                    $rangeLoop = 1;

                                    foreach($props->data as $range) {

                                        //if(is_float($range->step)) {

                                        for($i = $range->start; $i < $range->end; $i += $range->step) {

                                            if(!in_array($i, $props->excl)) {

                                                if($attr == 'axe') {
                                                    $value = number_format($i, 0, '', '');
                                                    $show = number_format($i, 0, '', '').' °';
                                                }
                                                else {
                                                    $value = number_format($i, 2, '.', '');
                                                    $show = number_format($i, 2, '.', '');
                                                }


                                                echo '<option value="'.$value.'">'.$show.'</option>';
                                            }

                                        }

                                        if($rangeLoop == $numItems) {
                                            if(!in_array($i, $props->excl)) {

                                                if($attr == 'axe') {
                                                    $value = number_format($i, 0, '', '');
                                                    $show = number_format($i, 0, '', '').' °';
                                                }
                                                else {
                                                    $value = number_format($i, 2, '.', '');
                                                    $show = number_format($i, 2, '.', '');
                                                }

                                                echo '<option value="' . $value . '">' . $show . '</option>';
                                            }
                                        }

                                        /*}
                                        else {
                                            for($i = $range->start; $i <= $range->end; $i += $range->step) {
                                                echo '<option value="'.$i.'">'.$i.'</option>';
                                            }
                                        }*/

                                        ++$rangeLoop;

                                    }

                                    break;

                                case 'list':

                                    foreach($props->data as $step) {
                                        echo '<option value="'.$step.'">'.$step.'</option>';
                                    }

                                    break;
                            }



                            echo '</select>
                                        </div>
                                    </div>';

                        }

                    }

                    echo '<div class="form-group">
                                <label class="col-sm-3 text-center" for="qty['.$k.']">Quantité</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="qty['.$k.']" name="build[qty]['.$k.']">';
                    for($i=1; $i <= 10; ++$i) {
                        echo '<option value="'.$i.'">'.$i.'</option>';
                    }
                    echo '</select>
                                </div>
                            </div>';

                    $excl = 'left';
                    if($k == 'left') {
                        $excl = 'right';
                    }

                    echo '<div class="col-sm-9 col-sm-offset-3"><input type="checkbox" value="1" class="excl" name="build[excl]['.$excl.']" id="build[excl]['.$excl.']" /> <label class="control-label" for="excl['.$excl.']"> Commander uniquement oeil '.$v.'</label></div>';

                    echo '</div>
                        </div>';

                }
                echo '</div>';

                /*echo '<pre>';
                var_dump($build_data);
                echo '</pre>';
                */

            }
            else {
                echo '<b>Erreur</b><br /> Ce produit n\'est pas disponible actuellement';
            }

        }

    }

    public function add_lens_order() {
        if($this->input->is_ajax_request()) {

            $data = $this->session->userdata('order');
            $lens = $this->m_lens->getLens($data['lens_id']);

            $qty = 0;
            foreach($data['build']['qty'] as $k => $v) {
                if(!isset($data['build']['excl'][$k])) {
                    $qty += $v;
                }
            }

            $total_order = $lens->price * $qty;
			
			$userdata = $this->m_users->getUserById($data['user_id'])[0];
			
				

            $args = array(
                'reference_client' => $data['client_ref'],
                'lens_id' => (int) $data['lens_id'],
                'lens_generation' => $lens->generation_id,
                'information_commande' => json_encode($data['build']),
                'commentaire' => $data['commentaire'],
                'id_users' => (int) $data['user_id'],
				'tarif_packaging' => $userdata->tarif_packaging,
                'tarif_livraison' => $userdata->tarif_livraison,
                'total_commande' => $total_order
            );


            if($this->m_lens->addLensOrder($args)) {
                echo 'ok';
            }
            else {
                echo 'error';
            }

        }

    }
	
	public function supprimer_monture_temp($id_monture_temp)
	{
		$this->db->query('DELETE FROM commande_montures_temp WHERE id = "'.$id_monture_temp.'" AND status=0');
		$this->redirect('/index/commander_montures');
	}
	
	public function add_montures_order() {
        if($this->input->is_ajax_request()) {
			
			$user_id = $this->data['user_info']->id_users;
			
            $data = $this->session->userdata('order');
			
			$total_order = 0;
			
			//echo json_encode($data['montures']);
			
            foreach ($data['montures'] as $monture)
			{
				if($monture->pack == null)
				{
					$total_order += $monture->prix_vente*$monture->qty;
					$stock_avant = $monture->stock;
					$this->db->where('id', $monture->id);
					$this->db->set('stock', 'stock-'.$monture->qty, FALSE);
					$this->db->update('montures');
					$stock_apres = $monture->stock-$monture->qty;
					
					if($stock_avant>=20 && $stock_apres<20)
					{
						$mess_txt = "<html>
                        <head></head>
                        <body>
                        Collection : ".$monture->collection.' ,Modele : '.$monture->modele.',Couleur : '.$monture->couleur." ,Stock : ".$stock_apres."
                        </body>
                      </html>";
						$subjet_txt = "Alerte stock monture";
						$html = true;
						$mdata['email'] = 'optieyescommande@gmail.com';
						// $this->mail($mdata, $mess_txt, $html, $subjet_txt);
						//$data['email'] = $user[0]->email;
					}
				}
				else
				{
					$total_order += $monture->prixpack*$monture->qty;
					
					 $montures_du_pack = $this->m_montures->getAllMonturesDuPack($monture->pack_id);
					 foreach($montures_du_pack as $monture_du_pack)
					 {
						$stock_avant = $monture_du_pack->stock;
						$this->db->where('id', $monture_du_pack->id);
						$this->db->set('stock', 'stock-'.$monture->qty, FALSE);
						$this->db->update('montures');
						$stock_apres = $monture_du_pack->stock-$monture->qty;
						 
						if($stock_apres<20)
						{
							$mess_txt = "<html>
							<head></head>
							<body>
							Pack : ".$monture->pack.' ,Modele : '.$monture_du_pack->modele.',Couleur : '.$monture_du_pack->couleur." ,Stock : ".$stock_apres."
							</body>
						  </html>";
							$subjet_txt = "Alerte stock monture";
							$html = true;
							$mdata['email'] = 'optieyescommande@gmail.com';
							// $this->mail($mdata, $mess_txt, $html, $subjet_txt);
							//$data['email'] = $user[0]->email;
						}
					 }
					
				}
					
			}
			//$data['client_ref'] = " ";
			$userdata = $this->m_users->getUserById($user_id)[0];
			
			$data['commentaire'] = $data['commentaire'];
			
			
            $args = array(
                'reference_client' => $data['client_ref'],
                'lens_id' => 0,
                'lens_generation' => 0,
                'information_commande' => json_encode($data['montures']),
                'commentaire' => $data['commentaire'],
                'id_users' => $user_id,
                'total_commande' => $total_order,
				'tarif_livraison' => $userdata->tarif_livraison,
				'tarif_packaging' => $userdata->tarif_packaging,
				'commande_monture' => 1
            );
			
			$this->db->query('DELETE FROM commande_montures_temp WHERE id_client = "'.$user_id.'" AND status=0');

            if($this->m_montures->addMonturesOrder($args)) {
                echo 'ok';
            }
            else {
                echo 'error';
            }

        }

    }

    public function set_lens_order() {
        if($this->input->is_ajax_request()){

            $data = $this->input->post();

            $data['config'] = array(
                'sides' => array(
                    'left' => 'Gauche',
                    'right' => 'Droit'
                ),
                'attrs' => array(
                    'sph' => 'Sphère',
                    'cyl' => 'Cylindre',
                    'axe' => 'Axe',
                    'ray' => 'Rayon',
                    'dia' => 'Diamètre',
                    'add' => 'Progression'
                )
            );


            $data['user_info'] = $this->data['user_info'];
            $data['data_admin']['admin_info'] = $this->m_users->getUserById(1)[0];
            $data['lens'] = $this->m_lens->getLens($data['lens_id']);

            $this->session->set_userdata('order', $data);
            echo $this->load->view('ajax_show_lens_order',$data);

        }
    }

    public function getLensOrders($status) {

        return $this->m_lens->getUserOrders($status, $this->data['user_info']->id_users);

    }
	
	public function getMonturesOrders($status) {

        
		return $this->m_montures->getUserOrders($status, $this->data['user_info']->id_users);

    }
	
	public function commande_details_montures() {

        $id = (int) $this->input->post('id');

        $order = $this->m_montures->getOrderById($id);

        if($this->session->userdata('logged_in') === true) {

            $user_id = $this->data['user_info']->id_users;

            if($order[0]->id_users === $user_id) {

                $data['user_info'] = $this->m_users->getUserById($order[0]->id_users)[0];
                $data['data_admin']['admin_info'] = $this->m_users->getUserById(1)[0];
                $data['client_ref'] = $order[0]->reference_client;
                $data['order_id'] = $order[0]->id_commande;
                $data['montures'] = json_decode($order[0]->information_commande, true);
				//$data['m'] = $order[0]->information_commande;
            }
            else {
                $this->redirect();
            }

            echo $this->load->view('layout/commande-montures-detail',$data);

        }
        else {
            $this->redirect();
        }

    }

    public function commande_details_lentilles() {

        $id = (int) $this->input->post('id');

        $order = $this->m_lens->getOrderById($id);

        if($this->session->userdata('logged_in') === true) {

            $user_id = $this->data['user_info']->id_users;

            if($order[0]->id_users === $user_id) {

                $data['config'] = array(
                    'sides' => array(
                        'left' => 'Gauche',
                        'right' => 'Droit'
                    ),
                    'attrs' => array(
                        'sph' => 'Sphère',
                        'cyl' => 'Cylindre',
                        'axe' => 'Axe',
                        'ray' => 'Rayon',
                        'dia' => 'Diamètre',
                        'add' => 'Progression'
                    )
                );

                $data['user_info'] = $this->m_users->getUserById($order[0]->id_users)[0];
                $data['data_admin']['admin_info'] = $this->m_users->getUserById(1)[0];
                $data['lens'] = $this->m_lens->getLens($order[0]->lens_id);
                $data['client_ref'] = $order[0]->reference_client;
                $data['order_id'] = $order[0]->id_commande;
                $data['build'] = json_decode($order[0]->information_commande, true);

            }
            else {
                $this->redirect();
            }

            echo $this->load->view('layout/commande-lentilles-detail',$data);

        }
        else {
            $this->redirect();
        }

    }


    public function commander_lentilles(){


        if($this->session->userdata('logged_in') === true) {

            $user_id = $this->data['user_info']->id_users;

            $this->load->helper('slimpay');
            $this->load->library('email');

            $user_info = $this->m_users->getUserById($user_id);
            $result = $this->m_config->getConfig(array('nom_config' => 'commentaire'));

            $title = 'Commander des lentilles';

            $regions = $this->config->item('regions');

            if(isset($user_info[0]->cp)) {
                $dep = substr($user_info[0]->cp, 0, -3);
                $region = ($regions[$dep] == "Ile-de-France" ? 1 : 0);
            }
            else {
                $region = 0;
            }
			

            $date = new DateTime();
            $date->modify('-60 days');

            $this->load->view('lens_order', array(
                'modules' => array(
                    'sweetalert' => true,
                    'touchspin' => true,
                ),
                'user_info' => $user_info[0],
                'user_id' => $user_id,
                'page' => 'commander_lentilles',
                'title' => $title,
                'region' => $region,
                'numero_siret' => $this->session->userdata('numero_siret'),
                'tva_intracomm' => $this->session->userdata('tva_intracomm'),
                'commentaire_actif' => json_decode($result[0]->param_config),
                'id_commandes' => $this->getUserOrders($date),
                'lens_generations' => $this->m_lens->getGenerations()
            ));

        }
        else {
            $this->redirect();
        }


    }
	
	public function can_montures_order()
	{
		$d = date("Y/m/d H:i:s", strtotime("-30 minutes"));
		$this->db->from('commande_montures_temp');
        $this->db->select('*');
		$this->db->where('id_client', $this->data['user_info']->id_users);
		$this->db->where('status', 0);
		$this->db->where('date >', $d);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			echo "1";
		}
		else
		{
			echo "0";
		}
	}
	
	
	public function get_collections()
	{
		
		$data['user_info'] = $this->data['user_info'];			
		$this->db->query('DELETE FROM commande_montures_temp WHERE id_client = "'.$data['user_info']->id_users.'" AND date < DATE_SUB(NOW(), INTERVAL 30 MINUTE) AND status=0');
		
		$collections = $this->m_montures->getCollection();

		foreach($collections as $collection) {
			echo '<div class="item">';
			echo '<div class="thumb"><img src="'.site_url('uploads/'.$collection->image).'" style="max-width: 312px;" /></div>';
			echo '<b>'.$collection->name.'</b><br />';
			echo '<a class="btn btn-warning product-select" rel="'.$collection->id.'">Choisir</a>';
			echo '</div>';
		}
            
	}
	
	public function get_packs()
	{
		
		$data['user_info'] = $this->data['user_info'];			
		$this->db->query('DELETE FROM commande_montures_temp WHERE id_client = "'.$data['user_info']->id_users.'" AND date < DATE_SUB(NOW(), INTERVAL 30 MINUTE) AND status=0');
		
		$packs = $this->m_montures->getPacks();

		foreach($packs as $pack) {
			$checkStock = 0;
			$montures_du_pack = $this->m_montures->getAllMonturesDuPack($pack->id);
			 foreach($montures_du_pack as $monture)
			 {
				 if($monture->stock == 0)
				 {
					 $checkStock++;
				 }
			 }
			
			if($checkStock == 0)
			{
				echo '<div class="item">';
				echo '<div class="thumb"><img src="'.site_url('uploads/'.$pack->image).'" style="max-width: 312px;" /></div>';
				echo '<b>'.$pack->name.'</b><br />';
				echo '<a class="btn btn-warning product-select" rel="add_pack_'.$pack->id.'">Choisir</a>&nbsp;&nbsp;';
				echo '<a class="btn btn-warning product-select" rel="voir_pack_'.$pack->id.'">Voir les montures</a>';
				echo '</div>';
			}
		}
            
	}
	
	public function get_montures()
	{
		
		$rel = $this->input->post('id');
		
		if (strpos($rel,'add_pack') !== false) {
			//echo "Add pack Rel:".$rel;
		}
		else if(strpos($rel,'voir_pack') !== false) {
			
			//echo "Voir pack Rel:".$rel;
			$pack_id = str_replace("voir_pack_","",$rel);
			//echo "Pack id:".$pack_id;
			$montures_du_pack = $this->m_montures->getAllMonturesDuPack($pack_id);
			 foreach($montures_du_pack as $monture)
			 {
				 echo '<div class="item">';
						echo '<div class="thumb"><img src="'.site_url('uploads/'.$monture->image).'"  style="max-width: 312px;" /></div>';
						echo '<b>'.$monture->modele.'</b><br />';
						echo 'Type: '.$monture->type.'<br />';
						echo 'Taille: '.$monture->size.'<br />';
						echo 'Couleur: '.$monture->couleur.'<br />';
						echo 'Prix: '.$monture->prix_vente.'<br />';
				echo '</div>';
			 }
			 
		}
		else
		{
			//echo "Voir Montures Rel:".$rel;
			$collection_id = (int) $rel;
		
			$montures = $this->m_montures->get_Montures($collection_id);

			foreach($montures as $monture) {
				if($monture->stock > 0)
				{

					$stock_temp = $this->m_montures->check_stock($monture->id);
					if($stock_temp)
						$s_temp = $stock_temp->stock_temp;
					else
						$s_temp = 0;

					if($monture->stock-$s_temp>0)
					{
						echo '<div class="item">';
						echo '<div class="thumb"><img src="'.site_url('uploads/'.$monture->image).'"  style="max-width: 312px;" /></div>';
						echo '<b>'.$monture->modele.'</b><br />';
						echo 'Type: '.$monture->type.'<br />';
						echo 'Taille: '.$monture->size.'<br />';
						echo 'Couleur: '.$monture->couleur.'<br />';
						echo 'Prix: '.$monture->prix_vente.'<br />';
						echo '<a class="btn btn-warning monture-select" rel="'.$monture->id.'">Choisir</a>';
						echo '</div>';
					}
				}
			}
		}
	}
	
	public function add_montures_to_order() {
		
		$data['user_info'] = $this->data['user_info'];
		
		$monture_id = (int) $this->input->post('id');
		$this->db->from('commande_montures_temp');
        $this->db->select('*');
		$this->db->where('id_client', $data['user_info']->id_users);
		$this->db->where('id_monture', $monture_id);
		$this->db->where('status', 0);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
            $id_temp = $query->result()[0];
			$this->db->where('id', $id_temp->id); 
            $this->db->update('commande_montures_temp', array(
                    'qty' => $id_temp->qty + 1 )
                );
        }
		else
		{
			$data = array('id_client' => $data['user_info']->id_users, 'id_monture' => $monture_id, 'qty' => 1, 'date' => date('Y-m-d H:i:s'), 'status' => 0);
            $this->db->insert('commande_montures_temp', $data);
		}
	}
	
	public function add_pack_to_order() {
		
		$data['user_info'] = $this->data['user_info'];
		
		$pack_id = str_replace("add_pack_","",$this->input->post('id'));
		
		//$monture_id = (int) $this->input->post('id');
		$this->db->from('commande_montures_temp');
        $this->db->select('*');
		$this->db->where('id_client', $data['user_info']->id_users);
		$this->db->where('id_pack', $pack_id);
		$this->db->where('status', 0);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
            $id_temp = $query->result()[0];
			$this->db->where('id', $id_temp->id); 
            $this->db->update('commande_montures_temp', array(
                    'qty' => $id_temp->qty + 1 )
                );
        }
		else
		{
			$data = array('id_client' => $data['user_info']->id_users, 'id_pack' => $pack_id, 'qty' => 1, 'date' => date('Y-m-d H:i:s'), 'status' => 0);
            $this->db->insert('commande_montures_temp', $data);
		}
	}
	
	public function set_montures_order() {
		
		$id_user = $this->data['user_info']->id_users;
		
        if($this->input->is_ajax_request()){

            $data = $this->input->post();
			$data['client_ref'] =  $this->input->post('ref_client');
        
			$this->db->from('commande_montures_temp cm');
			$this->db->select('m.*, cm.id as id_temp, cm.qty, cm.status, cm.id_client, collec.name as collection, m_pack.id as pack_id, m_pack.name as pack, m_pack.prix as prixpack');
			$this->db->where('cm.id_client', $id_user);
			$this->db->where('cm.status', 0);
			$this->db->join('montures m', 'm.id = cm.id_monture','left');
			$this->db->join('montures_collection collec', 'm.id_collection = collec.id','left');
			$this->db->join('montures_pack m_pack', 'm_pack.id = cm.id_pack','left');
			$query = $this->db->get();
			if ($query->num_rows() > 0) {
            	$data['montures'] = $query->result();
				
				$data['user_info'] = $this->data['user_info'];
				$data['data_admin']['admin_info'] = $this->m_users->getUserById(1)[0];
				$userdata = $this->m_users->getUserById($id_user)[0];
				$data['tarif_livraison'] = $userdata->tarif_livraison;
                $data['tarif_packaging'] = $userdata->tarif_packaging;
				$this->session->set_userdata('order', $data);
				echo $this->load->view('ajax_show_montures_order',$data);
			}
			else
			{
				echo '<b>Erreur</b>';
			}
            
        }
    }
	
	public function commander_montures(){


        if($this->session->userdata('logged_in') === true) {

            $user_id = $this->data['user_info']->id_users;

            $this->load->helper('slimpay');
            $this->load->library('email');

            $user_info = $this->m_users->getUserById($user_id);
            $result = $this->m_config->getConfig(array('nom_config' => 'commentaire'));

            $title = 'Commander des montures';

            $regions = $this->config->item('regions');

            if(isset($user_info[0]->cp)) {
                $dep = substr($user_info[0]->cp, 0, -3);
                $region = ($regions[$dep] == "Ile-de-France" ? 1 : 0);
            }
            else {
                $region = 0;
            }

            $date = new DateTime();
            $date->modify('-60 days');

            $this->load->view('montures_order', array(
                'modules' => array(
                    'sweetalert' => true,
                    'touchspin' => true,
                ),
                'user_info' => $user_info[0],
                'user_id' => $user_id,
                'page' => 'commander_montures',
                'title' => $title,
                'region' => $region,
                'numero_siret' => $this->session->userdata('numero_siret'),
                'tva_intracomm' => $this->session->userdata('tva_intracomm'),
                'commentaire_actif' => json_decode($result[0]->param_config),
                'id_commandes' => $this->getUserOrders($date)
            ));

        }
        else {
            $this->redirect();
        }


    }

}