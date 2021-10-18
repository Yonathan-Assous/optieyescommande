<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_log extends CI_Model {
    public function setToLog($isActive, $function, $comment = NULL) {
        $date = date("Y-m-d H:i:s");
        $data = array(
            'is_active' => $isActive,
            'function' => $function,
            'update_date' => $date,
            'comment' => $comment
        );
        $this->db->insert('logs', $data);
    }
}