<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_teinte extends CI_Model
{
    var $table = 'teintes';

    public function __construct()
    {
        parent::__construct();
    }

    public function insertPrixTeinte() {
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
        $sqlTeintes = "SELECT * FROM teintes";
        $query = $this->db->query($sqlTeintes);

        $teintes =  $query->result();
        $teinteArray = [];
        foreach ($teintes as $teinte) {
            $teinteArray[$teinte->id] = $teinte->name;
        }

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

            foreach ($teintes as $teinte) {
                if ($teinte->code >= 878 && $teinte->code <= 881) {
                    $price = 10;
                }
                else {
                    $price = 6;
                }
                if ($idTypeVerreSolaire) {
                    $sql = "INSERT INTO teinte_prix (id_teinte, id_lenses, id_indice_verre, id_type_verre_solaire, price) VALUES ('".$teinte->id."','".$lens->id."','".$indiceId."','".$idTypeVerreSolaire."','".$price."')";
                }
                else {
                    $sql = "INSERT INTO teinte_prix (id_teinte, id_lenses, id_indice_verre, id_type_verre_solaire, price) VALUES ('"
                        .$teinte->id."','".$lens->id."','".$indiceId."',NULL,'".$price."')";
                }

                $this->db->query($sql);
            }
        }
    }

    public function getTeinteByCode($code) {
        $sql = "SELECT * FROM `teintes` 
                WHERE `code` = '$code'";
        $query = $this->db->query($sql);
        $teinte =  $query->result();
        return $teinte[0];
    }

    public function getNameByCode($code) {
        if (!empty($code)) {
            $teinte = $this->getTeinteByCode($code);
            return $teinte->name;
        }
        else
            return '';
    }

    public function calculPrice($nom_du_verre, $code, $userId)
    {
        $lens = $this->m_lenses->getLensesByTradFr($nom_du_verre);
        $teinte = $this->getTeinteByCode($code);
        $typeVerreSolaires = $this->m_type_verre_solaire->getTypeVerreSolaires();
        $myTypeVerreSolaire = NULL;
        foreach ($typeVerreSolaires as $typeVerreSolaire) {
            if(strpos($nom_du_verre, $typeVerreSolaire->name) !== false){
                $myTypeVerreSolaire = $typeVerreSolaire->name;
                break;
            }
        }
        $typeVerreSolaireId = $this->m_type_verre_solaire->getIdByName($myTypeVerreSolaire);
        return $this->getPrice($teinte->id, $lens->id,
            $typeVerreSolaireId, $userId);
    }

    public function getPrice($teinteId, $lensId, $typeVerreSolaireId, $userId) {
        if (!empty($typeVerreSolaireId)) {
            $sql = "SELECT * FROM `teinte_prix` 
                WHERE `id_teinte` = '$teinteId'
                AND `id_lenses` = '$lensId'
                AND `id_type_verre_solaire` = '$typeVerreSolaireId'
                AND `is_active` = 1
                AND id_user = $userId
                ORDER BY `id_user` DESC
                ";
        }
        else {
            $sql = "SELECT * FROM `teinte_prix` 
                WHERE `id_teinte` = '$teinteId'
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
                $sql = "SELECT * FROM `teinte_prix` 
                WHERE `id_teinte` = '$teinteId'
                AND `id_lenses` = '$lensId'
                AND `id_type_verre_solaire` = '$typeVerreSolaireId'
                AND `is_active` = 1
                AND id_user IS NULL
                ORDER BY `id_user` DESC
                ";
            }
            else {
                $sql = "SELECT * FROM `teinte_prix` 
                WHERE `id_teinte` = '$teinteId'
                AND `id_lenses` = '$lensId'
                AND `id_type_verre_solaire` is NULL
                AND `is_active` = 1
                AND id_user IS NULL
                ORDER BY `id_user` DESC";
            }
//            var_dump($sql);die;
            $query = $this->db->query($sql);
        }
        $teinte =  $query->result();
        return $teinte[0]->price;
    }

    public function getAllTeintes() {
        $sql = "SELECT * FROM $this->table ORDER BY id ASC";
        $query = $this->db->query($sql);
        $teintesArray = [];
        $teintes =  $query->result();
        //$i = 0;
        foreach ($teintes as $key => $teinte) {
            foreach($teinte as $keyTeinte => $value)
                $teintesArray[$key][$keyTeinte] = $value;
        }
        return $teintesArray;
    }

    public function getAllTeintesWithPrice($lensId, $userId) {
        $lens = $this->m_lenses->getLensesById($lensId);
        if (!$lens) {
            return false;
        }
        $sql = "SELECT teintes.*, teinte_prix.price 
                FROM `teintes` 
                INNER JOIN teinte_prix 
                WHERE teinte_prix.id_teinte = teintes.id 
                AND teinte_prix.id_lenses = $lensId
                AND (id_user = $userId OR id_user IS NULL)
                AND teinte_prix.is_active = 1
                ORDER BY id, id_user DESC";

        $query = $this->db->query($sql);
        $teintesArray = [];
        $teintes =  $query->result();
        $teintesArray[0]["name"] = "All Normal";
        $teintesArray[1]["name"] = "All Nm";

        $teintesExist = [];
        foreach ($teintes as $key => $teinte) {
            if (!in_array($teinte->id, $teintesExist)) {
                foreach ($teinte as $keyTeinte => $value) {
                    $teintesArray[$key + 2][$keyTeinte] = $value;
                }
                array_push($teintesExist, $teinte->id);
            }
        }
        return $teintesArray;
    }

    public
    function getTeintePriceList($user_id, $rowStart = NULL, $rowLength = NULL, $search = NULL)
    {
        $tab = array();

        if ($user_id != "") {
            $i = 0;
            $sqlLimit = "";
            if (!is_null($rowStart) && !is_null($rowLength)) {
                $sqlLimit = "LIMIT " . $rowStart . "," . $rowLength;
            }
            $sqlSearch = "";
            if (!is_null($search) && $search != "") {
                $sqlSearch = "AND (lenses.code LIKE '%" . $search . "%' OR teintes.code LIKE '%" . $search . "%' OR lenses.trad_fr LIKE '%" . $search . "%' OR prix.price LIKE '%" . $search . "%' OR teintes.name LIKE '%" . $search . "%' OR prix.created_at LIKE '%" . $search . "%')";
            }
            $sql = "SELECT teintes.id, prix.id_lenses, lenses.code as lens_code, lenses.trad_fr, teintes.name, teintes.code, prix.price, prix.initial_price, prix.is_active, prix.created_at, prix.desactived_at  FROM `teinte_prix` as prix
                    INNER JOIN lenses ON id_lenses = lenses.id
                    INNER JOIN teintes ON id_teinte = teintes.id
                    WHERE prix.id_user = $user_id
                    $sqlSearch
                    ORDER BY created_at DESC, prix.id DESC
                    $sqlLimit";
            $res = $this->db->query($sql);
            if ($res->num_rows() > 0) {
                $teintes = $res->result();
                foreach ($teintes as $teinte) {
                    $tab[$i]['code'] = $teinte->lens_code . " / " . $teinte->code;
                    $tab[$i]['verre'] = $teinte->trad_fr;
                    $tab[$i]['prix'] = $teinte->price . ' (' . $teinte->initial_price . ')';
                    $tab[$i]['teinte'] = $teinte->name;
                    $tab[$i]['date'] = $teinte->created_at;
                    if ($teinte->is_active) {
                        $tab[$i]['action'] =
                            '<a class="desactive_prix_teinte btn btn-icon waves-effect waves-light btn-warning tooltipster" href="#" rel="'
                            . $teinte->id_lenses . '*' . $teinte->id . '" original-title="Désactiver" title="Désactiver" >Désactiver</a>';
                    } else {
                        $tab[$i]['action'] = $teinte->desactived_at;
                    }
                    $tab[$i]['active'] = $teinte->is_active;

                    $i++;
                }
            }

//        var_dump($tab);die;
        }
        return $tab;

    }

    public
    function getCountTeintePriceList($user_id) {
        $sql = "SELECT count(*) AS total_row  FROM `teinte_prix` as prix
                    INNER JOIN lenses ON id_lenses = lenses.id
                    INNER JOIN teintes ON id_teinte = teintes.id
                    WHERE prix.id_user = $user_id
                    ORDER BY created_at DESC, prix.id DESC";
        $res = $this->db->query($sql);
        return $res->result()[0]->total_row;
    }

    public function setPriceTeinte($newPrice, $lensId, $nameVerre, $teinteId, $userId = NULL) {
        if ($teinteId != ""
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
            if ($teinteId == "All Normal" || $teinteId == "All Nm") {
                $teinteRequestToUpdate = "SELECT id FROM `teintes` WHERE ";

                if ($teinteId == "All Normal") {
                    $teinteRequest = "name NOT LIKE '%Nm%'";
                }
                else if ($teinteId == "All Nm") {
                    $teinteRequest = "name LIKE '%Nm%'";
                }
                $teinteRequestToUpdate .= $teinteRequest;

                $sql = "SELECT * FROM teinte_prix WHERE id_teinte IN ($teinteRequestToUpdate) 
                    AND id_lenses = $lensId
                    AND is_active = 1
                    AND id_user IS NULL";
//                var_dump($sql);die;
                $res = $this->db->query($sql);
                $teintes = $res->result();

                $teintesArray = [];
                foreach ($teintes as $teinte) {
                    $teintesArray[$teinte->id_teinte] = $teinte->price;
                }
                $sql = "UPDATE `teinte_prix` SET `is_active` = 0, `desactived_at` = NOW()
                              WHERE id_teinte IN ($teinteRequestToUpdate)
                              AND id_lenses = $lensId
                              AND is_active = 1
                              AND $userIdRequest";

                $this->db->query($sql);


                $sql = "SELECT * FROM `teintes` 
                        WHERE $teinteRequest
                        AND active_to_user = 1";
                $query = $this->db->query($sql);
                $teintesInsert = $query->result();
                foreach ($teintesInsert as $teinteInsert) {
                    $sql = "INSERT INTO teinte_prix (id_teinte, id_lenses, id_indice_verre, id_type_verre_solaire, id_user, price, initial_price) 
                    VALUES ('".$teinteInsert->id."','".$lensId."','".$indiceId."',".$typeVerreSolaireId.",".$userId.",'".$newPrice."','".$teintesArray[$teinteInsert->id]."')";
                    $this->db->query($sql);
                }
                //var_dump($teintesInsert);die;
            }
            else {
                $sql = "SELECT * FROM `teinte_prix` 
                WHERE id_teinte = $teinteId
                AND id_lenses = $lensId
                AND is_active = 1
                AND $userIdRequest";

                $query = $this->db->query($sql);
                if ($query->num_rows() > 0) {
                    $teintePrix = $query->result()[0];
                    if ($teintePrix->price == $newPrice) {
                        $insert = false;
                    }
                    else {
                        $sql = "UPDATE `teinte_prix` SET `is_active` = 0
                                  WHERE id_teinte = $teinteId
                                  AND id_lenses = $lensId
                                  AND is_active = 1
                                  AND $userIdRequest";
                        $this->db->query($sql);
                    }
                }
                if ($insert) {
                    $sql = "SELECT * FROM teinte_prix WHERE id_teinte = $teinteId
                    AND id_lenses = $lensId
                    AND is_active = 1
                    AND id_user IS NULL";
//                var_dump($sql);die;
                    $res = $this->db->query($sql);
                    $initialPrice = $res->result()[0]->price;
                    $sql = "INSERT INTO teinte_prix (id_teinte, id_lenses, id_indice_verre, id_type_verre_solaire, id_user, price, initial_price) 
                VALUES ('".$teinteId."','".$lensId."','".$indiceId."',".$typeVerreSolaireId.",".$userId.",'".$newPrice."','".$initialPrice."')";

                    $this->db->query($sql);
                }
            }




            echo "OK";
        }
        else {
            echo "NOT";
        }

    }


    public function desactivePriceTeinte($lensId, $teinteId, $userId = NULL) {
        if (!empty($userId)) {
            $userIdRequest = "id_user = $userId";
        }
        else {
            $userIdRequest = "id_user IS NULL";
        }
        $sql = "UPDATE `teinte_prix` SET `is_active` = 0
                                  WHERE id_teinte = $teinteId
                                  AND id_lenses = $lensId
                                  AND is_active = 1
                                  AND $userIdRequest";
        $this->db->query($sql);
        echo "OK";
    }

    public function duplicateTeintes($userId, $fromUserId) {
        if ($userId != ""
            && $fromUserId != "") {
            $sql = "UPDATE `teinte_prix` SET `is_active` = 0 WHERE id_user = '" . $userId . "'";
            $this->db->query($sql);
            $fromRes = $this->db->query("SELECT * FROM teinte_prix WHERE id_user = '" . $fromUserId . "' AND is_active = 1");
            $fromTeintes = $fromRes->result();
            foreach ($fromTeintes as $fromTeinte) {
                if (empty($fromTeinte->id_type_verre_solaire)) {
                    $typeVerreSolaireId = 'NULL';
                }
                else {
                    $typeVerreSolaireId = "'" . $fromTeinte->id_type_verre_solaire . "'";
                }
                $sql = "INSERT INTO `teinte_prix` (`id_teinte`, `id_lenses`, `id_indice_verre`, `id_type_verre_solaire`, `id_user`, `price`, `initial_price`)
                        VALUES ('" . $fromTeinte->id_teinte . "', '" . $fromTeinte->id_lenses . "', '" . $fromTeinte->id_indice_verre . "', " . $typeVerreSolaireId . ", '" . $userId . "', '" . $fromTeinte->price . "', '" . $fromTeinte->initial_price . "')";
                $this->db->query($sql);
            }
            return "OK";
        }
        else {
            return false;
        }
    }
}
