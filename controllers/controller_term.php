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
		$show_qty = ($this->session->type == Term::TYPE_PHRASE) ? 1 : 4;
		$obj = new Term;
		$terms = $obj->getList($show_qty);
		$pagination = $obj->getPagination();
		$this->render('list/main', compact('pagination', 'terms'));
	}

	//select type
	public function action_select()
	{
		$this->setSession('type', $this->get->type);
		$this->redirect('term/list');
	}

	public function action_options()
	{
		$this->setSession('hide', $this->get->hide);
		return $this->redirect('term/list');
	}
	
	public function action_index()
	{
        $text = urlencode(iconv("CP1251", "UTF-8", 'Где ваше пальто?'));
        $link = "http://translate.google.com/translate_tts?tl=RU&ie=UTF-8&q=" . $text;
        $mp3data = file_get_contents($link);
        $file = time() . ".mp3";
        $sound = file_put_contents($file, $mp3data);
        // debug($sound);
		$term = Term::build($this->get->id_term, ['getImages', 'setTypeString', 'getSound']);
		$this->render('index/main', compact('term', 'sound'));
	}

	public function action_add()
    {
		if (!$this->post->save) return $this->render('add/main');
		$term = (new Term)->addData()->setMessage('success', 'add');
		$this->redirect('term?id_term='.$term->id);
    }
	
	public function action_add_list()
	{
		$files = scandir('./web/temp');
		(new Term)->addList($files)->setMessage('success', 'add_list');
		$this->redirect();
	}
	
	public function action_edit()
    {
		$term = new Term($this->get->id_term);
		if (!$this->post->save) return $this->render('edit/main', compact('term'));
		$term->editData()->setMessage('success', 'edit');
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
		if (!$terms) return $this->setMessage('error', 'search_error')->redirectPrevious();
		if (count($terms) == 1) return $this->setMessage('success', 'search_one')->redirect('term?id_term='.$terms[0]->id);
		$this->setMessage('success', 'search_many')->render('search/main', compact('terms'));
	}
	
	

    
	
}