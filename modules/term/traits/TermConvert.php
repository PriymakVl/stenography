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
			case self::TYPE_PART_WORD: return 'часть слова';
			case self::TYPE_WORD: return 'слово';
			case self::TYPE_PHRASE: return 'фразеограмма';
			case self::TYPE_SHORT_WORD: return 'короткое слово';
			case self::TYPE_SENTENSE: return 'предложение';
			case self::TYPE_REPEAT_WORD: return 'повторяющиеся слова';
			case self::TYPE_ROOT_WORD: return 'корень слова';
			case self::TYPE_PREFIX_WORD: return 'приставка или предлог';
			case self::TYPE_END_WORD: return 'окончание слова';
			case self::TYPE_NAME: return 'собственное имя';
			case self::TYPE_NUMBER: return 'число';
			default: return 'неизвестно';
		}
	}

}