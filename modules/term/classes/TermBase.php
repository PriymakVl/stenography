<?php

class RuleBase extends Model {
	
	
	
	public function __construct($id = false)
    {
        $this->tableName = 'terms';
        parent::__construct($id);
		$this->message->section = 'term';
    }
	
	
}

