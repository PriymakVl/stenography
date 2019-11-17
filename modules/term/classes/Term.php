<?php

class Term extends TermBase {
	
	use TermModel, TermList, TermConvert;
	
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
			$term->getSound();
			if ($term->sound) $sounds[] = $term->sound->file;
			else $sounds[] = '0.mp3';
		}
		return (isset($sounds)) ? implode(',', $sounds) : null;
	}

	public function makeSentense($sentense)
	{
		$words = explode(' ', $sentense);
		if (!$words) return;
		$result = [];
		foreach ($words as $word) {
			$term = $this->getTermForSentense(trim($word));
			if (!$term || !$term->images) $result[$word] = false; 
			else $result[$word] = sprintf('<img src="/terms/%s">', $term->images[0]->file);
		}
		return $result;
	}

	private function getTermForSentense($word) 
	{
		$data = $this->getByNameModel($word);
		if (!$data) $data = $this->getByNameModel($this->deleteEndVowels($word));
		if ($data) return (new Term)->setData($data)->getImages();
	}

	private function deleteEndVowels($word)
	{
		if (mb_strlen($word) < 4) return $word;
		$letter = mb_substr($word, -1);
		if (mb_stripos('aуоыиэяюёе', $letter) == false) return $word; 
	    else return $this->deleteEndVowels(mb_substr($word, 0, -1));
	}

}























