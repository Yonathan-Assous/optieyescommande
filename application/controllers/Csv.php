<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(E_ALL);

//header('Content-type: text/csv;');
//header('Content-Disposition: attachment; filename="grille_verre.csv"');
header('Content-Disposition: attachment; filename="ca.csv"');
class Csv extends MY_Controller
{
    public
    function __construct()
    {
        parent::__construct();
    }
    public function index() {
        var_dump('cool');die;
    }
    public function export_verre_csv() {
        //var_dump('dddd');die;
        $sql = "SELECT id_grille_tarifaire, libelle_verre, prix_verre 
                FROM `grille_tarifaire` AS gt 
                INNER JOIN `verres` as v ON v.id_verre = gt.id_verre 
                ORDER BY libelle_verre, id_grille_tarifaire";
        $query = $this->db->query($sql);
        $verres = $query->result();
        echo '<pre>';
        print_r($verres);die;
        $verre_name = '';
        $i = 0;
        $arr = [];
        $line = '';
//        var_dump('dadas');die;
        ?>
        "Nom de verre";"Grille 1";"Grille 2";"Grille 3";"Grille 4";"Grille 5";"Grille 6";"Grille 7";
        "Grille 8";"Grille 9";"Grille 10";"Grille 11";"Grille 12";"Grille 13";"Grille 14";"Grille 15";
        <?php
        foreach ($verres as $verre) {
            if ($verre->libelle_verre != $verre_name || $i >= 15) {
               $i = 0;
                $verre_name = $verre->libelle_verre;
//                if ($line) {
//                    $line .= "\n";
//                }
                $line .= "\n" . '"' . $verre_name . '";';
                //$arr[$i] = [];
                //var_dump($arr);
                //var_dump($verre_name);
                //array_push($arr[$i], $verre_name);
            }
            $line .= '"' . $verre->prix_verre . '";';
            $i++;
            //array_push($arr[$i], $verre->prix_verre);
//            if ($i > 3) {
//                echo $line;
//                die;
//            }
        }
        echo $line;
    }

    public function export_bl_csv() {
        //var_dump('dddd');die;
        $sqlBl = "SELECT id_user, COUNT(*) as count FROM `intitule_bl` WHERE date_changed >= '2021-11-14' AND id_user IS NOT NULL GROUP BY id_user ORDER BY `intitule_bl`.`id_user` ASC";
        $query = $this->db->query($sqlBl);
        $result = $query->result();
        $blArray = [];
        $in = '';
//        echo '<pre>';
//        print_r($result);die;
        foreach ($result as $value) {
            $bl[$value->id_user]['bl'] = $value->count;
            $in .= $value->id_user . ',';
        }
        $in = rtrim($in,',');
        //echo $in;
        $sql = "SELECT id_users, SUM(total_commande) as total, DATE_FORMAT(date_commande, '%m') as date_c FROM commande c 
                WHERE DATE_FORMAT(date_commande, '%Y-%m') >= '2021-09' AND DATE_FORMAT(date_commande, '%Y-%m') < '2021-12'
                AND (type_commande = 1 OR (type_commande > 1 AND penalty = 1)) AND id_users IN ($in)
                GROUP BY id_users, date_c ORDER BY id_users, date_c ASC";
        $query = $this->db->query($sql);
        $result = $query->result();
//        echo '<pre>';
//        print_r($result);die;
        foreach ($result as $value) {
            if ($value->date_c == '09') {
                $bl[$value->id_users]['septembre'] = $value->total;
            }
            else if ($value->date_c == '10') {
                $bl[$value->id_users]['octobre'] = $value->total;
            }
            else if ($value->date_c == '11') {
                $bl[$value->id_users]['novembre'] = $value->total;
            }
        }
//        echo '<pre>';
//        print_r($bl);die;
        $line = '';
        ?>
        "Magasin";"BL-J-30";"Septembre";"Octobre";"Novembre"
        <?php
        foreach ($bl as $key => $value) {
            $septembre = isset($value['septembre']) ? $value['septembre'] : 0;
            $octobre = isset($value['octobre']) ? $value['octobre'] : 0;
            $novembre = isset($value['novembre']) ? $value['novembre'] : 0;
            $line .=  "\n" . '"' . $key . '";'
                . '"' . $value['bl'] . '";'
                . '"' . $septembre . '";'
                . '"' . $octobre . '";'
                . '"' . $novembre . '";';
        }
        echo $line;die;

    }

    public function export_ca_csv() {
//        $sqlBl = "SELECT id_user, COUNT(*) as count FROM `intitule_bl` WHERE date_changed >= '2021-11-14' GROUP BY id_user ORDER BY `intitule_bl`.`id_user` ASC";
//        $query = $this->db->query($sqlBl);
//        $result = $query->result();
//        $blArray = [];
//        $in = '';

//        foreach ($result as $value) {
//            $bl[$value->id_user]['bl'] = $value->count;
//            $in .= $value->id_user . ',';
//        }
//        $in = rtrim($in,',');
        //echo $in;
//        $sql = "SELECT id_users, SUM(total_commande) as total, DATE_FORMAT(date_commande, '%m') as date_c FROM commande c
//                WHERE DATE_FORMAT(date_commande, '%Y-%m') >= '2021-01' AND DATE_FORMAT(date_commande, '%Y-%m') < '2021-12'
//                AND (type_commande = 1 OR (type_commande > 1 AND penalty = 1)) AND id_users IN ($in)
//                GROUP BY id_users, date_c ORDER BY id_users, date_c ASC";
//        $query = $this->db->query($sql);
//        $result = $query->result();
//        echo '<pre>';
//        print_r($result);die;

        $sql = "SELECT id_users, SUM(total_commande) as total, DATE_FORMAT(date_commande, '%m') as date_c FROM commande c 
                WHERE DATE_FORMAT(date_commande, '%Y-%m') >= '2021-01' AND DATE_FORMAT(date_commande, '%Y-%m') < '2022-01'
                AND (type_commande = 1 OR (type_commande > 1 AND penalty = 1)) AND id_users IN (26,46,78,107,109,130,136,137,138,140,142,144,145,146,147,149,151,152,153,154,157,159,162,166,191,193,201,204,206,217,218,219,220,222,233,239,242,245,246,250,253,254,255,258,260,265,274,278,280,282,289,296,305,308,311,312,326,331,333,337,342,343,345,362,369,370,374,377,378,381,383,384,388,391,396,397,398,400,401,412,417,448,449,453,532,533,
                292,283,320,284,309,307,315,310)
                GROUP BY id_users, date_c ORDER BY id_users, date_c ASC";
        $query = $this->db->query($sql);
        $result = $query->result();
        foreach ($result as $value) {
            if ($value->date_c == '01') {
                $bl[$value->id_users]['janvier'] = $value->total;
            }
            else if ($value->date_c == '02') {
                $bl[$value->id_users]['février'] = $value->total;
            }
            else if ($value->date_c == '03') {
                $bl[$value->id_users]['mars'] = $value->total;
            }
            else if ($value->date_c == '04') {
                $bl[$value->id_users]['avril'] = $value->total;
            }
            else if ($value->date_c == '05') {
                $bl[$value->id_users]['mai'] = $value->total;
            }
            else if ($value->date_c == '06') {
                $bl[$value->id_users]['juin'] = $value->total;
            }
            else if ($value->date_c == '07') {
                $bl[$value->id_users]['juillet'] = $value->total;
            }
            else if ($value->date_c == '08') {
                $bl[$value->id_users]['aout'] = $value->total;
            }
            else if ($value->date_c == '09') {
                $bl[$value->id_users]['septembre'] = $value->total;
            }
            else if ($value->date_c == '10') {
                $bl[$value->id_users]['octobre'] = $value->total;
            }
            else if ($value->date_c == '11') {
                $bl[$value->id_users]['novembre'] = $value->total;
            }
            else if ($value->date_c == '12') {
                $bl[$value->id_users]['decembre'] = $value->total;
            }
        }

//        echo '<pre>';
//        print_r($bl);die;
        $line = '';
        ?>
        Magasin;Janvier;Fevrier;Mars;Avril;Mai;Juin;Juillet;Aout;Septembre;Octobre;Novembre;Decembre
        <?php
        foreach ($bl as $key => $value) {
            $janvier = isset($value['janvier']) ? $value['janvier'] : 0;
            $fevrier = isset($value['février']) ? $value['février'] : 0;
            $mars = isset($value['mars']) ? $value['mars'] : 0;
            $avril = isset($value['avril']) ? $value['avril'] : 0;
            $mai = isset($value['mai']) ? $value['mai'] : 0;
            $juin = isset($value['juin']) ? $value['juin'] : 0;
            $juillet = isset($value['juillet']) ? $value['juillet'] : 0;
            $aout = isset($value['aout']) ? $value['aout'] : 0;
            $septembre = isset($value['septembre']) ? $value['septembre'] : 0;
            $octobre = isset($value['octobre']) ? $value['octobre'] : 0;
            $novembre = isset($value['novembre']) ? $value['novembre'] : 0;
            $decembre = isset($value['decembre']) ? $value['decembre'] : 0;
            $line .=  "\n" . $key . ';'
                . $janvier . ';'
                . $fevrier . ';'
                . $mars . ';'
                . $avril . ';'
                . $mai . ';'
                . $juin . ';'
                . $juillet . ';'
                . $aout . ';'
                . $septembre . ';'
                . $octobre . ';'
                . $novembre . ';'
                . $decembre . ';';
        }
        echo $line;die;

    }
}
