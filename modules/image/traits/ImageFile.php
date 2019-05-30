<?php

trait ImageFile {
	
	public function saveFile()
	{
		if(empty($_FILES) || $_FILES['file']['error'] != 0) return false;
		$id_last = self::getLastId('images');
		$file = $this->setFileName($id_last);
		if ($this->moveFile($file)) return $file;
	}
	
	private function moveFile($file)
	{
		$destination = './terms/'.$file;
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























