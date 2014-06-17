<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Login extends Controller {

	
	public function before()
	{
		parent::before();
		$this->auth = A1::instance();
		$this->users = new Model_Usuarios();
		if ($this->auth->logged_in())
		{
			echo "inicio login";
		}
		
	}

	public function action_index()
	{
		$msg = "";
		//echo $this->auth->hash_password("123");
		/*if($this->request->method()==Request::POST)
		{
			if($this->auth->login($_POST['email'], $_POST['password']))
			{
				echo "asdsad";
			}
			else{
				echo "no";
			}
		}
		$this->response->body(View::factory("login")->set(array("msg"=>$msg)));*/
	}

	
}