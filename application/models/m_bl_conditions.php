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
        $sql = "INSERT INTO `bl_conditions` (`id_user`, `middle_amount`, `date_start`)
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
            $tab[$i]['montant'] = $blCondition->middle_amount;
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
                ORDER BY `middle_amount`";
        $query = $this->db->query($sql);
        return $query->result();
    }
}