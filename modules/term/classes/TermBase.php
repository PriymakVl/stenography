<?php

class OrderBase extends Model {
	
	const TYPE_ALL = 'all';
	const TYPE_LETTER = 1;
	const TYPE_PART_WORD = 2;
	const TYPE_WORD = 3;
    const TYPE_PHRASE = 4; 
	
	public $images;
	
	
	public function __construct($id = false)
    {
        $this->tableName = 'terms';
        parent::__construct($id);
		$this->message->section = 'term';
    }
	
	
}

