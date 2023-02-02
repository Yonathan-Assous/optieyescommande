<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_lenses extends CI_Model
{
    var $table = 'lenses';

    public
    function __construct()
    {
        parent::__construct();
    }

    public function getLensesByTradFr($tradFr, $is_teledetourage = false) {
        $tradFr = str_replace(" - Stock déporté", "", $tradFr);
        if (!$is_teledetourage) {
            $addSql = "AND display = 'X'";
        }
        else {
            $addSql = "AND is_teledetourable = true";
        }
        $sql = "SELECT * FROM `lenses` 
                WHERE `trad_fr` = '$tradFr'
                $addSql";
        $query = $this->db->query($sql);
        $lenses =  $query->result();
        return $lenses[0];
    }

    public function getLensesByCode($code) {
        $sql = "SELECT * FROM `lenses` 
                WHERE `code` = '$code' 
                AND (display = 'X' OR is_teledetourable = 1)";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $lenses =  $query->result();
            return $lenses[0];
        }
        return false;
    }

    public function getLensesById($id) {
        $sql = "SELECT * FROM `lenses` 
                WHERE `id` = '$id'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $lenses =  $query->result();
            return $lenses[0];
        }
        return false;
    }
}