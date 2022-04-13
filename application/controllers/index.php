<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(E_ALL);
class index extends MY_Controller {

    public function __construct() {
        parent::__construct();
//        echo '<pre>';
//        print_r($this->session->userdata());
//        echo '</pre>';die;
        if($this->session->userdata('data_user') !== false && !isset($this->data['data_user'])){
            $this->data = $this->session->userdata('data_user');
            $this->data['data_admin'] = $this->session->userdata('data_admin');
            $this->data['parametre_lang_datable'] = $this->config->item('parametre_lang_datable');
            $this->data['parametre_export_datable'] = $this->config->item('parametre_export_datable');
            $this->data['taux_tva'] = $this->session->userdata('taux_tva') ;
        }

        if (isset($this->session->userdata('data_user')['user_info'])) {
            $user = $this->getUserById($this->session->userdata('data_user')['user_info']->id_users);
        }
        $function = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        if($this->session->userdata('data_user') !== false
            && $user->accept_conditions == false && $function != 'logout' && $function != 'verifyCheckedCondition') {
//            var_dump($this->data);die;
            $this->data['page'] = $this->data['title'] = "CGV";
            $this->load->view('accept_conditions', $this->data);
        }

        if($this->session->userdata('is_admin')){
            $this->logout();
            $this->redirect();
        }

        $this->data['pre_url'] = "/";
        $this->data['version'] = md5("version2");

		$this->load->helper(array('cookie', 'url'));
    }

    private function test2() {
        $this->load->view('accept_conditions');
    }

    private function getUserById($id) {
        $query = $this->db->where('id_users', $id)->get('users');
        $user = $query->result();
        return $user[0];
    }

	public function index(){
        if($this->session->userdata('logged_in') === true)
           $this->commande();
        else
		    $this->login();
	}

	public function verifyCheckedCondition() {
//        print_r($this->data['user_info']);die;
        $userId = $this->data['user_info']->id_users;
        $user = $this->m_users->getUserById($userId)[0];
        $acceptCondition = $user->accept_conditions;
        $this->m_users->acceptConditions($userId);
        $data = [];
        $data['email'] = $this->data['user_info']->email;
//        $data['email'] = "yonathan.optieyes@gmail.com";
        $data['email_cc'] = 'optieyescommande@gmail.com';
        $data['email_cci'] = 'yonathan.optieyes@gmail.com';
        setlocale(LC_TIME,
            'fr_FR.utf8',
            'fra');
        $time = date('Y-m-d H:i:s');
        $date = strftime( "%A %d %B %Y" , strtotime( $time ));
        //print_r($date);die;
        $hour = strftime( "%H:%M:%S" , strtotime( $time ));
        $msgTxt = "Madame, Monsieur,<br><br>Ci joint les conditions générales de ventes que vous venez d’accepter.<br><br>Merci de votre confiance !<br><br><br>L’équipe Optieyes.";
        $subject = "CGV Optieyes acceptées par le magasin $userId le $date à $hour";
        if (!$acceptCondition) {
            $this->mail($data, $msgTxt, true, $subject, 'CGV_Optieyes_24062021_clean.pdf');
        }
        echo 'true';
    }

	public function test() {
        $data['certificat'] = $this->m_commande->getCertificatStock('565817');

        $data['control'] = array(
            'certificat' => bin2hex(openssl_random_pseudo_bytes(10))
        );

        /*$this->db->insert('controle', array(
            'id' => $data['control']['certificat'],
            'control' => count($data['certificat'])
        ));
        */

//        $this->db->insert('controle_test', array(
//            'v' => $data['control']['certificat'],
//            'control' => count($data['certificat'])
//        ));

        //$message = json_encode($data);


        // Génération des PDF
        $docs = array(
            'certificat' => $this->config->item('directory_pdf').'/'.$this->pdf('certificat_authenticite', $data, 565817, false, 'paysage', $customsize = array(0,0,243,153))
        );
    }

    public function export_verre_csv() {
        $sql = "SELECT id_grille_tarifaire, libelle_verre, prix_verre 
                FROM `grille_tarifaire` AS gt 
                INNER JOIN `verres` as v ON v.id_verre = gt.id_verre 
                ORDER BY libelle_verre, id_grille_tarifaire";
        $result = $this->db->query($sql);
        echo '<pre>';
        print_r($result->result());
        echo '</pre>';
        die;
    }

	public function getTypeDeVerre($recovery=false){
		if($this->session->userdata('logged_in') === true){
		//if($this->session->userdata('logged_in') === true && $this->input->is_ajax_request()){

			$indice = $_POST['indiceId'];
			$lensFocalGroup = $_POST['lensFocalGroup'];
			$generation = $_POST['generation'];
			$sphereD = $_POST['sphereD'];
			$cylindreD = $_POST['cylindreD'];
			$axeD = $_POST['axeD'];
			$additionD = $_POST['additionD'];
			$stock = $_POST['stockD'];
            $teledetourage = $_POST['teledetourage'];
			$panierA = $_POST['panierA'];

			if(isset($_POST['type']))
				$type = $_POST['type'];
			else
				$type = 1;

			$user_id = $this->data['user_info']->id_users;

			$res = $this->m_passer_commande_verre->getlens($indice,$lensFocalGroup,$generation,$sphereD,$cylindreD,$axeD,$additionD,$stock,$user_id,$panierA,$type,$teledetourage);
			echo json_encode($res);
		}
		else
			$this->redirect();
	}

	public function getStockTypeDeVerre($recovery=false){
		if($this->session->userdata('logged_in') === true){
		//if($this->session->userdata('logged_in') === true && $this->input->is_ajax_request()){
			$indice = $_POST['indiceId'];
			$lensFocalGroup = $_POST['lensFocalGroup'];
			$generation = $_POST['generation'];
			$sphereD = $_POST['sphereD'];
			$cylindreD = $_POST['cylindreD'];
			$axeD = $_POST['axeD'];
			$additionD = $_POST['additionD'];
			$stock = $_POST['stockD'];

			$panierA = $_POST['panierA'];

			if(isset($_POST['type']))
				$type = $_POST['type'];
			else
				$type = 1;

			$user_id = $this->data['user_info']->id_users;

			$res = $this->m_passer_commande_verre->getstocklens($indice,$lensFocalGroup,$generation,$sphereD,$cylindreD,$axeD,$additionD,$stock,$user_id,$panierA,$type);
			echo json_encode($res);
		}
		else
			$this->redirect();
    }

	public function getColor($recovery=false){
		if($this->session->userdata('logged_in') === true){
			$name_lens = $_POST['lens'];
			if(strpos($name_lens, 'Mineral') !== false || strpos($name_lens, 'Minéral') !== false)
			{
				$res = $this->m_passer_commande_verre->getColors($_POST['lens']);
			}
			else
				$res = $this->m_passer_commande_verre->getColors();
			echo json_encode($res);
		}
		else
			$this->redirect();
    }

    public function getPrix($recovery=false){
		//if($this->session->userdata('logged_in') === true && $this->input->is_ajax_request()){
		if($this->session->userdata('logged_in') === true){
			$idlens = $_POST['lens'];
			$typedelens = $_POST['typedelens'];
//            var_dump($idlens);

			$idlens = str_replace("]","",$idlens);

			$user_id = $this->data['user_info']->id_users;

			if($typedelens == "stock")
			{
				$res = $this->m_passer_commande_verre->getPrixStock($idlens,$user_id);
			}
			else
			{
				$generation = $_POST['generation'];
//                var_dump($generation);
				$res = $this->m_passer_commande_verre->getPrix($idlens,$user_id,$generation,$_POST['traitementId']);
			}
			echo json_encode($res);
		}
		else
			$this->redirect();

    }

	public function get_Diametre($recovery=false){
		if($this->session->userdata('logged_in') === true){
            $sphere = $_POST['sphere'];
			$cylindre = $_POST['cylindre'];
			$lens = $_POST['lens'];
            $diametreUtile = $_POST['diametre_utile'];

			$res = $this->m_passer_commande_verre->getDiametres($lens,$sphere,$cylindre,$diametreUtile);
			echo json_encode($res);
		}
		else
			$this->redirect();
    }

	public function getOptions($recovery=false){
		if($this->session->userdata('logged_in') === true){
			$id_lens = $_POST['lens'];

			$res = $this->m_passer_commande_verre->getOptions($id_lens);
//			var_dump($res);die;
			echo json_encode($res);
		}
		else
			$this->redirect();
    }

    public function verresStockSorting($recovery=false){

	$tab_verres_stock = $_POST['tab_verres_stock'];
	$t = json_decode($tab_verres_stock);


	echo json_encode($t);

    }

    public function getColors_price($recovery=false){
		if($this->session->userdata('logged_in') === true){
            $userId = $this->data['user_info']->id_users;
            $name = $_POST['name'];
            $code = $_POST['code'];
            $nom_du_verre = $_POST['nom_du_verre'];
            $res['prix'] = $this->m_teinte->calculPrice($nom_du_verre, $code, $userId);
            $res['fr'] = $name;
            $res['id'] = $code;

//            if(strpos($nom_du_verre, 'E-Space') !== false || strpos($nom_du_verre, 'Omega') !== false || strpos($nom_du_verre, 'Platinium') !== false || strpos($nom_du_verre, 'Elysium') !== false  || strpos($nom_du_verre, 'Top Office') !== false  || strpos($nom_du_verre, 'Bifocal') !== false   || strpos($nom_du_verre, 'Bfocal') !== false  || strpos($nom_du_verre, 'Trifocal') !== false || strpos($nom_du_verre, 'Panier A Office') !== false)
//            {
//
//                    if(strpos($name, 'Nm') !== false)
//                    {
//                        $res['prix'] = 10.00;
//                        $res['fr'] = $name;
//                        $res['id'] = $code;
//
//                    }
//                    else
//                    {
//                        $res['prix'] = 6.00;
//                        $res['fr'] = $name;
//                        $res['id'] = $code;
//                    }
//            }
//            if(strpos($nom_du_verre, 'Bifocal') !== false   || strpos($nom_du_verre, 'Bfocal') !== false  || strpos($nom_du_verre, 'Trifocal') !== false || strpos($nom_du_verre, 'Panier A Double Foyer') !== false)
//            {
//
//                    if(strpos($name, 'Nm') !== false)
//                    {
//                        $res['prix'] = 10.00;
//                        $res['fr'] = $name;
//                        $res['id'] = $code;
//
//                    }
//                    else
//                    {
//                        $res['prix'] = 4.00;
//                        $res['fr'] = $name;
//                        $res['id'] = $code;
//                    }
//            }
//            if(strpos($nom_du_verre, 'T-One') !== false || strpos($nom_du_verre, 'Eyefatigue') !== false || strpos($nom_du_verre, 'Panier A Initial') !== false)
//            {
//
//                    if(strpos($name, 'Nm') !== false)
//                    {
//                        $res['prix'] = 10.00;
//                        $res['fr'] = $name;
//                        $res['id'] = $code;
//
//                    }
//                    else
//                    {
//                        $res['prix'] = 5.00;
//                        $res['fr'] = $name;
//                        $res['id'] = $code;
//                    }
//            }
//            if((strpos($nom_du_verre, 'Freestyle') !== false || strpos($nom_du_verre, 'Panier A Unifocal RX') !== false) && strpos($nom_du_verre, '1,5') !== false)
//            {
//
//                    if(strpos($name, 'Nm') !== false)
//                    {
//                        $res['prix'] = 10.00;
//                        $res['fr'] = $name;
//                        $res['id'] = $code;
//
//                    }
//                    else
//                    {
//                        $res['prix'] = 2.00;
//                        $res['fr'] = $name;
//                        $res['id'] = $code;
//                    }
//            }
//            if((strpos($nom_du_verre, 'Freestyle') !== false || strpos($nom_du_verre, 'Panier A Unifocal RX') !== false ) && strpos($nom_du_verre, '1,5') === false)
//            {
//
//                    if(strpos($name, 'Nm') !== false)
//                    {
//                        $res['prix'] = 10.00;
//                        $res['fr'] = $name;
//                        $res['id'] = $code;
//
//                    }
//                    else
//                    {
//                        $res['prix'] = 5.00;
//                        $res['fr'] = $name;
//                        $res['id'] = $code;
//                    }
//            }
//
//            if(strpos($nom_du_verre, 'Mineral') !== false || strpos($nom_du_verre, 'Minéral') !== false)
//            {
//
//                        $res['prix'] = 7.00;
//                        $res['fr'] = $name;
//                        $res['id'] = $code;
//
//            }

            //var_dump($res);
            $t[]=$res;


            echo json_encode($t);
        }
        else
            $this->redirect();
	}

    public function getColors_priceOLD($recovery=false){

	//var_dump($_POST['tab_options']);
	$tab = $_POST['tab_colors'];
	$nom = $_POST['nom_du_verre'];

	$nom_du_verre = explode(" (",$nom);

	foreach ($tab as $key => $value) {

			if(strpos($nom_du_verre[0], 'E-Space') !== false || strpos($nom_du_verre[0], 'Omega') !== false || strpos($nom_du_verre[0], 'Platinium') !== false || strpos($nom_du_verre[0], 'Elysium') !== false  || strpos($nom_du_verre[0], 'Top Office') !== false  || strpos($nom_du_verre[0], 'Bifocal') !== false   || strpos($nom_du_verre[0], 'Bfocal') !== false  || strpos($nom_du_verre[0], 'Trifocal') !== false || strpos($nom_du_verre[0], 'Panier A Office') !== false)
			{

					if(strpos($value['trad_fr'], 'Nm') !== false)
					{
						$res['prix'] = 10.00;
						$res['en'] = $value['name'];
						$res['fr'] = $value['trad_fr'];
						$res['id'] = $value['code'];

					}
					else
					{
						$res['prix'] = 6.00;
						$res['en'] = $value['name'];
						$res['fr'] = $value['trad_fr'];
						$res['id'] = $value['code'];
					}
			}
			if(strpos($nom_du_verre[0], 'Bifocal') !== false   || strpos($nom_du_verre[0], 'Bfocal') !== false  || strpos($nom_du_verre[0], 'Trifocal') !== false || strpos($nom_du_verre[0], 'Panier A Double Foyer') !== false)
			{

					if(strpos($value['trad_fr'], 'Nm') !== false)
					{
						$res['prix'] = 10.00;
						$res['en'] = $value['name'];
						$res['fr'] = $value['trad_fr'];
						$res['id'] = $value['code'];

					}
					else
					{
						$res['prix'] = 4.00;
						$res['en'] = $value['name'];
						$res['fr'] = $value['trad_fr'];
						$res['id'] = $value['code'];
					}
			}
			if(strpos($nom_du_verre[0], 'T-One') !== false || strpos($nom_du_verre[0], 'Eyefatigue') !== false || strpos($nom_du_verre[0], 'Panier A Initial') !== false)
			{

					if(strpos($value['trad_fr'], 'Nm') !== false)
					{
						$res['prix'] = 10.00;
						$res['en'] = $value['name'];
						$res['fr'] = $value['trad_fr'];
						$res['id'] = $value['code'];

					}
					else
					{
						$res['prix'] = 5.00;
						$res['en'] = $value['name'];
						$res['fr'] = $value['trad_fr'];
						$res['id'] = $value['code'];
					}
			}
			if((strpos($nom_du_verre[0], 'Freestyle') !== false || strpos($nom_du_verre[0], 'Panier A Unifocal RX') !== false) && strpos($nom_du_verre[0], '1,5') !== false)
			{

					if(strpos($value['trad_fr'], 'Nm') !== false)
					{
						$res['prix'] = 10.00;
						$res['en'] = $value['name'];
						$res['fr'] = $value['trad_fr'];
						$res['id'] = $value['code'];

					}
					else
					{
						$res['prix'] = 2.00;
						$res['en'] = $value['name'];
						$res['fr'] = $value['trad_fr'];
						$res['id'] = $value['code'];
					}
			}
			if((strpos($nom_du_verre[0], 'Freestyle') !== false || strpos($nom_du_verre[0], 'Panier A Unifocal RX') !== false ) && strpos($nom_du_verre[0], '1,5') === false)
			{

					if(strpos($value['trad_fr'], 'Nm') !== false)
					{
						$res['prix'] = 10.00;
						$res['en'] = $value['name'];
						$res['fr'] = $value['trad_fr'];
						$res['id'] = $value['code'];

					}
					else
					{
						$res['prix'] = 5.00;
						$res['en'] = $value['name'];
						$res['fr'] = $value['trad_fr'];
						$res['id'] = $value['code'];
					}
			}

			if(strpos($nom_du_verre[0], 'Mineral') !== false || strpos($nom_du_verre[0], 'Minéral') !== false)
			{

						$res['prix'] = 7.00;
						$res['en'] = $value['name'];
						$res['fr'] = $value['trad_fr'];
						$res['id'] = $value['code'];

			}

			$t[]=$res;
		}

		echo json_encode($t);
	}

	public function getOptions_price($recovery=false){
      $userId = $this->data['user_info']->id_users;
        $code = $_POST['code'];
        $nom_du_verre = $_POST['nom_du_verre'];
	        $price = $this->m_traitement->calculPrice($nom_du_verre, $code, $userId);
            $res['prix'] = $price;
//            var_dump($myTypeVerreSolaire);die;
//			if(strpos($nom_du_verre, 'Omega') !== false || strpos($nom_du_verre, 'Platinium') !== false || strpos($nom_du_verre, 'Elysium') !== false  || strpos($nom_du_verre, 'Top Office') !== false  || strpos($nom_du_verre, 'Bifocal') !== false   || strpos($nom_du_verre, 'Bfocal') !== false  || strpos($nom_du_verre, 'Trifocal') !== false || strpos($nom_du_verre, 'Panier A Office') !== false || strpos($nom_du_verre, 'Panier A Double Foyer') !== false || strpos($nom_du_verre, 'Mineral') !== false || strpos($nom_du_verre, 'Minéral') !== false)
//			{
//
//					if($name == 'Durci' || $name == '')
//					{
//						$res['prix'] = 0.00;
//
//					}
//					elseif(strpos($name, 'Miroir') !== false)
//					{
//						$res['prix'] = 14.00;
//
//					}
//					elseif($name == 'Satin')
//					{
//						$res['prix'] = 8.00;
//
//					}
//					elseif($name == 'Achromatique')
//					{
//						$res['prix'] = 16.00;
//
//					}
//					elseif($name == 'Satin Max')
//					{
//						$res['prix'] = 18.00;
//
//					}
//					elseif($name == 'Satin UV')
//					{
//						$res['prix'] = 11.00;
//
//					}
//					elseif($name == 'BlueCoat')
//					{
//						$res['prix'] = 16.00;
//
//					}
//					elseif($name == 'Satin Face Interne')
//					{
//						$res['prix'] = 8.00;
//
//					}
//					elseif($name == 'Satin Max Face Interne')
//					{
//						$res['prix'] = 18.00;
//
//					}
//					elseif($name == 'Achromatique Face Interne')
//					{
//						$res['prix'] = 16.00;
//
//					}
//					elseif($name == 'Satin UV Face Interne')
//					{
//						$res['prix'] = 11.00;
//
//					}
//					elseif($name == 'Satin Drive Or')
//					{
//						$res['prix'] = 18.00;
//
//					}
//					elseif(strpos($name, 'HMC') !== false)
//					{
//						$res['prix'] = 4.00;
//
//					}
//
//			}
//			if(strpos($nom_du_verre, 'T-One') !== false || strpos($nom_du_verre, 'Panier A Initial') !== false)
//			{
//
//				if(strpos($nom_du_verre, 'Transition') !== false || strpos($nom_du_verre, 'Xtractive') !== false || strpos($nom_du_verre, 'Polarisé') !== false || strpos($nom_du_verre, 'Drivewear') !== false){
//					if($name == 'Durci' || $name == '')
//					{
//						$res['prix'] = 0.00;
//
//					}
//					elseif(strpos($name, 'Miroir') !== false)
//					{
//						$res['prix'] = 14.00;
//
//					}
//					elseif($name == 'Satin')
//					{
//						$res['prix'] = 8.00;
//
//					}
//					elseif($name == 'Achromatique')
//					{
//						$res['prix'] = 16.00;
//
//					}
//					elseif($name == 'Satin Max')
//					{
//						$res['prix'] = 18.00;
//
//					}
//					elseif($name == 'Satin UV')
//					{
//						$res['prix'] = 11.00;
//
//					}
//					elseif($name == 'BlueCoat')
//					{
//						$res['prix'] = 16.00;
//
//					}
//					elseif($name == 'Satin Face Interne')
//					{
//						$res['prix'] = 8.00;
//
//					}
//					elseif($name == 'Satin Max Face Interne')
//					{
//						$res['prix'] = 18.00;
//
//					}
//					elseif($name == 'Achromatique Face Interne')
//					{
//						$res['prix'] = 16.00;
//
//					}
//					elseif($name == 'Satin UV Face Interne')
//					{
//						$res['prix'] = 11.00;
//
//					}
//					elseif($name == 'Satin Drive Or')
//					{
//						$res['prix'] = 18.00;
//
//					}
//					elseif(strpos($name, 'HMC') !== false)
//					{
//						$res['prix'] = 4.00;
//
//					}
//				}
//				else
//				{
//					if($name == 'Durci' || $name == '')
//					{
//						$res['prix'] = 0.00;
//
//					}
//					elseif(strpos($name, 'Miroir') !== false)
//					{
//						$res['prix'] = 14.00;
//
//					}
//					elseif($name == 'Satin')
//					{
//						$res['prix'] = 12.00;
//
//					}
//					elseif($name == 'Achromatique')
//					{
//						$res['prix'] = 20.00;
//
//					}
//					elseif($name == 'Satin Max')
//					{
//						$res['prix'] = 22.00;
//
//					}
//					elseif($name == 'Satin UV')
//					{
//						$res['prix'] = 15.00;
//
//					}
//					elseif($name == 'BlueCoat')
//					{
//						$res['prix'] = 20.00;
//
//					}
//					elseif($name == 'Satin Face Interne')
//					{
//						$res['prix'] = 12.00;
//
//					}
//					elseif($name == 'Satin Max Face Interne')
//					{
//						$res['prix'] = 22.00;
//
//					}
//					elseif($name == 'Achromatique Face Interne')
//					{
//						$res['prix'] = 20.00;
//
//					}
//					elseif($name == 'Satin UV Face Interne')
//					{
//						$res['prix'] = 15.00;
//
//					}
//					elseif($name == 'Satin Drive Or')
//					{
//						$res['prix'] = 22.00;
//
//					}
//					elseif(strpos($name, 'HMC') !== false)
//					{
//						$res['prix'] = 7.00;
//
//					}
//				}
//
//			}
//			if(strpos($nom_du_verre, 'E-Space') !== false)
//			{
//
//				if(strpos($nom_du_verre, 'Transition') !== false || strpos($nom_du_verre, 'Xtractive') !== false || strpos($nom_du_verre, 'Polarisé') !== false || strpos($nom_du_verre, 'Drivewear') !== false){
//					if($name == 'Durci' || $name == '')
//					{
//						$res['prix'] = 0.00;
//
//					}
//					elseif(strpos($name, 'Miroir') !== false)
//					{
//						$res['prix'] = 14.00;
//
//					}
//					elseif($name == 'Satin')
//					{
//						$res['prix'] = 7.00;
//
//					}
//					elseif($name == 'Achromatique')
//					{
//						$res['prix'] = 15.00;
//
//					}
//					elseif($name == 'Satin Max')
//					{
//						$res['prix'] = 17.00;
//
//					}
//					elseif($name == 'Satin UV')
//					{
//						$res['prix'] = 10.00;
//
//					}
//					elseif($name == 'BlueCoat')
//					{
//						$res['prix'] = 15.00;
//
//					}
//					elseif($name == 'Satin Face Interne')
//					{
//						$res['prix'] = 7.00;
//
//					}
//					elseif($name == 'Satin Max Face Interne')
//					{
//						$res['prix'] = 17.00;
//
//					}
//					elseif($name == 'Achromatique Face Interne')
//					{
//						$res['prix'] = 15.00;
//
//					}
//					elseif($name == 'Satin UV Face Interne')
//					{
//						$res['prix'] = 10.00;
//
//					}
//					elseif($name == 'Satin Drive Or')
//					{
//						$res['prix'] = 17.00;
//
//					}
//					elseif(strpos($name, 'HMC') !== false)
//					{
//						$res['prix'] = 3.00;
//
//					}
//				}
//				else
//				{
//					if($name == 'Durci' || $name == '')
//					{
//						$res['prix'] = 0.00;
//
//					}
//					elseif(strpos($name, 'Miroir') !== false)
//					{
//						$res['prix'] = 14.00;
//
//					}
//					elseif($name == 'Satin')
//					{
//						$res['prix'] = 11.00;
//
//					}
//					elseif($name == 'Achromatique')
//					{
//						$res['prix'] = 19.00;
//
//					}
//					elseif($name == 'Satin Max')
//					{
//						$res['prix'] = 21.00;
//
//					}
//					elseif($name == 'Satin UV')
//					{
//						$res['prix'] = 14.00;
//
//					}
//					elseif($name == 'BlueCoat')
//					{
//						$res['prix'] = 19.00;
//
//					}
//					elseif($name == 'Satin Face Interne')
//					{
//						$res['prix'] = 11.00;
//
//					}
//					elseif($name == 'Satin Max Face Interne')
//					{
//						$res['prix'] = 21.00;
//
//					}
//					elseif($name == 'Achromatique Face Interne')
//					{
//						$res['prix'] = 19.00;
//
//					}
//					elseif($name == 'Satin UV Face Interne')
//					{
//						$res['prix'] = 14.00;
//
//					}
//					elseif($name == 'Satin Drive Or')
//					{
//						$res['prix'] = 21.00;
//
//					}
//					elseif(strpos($name, 'HMC') !== false)
//					{
//						$res['prix'] = 7.00;
//
//					}
//				}
//
//			}
//			if(strpos($nom_du_verre, 'Eyefatigue') !== false || strpos($nom_du_verre, 'Freestyle') !== false || strpos($nom_du_verre, 'Panier A Unifocal RX') !== false)
//			{
//					if($name == 'Durci' || $name == '')
//					{
//						$res['prix'] = 0.00;
//
//					}
//					elseif(strpos($name, 'Miroir') !== false)
//					{
//						$res['prix'] = 14.00;
//
//					}
//					elseif($name == 'Satin')
//					{
//						$res['prix'] = 7.00;
//
//					}
//					elseif($name == 'Achromatique')
//					{
//						$res['prix'] = 15.00;
//
//					}
//					elseif($name == 'Satin Max')
//					{
//						$res['prix'] = 17.00;
//
//					}
//					elseif($name == 'Satin UV')
//					{
//						$res['prix'] = 10.00;
//
//					}
//					elseif($name == 'BlueCoat')
//					{
//						$res['prix'] = 15.00;
//
//					}
//					elseif($name == 'Satin Face Interne')
//					{
//						$res['prix'] = 7.00;
//
//					}
//					elseif($name == 'Satin Max Face Interne')
//					{
//						$res['prix'] = 17.00;
//
//					}
//					elseif($name == 'Achromatique Face Interne')
//					{
//						$res['prix'] = 15.00;
//
//					}
//					elseif($name == 'Satin UV Face Interne')
//					{
//						$res['prix'] = 10.00;
//
//					}
//					elseif($name == 'Satin Drive Or')
//					{
//						$res['prix'] = 17.00;
//
//					}
//					elseif(strpos($name, 'HMC') !== false)
//					{
//						$res['prix'] = 3.00;
//
//					}
//				}
			if(isset($res))
			{
				$t[]=$res;
			}
		echo json_encode($t);
    }

    public function getOptions_priceOLD($recovery=false){

	//var_dump($_POST['tab_options']);
	$tab = $_POST['tab_options'];
	$nom = $_POST['nom_du_verre'];

	$nom_du_verre = explode(" (",$nom);

	foreach ($tab as $key => $value) {

		if($value['display']=='X')
		{
			if(strpos($nom_du_verre[0], 'Omega') !== false || strpos($nom_du_verre[0], 'Platinium') !== false || strpos($nom_du_verre[0], 'Elysium') !== false  || strpos($nom_du_verre[0], 'Top Office') !== false  || strpos($nom_du_verre[0], 'Bifocal') !== false   || strpos($nom_du_verre[0], 'Bfocal') !== false  || strpos($nom_du_verre[0], 'Trifocal') !== false || strpos($nom_du_verre[0], 'Panier A Office') !== false || strpos($nom_du_verre[0], 'Panier A Double Foyer') !== false || strpos($nom_du_verre[0], 'Mineral') !== false || strpos($nom_du_verre[0], 'Minéral') !== false)
			{

					if($value['trad_fr'] == 'Durci' || $value['trad_fr'] == '')
					{
						$res['prix'] = 0.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif(strpos($value['trad_fr'], 'Miroir') !== false)
					{
						$res['prix'] = 14.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Satin')
					{
						$res['prix'] = 8.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Achromatique')
					{
						$res['prix'] = 16.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Satin Max')
					{
						$res['prix'] = 18.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Satin UV')
					{
						$res['prix'] = 11.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'BlueCoat')
					{
						$res['prix'] = 16.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Satin Face Interne')
					{
						$res['prix'] = 8.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Satin Max Face Interne')
					{
						$res['prix'] = 18.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Achromatique Face Interne')
					{
						$res['prix'] = 16.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Satin UV Face Interne')
					{
						$res['prix'] = 11.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Satin Drive Or')
					{
						$res['prix'] = 18.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif(strpos($value['trad_fr'], 'HMC') !== false)
					{
						$res['prix'] = 4.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}

			}
			if(strpos($nom_du_verre[0], 'T-One') !== false || strpos($nom_du_verre[0], 'Panier A Initial') !== false)
			{

				if(strpos($nom_du_verre[0], 'Transition') !== false || strpos($nom_du_verre[0], 'Xtractive') !== false || strpos($nom_du_verre[0], 'Polarisé') !== false || strpos($nom_du_verre[0], 'Drivewear') !== false){
					if($value['trad_fr'] == 'Durci' || $value['trad_fr'] == '')
					{
						$res['prix'] = 0.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif(strpos($value['trad_fr'], 'Miroir') !== false)
					{
						$res['prix'] = 14.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Satin')
					{
						$res['prix'] = 8.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Achromatique')
					{
						$res['prix'] = 16.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Satin Max')
					{
						$res['prix'] = 18.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Satin UV')
					{
						$res['prix'] = 11.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'BlueCoat')
					{
						$res['prix'] = 16.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Satin Face Interne')
					{
						$res['prix'] = 8.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Satin Max Face Interne')
					{
						$res['prix'] = 18.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Achromatique Face Interne')
					{
						$res['prix'] = 16.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Satin UV Face Interne')
					{
						$res['prix'] = 11.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Satin Drive Or')
					{
						$res['prix'] = 18.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif(strpos($value['trad_fr'], 'HMC') !== false)
					{
						$res['prix'] = 4.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
				}
				else
				{
					if($value['trad_fr'] == 'Durci' || $value['trad_fr'] == '')
					{
						$res['prix'] = 0.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif(strpos($value['trad_fr'], 'Miroir') !== false)
					{
						$res['prix'] = 14.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Satin')
					{
						$res['prix'] = 12.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Achromatique')
					{
						$res['prix'] = 20.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Satin Max')
					{
						$res['prix'] = 22.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Satin UV')
					{
						$res['prix'] = 15.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'BlueCoat')
					{
						$res['prix'] = 20.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Satin Face Interne')
					{
						$res['prix'] = 12.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Satin Max Face Interne')
					{
						$res['prix'] = 22.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Achromatique Face Interne')
					{
						$res['prix'] = 20.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Satin UV Face Interne')
					{
						$res['prix'] = 15.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Satin Drive Or')
					{
						$res['prix'] = 22.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif(strpos($value['trad_fr'], 'HMC') !== false)
					{
						$res['prix'] = 7.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
				}

			}
			if(strpos($nom_du_verre[0], 'E-Space') !== false)
			{

				if(strpos($nom_du_verre[0], 'Transition') !== false || strpos($nom_du_verre[0], 'Xtractive') !== false || strpos($nom_du_verre[0], 'Polarisé') !== false || strpos($nom_du_verre[0], 'Drivewear') !== false){
					if($value['trad_fr'] == 'Durci' || $value['trad_fr'] == '')
					{
						$res['prix'] = 0.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif(strpos($value['trad_fr'], 'Miroir') !== false)
					{
						$res['prix'] = 14.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Satin')
					{
						$res['prix'] = 7.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Achromatique')
					{
						$res['prix'] = 15.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Satin Max')
					{
						$res['prix'] = 17.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Satin UV')
					{
						$res['prix'] = 10.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'BlueCoat')
					{
						$res['prix'] = 15.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Satin Face Interne')
					{
						$res['prix'] = 7.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Satin Max Face Interne')
					{
						$res['prix'] = 17.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Achromatique Face Interne')
					{
						$res['prix'] = 15.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Satin UV Face Interne')
					{
						$res['prix'] = 10.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Satin Drive Or')
					{
						$res['prix'] = 17.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif(strpos($value['trad_fr'], 'HMC') !== false)
					{
						$res['prix'] = 3.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
				}
				else
				{
					if($value['trad_fr'] == 'Durci' || $value['trad_fr'] == '')
					{
						$res['prix'] = 0.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif(strpos($value['trad_fr'], 'Miroir') !== false)
					{
						$res['prix'] = 14.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Satin')
					{
						$res['prix'] = 11.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Achromatique')
					{
						$res['prix'] = 19.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Satin Max')
					{
						$res['prix'] = 21.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Satin UV')
					{
						$res['prix'] = 14.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'BlueCoat')
					{
						$res['prix'] = 19.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Satin Face Interne')
					{
						$res['prix'] = 11.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Satin Max Face Interne')
					{
						$res['prix'] = 21.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Achromatique Face Interne')
					{
						$res['prix'] = 19.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Satin UV Face Interne')
					{
						$res['prix'] = 14.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Satin Drive Or')
					{
						$res['prix'] = 21.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif(strpos($value['trad_fr'], 'HMC') !== false)
					{
						$res['prix'] = 7.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
				}

			}
			if(strpos($nom_du_verre[0], 'Eyefatigue') !== false || strpos($nom_du_verre[0], 'Freestyle') !== false || strpos($nom_du_verre[0], 'Panier A Unifocal RX') !== false)
			{
					if($value['trad_fr'] == 'Durci' || $value['trad_fr'] == '')
					{
						$res['prix'] = 0.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif(strpos($value['trad_fr'], 'Miroir') !== false)
					{
						$res['prix'] = 14.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Satin')
					{
						$res['prix'] = 7.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Achromatique')
					{
						$res['prix'] = 15.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Satin Max')
					{
						$res['prix'] = 17.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Satin UV')
					{
						$res['prix'] = 10.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'BlueCoat')
					{
						$res['prix'] = 15.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Satin Face Interne')
					{
						$res['prix'] = 7.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Satin Max Face Interne')
					{
						$res['prix'] = 17.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Achromatique Face Interne')
					{
						$res['prix'] = 15.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Satin UV Face Interne')
					{
						$res['prix'] = 10.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif($value['trad_fr'] == 'Satin Drive Or')
					{
						$res['prix'] = 17.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
					elseif(strpos($value['trad_fr'], 'HMC') !== false)
					{
						$res['prix'] = 3.00;
						$res['id'] = $value['id'];
						$res['code'] = $value['code'];
						$res['name'] = $value['name'];
						$res['trad_fr'] = $value['trad_fr'];
					}
				}

			if(isset($res))
			{
				$t[]=$res;
			}
		}
	}

//var_dump($t);
	echo json_encode($t);

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
                if($data['recap_commande'][0]->id_type_generation_verre == "0")
				{
					$info_commande = json_decode($data['recap_commande'][0]->information_commande,true);

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
					$this->load->view('layout/commande-detail-new', $data);
				}
        		else
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

        //    $data_commande = $this->m_commande->getCommandeByUser($dataOrder);

            $data_commande = $this->m_commande->getCommandeByUserLight($dataOrder);

            if($data_commande !== false)
                foreach($data_commande as $key => $commande) {

                    switch ($commande->type_commande) {

                        case 1:
                            $prix_commande = $commande->total_commande . ' €';
                            break;

                        case 2:
                            $prix_commande = '<del>' . $commande->total_commande . '</del> ' . ($commande->tarif_express > 0 ? $commande->tarif_express : '0') . ' €<br />Casse atelier';
                            break;

                        case 3:
                            $prix_commande = '<del>' . $commande->total_commande . '</del> ' . ($commande->tarif_express > 0 ? $commande->tarif_express : '0') . ' €<br />Erreur ophta';
                            break;

                    }

                    if ($commande->ancienne_commande != '') {
                        $ancienne_ref = 'CR' . $commande->ancienne_commande . '-' . $this->data['user_info']->id_users;
                    } else {
                        $ancienne_ref = '-';
                    }

                    if ($commande->origine_commande == "1") {//$commande->id_type_generation_verre != 5 && $commande->id_type_generation_verre != 23)
                        $etat_commande = $commande->libelle_etat_commande.($commande->id_etat_commande == 6 ? ' le '.date('d/m/Y H:i', strtotime($commande->date_update_commande)) : '').' ('.$commande->id_etat_commande.'/6)';
                    }
					else {
                        $etat_commande = $commande->id_etat_commande == 1 ? "En cours de préparation (".$commande->id_etat_commande."/2)" : $commande->libelle_etat_commande.' le '.date('d/m/Y H:i', strtotime($commande->date_update_commande)).' (2/2)';
					}
                    if ($commande->id_etat_commande == 1) {
                        $bl = '';
                    }
                    else {
                        $bl = '<a href="/index/generer_pdf/bon_livraison/' . $commande->id_commande . '" class="btn btn-sm btn-warning"><i class="zmdi zmdi-download"></i> '. $commande->intitule_bl.'</a>';
                    }

                    $bc = '<a href="/index/generer_pdf/bon_commande/' . $commande->id_commande . '" class="btn btn-sm btn-warning"><i class="zmdi zmdi-download"></i> Bon de commande</a>';

                    //$commande->commentaire = "";

                    if($type == 'ec') {

                        $data['aaData'][$key] =
                            array(
                                'CR' . $commande->id_commande . '-' . $this->data['user_info']->id_users,
                                date('d/m/Y H:i:s', strtotime($commande->date_commande)),
                                $ancienne_ref,
                                $bl,
//                                $bc,
                                '<del>'.$commande->total_commande.'€ </del> <b>'.number_format(($commande->tarif_express > 0 ? $commande->tarif_express : 0),2,'.',' ').'  €</b>',
                                $commande->reference_client,
                                $commande->generation_verre,
                                $etat_commande,
                                '<a class="commande-info btn btn-icon waves-effect waves-light '.(!empty($commande->commentaire)
                                    ? 'btn-warning tooltipster' : 'btn-inverse') .'" data-toggle="modal" data-target="#detail-commande" rel="'
                                    . $commande->id_commande . '" ' . (!empty($commande->commentaire) ? 'original-title="'
                                    . htmlentities($commande->commentaire) . '" title="'.htmlentities($commande->commentaire).'"' : '') . ' >
                                    <i class="zmdi zmdi-'.(!empty($commande->commentaire) ? 'comment' : 'search').'"></i> Voir</a>'

                            );
                    }
                    else {

						if((strpos($commande->generation_verre, 'Panier A') !== false))
						{
							$data['aaData'][$key] =
								array(
									'CR' . $commande->id_commande . '-' . $this->data['user_info']->id_users,
									date('d/m/Y H:i:s', strtotime($commande->date_commande)),
									$bl,
//                                    $bc,
									$commande->reference_client,
									$commande->generation_verre,
									$etat_commande,
									'<a class="commande-info btn btn-icon waves-effect waves-light '.(!empty($commande->commentaire) ? 'btn-warning tooltipster' : 'btn-inverse').'" data-toggle="modal" data-target="#detail-commande" rel="' . $commande->id_commande . '" ' . (!empty($commande->commentaire) ? 'original-title="' . htmlentities($commande->commentaire) . '" title="'.htmlentities($commande->commentaire).'"' : '') . ' ><i class="zmdi zmdi-'.(!empty($commande->commentaire) ? 'comment' : 'search').'"></i> Voir</a>',
								);
						}
						else
						{
							$recommande = '<a class="commande-info btn btn-icon waves-effect waves-light '.(!empty($commande->commentaire) ? 'btn-warning tooltipster' : 'btn-inverse').'" data-toggle="modal" data-target="#detail-commande" rel="' . $commande->id_commande . '" ' . (!empty($commande->commentaire) ? 'original-title="' . htmlentities($commande->commentaire) . '" title="'.htmlentities($commande->commentaire).'"' : '') . ' ><i class="zmdi zmdi-'.(!empty($commande->commentaire) ? 'comment' : 'search').'"></i> Voir</a>';
							if($commande->id_generation_verre>=30 && !$commande->code_oma)
							{
								$recommande .= '<a class="btn btn-warning waves-effect wave-light" href="/index/recommande/'.$commande->id_commande.'">Recommander</a>';
							}
							$data['aaData'][$key] =
                            array(
                                'CR' . $commande->id_commande . '-' . $this->data['user_info']->id_users,
                                date('d/m/Y H:i:s', strtotime($commande->date_commande)),
                                $bl,
//                                $bc,
                                $commande->reference_client,
                                $commande->generation_verre,
                                $etat_commande,
                                $recommande
                            );
						}

                    }
                }

				die(json_encode($data));
        } else
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
                    $bl = $order->id_etat_commande == 1 ? '' : '<a href="/index/generer_pdf/bon_livraison_montures/' . $order->id_commande . '" class="btn btn-sm btn-warning"><i class="zmdi zmdi-download"></i> '. $order->intitule_bl.'</a>';

                    $data['aaData'][] = array(
                        'CR'.$order->id_commande.'-'.$order->id_users,
						$order->reference_client,
                        date('d/m/Y H:i', strtotime($order->date_commande)),
                        $bl,
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
                    $bl = $order->id_etat_commande == 1 ? '' : '<a href="/index/generer_pdf/bon_livraison_lentille/' . $order->id_commande . '" class="btn btn-sm btn-warning"><i class="zmdi zmdi-download"></i> '. $order->intitule_bl.'</a>';


                    $data['aaData'][] = array(
                        'CR'.$order->id_commande.'-'.$order->id_users,
                        date('d/m/Y H:i', strtotime($order->date_commande)),
                        $bl,
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

					if(isset($data['commentaire']))
						$order_data['commentaire'] = $data['commentaire'];


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
//            print_r($data);die;

            $add = $this->input->post();
//
//            $verreName = stristr($data['nomverreDH'], ' -', true);
//            $userId = $data['id_users'];
//            $verreStockD = $this->m_verres_stock->getByLibelleVerre($verreName);
//            if ($verreStockD) {
//                $data['prixDH'] = $this->getPrixVerreComplet($verreStockD, $userId);
//            }
//            else {
//                $teinteCode = NULL;
//                if(isset($data['teinteD'])) {
//                    $teinteCode = $data['teinteD'];
//                }
//                $data['prixDH'] = $this->getPrixVerreComplet($verreStockD, $userId, $data['nomverreDH'],
//                    $data['type_de_verreD'], $data['generation'], $data['traitementD'], $data['galbeD'],
//                    $data['PrismeSphereD'], $teinteCode);
//            }
//            $verreName = stristr($data['nomverreGH'], ' -', true);
//            $verreStockG = $this->m_verres_stock->getByLibelleVerre($verreName);
//            if ($verreStockG) {
//                $data['prixGH'] = $this->getPrixVerreComplet($verreStockG, $userId);
//            }
//            else {
//                $teinteCode = NULL;
//                if(isset($data['teinteD'])) {
//                    $teinteCode = $data['teinteD'];
//                }
//                $data['prixGH'] = $this->getPrixVerreComplet($verreStockD, $userId, $data['nomverreGH'],
//                    $data['type_de_verreG'], $data['generation'], $data['traitementG'], $data['galbeG'],
//                    $data['PrismeSphereG'], $teinteCode);
//            }
//
//            var_dump($data['prixDH']);die;
            $data['commentaire'] = "";
            if(isset($add['commentaire']))
				$data['commentaire'] = $add['commentaire'];

            $data['express'] = $add['express'];
            $data['express_pair'] = isset($add['express_pair']) ? $add['express_pair'] : 0;
            $data['pair'] = (bool) isset($add['pair']) ? $add['pair'] : false;

            if (!isset($data['nb_multi_commande']) || $data['nb_multi_commande'] == "") {
                $data['nb_multi_commande'] = 1;
            }

            $errors = 0;

            for ($i = 1; $i <= $data['nb_multi_commande']; $i++) {

                if(isset($data['discount'])) {

                    $pair_order_data = $this->m_commande->getCommandeByIdNew($data['pair_order_id'], $data['id_users'], $pair = true)[0];
                   // var_dump($pair_order_data);

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
                        $data['pourcent_remise'] = $data['discount']['amount'];
//                        $data['pourcent_remise'] = 10;

                        $data['total_remise_paire'] = (($data['prix_verre'] / 100) * $data['discount']['amount']);
                        $data['prix_verre'] = $data['prixDH'] * (100 - $data['pourcent_remise']) /
                                                                      100;
                        $data['prix_verre'] = round($data['prix_verre'], 2, PHP_ROUND_HALF_UP);
                        $data['total_commande'] = round(($data['prixDH'] + $data['prixGH']) *
                                                        (100 - $data['pourcent_remise']) / 100, 2,
                        PHP_ROUND_HALF_UP);

//                        $data['prixDH'] = $data['prix_verre'];
//		   				$data['prixGH'] = $data['prix_verre'];
		   		        $data['prixUnitaireD']= $data['prix_verre'];
		   		        $data['prixUnitaireG']= $data['total_commande'] - $data['prix_verre'];

                     //   echo "Remise on ORDER - Total remise paire: ".$data['total_remise_paire']." - Prix verre: ".$data['prix_verre'];
                     //   echo " - Data total commande: ".$data['total_commande'];
                    }
                    else {
                        $pair_order_data->total_remise_paire = (($pair_order_data->prix_verre / 100) * $data['discount']['amount']);
                        $pair_order_data->prix_verre = $pair_order_data->prix_verre - $pair_order_data->total_remise_paire;
                        $pair_order_data->prix_verre = round($pair_order_data->prix_verre, 2, PHP_ROUND_HALF_UP);
                        $pair_order_data->total_commande = $pair_order_data->prix_verre*$pair_verres;
                     //   echo "Remise on PAIR - Total remise paire: ".$pair_order_data->total_remise_paire." - Prix verre: ".$pair_order_data->prix_verre;
                     //   echo " - Pair_order_data total commande: ".$pair_order_data->total_commande;
                    }
//                    var_dump('test');die;

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
						//echo " - here 1 !";
                        if(!isset($pair_order_id['id'])) {
                            echo json_encode(array('status' => 'error', 'message' => 'pair'));
                            exit();
                        }
                        else {
                            $data['premiere_commande'] = $pair_order_id['id'];
                            $data['pair'] = false;
                        }

                    //    $this->m_commande->delete(array('id_commande' => $pair_order_temp_id), true);

                    }


                }

                if ($order = $this->m_commande->addOrder($data)) {
                    //echo " - here 2 !";
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
//            var_dump('oops');die;

            if($errors == 0) {


				if($data['id_generation_verre']=='23' || $data['panierA'] != '0')
					{
						$data['certificat'] = $this->m_commande->getCertificatStock($order['id']);

						$data['control'] = array(
							'certificat' => bin2hex(openssl_random_pseudo_bytes(10))
						);

						/*$this->db->insert('controle', array(
							'id' => $data['control']['certificat'],
							'control' => count($data['certificat'])
						));
						*/

						$this->db->insert('controle_test', array(
							'v' => $data['control']['certificat'],
							'control' => count($data['certificat'])
						));

						//$message = json_encode($data);


						// Génération des PDF
//                        var_dump($data);
//                        var_dump($order);
						$docs = array(
							'certificat' => $this->config->item('directory_pdf').'/'.$this->pdf('certificat_authenticite', $data, $order['id'], false, 'paysage', $customsize = array(0,0,243,153))
						);

					}
				set_cookie('panierA_sans_monture','0','1800');
				set_cookie('typecommande','fab','1800');

				set_cookie('refPanierA','','1800');


				$panierA = get_cookie("panierA");
				if($panierA == 1)
				{

					$this->db->from('commande_montures_temp cm');
					$this->db->select('m.*, cm.id as id_temp, cm.qty, cm.status, cm.id_client, collec.name as collection, cm.ref_client');
					$this->db->where('cm.id_client', $data['id_users']);
					$this->db->where('cm.avec_verres', 1);
					$this->db->join('montures m', 'm.id = cm.id_monture','left');
					$this->db->join('montures_collection collec', 'm.id_collection = collec.id','left');
					$query = $this->db->get();
					if ($query->num_rows() > 0) {
						$data['montures'] = $query->result();

						$data['user_info'] = $this->data['user_info'];
						$data['data_admin']['admin_info'] = $this->m_users->getUserById(1)[0];
						$userdata = $this->m_users->getUserById($data['id_users'])[0];

						$total_order = $data['montures'][0] ->prix_vente*$data['montures'][0] ->qty;
						$stock_avant = $data['montures'][0] ->stock;
						$this->db->where('id', $data['montures'][0] ->id);
						$this->db->set('stock', 'stock-'.$data['montures'][0] ->qty, FALSE);
						$this->db->update('montures');
						$stock_apres = $data['montures'][0] ->stock-$data['montures'][0] ->qty;

						if(!isset($data['commentaire']))
						{
							$data['commentaire']="";
						}

						$args = array(
							'reference_client' => $data['montures'][0]->ref_client,
							'lens_id' => 0,
							'lens_generation' => 0,
							'information_commande' => json_encode($data['montures']),
							'commentaire' => $data['commentaire'],
							'id_users' => $data['id_users'],
							'total_commande' => $total_order,
							'tarif_livraison' => $userdata->tarif_livraison,
							'tarif_packaging' => $data['tarif_packaging'] = $this->m_commande->getTarifPackaging($userdata->id_users, $userdata->tarif_packaging),
							'commande_monture' => 1
						);

						//$message = json_encode($args);

						if($this->m_montures->addMonturesOrder($args)) {
							$this->db->query('DELETE FROM commande_montures_temp WHERE id_client = "'.$data['id_users'].'" AND avec_verres=1');
							set_cookie('panierA','0','1800');
						}

					}

				}
                echo $message;
            }
            else {
                echo json_encode(array('status' => 'error'));
            }
            $this->session->unset_userdata('order');
        }
    }

	public function deletePanierA()
	{
		set_cookie('panierA',0,'1800');
		set_cookie('panierA_sans_monture','0','1800');
		set_cookie('typecommande','fab','1800');
		set_cookie('refPanierA','','1800');
		//$this->redirect('/index/passer_commande');
	}

	public function setCookiePanierA()
	{
		set_cookie('panierA_sans_monture','1','1800');
	}

	public function removeCookiePanierA()
	{
		set_cookie('panierA_sans_monture','0','1800');
		set_cookie('refPanierA','','1800');
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
                $data['tarif_packaging'] = $this->m_commande->getTarifPackaging($userdata->id_users, $userdata->tarif_packaging);
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

				$panierA = get_cookie("panierA");

				$panierA_sans_monture = get_cookie("panierA_sans_monture");
				if($panierA_sans_monture=='1'){
					$panierA='1';
				}

				if($panierA=='1'){
					if($data['id_type_generation_verre']=='23')
					{
						$data['id_generation_verre']='23';

					}
					$data['panierA'] = '1';
				}

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
//                        $data['tarif_supplement'] = $supplement;
                    }
                    else {
//                        $data['tarif_supplement'] = 0;
                    }

					$data['libelle_verre'] =   $prix_verre[0]->libelle_verre;

                    if($prix_double) {
                        $data['total_commande'] *= 2;
//                        $data['tarif_supplement'] *= 2;
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

					if($panierA==1)
					{
						$this->db->from('commande_montures_temp cm');
						$this->db->select('m.*, cm.id as id_temp, cm.qty, cm.status, cm.id_client, collec.name as collection, m_pack.id as pack_id, m_pack.name as pack, m_pack.prix as prixpack');
						$this->db->where('cm.id_client', $data['id_users']);
						$this->db->where('cm.status', 0);
						$this->db->join('montures m', 'm.id = cm.id_monture','left');
						$this->db->join('montures_collection collec', 'm.id_collection = collec.id','left');
						$this->db->join('montures_pack m_pack', 'm_pack.id = cm.id_pack','left');
						$query = $this->db->get();
						if ($query->num_rows() > 0) {
							$t = $query->result();
							$data['montures']=$t[0];
						}

						$panierA_sans_monture = get_cookie("panierA_sans_monture");
					/*	if($panierA_sans_monture!='1'){
						$this->db->where('id', 1);
						$this->db->set('flag', 1, FALSE);
						$this->db->update('flag_monture');
						}
					*/
						//set_cookie('flag_monture','1','180000');
					}

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

    private function getPrixVerreComplet($verreStock, $userId, $nomDeVerre = NULL, $typeDeVerre = NULL,
                                         $generation = NULL, $traitementCode = NULL, $galbe = NULL,
                                         $prisme = NULL, $teinteCode = NULL) {
//        $verreStockD = $this->m_verres_stock->getByLibelleVerre($verreName);
//        var_dump($verreStock);die;
        if ($verreStock) {
            return $this->m_passer_commande_verre->getPrixStock($verreStock->id_verre,$userId)[$verreStock->id_verre]['prix'];
        }
        else {
            $prixVerre = $this->m_passer_commande_verre->getPrix($typeDeVerre,$userId,$generation)[$typeDeVerre]['prix'];
            $traitementPrice = 0;
            if(!empty($traitementCode)) {
                $traitementPrice = $this->m_traitement->calculPrice($nomDeVerre, $traitementCode, $userId);
            }
            $teintePrice = 0;
            if(!empty($teinteCode)) {
                $teintePrice = $this->m_teinte->calculPrice($nomDeVerre, $teinteCode, $userId);
            }
            $galbePrice = 0;
            if (!empty($galbe) && $galbe != "Standard") {
                $galbePrice = 3.9;
            }
            $prismePrice = 0;
            if (!empty($prisme)) {
                $prismePrice = 3.9;
            }
            return $prixVerre + $traitementPrice + $teintePrice + $galbePrice + $prismePrice;
        }
    }

    public function setOrderRecapNew(){

		if($this->input->is_ajax_request()){

            if($this->session->userdata('logged_in') === true){

                $data = $this->input->post();
//                var_dump($data['prixDH']);die;
//                print_r($data['txtOmaImageIn']);die;
//                print_r(bin2hex($data['txtOmaImageIn']));die;
//                print_r($data);die;
                $user = $this->session->userdata('data_user');
                $userId = $user['user_info']->id_users;
                $data['prixDH'] = 0;
                $data['prixGH'] = 0;
                $data['supplementD'] = 0;
                $data['supplementG'] = 0;
                $data['tarif_teledetourage'] = 0;

                if($data['format_teledetourage']) {
                    $is_teledetourage = true;
                    $data['prix_teledetourage'] = $this->m_teledetourage->getTeledetourageFormatPrice($userId, $data['format_teledetourage']);
                    if (isset($data['droit'])) {
                        $data['tarif_teledetourage'] += $data['prix_teledetourage'];
                    }
                    if (isset($data['gauche'])) {
                        $data['tarif_teledetourage'] += $data['prix_teledetourage'];
                    }
                    $data['teledetourage_format_id'] = $this->m_teledetourage->getTeledetourageFormatId($data['format_teledetourage']);
                }
                else {
                    $is_teledetourage = false;
                    $data['prix_teledetourage'] = 0;
                }
//                var_dump($data);die;
//                print_r($user['user_info']->tarif_supplement_fab);die;
                if (isset($data['droit'])) {
                    $verreName = stristr($data['nomverreDH'], ' -', true);
//                    print_r($verreName);die;
                    $verreStockD = $this->m_verres_stock->getByLibelleVerre($verreName);
                    $quantiteD = isset($data['quantiteD']) ? $data['quantiteD'] : 1;
                    if ($verreStockD && !$data['format_teledetourage']) {
                        $data['prixDH'] = $this->getPrixVerreComplet($verreStockD, $userId) * $quantiteD;
                        $data['supplementD'] = $verreStockD->supplement * $quantiteD + ($user['user_info']->tarif_supplement - 1);
                    }
                    else {
                        $teinteCode = NULL;
                        if(isset($data['teinteD'])) {
                            $teinteCode = $data['teinteD'];
                        }
                        $traitementCode = NULL;
                        if(isset($data['traitementD'])) {
                            $traitementCode = $data['traitementD'];
                        }
                        $galbe = NULL;
                        if(isset($data['galbeD'])) {
                            $galbe = $data['galbeD'];
                        }
                        $prisme = NULL;
                        if(isset($data['PrismeSphereD'])) {
                            $prisme = $data['PrismeSphereD'];
                        }
                        $data['prixDH'] = $this->getPrixVerreComplet(NULL, $userId, $data['nomverreDH'],
                            $data['type_de_verreD'], $data['generation'], $traitementCode, $galbe,
                            $prisme, $teinteCode) * $quantiteD;
                        $lenses = $this->m_lenses->getLensesByTradFr($data['nomverreDH'], $is_teledetourage);
                        $data['supplementD'] = $lenses->supplement;
                        if (in_array($data['type_de_verreD'],['S1UW50','S2UW50','S3UW50','S4UW50']) && in_array($data['traitementD'], [700100, 700102, 700027, 700021])) {
                            $data['supplementD'] -= 1;
                            $data['prixDH'] -= 1;
                        }
                        $data['supplementD'] += $user['user_info']->tarif_supplement_fab - 2;
                    }
                }
                $data['supplementD'] = max(0, $data['supplementD']);

                if (isset($data['gauche'])) {
                    $verreName = stristr($data['nomverreGH'], ' -', true);
                    $verreStockG = $this->m_verres_stock->getByLibelleVerre($verreName);
                    $quantiteG = isset($data['quantiteG']) ? $data['quantiteG'] : 1;
                    if ($verreStockG && !$data['format_teledetourage']) {
                        $data['prixGH'] = $this->getPrixVerreComplet($verreStockG, $userId) * $quantiteG;
                        $data['supplementG'] = $verreStockG->supplement * $quantiteG + ($user['user_info']->tarif_supplement - 1);
                    } else {
                        $teinteCode = NULL;
                        if (isset($data['teinteG'])) {
                            $teinteCode = $data['teinteG'];
                        }
                        $traitementCode = NULL;
                        if (isset($data['traitementG'])) {
                            $traitementCode = $data['traitementG'];
                        }
                        $galbe = NULL;
                        if (isset($data['galbeG'])) {
                            $galbe = $data['galbeG'];
                        }
                        $prisme = NULL;
                        if (isset($data['PrismeSphereG'])) {
                            $prisme = $data['PrismeSphereG'];
                        }
                        $data['prixGH'] = $this->getPrixVerreComplet($verreStockG, $userId, $data['nomverreGH'],
                            $data['type_de_verreG'], $data['generation'], $traitementCode, $galbe,
                            $prisme, $teinteCode) * $quantiteG;
                        $lenses = $this->m_lenses->getLensesByTradFr($data['nomverreGH'], $is_teledetourage);
                        $data['supplementG'] = $lenses->supplement;
                        if (in_array($data['type_de_verreG'],['S1UW50','S2UW50','S3UW50','S4UW50']) && in_array($data['traitementG'], [700100, 700102, 700027, 700021])) {
                            $data['supplementG'] -= 1;
                            $data['prixGH'] -= 1;
                        }
                        $data['supplementG'] += $user['user_info']->tarif_supplement_fab - 2;
                    }
                }
                $data['supplementG'] = max(0, $data['supplementG']);

                $userdata = $this->m_users->getUserById($user['user_info']->id_users)[0];

                $data['user_info'] = $user['user_info'];
                $data['id_users'] = $user['user_info']->id_users;
                $data['data_admin'] = $this->session->userdata('data_admin');


//                $supplement = 0;

//                if($data['user_info']->tarif_supplement > 0) {
//					$supplement = $data['user_info']->tarif_supplement;
//				}
				$result = $this->m_config->getConfig(array('nom_config' => 'commentaire'));
                $data['commentaire_actif'] = json_decode($result[0]->param_config);

				$data['id_verre']=(string) $data['type_de_verreD'];
				$data['id_verreD']=(string) $data['type_de_verreD'];
				$data['id_verreG']=(string) $data['type_de_verreG'];

				if(!isset($data['type_commande']))
				{
					$data['type_commande'] = 1;
				}

				//$data['true_type_commande'] = $data['type_commande'];

				$data['panierA'] = 0;
//				$data['tarif_supplement'] = 0;

				if($data['type_de_verreD']!=$data['type_de_verreG'] || !isset($data['gauche']) || !isset($data['droit']))
				{
					//$data['type_commande'] = 4;
					$data['type_commande_verre'] = 4;

					if($data['nomverreDH']!="")
					{
						if(strpos($data['nomverreDH'], "Panier A") !== false)
						{
							$data['panierA_D'] = 1;
						}

						if(strpos($data['nomverreDH'], " - Stock") !== false)
						{
						//	$data['type_commandeD'] = 2;
							$data['type_commande_verreD'] = 2;
							//$data['type_commande_verre'] = 2;
							$data['origine_commande'] = 2;
							$data['origine_commandeD'] = 2;
						}
						else
						{
						//	$data['type_commandeD'] = 1;
							$data['type_commande_verreD'] = 1;
							//$data['type_commande_verre'] = 1;
							$data['origine_commande'] = 1;
							$data['origine_commandeD'] = 1;

//                        	$data['tarif_supplement'] = $supplement;
						}
					}

                    if($data['nomverreGH']!="")
					{

						if(strpos($data['nomverreGH'], "Panier A") !== false)
						{
							$data['panierA_G'] = 1;
						}

						if(strpos($data['nomverreGH'], " - Stock") !== false)
						{
						//	$data['type_commandeG'] = 2;
							$data['type_commande_verreG'] = 2;
							//$data['type_commande_verre'] = 2;
							$data['origine_commande'] = 2;
							$data['origine_commandeG'] = 2;
						}
						else
						{
							//$data['type_commandeG'] = 1;
							$data['type_commande_verreG'] = 1;
							//$data['type_commande_verre'] = 1;
							$data['origine_commande'] = 1;
							$data['origine_commandeG'] = 1;

//							$data['tarif_supplement'] = $supplement;
						}

                    }
				}
				else
				{
					if(strpos($data['nomverreDH'], "Panier A") !== false)
					{
						$data['panierA'] = 1;
					}

					if(strpos($data['nomverreDH'], " - Stock") !== false)
					{
						//$data['type_commandeD'] = 2;
						$data['type_commande_verreD'] = 2;
					//	$data['type_commandeG'] = 2;
						$data['type_commande_verreG'] = 2;
					//	$data['type_commande'] = 2;
						$data['type_commande_verre'] = 2;
						$data['origine_commande'] = 2;
						$data['origine_commandeD'] = 2;
						$data['origine_commandeG'] = 2;
					}
					else
					{
					//	$data['type_commandeD'] = 1;
						$data['type_commande_verreD'] = 1;
					//	$data['type_commandeG'] = 1;
						$data['type_commande_verreG'] = 1;
					//	$data['type_commande'] = 1;
						$data['type_commande_verre'] = 1;
						$data['origine_commande'] = 1;
						$data['origine_commandeD'] = 1;
						$data['origine_commandeG'] = 1;

//						$data['tarif_supplement'] = $supplement;
					}
				}

				$data['id_miroir'] = 0;
				$data['id_etat_commande'] = 1;
				$data['date_commande'] = date('Y-m-d H:i:s');
				$data['date_update_commande'] = $data['date_commande'];

				$data['ancienne_commande'] = isset($data['ancienne_commande']) ? $data['ancienne_commande'] : 0;
				$data['taux_tva'] = $this->m_taux_tva->get_tva();
				$data['tarif_livraison'] = $userdata->tarif_livraison;

				$data['tarif_packaging'] = $this->m_commande->getTarifPackaging($userdata->id_users, $userdata->tarif_packaging);
				$prix_miroir = 7;

				$pair_order = false;

                if(isset($data['pair_order'])) {
					$pair_order = $this->m_commande->getCommandeByIdNew($data['pair_order'], $user['user_info']->id_users, true)[0];
					$pair_order_id = $data['pair_order'];
					//$data['type_commande'] = $pair_order->type_commande;
                    $pair_order->format_teledetourage = $this->m_teledetourage->getMontureByFormatId($pair_order->teledetourage_format_id);
                    $pair_order->prix_teledetourage = $this->m_teledetourage->getTeledetourageFormatPrice($userId, $pair_order->format_teledetourage);
                    $data['reference_client'] = $pair_order->reference_client;
					$data['pair_order_recap'] = (array) $pair_order;
				}
				if($data['diametreD'] == 'precalibrage')
				{
					if(isset($data['calibre']) && !empty($data['calibre']))
					{
						$data_commandeD['precalibrage'] = array('calibre' => $data['calibre']);
					}

					if(isset($data['cotea']) && !empty($data['cotea']))
						$data_commandeD['mesure_freeform']['largeur_boxing'] = $data['cotea'];

					if(isset($data['coteb']) && !empty($data['coteb']))
						$data_commandeD['mesure_freeform']['hauteur_boxing'] = $data['coteb'];

					if(isset($data['cotec']) && !empty($data['cotec']))
						$data_commandeD['mesure_freeform']['taille_du_pont'] = $data['cotec'];

					if(isset($data['coted']) && !empty($data['coted']))
						$data_commandeD['mesure_freeform']['diametre_utile'] = $data['coted'];

					if(isset($data['ecart_puppillaire_droit']) && !empty($data['ecart_puppillaire_droit'])) {
                        $data_commande['mesure_freeform']['ecart_puppillaire_droit'] = $data['ecart_puppillaire_droit'];
                        $data_commandeD['mesure_freeform']['ecart_puppillaire_droit'] = $data['ecart_puppillaire_droit'];
                    }

					if(isset($data['ecart_puppillaire_gauche']) && !empty($data['ecart_puppillaire_gauche'])) {
                        $data_commande['mesure_freeform']['ecart_puppillaire_gauche'] = $data['ecart_puppillaire_gauche'];
                        $data_commandeG['mesure_freeform']['ecart_puppillaire_gauche'] = $data['ecart_puppillaire_gauche'];
                    }


					if(isset($data['hauteur']) && !empty($data['hauteur']))
						$data_commande['mesure_freeform']['hauteur'] = $data['hauteur'];
						$data_commandeD['mesure_freeform']['hauteur'] = $data['hauteur'];

					if(isset($data['hauteur_gauche']) && !empty($data['hauteur_gauche'])) {
                        $data_commande['mesure_freeform']['hauteur_gauche'] = $data['hauteur_gauche'];
                        $data_commandeG['mesure_freeform']['hauteur_gauche'] = $data['hauteur_gauche'];
                    }

					//if(isset($data['diametreD']) && !empty($data['diametreD']))
					//	$data_commande['diametreD'] = $data['diametreD'];

					if(isset($data_commandeD['mesure_freeform'] ))
						foreach($data_commandeD['mesure_freeform'] as $Key => $val)
							if(empty($val))
								unset($data_commandeD['mesure_freeform'][$Key]);

					if(isset($data['type_monture']) && !empty($data['type_monture']))
						$data_commandeD['monture'] = array('type' => $data['type_monture']);

					if(isset($data['epaisseur_bord_verre']) && !empty($data['epaisseur_bord_verre']))
						$data_commandeD['bord_verre'] = array('epaisseur' => $data['epaisseur_bord_verre']);

				}

				if($data['diametreG'] == 'precalibrage')
				{
					if(isset($data['calibre']) && !empty($data['calibre']))
					{
						$data_commandeG['precalibrage'] = array('calibre' => $data['calibre']);
					}

					if(isset($data['cotea']) && !empty($data['cotea']))
						$data_commandeG['mesure_freeform']['largeur_boxing'] = $data['cotea'];

					if(isset($data['coteb']) && !empty($data['coteb']))
						$data_commandeG['mesure_freeform']['hauteur_boxing'] = $data['coteb'];

					if(isset($data['cotec']) && !empty($data['cotec']))
						$data_commandeG['mesure_freeform']['taille_du_pont'] = $data['cotec'];

					if(isset($data['coted']) && !empty($data['coted']))
						$data_commandeG['mesure_freeform']['diametre_utile'] = $data['coted'];

                    if(isset($data['ecart_puppillaire_gauche']) && !empty($data['ecart_puppillaire_gauche'])) {
                        $data_commandeG['mesure_freeform']['ecart_puppillaire_gauche'] = $data['ecart_puppillaire_gauche'];
                    }

                    if(isset($data['hauteur_gauche']) && !empty($data['hauteur_gauche'])) {
                        $data_commandeG['mesure_freeform']['hauteur_gauche'] = $data['hauteur_gauche'];
                    }
					//if(isset($data['diametreD']) && !empty($data['diametreD']))
					//	$data_commande['diametreD'] = $data['diametreD'];

					if(isset($data_commandeG['mesure_freeform'] ))
						foreach($data_commandeG['mesure_freeform'] as $Key => $val)
							if(empty($val))
								unset($data_commandeG['mesure_freeform'][$Key]);

					if(isset($data['type_monture']) && !empty($data['type_monture']))
						$data_commandeG['monture'] = array('type' => $data['type_monture']);

					if(isset($data['epaisseur_bord_verre']) && !empty($data['epaisseur_bord_verre']))
						$data_commandeG['bord_verre'] = array('epaisseur' => $data['epaisseur_bord_verre']);

				}

				if(isset($data['calibre']) && !empty($data['calibre']))
				{
					$data_commande['precalibrage'] = array('calibre' => $data['calibre']);
				}

				if(isset($data['cotea']) && !empty($data['cotea']))
					$data_commande['mesure_freeform']['largeur_boxing'] = $data['cotea'];

				if(isset($data['coteb']) && !empty($data['coteb']))
					$data_commande['mesure_freeform']['hauteur_boxing'] = $data['coteb'];

				if(isset($data['cotec']) && !empty($data['cotec']))
					$data_commande['mesure_freeform']['taille_du_pont'] = $data['cotec'];

				if(isset($data['coted']) && !empty($data['coted']))
					$data_commande['mesure_freeform']['diametre_utile'] = $data['coted'];

				//if(isset($data['diametreD']) && !empty($data['diametreD']))
				//	$data_commande['diametreD'] = $data['diametreD'];

				if(isset($data_commande['mesure_freeform'] ))
					foreach($data_commande['mesure_freeform'] as $Key => $val)
						if(empty($val))
							unset($data_commande['mesure_freeform'][$Key]);

				if(isset($data['type_monture']) && !empty($data['type_monture']))
					$data_commande['monture'] = array('type' => $data['type_monture']);

				if(isset($data['epaisseur_bord_verre']) && !empty($data['epaisseur_bord_verre']))
					$data_commande['bord_verre'] = array('epaisseur' => $data['epaisseur_bord_verre']);

				if(isset($data['ecart_puppillaire_droit']) && !empty($data['ecart_puppillaire_droit']))
					$data_commande['mesure_freeform']['ecart_puppillaire_droit'] = $data['ecart_puppillaire_droit'];

				if(isset($data['ecart_puppillaire_gauche']) && !empty($data['ecart_puppillaire_gauche']))
					$data_commande['mesure_freeform']['ecart_puppillaire_gauche'] = $data['ecart_puppillaire_gauche'];

				if(isset($data['hauteur']) && !empty($data['hauteur']))
					$data_commande['mesure_freeform']['hauteur'] = $data['hauteur'];

				if(isset($data['hauteur_gauche']) && !empty($data['hauteur_gauche']))
					$data_commande['mesure_freeform']['hauteur_gauche'] = $data['hauteur_gauche'];

				$panierA = get_cookie("panierA");

				/*$panierA_sans_monture = get_cookie("panierA_sans_monture");
				if($panierA_sans_monture=='1'){
					$panierA='1';
				}*/

				if($panierA=='1'){
					/*if($data['id_type_generation_verre']=='23')
					{
						$data['id_generation_verre']='23';

					}*/
					$data['panierA'] = 2;
				}

				if(!isset($data['quantiteD']) || $data['quantiteD']=="")
				{
					$data['quantiteD']=1;
				}

				if(!isset($data['quantiteG']) || $data['quantiteG']=="")
				{
					$data['quantiteG']=1;
				}

				if($data['quantiteD']==$data['quantiteG'] && $data['type_commande_verre'] == 2 && $data['type_de_verreD']==$data['type_de_verreG'] && $data['quantiteD']>1)
				{
					$data['multi_commande'] = $data['quantiteD'];
					$data['nb_multi_commande'] = $data['quantiteD'];
				}

				$prix_double = true;

				$unVerreD = 0;
				$unVerreG = 0;

				if($data['type_de_verreD']!="" && $data['type_de_verreG']=="")
				{
					if($data['quantiteD']>1)
					{
						$data['multi_commande'] = $data['quantiteD'];
						$data['nb_multi_commande'] = $data['quantiteD'];
					}

					$prix_double = false;
					$unVerreD = 1;
				}

				if($data['type_de_verreG']!="" && $data['type_de_verreD']=="")
				{
					if($data['quantiteG']>1)
					{
						$data['multi_commande'] = $data['quantiteG'];
						$data['nb_multi_commande'] = $data['quantiteG'];
					}

					$prix_double = false;
					$unVerreG = 1;

					$data['id_verre'] = $data['id_verreG'];
				}

                if($data['quantiteG'] != $data['quantiteD']) {
                    $prix_double = false;
                }

				$data['prixDH'] = str_replace("€","",$data['prixDH']);
				$data['prixGH'] = str_replace("€","",$data['prixGH']);

				$data['prixUnitaireD'] = $data['prixDH'] / $data['quantiteD'];
				$data['prixUnitaireG'] = $data['prixGH'] / $data['quantiteG'];


				if(isset($data['sphereD']))
				{
					$data_commande['verre']['correction_droit']['sphere'] = $data['sphereD'];
					$data_commandeD['verre']['correction_droit']['sphere'] = $data['sphereD'];
				}

				if(isset($data['sphereG']))
				{
					$data_commande['verre']['correction_gauche']['sphere'] = $data['sphereG'];
					$data_commandeG['verre']['correction_gauche']['sphere'] = $data['sphereG'];
				}

				if(isset($data['cylindreD']))
				{
					$data_commande['verre']['correction_droit']['cylindre'] = $data['cylindreD'];
					$data_commandeD['verre']['correction_droit']['cylindre'] = $data['cylindreD'];
				}

				if(isset($data['cylindreG']))
				{
					$data_commande['verre']['correction_gauche']['cylindre'] = $data['cylindreG'];
					$data_commandeG['verre']['correction_gauche']['cylindre'] = $data['cylindreG'];
				}

				if(isset($data['additionD']) && $data['lensFocalGroup']!=1 && $data['lensFocalGroup']!=6 && $data['lensFocalGroup']!=31 && $data['lensFocalGroup']!=36)
				{
					$data_commande['verre']['correction_droit']['addition'] = $data['additionD'];
					$data_commandeD['verre']['correction_droit']['addition'] = $data['additionD'];
				}
				else
				{
					if(isset($data['additionD']))
					{
						unset($data['additionD']);
					}

					if(isset($data_commande['verre']['correction_droit']['addition']))
					{
						unset($data_commande['verre']['correction_droit']['addition']);
					}

					if(isset($data_commandeD['verre']['correction_droit']['addition']))
					{
						unset($data_commandeD['verre']['correction_droit']['addition']);
					}

				}

				if(isset($data['additionG']) && $data['lensFocalGroup']!=1 && $data['lensFocalGroup']!=6 && $data['lensFocalGroup']!=31 && $data['lensFocalGroup']!=36)
				{
					$data_commande['verre']['correction_gauche']['addition'] = $data['additionG'];
					$data_commandeG['verre']['correction_gauche']['addition'] = $data['additionG'];
				}
				else
				{
					if(isset($data['additionG']))
					{
						unset($data['additionG']);
					}

					if(isset($data_commande['verre']['correction_gauche']['addition']))
					{
						unset($data_commande['verre']['correction_gauche']['addition']);
					}

					if(isset($data_commandeD['verre']['correction_gauche']['addition']))
					{
						unset($data_commandeD['verre']['correction_gauche']['addition']);
					}

				}

				if(isset($data['axeD']))
				{
					$data_commande['verre']['correction_droit']['axe'] = $data['axeD'];
					$data_commandeD['verre']['correction_droit']['axe'] = $data['axeD'];
				}

				if(isset($data['axeG']))
				{
					$data_commande['verre']['correction_gauche']['axe'] = $data['axeG'];
					$data_commandeG['verre']['correction_gauche']['axe'] = $data['axeG'];
				}

				if(isset($data['traitementD']))
				{
					$data_commande['verre']['correction_droit']['traitement']= $data['traitementD'];
					$data_commandeD['verre']['correction_droit']['traitement']= $data['traitementD'];
				}

				if(isset($data['traitementG']))
				{
					$data_commande['verre']['correction_gauche']['traitement']= $data['traitementG'];
					$data_commandeG['verre']['correction_gauche']['traitement']= $data['traitementG'];
				}
				if($data['teintepersoD']!="")
				{
					$data_commande['verre']['correction_droit']['teinte']= $data['teintepersoD'];
					$data_commandeD['verre']['correction_droit']['teinte']= $data['teintepersoD'];
				}
				else
				{
					if(isset($data['teinteD']))
					{
						$data_commande['verre']['correction_droit']['teinte']= $data['teinteD'];
						$data_commandeD['verre']['correction_droit']['teinte']= $data['teinteD'];
					}
				}
				if($data['teintepersoG']!="")
				{
					$data_commande['verre']['correction_gauche']['teinte']= $data['teintepersoG'];
					$data_commandeG['verre']['correction_gauche']['teinte']= $data['teintepersoG'];
				}
				else
				{
					if(isset($data['teinteG']))
					{
						$data_commande['verre']['correction_gauche']['teinte']= $data['teinteG'];
						$data_commandeG['verre']['correction_gauche']['teinte']= $data['teinteG'];
					}
				}

				if(isset($data['galbeD']))
				{
					$data_commande['verre']['correction_droit']['galbe']= $data['galbeD'];
					$data_commandeD['verre']['correction_droit']['galbe']= $data['galbeD'];

					$data_commandeD['verre']['galbe']= $data['galbeD'];
				}

				if(isset($data['galbeG']))
				{
					$data_commande['verre']['correction_gauche']['galbe']= $data['galbeG'];
					$data_commandeG['verre']['correction_gauche']['galbe']= $data['galbeG'];

					$data_commandeD['verre']['galbe']= $data['galbeG'];
				}

				if($data['diametreD']==$data['diametreG'])
					$data_commande['verre']['diametre']= $data['diametreD'];

				if(isset($data['PrismeSphereD']))
				{
					$data_commande['verre']['correction_droit']['PrismeSphere'] = $data['PrismeSphereD'];
					$data_commande['verre']['dioptrie_droit'] = $data['PrismeSphereD'];
                    $data_commandeD['verre']['correction_droit']['PrismeSphere'] = $data['PrismeSphereD'];
                    $data_commandeD['verre']['dioptrie_droit'] = $data['PrismeSphereD'];

                }
				if(isset($data['PrismeCylindreD']))
				{
					$data_commande['verre']['correction_droit']['PrismeCylindre'] = $data['PrismeCylindreD'];
					$data_commande['verre']['base_droit'] = $data['PrismeCylindreD'];
					$data_commandeD['verre']['correction_droit']['PrismeCylindre'] = $data['PrismeCylindreD'];
					$data_commandeD['verre']['base_droit'] = $data['PrismeCylindreD'];
				}

				if(isset($data['PrismeSphereG']))
				{
					$data_commande['verre']['correction_gauche']['PrismeSphere'] = $data['PrismeSphereG'];
					$data_commande['verre']['dioptrie_gauche'] = $data['PrismeSphereG'];
					$data_commandeG['verre']['correction_gauche']['PrismeSphere'] = $data['PrismeSphereG'];
					$data_commandeG['verre']['dioptrie_gauche'] = $data['PrismeSphereG'];
				}
				if(isset($data['PrismeCylindreG']))
				{
					$data_commande['verre']['correction_gauche']['PrismeCylindre'] = $data['PrismeCylindreG'];
					$data_commande['verre']['base_gauche'] = $data['PrismeCylindreG'];
					$data_commandeG['verre']['correction_gauche']['PrismeCylindre'] = $data['PrismeCylindreG'];
					$data_commandeG['verre']['base_gauche'] = $data['PrismeCylindreG'];
				}

				if(isset($data['diametreD']))
				{
					$data_commande['verre']['correction_droit']['diametre'] = $data['diametreD'];
					$data_commandeD['verre']['correction_droit']['diametre'] = $data['diametreD'];
					$data_commandeD['verre']['diametre']=$data['diametreD'];
				}

				if(isset($data['diametreG']))
				{
					$data_commande['verre']['correction_gauche']['diametre'] = $data['diametreG'];
					$data_commandeG['verre']['correction_gauche']['diametre'] = $data['diametreG'];
					$data_commandeG['verre']['diametre']=$data['diametreG'];
				}

				if(isset($data['dioptrieD']))
				{
					$data_commande['verre']['correction_droit']['dioptrie'] = $data['dioptrieD'];
					$data_commandeD['verre']['correction_droit']['dioptrie'] = $data['dioptrieD'];
				}

				if(isset($data['dioptrieG']))
				{
					$data_commande['verre']['correction_gauche']['dioptrie'] = $data['dioptrieG'];
					$data_commandeG['verre']['correction_gauche']['dioptrie'] = $data['dioptrieG'];
				}

				if(isset($data['baseD']) && $data['baseD']!="")
				{
					$data_commande['verre']['correction_droit']['base'] = $data['baseD'];
					$data_commandeD['verre']['correction_droit']['base'] = $data['baseD'];
				}

				if(isset($data['baseG']) && $data['baseG']!="")
				{
					$data_commande['verre']['correction_gauche']['base'] = $data['baseG'];
					$data_commandeG['verre']['correction_gauche']['base'] = $data['baseG'];
				}

				if(isset($data['hauteur']) && !empty($data['hauteur']))
				{
					$data_commande['verre']['hauteur'] = $data['hauteur'];
					$data_commandeD['verre']['hauteur'] = $data['hauteur'];
				}

				if(isset($data['hauteur_gauche']) && !empty($data['hauteur_gauche']))
				{
					$data_commande['verre']['hauteur_gauche'] = $data['hauteur_gauche'];
					$data_commandeG['verre']['hauteur_gauche'] = $data['hauteur_gauche'];
				}

				if(isset($data['photocromie']) && !empty($data['photocromie']))
					$data_commande['verre']['photocromie']= $data['photocromie'];

				if(isset($data['ecart_puppillaire_droit']) && !empty($data['ecart_puppillaire_droit'])) {
                    $data_commande['verre']['ecart_puppillaire']['droit'] = $data['ecart_puppillaire_droit'];
                    $data_commandeD['verre']['ecart_puppillaire']['droit'] = $data['ecart_puppillaire_droit'];
                }

				if(isset($data['ecart_puppillaire_gauche']) && !empty($data['ecart_puppillaire_gauche'])) {
                    $data_commande['verre']['ecart_puppillaire']['gauche'] = $data['ecart_puppillaire_gauche'];
                    $data_commandeG['verre']['ecart_puppillaire']['gauche'] = $data['ecart_puppillaire_gauche'];
                }

				if(isset($data['angle_pantoscopique']) && !empty($data['angle_pantoscopique']))
					$data_commande['verre']['angle_pantoscopique'] = $data['angle_pantoscopique'];

				if(isset($data['angle_galbe']) && !empty($data['angle_galbe']))
					$data_commande['verre']['angle_galbe'] = $data['angle_galbe'];

				if(isset($data['distance_verre_oeil']) && !empty($data['distance_verre_oeil']))
					$data_commande['verre']['distance_verre_oeil'] = $data['distance_verre_oeil'];


				if(isset($data['degression_droit']))
					$data_commande['verre']['correction_droit']['degression'] = $data['degression_droit'];

				if(isset($data['degression_gauche']))
					$data_commande['verre']['correction_gauche']['degression'] = $data['degression_gauche'];

				if(isset($data['droit']) && !isset($data['gauche'])){
					unset($data_commande['verre']['correction_gauche']);
					$prix_double = false;
				}

				if(!isset($data['droit']) && isset($data['gauche'])){
					unset($data_commande['verre']['correction_droit']);
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
				$data['information_commandeD'] = json_encode($data_commandeD);
				$data['information_commandeG'] = json_encode($data_commandeG);


				if($data['prixDH']!="")
					$prix_verre = $data['prixDH'];//$this->m_verres->getPrixVerre($data['id_verre'],$id_grille_tarifaire,$data['id_users']);
				else
					$prix_verre = $data['prixGH'];

				if($unVerreD==1)
				{
					$data['prix_verre'] = $data['prixUnitaireD'];
				}
				elseif($unVerreG==1)
				{
					$data['prix_verre'] = 0;
				}
				else
				{
					$data['prix_verre'] = $prix_verre;
				}


				//echo "PRIX VERRE: ".$data['prix_verre'];

				$data['total_commande'] = $data['prixDH']+$data['prixGH'];

				$data['libelle_verre'] =  $data['nomverreDH'];

				if($prix_double) {
					$data['total_commande'] *= 2;
//					$data['tarif_supplement'] *= 2;
				}

                $data['tarif_supplement'] = $data['supplementG'] + $data['supplementD'];

                $data['recap_commande'] = $data;
				if(isset($data['pair_order_recap'])) {
					$info_commande_pair = json_decode($pair_order->information_commande,true);
//                    var_dump($info_commande_pair["verre"]["correction_droit"]["traitement"]);

					if(isset($info_commande_pair["verre"]["correction_droit"]["traitement"]))
					{
						$traitementD_paire = $info_commande_pair["verre"]["correction_droit"]["traitement"];
						if($traitementD_paire != 0 & $traitementD_paire != "")
						{
							$data['pair_order_recap']["traitement_D"] = $this->m_commande->getTraitementByCode($traitementD_paire);
						}
					}

					if(isset($info_commande_pair["verre"]["correction_gauche"]["traitement"]))
					{
						$traitementG_paire = $info_commande_pair["verre"]["correction_gauche"]["traitement"];
						if($traitementG_paire != 0 & $traitementG_paire != "")
						{
							$data['pair_order_recap']["traitement_G"] = $this->m_commande->getTraitementByCode($traitementG_paire);
						}
					}

					if(isset($info_commande_pair["verre"]["correction_droit"]["teinte"]))
					{
						$teinteD_paire = $info_commande_pair["verre"]["correction_droit"]["teinte"];
						if($teinteD_paire != "")
						{
							$data['pair_order_recap']["teinte_D"] = $this->m_commande->getTeinteById($teinteD_paire);
						}
					}

					if(isset($info_commande_pair["verre"]["correction_gauche"]["teinte"]))
					{
						$teinteG_paire = $info_commande_pair["verre"]["correction_gauche"]["teinte"];
						if($teinteG_paire != "")
						{
							$data['pair_order_recap']["teinte_G"] = $this->m_commande->getTeinteById($teinteG_paire);
						}
					}

					$discount = array();



					$pair_verre = floatval($data['pair_order_recap']['prix_verre']);
					$current_verre = floatval($data['recap_commande']['prix_verre']);

					if($pair_verre < $current_verre)
					{
						//$discount['a'] = 1;
						$discount['on'] = 'pair_order';
					}
					else
					{
						//$discount['a'] = 0;
						$discount['on'] = 'order';
					}
				//	if($pair_verre < $current_verre)
					//{

						$discount['amount'] = $this->m_commande->getDiscountByOrderIdNew($data['pair_order_recap']['id_commande'], true);
				/*	}
					else
					{

						$discount['on'] = 'order';
						$discount['amount'] = 0;
						if($data['lensFocalGroup'] == '4' || $data['lensFocalGroup'] == '5' || $data['lensFocalGroup'] == '6' || $data['lensFocalGroup'] == '1')
						{
							$discount['amount'] = 30;
						}
						else
						{
							if($data['generation'] == 'Elysium')
							{
								$discount['amount'] = 50;
							}
							elseif($data['generation'] == 'Omega')
							{
								$discount['amount'] = 40;
							}
							elseif($data['generation'] == 'Platinium')
							{
								$discount['amount'] = 35;
							}
							elseif($data['generation'] == 'E-Space')
							{
								$discount['amount'] = 30;
							}
							else
							{
								$discount['amount'] = 0;
							}
						}

						$data['prixDiscountD'] = ($data['prixDH']) - ( ( ($data['prixDH']) / 100 ) * $discount['amount'] );
						$data['prixDiscountG'] = ($data['prixGH']) - ( ( ($data['prixGH']) / 100 ) * $discount['amount'] );
					}
					*/

					$data['discount'] = $discount;

					if(isset($pair_order_id)) {
						$data['pair_order_id'] = $pair_order_id;
					}

				}
                $this->session->set_userdata('order', $data);
				$data['recap_commande'] = $data;

				if($data['panierA']==2)
				{
					$this->db->from('commande_montures_temp cm');
					$this->db->select('m.*, cm.id as id_temp, cm.qty, cm.status, cm.id_client, collec.name as collection, m_pack.id as pack_id, m_pack.name as pack, m_pack.prix as prixpack');
					$this->db->where('cm.id_client', $data['id_users']);
					$this->db->where('cm.status', 0);
					$this->db->join('montures m', 'm.id = cm.id_monture','left');
					$this->db->join('montures_collection collec', 'm.id_collection = collec.id','left');
					$this->db->join('montures_pack m_pack', 'm_pack.id = cm.id_pack','left');
					$query = $this->db->get();
					if ($query->num_rows() > 0) {
						$t = $query->result();
						$data['montures']=$t[0];
					}

					$panierA_sans_monture = get_cookie("panierA_sans_monture");
				/*	if($panierA_sans_monture!='1'){
					$this->db->where('id', 1);
					$this->db->set('flag', 1, FALSE);
					$this->db->update('flag_monture');
					}
			*/
					//set_cookie('flag_monture','1','180000');
				}
				if($data['panierA']==1)
				{
					$this->db->from('commande_montures_temp cm');
					$this->db->select('m.*, cm.id as id_temp, cm.qty, cm.status, cm.id_client, collec.name as collection, m_pack.id as pack_id, m_pack.name as pack, m_pack.prix as prixpack');
					$this->db->where('cm.id_client', $data['id_users']);
					$this->db->where('cm.status', 0);
					$this->db->join('montures m', 'm.id = cm.id_monture','left');
					$this->db->join('montures_collection collec', 'm.id_collection = collec.id','left');
					$this->db->join('montures_pack m_pack', 'm_pack.id = cm.id_pack','left');
					$query = $this->db->get();
					if ($query->num_rows() > 0) {
						$t = $query->result();
						$data['montures']=$t[0];
					}

					/*$this->db->where('id', 1);
					$this->db->set('flag', 1, FALSE);
					$this->db->update('flag_monture');
					*/
				}

//                var_dump($data['recap_commande']);die;
//                print_r($data['recap_commande']['recap_commande']['indices']);die;
                echo $this->load->view('ajax_recap_commande',$data);
			}else{
				 echo "error";
			}
		}
		else
			$this->redirect();

    }

    public function bons_livraison(){
        if($this->session->userdata('logged_in') === true){
            $this->data['modules']['datatables'] = true;
            $this->data['page'] = $this->data['title'] = "Mes bons de livraisons";
			//$this->data['sql'] = $this->m_commande->getCommandeByUserAvecMontures($dataOrder);

            $this->load->view('mes_bons_livraison',$this->data);
        }else
            $this->redirect();
    }

	public function bons_livraison_ajax(){
        if($this->session->userdata('logged_in') === true && $this->input->is_ajax_request()){
            $data = $dataOrder = array();
			$data['aaData'] = array();

			$dataOrder['id_users'] = $this->data['user_info']->id_users;

            $data_bon_livraison = $this->m_commande->getCommandeByUserAvecMontures($dataOrder);

            if($data_bon_livraison !== false)
                foreach($data_bon_livraison as $key => $bon_livraison)
					if($bon_livraison->commande_monture == "1")
					{
						$data['aaData'][$key] =
                        array(
                            'CR'.$bon_livraison->id_commande.'-'.$this->data['user_info']->id_users,
                            date('d/m/Y', strtotime($bon_livraison->date_commande)),
                            $bon_livraison->reference_client,
							$bon_livraison->intitule_bl,
                            'Monture',
                            '<a href="/index/generer_pdf/bon_livraison_montures/'.$bon_livraison->id_commande.'" class="btn btn-icon waves-effect waves-light btn-inverse m-b-5"><i class="zmdi zmdi-download"></i> Télécharger</a>'
                        );
					}
					else
					{
                    	$data['aaData'][$key] =
                        array(
                            'CR'.$bon_livraison->id_commande.'-'.$this->data['user_info']->id_users,
                            date('d/m/Y', strtotime($bon_livraison->date_commande)),
                            $bon_livraison->reference_client,
							$bon_livraison->intitule_bl,
                            $bon_livraison->generation_verre,
                            '<a href="/index/generer_pdf/bon_livraison/'.$bon_livraison->id_commande.'" class="btn btn-icon waves-effect waves-light btn-inverse m-b-5"><i class="zmdi zmdi-download"></i> Télécharger</a>'
                        );
					}

            die(json_encode($data));

        }else
            $this->redirect();
    }

    public function accept_simplay() {
        $orderReference = $_GET['order_reference'];
        $this->load->helper('slimpay');
        $userInformation = getUserInformation($orderReference);
        if (!$userInformation) {
            $data['title'] = "Optieyescommande : commande de verres de lunettes pour les professionnels de l'optique";
            $data['page'] = "Connexion";
            $data['recovery'] = false;

            $data['modules'] = array('sweetalert' => true);
            $this->load->view('registration_rejected', $data);
        }
        else {
            $passAleatoire = $this->CarAleatoire(8);
            $inscription['email'] = strtolower($userInformation['email']);
            $inscription['pass'] = md5($inscription['email'].'&&'.$passAleatoire);
            $inscription['date_inscription'] = date("Y-m-d H:i:s");

            $sql = "UPDATE users SET 
                 pass = '" . $inscription['pass'] . "', 
                 document_rib = 'ok', 
                 valid_document_rib = 1,
                 valid_mandat = 1,
                 date_inscription = '" . $inscription['date_inscription'] . "'
                WHERE email = '" . $inscription['email'] . "'";

            $this->db->query($sql);
            $mess_txt = "<html>
					 <head></head>
					 <body><b>Bonjour</b>!
                     <br><br>Cet email fait suite à votre inscription. Voici votre mot de passe : ".$passAleatoire.", il vous permet de vous connecter au site, conservez le précieusement.</body></html>";

            $subject_txt = "Vos informations de connexion";

            $this->mail($inscription,$mess_txt,true,$subject_txt);

            $data['title'] = "Optieyescommande : commande de verres de lunettes pour les professionnels de l'optique";
            $data['page'] = "Connexion";
            $data['recovery'] = false;

            $data['modules'] = array('sweetalert' => true);
            $this->load->view('registration_accepted', $data);
        }

    }

    public function login($recovery=false){
//        echo 'daadssa';die;
//        $this->load->helper('slimpay');
//        $x = getOrderTest('01e9eeff-3d57-11ec-a985-000000000000');
//        echo '<pre>';
//        print_r($x);
//        echo '</pre>';die;
        $data['title'] = "Optieyescommande : commande de verres de lunettes pour les professionnels de l'optique";
        $data['page'] = "Connexion";
        $data['recovery'] = $recovery;

        $data['modules'] = array('sweetalert' => true);

		if($recovery) {
            $data['title'] = "Réinitialiser son mot de passe";
            $data['page'] = "Connexion";
        }

        $this->load->view('login',$data);
//        $this->load->view('login',$data);
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

			$result = $this->m_config->getConfig(array('nom_config' => 'commentaire'));

        	$this->data['commentaire_actif'] = json_decode($result[0]->param_config);

            if($order = $this->m_commande->getCommandeByIdNew($order_id, $this->data['user_info']->id_users, false)) {

                $this->data['recap_commande'] = $order[0];
                $this->data['page'] = $this->data['title'] = "Repasser une commande";

                $info_commande = json_decode($this->data['recap_commande']->information_commande,true);

				if(isset($info_commande["verre"]["correction_droit"]["traitement"]))
				{
					$traitementD = $info_commande["verre"]["correction_droit"]["traitement"];
					if($traitementD != 0 & $traitementD != "")
					{
						$this->data["traitement_D"] = $this->m_commande->getTraitementByCode($traitementD);
					}
				}

				if(isset($info_commande["verre"]["correction_gauche"]["traitement"]))
				{
					$traitementG = $info_commande["verre"]["correction_gauche"]["traitement"];
					if($traitementG != 0 & $traitementG != "")
					{
						$this->data["traitement_G"] = $this->m_commande->getTraitementByCode($traitementG);
					}
				}

				if(isset($info_commande["verre"]["correction_droit"]["teinte"]))
				{
					$teinteD = $info_commande["verre"]["correction_droit"]["teinte"];
					if($teinteD != "")
					{
						$this->data["teinte_D"] = $this->m_commande->getTeinteById($teinteD);
					}
				}
				if(isset($info_commande["verre"]["correction_gauche"]["teinte"]))
				{
					$teinteG = $info_commande["verre"]["correction_gauche"]["teinte"];
					if($teinteG != "")
					{
						$this->data["teinte_G"] = $this->m_commande->getTeinteById($teinteG);
					}
				}
				if($this->data['user_info']->commande_suspendue == 0)
				{
                $this->load->view('reorder', $this->data);
                }
                else
                {
                	$this->redirect();
                }

            }
            else {
                $this->redirect('/index/passer_commande');
            }

        }
        else {
            $this->redirect();
        }

    }

    public function passer_commande($pair_order = false,$t = 1){

        $this->load->model('m_users');
        $this->load->helper('slimpay');
        $this->load->library('email');

        $this->data['pair_order'] = false;


        $this->data['modules'] = array('sweetalert' => true, 'touchspin' => true);

        if($this->session->userdata('logged_in') === true){

        	$this->data['type_commande'] = $t;

            $this->data['infos_user'] = $this->m_users->getUserById($this->data['user_info']->id_users);

            if(false !== $pair_order) {
                $this->data['pair_order'] = $this->m_commande->getCommandeByIdNew($pair_order, $this->data['user_info']->id_users, true)[0];
            }

            if($this->data['infos_user'][0]->valid_mandat != 1) {

                $checkMandat = getMandat('OPTR' . $this->data['user_info']->id_users."BIS");

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

		$panierA = get_cookie("panierA");
		if($panierA=='1'){
			$refPanierA = get_cookie("refPanierA");
			$this->data['refPanierA'] = $refPanierA;

            $this->data['panierA'] = '1';
        }

		$panierA_sans_monture = get_cookie("panierA_sans_monture");
		if($panierA_sans_monture=='1'){
            $this->data['panierA_sans_monture'] = '1';
        }

		if($this->data['user_info']->commande_suspendue == 0)
        {
        	$this->load->view('dashboard',$this->data);
        }
        else {
            $this->redirect();
        }
    }

    public function submit_sepa($infos_user, $sepa) {
//        $insert_id = $this->db->insert_id();
//        $update_id = $this->db->affected_rows();
        //print_r($this->db->last_query());die;
//        print_r($insert_id);die;
        $userId = $infos_user['user_id'];
        if(isset($userId) && $this->input->is_ajax_request()) {

            //$infos_user = $this->m_users->getUserById($this->data['user_info']->id_users);

            $this->load->helper('slimpay');

            $errors = '';

            $iban_info['email'] = $infos_user['email'];
            $iban_info['client_ref'] = 'OPTC'.$userId;
            $iban_info['slm_ref'] = 'OPTR'.$userId."BIS";
            $iban_info['familyName'] = $sepa['familyName'];
            $iban_info['givenName'] = $sepa['givenName'];
            $iban_info['companyName'] = $sepa['companyName'];

            switch($sepa['honorificPrefix']) {
                case 1:
                    $iban_info['honorificPrefix'] = 'Mr';
                    break;
                case 2:
                    $iban_info['honorificPrefix'] = 'Mrs';
                    break;
                case 3:
                    $iban_info['honorificPrefix'] = 'Miss';
            }

            $iban_info['iban'] = str_replace(' ', '', $sepa['iban']);
            $iban_info['city'] = $sepa['city'];
            $iban_info['postalCode'] = $sepa['postalCode'];
            $iban_info['street1'] = $sepa['street1'];
            $iban_info['street2'] = $sepa['street2'];

            //var_dump($iban_info);

            foreach($iban_info as $k => $v) {
                $value = trim($v);
                if($k != 'street2') {
                    if (empty($value)) {
                        $errors[$k] = 1;
                    }
                    else {
                        if($k == 'postalCode') {
//                            print_r($value);
                            if(!is_numeric($value)) {
                                $errors[$k] = 2;
                            }
                        }
                    }
                }
            }
//            print_r(!checkIBAN($sepa['iban']));die;
            $iban = $sepa['country'] . str_replace(" ", "", $sepa['iban']);
            $iban_info['iban'] = $iban;

            if($iban != '') {
                if (!checkIBAN($iban)) {
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
//                     switch($this->config->item('opti_env')) {
//
//                            case 'prod':
//                                $state = createMandat($iban_info);
//                                break;
//
//                            case 'dev':
////                                $state = createMandat($iban_info);
//                                $state = createMandatTest($iban_info);
//                                //$state['status'] = 1;
//                                break;
//                            default:
//                                $state = [];
//                                $state['status'] = 0;
//                                break;
//                }
//                echo json_encode($state);
                if ($state['status'] == 1) {
                    //$this->m_users->updateUser(array('id_users' => $insert_id, 'valid_mandat' => 1, 'document_rib' => 'ok', 'valid_document_rib' => 1));
                    return json_encode($state);
                }
                else {
//                    $this->db->delete("users", array('id_users' => $insert_id));
//                    $sql = "ALTER TABLE `users` AUTO_INCREMENT $insert_id";
//                    $this->db->query($sql);
//                    $this->m_users->updateUser(array('id_users' => $insert_id, 'active' => 0));
                    return false;
                }
//                if($this->data['infos_user'][0]->valid_mandat != 1) {
//
//                    $checkMandat = getMandat('OPTR' . $this->data['user_info']->id_users."BIS");
//
//                    if ($checkMandat['state'] == 'active') {
//
//                        $this->m_users->updateUser(array('id_users' => $this->data['user_info']->id_users, 'valid_mandat' => 1, 'document_rib' => 'ok', 'valid_document_rib' => 1));
//
//                        $this->email->from('noreply@optieyescommande.com', 'Optieyes Commande');
//                        $this->email->to('optieyescommande@gmail.com');
//                        $this->email->cc('testproxicom@gmail.com');
//
//                        $this->email->subject('Client n°' . $this->data['user_info']->id_users . ' a validé son RIB.');
//
//                        $this->email->send();
//
//                    }
//
//                }
            }



        }
//        else {
//            $this->redirect();
//        }

    }

    public function submit_mandat() {

        if($this->session->userdata('logged_in') === true && $this->input->is_ajax_request()) {


            $infos_user = $this->m_users->getUserById($this->data['user_info']->id_users);

            $this->load->helper('slimpay');

            $errors = '';

            $iban_info['email'] = $infos_user[0]->email;
            $iban_info['client_ref'] = 'OPTC'.$this->data['user_info']->id_users;
            $iban_info['slm_ref'] = 'OPTR'.$this->data['user_info']->id_users."BIS";
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

            //var_dump($iban_info);


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

                    if(empty($c->libelle_verre)){
                    	$c->libelle_verre = $c->trad_fr;
                    }
                    if($c->generation == "T-One")
                    {
                    	$c->libelle_verre = str_replace("E-Space","T-One",$c->libelle_verre);
                    }

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

			$panierA = get_cookie("panierA");

			$panierA_sans_monture = get_cookie("panierA_sans_monture");
			if($panierA_sans_monture=='1'){
				$panierA='1';
			}


			if($panierA=='1'){
				if($this->input->post('id_type_generation_verre')=="1")
				{
					if(($data['generation_verre']  = $this->m_generation_verre->getGenerationVerre("27",$this->data['user_info']->id_users, true,false)) !== false){
                		echo $this->load->view('ajax_type_generation_verre',$data);
					}
				}
				if($this->input->post('id_type_generation_verre')=="2")
				{
					if(($data['generation_verre']  = $this->m_generation_verre->getGenerationVerre("26",$this->data['user_info']->id_users, true,false)) !== false){
                		echo $this->load->view('ajax_type_generation_verre',$data);
					}
				}
				if($this->input->post('id_type_generation_verre')=="3")
				{
					if(($data['generation_verre']  = $this->m_generation_verre->getGenerationVerre("25",$this->data['user_info']->id_users, true,false)) !== false){
                		echo $this->load->view('ajax_type_generation_verre',$data);
					}
				}
				if($this->input->post('id_type_generation_verre')=="4")
				{
					if(($data['generation_verre']  = $this->m_generation_verre->getGenerationVerre("24",$this->data['user_info']->id_users, true,false)) !== false){
                		echo $this->load->view('ajax_type_generation_verre',$data);
					}
				}
			}
			else
			{

            	if(($data['generation_verre']  = $this->m_generation_verre->getGenerationVerre($this->input->post('id_type_generation_verre'),$this->data['user_info']->id_users, true,false)) !== false){
                	echo $this->load->view('ajax_type_generation_verre',$data);
				}
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
//		    $data['pass'] = trim($data['pass']);
			   if(valid_email($data['email'])){
			       if ($this->m_users->checkMail($data)) {
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
			       else {
                       echo json_encode(array('status'=> 'mail_not_valide'));
                   }

			   }
			   else
					echo json_encode(array('status'=> 'error_mail'));
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
            $mail = trim($user[0]->email);
            if(md5($mail.'&&'.$old_password) == $user[0]->pass) {


                if($password == $password_confirm) {

                    if($password != '') {

                        if($this->m_users->updateUser(array('id_users' => $user[0]->id_users, 'pass' => md5($mail.'&&'.$password)))){
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

			$panierA = get_cookie("panierA");

			$panierA_sans_monture = get_cookie("panierA_sans_monture");
			if($panierA_sans_monture=='1'){
				$verres = $this->m_verres->getVerreASM($data);
			}
			elseif($panierA=='1'){
				$verres = $this->m_verres->getVerreA($data);
			}
			else
			{
				$verres = $this->m_verres->getVerre($data);
			}

			//echo $verres;//json_encode(array('intutile' => $verres, 'id_verre' => ''));
			//exit;

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
            $data = $this->input->post();
            $inscription = $data['inscription'];
            //print_r($inscription);die;
            $sepa = $data['sepa'];
//            print_r($data);die;
            if($this->checkSiret($inscription['numero_siret'])){
                //if($this->checkTvaIntraComm($data['numero_siret']) == $data['tva_intracom']){
                    $passAleatoire = $this->CarAleatoire(8);
                    $inscription['email'] = strtolower($inscription['email']);
                    $inscription['pass'] = md5($inscription['email'].'&&'.$passAleatoire);
                    $inscription['date_inscription'] = date("Y-m-d H:i:s");
                    $userId = $this->m_users->addUser($inscription);
                    if(isset($userId->error)){
                        if ($userId->error == "DUPLICATE_SIRET") {
                            echo json_encode(array('status'=> 'error', 'error' => 'duplicate_siret',
                                'magasin' => $userId->id_users));
                        }
                        else if ($userId->error == "DUPLICATE_EMAIL") {
                            setlocale(LC_TIME, "fr_FR");
                            $date = utf8_encode(strftime('%A %d %B %Y', strtotime($userId->date_inscription)));
                            echo json_encode(array('status'=> 'exists', 'date' => $date));
                        }
                    }
                    else{

                        //<br><br>
                        //Vous trouverez aussi en pièce jointe de ce mail notre catalogue électronique pour votre logiciel optique. Merci de bien vouloir contacter le service client de votre logiciel et lui fournir le fichier joint à ce mail, pour qu'il puisse vous intégrer notre catalogue Optimize sur votre logiciel d'opticien.
                        $inscription['user_id'] = $userId;
                        $submitSepa = $this->submit_sepa($inscription, $sepa);
                        $this->m_teledetourage->addTeledetourageFormat($userId);
                        if (!$submitSepa) {
                            echo json_encode(array('status'=> 'error', 'error' => 'iban'));
                        }
                        else {
//                            $mess_txt = "<html>
//										<head></head>
//										<body><b>Bonjour</b>!
//										<br><br>
//										Cet email fait suite à votre inscription. Voici votre mot de passe : ".$passAleatoire.", il vous permet de vous connecter au site, conservez le précieusement.
//										</body>
//									    </html>";
//
//                            $subject_txt = "Vos informations de connexion";
//                            print_r($inscription);
//                            print_r($mess_txt);
//                            print_r($subject_txt);die;
//                            $plouf = [];
//                            $plouf['email'] = $inscription['email'];
//
//                            $this->mail($plouf,$mess_txt,true,$subject_txt);
                            echo $submitSepa;

                        }
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
			$data['email'] = trim($data['email']);
//			var_dump($data['email']);die;
            if(!empty($data['email'])){
                if(($data = $this->m_users->getUserByMail($data['email'])) !== false){
                    $data['email'] = $data[0]->email;
                    $lien = '<a href="'.$this->config->item('base_url').'index/recovery/'.$data[0]->pass.'">'.$this->config->item('base_url')."index/recovery/".$data[0]->pass.'</a>';
                    $mess_txt = "<html><head></head><body><b>Bonjour</b>!<br>
                        <br> cet email fait suite à une demande de réinitialisation de mot de passe. 
                        Cliquer sur le lien suivant pour accèder à la page de changement de mot de passe : <br>
                        <br>".$lien." <br><br> Si cette demande ne provient pas de vous, veuillez ne pas tenir compte de cet email.<br><br> A bientôt sur Optieyes !</body></html>";

                    $subjet_txt = "Réinitialisation de votre mot de passe";
                    $this->mail($data,$mess_txt,true,$subjet_txt);
                }
                else{
//                    echo "numero_siret_does_not_exist";
                    echo "email_not_good";
                }
            }
            else
                echo "empty_mail";
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
                'tarif_packaging' => $this->m_commande->getTarifPackaging($userdata->id_users, $userdata->tarif_packaging),
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
		/*	$this->db->where('id', 1);
			$this->db->set('flag', 1, FALSE);
			$this->db->update('flag_monture');
			*/
			//set_cookie('flag_monture','1','180000');

			//$data['client_ref'] = " ";
			$userdata = $this->m_users->getUserById($user_id)[0];

			$data['commentaire'] = isset($data['commentaire']) ? $data['commentaire'] : "";
			$data['client_ref'] = $this->input->post('ref_client');


            $args = array(
                'reference_client' => $data['client_ref'],
                'lens_id' => 0,
                'lens_generation' => 0,
                'information_commande' => json_encode($data['montures']),
                'commentaire' => $data['commentaire'],
                'id_users' => $user_id,
                'total_commande' => $total_order,
				'tarif_livraison' => $userdata->tarif_livraison,
				'tarif_packaging' => $this->m_commande->getTarifPackaging($userdata->id_users, $userdata->tarif_packaging),
				'commande_monture' => 1
            );

			$this->db->query('DELETE FROM commande_montures_temp WHERE id_client = "'.$user_id.'" AND status=0');
//            var_dump($args);die;
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

            if($this->data['user_info']->commande_suspendue == 0)
			{

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
		//$this->db->query('DELETE FROM commande_montures_temp WHERE id_client = "'.$data['user_info']->id_users.'" AND date < DATE_SUB(NOW(), INTERVAL 30 MINUTE) AND status=0');
		//$this->db->query('DELETE FROM commande_montures_temp WHERE (id_client = "'.$data['user_info']->id_users.'" AND status=0 AND avec_verre = 0) OR (id_client = "'.$data['user_info']->id_users.'" AND status=0 AND avec_verres = 1 AND date < DATE_SUB(NOW(), INTERVAL 30 MINUTE)) ');
		//$this->db->query('DELETE FROM commande_montures_temp WHERE (id_client = "'.$data['user_info']->id_users.'") ');

		$collections = $this->m_montures->getCollection();

		foreach($collections as $collection) {
			echo '<div class="item">';
			echo '<div class="thumb"><img src="'.site_url('uploads/'.$collection->image).'" style="max-width: 312px;" /></div>';
			echo '<b>'.$collection->name.'</b><br />';
			echo '<a class="btn btn-warning product-select" rel="'.$collection->id.'">Voir collection</a>';
			echo '</div>';
		}

	}

	public function get_packs()
	{

		$data['user_info'] = $this->data['user_info'];
		//$this->db->query('DELETE FROM commande_montures_temp WHERE id_client = "'.$data['user_info']->id_users.'" AND date < DATE_SUB(NOW(), INTERVAL 30 MINUTE) AND status=0');

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
		$user_id = $this->input->post('user_id');
		$this->db->query('DELETE FROM commande_montures_temp WHERE id_client = '.$this->data['user_info']->id_users.' ');
		set_cookie('panierA',0,'1800');
		set_cookie('panierA_sans_monture','0','1800');
		set_cookie('refPanierA','','1800');
	//	echo 'DELETE FROM commande_montures_temp WHERE id_client = '.$this->data['user_info']->id_users.' ';

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
			if($collection_id==5)
			{
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
						echo '<div class="item"><br><br>';
						echo '<div class="thumb"><img src="'.site_url('uploads/'.$pack->image).'" style="max-width: 312px;" /></div>';
						echo '<b>'.$pack->name.'</b><br />';
						if($pack->id!=1)
							echo '<a class="btn btn-warning product-select" rel="voir_pack_'.$pack->id.'">Voir les montures</a>';
						else
							echo "Prix: ".$pack->prix."&#8364;<br><br>";
						echo '<a class="btn btn-warning product-select" rel="add_pack_'.$pack->id.'">Ajouter à mon panier</a>&nbsp;&nbsp;';
						echo '</div>';
					}
				}
			}
			if (is_array($montures) || is_object($montures))
			{
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
						echo '<div class="item '.$monture->modele.'">';
						echo '<div class="thumb"><img src="'.site_url('uploads/'.$monture->image).'"  style="max-width: 312px;" /></div>';
						echo '<b>'.$monture->modele.'</b><br />';
						echo 'Type: '.$monture->type.'<br />';
						echo 'Taille: '.$monture->size.'<br />';
						echo 'Couleur: '.$monture->couleur.'<br />';
						echo 'Prix: '.$monture->prix_vente.'&#8364;<br />';
						echo '<div><label style="float: left" for="qty_monture_'.$monture->id.'">Quantité: </label><span style="display: block; overflow: hidden; padding: 0 4px 0 6px;" ><input style="width:61px; border=2px solid black; text-align: center" type="number" id="qty_monture_'.$monture->id.'" name="qty_monture_'.$monture->id.'" class="form-control" value="1" /></span></div><br />';
						echo '<a class="btn btn-warning monture-select" rel="'.$monture->id.'">Ajouter à mon panier</a>';
						echo '</div>';
					}
				}
			}
		  }
		}
	}

	public function add_montures_to_order() {

		$data['user_info'] = $this->data['user_info'];
		$data['client_ref'] = $this->input->post('ref_client');
		$monture_id = (int) $this->input->post('id');
        $qty = $this->input->post('qty');

		$this->db->from('commande_montures_temp');
        $this->db->select('*');
		$this->db->where('id_client', $data['user_info']->id_users);
		$this->db->where('id_monture', $monture_id);
		$this->db->where('status', 0);
		$query = $this->db->get();


		//echo "query->num_rows:".$query->num_rows();

		if ($query->num_rows() > 0) {
            $id_temp = $query->result()[0];
			$this->db->where('id', $id_temp->id);
            $this->db->update('commande_montures_temp', array(
                    'qty' => $id_temp->qty + 1 )
                );
        }
		else
		{
			//$data_r = array('id_client' => $data['user_info']->id_users, 'id_monture' => $monture_id, 'qty' => 1, 'date' => date('Y-m-d H:i:s'), 'status' => 0);
            //$this->db->insert('commande_montures_temp', $data_r);
            $this->db->query("INSERT INTO `commande_montures_temp` (`id`, `id_client`, `id_monture`, `qty`, `date`, `status`, `id_pack`, `avec_verres`, `ref_client`) VALUES (NULL, '".$data['user_info']->id_users."', '".$monture_id ."', '". $qty."', '". date('Y-m-d H:i:s')."', '0', '0', '0', '');");

		}
	}

	public function add_verre_to_temp_montures_order() {
		$data['client_ref'] = $this->input->post('ref_client');
		$user_id = $this->data['user_info']->id_users;

		$this->db->where('id_client', $user_id);
            $this->db->update('commande_montures_temp', array(
                    'avec_verres' => 1,
					'ref_client' => $data['client_ref']));

		/*$panierA_cookie= array(
		   'name'   => 'panierA',
		   'value'  => '1',
		   'expire' => '3000',
		   'secure' => TRUE
		);

		$this->input->set_cookie($panierA_cookie);*/
		set_cookie('panierA','1','1800');
		set_cookie('refPanierA',$data['client_ref'],'1800');

	}

	public function add_pack_to_order() {
		//$data['user_info'] = $this->data['user_info'];
		$id_user = $this->data['user_info']->id_users;
		$data['client_ref'] = $this->input->post('ref_client');

		$pack_id = str_replace("add_pack_","",$this->input->post('id'));

		//var_dump($data);
		//echo "Pack id:".$pack_id;

		//$monture_id = (int) $this->input->post('id');
		$this->db->from('commande_montures_temp');
        $this->db->select('*');
		$this->db->where('id_client', $id_user);
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
			$data = array('id_client' => $id_user, 'id_pack' => $pack_id, 'qty' => 1, 'date' => date('Y-m-d H:i:s'), 'status' => 0);
            $this->db->insert('commande_montures_temp', $data);

          //  echo "INSERT INTO commande_montures_temp ('id_client', 'id_pack', 'qty','date', 'status')  VALUES (".$id_user.",".$pack_id.",1,'".date('Y-m-d H:i:s')."',0)";
		}
	}

	public function set_montures_order() {

		$id_user = $this->data['user_info']->id_users;

        if($this->input->is_ajax_request()){

            $data = $this->input->post();
			$data['client_ref'] = "";// $this->input->post('ref_client');

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
                $data['tarif_packaging'] = $this->m_commande->getTarifPackaging($userdata->id_users, $userdata->tarif_packaging);
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

			if($this->data['user_info']->commande_suspendue == 0)
			{


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
        else {
            $this->redirect();
        }


    }


}
