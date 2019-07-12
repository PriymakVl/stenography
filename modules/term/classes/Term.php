<?php

class Term extends TermBase {
	
	use TermModel, TermList, TermConvert;
	
	public function getImages()
	{
		$this->images = (new Image)->getForTerm($this->id);
		return $this;
	}
	
	public function addData()
	{
		$id_term = $this->addDataModel();
		return new self ($id_term);
	}
	
	public function editData()
	{
		$this->editDataModel();
		return $this;
	}
	
	public function search()
	{
		$items = $this->searchByNameModel();
		if ($items) return ObjectHelper::factory($items, 'Term', ['setData', 'getImages']);
	}

	public static function convertType($type)
	{
		switch($type) {
			case self::TYPE_LETTER: return 'Буктвы';
			case self::TYPE_PART_WORD: return 'Слоги';
			case self::TYPE_WORD: return 'Слова';
			case self::TYPE_PHRASE: return 'Предложения';
			default: return 'Неизвестно';
		}
	}
	

}























