<?php

class RuleExample extends Model {

	public function __construct($id = false)
    {
        $this->tableName = 'terms';
        parent::__construct($id);
		$this->message->section = 'rule_example';
    }

    public function add($id_rule, $id_term)
    {
    	$params = ['id_rule' => $id_rule, 'id_term' => $id_term];
    	return $this->insertData($params);
    }

    public function insertData($params)
    {
        $sql = 'INSERT INTO `rules_examples` (id_rule, id_term) VALUES (:id_rule, :id_term)';
		return self::insert($sql, $params);
    }

    public function getForRule($id_rule)
    {
        $items = $this->getByIdRule($id_rule);
        if (!$items) return;
        foreach ($items as $item) {
            $terms[] = (new Term)->setData($item->id_term)->getImages();
        }
        return $terms;
    }

    public function getByIdRule($id_rule)
    {
        $sql = 'SELECT * FROM `rules_examples` WHERE `status` = :status AND `id_rule` = :id_rule';
        return self::perform($sql, ['status' => STATUS_ACTIVE, 'id_rule' => $id_rule])->fetchAll();
    }
}