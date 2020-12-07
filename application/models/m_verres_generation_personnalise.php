<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_verres_generation_personnalise extends CI_Model {

    var $table = 'verres_generation_personnalise';

    var $fields = array(
            'id_users'                      => 'id_users',
            'id_generation_verre'           => 'id_generation_verre',
            'libelle_verre_personnalise'   => 'libelle_verre_personnalise'
    );

    public function getVerrePersonnalise($id_users){
        $query = $this->db->query("SELECT id_generation_verre,libelle_verre_personnalise
                                   FROM ".$this->table."
                                   WHERE id_users=".$id_users);

        if ($query->num_rows() > 0){
            foreach($query->result() as $value)
                $data[$value->id_generation_verre] = $value->libelle_verre_personnalise;

            return $data;
        }

        return false;
    }

    public function ajoutVerrePersonnalise($data){
        foreach($data['id_generation_verre'] as $id_generation_verre => $value){
            if(is_numeric($id_generation_verre) && !empty($value))
                $this->db->query("INSERT INTO ".$this->table." (".implode(', ', $this->fields).") VALUES (".$data['id_users'].",".$id_generation_verre.",".$this->db->escape($value).") ON DUPLICATE KEY UPDATE libelle_verre_personnalise=".$this->db->escape($value));
            else if(empty($value)){
                $this->db->where(array('id_users' => $data['id_users'], 'id_generation_verre' => $id_generation_verre));
                $this->db->delete($this->table);
            }
        }
    }
}