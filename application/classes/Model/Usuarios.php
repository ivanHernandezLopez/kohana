<?php defined('SYSPATH') or die('No direct script access.');

class Model_Usuarios extends ORM {

	public function get_all()
	{
		return ORM::factory("usuarios")->find_all();
	}
}