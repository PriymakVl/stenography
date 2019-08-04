<?php

class TermBase extends Model {
	
	const TYPE_ALL = 'all';
	const TYPE_LETTER = 1;
	const TYPE_PART_WORD = 2;
	const TYPE_WORD = 3;
    const TYPE_PHRASE = 4; // фразеограммы
    const TYPE_SHORT_WORD = 5; 
    const TYPE_SENTENSE = 6; // предложение
    const TYPE_REPEAT_WORD = 7; // повторяющиеся слова
    const TYPE_ROOT_WORD = 8; // корень слова
    const TYPE_PREFIX_WORD = 9; // приставки и предлоги слова
    const TYPE_END_WORD = 10; // окончание слова
    const TYPE_NUMBER = 11; // числа 
    const TYPE_NAME = 12; // собственные имена
    
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

