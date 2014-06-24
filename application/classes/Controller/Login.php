<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Login extends Controller {
	
	public function before()
	{
		parent::before();
		$this->a1 = A1::instance();
		$this->users = new Model_Usuarios();	
	}

	public function action_index()
	{
		$msg = "";
		if($_POST)
		{	
			if($this->a1->login($_POST["email"],$_POST["password"],FALSE))
			{
				$this->redirect(URL::base()."login/access");
			}
		}	
		$this->response->body(View::factory("login")->set(array("msg"=>$msg)));
	}

	public function action_access()
	{
		if($this->a1->logged_in())
		{
			$user = $this->a1->get_user();
			$this->response->body(View::factory("access")->set("user",$user));
		}else{
			$this->redirect(URL::base()."login");
		}
	}

	public function action_logout()
	{
		$this->a1->logout();
		$this->redirect(URL::base()."login");
	}

	
}