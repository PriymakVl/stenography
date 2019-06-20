<?php

class Controller_Rule extends Controller_Base {

    public function __construct()
    {
        parent::__construct();
        $this->view->pathFolder = './modules/rule/views/';
		$this->view->title = 'Правила';
		$this->message->section = 'rule';
    }
	
	public function action_list()
	{
		$obj = new Rule;
		$rules = $obj->getList(2);
		debug($rules);
		$pagination = $obj->getPagination();
		$this->render('list/main', compact('pagination', 'rules'));
	}
	
	public function action_index()
	{
		$term = new Rule($this->get->id_rule);
		$this->render('index/main', compact('rule'));
	}

	public function action_add()
    {
		if (!$this->post->save) return $this->render('add/main');
		$rule = (new Rule)->addData()->setMessage('success', 'add');
		$this->redirect('rule?id_rule='. $rule->id);
    }
	
	public function action_add_example()
	{
		if (!$this->post->save) return $this->render('add_example/main');
		$rule = (new Rule)->setData($this->get->id_rule)->addExample()->setMessage('success', 'add_example');
		$this->redirect('rule?id_rule='. $rule->id);
	}
	
	public function action_edit()
    {
		$term = new Rule($this->get->id_rule);
		if (!$this->post->save) return $this->render('edit/main', compact('rule'));
		$term->editData()->setMessage('success', 'edit');
		$this->redirect('rule?id_rule='.$rule->id);
    }
	
	public function action_delete()
	{
		(new Rule)->setData($this->get->id_rule)->delete()->setMessage('success', 'delete');
		$this->redirect('rule/list');
	}
	
	

    
	
}