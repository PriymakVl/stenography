<?php

class Controller_Image extends Controller_Base {

    public function __construct()
    {
        parent::__construct();
        $this->view->pathFolder = './modules/image/views/';
		$this->view->title = 'Стенография';
		$this->message->section = 'image';
    }

	public function action_add()
    {
		if (!$this->post->save) return $this->render('add/main');
		$dwg = (new Image)->add();
		$this->redirect('term?id_term='.$this->params->id_term);
    }
	
	// public function action_delete()
	// {
		// $dwg = (new Drawing)->setData($this->get->id_dwg)->delete()->setMessage('success', 'delete');
		// $this->redirect('product?tab='.self::PRODUCT_TAB_DRAWINGS.'&id_prod='.$this->get->id_prod);
	// }
	
	// public function action_edit_note()
	// {
		// $dwg = new Drawing($this->get->id_dwg);
		// if (!$this->post->save) return $this->render('edit_note/main', compact('dwg'));
		// $dwg->editNote()->setMessage('success', 'edit_note');
		// $this->redirect('product?tab='.self::PRODUCT_TAB_DRAWINGS.'&id_prod='.$this->get->id_prod);
	// }

    
	
}