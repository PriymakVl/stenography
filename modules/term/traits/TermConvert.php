<?php

trait TermConvert {

	public function setTypeString()
	{
		$this->typeString = self::convertType($this->type);
		return $this;
	}
	
	public static function convertType($type)
	{
		switch($type) {
			case self::TYPE_LETTER: return 'буква';
			case self::TYPE_PART_WORD: return 'слог';
			case self::TYPE_WORD: return 'слово';
			case self::TYPE_PHRASE: return 'фраза';
			default: return 'неизвестно';
		}
	}

}