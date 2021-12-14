<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_teledetourage extends CI_Model
{
    var $table = 'teledetourage_format_user';

    public function __construct()
    {
        parent::__construct();
    }

    public function insertPrice() {
        $formats = $this->getFormats();

        $sqlUser = "SELECT * FROM `users`";
        $query = $this->db->query($sqlUser);
        $users =  $query->result();
        $sql = "INSERT INTO $this->table (`id_user`, `id_teledetourage_format`, `price`) VALUES ";
        foreach ($users as $user) {
            foreach ($formats as $format) {
                $price = 0;
                if ($format->id == 3) {
                    $price = 5;
                }
                $sql .= "('$user->id_users', '$format->id', $price),";
            }
        }
        $sql = rtrim($sql, ',');
        $this->db->query($sql);
    }

    public function getPriceByUserId($userId) {
        $sqlPrice = "SELECT `name`, `price` FROM $this->table as tfu
                    INNER JOIN `teledetourage_format` as tf ON tfu.id_teledetourage_format = tf.id
                    WHERE `id_user` = $userId";
        $query = $this->db->query($sqlPrice);
        return $query->result();
    }

    public function getFormats() {
        $sqlFormat = "SELECT * FROM `teledetourage_format`";
        $query = $this->db->query($sqlFormat);
        return $query->result();
    }

    public function checkOtherRemise($userId, $remise, $fromAmount, $sinceDate, $untilDate) {
        if (!empty($untilDate)) {
            $sqlUntilDate = "AND `since_date` <= '$untilDate'";
        }
        else {
            $sqlUntilDate = '';
        }
        $sql = "SELECT * FROM `teledetourage_remise` 
                WHERE `id_user` = $userId 
                AND (`from_amount` <= $fromAmount AND `remise` >= $remise)
                OR (`from_amount` >= $fromAmount AND `remise` <= $remise)
                AND (`until_date` >= '$sinceDate' $sqlUntilDate)";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }

    public function addRemise($userId, $remise, $fromAmount, $sinceDate, $untilDate) {
        $this->updateOtherRemise($userId, $remise, $fromAmount, $sinceDate, $untilDate);

        if (!empty($untilDate)) {
            $sql = "INSERT INTO `teledetourage_remise` (`id_user`, `remise`, `from_amount`, `since_date`, `until_date`)
                    VALUES ($userId, $remise, $fromAmount, '$sinceDate', '$untilDate')";
        }
        else {
            $sql = "INSERT INTO `teledetourage_remise` (`id_user`, `remise`, `from_amount`, `since_date`)
                    VALUES ($userId, $remise, $fromAmount, '$sinceDate')";
        }
        $this->db->query($sql);
    }

    public function getRemises($userId) {
        $now = date('Y-m-d');
        $remises = $this->getRemisesByUsers($userId);
        $i = 0;
        foreach ($remises as $remise) {
            $tab[$i]['montant'] = $remise->from_amount;
            $tab[$i]['remise'] = $remise->remise;
            $tab[$i]['date_start'] = $remise->since_date;
            $tab[$i]['date_end'] = $remise->until_date;

            if ($remise->since_date > $now) {
                $tab[$i]['status'] = 'future';
                $textAction = 'Annuler';
            }
            else if ($remise->until_date < $now) {
                $tab[$i]['status'] = 'past';
            }
            else {
                $tab[$i]['status'] = 'present';
                $textAction = 'Arrêter';
            }

                if ($remise->is_active && (empty($remise->until_date) || $remise->until_date >= $now)) {
                    $tab[$i]['action'] =
                        '<a class="desactive_remise_teledetourage btn btn-icon waves-effect waves-light btn-warning tooltipster" href="#" rel="remise_'
                        . $remise->id . '" original-title="Désactiver" title="Désactiver" >' . $textAction . '</a>';
                }
                else {
                    $tab[$i]['action'] = $remise->desactived_at;
                }
            $i++;
        }
        return $tab;
    }

    private function getRemisesByUsers($userId) {
        $sql = "SELECT * FROM `teledetourage_remise` 
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
        $sql = "UPDATE `teledetourage_remise` SET `is_active` = 0, `desactived_at` = '$now'
                WHERE `id_user` = $userId 
                AND (`from_amount` <= $fromAmount AND `remise` >= $remise)
                OR (`from_amount` >= $fromAmount AND `remise` <= $remise)
                AND (`since_date` >= '$sinceDate' $sqlUntilDate)";
        //print_r($sql);die;
        $this->db->query($sql);
        if (!empty($untilDate)) {
            $dateChange = date('Y-m-d', strtotime($untilDate. ' + 1 day'));
            $sql = "UPDATE `teledetourage_remise` SET `since_date` = '$dateChange'
                WHERE `id_user` = $userId 
                AND ((`from_amount` <= $fromAmount AND `remise` >= $remise)
                OR (`from_amount` >= $fromAmount AND `remise` <= $remise))
                AND (`since_date` >= '$sinceDate' AND `since_date` <= '$untilDate' 
                                                  AND (`until_date` >= '$untilDate' OR `until_date` IS NULL))";
            $this->db->query($sql);
        }
        $dateChange = date('Y-m-d', strtotime($sinceDate. ' - 1 day'));
        $sql = "UPDATE `teledetourage_remise` SET `until_date` = '$dateChange'
                WHERE `id_user` = $userId 
                AND ((`from_amount` <= $fromAmount AND `remise` >= $remise)
                OR (`from_amount` >= $fromAmount AND `remise` <= $remise))
                AND (`since_date` < '$sinceDate' AND (`until_date` >= '$sinceDate' OR `until_date` IS NULL))";
        $this->db->query($sql);
    }

    public function desactiveRemise($remiseId) {
        $sql = "UPDATE `teledetourage_remise` SET `is_active` = 0, `desactived_at` = NOW() 
                                  WHERE id = $remiseId
                                  AND is_active = 1";
//        print_r($sql);die;
        $this->db->query($sql);
        return "OK";
    }
}