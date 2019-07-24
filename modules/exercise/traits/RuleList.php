<?php

trait RuleList {

	public function getList($limit)
	{
		$rules = $this->selectAllModel();
		if (!$rules) return;
		$rules = $this->getDataForPage($rules, $limit);
		if ($rules) return ObjectHelper::factory($rules, 'Rule', ['setData']); 
	}

}