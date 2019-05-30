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
		debug($files);
		for ($i = 2; $i < count($files); $i++) {

			$arr = explode('.', $files[$i]);
			debug($arr[0]);
			$name = iconv('KOI8-R', 'utf-8', $arr[0]);
			echo $name;
			exit();
			debug($name);
			$params = ['name' => $name, 'type' => $this->get->type];
			debug($params);
			$id_term = (new self)->addDataModel($params);
			rename('./temp/'.$files[$i], './terms/'.$id_term.'.'.$arr[1]);
			$id_img = (new Image)->addDataModel($id_term);
			(new Image)->setData($id_img)->editFileModel($id_term.'.'.$arr[1]);
			debug('exit');
		}
	}

	
}























