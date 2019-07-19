<?php

class Visit extends Model {
	
	public function __construct()
    {
        $this->tableName = 'visits';
    }
	
   	public function insertData($type)
    {
    	$params = ['type' => $type, 'date' => time()];
    	$sql = 'INSERT INTO `visits` (`type`, `date`) VALUES (:type, :date)';
		return self::insert($sql, $params);
    }

    public function count($type)
    {
        $this->insertData($type);
        $sql = 'SELECT (*) FROM `visits` WHERE `type` = :type';
        return self::perform($sql, [':type' => $type])->fetch();
    }

            


    
	
}























