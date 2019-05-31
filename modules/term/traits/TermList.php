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
			$name = $arr[0];
			// mb_convert_encoding($name, 'utf-8');
			// var_dump(mb_check_encoding  ($name));
			debug($name);
			$params = ['name' => $arr[0], 'type' => $this->get->type];
			$id_term = (new self)->addDataModel($params);
			// rename('./temp/'.$files[$i], './terms/'.$id_term.'.'.$arr[1]);
			// $id_img = (new Image)->addDataModel($id_term);
			// (new Image)->setData($id_img)->editFileModel($id_term.'.'.$arr[1]);
		}
			debug('exit');
	}

	
}























