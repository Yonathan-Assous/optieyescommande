<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_verres_stock extends CI_Model
{
    var $table = 'verres_stock';

    public function __construct() {
        parent::__construct();
    }

    public function getByLibelleVerre($libelleVerre) {
        $sql = "SELECT * FROM `" . $this->table . "` WHERE libelle_verre = '" . $libelleVerre . "'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return $query->result()[0];
        }
        return false;
    }

    public function getByIdVerre($idVerre) {
        $sql = "SELECT * FROM `" . $this->table . "` WHERE id_verre = '" . $idVerre . "'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return $query->result()[0];
        }
        return false;
    }
}