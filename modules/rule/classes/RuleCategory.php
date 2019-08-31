<?php

class RuleCategory extends Model {

	public function __construct($id = false)
    {
        $this->tableName = 'rules_categories';
        parent::__construct($id);
		$this->message->section = 'rule_category';
    }

    public static function getAll()
    {
        $items = self::selectAll();
        return ObjectHelper::plant($items, __CLASS__);
    }

    public static function selectAll($tableName = '`rules_categories`')
    {
        $sql = "SELECT * FROM {$tableName} WHERE `status` = :status ORDER BY `rating` DESC";
        return self::perform($sql, ['status' => STATUS_ACTIVE])->fetchAll();
    }

    public function countRules()
    {
        $rules = (new Rule)->selectByIdCategory($this->id);
        return count($rules);
    }
}