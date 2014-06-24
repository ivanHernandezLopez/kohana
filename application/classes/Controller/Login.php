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
		echo "--".$this->a1->hash("admin")."---";
		if($_POST)
		{		
			if($this->a1->login($_POST["email"],$_POST["password"],FALSE))
			{
				echo "SI LOGEADO";
			}else{
				echo "NO LOGEADO";
			}
		}	
		$this->response->body(View::factory("login")->set(array("msg"=>$msg)));
	}

	
}