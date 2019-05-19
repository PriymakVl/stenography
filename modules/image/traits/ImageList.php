<?php

trait ImageList {
	
	
	public function getForTerm($id_term)
	{
		$items = $this->getByIdTerm($id_term);
		if ($items) return ObjectHelper::factory($items, 'Image');
	}
}