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
		$rules = $obj->getList(16);
		$pagination = $obj->getPagination();
		$this->render('list/main', compact('pagination', 'rules'));
	}
	
	public function action_index()
	{
		$rule = (new Rule)->setData($this->get->id_rule)->getExamples();
		$this->render('index/main', compact('rule'));
	}

	public function action_add()
    {
		if (!$this->post->save) return $this->render('add/main');
		$rule = (new Rule)->addData()->setMessage('success', 'add');
		$this->redirect('rule?id_rule='. $rule->id);
    }
	
	public function action_add_examples()
	{
		$rule = (new Rule)->setData($this->get->id_rule);
		if (!$this->post->save) return $this->render('add_examples/main', compact('rule'));
		$rule->addExamples();
		$this->setMessage('success', 'add_example')->redirect('rule?id_rule='. $rule->id);
	}
	
	public function action_edit()
    {
		$rule = new Rule($this->get->id_rule);
		if (!$this->post->save) return $this->render('edit/main', compact('rule'));
		$rule->editData()->setMessage('success', 'edit');
		$this->redirect('rule?id_rule='.$rule->id);
    }
	
	public function action_delete()
	{
		(new Rule)->setData($this->get->id_rule)->delete()->setMessage('success', 'delete');
		$this->redirect('rule/list');
	}
	
	

    
	
}