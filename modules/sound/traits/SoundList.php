<?php

trait SoundList {

	public function addList($files)
	{
		for ($i = 2; $i < count($files); $i++) {
			$arr = explode('.', $files[$i]);
			$name = mb_convert_encoding($arr[0], "utf-8", "windows-1251");
			$term = (new Term)->getByNameModel($name);
			if (!$term) continue;
			$sound = $this->selectByIdTerm($term->id);
			if ($sound) continue;
			$this->moveAudioFile($term->id, $files[$i], $arr[1]);
		}	
		return $this;
	}

	private function moveAudioFile($id_term, $file, $extension)
	{
		$id_sound = (new self)->addDataModel($id_term);
		(new self)->setData($id_sound)->editFileModel($id_sound.'.'.$extension);
		rename('./web/temp/'.$file, './terms/'.$id_sound.'.'.$extension);
	}
}