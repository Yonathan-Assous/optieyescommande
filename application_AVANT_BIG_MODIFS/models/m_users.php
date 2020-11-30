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
        $query = $this->db->query("SELECT * FROM ".$this->table." WHERE email='".$data['email']."' AND pass='".md5($data['email'].'&&'.$data['pass'])."' AND active = 1 AND deleted = 0");

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
        $query = $this->db->query("SELECT email FROM ".$this->table." WHERE email=".$this->db->escape($data['email']));

        if ($query->num_rows() > 0)
            return "exists";
		
		$query = $this->db->query("SELECT numero_siret FROM ".$this->table." WHERE numero_siret=".$this->db->escape($data['numero_siret']));
		
		if ($query->num_rows() > 0)
            return "DUPLICATE";
        else{
			$this->db->insert($this->table, $data);
		}
    }

    public function updateUser($data){
        $data = array_intersect_key($data, $this->fields);
		
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
     
		$query = $this->db->query("SELECT id_users,nom_societe,email,date_inscription,document_rib,valid_mandat,id_grille_tarifaire,commande_suspendue,pass,grille_telechargeable,nom_magasin,tarif_livraison,cp,ville,show_commentaire
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
}