<?php defined('SYSPATH') or die('No direct script access.');

class Model_Usuarios extends ORM {

	protected $_primary_key = "id_user";
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

	public function select_object($id)
	{
		return ORM::factory($this->table_name())->where("id_user","=",$id)->find();
	}

	public function editar($post,$id)
	{
		$usuario = ORM::factory("usuarios")->where("id_user","=",$id)->find();
		$usuario->name 	= $post["name"];
		$usuario->email = $post["email"];
		$usuario->web 	= $post["web"];
		return $usuario->save();
	}

	public function eliminar($id)
	{
		$query = "delete from usuarios where id_user=".$id;
		return DB::query(Database::DELETE,$query)->execute();
	}
}