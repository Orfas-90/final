<?php


namespace app\models;


use system\core\Model;

class Contact extends Model
{
    public $table = 'contacts';

	public function getTotal()
    {
        $sql = "SELECT * FROM {$this->table}";
        $result = $this->db->query($sql);
        return count($result);
    }
	
    public function setComments($name, $email, $text, $id_car)
    {
        $sql = "INSERT INTO {$this->table} SET `name` = ?, `email` = ?, `text` = ?, `id_car` = ?, `date` = NOW()";
        return $this->db->exec($sql, [$name, $email, $text, $id_car]);
    }
	    public function setStatus($id)
    {
        $sql = "UPDATE {$this->table} SET `status` = 'исполнен' WHERE `id` = ?";
        return $this->db->exec($sql, [$id]);
    }
	



}