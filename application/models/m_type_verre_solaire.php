<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_type_verre_solaire extends CI_Model
{
    var $table = 'type_verre_solaire';

    public function __construct()
    {
        parent::__construct();
    }

    public function getAllTypeVerreSolaire() {
        $sql = "SELECT * FROM `$this->table`";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function getIdByName($name) {
//        var_dump($name);
        if (!empty($name)) {
            $sql = "SELECT * FROM `$this->table` 
                WHERE `name` = '$name'";
        }
        else {
            $sql = "SELECT * FROM `$this->table` 
                WHERE `name` IS NULL";
        }
        $query = $this->db->query($sql);
        if ($query && $query->num_rows() > 0) {
            $traitement =  $query->result();
            return $traitement[0]->id;
        }
        else {
            return NULL;
        }
    }
}