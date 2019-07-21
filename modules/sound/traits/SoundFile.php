<?php

trait SoundFile {
	
	public function saveFile()
	{
		if(empty($_FILES) || $_FILES['file']['error'] != 0) return false;
		$id_last = self::getLastId('sounds');
		$file = $this->setFileName($id_last);
		if ($this->moveFile($file)) return $file;
	}
	
	private function moveFile($file)
	{
		$destination = './web/sounds/'.$file;
		return move_uploaded_file($_FILES['file']['tmp_name'], $destination);
	}
	
	private function setFileName($id_last)
	{
		$id_last = $id_last ? $id_last : 0;
		$extension_file = explode('.', $_FILES['file']['name'])[1];
		$filename = $id_last + 1;
		return $filename.'.'.$extension_file;
	}
    
	
}























