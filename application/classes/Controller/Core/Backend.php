<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Core_Backend extends Controller_Core_System {

	protected $a1,$authention,$userdata;
	public function before()
	{
		parent::before();
		$this->authention = TRUE;
		$this->a1 = A1::instance();
		$this->users = new Model_Usuarios();
		if($this->a1->logged_in())
			$this->redirect(URL::base()."backend/usuarios");
		$this->template = "";
	}

	public function after()
	{
		if($this->authention == TRUE AND !$this->a1->logged_in())
			$this->redirect(URL::base()."backend/login");
		
		parent::after();
	}
}