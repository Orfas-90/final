<?php


namespace app\models;


use system\core\Model;

class Car extends Model
{
    public $table = 'cars';

    public function getTotal()
    {
        $sql = "SELECT * FROM {$this->table}";
        $result = $this->db->query($sql);
        return count($result);
    }
	
	public function setCars($name, $doors, $seets, $transm, $year, $prise, $img)
    {
        $sql = "INSERT INTO {$this->table} SET `name` = ?, `doors` = ?, `seets` = ?, `transm` = ?, `year` = ?, `prise` = ?, `img` = ?";
        return $this->db->exec($sql, [$name, $doors, $seets, $transm, $year, $prise, $img]);
    }

}