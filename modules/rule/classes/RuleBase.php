<?php

class RuleBase extends Model {
	
	use RuleModel, RuleList;
	
	public function __construct($id = false)
    {
        $this->tableName = 'rules';
        parent::__construct($id);
		$this->message->section = 'rule';
    }
	
	
}

