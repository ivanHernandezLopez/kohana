<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Mysql extends Controller {

	//Declaramos las variables que utilizaremos para realizar instacias a BD
	protected $estados;
	public function before()
	{
		parent::before();
		//Realizamos instacias
		$this->estados = new Model_Estados();
	}

	public function action_index()
	{	
		//Realizamos la consulta
		$estados = $this->estados->get_all();
		//Recorremos el resulado
		foreach ($estados as $estado) {
			echo $estado->nom_largo."<br/>";
		}
	}
}