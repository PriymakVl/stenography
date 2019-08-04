<?php

trait RuleModel {

	public function insertDataModel($params = false)
    {
		$params = $params ? $params : self::selectParams(['text', 'number', 'id_cat']);
        $sql = 'INSERT INTO `rules` (text, number, id_cat) VALUES (:text, :number, :id_cat)';
		return self::insert($sql, $params);
    }
	
	public function updateDataModel()
	{
		$params = self::selectParams(['id_rule', 'text', 'number', 'id_cat']);
		$sql = 'UPDATE `rules` SET `text` = :text, `number` = :number, `id_cat` = :id_cat WHERE `id` = :id_rule';
		return self::update($sql, $params);
	}

	public function selectAllModel()
	{
		$sql = 'SELECT * FROM `rules` WHERE `status` = :status ORDER BY `number`';
		return self::perform($sql, ['status' => STATUS_ACTIVE])->fetchAll();
	}

	public function selectByIdCategory()
	{
		$sql = 'SELECT * FROM `rules` WHERE `status` = :status AND `id_cat` = :id_cat ORDER BY `number`';
		return self::perform($sql, ['status' => STATUS_ACTIVE, 'id_cat' => $this->get->id_cat])->fetchAll();
	}

}