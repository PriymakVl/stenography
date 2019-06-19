<?php

class Rule extends RuleBase {
	
	use RuleModel, RuleList;

	public $examples;
	
	public function getExamples()
	{
		$this->examples = (new Example)->getForRule($this->id);
		return $this;
	}
	
	public function addData()
	{
		$id_rule = $this->addDataModel();
		return new self ($id_rule);
	}
	
	public function editData()
	{
		$this->editDataModel();
		return $this;
	}
	
	

}























