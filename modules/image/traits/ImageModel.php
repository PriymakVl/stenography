<?php

trait ImageModel  {
	
	public function getByIdTerm($id_term = false)
    {
		$params = ['id_term' => $id_term ? $id_term : $this->params->id_term, 'status' => STATUS_ACTIVE];
        $sql = 'SELECT * FROM `images` WHERE `id_term` = :id_term AND `status` = :status';
        return self::perform($sql, $params)->fetchAll();
    }
	
	public function addDataModel($id_term)
	{
		$sql = 'INSERT INTO `images` (id_term) VALUES (:id_term)';
        return self::insert($sql, ['id_term' => $id_term]); 
	}
	
	public function editFileModel($file)
	{
		$params = ['id_img' => $this->id, 'file' => $file];
		$sql = 'UPDATE `images` SET `file` = :file WHERE `id` = :id_img';
		return self::update($sql, $params); 
	}
    
	
}























