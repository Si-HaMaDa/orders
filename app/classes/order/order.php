<?php namespace classes\Order;

use Illuminate\Database\Eloquent\Model as Eloquent;
/**
* Orders class
*/
class Order extends Eloquent
{
	public $data;
	public $errors = array();

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
			echo "<script>alert('the Order has been deleted successfully');window.location='orders.php';</script>";
			die('Try another tirck :D');
		}
	}

	public function saveData()
	{
		
		if (!empty($this->errors)) {
			return false;
		}
		
  	 	$this->user_id    = filter_var($_SESSION['user_id'], FILTER_SANITIZE_STRING);
  	 	$this->product_id = filter_var($_GET['id']		   , FILTER_SANITIZE_STRING);
  	 	$this->num 		  = filter_var($_POST['num']	   , FILTER_SANITIZE_STRING);
  	 	$this->notes 	  = filter_var($_POST['notes']	   , FILTER_SANITIZE_STRING);
  	 	if ($this->save()){
  	 		echo "<script>alert('Your Order added successfully');window.location='index.php';</script>";
  	 	}

	}

	public function updateee($edit)
	{
		
		if (!empty($this->errors)) {
			return false;
		}

		if ($this::where('id', $edit)
          	 ->update([
          	 	'user_id'    => filter_var( $_POST['user_id']    , FILTER_SANITIZE_STRING),
          	 	'product_id' => filter_var( $_POST['product_id'] , FILTER_SANITIZE_STRING),
          	 	'num'        => filter_var( $_POST['num']        , FILTER_SANITIZE_STRING),
          	 	'notes'      => filter_var( $_POST['notes']      , FILTER_SANITIZE_STRING)
          	 	]))
		{
			echo "<script>alert('Done');window.location='orders.php';</script>";
		}

	}
}
