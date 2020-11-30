<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_grille_fabrication extends CI_Model {

    var $table = 'grille_fabrication';

    var $fields = array(
            'id_grille_fabrication'     => 'id_grille_fabrication',
            'id_generation_verre'       => 'id_generation_verre',
            'id_indice_verre'           => 'id_indice_verre',
            'grille_fabrication_verre'  => 'grille_fabrication_verre'
    );

    public function __construct() {
        parent::__construct();
    }

    public function getGrilleFabrication($data){
        $query = $this->db->query('SELECT id_grille_fabrication,grille_fabrication_verre 
								   FROM '.$this->table.' 
								   WHERE id_generation_verre='.$data['id_generation_verre'].' 
								   AND id_indice_verre='.$data['id_indice_verre']);

        if ($query && $query->num_rows() > 0)
            return $query->result();

        return false;
    }
}