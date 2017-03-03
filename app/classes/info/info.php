<?php namespace classes\Info;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
* Info class
*/
class Info extends Eloquent
{
	public $data;
	public $errors = array();

	function __construct(){}

	public function getData()
	{
		$this->data = $this->find(1)->toArray();
		// return $this->data;
	}

	public function postData()
	{
		foreach ($_POST as $key => $value) {
			$this->data[$key] = $value;
		}
	}

	public function saveData()
	{
		
		if (!empty($this->errors)) {
			return false;
		}

		if ($this::where('id', 1)
          	 ->update([
          	 	'name' 	=> filter_var( $_POST['name']		, FILTER_SANITIZE_STRING),
          	 	'head' 	=> filter_var( $_POST['head']		, FILTER_SANITIZE_STRING),
          	 	'phones' 	=> filter_var( $_POST['phones']	, FILTER_SANITIZE_STRING),
          	 	'worktime' => filter_var( $_POST['worktime'], FILTER_SANITIZE_STRING),
          	 	'desc' 	=> filter_var( $_POST['desc']		, FILTER_SANITIZE_STRING)
          	 	]))
		{
			echo "<script>alert('Done');window.location='';</script>";
		}

	}
}

