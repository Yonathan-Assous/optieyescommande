<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class commande extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        var_dump('Hello World!');
    }

    public function confirmCommande() {
        $data = $this->input->post();
        $commandeId = $data['commande_id'];
        $sql = 'UPDATE commande SET is_confirmed = 1 WHERE id_commande = '. $commandeId;
        //var_dump($sql);die;
        $result = $this->db->query($sql);
        //echo $result;
    }
}