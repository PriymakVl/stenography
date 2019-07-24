<?php

class ExerciseBase extends Model {
	
	public function __construct($id = false)
    {
        $this->tableName = 'exercises';
        parent::__construct($id);
		$this->message->section = 'exercise';
    }
	
	
}

