<?php

class Term extends TermBase {
	
	use TermModel, TermList, TermConvert, TermCreateSentense;
	
	public function getImages()
	{
		$this->images = (new Image)->getForTerm($this->id);
		return $this;
	}

	public function getSound()
	{
		$this->sound = (new Sound)->getForTerm($this->id);
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

	public function getSounds($terms)
	{
		foreach ($terms as $term) {
			if ($term->type != self::TYPE_WORD) continue;;
			$term->getSound();
			if ($term->sound) $sounds[] = $term->sound->file;
			else $sounds[] = '0.mp3';
		}
		return (isset($sounds)) ? implode(',', $sounds) : null;
	}

	

}























