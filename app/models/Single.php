<?php


namespace app\models;


use system\core\Model;

class Single extends Model
{
    public $table = 'news';

    public function getNewsById($newsId)
    {
        $sql = "SELECT * FROM {$this->table} WHERE `id` = ?";
        return $this->db->query($sql, [$newsId]);
    }


}