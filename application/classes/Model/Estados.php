<?php defined('SYSPATH') or die('No direct script access.');

class Model_Estados extends ORM {

	public function get_all()
	{
		return ORM::factory($this->table_name())->find_all();
	}
}