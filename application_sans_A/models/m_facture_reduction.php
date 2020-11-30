<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_facture_reduction extends CI_Model {

    var $table = 'facture_reduction';

    var $fields = array(
            'id_users'               => 'id_users',
            'date_remise'            => 'date_remise',
            'reduction'              => 'reduction'
    );

    public function __construct() {
        parent::__construct();
    }

    public function reduction($data){
        list($day,$month,$year) = explode("/",$data['date_remise']);
        $data['date_remise'] = $year."-".$month."-".$day;
        $data['reduction'] = str_replace(",",".",$data['reduction_facture']);

        $data = array_intersect_key($data, $this->fields);

        $this->db->query("INSERT INTO ".$this->table." (".implode(', ', $this->fields).") VALUES ('".implode("','", $this->db->escape($data))."') ON DUPLICATE KEY UPDATE reduction = reduction + ".$data['reduction']);
    }

    public function delete_reduction($data){
        $this->db->query("DELETE FROM ".$this->table." WHERE id_users=".$data['id_users']." AND date_remise='".$data['date_remise']."'");
    }

    public function get_reduction($data){

        $query = $this->db->query("SELECT reduction 
								   FROM ".$this->table." 
								   WHERE id_users=".$data['id_users']." 
								   AND DATE_FORMAT(date_remise, '%Y-%m')='".$data['date_remise']."'");
	
        if ($query && $query->num_rows() > 0)
            return $query->result();

        return false;
    }

    public function getListReduction($data){
        $query = $this->db->query("SELECT id_users,reduction,date_remise FROM ".$this->table." WHERE id_users=".$data['id_users']." AND DATE_FORMAT(date_remise, '%Y-%m')='".$data['date_remise']."'");

        if ($query && $query->num_rows() > 0)
            return $query->result();

        return false;
    }
}
