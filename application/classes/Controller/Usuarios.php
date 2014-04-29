<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Usuarios extends Controller {

	protected $usuarios;
	public function before()
	{
		parent::before();
		$this->usuarios = new Model_Usuarios();
	}

	public function action_index()
	{
		$view = View::factory("crud/lista_usuarios");
		$usuarios = $this->usuarios->get_all();
		$this->response->body(
			$view->set(
				array(
				"usuarios"	=> $usuarios,
				)
			)
		);
	}

	public function action_agregar()
	{

	}

	public function action_editar()
	{

	}

	public function action_eliminar()
	{
		
	}
}