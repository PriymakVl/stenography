<?php

class Order extends OrderBase {
	
	use TermModel;
	
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
		$items = $this->searchByName();
		if ($items) return ObjectHelper::createArray($items, 'Term', ['setData', 'getImages']);
	}
	

}























