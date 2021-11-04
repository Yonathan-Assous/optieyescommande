<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_users extends CI_Model {

    var $table = 'users';

    var $fields = array(
            'id_users'                   => 'id_users',
            'valid_mandat'               => 'valid_mandat',
            'numero_siret'               => 'numero_siret',
            'nom_societe'                => 'nom_societe',
            'nom_magasin'                => 'nom_magasin',
            'adresse'                    => 'adresse',
            'cp'                         => 'cp',
            'ville'                      => 'ville',
            'tel_fixe'                   => 'tel_fixe',
            'tel_fax'                    => 'tel_fax',
            'tva_intracom'               => 'tva_intracom',
            'num_finess'                 => 'num_finess',
            'email'                      => 'email',
            'pass'                       => 'pass',
            'document_rib'               => 'document_rib',
            'valid_document_rib'         => 'valid_document_rib',
            'taux_erreur'                => 'taux_erreur',
            'jour_prelevement'           => 'jour_prelevement',
            'active'                     => 'active',
            'nouveau'                    => 'nouveau',
            'users_last_connexion'       => 'users_last_connexion',
            'date_inscription' 			 => 'date_inscription',
            'id_grille_tarifaire'        => 'id_grille_tarifaire',
            'commande_suspendue'	     => 'commande_suspendue',
            'restriction_compte'         => 'restriction_compte',
            'grille_telechargeable' 	 => 'grille_telechargeable',
            'tarif_livraison'            => 'tarif_livraison',
            'tarif_packaging'            => 'tarif_packaging',
            'tarif_supplement'           => 'tarif_supplement',
            'percent_tva'                => 'percent_tva',
            'nom_responsable'            => 'nom_responsable',
            'deleted'                    => 'deleted',
            'show_commentaire'           => 'show_commentaire',
            'login_notification'         => 'login_notification',
            'main_contact_name' => 'main_contact_name',
            'main_contact_number' => 'main_contact_number',
            'referral' => 'referral',
            'client_history' => 'client_history',
            'commercial_objectives' => 'commercial_objectives',
            'hotline_info' => 'hotline_info',
    );

    public function __construct() {
        parent::__construct();
    }

	public function check($data){
        $mail = trim($data['email']);
        $sql = "SELECT * FROM ".$this->table." WHERE email='".$data['email']."' AND pass='".md5($mail.'&&'.$data['pass'])."' AND active = 1 AND deleted = 0";
        $query = $this->db->query($sql);

        if ($query->num_rows() > 0)
            return $query->result();

       return false;
	}
  
  public function getMaxUser(){
     $query = $this->db->query("SELECT MAX(id_users) as maxUser FROM ".$this->table);

        if ($query->num_rows() > 0)
            return $query->result();

       return false;
  }

    public function addUser($data){
        $sql = "SELECT * FROM ".$this->table." WHERE email=".$this->db->escape
            ($data['email']);
        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            $error = $query->result()[0];
            $error->error = "DUPLICATE_EMAIL";
            return $error;
        }
        $sql = "SELECT id_users ,numero_siret FROM ".$this->table." WHERE numero_siret=".$this->db->escape($data['numero_siret']);

        $query = $this->db->query($sql);

		if ($query->num_rows() > 0) {
            $error = $query->result()[0];
            $error->error = "DUPLICATE_SIRET";
            return $error;
        }
        else{
			$this->db->insert($this->table, $data);
        }
    }

    public function updateUser($data){
        $data = array_intersect_key($data, $this->fields);
//		print_r($data);
        if(isset($data['id_users']))
            $this->db->where('id_users', $data['id_users']);

        $this->db->update($this->table, $data);

        if($this->db->_error_number()!=0)
            return false;

        return true;
    }

    public function getLastDaySessions() {
        $day = mktime(0,0,0, date('m', strtotime('yesterday')), date('d', strtotime('yesterday')), date('Y', strtotime('yesterday')));
        return $this->db->query('SELECT * FROM user_sessions WHERE day = '.$day)->result();
    }


    public function updateLastLogin($user_id) {

        $today = mktime(0,0,0, date('m'), date('d'), date('Y'));
        $time = time();

        $this->db->query('INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('.$this->db->escape($user_id).', '.$today.', '.$time.', 1) ON DUPLICATE KEY UPDATE login_time = '.$time.', login_count = login_count +1 ');

    }

    public function updateNewUser($data){
        $this->db->where('nouveau', 1);
        $this->db->where('document_rib IS NOT NULL', NULL,false);
        $this->updateUser($data);
    }
	
	public function updatePassUser($data){
		$this->db->set('pass', $data['new_pass']);
		$this->db->where('pass', $data['old_pass']);
		
		$this->updateUser($data);
	}

    public function getUserById($id_users){

        $query = $this->db->query("SELECT * FROM ".$this->table." WHERE id_users=".$id_users);
        if ($query && $query->num_rows() > 0)
            return $query->result();

        return false;
    }

    public function getUserValidPrelevement(){
        $query = $this->db->query("SELECT id_users,nom_societe,email,valid_document_rib,document_rib 
								   FROM ".$this->table." 
								   WHERE (document_rib IS NOT NULL AND valid_document_rib = 0) OR valid_document_rib = 2
								   ORDER BY id_users DESC");

        if ($query && $query->num_rows() > 0)
            return $query->result();

        return false;
    }
	
	public function getAllUser($id_users = false, $rib = false, $deleted = 0){
  
     $sql_add = "id_users <> 1";
     $sql_rib = "";
     
     if($id_users !== false)
        $sql_add = "id_users=".$id_users;

    if($rib == 1) {
        $sql_rib = "AND valid_mandat = 0";
    }

    elseif($rib == 2) {
        $sql_rib = "AND valid_mandat = 1";
    }
     
		$query = $this->db->query("SELECT id_users,nom_societe,email,date_inscription,document_rib,valid_mandat,id_grille_tarifaire,commande_suspendue,pass,grille_telechargeable,nom_magasin,tarif_livraison,cp,ville,show_commentaire,Samuel,Daniel,Gregory,Glenn
                                   FROM ".$this->table." 
                                   WHERE  ".$sql_add."
                                   AND deleted = ".$deleted."
                                   ".$sql_rib."
                                   ORDER BY id_users DESC");

        if ($query && $query->num_rows() > 0)
            return $query->result();

        return false;
	}
	
	public function getUserMail(){
		$query = $this->db->query("SELECT id_users,email
								   FROM ".$this->table." WHERE id_users > 2 
								   AND active = 1
								   ORDER BY id_users");

        if ($query && $query->num_rows() > 0)
            return $query->result();

        return false;
	}

    public function getNewUser(){
        $query = $this->db->query("SELECT COUNT(id_users) as newUser FROM ".$this->table." WHERE document_rib IS NOT NULL AND valid_document_rib=0 AND nouveau = 1");

        if ($query && $query->num_rows() > 0)
            return $query->result();

        return false;
    }

    public function getUserByMail($email){
        $query = $this->db->query("SELECT id_users,numero_siret,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,tva_intracom,num_finess,email,pass,document_rib,valid_document_rib
                                   FROM ".$this->table."
                                   WHERE email='".$email."'");

        if ($query && $query->num_rows() > 0)
            return $query->result();

        return false;
    }

    public function getUserByNumeroSiret($numerosiret){
        $query = $this->db->query("SELECT id_users,numero_siret,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,tva_intracom,num_finess,email,pass,document_rib,valid_document_rib,users_last_connexion
                                   FROM ".$this->table."
                                   WHERE numero_siret='".$numerosiret."'");

        if ($query && $query->num_rows() > 0)
            return $query->result();

        return false;
    }
	
	public function getUserByNumeroFiness($numeroFiness){
        $query = $this->db->query("SELECT id_users,numero_siret,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,tva_intracom,num_finess,email,pass,document_rib,valid_document_rib,users_last_connexion
                                   FROM ".$this->table."
                                   WHERE num_finess='".$numeroFiness."'");

        if ($query && $query->num_rows() > 0)
            return $query->result();

        return false;
    }

    public function getUsersByMd5($md5){
        $query = $this->db->query("SELECT id_users,numero_siret,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,tva_intracom,num_finess,email,pass,document_rib,valid_document_rib,users_last_connexion
                                   FROM ".$this->table."
                                   WHERE pass='".$md5."'");

        if ($query && $query->num_rows() > 0)
            return $query->result();

        return false;
    }

    public function getGrilleTarifaire($id_users){
        $query = $this->db->query("SELECT id_grille_tarifaire
                                   FROM ".$this->table."
                                   WHERE id_users=".$id_users);

        if ($query && $query->num_rows() > 0){
            $result = $query->result();
            return $result[0]->id_grille_tarifaire;
        }

        return false;
    }

    public function acceptConditions($userId) {
        $sql = "UPDATE `users` SET accept_conditions = true WHERE `id_users` = $userId";
        $this->db->query($sql);
    }

    public function getTva($userId) {
        $user = $this->getUserById($userId)[0];
        return $user->percent_tva;
    }

    public function getTarifPackaging($userId) {
        $user = $this->getUserById($userId)[0];
        return $user->tarif_packaging;
    }

    public function getPriceByUserId($user_id) {
        $before = 25;
        $tab = array();
        $i = 0;
        $count = [];
        $sql = "SELECT *, ppc.prix as prix_perso  
												FROM verres_stock 
									   JOIN grille_tarifaire ON grille_tarifaire.id_verre = verres_stock.id_verre
                                       LEFT JOIN prix_par_client ppc ON (ppc.code = verres_stock.id_verre AND id_client="
            . $user_id . ")
									   WHERE grille_tarifaire.id_grille_tarifaire = 1";
        $query = $this->db->query($sql);
        $unifocaux = $query->result();

        $sqlTraitements = "SELECT * FROM `traitements` WHERE id<=15 AND id > 1 ORDER BY id";
        $queryTraitements = $this->db->query($sqlTraitements);
        $result =  $queryTraitements->result();
        $traitementList = [];
        $sorting = [
            'bifocaux' => 10000,
            'trifocaux' => 20000,
            'freestyle' => 30000,
            't-one' => 40000,
            'e-space' => 50000,
            'platinium' => 60000,
            'omega' => 70000,
            'elysium' => 80000,
            'eyefatigue' => 90000,
            'top-office' => 100000,
            'progressif mineral' => 110000,
            'panier A' => 120000,
            'mineral' => 130000
        ];
        foreach ($sorting as $key => $value) {
            $count[$key] = $value + 1;
        }
        foreach ($result as $item) {
            if (strpos($item->name, 'Miroir') !== false) {
                $item->name = 'Miroir';
            }
            $traitementList[$item->name] = $item->id;
        }

        $sqlTeintes = "SELECT * FROM `teinte_prix` WHERE id_teinte = 1 ORDER BY id, id_user";
        $queryTeintes = $this->db->query($sqlTeintes);
        $result =  $queryTeintes->result();
        $teinteList = [];
        foreach ($result as $item) {
            $teinteList[$item->id_lenses] = $item->price;
        }

        $totalVerreType = count($sorting);
        $tab[$i]['verre'] = "UNIFOCAUX STOCK";
        $tab[$i]['prix'] = "NULL";
        $tab[$i]['teinte'] = "";
        $tab[$i]['order'] = $i;
        foreach ($traitementList as $traitement_name => $traitement_id) {
            $tab[$i][$traitement_name] = '';
        }
        $i++;

        foreach ($sorting as $key => $value) {
            $tab[$i]['verre'] = strtoupper($key);
            $tab[$i]['prix'] = "NULL";
            $tab[$i]['teinte'] = "";
            $tab[$i]['order'] = $value;
            foreach ($traitementList as $traitement_name => $traitement_id) {
                $tab[$i][$traitement_name] = '';
            }
            $i++;
        }

        foreach ($unifocaux as $unifocal) {
            if (($i - $totalVerreType) % $before == 0 && $i % 10000 != 0) {
                $tab[$i]['verre'] = "UNIFOCAUX STOCK";
                $tab[$i]['prix'] = "hide";
                $tab[$i]['teinte'] = "";
                $tab[$i]['order'] = $i;
                foreach ($traitementList as $traitement_name => $traitement_id) {
                    $tab[$i][$traitement_name] = '';
                }
                $i++;
            }
            $tab[$i]['verre'] = $unifocal->libelle_verre;
            $tab[$i]['prix'] = $unifocal->prix_perso ? $unifocal->prix_perso : $unifocal->prix_verre;
            $tab[$i]['teinte'] = "";
            $tab[$i]['order'] = $i;
            foreach ($traitementList as $traitement_name => $traitement_id) {
                $tab[$i][$traitement_name] = '';
            }
            $i++;
        }

        $sql = "SELECT L.trad_fr, L.code, L.id as lens_id, L.prix, L.sorting, ppc.prix as prix_perso, verre_type 
                FROM lenses L 
                LEFT JOIN prix_par_client ppc ON (ppc.code = L.code AND id_client=130) WHERE display = 'X' ORDER BY verre_type";
        $query = $this->db->query($sql);
        $verres = $query->result();
//        print_r($verres);die;
        $sql = "SELECT traitements.*, traitement_prix.price, traitement_prix.id_lenses, traitement_prix.id_user, traitement_prix.id_traitement
                FROM `traitements` 
                INNER JOIN traitement_prix 
                WHERE traitement_prix.id_traitement = traitements.id 
                AND traitement_prix.is_active = 1
				AND (id_user = $user_id OR id_user IS NULL)
                ORDER BY id, id_user ASC";
//        print_r($sql);die;

        $query = $this->db->query($sql);
        $traitements =  $query->result();
        $traitementArray = [];
        foreach ($traitements as $traitement) {
            $traitementArray[$traitement->id_lenses][$traitement->id_traitement] = $traitement->price;
        }

        foreach ($verres as $verre) {
            if (strpos($verre->trad_fr, 'Long') !== false || strpos($verre->trad_fr, 'Court') === false && strpos($verre->trad_fr, 'Moyen') === false) {
                //print_r($verre);
                //print_r($verre->verre_type);
                //$j = isset($sorting[$verre->verre_type]) ? $i + $sorting[$verre->verre_type] : $i;
                //print_r($j);

                //$tab[$i]['lensId'] = $verre->lens_id;
//                $tab[$i]['order'] = $j;
//                print_r($verre);die;
//                print_r($verre->verre_type);
//                print_r($count);die;
                if (isset($verre->verre_type)) {
                    if (isset($sorting[$verre->verre_type])) {
                        if (($count[$verre->verre_type] % 10000) % $before == 0) {
                            $tab[$i]['verre'] = strtoupper($verre->verre_type);
                            $tab[$i]['prix'] = 'hide';
                            $tab[$i]['teinte'] = "";
                            $tab[$i]['order'] = $count[$verre->verre_type];
                            foreach ($traitementList as $traitement_name => $traitement_id) {
                                $tab[$i][$traitement_name] = '';
                            }
                            $i++;
                            $count[$verre->verre_type]++;
                        }
                        $tab[$i]['order'] = $count[$verre->verre_type];
                        $count[$verre->verre_type]++;
                    }
                    else {
                        continue;
                    }
                }
                else {
                    if (($i - $totalVerreType) % $before == 0) {
                        $tab[$i]['verre'] = "UNIFOCAUX STOCK";
                        $tab[$i]['order'] = $i;
                        $tab[$i]['prix'] = 'hide';
                        $tab[$i]['teinte'] = "";
                        $tab[$i]['order'] = $i;
                        foreach ($traitementList as $traitement_name => $traitement_id) {
                            $tab[$i][$traitement_name] = '';
                        }
                        $i++;
                    }
                    $tab[$i]['order'] = $i;
                }

                if (strpos($verre->trad_fr, 'Long') !== false) {
                    $tab[$i]['verre'] = str_replace(" Long", "", $verre->trad_fr);
                }
                else {
                    $tab[$i]['verre'] = $verre->trad_fr;
                }
                $prix = $verre->prix_perso ? $verre->prix_perso : $verre->prix;
                $tab[$i]['prix'] = number_format($prix, 2, '.', ',');
                $tab[$i]['teinte'] = isset($teinteList[$verre->lens_id]) ? $teinteList[$verre->lens_id] : "";

                foreach ($traitementList as $traitement_name => $traitement_id) {
                    if (isset($traitementArray[$verre->lens_id][$traitement_id])) {
                        $prix = $tab[$i]['prix'] + $traitementArray[$verre->lens_id][$traitement_id];
                        $tab[$i][$traitement_name] = number_format($prix, 2, '.', ',');
                    }
                    else {
                        $tab[$i][$traitement_name] = '';
                    }
                }
                $i++;
            }
        }
//        print_r($tab);die;
        return $tab;
    }
}