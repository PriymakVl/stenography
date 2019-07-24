<?php

class Exercise extends ExerciseBase {
	
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

	// public function addExamples()
	// {
	// 	$examples = explode(',', $this->post->examples);
	// 	if (!$examples) throw new Exception('Нет примеров');
	// 	foreach ($examples as $example) {
	// 		$term = (new Term)->getByNameModel(trim($example));
	// 		if ($term) (new RuleExample)->add($this->get->id_rule, $term->id);
	// 	}
	// }

	public function getContent()
	{
		$content = (new ExerciseContent)->selectByIdExercise($this->id);
		if (!$content) return;
		$this->rules = $this->selectProperty($content, 'type', 'rule');
		$this->words = $this->selectProperty($content, 'type', 'word');
		$this->phrases = $this->selectProperty($content, 'type', 'phrase');
		return $this;
	}
	
	

}























