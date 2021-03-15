<?php


namespace app\models;


use system\core\Model;

class News extends Model
{
    public $table = 'news';

    public function getTotal()
    {
        $sql = "SELECT * FROM {$this->table}";
        $result = $this->db->query($sql);
        return count($result);
    }
	
	public function setNews($title, $text, $detail, $author, $img)
    {
        $sql = "INSERT INTO {$this->table} SET `title` = ?, `text` = ?, `detail` = ?, `date` = NOW(), `author` = ?, `img` = ?";
        return $this->db->exec($sql, [$title, $text, $detail, $author, $img]);
    }
}