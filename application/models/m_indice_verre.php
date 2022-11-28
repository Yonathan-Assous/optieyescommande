<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_indice_verre extends CI_Model
{
    var $table = 'lenses';

    public
    function __construct()
    {
        parent::__construct();
    }

    public function getIndiceVerreIdByindiceVerre($indiceVerre) {
        if ($indiceVerre == 'mineral') {
            $indiceVerre = 'Mineral';
        }
        else if ($indiceVerre == 1.5 || $indiceVerre == 1.6) {
            $indiceVerre .= '0';
        }
        $indiceVerreSql = "SELECT * FROM `indice_verre` WHERE `indice_verre` = '$indiceVerre'";
        $query = $this->db->query($indiceVerreSql);
        $res = $query->result()[0];
        return $res->id_indice_verre;
    }
}