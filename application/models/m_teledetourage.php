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
            case 'rimless':
                return 'Percée';
        }
    }

    public function getResultByOmaAndData($data, $oma) {
        $index = stripos($oma, $data);
        $string = substr($oma, $index);
        $firstIndex = stripos($string, '=') + 1;
        return substr($string, $firstIndex, 2);
    }
}