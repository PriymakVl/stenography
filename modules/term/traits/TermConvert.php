<?php

trait TermConvert {

	public function setTypeString()
	{
		$this->typeString = $this->convertType();
		return $this;
	}
	
	public function convertType()
	{
		switch($this->type) {
			case self::TYPE_LETTER: return 'буква';
			case self::TYPE_PART_WORD: return 'слог';
			case self::TYPE_WORD: return 'слово';
			case self::TYPE_PHRASE: return 'фраза';
			default: return 'неизвестный';
		}
	}
}