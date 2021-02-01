<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_traitements extends CI_Model
{
    var $table = 'traitements';

    public function __construct() {
        parent::__construct();
    }

    public function insertPrixTraitement() {
        $sqlLenses = "SELECT * FROM `lenses` WHERE
                display = 'X' AND
                (`trad_fr` LIKE '%T-one%'
                OR `trad_fr` LIKE '%Top Office%'
                OR `trad_fr` LIKE '%Bifocal%'
                OR `trad_fr` LIKE '%Trifocal%' 
                OR `trad_fr` LIKE '%E-space%' 
                OR `trad_fr` LIKE '%Platinium%' 
                OR `trad_fr` LIKE '%Oméga%' 
                OR `trad_fr` LIKE '%Elysium%' 
                OR `trad_fr` LIKE '%Freestyle%'
                OR `trad_fr` LIKE '%EyeFatigue%')
                ORDER BY `lenses`.`name`  DESC";
        $query = $this->db->query($sqlLenses);
        if ($query->num_rows() > 0)
            $lenses =  $query->result();
        else return false;
        $sqlTypeVerreSolaires = "SELECT * FROM type_verre_solaire";
        $query = $this->db->query($sqlTypeVerreSolaires);
        $typeVerreSolaires =  $query->result();
        //$generation_verres = ['T-one', 'Top Office', 'Bifocal', 'Trifocal', 'E-space', 'Platinium', 'Oméga', 'Elysium', 'Freestyle', 'EyeFatigue'];
        $sqlTraitements = "SELECT * FROM traitements";
        $query = $this->db->query($sqlTraitements);

        $traitements =  $query->result();
        $traitementArray = [];
        foreach ($traitements as $traitement) {
            $traitementArray[$traitement->id] = $traitement->name;
        }
        $count = 0;
        $null = false;
        $indices = ['1,53' => 2, '1,56' => 3, '1,5' => 1,  '1,67' => 5, '1,6' => 4, '1,74' => 6, '1,591' => 8];
        foreach ($lenses as $lens) {
            foreach ($indices as $indice => $indice_id) {
                if (stripos($lens->trad_fr, $indice) !== FALSE) {
                    $indiceId = $indice_id;
                    break;
                }
            }
            $idTypeVerreSolaire = NULL;
            foreach ($typeVerreSolaires as $typeVerreSolaire) {
                if (stripos($lens->trad_fr, $typeVerreSolaire->name) !== FALSE) {
                    $idTypeVerreSolaire = $typeVerreSolaire->id;
                    break;
                }
            }
            if (stripos($lens->trad_fr, 't-one') !== FALSE) {
                if ($idTypeVerreSolaire == NULL || $typeVerreSolaire->name == 'BlueCoat Defender') {
                    $prices = [
                        'Durci' => 0,
                        'HMC' => 7,
                        'HMC Face Interne' => 7,
                        'Satin' => 12,
                        'Satin Face Interne' => 12,
                        'Satin UV' => 15,
                        'Satin UV Face Interne' => 15,
                        'Achromatique' => 20,
                        'Achromatique Face Interne' => 20,
                        'BlueCoat' => 20,
                        'Satin Max' => 22,
                        'Satin Max Face Interne' => 22,
                        'Satin Drive Or' => 22,
                        'Miroir Argent HMC face interne' => 14,
                        'Miroir Doré HMC face interne' => 14,
                        'Miroir Bleu HMC face interne' => 14,
                        'Miroir Flash HMC face interne' => 14,
                    ];
                }
                else {
                    $prices = [
                        'Durci' => 0,
                        'HMC' => 4,
                        'HMC Face Interne' => 4,
                        'Satin' => 8,
                        'Satin Face Interne' => 8,
                        'Satin UV' => 11,
                        'Satin UV Face Interne' => 11,
                        'Achromatique' => 16,
                        'Achromatique Face Interne' => 16,
                        'BlueCoat' => 16,
                        'Satin Max' => 18,
                        'Satin Max Face Interne' => 18,
                        'Satin Drive Or' => 18,
                        'Miroir Argent HMC face interne' => 14,
                        'Miroir Doré HMC face interne' => 14,
                        'Miroir Bleu HMC face interne' => 14,
                        'Miroir Flash HMC face interne' => 14,
                    ];
                }
            }
            else if (stripos($lens->trad_fr, 'E-space') !== FALSE) {
                if ($idTypeVerreSolaire == NULL || $typeVerreSolaire->name == 'BlueCoat Defender') {
                    $prices = ['Durci' => 0,
                               'HMC' => 7,
                               'HMC Face Interne' => 7,
                               'Satin' => 11,
                               'Satin Face Interne' => 11,
                               'Satin UV' => 14,
                               'Satin UV Face Interne' => 14,
                               'Achromatique' => 19,
                               'Achromatique Face Interne' => 19,
                               'BlueCoat' => 19,
                               'Satin Max' => 21,
                               'Satin Max Face Interne' => 21,
                               'Satin Drive Or' => 21,
                               'Miroir Argent HMC face interne' => 14,
                               'Miroir Doré HMC face interne' => 14,
                               'Miroir Bleu HMC face interne' => 14,
                               'Miroir Flash HMC face interne' => 14,
                    ];
                }
                else {
                    $prices = ['Durci' => 0,
                               'HMC' => 3,
                               'HMC Face Interne' => 3,
                               'Satin' => 7,
                               'Satin Face Interne' => 7,
                               'Satin UV' => 10,
                               'Satin UV Face Interne' => 10,
                               'Achromatique' => 15,
                               'Achromatique Face Interne' => 15,
                               'BlueCoat' => 15,
                               'Satin Max' => 17,
                               'Satin Max Face Interne' => 17,
                               'Satin Drive Or' => 17,
                               'Miroir Argent HMC face interne' => 14,
                               'Miroir Doré HMC face interne' => 14,
                               'Miroir Bleu HMC face interne' => 14,
                               'Miroir Flash HMC face interne' => 14,
                    ];
                }
            }
            else if (stripos($lens->trad_fr, 'Platinium') !== FALSE
                     || stripos($lens->trad_fr, 'Oméga') !== FALSE
                     || stripos($lens->trad_fr, 'Elysium') !== FALSE
                     || stripos($lens->trad_fr, 'Top Office') !== FALSE
                     || stripos($lens->trad_fr, 'bifocal') !== FALSE
                     || stripos($lens->trad_fr, 'trifocal') !== FALSE
            ) {
                $prices = ['Durci' => 0,
                           'HMC' => 4,
                           'HMC Face Interne' => 4,
                           'Satin' => 8,
                           'Satin Face Interne' => 8,
                           'Satin UV' => 11,
                           'Satin UV Face Interne' => 11,
                           'Achromatique' => 16,
                           'Achromatique Face Interne' => 16,
                           'BlueCoat' => 16,
                           'Satin Max' => 18,
                           'Satin Max Face Interne' => 18,
                           'Satin Drive Or' => 18,
                           'Miroir Argent HMC face interne' => 14,
                           'Miroir Doré HMC face interne' => 14,
                           'Miroir Bleu HMC face interne' => 14,
                           'Miroir Flash HMC face interne' => 14,                ];
            }
            else if (stripos($lens->trad_fr, 'Freestyle') !== FALSE
                     || stripos($lens->trad_fr, 'EyeFatigue') !== FALSE
            ) {
                if ($idTypeVerreSolaire == NULL || $typeVerreSolaire->name == 'BlueCoat Defender') {
                    $prices = ['Durci' => 0,
                               'HMC' => 3,
                               'HMC Face Interne' => 3,
                               'Satin' => 7,
                               'Satin Face Interne' => 7,
                               'Satin UV' => 7,
                               'Satin UV Face Interne' => 10,
                               'Achromatique' => 10,
                               'Achromatique Face Interne' => 15,
                               'BlueCoat' => 15,
                               'Satin Max' => 17,
                               'Satin Max Face Interne' => 17,
                               'Satin Drive Or' => 17,
                               'Miroir Argent HMC face interne' => 14,
                               'Miroir Doré HMC face interne' => 14,
                               'Miroir Bleu HMC face interne' => 14,
                               'Miroir Flash HMC face interne' => 14,
                    ];
                } else {
                    $prices = ['Durci' => 0,
                               'HMC' => 3,
                               'HMC Face Interne' => 3,
                               'Satin' => 7,
                               'Satin Face Interne' => 7,
                               'Satin UV' => 10,
                               'Satin UV Face Interne' => 10,
                               'Achromatique' => 15,
                               'Achromatique Face Interne' => 15,
                               'BlueCoat' => 15,
                               'Satin Max' => 17,
                               'Satin Max Face Interne' => 17,
                               'Satin Drive Or' => 17,
                               'Miroir Argent HMC face interne' => 14,
                               'Miroir Doré HMC face interne' => 14,
                               'Miroir Bleu HMC face interne' => 14,
                               'Miroir Flash HMC face interne' => 14,
                    ];
                }
            }
            //            if ($idTypeVerreSolaire == NULL) {
            //                var_dump($lens->trad_fr);die;
            //            }

            foreach ($traitementArray as $traitementId => $traitementName) {
                $price = $prices[$traitementName];
                if ($idTypeVerreSolaire) {
                    $sql = "INSERT INTO traitement_prix (id_traitement, id_lenses, id_indice_verre, id_type_verre_solaire, price) VALUES ('".$traitementId."','".$lens->id."','".$indiceId."','".$idTypeVerreSolaire."','".$price."')";
                }
                else {
                    $sql = "INSERT INTO traitement_prix (id_traitement, id_lenses, id_indice_verre, id_type_verre_solaire, price) VALUES ('"
                           .$traitementId."','".$lens->id."','".$indiceId."',NULL,'".$price."')";
                }
                if ($idTypeVerreSolaire == NULL) {
                    $null = true;
                }
                //var_dump($sql);die;
                $this->db->query($sql);
            }
        }
        $this->db->query("UPDATE `verres` SET `prix_traitement` = 0 WHERE `libelle_verre` LIKE '%Durci%' AND `libelle_verre` NOT LIKE '%freestyle%' AND `libelle_verre` NOT LIKE '%EyeFatigue%'");
    }

    public function getTraitementByCode($code) {
        $sql = "SELECT * FROM `traitements` 
                WHERE `code` = '$code'";
        $query = $this->db->query($sql);
        $traitement =  $query->result();
        return $traitement[0];
    }

    public function calculPrice($nom_du_verre, $code, $userId) {
        $lens = $this->m_lenses->getLensesByTradFr($nom_du_verre);
        $traitement = $this->getTraitementByCode($code);
        $typeVerreSolaires = $this->m_type_verre_solaire->getAllTypeVerreSolaire();
        $myTypeVerreSolaire = NULL;
        foreach ($typeVerreSolaires as $typeVerreSolaire) {
            if(strpos($_POST['nom_du_verre'], $typeVerreSolaire->name) !== false){
                $myTypeVerreSolaire = $typeVerreSolaire->name;
                break;
            }
        }
        $typeVerreSolaireId = $this->m_type_verre_solaire->getIdByName($myTypeVerreSolaire);
        $price = $this->getPrice($traitement->id, $lens->id,
                                                $typeVerreSolaireId, $userId);
        return $price;
    }

    public function getPrice($traitementId, $lensId, $typeVerreSolaireId, $userId) {
        if (!empty($typeVerreSolaireId)) {
            $sql = "SELECT * FROM `traitement_prix` 
                WHERE `id_traitement` = '$traitementId'
                AND `id_lenses` = '$lensId'
                AND `id_type_verre_solaire` = '$typeVerreSolaireId'
                ORDER BY `id_user` DESC;
                ";
        }
        else {
            $sql = "SELECT * FROM `traitement_prix` 
                WHERE `id_traitement` = '$traitementId'
                AND `id_lenses` = '$lensId'
                AND `id_type_verre_solaire` is NULL
                ORDER BY `id_user` DESC";
        }
        $query = $this->db->query($sql);
        $traitement =  $query->result();
        return $traitement[0]->price;
    }
}
