<?php

class RuleExample extend Model {

	public function __construct($id = false)
    {
        $this->tableName = 'terms';
        parent::__construct($id);
		$this->message->section = 'rule_example';
    }

    public function add($id_rule, $id_term)
    {
    	$params = ['id_rule' => $id_rule, 'id_term' => $id_term]
    	return $this->insertData($params);
    }

    public function insertData($params)
    {
        $sql = 'INSERT INTO `rules_examples` (id_rule, id_term) VALUES (:id_rule, :id_term)';
		return self::insert($sql, $params);
    }
}