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
            'tarif_supplement_fab'       => 'tarif_supplement_fab',
            'percent_tva'                => 'percent_tva',
            'is_teledetourable'          => 'is_teledetourable',
            'can_save_oma'               => 'can_save_oma',
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

	public function checkMail($data){
        $sql = "SELECT * FROM ".$this->table." WHERE email='".$data['email']."' AND valid_mandat = 1 AND active = 1 AND deleted = 0";
        $query = $this->db->query($sql);

        if ($query->num_rows() > 0)
            return $query->result();

       return false;
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
        $update = false;
        if ($query->num_rows() > 0) {
            $result = $query->result()[0];
            if ($result->valid_mandat) {
                $result->error = "DUPLICATE_EMAIL";
                return $result;
            }
            else {
                $update = true;
            }
        }

        $sql = "SELECT id_users ,numero_siret FROM ".$this->table." WHERE numero_siret=".$this->db->escape($data['numero_siret']) . "AND email <> " . $this->db->escape($data['email']) ;

        $query = $this->db->query($sql);

		if ($query->num_rows() > 0) {
            $error = $query->result()[0];
            $error->error = "DUPLICATE_SIRET";
            return $error;
        }
        else{
            if (!$update) {
                $this->db->insert($this->table, $data);
                return $this->db->insert_id();
            }
            else {
                $this->db->where('email', $data['email']);
                $this->db->update($this->table, $data);
                return ($result->id_users);
            }
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

    public function getPricesByUserId($user_id) {
        $before = 27;
        $tab = array();
        $i = 0;
        $count = [];
        $sql = "SELECT *, ppc.prix as prix_perso  
												FROM verres_stock 
									   JOIN grille_tarifaire ON grille_tarifaire.id_verre = verres_stock.id_verre
                                       LEFT JOIN prix_par_client ppc ON (ppc.code = verres_stock.id_verre AND id_client="
            . $user_id . ")
									   WHERE grille_tarifaire.id_grille_tarifaire = 1 AND verres_stock.active = 1 ORDER BY ordre_verre";
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

        $verre_existant = [];
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
            if (strpos($unifocal->libelle_verre, 'Organique 1,5 Miroir') !== false) {
                if (!in_array('Organique 1,5 Miroir', $verre_existant)) {
                    $tab[$i]['verre'] = 'Organique 1,5 Miroir';
                    array_push($verre_existant, 'Organique 1,5 Miroir');
                }
                else {
                    continue;
                }
            }
            else if (strpos($unifocal->libelle_verre, 'SugarGlasses 1,5') !== false) {
                if (!in_array('SugarGlasses 1,5', $verre_existant)) {
                    $tab[$i]['verre'] = 'SugarGlasses 1,5';
                    array_push($verre_existant, 'SugarGlasses 1,5');
                }
                else {
                    continue;
                }
            }
            else if (strpos($unifocal->libelle_verre, 'Organique 1,5') !== false && strpos($unifocal->libelle_verre, 'AB Dégradé Miroir Doré Galbe 2') !== false) {
                if (!in_array('Organique 1,5 AB Dégradé Miroir Doré Galbe 2', $verre_existant)) {
                    $tab[$i]['verre'] = 'Organique 1,5 AB Dégradé Miroir Doré Galbe 2';
                    array_push($verre_existant, 'Organique 1,5 AB Dégradé Miroir Doré Galbe 2');
                }
                else {
                    continue;
                }
            }
            else if (strpos($unifocal->libelle_verre, 'Organique 1,5') !== false && strpos($unifocal->libelle_verre, 'C Dégradé Plan') !== false) {
                if (!in_array('Organique 1,5 C Dégradé Plan', $verre_existant)) {
                    $tab[$i]['verre'] = 'Organique 1,5 C Dégradé Plan';
                    array_push($verre_existant, 'Organique 1,5 C Dégradé Plan');
                }
                else {
                    continue;
                }
            }
            else if (strpos($unifocal->libelle_verre, 'Organique 1,5') !== false && strpos($unifocal->libelle_verre, 'C Polarisé Durci Galbe 6') !== false) {
                if (!in_array('Organique 1,5 C Polarisé Durci Galbe 6', $verre_existant)) {
                    $tab[$i]['verre'] = 'Organique 1,5 C Polarisé Durci Galbe 6';
                    array_push($verre_existant, 'Organique 1,5 C Polarisé Durci Galbe 6');
                }
                else {
                    continue;
                }
            }
            else if (strpos($unifocal->libelle_verre, 'Organique 1,5') !== false && strpos($unifocal->libelle_verre, 'C Polarisé Durci Galbe 8') !== false) {
                if (!in_array('Organique 1,5 C Polarisé Durci Galbe 8', $verre_existant)) {
                    $tab[$i]['verre'] = 'Organique 1,5 C Polarisé Durci Galbe 8';
                    array_push($verre_existant, 'Organique 1,5 C Polarisé Durci Galbe 8');
                }
                else {
                    continue;
                }
            }
            else if (strpos($unifocal->libelle_verre, 'Organique 1,5 Bicolore') !== false) {
                if (!in_array('Organique 1,5 Bicolore', $verre_existant)) {
                    $tab[$i]['verre'] = 'Organique 1,5 Bicolore';
                    array_push($verre_existant, 'Organique 1,5 Bicolore');
                }
                else {
                    continue;
                }
            }
            else if (strpos($unifocal->libelle_verre, 'Organique 1,5 HMC') !== false) {
                if (!in_array('Organique 1,5 HMC', $verre_existant)) {
                    $tab[$i]['verre'] = 'Organique 1,5 HMC';
                    array_push($verre_existant, 'Organique 1,5 HMC');
                }
                else {
                    continue;
                }
            }
            else if (strpos($unifocal->libelle_verre, 'Organique 1,5') !== false && strpos($unifocal->libelle_verre, 'C') !== false) {
                if (!in_array('Organique 1,5 C', $verre_existant)) {
                    $tab[$i]['verre'] = 'Organique 1,5 C';
                    array_push($verre_existant, 'Organique 1,5 C');
                }
                else {
                    continue;
                }
            }
            else if (strpos($unifocal->libelle_verre, 'Organique 1,6 HMC') !== false && strpos($unifocal->libelle_verre, 'Non Perçable') !== false) {
                if (!in_array('Organique 1,6 HMC Non Perçable', $verre_existant)) {
                    $tab[$i]['verre'] = 'Organique 1,6 HMC Non Perçable';
                    array_push($verre_existant, 'Organique 1,6 HMC Non Perçable');
                }
                else {
                    continue;
                }
            }
            else {
                $tab[$i]['verre'] = $unifocal->libelle_verre;
            }
            $tab[$i]['prix'] = $unifocal->prix_perso ? $unifocal->prix_perso : $unifocal->prix_verre;
            $tab[$i]['teinte'] = "";
            $tab[$i]['order'] = $i;
            foreach ($traitementList as $traitement_name => $traitement_id) {
                $tab[$i][$traitement_name] = '';
            }
            $i++;
        }

        $sql = "SELECT L.trad_fr, L.code, L.id as lens_id, L.prix, L.sorting, ppc.prix as prix_perso, generation, verre_type 
                FROM lenses L 
                LEFT JOIN prix_par_client ppc ON (ppc.code = L.code AND id_client=$user_id 
                AND (ppc.generation = 'E-Space' AND verre_type = 'e-space' OR ppc.generation = 'T-One' AND verre_type = 't-one' OR verre_type IS NULL AND ppc.generation = '')) 
                WHERE display = 'X' 
                ORDER BY verre_type, L.sorting";

        $query = $this->db->query($sql);
        $verres = $query->result();
        $sql = "SELECT traitements.*, traitement_prix.price, traitement_prix.id_lenses, traitement_prix.id_user, traitement_prix.id_traitement
                FROM `traitements` 
                INNER JOIN traitement_prix 
                WHERE traitement_prix.id_traitement = traitements.id 
                AND traitement_prix.is_active = 1
				AND (id_user = $user_id OR id_user IS NULL)
                ORDER BY id, id_user ASC";

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
                    $is_lens = true;
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
                    }
                    else {
                        continue;
                    }
                }
                else {
                    $is_lens = false;
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

                if (strpos($verre->trad_fr, 'Organique 1,6') !== false && strpos($verre->trad_fr, 'C HMC Face Interne') !== false) {
                    if (!in_array('Organique 1,6 C HMC Face Interne', $verre_existant)) {
                        $tab[$i]['verre'] = 'Organique 1,6 C HMC Face Interne';
                        array_push($verre_existant, 'Organique 1,6 C HMC Face Interne');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Organique 1,56 Superchromique') !== false) {
                    if (!in_array('Organique 1,56 Superchromique HMC', $verre_existant)) {
                        $tab[$i]['verre'] = 'Organique 1,56 Superchromique HMC';
                        array_push($verre_existant, 'Organique 1,56 Superchromique HMC');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Organique 1,5 Transition') !== false && strpos($unifocal->libelle_verre, 'G15') === false) {
                    if (!in_array('Organique 1,5 Transition Satin', $verre_existant)) {
                        $tab[$i]['verre'] = 'Organique 1,5 Transition Satin';
                        array_push($verre_existant, 'Organique 1,5 Transition Satin');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'C Miroir') !== false) {
                    if (!in_array('Organique 1,5 C Miroir Face Interne', $verre_existant)) {
                        $tab[$i]['verre'] = 'Organique 1,5 C Miroir Face Interne';
                        array_push($verre_existant, 'Organique 1,5 C Miroir Face Interne');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Organique 1,67 Asphérique Transition') !== false) {
                    if (!in_array('Organique 1,67 Asphérique Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'Organique 1,67 Asphérique Transition';
                        array_push($verre_existant, 'Organique 1,67 Asphérique Transition');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Organique 1,5') !== false && strpos($verre->trad_fr, 'C Polarisé HMC Face Interne Galbe 6') !== false) {
                    if (!in_array('Organique 1,5 C Polarisé HMC Face Interne Galbe 6', $verre_existant)) {
                        $tab[$i]['verre'] = 'Organique 1,5 C Polarisé HMC Face Interne Galbe 6';
                        array_push($verre_existant, 'Organique 1,5 C Polarisé HMC Face Interne Galbe 6');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Bifocal 1,5 Segment Plat 28 Polarisé') !== false) {
                    if (!in_array('Bifocal 1,5 Segment Plat 28 Polarisé', $verre_existant)) {
                        $tab[$i]['verre'] = 'Bifocal 1,5 Segment Plat 28 Polarisé';
                        array_push($verre_existant, 'Bifocal 1,5 Segment Plat 28 Polarisé');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Bifocal 1,59 Polarisé') !== false && strpos($verre->trad_fr, 'C Segment Plat') !== false) {
                    if (!in_array('Bifocal 1,59 Polarisé C Segment Plat', $verre_existant)) {
                        $tab[$i]['verre'] = 'Bifocal 1,59 Polarisé C Segment Plat';
                        array_push($verre_existant, 'Bifocal 1,59 Polarisé C Segment Plat');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Bifocal 1,53 Transition') !== false && strpos($verre->trad_fr, 'Segment Plat') !== false) {
                    if (!in_array('Bifocal 1,53 Transition Segment Plat', $verre_existant)) {
                        $tab[$i]['verre'] = 'Bifocal 1,53 Transition Segment Plat';
                        array_push($verre_existant, 'Bifocal 1,53 Transition Segment Plat');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Bifocal 1,5 Transition') !== false && strpos($verre->trad_fr, 'Segment Courbe') !== false) {
                    if (!in_array('Bifocal 1,5 Transition Segment Courbe', $verre_existant)) {
                        $tab[$i]['verre'] = 'Bifocal 1,5 Transition Segment Courbe';
                        array_push($verre_existant, 'Bifocal 1,5 Transition Segment Courbe');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Bifocal 1,5 Transition') !== false && strpos($verre->trad_fr, 'Segment Plat') !== false) {
                    if (!in_array('Bifocal 1,5 Transition Segment Plat', $verre_existant)) {
                        $tab[$i]['verre'] = 'Bifocal 1,5 Transition Segment Plat';
                        array_push($verre_existant, 'Bifocal 1,5 Transition Segment Plat');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Bifocal Mineral 1,5 Segment Courbe') !== false) {
                    if (!in_array('Bifocal Mineral 1,5 Segment Courbe', $verre_existant)) {
                        $tab[$i]['verre'] = 'Bifocal Mineral 1,5 Segment Courbe';
                        array_push($verre_existant, 'Bifocal Mineral 1,5 Segment Courbe');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Bifocal Mineral 1,5 Segment Rond') !== false) {
                    if (!in_array('Bifocal Mineral 1,5 Segment Rond', $verre_existant)) {
                        $tab[$i]['verre'] = 'Bifocal Mineral 1,5 Segment Rond';
                        array_push($verre_existant, 'Bifocal Mineral 1,5 Segment Rond');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Bifocal 1,5 Xtractive') !== false && strpos($verre->trad_fr, 'Segment Plat') !== false) {
                    if (!in_array('Bifocal 1,5 Xtractive Segment Plat', $verre_existant)) {
                        $tab[$i]['verre'] = 'Bifocal 1,5 Xtractive Segment Plat';
                        array_push($verre_existant, 'Bifocal 1,5 Xtractive Segment Plat');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Bifocal 1,5 Segment Plat') !== false) {
                    if (!in_array('Bifocal 1,5 Segment Plat', $verre_existant)) {
                        $tab[$i]['verre'] = 'Bifocal 1,5 Segment Plat';
                        array_push($verre_existant, 'Bifocal 1,5 Segment Plat');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Bifocal 1,5 Segment Rond') !== false) {
                    if (!in_array('Bifocal 1,5 Segment Rond', $verre_existant)) {
                        $tab[$i]['verre'] = 'Bifocal 1,5 Segment Rond';
                        array_push($verre_existant, 'Bifocal 1,5 Segment Rond');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Trifocal 1,5 Transition') !== false) {
                    if (!in_array('Trifocal 1,5 Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'Trifocal 1,5 Transition';
                        array_push($verre_existant, 'Trifocal 1,5 Transition');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Freestyle SV 1,5 Transition') !== false && strpos($verre->trad_fr, 'Vantage') === false) {
                    if (!in_array('Freestyle SV 1,5 Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'Freestyle SV 1,5 Transition';
                        array_push($verre_existant, 'Freestyle SV 1,5 Transition');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Freestyle SV 1,5 Xtractive') !== false) {
                    if (!in_array('Freestyle SV 1,5 Xtractive', $verre_existant)) {
                        $tab[$i]['verre'] = 'Freestyle SV 1,5 Xtractive';
                        array_push($verre_existant, 'Freestyle SV 1,5 Xtractive');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Freestyle SV 1,5 Polarisé') !== false) {
                    if (!in_array('Freestyle SV 1,5 Polarisé', $verre_existant)) {
                        $tab[$i]['verre'] = 'Freestyle SV 1,5 Polarisé';
                        array_push($verre_existant, 'Freestyle SV 1,5 Polarisé');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Freestyle SV 1,53 Transition') !== false) {
                    if (!in_array('Freestyle SV 1,53 Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'Freestyle SV 1,53 Transition';
                        array_push($verre_existant, 'Freestyle SV 1,53 Transition');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Freestyle SV 1,53 Xtractive') !== false) {
                    if (!in_array('Freestyle SV 1,53 Xtractive', $verre_existant)) {
                        $tab[$i]['verre'] = 'Freestyle SV 1,53 Xtractive';
                        array_push($verre_existant, 'Freestyle SV 1,53 Xtractive');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Freestyle SV 1,53') !== false && strpos($verre->trad_fr, 'C') !== false) {
                    if (!in_array('Freestyle SV 1,53 C', $verre_existant)) {
                        $tab[$i]['verre'] = 'Freestyle SV 1,53 C';
                        array_push($verre_existant, 'Freestyle SV 1,53 C');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Freestyle SV 1,59 Transition') !== false) {
                    if (!in_array('Freestyle SV 1,59 Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'Freestyle SV 1,59 Transition';
                        array_push($verre_existant, 'Freestyle SV 1,59 Transition');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Freestyle SV 1,59 Asphérique Transition') !== false) {
                    if (!in_array('Freestyle SV 1,59 Asphérique Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'Freestyle SV 1,59 Asphérique Transition';
                        array_push($verre_existant, 'Freestyle SV 1,59 Asphérique Transition');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Freestyle SV 1,59 Xtractive') !== false) {
                    if (!in_array('Freestyle SV 1,59 Xtractive', $verre_existant)) {
                        $tab[$i]['verre'] = 'Freestyle SV 1,59 Xtractive';
                        array_push($verre_existant, 'Freestyle SV 1,59 Xtractive');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Freestyle SV 1,59 Polarisé') !== false && strpos($verre->trad_fr, 'C') !== false) {
                    if (!in_array('Freestyle SV 1,59 Polarisé C', $verre_existant)) {
                        $tab[$i]['verre'] = 'Freestyle SV 1,59 Polarisé C';
                        array_push($verre_existant, 'Freestyle SV 1,59 Polarisé C');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Freestyle SV 1,6 Transition') !== false) {
                    if (!in_array('Freestyle SV 1,6 Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'Freestyle SV 1,6 Transition';
                        array_push($verre_existant, 'Freestyle SV 1,6 Transition');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Freestyle SV 1,6 Asphérique Transition') !== false) {
                    if (!in_array('Freestyle SV 1,6 Asphérique Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'Freestyle SV 1,6 Asphérique Transition';
                        array_push($verre_existant, 'Freestyle SV 1,6 Asphérique Transition');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Freestyle SV 1,6 Xtractive') !== false) {
                    if (!in_array('Freestyle SV 1,6 Xtractive', $verre_existant)) {
                        $tab[$i]['verre'] = 'Freestyle SV 1,6 Xtractive';
                        array_push($verre_existant, 'Freestyle SV 1,6 Xtractive');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Freestyle SV 1,6 Polarisé') !== false && strpos($verre->trad_fr, 'C') !== false) {
                    if (!in_array('Freestyle SV 1,6 Polarisé C', $verre_existant)) {
                        $tab[$i]['verre'] = 'Freestyle SV 1,6 Polarisé C';
                        array_push($verre_existant, 'Freestyle SV 1,6 Polarisé C');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Freestyle SV 1,67 Transition') !== false) {
                    if (!in_array('Freestyle SV 1,67 Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'Freestyle SV 1,67 Transition';
                        array_push($verre_existant, 'Freestyle SV 1,67 Transition');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Freestyle SV 1,67 Asphérique Transition') !== false) {
                    if (!in_array('Freestyle SV 1,67 Asphérique Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'Freestyle SV 1,67 Asphérique Transition';
                        array_push($verre_existant, 'Freestyle SV 1,67 Asphérique Transition');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Freestyle SV 1,67 Xtractive') !== false) {
                    if (!in_array('Freestyle SV 1,67 Xtractive', $verre_existant)) {
                        $tab[$i]['verre'] = 'Freestyle SV 1,67 Xtractive';
                        array_push($verre_existant, 'Freestyle SV 1,67 Xtractive');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Freestyle SV 1,67 Polarisé') !== false && strpos($verre->trad_fr, 'C') !== false) {
                    if (!in_array('Freestyle SV 1,67 Polarisé C', $verre_existant)) {
                        $tab[$i]['verre'] = 'Freestyle SV 1,67 Polarisé C';
                        array_push($verre_existant, 'Freestyle SV 1,67 Polarisé C');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Freestyle SV 1,67 Asphérique Polarisé') !== false && strpos($verre->trad_fr, 'C') !== false) {
                    if (!in_array('Freestyle SV 1,67 Asphérique Polarisé C', $verre_existant)) {
                        $tab[$i]['verre'] = 'Freestyle SV 1,67 Asphérique Polarisé C';
                        array_push($verre_existant, 'Freestyle SV 1,67 Asphérique Polarisé C');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Freestyle SV 1,74 Transition') !== false) {
                    if (!in_array('Freestyle SV 1,74 Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'Freestyle SV 1,74 Transition';
                        array_push($verre_existant, 'Freestyle SV 1,74 Transition');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'T-One 18 1,74 Transition') !== false) {
                    if (!in_array('T-One 18 1,74 Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'T-One 18 1,74 Transition';
                        array_push($verre_existant, 'T-One 18 1,74 Transition');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'T-One 1,5 Transition') !== false && (strpos($verre->trad_fr, 'Gris') !== false || strpos($verre->trad_fr, 'Brun') !== false)) {
                    if (!in_array('T-One 1,5 Transition (Brun/Gris)', $verre_existant)) {
                        $tab[$i]['verre'] = 'T-One 1,5 Transition (Brun/Gris)';
                        array_push($verre_existant, 'T-One 1,5 Transition (Brun/Gris)');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'T-One 1,5 Transition') !== false && (strpos($verre->trad_fr, 'Gris') === false && strpos($verre->trad_fr, 'Brun') === false)) {
                    if (!in_array('T-One 1,5 Transition (Ni Brun ni Gris)', $verre_existant)) {
                        $tab[$i]['verre'] = 'T-One 1,5 Transition (Ni Brun ni Gris)';
                        array_push($verre_existant, 'T-One 1,5 Transition (Ni Brun ni Gris)');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'T-One 1,5 Xtractive') !== false) {
                    if (!in_array('T-One 1,5 Xtractive', $verre_existant)) {
                        $tab[$i]['verre'] = 'T-One 1,5 Xtractive';
                        array_push($verre_existant, 'T-One 1,5 Xtractive');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'T-One 1,5 Polarisé') !== false) {
                    if (!in_array('T-One 1,5 Polarisé C', $verre_existant)) {
                        $tab[$i]['verre'] = 'T-One 1,5 Polarisé C';
                        array_push($verre_existant, 'T-One 1,5 Polarisé C');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'T-One 1,53 Transition') !== false) {
                    if (!in_array('T-One 1,53 Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'T-One 1,53 Transition';
                        array_push($verre_existant, 'T-One 1,53 Transition');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'T-One 1,53 Xtractive') !== false) {
                    if (!in_array('T-One 1,53 Xtractive', $verre_existant)) {
                        $tab[$i]['verre'] = 'T-One 1,53 Xtractive';
                        array_push($verre_existant, 'T-One 1,53 Xtractive');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'T-One 1,53 Polarisé') !== false) {
                    if (!in_array('T-One 1,53 Polarisé C', $verre_existant)) {
                        $tab[$i]['verre'] = 'T-One 1,53 Polarisé C';
                        array_push($verre_existant, 'T-One 1,53 Polarisé C');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'T-One 1,59 Transition') !== false) {
                    if (!in_array('T-One 1,59 Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'T-One 1,59 Transition';
                        array_push($verre_existant, 'T-One 1,59 Transition');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'T-One 1,59 Xtractive') !== false) {
                    if (!in_array('T-One 1,59 Xtractive', $verre_existant)) {
                        $tab[$i]['verre'] = 'T-One 1,59 Xtractive';
                        array_push($verre_existant, 'T-One 1,59 Xtractive');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'T-One 1,59 Polarisé') !== false) {
                    if (!in_array('T-One 1,59 Polarisé C', $verre_existant)) {
                        $tab[$i]['verre'] = 'T-One 1,59 Polarisé C';
                        array_push($verre_existant, 'T-One 1,59 Polarisé C');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'T-One 1,6 Transition') !== false) {
                    if (!in_array('T-One 1,6 Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'T-One 1,6 Transition';
                        array_push($verre_existant, 'T-One 1,6 Transition');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'T-One 1,6 Xtractive') !== false) {
                    if (!in_array('T-One 1,6 Xtractive', $verre_existant)) {
                        $tab[$i]['verre'] = 'T-One 1,6 Xtractive';
                        array_push($verre_existant, 'T-One 1,6 Xtractive');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'T-One 1,6 Polarisé') !== false) {
                    if (!in_array('T-One 1,6 Polarisé C', $verre_existant)) {
                        $tab[$i]['verre'] = 'T-One 1,6 Polarisé C';
                        array_push($verre_existant, 'T-One 1,6 Polarisé C');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'T-One 1,67 Transition') !== false) {
                    if (!in_array('T-One 1,67 Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'T-One 1,67 Transition';
                        array_push($verre_existant, 'T-One 1,67 Transition');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'T-One 1,67 Xtractive') !== false) {
                    if (!in_array('T-One 1,67 Xtractive', $verre_existant)) {
                        $tab[$i]['verre'] = 'T-One 1,67 Xtractive';
                        array_push($verre_existant, 'T-One 1,67 Xtractive');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'T-One 1,67 Polarisé') !== false) {
                    if (!in_array('T-One 1,67 Polarisé C', $verre_existant)) {
                        $tab[$i]['verre'] = 'T-One 1,67 Polarisé C';
                        array_push($verre_existant, 'T-One 1,67 Polarisé C');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'T-One 18 1,74 Transition') !== false) {
                    if (!in_array('T-One 18 1,74 Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'T-One 18 1,74 Transition';
                        array_push($verre_existant, 'T-One 18 1,74 Transition');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'T-One 18 1,74 Transition') !== false) {
                    if (!in_array('T-One 18 1,74 Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'T-One 18 1,74 Transition';
                        array_push($verre_existant, 'T-One 18 1,74 Transition');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'E-Space 1,5 Transition') !== false && (strpos($verre->trad_fr, 'Gris') !== false || strpos($verre->trad_fr, 'Brun') !== false)) {
                    if (!in_array('E-Space 1,5 Transition (Brun/Gris)', $verre_existant)) {
                        $tab[$i]['verre'] = 'E-Space 1,5 Transition (Brun/Gris)';
                        array_push($verre_existant, 'E-Space 1,5 Transition (Brun/Gris)');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'E-Space 1,5 Transition') !== false && (strpos($verre->trad_fr, 'Gris') === false && strpos($verre->trad_fr, 'Brun') === false)) {
                    if (!in_array('E-Space 1,5 Transition (Ni Brun ni Gris)', $verre_existant)) {
                        $tab[$i]['verre'] = 'E-Space 1,5 Transition (Ni Brun ni Gris)';
                        array_push($verre_existant, 'E-Space 1,5 Transition (Ni Brun ni Gris)');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'E-Space 1,5 Xtractive') !== false) {
                    if (!in_array('E-Space 1,5 Xtractive', $verre_existant)) {
                        $tab[$i]['verre'] = 'E-Space 1,5 Xtractive';
                        array_push($verre_existant, 'E-Space 1,5 Xtractive');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'E-Space 1,5 Polarisé') !== false) {
                    if (!in_array('E-Space 1,5 Polarisé C', $verre_existant)) {
                        $tab[$i]['verre'] = 'E-Space 1,5 Polarisé C';
                        array_push($verre_existant, 'E-Space 1,5 Polarisé C');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'E-Space 1,53 Transition') !== false) {
                    if (!in_array('E-Space 1,53 Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'E-Space 1,53 Transition';
                        array_push($verre_existant, 'E-Space 1,53 Transition');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'E-Space 1,53 Xtractive') !== false) {
                    if (!in_array('E-Space 1,53 Xtractive', $verre_existant)) {
                        $tab[$i]['verre'] = 'E-Space 1,53 Xtractive';
                        array_push($verre_existant, 'E-Space 1,53 Xtractive');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'E-Space 1,53 Polarisé') !== false) {
                    if (!in_array('E-Space 1,53 Polarisé C', $verre_existant)) {
                        $tab[$i]['verre'] = 'E-Space 1,53 Polarisé C';
                        array_push($verre_existant, 'E-Space 1,53 Polarisé C');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'E-Space 1,59 Transition') !== false) {
                    if (!in_array('E-Space 1,59 Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'E-Space 1,59 Transition';
                        array_push($verre_existant, 'E-Space 1,59 Transition');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'E-Space 1,59 Xtractive') !== false) {
                    if (!in_array('E-Space 1,59 Xtractive', $verre_existant)) {
                        $tab[$i]['verre'] = 'E-Space 1,59 Xtractive';
                        array_push($verre_existant, 'E-Space 1,59 Xtractive');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'E-Space 1,59 Polarisé') !== false) {
                    if (!in_array('E-Space 1,59 Polarisé C', $verre_existant)) {
                        $tab[$i]['verre'] = 'E-Space 1,59 Polarisé C';
                        array_push($verre_existant, 'E-Space 1,59 Polarisé C');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'E-Space 1,6 Transition') !== false) {
                    if (!in_array('E-Space 1,6 Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'E-Space 1,6 Transition';
                        array_push($verre_existant, 'E-Space 1,6 Transition');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'E-Space 1,6 Xtractive') !== false) {
                    if (!in_array('E-Space 1,6 Xtractive', $verre_existant)) {
                        $tab[$i]['verre'] = 'E-Space 1,6 Xtractive';
                        array_push($verre_existant, 'E-Space 1,6 Xtractive');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'E-Space 1,6 Polarisé') !== false) {
                    if (!in_array('E-Space 1,6 Polarisé C', $verre_existant)) {
                        $tab[$i]['verre'] = 'E-Space 1,6 Polarisé C';
                        array_push($verre_existant, 'E-Space 1,6 Polarisé C');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'E-Space 1,67 Transition') !== false) {
                    if (!in_array('E-Space 1,67 Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'E-Space 1,67 Transition';
                        array_push($verre_existant, 'E-Space 1,67 Transition');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'E-Space 1,67 Xtractive') !== false) {
                    if (!in_array('E-Space 1,67 Xtractive', $verre_existant)) {
                        $tab[$i]['verre'] = 'E-Space 1,67 Xtractive';
                        array_push($verre_existant, 'E-Space 1,67 Xtractive');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'E-Space 1,67 Polarisé') !== false) {
                    if (!in_array('E-Space 1,67 Polarisé C', $verre_existant)) {
                        $tab[$i]['verre'] = 'E-Space 1,67 Polarisé C';
                        array_push($verre_existant, 'E-Space 1,67 Polarisé C');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'E-Space 18 1,74 Transition') !== false) {
                    if (!in_array('E-Space 18 1,74 Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'E-Space 18 1,74 Transition';
                        array_push($verre_existant, 'E-Space 18 1,74 Transition');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Platinium 1,5 Transition') !== false && strpos($verre->trad_fr, 'Vantage') === false) {
                    if (!in_array('Platinium 1,5 Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'Platinium 1,5 Transition';
                        array_push($verre_existant, 'Platinium 1,5 Transition');
                    }
                    else {
                        continue;
                    }
                }
//                else if (strpos($verre->trad_fr, 'Platinium 1,5 Xtractive') !== false) {
//                    if (!in_array('Platinium 1,5 Xtractive', $verre_existant)) {
//                        $tab[$i]['verre'] = 'Platinium 1,5 Xtractive';
//                        array_push($verre_existant, 'Platinium 1,5 Xtractive');
//                    }
//                    else {
//                        continue;
//                    }
//                }
                else if (strpos($verre->trad_fr, 'Platinium 1,5 Polarisé') !== false) {
                    if (!in_array('Platinium 1,5 Polarisé', $verre_existant)) {
                        $tab[$i]['verre'] = 'Platinium 1,5 Polarisé';
                        array_push($verre_existant, 'Platinium 1,5 Polarisé');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Platinium 1,53 Transition') !== false) {
                    if (!in_array('Platinium 1,53 Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'Platinium 1,53 Transition';
                        array_push($verre_existant, 'Platinium 1,53 Transition');
                    }
                    else {
                        continue;
                    }
                }
//                else if (strpos($verre->trad_fr, 'Platinium 1,53 Xtractive') !== false) {
//                    if (!in_array('Platinium 1,53 Xtractive', $verre_existant)) {
//                        $tab[$i]['verre'] = 'Platinium 1,53 Xtractive';
//                        array_push($verre_existant, 'Platinium 1,53 Xtractive');
//                    }
//                    else {
//                        continue;
//                    }
//                }
                else if (strpos($verre->trad_fr, 'Platinium 1,53 Polarisé') !== false && strpos($verre->trad_fr, 'C') !== false) {
                    if (!in_array('Platinium 1,53 Polarisé C', $verre_existant)) {
                        $tab[$i]['verre'] = 'Platinium 1,53 Polarisé C';
                        array_push($verre_existant, 'Platinium 1,53 Polarisé C');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Platinium 1,53') !== false && strpos($verre->trad_fr, 'C') !== false) {
                    if (!in_array('Platinium 1,53 C', $verre_existant)) {
                        $tab[$i]['verre'] = 'Platinium 1,53 C';
                        array_push($verre_existant, 'Platinium 1,53 C');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Platinium 1,59 Transition') !== false) {
                    if (!in_array('Platinium 1,59 Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'Platinium 1,59 Transition';
                        array_push($verre_existant, 'Platinium 1,59 Transition');
                    }
                    else {
                        continue;
                    }
                }
//                else if (strpos($verre->trad_fr, 'Platinium 1,59 Xtractive') !== false) {
//                    if (!in_array('Platinium 1,59 Xtractive', $verre_existant)) {
//                        $tab[$i]['verre'] = 'Platinium 1,59 Xtractive';
//                        array_push($verre_existant, 'Platinium 1,59 Xtractive');
//                    }
//                    else {
//                        continue;
//                    }
//                }
                else if (strpos($verre->trad_fr, 'Platinium 1,59 Polarisé') !== false && strpos($verre->trad_fr, 'C') !== false) {
                    if (!in_array('Platinium 1,59 Polarisé C', $verre_existant)) {
                        $tab[$i]['verre'] = 'Platinium 1,59 Polarisé C';
                        array_push($verre_existant, 'Platinium 1,59 Polarisé C');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Platinium 1,6 Transition') !== false) {
                    if (!in_array('Platinium 1,6 Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'Platinium 1,6 Transition';
                        array_push($verre_existant, 'Platinium 1,6 Transition');
                    }
                    else {
                        continue;
                    }
                }
//                else if (strpos($verre->trad_fr, 'Platinium 1,6 Xtractive') !== false) {
//                    if (!in_array('Platinium 1,6 Xtractive', $verre_existant)) {
//                        $tab[$i]['verre'] = 'Platinium 1,6 Xtractive';
//                        array_push($verre_existant, 'Platinium 1,6 Xtractive');
//                    }
//                    else {
//                        continue;
//                    }
//                }
                else if (strpos($verre->trad_fr, 'Platinium 1,6 Polarisé') !== false && strpos($verre->trad_fr, 'C') !== false) {
                    if (!in_array('Platinium 1,6 Polarisé C', $verre_existant)) {
                        $tab[$i]['verre'] = 'Platinium 1,6 Polarisé C';
                        array_push($verre_existant, 'Platinium 1,6 Polarisé C');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Platinium 1,67 Transition') !== false) {
                    if (!in_array('Platinium 1,67 Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'Platinium 1,67 Transition';
                        array_push($verre_existant, 'Platinium 1,67 Transition');
                    }
                    else {
                        continue;
                    }
                }
//                else if (strpos($verre->trad_fr, 'Platinium 1,67 Xtractive') !== false) {
//                    if (!in_array('Platinium 1,67 Xtractive', $verre_existant)) {
//                        $tab[$i]['verre'] = 'Platinium 1,67 Xtractive';
//                        array_push($verre_existant, 'Platinium 1,67 Xtractive');
//                    }
//                    else {
//                        continue;
//                    }
//                }
                else if (strpos($verre->trad_fr, 'Platinium 1,67 Polarisé') !== false && strpos($verre->trad_fr, 'C') !== false) {
                    if (!in_array('Platinium 1,67 Polarisé C', $verre_existant)) {
                        $tab[$i]['verre'] = 'Platinium 1,67 Polarisé C';
                        array_push($verre_existant, 'Platinium 1,67 Polarisé C');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Platinium 1,74 Transition') !== false) {
                    if (!in_array('Platinium 1,74 Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'Platinium 1,74 Transition';
                        array_push($verre_existant, 'Platinium 1,74 Transition');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Omega 1,5 Transition') !== false && strpos($verre->trad_fr, 'Vantage') === false) {
                    if (!in_array('Omega 1,5 Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'Omega 1,5 Transition';
                        array_push($verre_existant, 'Omega 1,5 Transition');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Omega 1,5 Xtractive') !== false) {
                    if (!in_array('Omega 1,5 Xtractive', $verre_existant)) {
                        $tab[$i]['verre'] = 'Omega 1,5 Xtractive';
                        array_push($verre_existant, 'Omega 1,5 Xtractive');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Omega 1,5 Polarisé') !== false) {
                    if (!in_array('Omega 1,5 Polarisé', $verre_existant)) {
                        $tab[$i]['verre'] = 'Omega 1,5 Polarisé';
                        array_push($verre_existant, 'Omega 1,5 Polarisé');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Omega 1,53 Transition') !== false) {
                    if (!in_array('Omega 1,53 Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'Omega 1,53 Transition';
                        array_push($verre_existant, 'Omega 1,53 Transition');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Omega 1,53 Xtractive') !== false) {
                    if (!in_array('Omega 1,53 Xtractive', $verre_existant)) {
                        $tab[$i]['verre'] = 'Omega 1,53 Xtractive';
                        array_push($verre_existant, 'Omega 1,53 Xtractive');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Omega 1,53') !== false && strpos($verre->trad_fr, 'C') !== false) {
                    if (!in_array('Omega 1,53 C', $verre_existant)) {
                        $tab[$i]['verre'] = 'Omega 1,53 C';
                        array_push($verre_existant, 'Omega 1,53 C');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Omega 1,59 Transition') !== false) {
                    if (!in_array('Omega 1,59 Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'Omega 1,59 Transition';
                        array_push($verre_existant, 'Omega 1,59 Transition');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Platinium 1,59 Xtractive') !== false) {
                    if (!in_array('Platinium 1,59 Xtractive', $verre_existant)) {
                        $tab[$i]['verre'] = 'Platinium 1,59 Xtractive';
                        array_push($verre_existant, 'Platinium 1,59 Xtractive');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Omega 1,59 Polarisé') !== false && strpos($verre->trad_fr, 'C') !== false) {
                    if (!in_array('Omega 1,59 Polarisé C', $verre_existant)) {
                        $tab[$i]['verre'] = 'Omega 1,59 Polarisé C';
                        array_push($verre_existant, 'Omega 1,59 Polarisé C');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Omega 1,6 Transition') !== false) {
                    if (!in_array('Omega 1,6 Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'Omega 1,6 Transition';
                        array_push($verre_existant, 'Omega 1,6 Transition');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Omega 1,6 Xtractive') !== false) {
                    if (!in_array('Omega 1,6 Xtractive', $verre_existant)) {
                        $tab[$i]['verre'] = 'Omega 1,6 Xtractive';
                        array_push($verre_existant, 'Omega 1,6 Xtractive');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Omega 1,6 Polarisé') !== false && strpos($verre->trad_fr, 'C') !== false) {
                    if (!in_array('Omega 1,6 Polarisé C', $verre_existant)) {
                        $tab[$i]['verre'] = 'Omega 1,6 Polarisé C';
                        array_push($verre_existant, 'Omega 1,6 Polarisé C');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Omega 1,67 Transition') !== false) {
                    if (!in_array('Omega 1,67 Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'Omega 1,67 Transition';
                        array_push($verre_existant, 'Omega 1,67 Transition');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Omega 1,67 Xtractive') !== false) {
                    if (!in_array('Omega 1,67 Xtractive', $verre_existant)) {
                        $tab[$i]['verre'] = 'Omega 1,67 Xtractive';
                        array_push($verre_existant, 'Omega 1,67 Xtractive');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Omega 1,67 Polarisé') !== false && strpos($verre->trad_fr, 'C') !== false) {
                    if (!in_array('Omega 1,67 Polarisé C', $verre_existant)) {
                        $tab[$i]['verre'] = 'Omega 1,67 Polarisé C';
                        array_push($verre_existant, 'Omega 1,67 Polarisé C');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Omega 1,74 Transition') !== false) {
                    if (!in_array('Omega 1,74 Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'Omega 1,74 Transition';
                        array_push($verre_existant, 'Omega 1,74 Transition');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Elysium 1,5 Polarisé') !== false) {
                    if (!in_array('Elysium 1,5 Polarisé', $verre_existant)) {
                        $tab[$i]['verre'] = 'Elysium 1,5 Polarisé';
                        array_push($verre_existant, 'Elysium 1,5 Polarisé');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Elysium 1,53 Transition') !== false) {
                    if (!in_array('Elysium 1,53 Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'Elysium 1,53 Transition';
                        array_push($verre_existant, 'Elysium 1,53 Transition');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Elysium 1,59 Transition') !== false) {
                    if (!in_array('Elysium 1,59 Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'Elysium 1,59 Transition';
                        array_push($verre_existant, 'Elysium 1,59 Transition');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Elysium 1,6 Transition') !== false) {
                    if (!in_array('Elysium 1,6 Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'Elysium 1,6 Transition';
                        array_push($verre_existant, 'Elysium 1,6 Transition');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Elysium 1,6 Polarisé') !== false) {
                    if (!in_array('Elysium 1,6 Polarisé', $verre_existant)) {
                        $tab[$i]['verre'] = 'Elysium 1,6 Polarisé';
                        array_push($verre_existant, 'Elysium 1,6 Polarisé');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Elysium 1,67 Transition') !== false) {
                    if (!in_array('Elysium 1,67 Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'Elysium 1,67 Transition';
                        array_push($verre_existant, 'Elysium 1,67 Transition');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Elysium 1,67 Polarisé') !== false) {
                    if (!in_array('Elysium 1,67 Polarisé', $verre_existant)) {
                        $tab[$i]['verre'] = 'Elysium 1,67 Polarisé';
                        array_push($verre_existant, 'Elysium 1,67 Polarisé');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Elysium 1,74 Transition') !== false) {
                    if (!in_array('Elysium 1,74 Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'Elysium 1,74 Transition';
                        array_push($verre_existant, 'Elysium 1,74 Transition');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Eyefatigue 1,5 HMC') !== false) {
                    if (!in_array('Eyefatigue 1,5 HMC', $verre_existant)) {
                        $tab[$i]['verre'] = 'Eyefatigue 1,5 HMC';
                        array_push($verre_existant, 'Eyefatigue 1,5 HMC');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Eyefatigue 1,5 Defender') !== false) {
                    if (!in_array('Eyefatigue 1,5 Defender', $verre_existant)) {
                        $tab[$i]['verre'] = 'Eyefatigue 1,5 Defender';
                        array_push($verre_existant, 'Eyefatigue 1,5 Defender');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Eyefatigue 1,5 Transition') !== false && strpos($verre->trad_fr, 'Vantage') === false) {
                    if (!in_array('Eyefatigue 1,5 Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'Eyefatigue 1,5 Transition';
                        array_push($verre_existant, 'Eyefatigue 1,5 Transition');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Eyefatigue 1,5 Xtractive') !== false) {
                    if (!in_array('Eyefatigue 1,5 Xtractive', $verre_existant)) {
                        $tab[$i]['verre'] = 'Eyefatigue 1,5 Xtractive';
                        array_push($verre_existant, 'Eyefatigue 1,5 Xtractive');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Eyefatigue 1,5 Polarisé') !== false) {
                    if (!in_array('Eyefatigue 1,5 Polarisé', $verre_existant)) {
                        $tab[$i]['verre'] = 'Eyefatigue 1,5 Polarisé';
                        array_push($verre_existant, 'Eyefatigue 1,5 Polarisé');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Eyefatigue 1,5 0,5') !== false || strpos($verre->trad_fr, 'Eyefatigue 1,5 0,75') !== false || strpos($verre->trad_fr, 'Eyefatigue 1,5 1,00') !== false) {
                    if (!in_array('Eyefatigue 1,5', $verre_existant)) {
                        $tab[$i]['verre'] = 'Eyefatigue 1,5';
                        array_push($verre_existant, 'Eyefatigue 1,5');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Eyefatigue 1,53 Polarisé') !== false) {
                    if (!in_array('Eyefatigue 1,53 Polarisé', $verre_existant)) {
                        $tab[$i]['verre'] = 'Eyefatigue 1,53 Polarisé';
                        array_push($verre_existant, 'Eyefatigue 1,53 Polarisé');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Eyefatigue 1,53') !== false && strpos($verre->trad_fr, 'C') !== false) {
                    if (!in_array('Eyefatigue 1,53 C', $verre_existant)) {
                        $tab[$i]['verre'] = 'Eyefatigue 1,53 C';
                        array_push($verre_existant, 'Eyefatigue 1,53 C');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Eyefatigue 1,53 Transition') !== false && strpos($verre->trad_fr, 'Vantage') === false) {
                    if (!in_array('Eyefatigue 1,53 Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'Eyefatigue 1,53 Transition';
                        array_push($verre_existant, 'Eyefatigue 1,53 Transition');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Eyefatigue 1,53 Xtractive') !== false) {
                    if (!in_array('Eyefatigue 1,53 Xtractive', $verre_existant)) {
                        $tab[$i]['verre'] = 'Eyefatigue 1,53 Xtractive';
                        array_push($verre_existant, 'Eyefatigue 1,53 Xtractive');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Eyefatigue 1,53 0,5') !== false || strpos($verre->trad_fr, 'Eyefatigue 1,53 0,75') !== false || strpos($verre->trad_fr, 'Eyefatigue 1,53 1,00') !== false) {
                    if (!in_array('Eyefatigue 1,53', $verre_existant)) {
                        $tab[$i]['verre'] = 'Eyefatigue 1,53';
                        array_push($verre_existant, 'Eyefatigue 1,53');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Eyefatigue 1,59 Polarisé') !== false) {
                    if (!in_array('Eyefatigue 1,59 Polarisé', $verre_existant)) {
                        $tab[$i]['verre'] = 'Eyefatigue 1,59 Polarisé';
                        array_push($verre_existant, 'Eyefatigue 1,59 Polarisé');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Eyefatigue 1,59 Transition') !== false && strpos($verre->trad_fr, 'Vantage') === false) {
                    if (!in_array('Eyefatigue 1,59 Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'Eyefatigue 1,59 Transition';
                        array_push($verre_existant, 'Eyefatigue 1,59 Transition');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Eyefatigue 1,59 Xtractive') !== false) {
                    if (!in_array('Eyefatigue 1,59 Xtractive', $verre_existant)) {
                        $tab[$i]['verre'] = 'Eyefatigue 1,59 Xtractive';
                        array_push($verre_existant, 'Eyefatigue 1,59 Xtractive');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Eyefatigue 1,59 0,5') !== false || strpos($verre->trad_fr, 'Eyefatigue 1,59 0,75') !== false || strpos($verre->trad_fr, 'Eyefatigue 1,59 1,00') !== false) {
                    if (!in_array('Eyefatigue 1,59', $verre_existant)) {
                        $tab[$i]['verre'] = 'Eyefatigue 1,59';
                        array_push($verre_existant, 'Eyefatigue 1,59');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Eyefatigue 1,6 Defender') !== false) {
                    if (!in_array('Eyefatigue 1,6 Defender', $verre_existant)) {
                        $tab[$i]['verre'] = 'Eyefatigue 1,6 Defender';
                        array_push($verre_existant, 'Eyefatigue 1,6 Defender');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Eyefatigue 1,6 Transition') !== false) {
                    if (!in_array('Eyefatigue 1,6 Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'Eyefatigue 1,6 Transition';
                        array_push($verre_existant, 'Eyefatigue 1,6 Transition');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Eyefatigue 1,6 Xtractive') !== false) {
                    if (!in_array('Eyefatigue 1,6 Xtractive', $verre_existant)) {
                        $tab[$i]['verre'] = 'Eyefatigue 1,6 Xtractive';
                        array_push($verre_existant, 'Eyefatigue 1,6 Xtractive');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Eyefatigue 1,6 Polarisé') !== false) {
                    if (!in_array('Eyefatigue 1,6 Polarisé', $verre_existant)) {
                        $tab[$i]['verre'] = 'Eyefatigue 1,6 Polarisé';
                        array_push($verre_existant, 'Eyefatigue 1,6 Polarisé');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Eyefatigue 1,6 0,5') !== false || strpos($verre->trad_fr, 'Eyefatigue 1,6 0,75') !== false || strpos($verre->trad_fr, 'Eyefatigue 1,6 1,00') !== false) {
                    if (!in_array('Eyefatigue 1,6', $verre_existant)) {
                        $tab[$i]['verre'] = 'Eyefatigue 1,6';
                        array_push($verre_existant, 'Eyefatigue 1,6');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Eyefatigue 1,67 Defender') !== false) {
                    if (!in_array('Eyefatigue 1,67 Defender', $verre_existant)) {
                        $tab[$i]['verre'] = 'Eyefatigue 1,67 Defender';
                        array_push($verre_existant, 'Eyefatigue 1,67 Defender');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Eyefatigue 1,67 Transition') !== false) {
                    if (!in_array('Eyefatigue 1,67 Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'Eyefatigue 1,67 Transition';
                        array_push($verre_existant, 'Eyefatigue 1,67 Transition');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Eyefatigue 1,67 Xtractive') !== false) {
                    if (!in_array('Eyefatigue 1,67 Xtractive', $verre_existant)) {
                        $tab[$i]['verre'] = 'Eyefatigue 1,67 Xtractive';
                        array_push($verre_existant, 'Eyefatigue 1,67 Xtractive');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Eyefatigue 1,67 Polarisé') !== false) {
                    if (!in_array('Eyefatigue 1,67 Polarisé', $verre_existant)) {
                        $tab[$i]['verre'] = 'Eyefatigue 1,67 Polarisé';
                        array_push($verre_existant, 'Eyefatigue 1,67 Polarisé');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Eyefatigue 1,67 0,5') !== false || strpos($verre->trad_fr, 'Eyefatigue 1,67 0,75') !== false || strpos($verre->trad_fr, 'Eyefatigue 1,67 1,00') !== false) {
                    if (!in_array('Eyefatigue 1,67', $verre_existant)) {
                        $tab[$i]['verre'] = 'Eyefatigue 1,67';
                        array_push($verre_existant, 'Eyefatigue 1,67');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Eyefatigue 1,74 Transition') !== false) {
                    if (!in_array('Eyefatigue 1,74 Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'Eyefatigue 1,74 Transition';
                        array_push($verre_existant, 'Eyefatigue 1,74 Transition');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Eyefatigue 1,74 0,5') !== false || strpos($verre->trad_fr, 'Eyefatigue 1,74 0,75') !== false || strpos($verre->trad_fr, 'Eyefatigue 1,74 1,00') !== false) {
                    if (!in_array('Eyefatigue 1,74 Polarisé', $verre_existant)) {
                        $tab[$i]['verre'] = 'Eyefatigue 1,74 Polarisé';
                        array_push($verre_existant, 'Eyefatigue 1,74 Polarisé');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Top Office 1,5 HMC') !== false) {
                    if (!in_array('Top Office 1,5 HMC', $verre_existant)) {
                        $tab[$i]['verre'] = 'Top Office 1,5 HMC';
                        array_push($verre_existant, 'Top Office 1,5 HMC');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Top Office 1,5 Transition') !== false) {
                    if (!in_array('Top Office 1,5 Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'Top Office 1,5 Transition';
                        array_push($verre_existant, 'Top Office 1,5 Transition');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Top Office 1,6 Transition') !== false) {
                    if (!in_array('Top Office 1,6 Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'Top Office 1,6 Transition';
                        array_push($verre_existant, 'Top Office 1,6 Transition');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Top Office 1,67 Transition') !== false) {
                    if (!in_array('Top Office 1,67 Transition', $verre_existant)) {
                        $tab[$i]['verre'] = 'Top Office 1,67 Transition';
                        array_push($verre_existant, 'Top Office 1,67 Transition');
                    }
                    else {
                        continue;
                    }
                }
                else if (strpos($verre->trad_fr, 'Long') !== false) {
                    $tab[$i]['verre'] = str_replace(" Long", "", $verre->trad_fr);
                }
                else {
                    $tab[$i]['verre'] = $verre->trad_fr;
                }
                $prix = $verre->prix_perso ? $verre->prix_perso : $verre->prix;
                $tab[$i]['prix'] = number_format($prix, 2, '.', ',');
                $tab[$i]['teinte'] = isset($teinteList[$verre->lens_id]) ? $teinteList[$verre->lens_id] : "";
                if ($is_lens) {
                    $tab[$i]['order'] = $count[$verre->verre_type];
                    $count[$verre->verre_type]++;
                }

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