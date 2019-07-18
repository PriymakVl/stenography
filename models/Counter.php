<?php

class Counter extends Model {
	
	public function __construct()
    {
        $this->tableName = 'counter';
    }
	
   	public function insertData($type)
    {
    	$params = ['type' => $type, 'date' => time()];
    	debug($params);
    	$sql = 'INSERT INTO `counter` (`type`, `date`) VALUES (:type, :date)';
		return self::insert($sql, $params);
    }


    
	
}























