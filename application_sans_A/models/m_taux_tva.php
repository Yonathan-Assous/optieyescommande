<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_taux_tva extends CI_Model {

    var $table = 'taux_tva';

    var $fields = array(
            'taux_tva'          => 'taux_tva',
            'nouveau_taux_tva' => 'nouveau_taux_tva'
    );

    public function __construct() {
        parent::__construct();
    }

    public function update($data){
        $data = array_intersect_key($data, $this->fields);
        $this->db->update($this->table, $data);

        if($this->db->_error_number()!=0)
            return false;

        return true;
    }

    public function get_tva(){
        $query = $this->db->query("SELECT taux_tva FROM ".$this->table);

        if ($query && $query->num_rows() > 0){
            $data = $query->result();
            return $data[0]->taux_tva;
        }

        return false;
    }

    public function get_nouveau_taux_tva(){
        $query = $this->db->query("SELECT nouveau_taux_tva FROM ".$this->table);

        if ($query && $query->num_rows() > 0){
            $data = $query->result();
            return $data[0]->nouveau_taux_tva;
        }

        return false;
    }
}