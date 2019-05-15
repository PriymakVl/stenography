<?php

trait TermList {

	public function getList()
	{
		$type = $this->get->type ? $this->get->type : self::TYPE_WORD;
		$items = $this->getByTypeModel($type);
		if ($items) return ObjectHelper::createArray($items, 'Term', ['setData', 'getImages',]);
	}
	
}























