<?php namespace classes\Category;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
* Category class
*/
class Category extends Eloquent
{
	public $data;
	public $errors = array();

	function __construct(){}

	public function postData(){}

	public function saveData(){}
}

