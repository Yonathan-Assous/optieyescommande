<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_lenses extends CI_Model
{
    var $table = 'lenses';

    public
    function __construct()
    {
        parent::__construct();
    }

    public function getLensesByTradFr($tradFr) {
        $sql = "SELECT * FROM `lenses` 
                WHERE `trad_fr` = '$tradFr'";
        $query = $this->db->query($sql);
        $lenses =  $query->result();
        return $lenses[0];
    }
}