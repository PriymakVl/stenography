<?php

class Controller_Exercise extends Controller_Base {

    public function __construct()
    {
        parent::__construct();
        $this->view->pathLayout = './views/layouts/default.php';
    }

    public function action_list()
    {
        $this->view->title = 'Упражнения';
        return $this->render('exercises/list');
    }

    public function action_file()
    {
        return $this->render('exercises/'.$this->get->name);
    }

    

}