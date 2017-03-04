<?php namespace classes\Call;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
* Calls class
*/
class Call extends Eloquent
{
	public $data = array(
		'name'  => '',
		'email' => '',
		'phone' => '',
		'desc'  => ''
		);
	public $errors = array();

	function __construct(){}

	public function postData()
	{
		foreach ($_POST as $key => $value) {
			$this->data[$key] = $value;
		}
	}

	public function getData()
	{
		$this->data = $this->all();
	}

	public function getOneData($one)
	{
		$this->data = $this->find($one);
	}

	public function saveData()
	{

		$geoip = file_get_contents('https://geoip-db.com/json');
    	$geoip = json_decode($geoip);
		
		if (!empty($this->errors)) {
			return false;
		}
		
  	 	$this->name    = filter_var( $_POST['name']	     , FILTER_SANITIZE_STRING);
  	 	$this->email   = filter_var( $_POST['email']     , FILTER_SANITIZE_STRING);
  	 	$this->phone   = filter_var( $_POST['phone']     , FILTER_SANITIZE_STRING);
  	 	$this->subject = filter_var( $_POST['subject']   , FILTER_SANITIZE_STRING);
  	 	$this->desc    = filter_var( $_POST['desc']	     , FILTER_SANITIZE_STRING);
  	 	$this->country = filter_var( $geoip->country_name, FILTER_SANITIZE_STRING);
  	 	$this->city    = filter_var( $geoip->city	     , FILTER_SANITIZE_STRING);
  	 	if ($this->save()){
  	 		echo "<script>alert('Your message were sent successfully');window.location='';</script>";
  	 	}

	}

	public function deleteee($del)
	{
		if ($this::where('id', $del)->delete()){
			echo "<script>alert('the message has been deleted successfully');window.location='messages.php';</script>";
		}
	}
}

