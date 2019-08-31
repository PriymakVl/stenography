<?php

trait SoundFile {
	
	public function saveFile()
	{
		if(empty($_FILES) || $_FILES['file']['error'] != 0) return false;
		$file = $this->setFileName();
		if ($this->moveFile($file)) return $file;
	}
	
	private function moveFile($file)
	{
		$destination = './web/sounds/'.$file;
		if (file_exists($destination)) return $this->saveFile();
		return move_uploaded_file($_FILES['file']['tmp_name'], $destination);
	}
	
	private function setFileName()
	{
		$extension_file = explode('.', $_FILES['file']['name'])[1];
		$filename = time();
		return $filename.'.'.$extension_file;
	}
    
	
}























