<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(E_ALL);

header('Content-type: text/csv;');
header('Content-Disposition: attachment; filename="grille_verre.csv"');
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
        $result = $this->db->query($sql);
        $verres = $result->result();
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
}
