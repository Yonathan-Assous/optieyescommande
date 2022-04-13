<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_remise extends CI_Model
{
    var $table = 'remise';

    public function __construct()
    {
        parent::__construct();
    }

    public function checkOtherRemise($userId, $remise, $fromAmount, $sinceDate, $untilDate) {
        if (!empty($untilDate)) {
            $sqlUntilDate = "AND `since_date` <= '$untilDate'";
        }
        else {
            $sqlUntilDate = '';
        }
        $sql = "SELECT * FROM `remises` 
                WHERE `id_user` = $userId 
                AND (`from_amount` <= $fromAmount AND `remise` >= $remise
                OR `from_amount` >= $fromAmount AND `remise` <= $remise)
                AND (`until_date` >= '$sinceDate' $sqlUntilDate)
                AND `is_active` = 1";
//        print_r($sql);die;
        $query = $this->db->query($sql);
        return $query->num_rows();
    }

    public function addRemise($userId, $remise, $fromAmount, $sinceDate, $untilDate, $typeRemise) {
        $type_remise = 'remise_exceptionnelle';
        if ($typeRemise == 'remise_teledetourage') {
            $this->updateOtherRemise($userId, $remise, $fromAmount, $sinceDate, $untilDate);
            $type_remise = 'télédétourage';
        }

        if (!empty($untilDate)) {
            $sql = "INSERT INTO `remises` (`id_user`, `remise`, `from_amount`, `since_date`, `until_date`, `type_remise`)
                    VALUES ($userId, $remise, $fromAmount, '$sinceDate', '$untilDate', '$type_remise')";
        }
        else {
            $sql = "INSERT INTO `remises` (`id_user`, `remise`, `from_amount`, `since_date`, `type_remise`)
                    VALUES ($userId, $remise, $fromAmount, '$sinceDate', '$type_remise')";
        }
        $this->db->query($sql);
    }

    public function getRemises($userId) {
        $now = date('Y-m-d H:i:s');
        $remises = $this->getRemisesByUsers($userId);
        $i = 0;
        $tab = [];
        foreach ($remises as $remise) {
            $tab[$i]['montant'] = $remise->from_amount;
            $tab[$i]['remise'] = $remise->remise;
            $tab[$i]['date_start'] = $remise->since_date;
            $tab[$i]['date_end'] = $remise->until_date;
            $tab[$i]['type_remise'] = ucfirst($remise->type_remise);
            if ($remise->since_date > $now) {
                $tab[$i]['status'] = 'future';
                $textAction = 'Annuler';
            }
            else if ($remise->until_date < $now && !empty($remise->until_date)) {
                $tab[$i]['status'] = 'past';
                $textAction = '';
            }
            else {
                $tab[$i]['status'] = 'present';
                $textAction = 'Arrêter';
            }

            if ($remise->is_active && (empty($remise->until_date) || $remise->until_date >= $now)) {
                $tab[$i]['action'] =
                    '<a class="desactive_remise btn btn-icon waves-effect waves-light btn-warning tooltipster" href="#" rel="remise_'
                    . $remise->id . '" original-title="Désactiver" title="Désactiver" >' . $textAction . '</a>';
            }
            else if ($remise->is_active == 0)
            {
                $tab[$i]['action'] = $remise->desactived_at;
            }
            else {
                $tab[$i]['action'] = '';
            }
            $i++;
        }
        return $tab;
    }

    private function getRemisesByUsers($userId) {
        $sql = "SELECT * FROM `remises` 
                WHERE `id_user` = $userId
                ORDER BY `until_date`";
        $query = $this->db->query($sql);
        return $query->result();
    }
    private function updateOtherRemise($userId, $remise, $fromAmount, $sinceDate, $untilDate) {
        if (!empty($untilDate)) {
            $sqlUntilDate = "AND `until_date` <= '$untilDate'";
        }
        else {
            $sqlUntilDate = '';
        }
        $now = date('Y-m-d');
        $sql = "UPDATE `remises` SET `is_active` = 0, `desactived_at` = '$now'
                WHERE `id_user` = $userId 
                AND (`from_amount` <= $fromAmount AND `remise` >= $remise
                OR `from_amount` >= $fromAmount AND `remise` <= $remise)
                AND (`since_date` >= '$sinceDate' $sqlUntilDate)
                AND type_remise = 'teledetourage'
                AND is_active = 1";
        //print_r($sql);die;
        $this->db->query($sql);
        if (!empty($untilDate)) {
            $dateChange = date('Y-m-d', strtotime($untilDate. ' + 1 day'));
            $sql = "UPDATE `remises` SET `since_date` = '$dateChange'
                WHERE `id_user` = $userId 
                AND (`from_amount` <= $fromAmount AND `remise` >= $remise
                OR `from_amount` >= $fromAmount AND `remise` <= $remise)
                AND (`since_date` >= '$sinceDate' AND `since_date` <= '$untilDate' 
                                                  AND (`until_date` >= '$untilDate' OR `until_date` IS NULL))
                AND type_remise = 'teledetourage'
                AND is_active = 1";

            $this->db->query($sql);
        }
        $dateChange = date('Y-m-d', strtotime($sinceDate. ' - 1 day'));
        $sql = "UPDATE `remises` SET `until_date` = '$dateChange'
                WHERE `id_user` = $userId 
                AND (`from_amount` <= $fromAmount AND `remise` >= $remise
                OR `from_amount` >= $fromAmount AND `remise` <= $remise)
                AND (`since_date` < '$sinceDate' AND (`until_date` >= '$sinceDate' OR `until_date` IS NULL))
                AND type_remise = 'teledetourage'
                AND is_active = 1";
        $this->db->query($sql);
    }

    public function desactiveRemise($remiseId) {
        $sql = "UPDATE `remises` SET `is_active` = 0, `desactived_at` = NOW() 
                                  WHERE id = $remiseId
                                  AND is_active = 1";
//        print_r($sql);die;
        $this->db->query($sql);
        return "OK";
    }

    public function getTotalRemisesByUser($userId, $totalFacture) {

        $now = date('Y-m-d');

        $sql = "SELECT SUM(remise) as total_remise FROM `remises` 
                WHERE `id_user` = $userId
                AND is_active = 1
                AND since_date <= '$now'
				AND (until_date >= '$now' OR until_date IS NULL)
                AND from_amount <= $totalFacture";
//        print_r($sql);die;
        $query = $this->db->query($sql);

        if ($query->num_rows()) {
            $result = $query->result()[0];
            return $result->total_remise;
        }
        return 0;
    }

    public function getTotalRemisesPerUserByMonth($date) {
        return $this->getTotalRemisesPerUserByMonthAndByCommercial($date);
    }

    public function getTotalRemisesPerUserByMonthAndByCommercial($date, $nameCommercial = null) {
        $addCondition = '';
        $leftJoin = '';
        if (!empty($nameCommercial)) {
            $addCondition = "AND `$nameCommercial` = 100";
            $leftJoin = 'LEFT JOIN `users` ON commande.id_users = users.id_users';
        }
        $sql = "SELECT commande.id_users, SUM(`total_commande`) as total FROM `commande`
                $leftJoin
                WHERE `date_commande` >= '$date'
                AND (type_commande = 1 
                OR (type_commande > 1 AND penalty = 1)) 
                $addCondition
                GROUP BY id_users";
        $query = $this->db->query($sql);
        if ($query && $query->num_rows() > 0)
        {
            $result = $query->result();
        }
        else {
            return 0;
        }
        $totalRemise = 0;
        foreach ($result as $value) {
            $totalRemise += $this->getTotalRemisesByUser($value->id_users, $value->total);
        }
        return $totalRemise;
    }
}