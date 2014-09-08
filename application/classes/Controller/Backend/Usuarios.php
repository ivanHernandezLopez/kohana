<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Backend_Usuarios extends Controller_Core_Backend {

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
			$msg = "Error MySQL: Intente nuevamente";
			$usuario = $this->usuarios->agregar($_POST); //Enviamos POST al modelo: usuario, metodo: agregar
			if($usuario)
			{
				//Solo si se inserto el registro
				$msg = "Ahora pudes logearte desde <a href='".URL::base()."login'>aqui</a><br>Usuario:".$_POST["email"]."<br>Contraseña:demo";
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
		$msg = "";
		$id_registro = $this->request->param("id");//Cachamos el id del registro
		if($this->request->method()==Request::POST)
		{
			//Entramos solo si recibimos datos por POST
			$msg = "Error MySQL: Intente nuevamentes";
			$usuario = $this->usuarios->editar($_POST,$id_registro); 
			if($usuario)
			{
				//Solo si se inserto el registro
				$msg = "Registro editado correctamente";
			}
		}
		$obect = $this->usuarios->select_object($id_registro); //Ejecutamos la consulta
		$view = View::factory("crud/editar_usuarios"); // Definimos la vista que usaremos
		$this->response->body(
				$view->set(array(
						"usuario"	=> $obect,
						"msg"		=> $msg,
					))
			);

	}

	public function action_eliminar()
	{
		$id = $this->request->param("id");
		$this->usuarios->eliminar($id);
		$this->redirect(URL::base()."usuarios/index");
	}
}