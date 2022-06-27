<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_teledetourage extends CI_Model
{
    var $table = 'teledetourage_format_user';

    public function __construct()
    {
        parent::__construct();
    }

    public function insertPrice()
    {
        $formats = $this->getFormats();

        $sqlUser = "SELECT * FROM `users`";
        $query = $this->db->query($sqlUser);
        $users = $query->result();
        $sql = "INSERT INTO $this->table (`id_user`, `id_teledetourage_format`, `price`) VALUES ";
        foreach ($users as $user) {
            foreach ($formats as $format) {
                $price = 0;
                if ($format->id == 4) {
                    $price = 3.5;
                }
                $sql .= "('$user->id_users', '$format->id', $price),";
            }
        }
        $sql = rtrim($sql, ',');
        $this->db->query($sql);
    }

    public function addTeledetourageFormat($userId)
    {
        $formats = $this->getFormats();
        $sql = "REPLACE INTO $this->table (`id_user`, `id_teledetourage_format`, `price`) VALUES ";
        foreach ($formats as $format) {
            $price = 0;
            if ($format->id == 4) {
                $price = 3.5;
            }
            $sql .= "('$userId', '$format->id', $price),";
        }
        $sql = rtrim($sql, ',');
        $this->db->query($sql);
    }

    public function getPriceByUserId($userId)
    {
        $sqlPrice = "SELECT `name`, `price` FROM $this->table as tfu
                    INNER JOIN `teledetourage_format` as tf ON tfu.id_teledetourage_format = tf.id
                    WHERE `id_user` = $userId";
        $query = $this->db->query($sqlPrice);
        return $query->result();
    }

    public function getFormats()
    {
        $sqlFormat = "SELECT * FROM `teledetourage_format`";
        $query = $this->db->query($sqlFormat);
        return $query->result();
    }

    public function getTeledetourageFormatPrice($userId, $formatTeledetourage)
    {
        $sql = "SELECT price FROM `teledetourage_format_user` INNER JOIN `teledetourage_format` ON `id_teledetourage_format` = teledetourage_format.id WHERE teledetourage_format.name = '$formatTeledetourage' AND id_user = $userId";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result[0]->price;
    }

    public function getTeledetourageFormatId($formatTeledetourage)
    {
        $sql = "SELECT id FROM `teledetourage_format` WHERE name = '$formatTeledetourage'";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result[0]->id;
    }

    public function getMontureByFormatId($formatId)
    {
        $sql = "SELECT name FROM `teledetourage_format` WHERE id = '$formatId'";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result[0]->name;
    }

    public function getNameInFrenchMontureByFormatId($formatId) {
        $name = $this->getMontureByFormatId($formatId);
        switch ($name) {
            case 'plastic':
                return 'Plastique';
            case 'metal':
                return 'Métal';
            case 'nylor':
                return 'Nylor';
            case 'drilled':
                return 'Percée';
        }
    }

    public function getResultByOmaAndData($data, $oma, $length = 5) {
        $index = stripos($oma, $data);
        $string = substr($oma, $index);
        $firstIndex = stripos($string, '=') + 1;
        $string = substr($string, $firstIndex, $length);
        preg_match_all('!\d+\.*\d*!', $string, $matches);
        return $matches[0][0];
    }

    public function getResultByOmaDrilledData($omaString) {
        $true = true;
        $omaString = stristr($omaString, '_DRILLE=B;CF');
        $drilled_array = [];
        //$i = 0;
        while ($omaString) {
            $end = strpos($omaString, 'CentreBoxing');
            $string = substr($omaString, 0, $end);
            preg_match_all('!\-*\d+\.*\d*!', $string, $matches);
            array_push($drilled_array,$matches[0]);
            $omaString = substr($omaString, $end);
            $omaString = stristr($omaString, '_DRILLE=B;CF');
//            print_r($omaString);
        }
//        print_r($i);
        return $drilled_array;
    }

    public
    function getComptesTeledetourage($commercial = 'Tout')
    {
        $date = date('Y-m-01');
        $dateStart = date("Y-m-d", strtotime("-5 months",strtotime($date)));
        $tab = array();
        $arrayComptes = array();

        $i = 0;
        $sql = "SELECT  DATE_FORMAT(date_commande, '%Y-%m') AS year_and_month
                FROM `commande` 
                WHERE `code_oma` != '' AND `code_oma` IS NOT NULL AND `date_commande` >= '$dateStart' 
                GROUP BY year_and_month
                ORDER BY year_and_month DESC";


        $query = $this->db->query($sql);
        $months = $query->result();

        $sql = "SELECT id_users, DATE_FORMAT(date_commande, '%Y-%m') AS year_and_month, SUM(total_commande + tarif_teledetourage) as total
                FROM `commande` 
                WHERE `code_oma` != '' AND `code_oma` IS NOT NULL AND `date_commande` >= '$dateStart' 
                GROUP BY id_users, year_and_month";
        $res = $this->db->query($sql);
        $comptes = $res->result();

        $dateStart = date('Y-m-d');
        $sql = "SELECT id_users, SUM(total_commande + tarif_teledetourage) as total
                FROM `commande` 
                WHERE `code_oma` != '' AND `code_oma` IS NOT NULL AND `date_commande` >= '$dateStart' 
                GROUP BY id_users";
        $res = $this->db->query($sql);
        $comptes_by_day = $res->result();
        $arrayByDay = [];
        foreach ($comptes_by_day as $compte_by_day) {
            $arrayByDay[$compte_by_day->id_users] = $compte_by_day->total;
        }
        $addSql = '';
        if ($commercial == 'Daniel') {
            $addSql = 'AND Daniel = 100';
        }
        else if ($commercial == 'Gregory'){
            $addSql = 'AND Gregory = 100';
        }
        $sql = "SELECT * FROM users WHERE `is_teledetourable` = 1 $addSql";
//        print_r($sql);die;
        $res = $this->db->query($sql);
        $users = $res->result();
//        print_r($users);die;
        $userIdArray = [];
        foreach ($users as $user) {
            $arrayComptes[$user->id_users]['societe'] = $user->nom_societe;
            if (!array_key_exists($user->id_users, $arrayComptes)) {
                $arrayComptes[$user->id_users][$comptes[0]->year_and_month] = 0;
            }
            if ($user->Daniel == 100) {
                $arrayComptes[$user->id_users]['commercial'] = 'Daniel';
            }
            else if ($user->Gregory == 100) {
                $arrayComptes[$user->id_users]['commercial'] = 'Gregory';
            }
            $arrayComptes[$user->id_users]['today'] = 0;
            array_push($userIdArray, $user->id_users);
        }
//        print_r($comptes);die;
        foreach ($comptes as $compte) {
//            print_r($userIdArray);
//            print_r($compte->id_users);die;
            if (in_array($compte->id_users, $userIdArray)) {
                $arrayComptes[$compte->id_users][$compte->year_and_month] = $compte->total;
                if (array_key_exists($compte->id_users, $arrayByDay)) {
                    $arrayComptes[$compte->id_users]['today'] = $arrayByDay[$compte->id_users];
                }
                else {
                    $arrayComptes[$compte->id_users]['today'] = 0;
                }
            }

//            if (in_array($compte->id_users, $userIdArray)) {
//                $arrayComptes[$compte->id_users][$compte->year_and_month] = $compte->total;
//            }
        }
//        print_r($arrayComptes);die;

        foreach ($arrayComptes as $id_user => $arrayCompte) {
            $tab[$i]['Societe'] = $arrayCompte['societe'];
            $tab[$i]['Magasin'] = $id_user;
            $tab[$i]['Aujourd\'hui'] = $arrayCompte['today'];

            foreach ($months as $month) {
//                print_r($arrayCompte);
//                print_r($month);die;
                if (array_key_exists($month->year_and_month, $arrayCompte)) {
                    $tab[$i][$month->year_and_month] = $arrayCompte[$month->year_and_month];
                }
                else {
                    $tab[$i][$month->year_and_month] = 0;
                }
            }
            $tab[$i]['commercial'] = $arrayCompte['commercial'];
            $i++;
        }
        return $tab;
    }
}