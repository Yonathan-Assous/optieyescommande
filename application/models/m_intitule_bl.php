<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_intitule_bl extends CI_Model
{
    var $table = 'intitule_bl';

    public function __construct()
    {
        parent::__construct();
    }

    public function getCountBlByUserId($id_user, $daysCount) {
        $now = date('Y-m-d');
        $date = date('Y-m-d', strtotime($now. ' - ' . $daysCount . ' days'));
        $sql = "SELECT COUNT(*) as count FROM `intitule_bl` WHERE id_user = $id_user AND date_changed >= '$date'";
        $query = $this->db->query($sql);
        if ($query && $query->num_rows() > 0) {
            return $query->result()[0]->count;
        }
    }
}