<?php

trait RuleModel {

	public function insertDataModel($params = false)
    {
		$params = $params ? $params : self::selectParams(['text', 'number']);
        $sql = 'INSERT INTO `rules` (text, number) VALUES (:text, :number)';
		return self::insert($sql, $params);
    }
	
	public function updateDataModel()
	{
		$params = self::selectParams(['id_rule', 'text', 'number']);
		$sql = 'UPDATE `rules` SET `text` = :text, `number` = :number WHERE `id` = :id_rule';
		return self::update($sql, $params);
	}

	public function selectAllModel()
	{
		$sql = 'SELECT * FROM `rules` WHERE `status` = :status ORDER BY `number`';
		return self::perform($sql, ['status' => STATUS_ACTIVE])->fetchAll();
	}

}