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

    public function getTypeGenerationVerre($id_magasin = 1){
        $query = $this->db->query("SELECT * FROM ".$this->table." WHERE id_magasin=".$id_magasin." AND active = 1");

        if ($query->num_rows() > 0)
            return $query->result();

        return false;
    }
}