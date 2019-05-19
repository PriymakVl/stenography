<?php

class Image extends Model {
	
	use ImageFile, ImageModel, ImageList;

    public function __construct($id = false)
    {
        $this->tableName = 'images';
        parent::__construct($id);
		$this->message->section = 'image';
    }
	
	public function add ()
	{
		try {
			return $this->addFile()->setMessage('success', 'add');
		}
		catch (Exception $e) {
			$this->setMessage('error', $e->getMessage());
			return false;
		} 
	}
	
	
	public function addFile()
	{
		$file = $this->saveFile();
		if (!$file) throw new Exception('add_error'); 
		$id_img = $file ? $this->addDataModel($this->params->id_term) : false;
		if ($id_img) return self::build($id_img)->editFileModel($file);
	}
	

}























