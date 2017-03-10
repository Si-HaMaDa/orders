<?php namespace classes\Cat;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
* Category class
*/
class Cat extends Eloquent
{

	public $data = array(
		'id'  => '',
		'name'  => '',
		'img' => '',
		'desc' => '',
		'price'  => '',
		'statu'  => '',
		'num'  => '',
		'cat_id'  => ''
		);
	public $errors = array();

	private $update_array = array();

	function __construct(){}

	public function getData()
	{
		$this->data = $this->all();
	}

	public function postData()
	{
		foreach ($_POST as $key => $value) {
			$this->data[$key] = $value;
		}
	}

	public function getOneData($one)
	{
		$this->data = $this->find($one);
	}

	public function deleteee($del)
	{
		if ($this::where('id', $del)->delete()){
			echo "<script>alert('the Category has been deleted successfully');window.location='cats.php';</script>";
			die('Try another tirck :D');
		}
	}

	public function saveData()
	{
		
		if (!empty($this->errors)) {
			return false;
		}
		
  	 	$this->name = filter_var( $_POST['name'] , FILTER_SANITIZE_STRING);
  	 	$this->img  = filter_var( $_POST['img']  , FILTER_SANITIZE_STRING);
  	 	$this->desc = filter_var( $_POST['desc'] , FILTER_SANITIZE_STRING);
  	 	if ($this->save()){
  	 		echo "<script>alert('Your Categoty added successfully');window.location='cats.php';</script>";
  	 	}

	}

	public function updateee($edit)
	{
		
		if (!empty($this->errors)) {
			return false;
		}

		if ($this::where('id', $edit)
          	 ->update([
          	 	'name' => filter_var( $_POST['name'] , FILTER_SANITIZE_STRING),
          	 	'img'  => filter_var( $_POST['img']	 , FILTER_SANITIZE_STRING),
          	 	'desc' => filter_var( $_POST['desc'] , FILTER_SANITIZE_STRING)
          	 	]))
		{
			echo "<script>alert('Done');window.location='cats.php';</script>";
		}

	}
}

