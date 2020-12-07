<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends MY_Controller {

    public function __construct() {
        parent::__construct();

        $this->session->set_userdata('newUser', $this->m_users->getNewUser());

        if($this->session->userdata('data_user') === false || $this->session->userdata('is_admin') === false){
            $id_users= 1;
            if(($data_user = $this->m_users->getUserById($id_users)) !== false){
                $data_user['user_info'] = $data_user[0];
                unset($data_user[0]);

                $session = array(
                    'data_user' => $data_user,
                    'data_admin' => $data_user,
                    'is_admin' => true
                );

                $this->session->set_userdata($session);
            }
        }

        $this->data['parametre_lang_datable'] = $this->config->item('parametre_lang_datable');
        $this->data['parametre_export_datable'] = $this->config->item('parametre_export_datable');

        $this->data['generation_verre'] = $this->m_generation_verre->getGenerationVerre(NULL,NULL,false);


    }


    /*public function update_verres_153() {

        $query = $this->db->query('SELECT * FROM verres
        WHERE libelle_verre LIKE "%1,53% A %" 
        OR libelle_verre LIKE "%1,53% B %"
        OR libelle_verre LIKE "%1,53% AB %"
        OR libelle_verre LIKE "%1,53% C %"
        OR libelle_verre LIKE "%1,53% D %"');

        if ($query->num_rows() > 0) {

            $verres = $query->result();

            foreach($verres as $v) {
                echo $v->libelle_verre.'<br />';
                $this->db->query('UPDATE verres SET active = 0  WHERE id_verre  = '.$v->id_verre);
            }
        }

    }


    public function update_verres_1591() {

        $query = $this->db->query('SELECT * FROM verres
        WHERE libelle_verre LIKE "%1,591% A %" 
        OR libelle_verre LIKE "%1,591% B %"
        OR libelle_verre LIKE "%1,591% AB %"
        OR libelle_verre LIKE "%1,591% C %"
        OR libelle_verre LIKE "%1,591% D %"');

        if ($query->num_rows() > 0) {

            $verres = $query->result();

            foreach($verres as $v) {

                if(! strpos($v->libelle_verre, 'Transition') ) {
                    $this->db->query('UPDATE verres SET active = 0  WHERE id_verre  = '.$v->id_verre);
                }

            }
        }

    }*/


    /*public function create_defender() {

        $query = $this->db->query('SELECT * FROM verres WHERE libelle_verre LIKE "%BlueCoat%"');

        if ($query->num_rows() > 0) {

            $verres = $query->result();

            foreach($verres as $v) {

                $this->db->insert('verres', array(
                    'id_generation_verre' => $v->id_generation_verre,
                    'id_indice_verre' => $v->id_indice_verre,
                    'libelle_verre' => str_replace('BlueCoat', 'BlueCoat Defender', $v->libelle_verre),
                    'order_verre' => $v->order_verre,
                    'active' => $v->active,
                    'supplement' => $v->supplement,
                ));

                $insert_id = $this->db->insert_id();


                $get_grille = $this->db->query('SELECT * FROM grille_tarifaire WHERE id_verre  = '.$v->id_verre);

                if ($get_grille->num_rows() > 0) {

                    $grille = $get_grille->result();

                    foreach($grille as $g) {

                        $this->db->insert('grille_tarifaire', array(
                            'id_grille_tarifaire' => $g->id_grille_tarifaire,
                            'id_verre' => $insert_id,
                            'prix_verre' => ($g->prix_verre+5),
                        ));

                    }

                }

            }
        }

    }*/

    public function reorder_list() {

        $verres = array(
            "Durci",
            "HMC",
            "Satin",
            "Satin UV",
            "BlueCoat",
            "Transition Gris Durci",
            "Transition Gris HMC",
            "Transition Gris Satin",
            "Transition Gris Satin UV",
            "Transition Gris BlueCoat",
            "Transition Brun Durci",
            "Transition Brun HMC",
            "Transition Brun Satin",
            "Transition Brun Satin UV",
            "Transition Brun BlueCoat",
            "Xtractive Gris Durci",
            "Xtractive Gris HMC",
            "Xtractive Gris Satin",
            "Xtractive Gris Satin UV",
            "Xtractive Gris BlueCoat",
            "Gris C Durci Polarisé",
            "Gris C HMC Face interne Polarisé",
            "Gris C HMC Polarisé",
            "Gris C Satin Polarisé",
            "Gris C Satin UV Polarisé",
            "Gris C BlueCoat Polarisé",
            "Brun C Durci Polarisé",
            "Brun C HMC Face interne Polarisé",
            "Brun C HMC Polarisé",
            "Brun C Satin Polarisé",
            "Brun C Satin UV Polarisé",
            "Brun C BlueCoat Polarisé",
            "G15 C Durci Polarisé",
            "G15 C HMC Face interne Polarisé",
            "G15 C HMC Polarisé",
            "G15 C Satin Polarisé",
            "G15 C Satin UV Polarisé",
            "G15 C BlueCoat Polarisé",
            "Drivewear Durci",
            "Drivewear HMC Face interne",
            "Drivewear HMC",
            "Drivewear Satin",
            "Drivewear Satin UV",
            "Drivewear BlueCoat",
            "Gris C Durci",
            "Gris C dégradé Durci",
            "Gris C HMC Face interne",
            "Gris C dégradé HMC Face interne",
            "Gris C HMC",
            "Gris C dégradé HMC",
            "Gris C Satin",
            "Gris C dégradé Satin",
            "Gris C Satin UV",
            "Gris C dégradé Satin UV",
            "Gris C BlueCoat",
            "Gris C dégradé BlueCoat",
            "Gris A Durci",
            "Gris A dégradé Durci",
            "Gris A HMC Face interne",
            "Gris A dégradé HMC Face interne",
            "Gris A HMC",
            "Gris A dégradé HMC",
            "Gris A Satin",
            "Gris A dégradé Satin",
            "Gris A Satin UV",
            "Gris A dégradé Satin UV",
            "Gris A BlueCoat",
            "Gris A dégradé BlueCoat",
            "Gris AB Durci",
            "Gris AB dégradé Durci",
            "Gris AB HMC Face interne",
            "Gris AB dégradé HMC Face interne",
            "Gris AB HMC",
            "Gris AB dégradé HMC",
            "Gris AB Satin",
            "Gris AB dégradé Satin",
            "Gris AB Satin UV",
            "Gris AB dégradé Satin UV",
            "Gris AB BlueCoat",
            "Gris AB dégradé BlueCoat",
            "Gris B Durci",
            "Gris B dégradé Durci",
            "Gris B HMC Face interne",
            "Gris B dégradé HMC Face interne",
            "Gris B HMC",
            "Gris B dégradé HMC",
            "Gris B Satin",
            "Gris B dégradé Satin",
            "Gris B Satin UV",
            "Gris B dégradé Satin UV",
            "Gris B BlueCoat",
            "Gris B dégradé BlueCoat",
            "Gris D Durci",
            "Gris D dégradé Durci",
            "Gris D HMC Face interne",
            "Gris D dégradé HMC Face interne",
            "Gris D HMC",
            "Gris D dégradé HMC",
            "Gris D Satin",
            "Gris D dégradé Satin",
            "Gris D Satin UV",
            "Gris D dégradé Satin UV",
            "Gris D BlueCoat",
            "Gris D dégradé BlueCoat",
            "Brun C Durci",
            "Brun C dégradé Durci",
            "Brun C HMC Face interne",
            "Brun C dégradé HMC Face interne",
            "Brun C HMC",
            "Brun C dégradé HMC",
            "Brun C Satin",
            "Brun C dégradé Satin",
            "Brun C Satin UV",
            "Brun C dégradé Satin UV",
            "Brun C BlueCoat",
            "Brun C dégradé BlueCoat",
            "Brun A Durci",
            "Brun A dégradé Durci",
            "Brun A HMC Face interne",
            "Brun A dégradé HMC Face interne",
            "Brun A HMC",
            "Brun A dégradé HMC",
            "Brun A Satin",
            "Brun A dégradé Satin",
            "Brun A Satin UV",
            "Brun A dégradé Satin UV",
            "Brun A BlueCoat",
            "Brun A dégradé BlueCoat",
            "Brun AB Durci",
            "Brun AB dégradé Durci",
            "Brun AB HMC Face interne",
            "Brun AB dégradé HMC Face interne",
            "Brun AB HMC",
            "Brun AB dégradé HMC",
            "Brun AB Satin",
            "Brun AB dégradé Satin",
            "Brun AB Satin UV",
            "Brun AB dégradé Satin UV",
            "Brun AB BlueCoat",
            "Brun AB dégradé BlueCoat",
            "Brun B Durci",
            "Brun B dégradé Durci",
            "Brun B HMC Face interne",
            "Brun B dégradé HMC Face interne",
            "Brun B HMC",
            "Brun B dégradé HMC",
            "Brun B Satin",
            "Brun B dégradé Satin",
            "Brun B Satin UV",
            "Brun B dégradé Satin UV",
            "Brun B BlueCoat",
            "Brun B dégradé BlueCoat",
            "Brun D Durci",
            "Brun D dégradé Durci",
            "Brun D HMC Face interne",
            "Brun D dégradé HMC Face interne",
            "Brun D HMC",
            "Brun D dégradé HMC",
            "Brun D Satin",
            "Brun D dégradé Satin",
            "Brun D Satin UV",
            "Brun D dégradé Satin UV",
            "Brun D BlueCoat",
            "Brun D dégradé BlueCoat",
            "G15 C Durci",
            "G15 C dégradé Durci",
            "G15 C HMC Face interne",
            "G15 C dégradé HMC Face interne",
            "G15 C HMC",
            "G15 C dégradé HMC",
            "G15 C Satin",
            "G15 C dégradé Satin",
            "G15 C Satin UV",
            "G15 C dégradé Satin UV",
            "G15 C BlueCoat",
            "G15 C dégradé BlueCoat",
            "G15 A Durci",
            "G15 A dégradé Durci",
            "G15 A HMC Face interne",
            "G15 A dégradé HMC Face interne",
            "G15 A HMC",
            "G15 A dégradé HMC",
            "G15 A Satin",
            "G15 A dégradé Satin",
            "G15 A Satin UV",
            "G15 A dégradé Satin UV",
            "G15 A BlueCoat",
            "G15 A dégradé BlueCoat",
            "G15 AB Durci",
            "G15 AB dégradé Durci",
            "G15 AB HMC Face interne",
            "G15 AB dégradé HMC Face interne",
            "G15 AB HMC",
            "G15 AB dégradé HMC",
            "G15 AB Satin",
            "G15 AB dégradé Satin",
            "G15 AB Satin UV",
            "G15 AB dégradé Satin UV",
            "G15 AB BlueCoat",
            "G15 AB dégradé BlueCoat",
            "G15 B Durci",
            "G15 B dégradé Durci",
            "G15 B HMC Face interne",
            "G15 B dégradé HMC Face interne",
            "G15 B HMC",
            "G15 B dégradé HMC",
            "G15 B Satin",
            "G15 B dégradé Satin",
            "G15 B Satin UV",
            "G15 B dégradé Satin UV",
            "G15 B BlueCoat",
            "G15 B dégradé BlueCoat",
            "G15 D Durci",
            "G15 D dégradé Durci",
            "G15 D HMC Face interne",
            "G15 D dégradé HMC Face interne",
            "G15 D HMC",
            "G15 D dégradé HMC",
            "G15 D Satin",
            "G15 D dégradé Satin",
            "G15 D Satin UV",
            "G15 D dégradé Satin UV",
            "G15 D BlueCoat",
            "G15 D dégradé BlueCoat",
            "Black C Durci",
            "Black C dégradé Durci",
            "Black C HMC Face interne",
            "Black C dégradé HMC Face interne",
            "Black C HMC",
            "Black C dégradé HMC",
            "Black C Satin",
            "Black C dégradé Satin",
            "Black C Satin UV",
            "Black C dégradé Satin UV",
            "Black C BlueCoat",
            "Black C dégradé BlueCoat",
            "Black A Durci",
            "Black A dégradé Durci",
            "Black A HMC Face interne",
            "Black A dégradé HMC Face interne",
            "Black A HMC",
            "Black A dégradé HMC",
            "Black A Satin",
            "Black A dégradé Satin",
            "Black A Satin UV",
            "Black A dégradé Satin UV",
            "Black A BlueCoat",
            "Black A dégradé BlueCoat",
            "Black AB Durci",
            "Black AB dégradé Durci",
            "Black AB HMC Face interne",
            "Black AB dégradé HMC Face interne",
            "Black AB HMC",
            "Black AB dégradé HMC",
            "Black AB Satin",
            "Black AB dégradé Satin",
            "Black AB Satin UV",
            "Black AB dégradé Satin UV",
            "Black AB BlueCoat",
            "Black AB dégradé BlueCoat",
            "Black B Durci",
            "Black B dégradé Durci",
            "Black B HMC Face interne",
            "Black B dégradé HMC Face interne",
            "Black B HMC",
            "Black B dégradé HMC",
            "Black B Satin",
            "Black B dégradé Satin",
            "Black B Satin UV",
            "Black B dégradé Satin UV",
            "Black B BlueCoat",
            "Black B dégradé BlueCoat",
            "Black D Durci",
            "Black D dégradé Durci",
            "Black D HMC Face interne",
            "Black D dégradé HMC Face interne",
            "Black D HMC",
            "Black D dégradé HMC",
            "Black D Satin",
            "Black D dégradé Satin",
            "Black D Satin UV",
            "Black D dégradé Satin UV",
            "Black D BlueCoat",
            "Black D dégradé BlueCoat",
            "Bleu C Durci",
            "Bleu C dégradé Durci",
            "Bleu C HMC Face interne",
            "Bleu C dégradé HMC Face interne",
            "Bleu C HMC",
            "Bleu C dégradé HMC",
            "Bleu C Satin",
            "Bleu C dégradé Satin",
            "Bleu C Satin UV",
            "Bleu C dégradé Satin UV",
            "Bleu C BlueCoat",
            "Bleu C dégradé BlueCoat",
            "Bleu A Durci",
            "Bleu A dégradé Durci",
            "Bleu A HMC Face interne",
            "Bleu A dégradé HMC Face interne",
            "Bleu A HMC",
            "Bleu A dégradé HMC",
            "Bleu A Satin",
            "Bleu A dégradé Satin",
            "Bleu A Satin UV",
            "Bleu A dégradé Satin UV",
            "Bleu A BlueCoat",
            "Bleu A dégradé BlueCoat",
            "Bleu AB Durci",
            "Bleu AB dégradé Durci",
            "Bleu AB HMC Face interne",
            "Bleu AB dégradé HMC Face interne",
            "Bleu AB HMC",
            "Bleu AB dégradé HMC",
            "Bleu AB Satin",
            "Bleu AB dégradé Satin",
            "Bleu AB Satin UV",
            "Bleu AB dégradé Satin UV",
            "Bleu AB BlueCoat",
            "Bleu AB dégradé BlueCoat",
            "Bleu B Durci",
            "Bleu B dégradé Durci",
            "Bleu B HMC Face interne",
            "Bleu B dégradé HMC Face interne",
            "Bleu B HMC",
            "Bleu B dégradé HMC",
            "Bleu B Satin",
            "Bleu B dégradé Satin",
            "Bleu B Satin UV",
            "Bleu B dégradé Satin UV",
            "Bleu B BlueCoat",
            "Bleu B dégradé BlueCoat",
            "Bleu D Durci",
            "Bleu D dégradé Durci",
            "Bleu D HMC Face interne",
            "Bleu D dégradé HMC Face interne",
            "Bleu D HMC",
            "Bleu D dégradé HMC",
            "Bleu D Satin",
            "Bleu D dégradé Satin",
            "Bleu D Satin UV",
            "Bleu D dégradé Satin UV",
            "Bleu D BlueCoat",
            "Bleu D dégradé BlueCoat",
            "Violet C Durci",
            "Violet C dégradé Durci",
            "Violet C HMC Face interne",
            "Violet C dégradé HMC Face interne",
            "Violet C HMC",
            "Violet C dégradé HMC",
            "Violet C Satin",
            "Violet C dégradé Satin",
            "Violet C Satin UV",
            "Violet C dégradé Satin UV",
            "Violet C BlueCoat",
            "Violet C dégradé BlueCoat",
            "Violet A Durci",
            "Violet A dégradé Durci",
            "Violet A HMC Face interne",
            "Violet A dégradé HMC Face interne",
            "Violet A HMC",
            "Violet A dégradé HMC",
            "Violet A Satin",
            "Violet A dégradé Satin",
            "Violet A Satin UV",
            "Violet A dégradé Satin UV",
            "Violet A BlueCoat",
            "Violet A dégradé BlueCoat",
            "Violet AB Durci",
            "Violet AB dégradé Durci",
            "Violet AB HMC Face interne",
            "Violet AB dégradé HMC Face interne",
            "Violet AB HMC",
            "Violet AB dégradé HMC",
            "Violet AB Satin",
            "Violet AB dégradé Satin",
            "Violet AB Satin UV",
            "Violet AB dégradé Satin UV",
            "Violet AB BlueCoat",
            "Violet AB dégradé BlueCoat",
            "Violet B Durci",
            "Violet B dégradé Durci",
            "Violet B HMC Face interne",
            "Violet B dégradé HMC Face interne",
            "Violet B HMC",
            "Violet B dégradé HMC",
            "Violet B Satin",
            "Violet B dégradé Satin",
            "Violet B Satin UV",
            "Violet B dégradé Satin UV",
            "Violet B BlueCoat",
            "Violet B dégradé BlueCoat",
            "Violet D Durci",
            "Violet D dégradé Durci",
            "Violet D HMC Face interne",
            "Violet D dégradé HMC Face interne",
            "Violet D HMC",
            "Violet D dégradé HMC",
            "Violet D Satin",
            "Violet D dégradé Satin",
            "Violet D Satin UV",
            "Violet D dégradé Satin UV",
            "Violet D BlueCoat",
            "Violet D dégradé BlueCoat",
            "Rose C Durci",
            "Rose C dégradé Durci",
            "Rose C HMC Face interne",
            "Rose C dégradé HMC Face interne",
            "Rose C HMC",
            "Rose C dégradé HMC",
            "Rose C Satin",
            "Rose C dégradé Satin",
            "Rose C Satin UV",
            "Rose C dégradé Satin UV",
            "Rose C BlueCoat",
            "Rose C dégradé BlueCoat",
            "Rose A Durci",
            "Rose A dégradé Durci",
            "Rose A HMC Face interne",
            "Rose A dégradé HMC Face interne",
            "Rose A HMC",
            "Rose A dégradé HMC",
            "Rose A Satin",
            "Rose A dégradé Satin",
            "Rose A Satin UV",
            "Rose A dégradé Satin UV",
            "Rose A BlueCoat",
            "Rose A dégradé BlueCoat",
            "Rose AB Durci",
            "Rose AB dégradé Durci",
            "Rose AB HMC Face interne",
            "Rose AB dégradé HMC Face interne",
            "Rose AB HMC",
            "Rose AB dégradé HMC",
            "Rose AB Satin",
            "Rose AB dégradé Satin",
            "Rose AB Satin UV",
            "Rose AB dégradé Satin UV",
            "Rose AB BlueCoat",
            "Rose AB dégradé BlueCoat",
            "Rose B Durci",
            "Rose B dégradé Durci",
            "Rose B HMC Face interne",
            "Rose B dégradé HMC Face interne",
            "Rose B HMC",
            "Rose B dégradé HMC",
            "Rose B Satin",
            "Rose B dégradé Satin",
            "Rose B Satin UV",
            "Rose B dégradé Satin UV",
            "Rose B BlueCoat",
            "Rose B dégradé BlueCoat",
            "Rose D Durci",
            "Rose D dégradé Durci",
            "Rose D HMC Face interne",
            "Rose D dégradé HMC Face interne",
            "Rose D HMC",
            "Rose D dégradé HMC",
            "Rose D Satin",
            "Rose D dégradé Satin",
            "Rose D Satin UV",
            "Rose D dégradé Satin UV",
            "Rose D BlueCoat",
            "Rose D dégradé BlueCoat",
            "Orange C Durci",
            "Orange C dégradé Durci",
            "Orange C HMC Face interne",
            "Orange C dégradé HMC Face interne",
            "Orange C HMC",
            "Orange C dégradé HMC",
            "Orange C Satin",
            "Orange C dégradé Satin",
            "Orange C Satin UV",
            "Orange C dégradé Satin UV",
            "Orange C BlueCoat",
            "Orange C dégradé BlueCoat",
            "Orange A Durci",
            "Orange A dégradé Durci",
            "Orange A HMC Face interne",
            "Orange A dégradé HMC Face interne",
            "Orange A HMC",
            "Orange A dégradé HMC",
            "Orange A Satin",
            "Orange A dégradé Satin",
            "Orange A Satin UV",
            "Orange A dégradé Satin UV",
            "Orange A BlueCoat",
            "Orange A dégradé BlueCoat",
            "Orange AB Durci",
            "Orange AB dégradé Durci",
            "Orange AB HMC Face interne",
            "Orange AB dégradé HMC Face interne",
            "Orange AB HMC",
            "Orange AB dégradé HMC",
            "Orange AB Satin",
            "Orange AB dégradé Satin",
            "Orange AB Satin UV",
            "Orange AB dégradé Satin UV",
            "Orange AB BlueCoat",
            "Orange AB dégradé BlueCoat",
            "Orange B Durci",
            "Orange B dégradé Durci",
            "Orange B HMC Face interne",
            "Orange B dégradé HMC Face interne",
            "Orange B HMC",
            "Orange B dégradé HMC",
            "Orange B Satin",
            "Orange B dégradé Satin",
            "Orange B Satin UV",
            "Orange B dégradé Satin UV",
            "Orange B BlueCoat",
            "Orange B dégradé BlueCoat",
            "Orange D Durci",
            "Orange D dégradé Durci",
            "Orange D HMC Face interne",
            "Orange D dégradé HMC Face interne",
            "Orange D HMC",
            "Orange D dégradé HMC",
            "Orange D Satin",
            "Orange D dégradé Satin",
            "Orange D Satin UV",
            "Orange D dégradé Satin UV",
            "Orange D BlueCoat",
            "Orange D dégradé BlueCoat",
            "Jaune C Durci",
            "Jaune C dégradé Durci",
            "Jaune C HMC Face interne",
            "Jaune C dégradé HMC Face interne",
            "Jaune C HMC",
            "Jaune C dégradé HMC",
            "Jaune C Satin",
            "Jaune C dégradé Satin",
            "Jaune C Satin UV",
            "Jaune C dégradé Satin UV",
            "Jaune C BlueCoat",
            "Jaune C dégradé BlueCoat",
            "Jaune A Durci",
            "Jaune A dégradé Durci",
            "Jaune A HMC Face interne",
            "Jaune A dégradé HMC Face interne",
            "Jaune A HMC",
            "Jaune A dégradé HMC",
            "Jaune A Satin",
            "Jaune A dégradé Satin",
            "Jaune A Satin UV",
            "Jaune A dégradé Satin UV",
            "Jaune A BlueCoat",
            "Jaune A dégradé BlueCoat",
            "Jaune AB Durci",
            "Jaune AB dégradé Durci",
            "Jaune AB HMC Face interne",
            "Jaune AB dégradé HMC Face interne",
            "Jaune AB HMC",
            "Jaune AB dégradé HMC",
            "Jaune AB Satin",
            "Jaune AB dégradé Satin",
            "Jaune AB Satin UV",
            "Jaune AB dégradé Satin UV",
            "Jaune AB BlueCoat",
            "Jaune AB dégradé BlueCoat",
            "Jaune B Durci",
            "Jaune B dégradé Durci",
            "Jaune B HMC Face interne",
            "Jaune B dégradé HMC Face interne",
            "Jaune B HMC",
            "Jaune B dégradé HMC",
            "Jaune B Satin",
            "Jaune B dégradé Satin",
            "Jaune B Satin UV",
            "Jaune B dégradé Satin UV",
            "Jaune B BlueCoat",
            "Jaune B dégradé BlueCoat",
            "Jaune D Durci",
            "Jaune D dégradé Durci",
            "Jaune D HMC Face interne",
            "Jaune D dégradé HMC Face interne",
            "Jaune D HMC",
            "Jaune D dégradé HMC",
            "Jaune D Satin",
            "Jaune D dégradé Satin",
            "Jaune D Satin UV",
            "Jaune D dégradé Satin UV",
            "Jaune D BlueCoat",
            "Jaune D dégradé BlueCoat"
        );


        if(!isset($_GET['start'])) {
            exit;
        }

        $indices = $this->db->query('SELECT * FROM indice_generation_verre ORDER BY id_generation_verre, id_indice_verre ASC');

        foreach($indices->result() as $indice) {

            $ordre = 0;

            $defender_verres = array();
            $compare_verres = array();
            $ordre_verres = array();

            $query = $this->db->query('SELECT * FROM verres WHERE id_generation_verre = '.$indice->id_generation_verre.' AND active = 1 AND id_indice_verre = '.$indice->id_indice_verre);
            $nom_verre = $this->db->query('SELECT generation_verre FROM generation_verre WHERE id_generation_verre = '.$indice->id_generation_verre);


            echo $nom_verre->result()[0]->generation_verre.'<br /><br />';

            // Tableau des verres en base
            foreach($query->result() as $result) {

                $verre = $result->libelle_verre;

                $verre = str_replace($nom_verre->result()[0]->generation_verre, '', $verre);

                $verre = trim($verre);

                $lib = explode(' ', $verre);
                $indice = $lib[0];
                unset($lib[0]);
                $verre = implode(' ', $lib);

                $compare_verres[$result->id_verre] = $verre;
                $indice_verres[$result->id_verre] = $indice;

            }


            // Comparaison avec verres de la liste pour en récupérer l'ordre
            foreach($verres as $k => $v) {


                $verre_ids = array_keys($compare_verres, $v);
                $defender_array = array();

                foreach($verre_ids as $vk => $vid) {

                    //echo ' - '.$vid;

                    $defender_verres[$ordre][] = array('id' => $vid, 'libelle' => $compare_verres[$vid]);
                    $verre_def = str_replace('BlueCoat', 'BlueCoat Defender', $compare_verres[$vid]);


                    // Si le verre existe aussi en defender, on l'ajoute à la suite
                    if(strpos($verre_def, 'BlueCoat Defender') !== false) {

                        if(in_array($verre_def, $compare_verres)) {

                            $def_id = array_search($verre_def, $compare_verres);

                            $indice_verres[$def_id] = $indice_verres[$vid];

                            unset($compare_verres[$def_id]);

                            $defender_array[] = array('id' => $def_id, 'libelle' => $verre_def);
                            //$defender_verres[$ordre] = array('id' => $def_id, 'libelle' => $verre_def);
                        }

                    }

                }


                ++$ordre;

                // Si changement de $k, on ajoute l'array des defender à la liste
                if(isset($defender_array)) {

                    foreach($defender_array as $dk => $dv) {
                        $defender_verres[$ordre][] = $dv;
                    }

                    ++$ordre;

                }



                //echo '<br />';

            }


            $loop = 0;

            while($loop < 100) {

                foreach (array_keys($defender_verres) as $key) {

                    if (isset($defender_verres[$key][$loop])) {

                        $ordre_verres[] = $defender_verres[$key][$loop]['id'].'#'.$defender_verres[$key][$loop]['libelle'];
                        unset($defender_verres[$key][$loop]);

                    }
                }

                reset($defender_verres);
                ++$loop;
            }



            $position = 0;


            // LOOP FINALE
            foreach($ordre_verres as $k => $v) {

                $verre = explode('#', $v);

                echo $indice_verres[$verre[0]].' '.$verre[1].' / Position '.$position;
                echo '<br/>';

                $this->db->where('id_verre', $verre[0])->update('verres', array('ordre_verre' => $position));

                ++$position;
            }
            

        }

    }


    public function test_facture() {

        $this->load->model('m_commande');
        $this->load->model('m_users');

        $date = date('m-Y', strtotime('last day of last month'));
        $dateY = date('Y-m', strtotime('last day of last month'));
        $datemonth = date('m', strtotime('last day of last month'));

        $facture_client = $this->m_commande->getAllCommandeByMonthAndUser($date);


        if($facture_client !== false){
            $generate_pdf = true;
            $data = array();

            $month = array('01' => 'Janvier','02' => 'Février', '03' => 'Mars', '04' => 'Avril', '05' => 'Mai', '06' => 'Juin',
                '07' => 'Juillet', '08' => 'Août', '09' => 'Septembre', '10' => 'Octobre', '11' => 'Novembre', '12' => 'Décembre');


            foreach($facture_client as $key => $facture_cli){
                $piece_jointe = $this->generer_pdf_facture('facture', $dateY ,$facture_cli->id_users,false);
                $piece_jointe = $this->config->item('directory_pdf')."/".$piece_jointe;
                $user = $this->m_users->getUserById($facture_cli->id_users);
                $data['email'] = $user[0]->email;
                $mess_txt = "<html><head></head><body>Madame, Monsieur <br><br> Vous trouverez en pièce jointe de ce mail votre facture du mois de ".$month[$datemonth].".<br><br> Sachez que vous pouvez à tout moment la télécharger dans votre espace client dans l'onglet \"Mes factures\". <br><br>L'équipe OptiEyes.</body></html>";
                $subjet_txt = "Facture Optieyes ".$month[$datemonth]." ".date('Y', strtotime('last day of last month'));
                $this->mail($data,$mess_txt,true,$subjet_txt,$piece_jointe);

                if(file_exists($piece_jointe))
                    unlink($piece_jointe);
            }
        }

    }

    public function index(){
        $data = $this->session->userdata('data_admin');
        $data['newUser'] = $this->session->userdata('newUser');
        $data['page'] = "Admin";
        $data['title'] = "Caisse journalière";

        $ca_journalier = $this->m_commande->getCaJournalier();
        $ca_journalier_sans_livraison = $this->m_commande->getCaJournalier(false);

        $ca_mensuel = $this->m_commande->CAMensuel(date("m-Y"));
        $ca_mensuel_sans_livraison = $this->m_commande->CAMensuel(date("m-Y"), false);


        $data['ca_journalier'] = $ca_journalier[0]->ca_journalier + $this->m_commande->getPackagingByDay(); //  - $this->m_commande->getSupplementByDay()
        $data['ca_mensuel'] =  $ca_mensuel + $this->m_commande->getPackagingByMonth(date("m-Y")); //  - $this->m_commande->getSupplementByMonth(date("m-Y"))
        $data['packaging_mois'] = $this->m_commande->getPackagingByMonth(date("m-Y"));

        $data['ca_journalier_sans_livraison'] = $ca_journalier_sans_livraison[0]->ca_journalier - $this->m_commande->getSupplementByDay();
        $data['supplement_jour'] = $this->m_commande->getSupplementByDay();
        $data['ca_mensuel_sans_livraison'] =  $ca_mensuel_sans_livraison - $this->m_commande->getSupplementByMonth(date("m-Y"));

        $data['firstorder'] = $this->m_commande->getCommandeById(1);

        $data['caByDay'] = $this->m_commande->getCaByDayOfMonth(date("Y-m"));
        $data['taux_tva'] = $this->session->userdata('taux_tva');
        
        
        $this->load->view('admin/dashboard',$data);
    }

    public function emails(){
        $data = $this->session->userdata('data_admin');
        $data['newUser'] = $this->session->userdata('newUser');
        $data['page'] = "mails";
        $data['title'] = "Envoi de mails";
        $data['modules'] = array('multiselect' => true, 'sweetalert' => true);

        $data['emails'] = $this->getUserMail();

        $data['caByDay'] = $this->m_commande->getCaByDayOfMonth(date("Y-m"));
        $data['taux_tva'] = $this->session->userdata('taux_tva');

        $this->load->view('admin/emails',$data);
    }

    public function statutCommentaire(){
        if($this->input->is_ajax_request()){
            $data = $this->input->post();

            $data['nom_config'] = 'commentaire';
            $data['param_config'] = json_encode(array('active' => $data['active']));

            $this->m_config->updateConfig($data);
        }
    }

    public function reduction_facture(){
        if($this->input->is_ajax_request()){
            $data = $this->input->post();
            $this->m_facture_reduction->reduction($data);

            echo number_format($data['totalFacture_reduct_facture'] - $data['reduction_facture'], 2, '.', '');
        }
    }

    public function getListReduction(){
        if($this->input->is_ajax_request()){
            $data['list_reduction']  = $this->m_facture_reduction->getListReduction($this->input->post());

            echo $this->load->view('admin/ajax_list_reduction',$data);
        }
    }

    public function delete_reduction(){
        if($this->input->is_ajax_request()){
            $data = $this->input->post();
            $this->m_facture_reduction->delete_reduction($data);

            echo number_format($data['reduction'] + $data['totalFacture'], 2, '.', '');
        }
    }

    public function delete_order(){
        if($this->input->is_ajax_request()){
            $this->m_commande->delete($this->input->post());
        }
    }

    public function getCaJournalierByMonth(){
        if($this->input->is_ajax_request()){
            sleep(1);
            $date = $this->input->post('date_ca_par_mois');
            $data['caByDay'] = $this->m_commande->getCaByDayOfMonth($date);
            $data['date'] = $date;

            echo $this->load->view('admin/ajax_ca_journalier',$data);
        }
    }

    public function checkNewOrder(){
        if($this->input->is_ajax_request()){
            $return = $this->m_commande->checkNewOrder();

            if($return === false)
                $return = "";

            die(json_encode(array('son' => $return)));
        }
    }

    public function valid_prelevement(){
        $this->session->set_userdata('newUser', false);

        $data['parametre_lang_datable'] = $this->config->item('parametre_lang_datable');
        $data['parametre_export_datable'] = $this->config->item('parametre_export_datable');
        $data['newUser'] = $this->session->userdata('newUser');
        $data['data_prelevement'] = $this->m_users->getUserValidPrelevement();

        $this->m_users->updateNewUser(array('nouveau' => 0));

        $data['page'] = "Validation Prélèvement";
        $this->load->view('admin/valid_prelevement',$data);
    }

    public function update_valid_document(){
        if($this->input->is_ajax_request()){
            $data = $this->input->post();
            $this->m_users->updateUser($data);

            if($data['send_email'] == 1){
                $mess_txt = "<html><head></head><body><b>Bonjour !</b><br><br> Votre RIB à été validé avec succès. Vous avez dès à présent la possibilité de passer commande.<br><br> A bientôt sur Optieyes !</body></html>";
                $sujet_txt = "Votre RIB est validé";
                $email = $this->m_users->getUserById($data['id_users']);
                $data['email'] = $email[0]->email;
                $this->mail($data,$mess_txt,true,$sujet_txt);
            }
        }
    }

    public function updateUser(){

        if($this->input->is_ajax_request()){
            
            $user = (int) $this->input->post('user');
            $info = $this->input->post();
            $errors = 0;

            foreach($info as $k => $v) {

                if($k == 'tarif_packaging') {
                    $this->m_commande->updatePackaging($user, $v);
                }

                if(!$this->m_users->updateUser(array('id_users' => $user, $k => $v))) {
                    ++$errors;
                }


            }

            $this->m_commande->updateBillsForMonth($user);

            echo $errors;

            exit;
            
        }
    }

    public function send_new_password() {

        if($this->input->is_ajax_request()){

            $user_id = (int) $this->input->post('user_id');
            $password = $this->input->post('password');

            $user = $this->m_users->getUserById($user_id);


            if($this->m_users->updateUser(array('id_users' => $user[0]->id_users, 'pass' => md5($user[0]->email.'&&'.$password)))){

                echo json_encode(array('status' => 'ok'));

                $mess_txt = "<html>
                    <head></head>
                    <body><b>Bonjour</b>!
                    <br><br> 
                    Votre mot de passe a été modifié. Voici votre nouveau mot de passe : <b>".$password."</b>, il vous permet de vous connecter au site, converservez le précieusement.
                    </body>
                </html>";

                $subjet_txt = "Votre nouveau mot de passe";

                $data['email'] = $user[0]->email;

                $this->mail($data,$mess_txt,true,$subjet_txt);


            }
            else {
                echo json_encode(array('status' => 'error'));
            }

        }

        exit();

    }


    public function modifier_tva(){
        if($this->input->is_ajax_request()){
            $data = $this->input->post();
            $data['nouveau_taux_tva'] = ($data['taux_tva']/100)+1;

            unset($data['taux_tva']);

            $this->m_taux_tva->update($data);
        }
    }

    public function valid_commande(){
        $data['newUser'] = $this->session->userdata('newUser');
        $data['parametre_lang_datable'] = $this->config->item('parametre_lang_datable');
        $data['parametre_export_datable'] = $this->config->item('parametre_export_datable');

        $result = $this->m_users->getMaxUser();
        $data['maxUser'] = $result[0]->maxUser;

        $data['page'] = $data['title'] = "Validation Commande";
        $data['modules'] = array(
            'datatables' => true,
            'datepicker' => true,
            'sweetalert' => true
        );
        $this->load->view('admin/valid_commande',$data);
    }

    public function valid_commande_ajax(){
        if($this->input->is_ajax_request()){


            $data = array();
            $data['aaData'] = array();
            $data_commande = $this->m_commande->getAllCommande();
            $data_etiquette =  $this->m_commande->getEtiquetteAlreadySet();

            if($data_commande !== false)
                foreach($data_commande as $key => $commande){
                    $d1 = new DateTime(date("Y-m-d H:i:s"));
                    $d2 = new DateTime(date('Y-m-d H:i:s', strtotime($commande->date_commande. ' + 6 days')));
                    $diff = $d1->diff($d2);
                    $color = "ff3237"; //rouge

                    if($diff->invert == 0){
                        if($diff->d >= 5)
                            $color = "80c3cb"; //bleu
                        elseif($diff->d == 4)
                            $color = "019e59"; //vert
                        elseif($diff->d == 3 || $diff->d == 2)
                            $color = "ffcc01"; //jaune
                        elseif($diff->d == 1)
                            $color = "ff7638"; //orange
                    }


                    $correction = json_decode($commande->information_commande,true);

                    $commande_verres = '';
                    $cl= '';

                    if(isset($correction['verre']['correction_droit'])) $commande_verres .= 'd';
                    if(isset($correction['verre']['correction_gauche'])) $commande_verres .= 'g';

                    if($data_etiquette !== false && (isset($data_etiquette[$commande->id_commande]['droit']) || isset($data_etiquette[$commande->id_commande]['gauche'])))
                        $cl = ' is_checked';

                    switch($commande->type_commande) {

                        case 1:
                            $prix_commande = $commande->total_commande.' €';
                            break;

                        case 2:
                            $prix_commande = '<del>'.$commande->total_commande.'</del> 0 €<br />Casse atelier';
                            break;

                        case 3:
                            $prix_commande = '<del>'.$commande->total_commande.'</del> 0 €<br />Erreur ophta';
                            break;
                    }

                    if($commande->ancienne_commande > 0 && $commande->type_commande > 1) {
                        $ancienne_commande = '<br />(CR'.$commande->ancienne_commande.'-'.$commande->id_users.')<br /><a class="btn btn-danger btn-sm compare_commande" data-toggle="modal" data-target="#compare-commandes" rel="'.$commande->id_commande.'">Comparer</a>';
                    }
                    else {
                        $ancienne_commande = '';
                    }

                    $data['aaData'][$key] =
                        array(
                            '<a class="commande-info btn btn-icon waves-effect waves-light '.(!empty($commande->commentaire) ? 'btn-warning tooltipster' : 'btn-inverse').'" data-toggle="modal" data-target="#detail-commande" rel="' . $commande->id_commande . '" ' . (!empty($commande->commentaire) ? 'original-title="' . htmlentities($commande->commentaire) . '" title="'.htmlentities($commande->commentaire).'"' : '') . ' ><i class="zmdi zmdi-'.(!empty($commande->commentaire) ? 'comment' : 'search').'"></i> Voir</a>',
                            'CR'.$commande->id_commande.'-'.$commande->id_users.$ancienne_commande,
                            $commande->intitule_bl.'<br /><a class="btn btn-inverse btn-sm" id="button_nouvel_intitule_'.$commande->id_commande.'_'.$commande->id_users.'" data-toggle="modal" data-target="#edit-bl"><i class="zmdi zmdi-edit"></i></a> <a href="/admin/generer_pdf/bon_livraison/'.$commande->id_commande.'" class="btn btn-warning btn-sm"><i class="zmdi zmdi-download"></i></a>',
                            date('d/m/Y H:i', strtotime($commande->date_commande)),
                            $commande->reference_client,
                            '<span style="color:#'.$color.'" id="libelle_etat_commande_'.$commande->id_commande.'">'.$commande->libelle_etat_commande.' ('.$commande->id_etat_commande.'/6)</span>',
                            $prix_commande,
                            /*'<div class="checkbox"><input type="checkbox" id="expedier_'.$commande->id_commande.'_'.$commande->id_users.'" name="expedier_'.$commande->id_commande.'_'.$commande->id_users.'" /><label>'.($commande->date_annule !== null ? date('d/m/Y', strtotime($commande->date_annule)) : '').'</label></div>',
                            '<a class="btn btn-default btn-sm" href="#" id="deleteOrder_'.$commande->id_commande.'" ><i class="zmdi zmdi-close"></i></a>',
                            */'<div class="checkbox checkbox-success checkbox-inline"><input type="checkbox" value="'.(!empty($commande->date_pointage) ? 1 : 0 ).'" id="pointage_'.$commande->id_commande.'" name="pointage_'.$commande->id_commande.'" '.(!empty($commande->date_pointage) ? 'checked' : '').'/><label for="pointage_'.$commande->id_commande.'" id="pointage_date_'.$commande->id_commande.'">'.(!empty($commande->date_pointage) ? date("d-m-Y",strtotime($commande->date_pointage)) : "").'</label></div>',
                            '<a class="m-b-5 btn btn-danger btn-sm btn-block valid_commande'.$cl.'" data-commande="'.$commande->id_commande.'" data-verres="'.$commande_verres.'">Check</a>'.(isset($correction['verre']['correction_droit']) ? 'D' : '').(isset($correction['verre']['correction_gauche']) ? 'G' : '').(!empty($commande->information_certificat) ? '<span class="certif_ico">C</span>' : '' ).($commande->date_annule !== null ? '<span class="highlight-yellow">'.date('d/m/Y', strtotime($commande->date_annule)).'</span>' : ''),
                            $commande->type_commande,
                            ($commande->date_annule !== null ? 1 : 0)
                        );
                }
            die(json_encode($data));
        }
        else
            $this->redirect("/index");
    }

    public function compareCommande($id_commande = false){
        if(is_numeric($id_commande)){

            $data['newUser'] = $this->session->userdata('newUser');
            $data['parametre_lang_datable'] = $this->config->item('parametre_lang_datable');
            $data['parametre_export_datable'] = $this->config->item('parametre_export_datable');
            $data['page'] = "Commande N°".$id_commande;
            $data['recap_commande'] = $this->m_commande->getCommandeById($id_commande);
            $data['ancienne_commande'] = $this->m_commande->getCommandeById($data['recap_commande'][0]->ancienne_commande);
            $this->load->view('admin/compare_commande',$data);

        }
    }

    public function valid_commande_stock(){
        $data['newUser'] = $this->session->userdata('newUser');
        $data['parametre_lang_datable'] = $this->config->item('parametre_lang_datable');
        $data['parametre_export_datable'] = $this->config->item('parametre_export_datable');

        $data['page'] = $data['title'] = "Validation Commande";
        $data['modules'] = array(
            'datatables' => true,
            'datepicker' => true,
            'sweetalert' => true
        );
        $this->load->view('admin/valid_commande_stock',$data);
    }

    public function valid_commande_stock_ajax(){
        if($this->input->is_ajax_request()){
            $data = array();
            $data['aaData'] = array();
            $data_commande = $this->m_commande->getAllCommande(false,2);
            $data_etiquette =  $this->m_commande->getEtiquetteAlreadySet();
   
            $options_miroir = array(1 => 'Miroir Bleu', 2 => 'Miroir Argent', 3 => 'Miroir Doré', 4 => 'Miroir Vert', 5 => 'Miroir Rouge', 6 => 'Miroir Orange', 7 => 'Miroir Rose' ,8 => 'Miroir Violet', 9 => 'Miroir Jaune');


            $compteur = 0;
            if($data_commande !== false)
                foreach($data_commande as $key => $commande){
                    $correction = json_decode($commande->information_commande,true);
                    $data_correction = "";
                    $noFoundRight = $noFoundLeft = false;

                    $photochromie = isset($correction['verre']['photocromie']) ? $correction['verre']['photocromie'] : 'Non Photocromique';
                    $teinte = isset($correction['verre']['teinte']) ? $correction['verre']['teinte'] : 'Non Teinté';

                    if(isset($_GET['traitement']) && $_GET['traitement']!="all" && $_GET['traitement'] != $correction['verre']['traitement'])
                        continue;

                    if(isset($_GET['indice']) && $_GET['indice'] != $commande->indice_verre)
                        continue;

                    if(isset($_GET['photochromie']) && $_GET['photochromie']!="all")
                        if($_GET['photochromie'] == "Non Photocromique" && $photochromie!="Non Photocromique")
                            continue;
                        elseif($_GET['photochromie'] != "Non Photocromique" && $_GET['photochromie'] != $photochromie)
                            continue;

                    if(isset($_GET['teinte']) && $_GET['teinte'] != "Non Teinté" && $_GET['teinte'] != $teinte)
                        continue;
                    elseif(isset($_GET['teinte']) && $_GET['teinte'] == "Non Teinté" && ($teinte == "G15 C" || $teinte == "Gris C" || $teinte == "Brun C"))
                        continue;

                    if(isset($_GET['diametre']) && $_GET['diametre'] != "Pas de diamètre" && $_GET['diametre'] != $correction['verre']['diametre'])
                        continue;


                    if(isset($correction['verre']['correction_droit'])){
                        $data_correction .= "OD : ".$correction['verre']['correction_droit']['sphere']."(".$correction['verre']['correction_droit']['cylindre'].")<br>";

                        if(isset($_GET['sphere']) && $_GET['sphere'] != $correction['verre']['correction_droit']['sphere'])
                            $noFoundRight = true;

                        if(isset($_GET['cylindre']) && $_GET['cylindre'] != $correction['verre']['correction_droit']['cylindre'])
                            $noFoundRight = true;
                    }

                    if(isset($correction['verre']['correction_gauche'])){
                        $data_correction .= "OG : ".$correction['verre']['correction_gauche']['sphere']."(".$correction['verre']['correction_gauche']['cylindre'].")<br>";

                        if(isset($_GET['sphere']) && $_GET['sphere'] != $correction['verre']['correction_gauche']['sphere'])
                            $noFoundLeft = true;

                        if(isset($_GET['cylindre']) && $_GET['cylindre'] != $correction['verre']['correction_gauche']['cylindre'])
                            $noFoundLeft = true;
                    }

                    if(($noFoundRight && $noFoundLeft) || ($noFoundLeft && !isset($correction['verre']['correction_droit'])) || ($noFoundRight && !isset($correction['verre']['correction_gauche'])))
                        continue;

                    $dep = substr($commande->cp, 0, -3);

                    if($teinte == "Brun C"){
                        $teinte = '<span style="color:#BD8D46">'.$teinte.'</span>';
                    }

                    if($teinte == "Gris C"){
                        $teinte = '<span style="color:#9E9E9E">'.$teinte.'</span>';
                    }

                    if($teinte == "G15 C"){
                        $teinte = '<span style="color:#096A09">'.$teinte.'</span>';
                    }

                    if($teinte == "Bleu nuit C"){
                        $teinte = '<span style="color:#0F056B">'.$teinte.'</span>';
                    }

                    $commande_verres = '';
                    $cl= '';

                    if(isset($correction['verre']['correction_droit'])) $commande_verres .= 'd';
                    if(isset($correction['verre']['correction_gauche'])) $commande_verres .= 'g';

                    if($data_etiquette !== false && (isset($data_etiquette[$commande->id_commande]['droit']) || isset($data_etiquette[$commande->id_commande]['gauche']))) {
                        $cl = ' is_checked';
                    }

                    // isset($correction['verre']['miroir_stock']) ||
                    // + dans 9eme ligne array $data['aaData'][$compteur]
                    if($commande->indice_verre == '1.76 (délais : 10 jours ouvrés)' || $commande->indice_verre == '1.74' || $correction['verre']['traitement'] == "BlueCoat" || $correction['verre']['traitement'] == "BlueCoat Defender" || isset($correction['verre']['polarise'])) {
                        $traitement = '<a class="m-b-5 btn btn-danger btn-sm btn-block valid_commande'.$cl.'" data-commande="'.$commande->id_commande.'" data-verres="'.$commande_verres.'">Check</a>'.(isset($correction['verre']['correction_droit']) ? 'D' : '').(isset($correction['verre']['correction_gauche']) ? 'G' : '');
                    }

                    else {
                        $traitement = (isset($correction['verre']['correction_droit']) ? '<div class="checkbox checkbox-success"><input type="checkbox" value="" name="verre_droit_'.$commande->id_commande.'" id="verre_droit_'.$commande->id_commande.'" '.($data_etiquette !== false && isset($data_etiquette[$commande->id_commande]['droit']) ? 'checked' : '').' /> <label for="verre_droit_'.$commande->id_commande.'">Droit</label> </div>' : '').(isset($correction['verre']['correction_gauche']) ? '<div class="checkbox checkbox-success"><input type="checkbox" value="" name="verre_gauche_'.$commande->id_commande.'" id="verre_gauche_'.$commande->id_commande.'" '.($data_etiquette !== false && isset($data_etiquette[$commande->id_commande]['gauche']) ? 'checked' : '').' /> <label for="verre_gauche_'.$commande->id_commande.'">Gauche</label></div>' : '');
                    }


                    switch($commande->type_commande) {

                        case 1:
                            $prix_commande = $commande->total_commande.' €';
                            break;

                        case 2:
                            $prix_commande = '<del>'.$commande->total_commande.'</del> 0 €<br />Casse atelier';
                            break;

                        case 3:
                            $prix_commande = '<del>'.$commande->total_commande.'</del> 0 €<br />Erreur ophta';
                            break;

                    }

                    if($commande->ancienne_commande > 0 && $commande->type_commande > 1) {
                        $ancienne_commande = '<br />(CR'.$commande->ancienne_commande.'-'.$commande->id_users.')<br /><a class="btn btn-danger btn-sm compare_commande" data-toggle="modal" data-target="#compare-commandes" rel="'.$commande->id_commande.'">Comparer</a>';
                    }
                    else {
                        $ancienne_commande = '';
                    }


                    $data['aaData'][$compteur] =
                        array(
                            '<a class="commande-info btn btn-icon waves-effect waves-light '.(!empty($commande->commentaire) ? 'btn-warning tooltipster' : 'btn-inverse').'" data-toggle="modal" data-target="#detail-commande" rel="' . $commande->id_commande . '" ' . (!empty($commande->commentaire) ? 'original-title="' . htmlentities($commande->commentaire) . '" title="'.htmlentities($commande->commentaire).'"' : '') . ' ><i class="zmdi zmdi-'.(!empty($commande->commentaire) ? 'comment' : 'search').'"></i> Voir</a>',
                            'CR'.$commande->id_commande.'-'.$commande->id_users.$ancienne_commande,
                            $commande->intitule_bl.'<br /><a class="btn btn-inverse btn-sm" id="button_nouvel_intitule_'.$commande->id_commande.'_'.$commande->id_users.'" data-toggle="modal" data-target="#edit-bl"><i class="zmdi zmdi-edit"></i></a> <a href="/admin/generer_pdf/bon_livraison/'.$commande->id_commande.'" class="btn btn-warning btn-sm"><i class="zmdi zmdi-download"></i></a>',
                            date('d/m/Y H:i', strtotime($commande->date_commande)),
                            $commande->reference_client,
                            $teinte,
                            $prix_commande,
                            '<div class="checkbox checkbox-success checkbox-inline"><input type="checkbox" id="expedier_'.$commande->id_commande.'_'.$commande->id_users.'" name="expedier_'.$commande->id_commande.'_'.$commande->id_users.'" /> <label for="expedier_'.$commande->id_commande.'_'.$commande->id_users.'" id="exp_'.$commande->id_commande.'_'.$commande->id_users.'">'.($commande->date_annule !== null ? date('d/m/Y', strtotime($commande->date_annule)) : '').'</label></div>',
                            ( ($commande->indice_verre == '1.76 (délais : 10 jours ouvrés)' || $commande->indice_verre == '1.74' || $correction['verre']['traitement'] == "BlueCoat" || $correction['verre']['traitement'] == "BlueCoat Defender" || isset($correction['verre']['polarise']) ) ? '<div class="checkbox checkbox-success checkbox-inline"><input type="checkbox" value="'.(!empty($commande->date_pointage) ? 1 : 0 ).'" id="pointage_'.$commande->id_commande.'" name="pointage_'.$commande->id_commande.'" '.(!empty($commande->date_pointage) ? 'checked' : '').'/><label for="pointage_'.$commande->id_commande.'" id="pointage_date_'.$commande->id_commande.'">'.(!empty($commande->date_pointage) ? date("d-m-Y",strtotime($commande->date_pointage)) : "") : '').'</label></div>',
                            $traitement,
                            $commande->type_commande,
                            ($commande->date_annule !== null ? 1 : 0)
                        );

                    $compteur++;
                }
            die(json_encode($data));
        }
        else
            $this->redirect("/index");
    }

    public function update_bl() {

        if($this->input->is_ajax_request()) {

            $data = $this->input->post();

            list($day,$month,$year) = explode("/",$data['date_bl']);
            $date = $year."-".$month."-".$day." 00:00:00";
            $data['date_bl'] = $date;

            $intitule = substr($year,2,2).$month.$day;

            $max_intitule = $this->m_commande->getNbIntituleBl($intitule);

            $data['id_commande'] = $data['id_nouvelle_date_bl'];
            $data['id_users'] = $data['id_users_nouveau_bl'];

            unset($data['id_nouvelle_date_bl']);
            unset($data['id_users_nouveau_bl']);


            if(!empty($max_intitule[0]->IntituleBL)){
                $data['intitule_bl'] = $max_intitule[0]->IntituleBL + 1;
            } else {
                $data['intitule_bl'] = $intitule.'001';
            }


            if($data['libelle_quantite_lentille_droit'] != '' && $data['libelle_quantite_lentille_gauche'] != ''){
                $data['quantite_type_optique'] = json_encode(array('quantite_droit' => $data['libelle_quantite_lentille_droit'], 'quantite_gauche' => $data['libelle_quantite_lentille_gauche']));
            } else {
                $data['quantite_type_optique'] = $data['intitule_type_optique'] = NULL;
                $data['type_optique'] = "verre";

            }

            unset($data['libelle_quantite_lentille_droit']);
            unset($data['libelle_quantite_lentille_gauche']);



            $this->m_commande->nouvelle_date_bl($data);


            $user = $this->m_users->getUserById($data['id_users']);
            $data['email'] = $user[0]->email;

            $piece_jointe = $this->config->item('directory_pdf')."/".$this->generer_pdf('bon_livraison',$data['id_commande'],true);

            $user = $this->m_users->getUserById(1);
            $data['email_cc'] = $user[0]->email;

            $mess_txt = "<html>
                        <head></head>
                        <body>
                        Madame, Monsieur,<br><br><br>
                        Ci joint le bon de livraison demandé.<br><br>
                        Nous vous rappelons que celui ci peut être téléchargé et imprimé à tout moment dans votre espace client, dans la rubrique « mes bon de livraisons »<br><br><br>
                        A bientôt chez Optieyes !<br><br>
                        L'équipe.                   
                        </body>
                      </html>";

            $subjet_txt = 'Demande de bon de livraison n° '. $data['intitule_bl'];
            $html = true;

            $this->mail($data,$mess_txt,$html,$subjet_txt,$piece_jointe);

            if(is_file($piece_jointe))
                unlink($piece_jointe);

            $this->m_commande->delete($data);

            echo 'sent';

        }


    }

    public function nouvelle_date_bl(){
        if($this->input->is_ajax_request()){
            $data = $this->input->post();

            list($day,$month,$year) = explode("/",$data['date_bl']);
            $date = $year."-".$month."-".$day." 00:00:00";
            $data['date_bl'] = $date;

            $intitule = substr($year,2,2).$month.$day;

            $max_intitule = $this->m_commande->getNbIntituleBl($intitule);

            if(!empty($max_intitule[0]->IntituleBL)){
                $data['intitule_bl'] = $max_intitule[0]->IntituleBL + 1;
            } else {
                $data['intitule_bl'] = $intitule.'001';
            }

            if(isset($data['libelle_quantite_lentille_droit']) && isset($data['libelle_quantite_lentille_gauche'])){
                $data['quantite_type_optique'] = json_encode(array('quantite_droit' => $data['libelle_quantite_lentille_droit'], 'quantite_gauche' => $data['libelle_quantite_lentille_gauche']));

                unset($data['libelle_quantite_lentille_droit']);
                unset($data['libelle_quantite_lentille_gauche']);
            } else {
                $data['quantite_type_optique'] = $data['intitule_type_optique'] = NULL;
                $data['type_optique'] = "verre";

            }

            $this->m_commande->nouvelle_date_bl($data);
        }
    }

    public function send_nouveau_bl(){
        if($this->input->is_ajax_request()){
            $data = $this->input->post();

            $user = $this->m_users->getUserById($data['id_users']);
            $data['email'] = $user[0]->email;

            $piece_jointe = $this->config->item('directory_pdf')."/".$this->generer_pdf('bon_livraison',$data['id_commande'],true);

            $user = $this->m_users->getUserById(1);
            $data['email_cc'] = $user[0]->email;

            $mess_txt = "<html>
                        <head></head>
                        <body>
                        Madame, Monsieur,<br><br><br>
                        Ci joint le bon de livraison demandé.<br><br>
                        Nous vous rappelons que celui ci peut être téléchargé et imprimé à tout moment dans votre espace client, dans la rubrique « mes bon de livraisons »<br><br><br>
                        A bientôt chez Optieyes !<br><br>
                        L'équipe.                   
                        </body>
                      </html>";

            $subjet_txt = "Votre demande de bon de livraison.";
            $html = true;

            $this->mail($data,$mess_txt,$html,$subjet_txt,$piece_jointe);

            if(is_file($piece_jointe))
                unlink($piece_jointe);

            $this->m_commande->delete($data);
        }
    }

    public function ajouter_etiquette(){
        if($this->input->is_ajax_request()){
            $this->m_commande->ajouter_etiquette($this->input->post());
        }
    }

    public function commande($id_commande = false){
        if(is_numeric($id_commande)){
            $data['newUser'] = $this->session->userdata('newUser');
            $data['parametre_lang_datable'] = $this->config->item('parametre_lang_datable');
            $data['parametre_export_datable'] = $this->config->item('parametre_export_datable');
            $data['page'] = "Commande N°".$id_commande;
            $data['recap_commande'] = $this->m_commande->getCommandeById($id_commande);
            $this->load->view('admin/commande',$data);
        } else {
            $this->redirect('/admin');
        }
    }

    public function commande_details(){
        if($this->input->is_ajax_request()) {

            $id_commande = (int) $this->input->post('id');
            $data['newUser'] = $this->session->userdata('newUser');
            $data['parametre_lang_datable'] = $this->config->item('parametre_lang_datable');
            $data['parametre_export_datable'] = $this->config->item('parametre_export_datable');
            $data['page'] = "Commande N°" . $id_commande;
            $data['recap_commande'] = $this->m_commande->getCommandeById($id_commande);
            $data['user'] = $this->m_users->getUserById($data['recap_commande'][0]->id_users);
            $this->load->view('admin/layout/commande-detail', $data);
        }

    }

    public function generer_etiquette(){
        $post = $this->input->post();

        $etiquettes = $data['etiquette'] = $this->m_commande->getEtiquette();
        $data['colonne'] = $post['colonne'];
        $data['ligne'] = $post['ligne'];

        $data['email'] = 'optieyescommande@gmail.com';
        $data['email_cc'] = 'testproxicom@gmail.com';



        // Contrôle du nombres d'étiquettes.. Ouai

        $total['etiquettes'] = count($data['etiquette']);

        $data['control'] = array(
            'etiquettes' => bin2hex(openssl_random_pseudo_bytes(10)),
        );

        $this->db->insert('controle', array(
            'id' => $data['control']['etiquettes'],
            'control' => $total['etiquettes']
        ));



        // Génération des PDF
        $docs = array(
            'etiquettes' => $this->config->item('directory_pdf').'/'.$this->pdf("etiquette",$data,"",false),
        );

        $commandes = array();

        if(!empty($etiquettes)) {

            foreach($etiquettes as $e) {
                $commandes[$e->id_commande] = 1;
            }


            // Récupération des contrôles
            foreach($data['control'] as $k => $v) {

                $get = $this->db->select('value')->where('id', $v)->get('controle')->result();
                $gen[$k] = $get[0]->value;

                if($gen[$k] != $total[$k]) {
                    $c[$k] = '#ff0000';
                }
                else {
                    $c[$k] = '#93C02C';
                }

            }

            reset($data['control']);


            $mess_txt = '<b style="font-size: 16px">Rapport de génération</b><br /><br />
            - Nombre de commandes : <b>'.count($commandes).'</b><br />
            - Nombre d\'étiquettes générées : <b style="color: '.$c['etiquettes'].'">'.($gen['etiquettes'] != '' ? $gen['etiquettes'] : 0).' / '.$total['etiquettes'].'</b><br />
            ';

            foreach($data['control'] as $k => $v) {
                $this->db->delete('controle', array('id' => $v));
            }

            $sujet_txt = 'Etiquettes stock générées le '.date('d/m/Y').' - '.date('H\hi');


            $this->mail($data,$mess_txt,true,$sujet_txt,$docs);
            echo 'sent';

        }
        else {
            echo 'empty';
        }


    }

    public function generer_etiquette_fabrication(){

        $post = $this->input->post();

        $etiquettes = $data['etiquette'] = $this->m_commande->getEtiquetteFabrication();
        $data['colonne'] = $post['colonne'];
        $data['ligne'] = $post['ligne'];

        $data['email'] = 'optieyescommande@gmail.com';
        $data['email_cc'] = 'testproxicom@gmail.com';

        $data['certificat'] = $this->m_commande->getCertificat();



        // Contrôle du nombres d'étiquettes.. Ouai

        $total['etiquettes'] = count($data['etiquette']);
        $total['certificat'] = count($data['certificat']);

        $data['control'] = array(
            'etiquettes' => bin2hex(openssl_random_pseudo_bytes(10)),
            'certificat' => bin2hex(openssl_random_pseudo_bytes(10))
        );

        $this->db->insert('controle', array(
            'id' => $data['control']['etiquettes'],
            'control' => $total['etiquettes']
        ));


        $this->db->insert('controle', array(
            'id' => $data['control']['certificat'],
            'control' => count($data['certificat'])
        ));


        // Génération des PDF
        $docs = array(
            'etiquettes' => $this->config->item('directory_pdf').'/'.$this->pdf("etiquette_fabrication",$data,"",false),
            'certificat' => $this->config->item('directory_pdf').'/'.$this->pdf('certificat_authenticite', $data, '', false, 'paysage', $customsize = array(0,0,243,153))
        );

        $commandes = array();

        if(!empty($etiquettes)) {

            foreach($etiquettes as $e) {
                $commandes[$e->id_commande] = 1;
            }


            // Récupération des contrôles
            foreach($data['control'] as $k => $v) {

                $get = $this->db->select('value')->where('id', $v)->get('controle')->result();
                $gen[$k] = $get[0]->value;

                if($gen[$k] != $total[$k]) {
                    $c[$k] = '#ff0000';
                }
                else {
                    $c[$k] = '#93C02C';
                }

            }

            reset($data['control']);


            $mess_txt = '<b style="font-size: 16px">Rapport de génération</b><br /><br />
            - Nombre de commandes : <b>'.count($commandes).'</b><br />
            - Nombre d\'étiquettes générées : <b style="color: '.$c['etiquettes'].'">'.($gen['etiquettes'] != '' ? $gen['etiquettes'] : 0).' / '.$total['etiquettes'].'</b><br />
            - Nombre de certificats générées : <b style="color: '.$c['certificat'].'">'.($gen['certificat'] != '' ? $gen['certificat'] : 0).' / '.$total['certificat'].'</b><br />
            ';

            foreach($data['control'] as $k => $v) {
                $this->db->delete('controle', array('id' => $v));
            }

            $sujet_txt = 'Etiquettes fabrication générées le '.date('d/m/Y').' - '.date('H\hi');


            $this->mail($data,$mess_txt,true,$sujet_txt,$docs);
            echo 'sent';

        }
        else {
            echo 'empty';
        }



    }

    public function expedier_commandes($type_commande = 1) {

        if($this->input->is_ajax_request()) {

            $commandes = $this->m_commande->getUpdateCommande($type_commande);
            $expedie = array();

            foreach ($commandes as $commande) {

                $expedie[] = $commande->id_commande;
                $this->update_commande($commande->id_commande, 6, $commande->id_users, true);

            }

            echo 'sent';

        }
    }

    public function get_update_commande($type_commande = 1) {

        $commandes = $this->m_commande->getUpdateCommande($type_commande);

        if(is_array($commandes))
            echo count($commandes);

        else echo 0;

    }

    public function get_pointage_count() {

        $commandes = $this->m_commande->getPointageCount();

        if(is_array($commandes))
            echo $commandes[0]->total;

        else echo 0;

    }

    public function update_commande($id_commande = null, $id_etat_commande = 6, $id_users = null, $is_multi = false){
        if($this->input->is_ajax_request()){

            if($is_multi) {
                $post = array(
                    'id_commande' => $id_commande,
                    'id_etat_commande' => $id_etat_commande,
                    'id_users' => $id_users
                );
            }
            else {
                $post = $this->input->post();
            }

            $post['date_update_commande'] = date("Y-m-d H:i:s");

            /*if(isset($post['id_etat_commande']) && $post['id_etat_commande'] == 6){
              $post['email_send'] = 1;
            }*/

            $data = $this->m_commande->update($post);

            $email = $this->m_users->getUserById($data['id_users']);
            $reference = $this->m_commande->getCommandeById($data['id_commande']);
            $data['email'] = $email[0]->email;

            $mess_txt = "<html><head></head><body><b>Bonjour !</b><br><br> La commande sous la référence \"".$reference[0]->reference_client."\" vient de vous être expédiée ! <br><br> A bientôt chez Optieyes !</body></html>";
            $sujet_txt = "Commande N°".$data['id_commande'].' - Ref '.$reference[0]->reference_client.' expédiée';

            $this->mail($data,$mess_txt,true,$sujet_txt);
            $this->m_commande->deletePointage($data['id_commande']);

            //echo date("d/m/Y H:i:s",strtotime($data['date_update_commande']));

        }
    }

    public function email_retard() {

        if($this->input->is_ajax_request()){

            $commandes = $this->m_commande->getCommandeRetard();

            $message = '<html><head></head><body><b>Hi Adi,</b><br><br> Where are these orders ? <br /><br />';

            $orders = array();

            if($commandes) {
                foreach ($commandes as $c) {

                    $correction = json_decode($c->information_commande, true);

                    if($c->id_type_generation_verre == 5 && ($c->id_indice_verre == 7 || $c->id_indice_verre == 6 || $correction['verre']['traitement'] == "BlueCoat" || $correction['verre']['traitement'] == "BlueCoat Defender" || isset($correction['verre']['polarise']))) {
                        $type = 'stock';
                    }
                    else {
                        $type = 'fabric';
                    }

                    $orders[$type][] = $c->id_commande . '-' . $c->id_users.' from '.date('Y-m-d', strtotime($c->date_commande));
                }
            }

            if(isset($orders['fabric'])) {
                $message .= '<b>RX Lenses :</b><br />'.PHP_EOL;
                foreach($orders['fabric'] as $f) {
                    $message .= $f.'<br />';
                }

                $message .= '<br />';
            }

            if(isset($orders['stock'])) {
                $message .= '<b>Stock Lenses :</b><br />'.PHP_EOL;
                foreach($orders['stock'] as $s) {
                    $message .= $s.'<br />';
                }
            }

            $data['email'] = 'adi@crystal-optic.com';
            $data['email_cci'] = 'optieyescommande@gmail.com';
            $data['reply_to'] = 'crystalcommande@gmail.com';

            $title = 'Order status ?';

            if($this->mail($data, $message, true, $title)) {
                echo 'ok';
            }


        }

    }

    public function annule_envoi(){
        if($this->input->is_ajax_request()){
            $post = $this->input->post();
            $post['date_annule'] = date('Y-m-d H:i:s');

            $this->m_commande->update($post);
        }
    }

    public function pointage(){
        if($this->input->is_ajax_request()){
            $post = $this->input->post();
            if($post['pointage'] == 1){
                $this->m_commande->addPointage($post['id_commande']);

                echo date("d/m/Y");
            }else{
                $this->m_commande->deletePointage($post['id_commande']);
            }
        }
    }

    public function ancienne_commande(){
        $data['parametre_lang_datable'] = $this->config->item('parametre_lang_datable');
        $data['parametre_export_datable'] = $this->config->item('parametre_export_datable');
        $data['page'] = "Ancienne commande";
        $data['title'] = 'Commandes expediées';
        $data['modules'] = array('datatables' => true);


        $result = $this->m_users->getMaxUser();

        $data['maxUser'] = $result[0]->maxUser;

        $this->load->view('admin/ancienne_commande',$data);
    }

    public function ancienne_commande_ajax(){
        if($this->input->is_ajax_request()){
            $data = array();
            $data['aaData'] = array();

            $id_users = false;
            if(isset($_GET['id_users']) && $_GET['id_users'] !="Tous"){
                $id_users = $_GET['id_users'];
            }

            $start = (isset($_GET['start']) ? $_GET['start'] : 0);
            $length = (isset($_GET['length']) ? $_GET['length'] : 100);
            $search = (isset($_GET['search']['value']) ? $_GET['search']['value'] : '');


            $data_commande = $this->m_commande->getOldOrder($start, $length, $search, $id_users);

            $data['recordsTotal'] = $this->m_commande->countAllCommande()[0]->total;
            $data['recordsFiltered'] = $this->m_commande->countAllCommande($id_users, $search)[0]->total;

            if($data_commande !== false){


                foreach($data_commande['results'] as $key => $commande){
                    $d1 = new DateTime($commande->date_commande);
                    $d2 = new DateTime($commande->date_update_commande);
                    $diff = $d1->diff($d2);

                    $data['aaData'][$key] =
                        array(
                            $commande->nom_magasin,
                            $commande->id_users,
                            'CR'.$commande->id_commande.'-'.$commande->id_users,
                            date('d/m/Y H:i', strtotime($commande->date_commande)),
                            date('d/m/Y H:i', strtotime($commande->date_update_commande)),
                            $diff->days,
                            $commande->reference_client,
                            '<a href="/admin/generer_pdf/bon_livraison/'.$commande->id_commande.'" class="btn btn-warning" original-title="Télécharger le PDF" data-gravity="s" data-anim="true"><i class="zmdi zmdi-download"></i></a>',
                            '<a class="commande-info btn btn-icon waves-effect waves-light '.(!empty($commande->commentaire) ? 'btn-warning tooltipster' : 'btn-inverse').'" data-toggle="modal" data-target="#detail-commande" rel="' . $commande->id_commande . '" ' . (!empty($commande->commentaire) ? 'original-title="' . htmlentities($commande->commentaire) . '" title="'.htmlentities($commande->commentaire).'"' : '') . ' ><i class="zmdi zmdi-'.(!empty($commande->commentaire) ? 'comment' : 'search').'"></i> Voir</a>',
                            '<button id="annule_envoi_'.$commande->id_commande.'" aria-disabled="false" role="button" class="btn btn-default btn-sm" type="button">Annuler</button>',
                            $commande->type_commande
                        );
                }

            }


            die(json_encode($data));
        }
        else
            $this->redirect("/index");
    }

    public function prix_verre($id_generation){
        if(!empty($id_generation) && is_numeric($id_generation)){
            $data['newUser'] = $this->session->userdata('newUser');
            $data['parametre_lang_datable'] = $this->config->item('parametre_lang_datable');
            $data['parametre_export_datable'] = $this->config->item('parametre_export_datable');

            $data['page'] = "Prix Verre";
            $data['title'] = 'Prix des verres';
            $data['modules'] = array('datatables' => true, 'sweetalert' => true, 'touchspin' => true);
            
            $data['id_generation'] = $id_generation;
            $this->load->view('admin/prix_verre',$data);
        }
        else
            $this->redirect("/index");
    }

    public function prix_verre_ajax($id_generation, $grille = 0){
        if($this->input->is_ajax_request()){

            $data = array();
            $data['aaData'] = array();

            if($grille != 0) {
                $dataVerre['grille'] = (int) $grille;
            }

            $dataVerre['id_generation_verre'] = $id_generation;
            $dataVerre['prixVerre'] = true;

            $verres = $this->m_verres->getVerre($dataVerre);

            if($verres !== false)
                foreach($verres as $key => $verre){
                    $data['aaData'][$key] =
                        array(
                            $verre->libelle_verre,
                            '<input type="text" class="form-control decimal" name="prix_'.$verre->id_verre.'_'.$verre->id_grille_tarifaire.'" id="prix_'.$verre->id_verre.'_'.$verre->id_grille_tarifaire.'" value="'.$verre->prix_verre.'" /> €',
                            'Grille '.$verre->id_grille_tarifaire,
                            '<input type="text" class="form-control decimal" value="'.$verre->order_verre.'" id="order_'.$verre->id_verre.'_'.$verre->id_grille_tarifaire.'" />',
                            '<button type="button" class="btn btn-danger btn-sm" role="button" aria-disabled="false" id="supprimer_'.$verre->id_verre.'"><i class="zmdi zmdi-close"></i> Supprimer</button>'
                        );
                }
            die(json_encode($data));
        }
        else
            $this->redirect();
    }

    public function ordre_verre(){
        if($this->input->is_ajax_request()){
            $this->m_verres->updateOrdre($this->input->post());
        }
    }

    public function generer_pdf_ca_journalier($nom_fichier_pdf, $date){

        $ndate = DateTime::createFromFormat('m-Y', $date);

        $data['caByDay'] = $this->m_commande->getCaByDayOfMonth($ndate->format('Y-m'));
        $data['date'] = $date;

        $ca_mensuel = $this->m_commande->CAMensuel($date);
        $data['ca_mensuel'] =  $ca_mensuel;

        $ca_mensuel_hors_livraison = $this->m_commande->CAMensuel($date, false);
        $data['ca_mensuel_hors_livraison'] = $ca_mensuel_hors_livraison;



        $data['taux_tva'] = $this->session->userdata('taux_tva');

        $data_custom_file = array('date' => $date);

        $this->pdf($nom_fichier_pdf,$data,$data_custom_file,true);
    }

    public function facture_client(){
        $data['newUser'] = $this->session->userdata('newUser');
        $data['parametre_lang_datable'] = $this->config->item('parametre_lang_datable');
        $data['parametre_export_datable'] = $this->config->item('parametre_export_datable');

        $data['modules'] = array('sweetalert' => true, 'datepicker' => true, 'datatables' => true);
        $data['page'] = "Facture clients";
        $data['title'] = "Facture clients";

        $result = $this->m_users->getMaxUser();
        $data['maxUser'] = $result[0]->maxUser;

        $this->load->view('admin/facture_client',$data);
    }

    public function facture_client_ajax($date, $user = null){
        if($this->input->is_ajax_request()){

            $regions = $this->config->item('regions');
            $facture_client = $this->m_commande->getAllCommandeByMonthAndUser($date, null, $user);

            $data = array();
            $data['aaData'] = array();
            $total_ht= 0;
            $total_ht_liv = 0;
            $lastkey = 0;

            if($facture_client !== false)

                foreach($facture_client as $key => $facture_cli){


                    $shippings = $this->m_commande->getShippingsByMonth($date, $facture_cli->id_users);

                    if($shippings) {
                        $total_ships = $shippings->exp_matin + $shippings->exp_soir;
                    }
                    else {
                        $total_ships = 0;
                    }

                    $dep = substr($facture_cli->cp, 0, -3);

                    $data['aaData'][$key] =
                        array(
                            $facture_cli->id_users,
                            $facture_cli->nom_magasin,
                            $facture_cli->nom_societe,
                            date("m-Y",strtotime($facture_cli->date_commande)),
                            '<span id="totalFacture_'.date("Y-m",strtotime($facture_cli->date_commande)).'_'.$facture_cli->id_users.'">'.number_format($facture_cli->total + $this->m_commande->getPackagingByMonth($date, $facture_cli->id_users),2,'.',' ').'</span> €',
                            '<span>'.number_format($facture_cli->total_stock,2,'.',' ').'</span> €',
                            '<span>'.number_format($facture_cli->total_fabrique,2,'.',' ').'</span> €',
                            $facture_cli->tarif_liv + $this->m_commande->getPackagingByMonth($date, $facture_cli->id_users),
                            '<a href="/admin/generer_pdf_facture/facture/'.date("Y-m",strtotime($facture_cli->date_commande)).'/'.$facture_cli->id_users.'" class="btn btn-warning"><i class="zmdi zmdi-download"></i></a>',
                            '<a class="btn btn-inverse" data-toggle="modal" data-target="#add-reduction" id="openReduction_'.date("Y-m",strtotime($facture_cli->date_commande)).'_'.$facture_cli->id_users.'"><i class="zmdi zmdi-edit"></i></a>
                             <a class="btn btn-warning" data-toggle="modal" data-target="#get-reduction" id="deleteReduction_'.date("Y-m",strtotime($facture_cli->date_commande)).'_'.$facture_cli->id_users.'" '.($facture_cli->reduction == "0.00" ? 'style="display:none;"' : '').'><i class="zmdi zmdi-search"></i></a>',
                            $facture_cli->id_grille_tarifaire
                        );



                    $total_ht += $facture_cli->total;
                    $total_ht_liv += ($facture_cli->total-$facture_cli->tarif_liv);


                    $lastkey = $key;
                }

            $data['totals'] =
                array(
                    'ht' => number_format($total_ht  + $this->m_commande->getPackagingByMonth($date, $user) ,2,'.',' '),
                    'liv' => number_format($total_ht_liv - $this->m_commande->getSupplementByMonth($date, $user) ,2,'.',' '),
                );



            die(json_encode($data));
        }
        else
            $this->redirect();
    }


    public function payment_status() {

        $this->load->helper('slimpay');

        $date = date('m-Y', strtotime('last day of last month'));

        $factures = $this->db->select('debit_id')->where('mois', $date)->get('paiements')->result();

        foreach($factures as $f) {

            if($status = getDebitStatus($f->debit_id)) {

                $data['status'] = $status;

                $data = array(
                    'status' => $status['executionStatus'],
                    'execution_date' => $status['executionDate'],
                    'last_update' => date('Y-m-d H:i:s', time())
                );

                $this->db->where('debit_id', $f->debit_id)->update('paiements', $data);

            }

        }

        //$this->load->view('admin/payment_process',$data);

    }

    public function users(){
        $data['newUser'] = $this->session->userdata('newUser');
        $data['parametre_lang_datable'] = $this->config->item('parametre_lang_datable');
        $data['parametre_export_datable'] = $this->config->item('parametre_export_datable');

        $data['modules'] = array('datatables' => true, 'sweetalert' => true);

        $data['page'] = "Liste utilisateurs";
        $data['title'] = "Liste utilisateurs";

        $result = $this->m_config->getConfig(array('nom_config' => 'commentaire'));

        $data['commentaire_actif'] = json_decode($result[0]->param_config);

        $result = $this->m_users->getMaxUser();

        $data['maxUser'] = $result[0]->maxUser;

        $this->load->view('admin/users',$data);
    }

    public function users_ajax(){
        if($this->input->is_ajax_request()){

            $data = array();
            $data['aaData'] = array();

            $id_users = false;
            $rib = false;
            $deleted = 0;


            if(isset($_GET['id_users']) && $_GET['id_users']!="Tous"){
                $id_users = $_GET['id_users'];
            }

            if(isset($_GET['rib'])){
                $rib = $_GET['rib'];
            }

            if(isset($_GET['deleted'])){
                $deleted = $_GET['deleted'];
            }

            $users = $this->m_users->getAllUser($id_users, $rib, $deleted);
            $nbGrilleTarifaire = 2;
            $regions = $this->config->item('regions');

            if($users !== false)
                foreach($users as $key => $user){

                    //$total_commandes = $this->m_commande->getTotalCommandeByYear($user->id_users);
                    //$total_commandes_ec = $this->m_commande->getTotalECCommandeByYear($user->id_users);

                    $taux = $this->m_users->getUserById($user->id_users);

                    $optionTarif = "";

                    for($prix_livraison=0;$prix_livraison<=10;$prix_livraison+=0.5){
                        $optionTarif .= '<option value="'.$prix_livraison.'" '.($prix_livraison == $user->tarif_livraison ? 'selected' : '').'>'.$prix_livraison.'</option>';
                    }

                    $dep = substr($user->cp, 0, -3);

                    $sp = ($user->valid_mandat == 1  ? 'sp' : 'sp no_sp');
                    $commander = ($user->valid_mandat == 1 ? '<a href="/admin/passer_commande/'.$user->id_users.'" class="btn btn-warning">Commander</a>' : '<a href="/admin/passer_commande/'.$user->id_users.'" disabled class="btn btn-warning">Commander</a>');

                    // .number_format(($total_commandes[0]->total*($taux[0]->taux_erreur/100))-$total_commandes_ec[0]->total, 2,'.',' ').' €'

                    $data['aaData'][$key] =
                        array(
                            $user->nom_magasin,
                            '<span>'.$user->id_users.'</span>',
                            $user->nom_societe,
                            $user->ville.'<br>'.$user->cp,
                            date('d/m/Y H:i', strtotime($user->date_inscription)),
                            $user->id_grille_tarifaire,
                            $commander,
                            '<a href="/admin/erreur_casse/'.$user->id_users.'" class="btn btn-warning"><i class="zmdi zmdi-search"></i></a>&nbsp;&nbsp; ',
                            '<a class="btn btn-inverse get-userinfo" data-toggle="modal" data-target="#user-modal" data-user="'.$user->id_users.'"><i class="zmdi zmdi-search"></i> Voir</a>'
                        );
                }
            die(json_encode($data));
        }
        else
            $this->redirect();
    }


    public function erreur_casse($user_id){


        $this->data['modules'] = array('datatables' => true);
        $this->data['page'] = $this->data['title'] = "Erreur ophtalmologiste / Casse atelier";

        $this->data['user_id'] = $user_id;


        $total_commandes = $this->m_commande->getTotalCommandeByYear($user_id);
        $total_commandes_ec = $this->m_commande->getTotalECCommandeByYear($user_id);

        $taux = $this->m_users->getUserById($user_id);

        $this->data['ec']['taux'] = number_format($taux[0]->taux_erreur,2,'.','');
        $this->data['ec']['total'] = number_format($total_commandes[0]->total,2,'.','');
        $this->data['ec']['useable'] = number_format($total_commandes[0]->total*($taux[0]->taux_erreur/100), 2,'.','');
        $this->data['ec']['used'] = number_format($total_commandes_ec[0]->total, 2,'.','');
        $this->data['ec']['rest'] = number_format(($total_commandes[0]->total*($taux[0]->taux_erreur/100))-$total_commandes_ec[0]->total, 2,'.','');

        $this->load->view('admin/erreur_casse',$this->data);

    }

    public function erreur_casse_ajax($user_id){

        setlocale(LC_TIME, 'fr_FR.utf8','fra');

        $this->load->model('m_users');

        if($this->input->is_ajax_request()){
            $data = array();
            $data['aaData'] = array();

            $total_commandes = $this->m_commande->getTotalCommandeByYear($user_id);
            $total_commandes_ec = $this->m_commande->getTotalECCommandeByYear($user_id);

            $taux = $this->m_users->getUserById($user_id);

            $taux = $this->m_users->getUserById($this->data['user_info']->id_users);

            $this->data['ec']['taux'] = number_format($taux[0]->taux_erreur,2,'.','');
            $this->data['ec']['total'] = number_format($total_commandes[0]->total,2,'.','');
            $this->data['ec']['useable'] = number_format($total_commandes[0]->total*($taux[0]->taux_erreur/100), 2,'.','');
            $this->data['ec']['used'] = number_format($total_commandes_ec[0]->total, 2,'.','');
            $this->data['ec']['rest'] = number_format(($total_commandes[0]->total*($taux[0]->taux_erreur/100))-$total_commandes_ec[0]->total, 2,'.','');

            $data['aaData'][] = array(
                'Montant total des achats depuis le 1er Janvier de l\'année en cours',
                '<strong>'.number_format($total_commandes[0]->total,2,'.',' ').' €</strong>'
            );

            $data['aaData'][] = array(
                'Montant total utilisable pour commander en casse atelier et erreur ophtalmologiste ( '.$taux[0]->taux_erreur.'% )',
                '<strong>'.number_format($total_commandes[0]->total*($taux[0]->taux_erreur/100), 2,'.',' ').' €</strong>'
            );

            $data['aaData'][] = array(
                'Montant déjà utilisé pour commander en casse atelier et erreur ophtalmologiste',
                '<strong>'.number_format($total_commandes_ec[0]->total, 2,'.',' ').' €</strong>'
            );

            $data['aaData'][] = array(
                'Montant total utilisable pour commander en casse atelier et erreur ophtalmologiste au '.strftime('%e %B %Y à %Hh%M', time()),
                '<strong>'.number_format(($total_commandes[0]->total*($taux[0]->taux_erreur/100))-$total_commandes_ec[0]->total, 2,'.',' ').' €</strong>'
            );

            die(json_encode($data));
        }
        else
            $this->redirect();
    }

    public function controle(){

        $this->data['page'] = $this->data['title'] = "Contrôle de la plateforme";
        $this->load->view('admin/controle',$this->data);

    }

    public function passer_commande($user_id){

        $this->load->model('m_users');
        $this->load->helper('slimpay');
        $this->load->library('email');

        $this->data['user_id'] = $user_id;

        $this->data['modules'] = array('sweetalert' => true, 'touchspin' => true);

        $this->data['page'] = $this->data['title'] = "Passer une commande pour le magasin 2";

        $this->data['numero_siret'] = $this->session->userdata('numero_siret');
        $this->data['tva_intracomm'] = $this->session->userdata('tva_intracomm');

        $result = $this->m_config->getConfig(array('nom_config' => 'commentaire'));

        $this->data['user_info'] = $this->m_users->getUserById($user_id);

        $this->data['commentaire_actif'] = json_decode($result[0]->param_config);
        $this->data['id_commandes'] = $this->getUserOrders($user_id);
        $regions = $this->config->item('regions');

        if(isset($this->data['user_info'][0]->cp)) {
            $dep = substr($this->data['user_info'][0]->cp, 0, -3);
            $this->data['region'] = ($regions[$dep] == "Ile-de-France" ? 1 : 0);
        }
        else {
            $this->data['region'] = 0;
        }

        $this->load->view('admin/passer_commande_new',$this->data);

    }

    public function getGrilleFabrication(){
        if($this->input->is_ajax_request()){

            $data = $this->input->post();
            $post = $data;

            if($data['type_commande_verre'] == 1)
                $data['correction'] = $this->m_grille_fabrication->getGrilleFabrication($data);
            else if($data['type_commande_verre'] == 2){
                $data['correction_stock'] = $this->m_grille_stock->getGrilleStock($data);
            }

            $data['post_data'] = $post;

            echo $this->load->view('ajax_correction',$data);
        }
        else
            $this->redirect();
    }

    public function getDiametre(){
        if($this->input->is_ajax_request()){
            $post = $this->input->post();
            $return = $this->m_grille_stock->getDiametre($post);

            $data = array();

            if($return !== false){

                if($return == 'stock_progressif') {
                    $data = array(70);
                }
                else {
                    foreach($return as $d){
                        $grille_stock = json_decode($d->grille_stock,true);

                        if(array_key_exists($post['sphere'], $grille_stock)){
                            if(in_array($post['cylindre'], $grille_stock[$post['sphere']]))
                                array_push($data,$d->diametre);
                        }
                    }
                }

            }

            echo json_encode($data);
        }
    }

    public function getIndiceVerre(){
        if($this->input->is_ajax_request()){
            if(($result = $this->m_generation_verre->getIndiceVerre($this->input->post('id_generation_verre')))!== false ){
                $data['indice_verre'] = $result;

                echo $this->load->view('ajax_indice_verre',$data);
            }
        }
    }

    public function getPrixVerre($user_id) {

        if($this->input->is_ajax_request()){

            $id_verre = intval($_POST['id']);

            $this->data['user_info'] = $this->m_users->getUserById($user_id)[0];

            $grille = $this->data['user_info']->id_grille_tarifaire;

            $query = $this->db->query('SELECT prix_verre FROM grille_tarifaire WHERE id_verre='.$id_verre.' AND id_grille_tarifaire = '.$grille);
            $verre = $query->result();

            echo $verre[0]->prix_verre;

        }
        else
            $this->redirect();
    }


    public function setOrderRecap($user_id){
        if($this->input->is_ajax_request()){

            $data = $this->input->post();
            $user = $this->m_users->getUserById($user_id)[0];

            $data['user_info'] = $user;
            $data['id_users'] = $user_id;
            $data['data_admin']['admin_info'] = $this->m_users->getUserById(1)[0];

            $data['id_miroir'] = 0;
            $data['id_etat_commande'] = 1;
            $data['date_commande'] = date('Y-m-d H:i:s');
            $data['date_update_commande'] = $data['date_commande'];
            $data['taux_tva'] = $this->m_taux_tva->get_tva();
            $data['tarif_livraison'] = $user->tarif_livraison;
            $data['tarif_packaging'] = $user->tarif_packaging;
            $prix_miroir = 6;

            if(isset($data['calibre']) && !empty($data['calibre']))
                $data_commande['precalibrage'] = array('calibre' => $data['calibre']);

            if(isset($data['cotea']) && !empty($data['cotea']))
                $data_commande['mesure_freeform']['largeur_boxing'] = $data['cotea'];

            if(isset($data['coteb']) && !empty($data['coteb']))
                $data_commande['mesure_freeform']['hauteur_boxing'] = $data['coteb'];

            if(isset($data['cotec']) && !empty($data['cotec']))
                $data_commande['mesure_freeform']['taille_du_pont'] = $data['cotec'];

            if(isset($data['coted']) && !empty($data['coted']))
                $data_commande['mesure_freeform']['diametre_utile'] = $data['coted'];

            if(isset($data['diametre_verre']) && !empty($data['diametre_verre']))
                $data_commande['diametre_verre'] = $data['diametre_verre'];


            if(isset($data_commande['mesure_freeform'] ))
                foreach($data_commande['mesure_freeform'] as $Key => $val)
                    if(empty($val))
                        unset($data_commande['mesure_freeform'][$Key]);

            if(isset($data['type_monture']) && !empty($data['type_monture']))
                $data_commande['monture'] = array('type' => $data['type_monture']);

            if(isset($data['epaisseur_bord_verre']) && !empty($data['epaisseur_bord_verre']))
                $data_commande['bord_verre'] = array('epaisseur' => $data['epaisseur_bord_verre']);

            if(isset($data['sphere_droit']) && isset($data['cylindre_droit']) && isset($data['sphere_gauche']) && isset($data['cylindre_gauche'])) {
                $data_commande['verre'] = array('correction_droit' => array('sphere' => $data['sphere_droit'],
                    'cylindre' => $data['cylindre_droit']
                ),
                    'correction_gauche' => array('sphere' => $data['sphere_gauche'],
                        'cylindre' => $data['cylindre_gauche']
                    )
                );
            }
            elseif(isset($data['sphere_droit']) && isset($data['addition_droit']) && isset($data['sphere_gauche']) && isset($data['addition_gauche'])) {
                $data_commande['verre'] = array(
                    'correction_droit' => array(
                        'sphere' => $data['sphere_droit'],
                        'addition' => $data['addition_droit'],
                        'cylindre' => 0
                     ),
                    'correction_gauche' => array(
                        'sphere' => $data['sphere_gauche'],
                        'addition' => $data['addition_gauche'],
                        'cylindre' => 0,
                    )
                );
            }

            if(isset($data['axe_droit']))
                $data_commande['verre']['correction_droit']['axe'] = $data['axe_droit'];

            if(isset($data['axe_gauche']))
                $data_commande['verre']['correction_gauche']['axe'] = $data['axe_gauche'];

            if(isset($data['hauteur']) && !empty($data['hauteur']))
                $data_commande['verre']['hauteur'] = $data['hauteur'];

            if(isset($data['hauteur_gauche']) && !empty($data['hauteur_gauche']))
                $data_commande['verre']['hauteur_gauche'] = $data['hauteur_gauche'];

            if(isset($data['ecart_puppillaire_droit']) && !empty($data['ecart_puppillaire_droit']))
                $data_commande['verre']['ecart_puppillaire']['droit'] = $data['ecart_puppillaire_droit'];

            if(isset($data['ecart_puppillaire_gauche']) && !empty($data['ecart_puppillaire_gauche']))
                $data_commande['verre']['ecart_puppillaire']['gauche'] = $data['ecart_puppillaire_gauche'];

            if(isset($data['diametre']))
                $data_commande['verre']['diametre']= $data['diametre'];

            if(isset($data['diametre_gauche']))
                $data_commande['verre']['diametre_gauche']= $data['diametre_gauche'];

            if(isset($data['traitement']))
                $data_commande['verre']['traitement']= $data['traitement'];

            if(isset($data['photocromie']) && !empty($data['photocromie']))
                $data_commande['verre']['photocromie']= $data['photocromie'];

            if(isset($data['teinte']) && !empty($data['teinte']))
                $data_commande['verre']['teinte']= $data['teinte'];

            if(isset($data['galbe']) && !empty($data['galbe']))
                $data_commande['verre']['galbe'] = $data['galbe'];

            if(isset($data['angle_pantoscopique']) && !empty($data['angle_pantoscopique']))
                $data_commande['verre']['angle_pantoscopique'] = $data['angle_pantoscopique'];

            if(isset($data['angle_galbe']) && !empty($data['angle_galbe']))
                $data_commande['verre']['angle_galbe'] = $data['angle_galbe'];

            if(isset($data['distance_verre_oeil']) && !empty($data['distance_verre_oeil']))
                $data_commande['verre']['distance_verre_oeil'] = $data['distance_verre_oeil'];


            if(isset($data['dioptrie_droit']) && $data['dioptrie_droit'] != "")
                $data_commande['verre']['dioptrie_droit'] = $data['dioptrie_droit'];

            if(isset($data['base_droit']) && $data['base_droit']!="")
                $data_commande['verre']['base_droit'] = $data['base_droit'];


            if(isset($data['dioptrie_gauche']) && $data['dioptrie_gauche'] != "")
                $data_commande['verre']['dioptrie_gauche'] = $data['dioptrie_gauche'];

            if(isset($data['base_gauche']) && $data['base_gauche']!="")
                $data_commande['verre']['base_gauche'] = $data['base_gauche'];

            $prix_double = true;

            if(isset($data['addition_droit']))
                $data_commande['verre']['correction_droit']['addition'] = $data['addition_droit'];

            if(isset($data['addition_gauche']))
                $data_commande['verre']['correction_gauche']['addition'] = $data['addition_gauche'];

            if(isset($data['degression_droit']))
                $data_commande['verre']['correction_droit']['degression'] = $data['degression_droit'];

            if(isset($data['degression_gauche']))
                $data_commande['verre']['correction_gauche']['degression'] = $data['degression_gauche'];

            if(isset($data['only_droit'])){
                unset($data_commande['verre']['correction_gauche']);
                unset($data_commande['verre']['diametre_gauche']);
                $prix_double = false;
            }

            if(isset($data['only_gauche'])){
                unset($data_commande['verre']['correction_droit']);
                unset($data_commande['verre']['diametre_droit']);
                $prix_double = false;
            }

            if(isset( $data['miroir_stock']) &&  $data['miroir_stock'] != 0){
                $data['id_miroir'] = $data['miroir_stock'];
                $data_commande['verre']['miroir_stock'] = array(
                    'type_miroir' => $data['miroir_stock'],
                    'prix_miroir' => $prix_miroir
                );
            }

            if(isset($data['polarise']) &&  $data['polarise'] != "Non polarisé"){
                $data_commande['verre']['polarise'] = $data['polarise'];
            }

            if(isset($data['miroir']) && $data['miroir'] != 0){
                $data['id_miroir'] = $data['miroir'];
                $data_commande['verre']['miroir'] = array(
                    'type_miroir' => $data['miroir'],
                    'prix_miroir' => $prix_miroir
                );

                if($prix_double)
                    $prix_miroir *=2;
            }
 
            if(isset($data['carte_auth']) && $data['carte_auth'] == 1) {
                $data_carte['civilite_client'] = $data['civilite_client'];
                $data_carte['nom_client'] = $data['nom_client'];
                $data_carte['prenom_client'] = $data['prenom_client'];
                $data['information_certificat'] = json_encode($data_carte);
            }
            else {
                $data['information_certificat'] = '';
            }


            $data['information_commande'] = json_encode($data_commande);

            $id_grille_tarifaire = $this->m_users->getGrilleTarifaire($data['id_users']);

            $prix_verre = $this->m_verres->getPrixVerre($data['id_verre'],$id_grille_tarifaire,$data['id_users']);

            if($prix_verre !== false){

                $supplement = 0;
                
                if($data['origine_commande'] == 1 && $prix_verre[0]->supplement == 1) {
                    if($data['user_info']->tarif_supplement > 0) {
                        $supplement = $data['user_info']->tarif_supplement;
                    }
                }
                
                if(!empty($prix_verre[0]->libelle_verre_personnalise))
                    $prix_verre[0]->libelle_verre = $this->remplace_personnalisation_verre($prix_verre[0]->libelle_verre, $prix_verre[0]->libelle_verre_personnalise);

                $data['total_commande'] = $data['prix_verre'] =  $prix_verre[0]->prix_verre+$supplement;

                if($data['type_commande'] == 1) {
                    $data['tarif_supplement'] = $supplement;
                }
                else {
                    $data['tarif_supplement'] = 0;
                }

                $data['libelle_verre'] =   $prix_verre[0]->libelle_verre;

                if($prix_double) {
                    $data['total_commande'] *= 2;
                    $data['tarif_supplement'] *= 2;
                }

                if(isset($data['miroir']) && $data['miroir'] != 0)
                    $data['total_commande'] += $prix_miroir;

                $this->session->set_userdata('order', $data);

                $data['recap_commande'] = $data;

                echo $this->load->view('ajax_recap_commande',$data);
            }else{
                echo "error";
            }

        }
        else
            $this->redirect();
    }

    public function addOrder($relance=false,$id_commande=""){
        if($this->input->is_ajax_request()) {

            $data = $this->session->userdata('order');

            if (!isset($data['nb_multi_commande']) || $data['nb_multi_commande'] == "") {
                $data['nb_multi_commande'] = 1;
            }

            for ($i = 1; $i <= $data['nb_multi_commande']; $i++) {
                if ($this->m_commande->addOrder($data)) {
                    echo "ok";
                } else {
                    echo "erreur";
                }
            }

            $this->session->unset_userdata('order');
        }
    }

    public function getIdVerre() {

        if($this->input->is_ajax_request()){

            $id_verre = intval($_POST['id']);

            $query = $this->db->query('SELECT libelle_verre FROM verres WHERE id_verre='.$id_verre);
            $verre = $query->result();

            echo $verre[0]->libelle_verre;
        }
        else
            $this->redirect();
    }

    public function getSpecificVerre($user_id){
        if($this->input->is_ajax_request()){
            
            $data = $this->input->post();

            $this->data['user_info'] = $this->m_users->getUserById($user_id)[0];

            $data['id_users'] = $user_id;
            $data['user_supplement'] = $this->data['user_info']->tarif_supplement;

            $data['id_grille_tarifaire'] = $this->m_users->getGrilleTarifaire($user_id);
            $data['verre'] =  $this->m_verres->getSpecificVerre($data);

            if($data['verre'] !== false) {
                foreach ($data['verre'] as $value) {

                    if (!empty($value->libelle_verre_personnalise)) {
                        $value->libelle_verre = $this->remplace_personnalisation_verre($value->libelle_verre, $value->libelle_verre_personnalise);
                    }

                }
            }

            $data['restriction'] = $this->data['user_info']->restriction_compte == 1 ? 1 : 0 ;

            echo $this->load->view('ajax_verre',$data);
        }
        else
            $this->redirect();
    }

    public function ajax_type_verre($id_magasin){
        if($this->input->is_ajax_request()){
            $data['type_generation_verre'] = $this->m_type_generation_verre->getTypeGenerationVerre($id_magasin);
            $this->load->view('ajax_type_verre',$data);
        }
        else
            echo "redirect";
    }

    public function getGenerationVerre($user_id){
        if($this->input->is_ajax_request()){
            if(($data['generation_verre']  = $this->m_generation_verre->getGenerationVerre($this->input->post('id_type_generation_verre'),$user_id, true,false)) !== false){
                echo $this->load->view('ajax_type_generation_verre',$data);
            }
        }
        else
            $this->redirect();
    }

    public function checkVerreStock($user_id){

        if($this->input->is_ajax_request()){

            $this->data['user_info'] = $this->m_users->getUserById($user_id)[0];

            $CheckVerreStock = array();
            $data = $this->input->post();
            $verres = $this->m_verres->getVerre($data);

            if($verres !== false){
                foreach($verres as $key => $verre){


                    /*if(strpos($verre->libelle_verre, "Defender") !== false) {
                        continue;
                    }*/

                    $isPhotocromie = $miroir = $polarise = false;

                    if($data['photocromie'] != "undefined" && $data['photocromie'] != "Non Photocromique"){
                        $isPhotocromie = true;

                        if(strpos($verre->libelle_verre,$data['photocromie']) === false)
                            continue;

                    }else{
                        if(strpos($verre->libelle_verre,"PhotoGrey") !== false || strpos($verre->libelle_verre,"PhotoBrown") !== false)
                            continue;
                    }

                    if($data['miroir'] != "undefined" && $data['miroir'] > 0){
                        $miroir = true;
                        if(strpos($verre->libelle_verre,"miroir") === false)
                            continue;
                        else {

                            $options_miroir = array(1 => 'Miroir Bleu', 2 => 'Miroir Argent', 3 => 'Miroir Doré', 4 => 'Miroir Vert', 5 => 'Miroir Rouge', 6 => 'Miroir Orange', 7 => 'Miroir Rose' ,8 => 'Miroir Violet', 9 => 'Miroir Jaune');

                            $verre->libelle_verre = str_replace("miroir",$options_miroir[$data['miroir']],$verre->libelle_verre);
                        }
                    }


                    if($verre->id_generation_verre != 17) {

                        if ($data['polarise'] != "undefined" && $data['polarise'] != "Non polarisé") {

                            $polarise = true;
                            if (strpos($verre->libelle_verre, "polarisé") === false) {
                                continue;
                            } else {
                                $verre->libelle_verre = str_replace("polarisé", $data['polarise'], $verre->libelle_verre);
                            }
                        }

                    }
                    else {

                        $polarise = true;

                        if (strpos($verre->libelle_verre, $data['teinte']) === false) {
                            continue;
                        }

                        if (strpos($verre->libelle_verre, $data['polarise']) === false) {
                            continue;
                        }

                    }



                    if(!$miroir && !$polarise){
                        if(!$isPhotocromie && $data['teinte'] != "undefined" && $data['teinte'] != "Non Teinté"){
                            if(strpos($verre->libelle_verre,$data['teinte']) === false)
                                continue;
                        }else if (!$isPhotocromie && (strpos($verre->libelle_verre,"G15 C") !== false || strpos($verre->libelle_verre,"Brun C") !== false || strpos($verre->libelle_verre,"Gris C") !== false))
                            continue;

                        if(strpos($verre->libelle_verre,$data['traitement']) === false){
                            continue;
                        }
                    }


                    $CheckVerreStock[$verre->id_verre]['intitule'] = $verre->libelle_verre;
                    $CheckVerreStock[$verre->id_verre]['prix'] = $verre->prix_verre;

                }
            }


            // Bluecoat / Defender

            if(count($CheckVerreStock) > 1) {
                foreach($CheckVerreStock as $id_verre => $v){
                    if(strpos($v['intitule'], "BlueCoat") !== false) {
                        if(strpos($v['intitule'], $data['traitement']) !== false) {
                            $prix_verre = $this->m_verres->getPrixVerre($id_verre,$this->data['user_info']->id_grille_tarifaire,$user_id);
                            echo json_encode(array('intutile' => $v['intitule']." diamètre ".$data['diametre']." (".($prix_verre[0]->prix_verre)." €)", 'id_verre' => $id_verre));
                            exit;
                        }
                    }
                }
            }


            if(count($CheckVerreStock) == 1){
                foreach($CheckVerreStock as $id_verre => $v){
                    $prix_verre = $this->m_verres->getPrixVerre($id_verre,$this->data['user_info']->id_grille_tarifaire,$user_id);
                    echo json_encode(array('intutile' => $v['intitule']." diamètre ".$data['diametre']." (".($prix_verre[0]->prix_verre)." €)", 'id_verre' => $id_verre));
                }
            } else
                echo json_encode(array('intutile' => 'Aucun verre ne correspond à votre recherche', 'id_verre' => ''));
        }
        else{
            echo json_encode(array('disconnect' => true));
        }
    }

    public function ECCreditCheck($user_id) {

        $this->load->model('m_users');

        if($this->input->is_ajax_request()){

            $total_commandes = $this->m_commande->getTotalCommandeByYear($user_id);
            $total_commandes_ec = $this->m_commande->getTotalECCommandeByYear($user_id);
            $taux = $this->m_users->getUserById($user_id);

            $credit = number_format(($total_commandes[0]->total * ($taux[0]->taux_erreur / 100)) - $total_commandes_ec[0]->total, 2, '.', ' ');

            die($credit);

        }
        else
            $this->redirect();

    }

    public function getUserOrders($user_id) {

        $select = '';

        $commandes = $this->m_commande->getAllCommandeByUser($user_id);

        if(is_array($commandes)) {
            foreach($commandes as $c) {
                $date = strtotime($c->date_commande);
                $select .= '<option value="'.$c->id_commande.'">'.$c->id_commande.' - '.$c->reference_client.' - '.$c->libelle_verre.' - Commandé le '.date('d/m/Y', $date).'</option>'."\n";
            }
        }


        return $select;

    }

    public function user_commandes_ajax($user_id = null){
        if($this->input->is_ajax_request()){
            $data = $dataOrder = array();
            $data['aaData'] = array();

            $dataOrder['id_users'] = $user_id;
            $dataOrder['tri'] = isset($_GET['tri']) ? $_GET['tri'] : "";


            $dataOrder['type_commande'] = '1';


            $data_commande = $this->m_commande->getCommandeByUser($dataOrder);



            if($data_commande !== false)
                foreach($data_commande as $key => $commande){


                    switch($commande->type_commande) {

                        case 1:
                            $prix_commande = $commande->total_commande.' €';
                            break;

                        case 2:
                            $prix_commande = '<del>'.$commande->total_commande.'</del> 0 €<br />Casse atelier';
                            break;

                        case 3:
                            $prix_commande = '<del>'.$commande->total_commande.'</del> 0 €<br />Erreur ophta';
                            break;

                    }


                    if($commande->id_type_generation_verre != 5)
                        $etat_commande = $commande->libelle_etat_commande.($commande->id_etat_commande == 6 ? ' le '.date('d/m/Y H:i', strtotime($commande->date_update_commande)) : '').' ('.$commande->id_etat_commande.'/6)';
                    else
                        $etat_commande = $commande->id_etat_commande == 1 ? "En cours de préparation (".$commande->id_etat_commande."/2)" : $commande->libelle_etat_commande.' le '.date('d/m/Y H:i', strtotime($commande->date_update_commande)).' (2/2)';


                    $data['aaData'][$key] =
                        array(
                            '<a class="commande-info btn btn-icon waves-effect waves-light '.(!empty($commande->commentaire) ? 'btn-warning tooltipster' : 'btn-inverse').'" data-toggle="modal" data-target="#detail-commande" rel="' . $commande->id_commande . '" ' . (!empty($commande->commentaire) ? 'original-title="' . htmlentities($commande->commentaire) . '" title="'.htmlentities($commande->commentaire).'"' : '') . ' ><i class="zmdi zmdi-'.(!empty($commande->commentaire) ? 'comment' : 'search').'"></i> Voir</a>',
                            date('d/m/Y H:i:s', strtotime($commande->date_commande)),
                            'CR'.$commande->id_commande.'-'.$user_id,
                            'CR'.$commande->ancienne_commande.'-'.$user_id,
                            $prix_commande,
                            $commande->intitule_bl,
                            $commande->reference_client,
                            $commande->generation_verre,
                            '<a href="/admin/generer_pdf/bon_livraison/'.$commande->id_commande.'" class="tooltip" original-title="Télécharger le PDF" data-gravity="s" data-anim="true"><img src="/static/img/icons/packs/fugue/16x16/shadeless/inbox-download.png" alt="Télécharger" /></a>',
                            $etat_commande
                        );
                }

            die(json_encode($data));
        }else
            $this->redirect();
    }

    public function send_mail_customer(){
        if($this->input->is_ajax_request()){
            if(count($_POST['user_mail']) > 0){
                $sujet_txt = $_POST['sujet_mail'];

                $mess_html = '<html><body>';
                $mess_html .= nl2br($_POST['area_mail']);
                $mess_html .= '<br/><br/><br/>';
                $mess_html .= '<img src="http://www.optieyescommande.com/static/img/logo.png" alt="optieyes commande" width="227" height="72"/>';
                $mess_html .= '</body></html>';
                $piece_jointe = !empty($_POST['piece_jointe_mail']) ? $this->config->item('directory_upload')."/mail/".$_POST['piece_jointe_mail'] : "";
                $data = array();

                foreach($_POST['user_mail'] as $email){
                    if($email != ""){
                        $data['email'] = $email;
                        $this->mail($data,$mess_html,true,$sujet_txt,$piece_jointe);
                    }
                }

                if(!empty($piece_jointe)){
                    if(file_exists($piece_jointe))
                        unlink($piece_jointe);
                }
            }
        }
    }

    public function getUserMail(){

        $users = $this->m_users->getUserMail();
        $data = '';

        if($users !== false){
            foreach($users as $key => $value){
                $data .= '<option value="'.$value->email.'">Magasin '.$value->id_users.'</option>';
            }
        }

        if($this->input->is_ajax_request()){
            echo $data;
        }
        else {
            return $data;
        }
    }

    public function autocomplete(){
        if($this->input->is_ajax_request()){
            sleep(1);

            if (empty($_GET['term']))
                exit;
            $q = strtolower($_GET["term"]);

            if (get_magic_quotes_gpc())
                $q = stripslashes($q);

            header('Cache-Control: no-cache, must-revalidate');
            header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
            header('Content-type: application/json');

            $items = $this->m_verres->getVerre();

            $result = array();
            foreach ($items as $key => $value) {
                if (strpos(strtolower($value->libelle_verre), $q) !== false) {
                    array_push($result, array(
                        "id" => $value->id_verre,
                        "label" => $value->libelle_verre,
                        "value" => strip_tags($value->libelle_verre)
                    ));
                }
                if (count($result) > 11)
                    break;
            }

            echo json_encode($result);
        }
    }

    public function correction_stock(){
        $dataVerre['id_generation_verre'] = '9,12,13,14,15,16,17';

        $data['page'] = $data['title'] = "Grille de stock";
        $data['verres'] = $this->m_verres->getVerre($dataVerre);

        $this->load->view('admin/correction_stock',$data);
    }

    public function send_bill(){
        if($this->input->is_ajax_request() || $this->session->userdata('is_admin') === true){
            $post = $this->input->post();
            $facture_client = $this->m_commande->getAllCommandeByMonthAndUser($post['mois']."-".$post['annee']);

            if($facture_client !== false){
                $generate_pdf = true;
                $data = array();

                $month = array('01' => 'Janvier','02' => 'Février', '03' => 'Mars', '04' => 'Avril', '05' => 'Mai', '06' => 'Juin',
                    '07' => 'Juillet', '08' => 'Août', '09' => 'Septembre', '10' => 'Octobre', '11' => 'Novembre', '12' => 'Décembre');


                foreach($facture_client as $key => $facture_cli){
                    $piece_jointe = $this->generer_pdf_facture('facture',$post['annee']."-".$post['mois'],$facture_cli->id_users,false);
                    $piece_jointe = $this->config->item('directory_pdf')."/".$piece_jointe;
                    $user = $this->m_users->getUserById($facture_cli->id_users);
                    $data['email'] = $user[0]->email;
                    $mess_txt = "<html><head></head><body>Madame, Monsieur <br><br> Vous trouverez en pièce jointe de ce mail votre facture du mois de ".$month[$post['mois']]." ".$post['annee'].".<br> Le montant de cette facture sera prélevé sur votre compte professionnel le ".$post['date_bill'].". <br><br> N'hésitez pas à nous contacter si besoin. <br><br>L'équipe optimize.</body></html>";
                    $subjet_txt = "Facture Optieyes ".$month[$post['mois']]." ".$post['annee'];
                    $this->mail($data,$mess_txt,true,$subjet_txt,$piece_jointe);

                    if(file_exists($piece_jointe))
                        unlink($piece_jointe);
                }
            }
        }
    }

    public function MiseEnPlaceCorrection(){
        if($this->input->is_ajax_request()){
            $post = $this->input->post();
            $grille_stock = $this->m_grille_stock->getGrille($post);

            if($grille_stock !== false){
                $grille = json_decode($grille_stock[0]->grille_stock,true);

                if($post['statut'] == "ajout"){
                    if(isset($grille[$post['sphere']]) && is_array($grille[$post['sphere']]))
                        array_push($grille[$post['sphere']], $post['cylindre']);
                    else
                        $grille[(string)$post['sphere']] = array($post['cylindre']);

                    uksort($grille, function($a, $b) {
                        if((float)$a == (float)$b)
                            return 0;

                        return (float)$a < (float)$b ? 1 : -1;
                    });

                    usort($grille[(string)$post['sphere']], function($a, $b) {

                        if((float)$a == (float)$b)
                            return 0;

                        return (float)$a > (float)$b ? 1 : -1;
                    });

                }elseif($post['statut'] == "supprimer"){
                    if(isset($grille[$post['sphere']]) && ($key = array_search($post['cylindre'], $grille[$post['sphere']])) !== false)
                        unset($grille[$post['sphere']][$key]);

                    if(isset($grille[$post['sphere']]) && count($grille[$post['sphere']]) == 0)
                        unset($grille[$post['sphere']]);
                }
            }else{
                $grille = array();

                $grille[(string)$post['sphere']] = array($post['cylindre']);
            }

            if(count($grille) != 0){
                $post['grille_stock'] = json_encode($grille);

                $this->m_grille_stock->addGrilleStock($post);
            }else{
                $this->m_grille_stock->DeleteGrilleStock($post);
            }
        }
    }

    public function setGrilleCorrection(){
        if($this->input->is_ajax_request()){
            $post = $this->input->post();
            $grille_stock = $this->m_grille_stock->getGrille($post);

            $data = array();

            if($grille_stock !== false){
                $data['grille_stock'] = json_decode($grille_stock[0]->grille_stock,true);
            }

            echo $this->load->view('admin/ajax_correction_stock',$data);
        }
    }

    public function getInfoUser($idUser){

        $regions = $this->config->item('regions');

        if($this->input->is_ajax_request() && isset($idUser) && is_numeric($idUser) && $idUser>0){

            $data['info_user'] = $this->m_users->getUserById($idUser);

            $dep = substr($data['info_user'][0]->cp, 0, -3);
            $data['region'] = isset($regions[$dep]) ? $regions[$dep] : 'Région Inconnue';

            $this->load->view('admin/layout/client-info',$data);
        }
    }

    public function updatePrixVerre(){
        if($this->input->is_ajax_request()){
            $this->m_grille_tarifaire->updatePrixVerre($this->input->post());
        }
    }

    public function new_pass(){
        if($this->input->is_ajax_request()){
            echo json_encode(array('new_pass' => $this->CarAleatoire(8)));
        }
    }

    public function profile(){
        $data =  $this->session->userdata('data_user');
        $data['newUser'] = $this->session->userdata('newUser');
        $data['page'] = $data['title'] = "Profile";
        $this->load->view('admin/profile',$data);
    }

    public function stats(){
        $data['page'] = "Statistique";
        $this->load->view('admin/stats',$data);
    }

    public function error_404(){
        $data['page'] = "Erreur";
        $this->load->view('404',$data);
    }

    public function maj_tarif_fabrication(){
        $this->data['page'] = $this->data['title'] = "Mise à jour grille fabrication";
        $this->load->view('admin/maj_tarif_fabrication',$this->data);
    }

    public function do_upload()
    {
        $this->data['page'] = "Mise à jour grille fabrication";

        $config['upload_path'] = 'static/download/';
        $config['allowed_types'] = 'pdf';
        $config['max_size']	= '1000000';
        $config['file_name'] = 'plaquette_optimize'.$this->input->post('grille');
        $config['overwrite'] = true;

        $this->upload->initialize($config);

        if ( ! $this->upload->do_upload('new_file')){
            $this->data['error'] = $this->upload->display_errors();
        }
        else{
            $this->data['upload_data'] = $this->upload->data();
        }

        $this->load->view('admin/maj_tarif_fabrication', $this->data);
    }

    public function variations_facture_clients(){
        $result = $this->m_users->getMaxUser();

        $this->data['maxUser'] = $result[0]->maxUser;
        $this->data['page'] = $this->data['title'] = "Variation Facture Client";
        $this->data['modules'] = array(
            'datepicker' => true,
            'sweetalert' => true
        );

        //$this->data['test'] = $this->m_commande->getAllCommandeByYearAndUser(array('annee' => 2016, 'numero_magasin' => null));
        $this->load->view('admin/variations_facture_clients',$this->data);
    }

    public function variations_facture_clients_ajax(){
        $tab['annee'] = $this->input->post('annee');
        $tab['numero_magasin'] = $this->input->post('numero_magasin');
        $data = $this->m_commande->getAllCommandeByYearAndUser($tab);

        $lignZero = Array(1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0, 7 => 0, 8 => 0, 9 => 0, 10 => 0, 11 => 0, 12 => 0);
        $last_user = $current_user = $current_nom_soc = $current_nom_mag = $table = "";

        $table = "<thead><tr><th></th><th></th><th>Nom Société</th><th>Nom Magasin</th>";

        for($i = 1; $i <= 12; $i++){
            $table .= "<th>".($i < 10 ? '0' : '').$i."/".$tab['annee']."</th>";
        }

        $table .= "</tr></thead><tbody>";

        if($data !== false){
            $fl = 0;

            foreach($data as $users) {

                $cl = isset($users->deleted) && $users->deleted == 1 ? ' class="deleted"' : '';

                if ($fl > 0) {
                    if ($current_user != $users->id_users) {


                        $table .= '<tr'.$cl.'><td><a class="btn btn-warning get-userinfo" data-toggle="modal" data-target="#user-modal" data-user="'.$current_user.'"><i class="zmdi zmdi-search"></i> Voir</a></td><td>' . $current_user . '</td><td>' . $current_nom_soc . '</td><td>' . $current_nom_mag . '</td>';

                        $val_precedent = "";
                        foreach ($lignZero as $key => $l) {
                            $color = "";
                            if ($val_precedent != "" && $l != 0) {
                                if ($l > $val_precedent) {
                                    $color = "#e96154";
                                } else {
                                    $color = "#64b5f6";
                                }
                            }
                            $table .= '<td ' . ($color != "" ? 'style="color:' . $color . '"' : '') . '>' . $l . ($l != 0 ? ' HT' : '') . '</td>';

                            $val_precedent = $l;
                        }
                        $table .= "</tr>";

                        foreach ($lignZero as $key => $l) {
                            $lignZero[$key] = 0;
                        }
                    }
                }

                $lignZero[$users->mois] = $users->total;

                $current_user = $users->id_users;
                $current_nom_soc = $users->nom_societe;
                $current_nom_mag = $users->nom_magasin;

                ++$fl;
            }

            if($tab['numero_magasin'] != ""){

                $table .= '<tr'.$cl.'><td><a class="btn btn-warning get-userinfo" data-toggle="modal" data-target="#user-modal" data-user="'.$current_user.'"><i class="zmdi zmdi-search"></i> Voir</a></td><td>' . $current_user . '</td><td>' . $current_nom_soc . '</td><td>' . $current_nom_mag . '</td>';

                $val_precedent = "";
                foreach($lignZero as $key => $l){
                    $color = "";
                    if($val_precedent != "" && $l != 0){
                        if($l > $val_precedent){
                            $color = "#e96154";
                        } else {
                            $color = "#64b5f6";
                        }
                    }
                    $table .= '<td '.($color!= "" ? 'style="color:'.$color.'"' : '').'>'.$l.($l != 0 ? ' HT': '').'</td>';

                    $val_precedent = $l;
                }
                $table .= "</tr>";
            }
        }

        $table .= "</tbody>";

        echo $table;
    }

    public function ajout_verre(){
        $this->data['page'] = "Ajout Verre";

        if($this->input->post()){
            $id_verre = $this->m_verres->addVerre($this->input->post());

            for($id_grille_tarifaire=1;$id_grille_tarifaire <= 3; $id_grille_tarifaire++){
                $this->m_grille_tarifaire->addGrille($id_grille_tarifaire,$id_verre);
            }
        }

        $this->load->view('admin/ajout_verre',$this->data);
    }

    public function desactive_verre(){
        $this->m_verres->desactive_verre($this->input->post());
    }


    public function ajouterNouveauVerre(){


        $listeVerre = array(
            'E-Space 1,67 Orange A dégradé durci','E-Space 1,67 Orange A dégradé HMC Face interne','E-Space 1,67 Orange A dégradé HMC  ','E-Space 1,67 Orange A dégradé Satin','E-Space 1,67 Orange A dégradé Satin UV','E-Space 1,67 Orange A dégradé BlueCoat','E-Space 1,67 Orange AB dégradé durci','E-Space 1,67 Orange AB dégradé HMC Face interne','E-Space 1,67 Orange AB dégradé HMC  ','E-Space 1,67 Orange AB dégradé Satin','E-Space 1,67 Orange AB dégradé Satin UV','E-Space 1,67 Orange AB dégradé BlueCoat','E-Space 1,67 Orange B dégradé durci','E-Space 1,67 Orange B dégradé HMC Face interne','E-Space 1,67 Orange B dégradé HMC  ','E-Space 1,67 Orange B dégradé Satin','E-Space 1,67 Orange B dégradé Satin UV','E-Space 1,67 Orange B dégradé BlueCoat','E-Space 1,67 Orange C dégradé durci','E-Space 1,67 Orange C dégradé HMC Face interne','E-Space 1,67 Orange C dégradé HMC  ','E-Space 1,67 Orange C dégradé Satin','E-Space 1,67 Orange C dégradé Satin UV','E-Space 1,67 Orange C dégradé BlueCoat','E-Space 1,67 Orange D dégradé durci','E-Space 1,67 Orange D dégradé HMC Face interne','E-Space 1,67 Orange D dégradé HMC  ','E-Space 1,67 Orange D dégradé Satin','E-Space 1,67 Orange D dégradé Satin UV','E-Space 1,67 Orange D dégradé BlueCoat','E-Space 1,67 Jaune A dégradé durci','E-Space 1,67 Jaune A dégradé HMC Face interne','E-Space 1,67 Jaune A dégradé HMC  ','E-Space 1,67 Jaune A dégradé Satin','E-Space 1,67 Jaune A dégradé Satin UV','E-Space 1,67 Jaune A dégradé BlueCoat','E-Space 1,67 Jaune AB dégradé durci','E-Space 1,67 Jaune AB dégradé HMC Face interne','E-Space 1,67 Jaune AB dégradé HMC  ','E-Space 1,67 Jaune AB dégradé Satin','E-Space 1,67 Jaune AB dégradé Satin UV','E-Space 1,67 Jaune AB dégradé BlueCoat','E-Space 1,67 Jaune B dégradé durci','E-Space 1,67 Jaune B dégradé HMC Face interne','E-Space 1,67 Jaune B dégradé HMC  ','E-Space 1,67 Jaune B dégradé Satin','E-Space 1,67 Jaune B dégradé Satin UV','E-Space 1,67 Jaune B dégradé BlueCoat','E-Space 1,67 Jaune C dégradé durci','E-Space 1,67 Jaune C dégradé HMC Face interne','E-Space 1,67 Jaune C dégradé HMC  ','E-Space 1,67 Jaune C dégradé Satin','E-Space 1,67 Jaune C dégradé Satin UV','E-Space 1,67 Jaune C dégradé BlueCoat','E-Space 1,67 Jaune D dégradé durci','E-Space 1,67 Jaune D dégradé HMC Face interne','E-Space 1,67 Jaune D dégradé HMC  ','E-Space 1,67 Jaune D dégradé Satin','E-Space 1,67 Jaune D dégradé Satin UV','E-Space 1,67 Jaune D dégradé BlueCoat'
        );

        $data = array();
        $data['id_generation_verre'] = 4;
        $data['id_indice_verre'] = 5;

        foreach($listeVerre as $verre){
            $data['libelle_verre'] = $verre;

            //$this->m_verres->addVerre($data);
        }
    }


    public function ordreVerre(){

        $traitementOrdre = array(
            'Durci','HMC Face interne','HMC','Satin','Satin UV','BlueCoat'
        );

        $jeSaisPasOrdre = array(
            'Transition', 'Xtractive', 'Polarisé', 'Drivewear'
        );

        $transitionOrdre = array(
            'Transition gris','Transition brun'
        );

        $nupolarOrdre = array(
            'Polarisé Gris','Polarisé Brun','Polarisé G15'
        );

        $teinteOrdre = array(
            'Gris','Brun','G15','Black','Bleu','Violet','Rose','Orange','Jaune'
        );

        $puissanceTeinteOrdre = array(
            'A','AB','B','C','D'
        );


        $dataVerre['id_generation_verre'] = 1;
        $dataVerre['id_indice_verre'] = 1;
        $dataVerre['prixVerre'] = false;

        $verres = $this->m_verres->getVerre($dataVerre);

        $ordre = 1;
        $data = array();
        $tab = array();
        if($verres !== false){
            $current_libelle = "";
            foreach($verres as $key => $verre){
                $jeRentre = false;

                if($current_libelle != $verre->libelle_verre){
                    $current_libelle = $verre->libelle_verre;

                    foreach($jeSaisPasOrdre as $jsp){
                        if(stripos($verre->libelle_verre, $jsp) !== false) {
                            $jeRentre = true;
                            break;
                        }
                    }

                    foreach($transitionOrdre as $transition){
                        if(strpos($verre->libelle_verre, $transition) !== false) {
                            $jeRentre = true;
                            break;
                        }
                    }

                    foreach($nupolarOrdre as $nupolar){
                        if(stripos($verre->libelle_verre, $nupolar) !== false) {
                            $jeRentre = true;
                            break;
                        }
                    }

                    foreach($teinteOrdre as $teinte){
                        if(stripos($verre->libelle_verre, $teinte) !== false) {
                            $jeRentre = true;
                            break;
                        }
                    }

                    foreach($puissanceTeinteOrdre as $puissanceTeinte){
                        if(stripos($verre->libelle_verre, $puissanceTeinte) !== false) {
                            $jeRentre = true;
                            break;
                        }
                    }

                    if($jeRentre)
                        continue;


                    $tab[$verre->id_verre] = $verre->libelle_verre;
                }
            }

            foreach($traitementOrdre as $val){
                foreach($tab as $k => $v){
                    echo $val." | ".$v."<br>";
                    $ok = true;
                    if(stripos($v, $val) !== false){
                        if($val == 'Satin'){
                            if(stripos($v, 'UV') !== false)
                                $ok = false;
                        }

                        if($ok){
                            echo "je rentre <br>";
                            $data['order_verre'] = $ordre;
                            $data['id_verre'] = $k;
                            $this->m_verres->updateOrdre($data);
                            $ordre++;
                        }
                    }
                }

            }


            foreach($jeSaisPasOrdre as $jsp){
                $current_libelle = "";
                foreach($teinteOrdre as $teinte){
                    $tab = array();
                    foreach($verres as $key => $verre){
                        $jeRentre = false;

                        if($current_libelle != $verre->libelle_verre){
                            $current_libelle = $verre->libelle_verre;

                            if(!stripos($verre->libelle_verre ,$jsp)){
                                continue;
                            }

                            if(!stripos($verre->libelle_verre ,$teinte)){
                                continue;
                            }

                            $tab[$verre->id_verre] = $verre->libelle_verre;

                        }
                    }

                    foreach($traitementOrdre as $val){
                        foreach($tab as $k => $v){
                            echo $val." | ".$v."<br>";
                            $ok = true;
                            if(stripos($v, $val) !== false){
                                if($val == 'Satin'){
                                    if(stripos($v, 'UV') !== false)
                                        $ok = false;
                                }

                                if($ok){
                                    $data['order_verre'] = $ordre;
                                    $data['id_verre'] = $k;
                                    $this->m_verres->updateOrdre($data);
                                    $ordre++;
                                }
                            }
                        }
                    }

                    $tab = array();
                }
            }


            foreach($teinteOrdre as $teinte){
                $current_libelle = "";

                foreach($verres as $key => $verre){
                    $jeRentre = false;

                    foreach($jeSaisPasOrdre as $jsp){
                        if(stripos($verre->libelle_verre, $jsp) !== false) {
                            $jeRentre = true;
                            break;
                        }
                    }

                    if($jeRentre)
                        continue;


                    foreach($puissanceTeinteOrdre as $puissance){

                    }

                    if($current_libelle != $verre->libelle_verre){
                        $current_libelle = $verre->libelle_verre;

                        $tab[$verre->id_verre] = $verre->libelle_verre;

                    }
                }

            }

        }
    }
}