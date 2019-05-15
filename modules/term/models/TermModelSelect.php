<?php

trait OrderModelSelect {

	
	public function getByStateModel($state = false)
	{
		$params = ['state' => $state ? $state : $this->params->state 'status' => STATUS_ACTIVE];
		$sql = 'SELECT * FROM `terms` WHERE `state` = :state AND `status` = :status';
		return self::perform($sql, $params)->fetchAll();
	}
	
	public function getByTypeModel($type = false)
	{
		$params = ['type' => $type ? $type : $this->params->type, 'status' => STATUS_ACTIVE];
		$sql = 'SELECT * FROM `orders` WHERE `type` = :type AND `status` = :status';
		return self::perform($sql, $params)->fetchAll();
	}
	
	public function getByName($name = false)
	{
	   $params = ['name' => $name ? $name : $this->params->name, 'status' => STATUS_ACTIVE];
	   $sql = 'SELECT * FROM `orders` WHERE `name` = :name AND `status` = :status';
	   return self::perform($sql, $params)->fetch();
	}
	
	public function searchByName($name = false)
    {
        $params = ['symbol' => $name ? $name : $this->params->name, 'status' => STATUS_ACTIVE];
        $sql = 'SELECT * FROM `orders` WHERE `name` like concat("%", :name, "%") AND `status` = :status';
        return self::perform($sql, $params)->fetchAll();
    }
	
}