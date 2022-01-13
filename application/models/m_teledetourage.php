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

    public function addTeledetourageFormat($userId) {
        $formats = $this->getFormats();
        $sql = "REPLACE INTO $this->table (`id_user`, `id_teledetourage_format`, `price`) VALUES ";
        foreach ($formats as $format) {
            $price = 0;
            if ($format->id == 3) {
                $price = 5;
            }
            $sql .= "('$userId', '$format->id', $price),";
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
}