<?php

trait Pagination {

	public function getPagination($items, $per_page)
	{
		$this->pagination = $this->initPagination($per_page);
		debug($this->pagination);
		$this->pagination->items = $this->selectForPagination($items);
	}
	
	public function selectForPagination($items)
	{
		$result = [];
		foreach ($items as $key => $item) {
			if ($key < $start) continue;
			if ($key > $end) break;
			$result[] = $item;
		}
		return $result;
	}

	public function initPagination($per_page)
	{
		$pagination['page'] = $this->get->page ? $this->get->page : 1;
		$pagination['start'] = ($pagination['page'] == 1) ? 0 : $pagination['page'] * $per_page;
		$pagination['end'] = ($pagination['page'] == 1) ? $per_page : $pagination['page'] * $per_page;
		return (object) $pagination;
	} 


}