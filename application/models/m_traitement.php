<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_traitement extends CI_Model
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
        $indices = ['1,53' => 2, '1,56' => 3, '1,59' => 8, '1,5' => 1,  '1,67' => 5, '1,6' => 4, '1,74' => 6];
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
//        $this->db->query("UPDATE `verres` SET `prix_traitement` = 0
//                          WHERE `libelle_verre` LIKE '%Durci%'
//                          AND `libelle_verre` NOT LIKE '%freestyle%'
//                          AND `libelle_verre` NOT LIKE '%EyeFatigue%'");
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
        $typeVerreSolaires = $this->m_type_verre_solaire->getTypeVerreSolaires();
        $myTypeVerreSolaire = NULL;
        foreach ($typeVerreSolaires as $typeVerreSolaire) {
            if(strpos($nom_du_verre, $typeVerreSolaire->name) !== false){
                $myTypeVerreSolaire = $typeVerreSolaire->name;
                break;
            }
        }
        $typeVerreSolaireId = $this->m_type_verre_solaire->getIdByName($myTypeVerreSolaire);
        return $this->getPrice($traitement->id, $lens->id,
                                                $typeVerreSolaireId, $userId);
    }

    private function getPrice($traitementId, $lensId, $typeVerreSolaireId, $userId) {
        if (!empty($typeVerreSolaireId)) {
            $sql = "SELECT * FROM `traitement_prix` 
                WHERE `id_traitement` = '$traitementId'
                AND `id_lenses` = '$lensId'
                AND `id_type_verre_solaire` = '$typeVerreSolaireId'
                AND `is_active` = 1
                AND id_user = $userId
                ORDER BY `id_user` DESC
                ";
        }
        else {
            $sql = "SELECT * FROM `traitement_prix` 
                WHERE `id_traitement` = '$traitementId'
                AND `id_lenses` = '$lensId'
                AND `id_type_verre_solaire` is NULL
                AND `is_active` = 1
                AND id_user = $userId
                ORDER BY `id_user` DESC";
        }

        $query = $this->db->query($sql);
        //var_dump($query->num_rows());die;
        if ($query->num_rows() == 0) {
            if (!empty($typeVerreSolaireId)) {
                $sql = "SELECT * FROM `traitement_prix` 
                WHERE `id_traitement` = '$traitementId'
                AND `id_lenses` = '$lensId'
                AND `id_type_verre_solaire` = '$typeVerreSolaireId'
                AND `is_active` = 1
                AND id_user IS NULL
                ORDER BY `id_user` DESC
                ";
            }
            else {
                $sql = "SELECT * FROM `traitement_prix` 
                WHERE `id_traitement` = '$traitementId'
                AND `id_lenses` = '$lensId'
                AND `id_type_verre_solaire` is NULL
                AND `is_active` = 1
                AND id_user IS NULL
                ORDER BY `id_user` DESC";
            }
            $query = $this->db->query($sql);
        }
        if ($query->num_rows() == 0) {
            return 0;
        }
        $traitement =  $query->result();

        return $traitement[0]->price;
    }

    public function getAllTraitements() {
        $sql = "SELECT * FROM $this->table ORDER BY id ASC";
        $query = $this->db->query($sql);
        $traitementsArray = [];
        $traitements =  $query->result();
        //$i = 0;
        foreach ($traitements as $key => $traitement) {
            foreach($traitement as $keyTraitement => $value)
            $traitementsArray[$key][$keyTraitement] = $value;
        }
        return $traitementsArray;
    }

    public function getAllTraitementsWithPrice($lensId, $userId) {
        $lens = $this->m_lenses->getLensesById($lensId);
        if (!$lens) {
            return false;
        }
        $sql = "SELECT traitements.*, traitement_prix.price 
                FROM `traitements` 
                INNER JOIN traitement_prix 
                WHERE traitement_prix.id_traitement = traitements.id 
                AND traitement_prix.id_lenses = $lensId
                AND traitement_prix.is_active = 1
				AND (id_user = $userId OR id_user IS NULL)
                ORDER BY id, id_user DESC";

        $query = $this->db->query($sql);
        $traitementsArray = [];
        $traitements =  $query->result();
        $traitementsExist = [];
        foreach ($traitements as $key => $traitement) {
            if (!in_array($traitement->id, $traitementsExist)) {
                foreach ($traitement as $keyTraitement => $value) {
                    $traitementsArray[$key][$keyTraitement] = $value;
                }
                array_push($traitementsExist, $traitement->id);
            }
        }
        return $traitementsArray;
    }

    public
    function getTraitementPriceList($user_id)
    {
        $tab = array();

        if ($user_id != "") {
            $i = 0;

            $sql = "SELECT traitements.id, prix.id_lenses, lenses.code as lens_code, lenses.trad_fr, traitements.name, traitements.code, prix.price, ref.price as price_initial, prix.is_active, prix.created_at, prix.desactived_at  FROM `traitement_prix` as prix
                    INNER JOIN lenses ON id_lenses = lenses.id
                    INNER JOIN traitements ON id_traitement = traitements.id
                    LEFT JOIN `traitement_prix` AS ref ON ref.`id_user` is NULL and prix.`id_traitement`=ref.`id_traitement` and prix.`id_lenses` = ref.`id_lenses`
                    WHERE prix.id_user = $user_id
                    ORDER BY created_at DESC, prix.id DESC";
            $res = $this->db->query($sql);

            $traitements = $res->result();
            foreach ($traitements as $traitement) {
                $tab[$i]['code'] = $traitement->lens_code . " / " . $traitement->code;
                $tab[$i]['verre'] = $traitement->trad_fr;
                $tab[$i]['prix'] = $traitement->price . ' (' . $traitement->price_initial . ')';
                $tab[$i]['traitement'] = $traitement->name;
                $tab[$i]['date'] = $traitement->created_at;
                if ($traitement->is_active) {
                    $tab[$i]['action'] =
                        '<a class="desactive_prix_traitement btn btn-icon waves-effect waves-light btn-warning tooltipster" href="#" rel="'
                        . $traitement->id_lenses . '*' . $traitement->id . '" original-title="Désactiver" title="Désactiver" >Désactiver</a>';
                }
                else {
                    $tab[$i]['action'] = $traitement->desactived_at;
                }
                $tab[$i]['active'] = $traitement->is_active;

                $i++;
            }


        }
        return $tab;

    }

    public function setPriceTraitement($newPrice, $lensId, $nameVerre, $traitementId, $userId = NULL) {

        if ($traitementId != ""
            && $newPrice != ""
            && $lensId != "") {
            $sql = "SELECT * FROM `indice_verre` WHERE active = 1";
            $res = $this->db->query($sql);
            $indices = $res->result();
            $sql = "SELECT * FROM `type_verre_solaire`";
            $res = $this->db->query($sql);
            $typeVerreSolaires = $res->result();
//            $sql = "SELECT * FROM `lenses` WHERE code = '$codeVerre'";
//            $res = $this->db->query($sql);
//            $lens = $res->result()[0];
            $nameVerre = preg_replace("/\([^)]+\)/","",$nameVerre);
            $nameVerreVirgule = str_replace(',', '.', $nameVerre);
            foreach ($indices as $indice) {
                $indiceNum = abs($indice->indice_verre);
                if (stripos($nameVerre, $indiceNum . ' ') !== FALSE || stripos($nameVerreVirgule, $indiceNum . ' ') !== FALSE) {
                    $indiceId = $indice->id_indice_verre;
                    break;
                }
            }
            $typeVerreSolaireId = NULL;
            foreach ($typeVerreSolaires as $typeVerreSolaire) {
                if (stripos($nameVerre, $typeVerreSolaire->name) !== FALSE) {
                    $typeVerreSolaireId = $typeVerreSolaire->id;
                    break;
                }
            }
            $insert = true;
            if (!empty($userId)) {
                $userIdRequest = "id_user = $userId";
            }
            else {
                $userIdRequest = "id_user IS NULL";
            }
            $sql = "SELECT * FROM `traitement_prix` 
                WHERE id_traitement = $traitementId
                AND id_lenses = $lensId
                AND is_active = 1
                AND $userIdRequest";
            $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
                $traitementPrix = $query->result()[0];
                if ($traitementPrix->price == $newPrice) {
                    $insert = false;
                }
                else {
                    $sql = "UPDATE `traitement_prix` SET `is_active` = 0, desactived_at = NOW()
                                  WHERE id_traitement = $traitementId
                                  AND id_lenses = $lensId
                                  AND is_active = 1
                                  AND $userIdRequest";
                    $this->db->query($sql);
                }
            }
            if (empty($typeVerreSolaireId)) {
                $typeVerreSolaireId = 'NULL';
            }
            else {
                $typeVerreSolaireId = "'" . $typeVerreSolaireId . "'";
            }
            if (empty($userId)) {
                $userId = 'NULL';
            }
            else {
                $userId = "'" . $userId . "'";
            }
            if ($insert) {
                $sql = "INSERT INTO traitement_prix (id_traitement, id_lenses, id_indice_verre, id_type_verre_solaire, id_user, price) 
                VALUES ('".$traitementId."','".$lensId."','".$indiceId."',".$typeVerreSolaireId.",".$userId.",'".$newPrice."')";
                $this->db->query($sql);
            }
            echo "OK";
        }
        else {
            echo "NOT";
        }

    }

    public function desactivePriceTraitement($lensId, $traitementId, $userId = NULL) {
//        var_dump($lensCode);die;
        if (!empty($userId)) {
            $userIdRequest = "id_user = $userId";
        }
        else {
            $userIdRequest = "id_user IS NULL";
        }
        $sql = "UPDATE `traitement_prix` SET `is_active` = 0, `desactived_at` = NOW() 
                                  WHERE id_traitement = $traitementId
                                  AND id_lenses = $lensId
                                  AND is_active = 1
                                  AND $userIdRequest";

        $this->db->query($sql);
        echo "OK";
    }

    public function duplicateTraitements($userId, $fromUserId) {
        if ($userId != ""
            && $fromUserId != "") {
            $sql = "UPDATE `traitement_prix` SET `is_active` = 0 WHERE id_user = '" . $userId . "'";
            $this->db->query($sql);
            $fromRes = $this->db->query("SELECT * FROM traitement_prix WHERE id_user = '" . $fromUserId . "' AND is_active = 1");
            $fromTraitements = $fromRes->result();
            foreach ($fromTraitements as $fromTraitement) {
                if (empty($fromTraitement->id_type_verre_solaire)) {
                    $typeVerreSolaireId = 'NULL';
                }
                else {
                    $typeVerreSolaireId = "'" . $fromTraitement->id_type_verre_solaire . "'";
                }
                $sql = "INSERT INTO `traitement_prix` (`id_traitement`, `id_lenses`, `id_indice_verre`, `id_type_verre_solaire`, `id_user`, `price`)
                        VALUES ('" . $fromTraitement->id_traitement . "', '" . $fromTraitement->id_lenses . "', '" . $fromTraitement->id_indice_verre . "', " . $typeVerreSolaireId . ", '" . $userId . "', '" . $fromTraitement->price . "')";
                $this->db->query($sql);

            }
            return "OK";
        }
        else {
            return false;
        }
    }

    public function duplicateTraitementPrix458() {
        $userId = 458;
            $listUsers = [459,461,462,463,473,483];
            $this->duplicateTraitementPrix($userId, $listUsers);
    }


    public function duplicateTraitementPrix370() {
        $userId = 370;
        $listUsers = [564,
            522,
            509,
            506,
            503,
            501,
            499,
            497,
            491,
            481,
            480,
            479,
            478,
            471,
            470,
            469,
            468,
            466,
            444,
            441,
            438,
            433,
            431,
            430,
            422,
            420,
            417,
            416,
            413,
            411,
            410,
            409,
            408,
            401,
            400,
            399,
            398,
            397,
            396,
            394,
            393,
            392,
            390,
            388,
            385,
            384,
            383,
            382,
            381,
            380,
            379,
            377,
            369];
        $this->duplicateTraitementPrix($userId, $listUsers);
    }

    public function duplicateTraitementPrix563() {
        $userId = 563;
        $listUsers = [560,
            552,
            533,
            532,
            531,
            505,
            504,
            489,
            488,
            487,
            484,
            474,
            456,
            455,
            453,
            449,
            448,
            446,
            442,
            440,
            437,
            423,
            407,
            386,
            378,
            374,
            373,
            362,
            358,
            354,
            348,
            345,
            343,
            342,
            335,
            314,
            305,
            298,
            296,
            282,
            278,
            269,
            255,
            253,
            250,
            248,
            244,
            239,
            220,
            218,
            208,
            207,
            206,
            201,
            191,
            158,
            157,
            154,
            153,
            152,
            151,
            149,
            147,
            146,
            144,
            142,
            137,
            136,
            130,
            124,
            113,
            102,
            83,
            60,
            29];
        $this->duplicateTraitementPrix($userId, $listUsers);
    }

    private function duplicateTraitementPrix($userId, $listUsers) {
        $sql = "SELECT * FROM traitement_prix WHERE id_user = $userId";
        $query = $this->db->query($sql);
        $results =  $query->result();
        foreach ($listUsers as $listUser) {
            foreach ($results as $result) {
                if (!empty($result->id_type_verre_solaire)) {
                    $userTypeVerreSolaireRequest = "'" . $result->id_type_verre_solaire . "'";
                }
                else {
                    $userTypeVerreSolaireRequest = 'NULL';
                }
//                    var_dump($result);
                $sql2 = "INSERT INTO traitement_prix (id_traitement, id_lenses, id_indice_verre, id_type_verre_solaire, id_user, price) 
                             VALUES ('" . $result->id_traitement . "','" . $result->id_lenses . "','" . $result->id_indice_verre . "'," . $userTypeVerreSolaireRequest . ",'" .  $listUser . "','" .  $result->price . "')";
                $this->db->query($sql2);
            }


        }
    }
}
