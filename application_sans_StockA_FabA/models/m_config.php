<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_config extends CI_Model {

    var $table = 'config';

    var $fields = array(
      'id_config'        => 'id_config',
			'nom_config'	     => 'nom_config',
      'param_config'     => 'param_config'
    );

    public function __construct() {
        parent::__construct();
    }

    public function getConfig($data){
      $query = $this->db->query("SELECT param_config FROM ".$this->table." WHERE nom_config ='".$data['nom_config']."'");

      if ($query && $query->num_rows() > 0)
        return $query->result();
		
        return false;
    }
    
    public function updateConfig($data){
        $data = array_intersect_key($data, $this->fields);

        $this->db->where('nom_config', $data['nom_config']);
        $this->db->set("param_config", $data['param_config']);

        $this->db->update($this->table, $data);
    }
}