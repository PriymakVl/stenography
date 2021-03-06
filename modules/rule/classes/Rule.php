<?php

class Rule extends RuleBase {
	
	public $examples;
	public $category;
	
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

	public function addExamples()
	{
		$examples = explode(',', $this->post->examples);
		if (!$examples) throw new Exception('Нет примеров');
		foreach ($examples as $example) {
			$term = (new Term)->getByNameModel(trim($example));
			if ($term) (new RuleExample)->add($this->get->id_rule, $term->id);
		}
	}

	public function getExamples()
	{
		$this->examples = (new RuleExample)->getForRule($this->id);
		return $this;
	}

	public function getCategory()
	{
		$this->category = (new RuleCategory)->getData($this->id_cat);
		return $this;
	}
	
	

}























