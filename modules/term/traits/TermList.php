<?php

trait TermList {

	public function getList()
	{
		$type = $this->get->type ? $this->get->type : self::TYPE_WORD;
		$items = $this->getByTypeModel($type);
		if ($items) return ObjectHelper::factory($items, 'Term', ['setData', 'getImages',]);
	}
	
	public function addList($files)
	{
		for ($i = 2; $i < count($files); $i++) {
			$arr = explode('.', $files[$i]);
			$name = mb_convert_encoding($arr[0], "utf-8", "windows-1251");
			
			$term = $this->getByNameModel($name);
			if ($term) $id_term = $term->id;
			else {
				$params = ['name' => $name, 'type' => $this->get->type];
				$id_term = (new self)->addDataModel($params);
			}
			$this->moveImage($id_term, $files[$i], $arr[1]);
		}	
		return $this;
	}

	private function moveImage($id_term, $file, $extension)
	{
		$id_img = (new Image)->addDataModel($id_term);
		(new Image)->setData($id_img)->editFileModel($id_img.'.'.$extension);
		rename('./web/temp/'.$file, './terms/'.$id_img.'.'.$extension);
	}



	
}























