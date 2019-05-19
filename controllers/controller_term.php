<?php

class Controller_Term extends Controller_Base {

    public function __construct()
    {
        parent::__construct();
        $this->view->pathFolder = './modules/term/views/';
		$this->view->title = 'Стенография';
		$this->message->section = 'term';
    }
	
	public function action_list()
	{
		$terms = (new Term)->getList();
		$this->render('list/main', compact('terms'));
	}
	
	public function action_index()
	{
		$term = Term::build($this->get->id_term, ['getImages']);
		$this->render('index/main', compact('term'));
	}

	public function action_add()
    {
		if (!$this->post->save) return $this->render('add/main');
		$term = (new Term)->add()->setMessage('success', 'add');
		$this->redirect('term?id_term='.$term->id);
    }
	
	public function action_delete()
	{
		(new Term)->setData($this->get->id_term)->delete()->setMessage('success', 'delete');
		$this->redirect('term/list');
	}
	
	public function action_search()
	{
		$terms = (new Term)->search();
		if (!$terms) return $this->setMessage('error', 'search_error')->redirectPreviosly();
		if (count($terms) == 1) return $this->setMessage('success', 'search_one')->redirect('term?id_term='.$terms[0]->id);
		$this->setMessage('success', 'search_many')->render('search/main', $terms);
	}
	
	

    
	
}