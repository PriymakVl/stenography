<?php

trait RuleModel {

	public function getList($limit)
	{
		$rules = $this->getAllModel();
		if (!$rules) return;
		$rules = $this->getDataForPage($rules, $limit);
		if ($rules) return ObjectHelper::factory($rules, 'Rule', ['setData']); 
	}

}