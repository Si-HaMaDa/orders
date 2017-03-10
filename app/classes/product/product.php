<?php namespace classes\Product;

use Illuminate\Database\Eloquent\Model as Eloquent;

use classes\Cat\Cat as Cat;

/**
* Products class
*/
class Product extends Eloquent
{
	function __construct(){}

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


	public function getData()
	{
		$this->data = $this->all();
	}

	public function getCatData()
	{
		return Cat::all();
		// $this->data['cat'] = $cat->all();
	}

	public function getCatName($cat)
	{
		return Cat::find($cat);
		// $this->data['cat'] = $cat->all();
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
			echo "<script>alert('the Product has been deleted successfully');window.location='products.php';</script>";
			die('Try another tirck :D');
		}
	}

	public function saveData()
	{
		
		if (!empty($this->errors)) {
			return false;
		}
		
  	 	$this->name   = filter_var( $_POST['name']  , FILTER_SANITIZE_STRING);
  	 	$this->img    = filter_var( $_POST['img']   , FILTER_SANITIZE_STRING);
  	 	$this->price  = filter_var( $_POST['price'] , FILTER_SANITIZE_STRING);
  	 	$this->statu  = filter_var( $_POST['statu'] , FILTER_SANITIZE_STRING);
  	 	$this->desc   = filter_var( $_POST['desc']	, FILTER_SANITIZE_STRING);
  	 	$this->cat_id = filter_var( $_POST['cat']	, FILTER_SANITIZE_STRING);
  	 	if ($this->save()){
  	 		echo "<script>alert('Your Product successfully added');window.location='products.php';</script>";
  	 	} else { return false;}

	}

	public function updateee($edit)
	{
		
		if (!empty($this->errors)) {
			return false;
		}

		if ($this::where('id', $edit)
          	 ->update([
          	 	'name'   => filter_var( $_POST['name']  , FILTER_SANITIZE_STRING),
          	 	'img'    => filter_var( $_POST['img']   , FILTER_SANITIZE_STRING),
          	 	'price'  => filter_var( $_POST['price'] , FILTER_SANITIZE_STRING),
  	 			'statu'  => filter_var( $_POST['statu'] , FILTER_SANITIZE_STRING),
          	 	'desc'   => filter_var( $_POST['desc']  , FILTER_SANITIZE_STRING),
          	 	'cat_id' => filter_var( $_POST['cat']   , FILTER_SANITIZE_STRING)
          	 	]))
		{
			echo "<script>alert('Done');window.location='products.php';</script>";
		}

	}
}

