<?php

trait TermCreateSentense {

public function makeSentense($sentense)
	{
		$words = explode(' ', $sentense);
		if (!$words) return;
		$result = [];
		foreach ($words as $word) {
			$term = $this->getTermForSentense(trim($word));
			if (!$term || !$term->images) $result[$word] = false; 
			else $result[$term->name] = sprintf('<img src="/terms/%s">', $term->images[0]->file);
		}
		return $result;
	}

	private function getTermForSentense($word) 
	{
		$data = $this->getByNameModel($word);
		if (!$data) $data = $this->getPartWord($word);
		if ($data) return (new Term)->setData($data)->getImages();
	}

	private function getPartWord($word)
	{
		$word_cut = $this->deleteEndVowels($word);
		$params = ['name' => $word_cut, 'status' => STATUS_ACTIVE];
        $sql = 'SELECT * FROM `terms` WHERE `name` like concat(:name, "%") AND `status` = :status';
        $data = self::perform($sql, $params)->fetchAll();
        if ($data) return $data[0];
	}

	private function deleteEndVowels($word)
	{
		if (mb_strlen($word) < 4) return $word;
		$letter = mb_substr($word, -1);
		$letter = 'ы'.$letter;
		$vowels = ['ыа', 'ыу',  'ыо',  'ыы',  'ыи', 'ыэ',  'ыя',  'ыю', 'ыё', 'ые'];
		if (in_array($letter, $vowels)) return $this->deleteEndVowels(mb_substr($word, 0, -1));
	    return $word;
	}

}