<?php

trait TermModel {
	
	use TermModelSelect;

    public function addDataModel()
    {
		$params = self::getParams(['name', 'type', 'state']);
        $sql = 'INSERT INTO `orders` (name, type, state) VALUES (:name, :type, :state)';
		return self::insert($sql, $params);
    }
	
	public function editDataModel()
	{
		$params = self::getParams(['id_term', 'name', 'type', 'state']);
		$sql = 'UPDATE `orders` SET `name` = :name, `type` = :type, `state` = :state WHERE `id` = :id_term';
		return self::update($sql, $params);
	}
	
}























