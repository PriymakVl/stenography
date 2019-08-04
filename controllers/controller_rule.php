<?php

class Controller_Rule extends Controller_Base {

    public function __construct()
    {
        parent::__construct();
        $this->view->pathFolder = './modules/rule/views/';
		$this->view->title = 'Правила';
		$this->message->section = 'rule';
    }

    public function action_category()
    {
    	$cats = RuleCategory::getAll();
    	$this->render('categories/main', compact('cats'));
    }
	
	public function action_list()
	{
		$obj = new Rule;
		$rules = $obj->getList(5);
		$pagination = $obj->getPagination();
		$cat = (new RuleCategory)->getData($this->get->id_cat);
		$this->render('list/main', compact('pagination', 'rules', 'cat'));
	}
	
	public function action_index()
	{
		$rule = (new Rule)->setData($this->get->id_rule)->getExamples()->getCategory();
		$this->render('index/main', compact('rule'));
	}

	public function action_add()
    {
    	$cats = RuleCategory::getAll();
		if (!$this->post->save) return $this->render('add/main', compact('cats'));
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
    	$cats = RuleCategory::getAll();
		$rule = new Rule($this->get->id_rule);
		if (!$this->post->save) return $this->render('edit/main', compact('rule', 'cats'));
		$rule->editData()->setMessage('success', 'edit');
		$this->redirect('rule?id_rule='.$rule->id);
    }
	
	public function action_delete()
	{
		(new Rule)->setData($this->get->id_rule)->delete()->setMessage('success', 'delete');
		$this->redirect('rule/list');
	}
	
	

    
	
}