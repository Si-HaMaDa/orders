<?php namespace classes\Cat;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
* Category class
*/
class Cat extends Eloquent
{
	public $data;
	public $errors = array();

	function __construct(){}

	public function postData(){}

	public function saveData(){}
}

