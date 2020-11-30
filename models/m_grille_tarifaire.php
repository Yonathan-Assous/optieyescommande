<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_grille_tarifaire extends CI_Model {

    var $table = 'grille_tarifaire';

    var $fields = array(
            'id_grille_tarifaire'     => 'id_grille_tarifaire',
            'id_verre'                => 'id_verre',
            'prix_verre'              => 'prix_verre'
    );

    public function updatePrixVerre($data){
        $data = array_intersect_key($data, $this->fields);

        if(isset($data['id_verre']) && isset($data['id_grille_tarifaire'])){

            $this->db->where('id_verre', $data['id_verre']);
            $this->db->where('id_grille_tarifaire', $data['id_grille_tarifaire']);

            $this->db->update($this->table, $data);

            if($this->db->_error_number()!=0)
                return false;

            return true;
        }

        return false;
    }
    
    public function addGrille($id_grille_tarifaire,$id_verre){
       $this->db->query("INSERT INTO ".$this->table." (id_grille_tarifaire,id_verre,prix_verre) VALUES (".$id_grille_tarifaire.",".$id_verre.",'0')");
    }
}