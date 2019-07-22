<?php

class Sound extends Model {
	
	use SoundFile, SoundModel, SoundList;

    public function __construct($id = false)
    {
        $this->tableName = 'sounds';
        parent::__construct($id);
		$this->message->section = 'sound';
    }
	
	public function add ()
	{
		try {
			$res = $this->addFile()->setMessage('success', 'add');
		}
		catch (Exception $e) {
			$this->setMessage('error', $e->getMessage());
			return false;
		} 
	}

	public function getForTerm($id_term)
	{
		$data = $this->selectByIdTerm($id_term);
		if ($data) return $this->setData($data);
	}
	
	public function addFile()
	{
		$file = $this->saveFile();
		if (!$file) throw new Exception('add_error'); 
		$id_sound = $file ? $this->addDataModel($this->params->id_term) : false;
		if (!$id_sound) throw new Exception('add_error');
		$sound = self::build($id_sound);
		$sound->editFileModel($file);
		return $sound;
	}
	

}























