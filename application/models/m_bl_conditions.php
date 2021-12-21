<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_bl_conditions extends CI_Model
{
    var $table = 'bl_conditions';

    public function __construct()
    {
        parent::__construct();
    }

    public function addBlConditions($userId, $middleAmount, $dateStart) {
        $now = date('Y-m-d');
        $sql = "UPDATE `bl_conditions` SET `is_active` = 0, `desactived_at` = '$now'
                WHERE `id_user` = $userId";

        //print_r($sql);die;
        $this->db->query($sql);
        $sql = "INSERT INTO `bl_conditions` (`id_user`, `average_amount`, `date_start`)
                    VALUES ($userId, $middleAmount, '$dateStart')";
//        print_r($sql);die;
        $this->db->query($sql);
    }

    public function desactiveBlConditions($blConditionId) {
        $sql = "UPDATE `bl_conditions` SET `is_active` = 0, `desactived_at` = NOW() 
                                  WHERE id = $blConditionId
                                  AND is_active = 1";
        $this->db->query($sql);
        return "OK";
    }

    public function getBlConditions($userId) {
        $now = date('Y-m-d');
        $blConditions = $this->getBlConditionsByUser($userId);
        $i = 0;
        $tab = [];
        foreach ($blConditions as $blCondition) {
            $tab[$i]['montant'] = $blCondition->average_amount;
            $tab[$i]['date_start'] = $blCondition->date_start;

            if ($blCondition->is_active) {
                $tab[$i]['active'] = true;
                $tab[$i]['action'] =
                    '<a class="desactive_bl_conditions btn btn-icon waves-effect waves-light btn-warning tooltipster" href="#" rel="bl_conditions_'
                    . $blCondition->id . '" original-title="Désactiver" title="Désactiver" >Désactiver</a>';
            }
            else {
                $tab[$i]['active'] = false;
                $tab[$i]['action'] = $blCondition->desactived_at;
            }
            $i++;
        }
        return $tab;
    }

    private function getBlConditionsByUser($userId) {
        $sql = "SELECT * FROM `bl_conditions` 
                WHERE `id_user` = $userId
                ORDER BY `average_amount`";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function getBlConditionMet($userId) {
        $sql = "SELECT * FROM `bl_conditions` 
                WHERE `id_user` = $userId
                AND is_active = 1";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $blConditions = $query->result()[0];
            $dateStart = $blConditions->date_start;
            $dateStart = date('Y-m',strtotime('+0 day',strtotime($dateStart)));
            $now = date('Y-m');
            $newDateStart = date('Y-m',strtotime('+1 month',strtotime($dateStart)));
//            print_r($newDateStart);die;
            if($newDateStart > $now) {
                return 'bl_conditions_new';
            }
            else {
                $sql = "SELECT id_users, SUM(total_commande) as total FROM commande c 
                WHERE DATE_FORMAT(date_commande, '%Y-%m') >= '$dateStart' AND DATE_FORMAT(date_commande, '%Y-%m') < '$now'
                AND (type_commande = 1 OR (type_commande > 1 AND penalty = 1)) AND id_users = $userId";
                $query = $this->db->query($sql);
                $result = $query->result()[0];
                $sql = "SELECT
                SUM(reduction) AS total_reductions,
                id_users as idusers
                FROM
                facture_reduction
                WHERE DATE_FORMAT(date_remise, '%Y-%m') >= '".$dateStart."'
                AND DATE_FORMAT(date_remise, '%Y-%m') < '$now'
                AND id_users = $userId";
                $query = $this->db->query($sql);
                $totalReduction = $query->result()[0];
//                print_r($sql);die;
                $firstDate  = new DateTime($dateStart . '-01');
                $secondDate = new DateTime($now . '-10');
                $intvl = $firstDate->diff($secondDate);
                $numberMonths = $intvl->y * 12 + $intvl->m;
                $averageAmount = ($result->total - $totalReduction->total_reductions) / $numberMonths;
               
                if ($averageAmount >= $blConditions->average_amount) {
                    return 'bl_conditions_remplies';
                }
                else {
                    return 'bl_conditions_non_remplies';
                }
            }
            return $result;
        }
        else {
            return false;
        }
    }
}