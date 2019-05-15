<?php

class Controller_Drawing extends Controller_Base {

    public function __construct()
    {
        parent::__construct();
        $this->view->pathFolder = './modules/drawing/views/';
		$this->view->title = 'Стенография';
		$this->message->section = 'term';
    }
	
	public function action_list()
	{
		$terms = (new Term)->getList();
		$this->render('list/main', $terms);
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
	
	

    
	
}