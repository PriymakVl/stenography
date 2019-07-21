<?php

class TermBase extends Model {
	
	const TYPE_ALL = 'all';
	const TYPE_LETTER = 1;
	const TYPE_PART_WORD = 2;
	const TYPE_WORD = 3;
    const TYPE_PHRASE = 4; 
    const HIDE_IMG = 1;
    const HIDE_WORD = 2;
	
	public $images;
	public $sound;
	public $typeString;
	
	public function __construct($id = false)
    {
        $this->tableName = 'terms';
        parent::__construct($id);
		$this->message->section = 'term';
    }
	
	
}

