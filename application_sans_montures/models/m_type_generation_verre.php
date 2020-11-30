<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_type_generation_verre extends CI_Model {

    var $table = 'type_generation_verre';

    var $fields = array(
            'id_type_generation_verre'             => 'id_type_generation_verre',
            'type_generation_verre'                => 'type_generation_verre'
    );

    public function __construct() {
        parent::__construct();
    }

    public function getTypeGenerationVerre($id_magasin = 1, $pair_type = false){

        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('id_magasin', $id_magasin);
        $this->db->where('active', 1);

        switch($pair_type) {
            case 1:
            case 3:
                $this->db->where_in('id_type_generation_verre', array(1,2,3));
                break;
            case 2:
                $this->db->where('id_type_generation_verre', 2);
                break;
            case 4:
            case 7:
                $this->db->where_in('id_type_generation_verre', array(4,7));
                break;
        }

        $query = $this->db->get();

        if ($query->num_rows() > 0)
            return $query->result();

        return false;
    }
}