<?php

trait SoundModel  {
	
	public function selectByIdTerm($id_term = false)
    {
		$params = ['id_term' => $id_term ? $id_term : $this->params->id_term, 'status' => STATUS_ACTIVE];
        $sql = 'SELECT * FROM `sounds` WHERE `id_term` = :id_term AND `status` = :status';
        return self::perform($sql, $params)->fetch();
    }
	
	public function addDataModel($id_term)
	{
		$sql = 'INSERT INTO `sounds` (id_term) VALUES (:id_term)';
        return self::insert($sql, ['id_term' => $id_term]); 
	}
	
	public function editFileModel($file)
	{
		$params = ['id_sound' => $this->id, 'file' => $file];
		$sql = 'UPDATE `sounds` SET `file` = :file WHERE `id` = :id_sound';
		return self::update($sql, $params); 
	}
    
	
}























