<?php

class Rule extends RuleBase {
	
	public $examples;
	
	public function getExamples()
	{
		$this->examples = (new Example)->getForRule($this->id);
		return $this;
	}
	
	public function addData()
	{
		$id_rule = $this->insertDataModel();
		return new self ($id_rule);
	}
	
	public function editData()
	{
		$this->updateDataModel();
		return $this;
	}

	public function addExemples()
	{
		$examples = explode(',', $this->post->examples);
		if (!$examples) throw new Exception('Нет примеров');
		debug($examples);
	}
	
	

}























