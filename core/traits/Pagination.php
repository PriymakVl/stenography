<?php

trait Pagination {
	
	public function selectDataForPage($data, $pagination)
	{
		$result = [];
		foreach ($data as $key => $item) {
			if ($key < $pagination->start) continue;
			if ($key > $pagination->end) break;
			$result[] = $item;
		}
		return $result;
	}

	public function getPagination($per_page)
	{
		$pagination = ['link' => ''];
		$pagination['page'] = $this->get->page ? $this->get->page : 1;
		$pagination['start'] = ($pagination['page'] == 1) ? 0 : $pagination['page'] * $per_page;
		$pagination['end'] = ($pagination['page'] == 1) ? $per_page : $pagination['page'] * $per_page;
		return (object) $pagination;
	} 


}