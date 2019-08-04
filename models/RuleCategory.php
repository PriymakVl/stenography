<?php

class RuleCategory extends Model {

	public function __construct($id = false)
    {
        $this->tableName = 'rules_categories';
        parent::__construct($id);
		$this->message->section = 'rule_category';
    }

    // public function getByIdR($id_rule)
    // {
    //     $sql = 'SELECT * FROM `rules_categories` WHERE `status` = :status ORDER BY `rating` DESC';
    //     return self::perform($sql, ['status' => STATUS_ACTIVE])->fetchAll();
    // }

    public static function getAll()
    {
        $sql = 'SELECT * FROM `rules_categories` WHERE `status` = :status ORDER BY `rating` DESC';
        return self::perform($sql, ['status' => STATUS_ACTIVE])->fetchAll();
    }
}