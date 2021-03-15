<?php


namespace app\models;


use system\core\Model;

class Comments extends Model
{
    public $table = 'comments';

    public function getCommentsByNewsId($commentsId)
    {
        $sql = "SELECT * FROM {$this->table} WHERE `id_news` = ?";
        return $this->db->query($sql, [$commentsId]);
    }

    public function setComments($name, $text, $id_news)
    {
        $sql = "INSERT INTO {$this->table} SET `name` = ?, `text` = ?, `id_news` = ?, `date` = NOW()";
        return $this->db->exec($sql, [$name, $text, $id_news]);
    }
}