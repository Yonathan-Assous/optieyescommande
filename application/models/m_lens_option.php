<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class m_lens_option extends CI_Model
{
    var $table = 'lensoptions';

    public
    function __construct()
    {
        parent::__construct();
    }
    public function getLensOptionByCode($code) {
        $sql = "SELECT * FROM $this->table WHERE code = '$code'";
        $query = $this->db->query($sql);
        return $query->result()[0];
    }
}

