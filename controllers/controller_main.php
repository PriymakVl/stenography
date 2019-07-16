<?php

class Controller_Main extends Controller_Base {

    public function __construct()
    {
        parent::__construct();
        $this->view->pathLayout = './views/layouts/default.php';
    }

	public function action_404()
    {
		$this->view->pathLayout = './views/layouts/default.php';
        $this->render('main/404', ['path' => $this->get->path]);
    }

    public function action_index()
    {
       return $this->render('main/index');
    }

    public function action_admin()
    {
        if (!$this->session->id_user) return $this->redirect('main/login');
        $user = new User($this->session->id_user);
        $this->redirect('main/index');
    }

    public function action_login()
    {
        $this->view->pathLayout = './views/layouts/authorization.php';
		if (!$this->post->save) return $this->render('main/login');
        $user = (new User)->login();	
		return $this->setSession('id_user', $user->id)->redirect('main/index');
    }

    public function action_logout()
    {
        $this->deleteSession('id_user')->redirect('main/index');
    }

    public function action_exercise()
    {
        $this->view->title = 'Упражнения';
        return $this->render('main/exercise');
    }

}