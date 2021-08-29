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

    public function numCommentaire() {
        $sql = "SELECT COUNT(*) as num_commentaire FROM `commande` WHERE is_confirmed = 0";
        $query = $this->db->query($sql);
        echo $query->result()[0]->num_commentaire;
//        return $query->result()[0]->num_commentaire;
    }

    public function setExpress() {
        $data = $this->input->post();
//        print_r($data);die;
        $data['is_express'] = $data['is_express'] == 'true' ? true : false;
        $data['is_facture'] = $data['is_facture'] == 'true' ? true : false;
        $sql = 'SELECT * FROM `commande` WHERE id_commande = ' . $data['commande_id'];
        $query = $this->db->query($sql);
        $commande = $query->result()[0];
        $tarifExpress = $commande->tarif_express;
        $tarifCommande = $commande->total_commande;
        if ($data['is_express'] && $data['is_facture']) {
            if ($tarifExpress != 25) {
                if ($tarifExpress == 0) {
                    $sql = 'UPDATE `commande` SET `tarif_express` = 25,
                            total_commande = ' . ($tarifCommande + 25) . '
                            WHERE id_commande = ' . $data['commande_id'];
                }
                else {
                    $sql = 'UPDATE `commande` SET `tarif_express` = 25, `total_remise_paire` = ' . ($commande->total_remise_paire - $commande->tarif_express) . ',
                            total_commande = ' . ($tarifCommande + 25) . '
                            WHERE id_commande = ' . $data['commande_id'];
                }
                $this->db->query($sql);
            }
        }
        else if ($data['is_express'] && !$data['is_facture']) {
            if ($tarifExpress == 25) {
                $sql = 'UPDATE `commande` SET `tarif_express` = 1, `total_remise_paire` = ' . ($commande->total_remise_paire + 1) . ',
                        total_commande = ' . ($tarifCommande - 25) . '
                        WHERE id_commande = ' . $data['commande_id'];
                $this->db->query($sql);
            }
            else if ($tarifExpress == 0) {
                $sql = 'UPDATE `commande` SET `tarif_express` = 1,
                      `total_remise_paire` = ' . ($commande->total_remise_paire + 1) . '
                        WHERE id_commande = ' . $data['commande_id'];
                $this->db->query($sql);
            }
        }
        else {
            if ($tarifExpress != 0) {
                if ($tarifExpress == 25) {
                    $sql = 'UPDATE `commande` SET `tarif_express` = 0,
                            total_commande = ' . ($tarifCommande - 25) . '
                            WHERE id_commande = ' . $data['commande_id'];
                }
                else {
                    $sql = 'UPDATE `commande` SET `tarif_express` = 0, `total_remise_paire` = ' . ($commande->total_remise_paire - $commande->tarif_express)
                        . '
                         WHERE id_commande = ' . $data['commande_id'];
                }
                $this->db->query($sql);
            }
        }
        echo $sql;die;
    }
}