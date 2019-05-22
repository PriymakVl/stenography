<?php

trait TermModel {
	
	use TermModelSelect;

    public function addDataModel()
    {
		$params = self::selectParams(['name', 'type']);
        $sql = 'INSERT INTO `terms` (name, type) VALUES (:name, :type)';
		return self::insert($sql, $params);
    }
	
	public function editDataModel()
	{
		$params = self::selectParams(['id_term', 'name', 'type']);
		$sql = 'UPDATE `terms` SET `name` = :name, `type` = :type WHERE `id` = :id_term';
		return self::update($sql, $params);
	}
	
}























