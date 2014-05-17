<?php defined('SYSPATH') or die('No direct script access.');

class Model_Usuarios extends ORM {

	public function get_all()
	{
		return ORM::factory("usuarios")->find_all();
	}

	public function agregar($post)
	{
		$usuario = ORM::factory("usuarios");
		$usuario->name 	= $post["name"];
		$usuario->email = $post["email"];
		$usuario->web 	= $post["web"];
		return $usuario->save();
	}
}