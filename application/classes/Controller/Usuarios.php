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
		$msg = "";
		if($this->request->method()==Request::POST)
		{
			//Entramos solo si recibimos datos por POST
			$msg = "Error MySQL: Intente nuevamentes";
			$usuario = $this->usuarios->agregar($_POST); //Enviamos POST al modelo: usuario, metodo: agregar
			if($usuario)
			{
				//Solo si se inserto el registro
				$msg = "Registro insertado correctamente";
			}
		}
		$view = View::factory("crud/agregar_usuarios");
		$this->response->body(
				$view->set(
					array(
						"msg"	=> $msg,
						)
					)
			);
	}

	public function action_editar()
	{

	}

	public function action_eliminar()
	{
		
	}
}