<?php namespace classes\User;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
* Users class
*/
class User extends Eloquent
{
	public $data;
	public $errors = array();

	function __construct(){}

	public function signup()
	{
		if ($_POST['pass'] != $_POST['rpass']) {
			$this->errors['pass'] = "not match";
		}

		if (empty($this->errors)){

			$geoip = file_get_contents('https://geoip-db.com/json');
    		$geoip = json_decode($geoip);

			$this->name  = filter_var( $_POST['name'], FILTER_SANITIZE_STRING);
			$this->pass  = filter_var( $_POST['pass'], FILTER_SANITIZE_STRING);
			$this->email = filter_var( $_POST['email'], FILTER_SANITIZE_STRING);
			$this->phone = filter_var( $_POST['phone'], FILTER_SANITIZE_STRING);
			$this->country = filter_var( $geoip->country_name, FILTER_SANITIZE_STRING);
  	 		$this->city    = filter_var( $geoip->city	     , FILTER_SANITIZE_STRING);
			if ($this->save()){
				echo "<script>alert('Done');window.location='index.php';</script>";
			}
		} else {
			echo "<script>alert('Please fix the errors');</script>";
			return false;
		}
	}


	public function signin()
	{
		if (!empty(
		$this->all()
		->where('name', filter_var( $_POST['name'], FILTER_SANITIZE_STRING))
		->where('pass', filter_var( $_POST['pass'], FILTER_SANITIZE_STRING))
		->toArray()
		)){
			echo "<script>alert('Logged in');window.location='index.php';</script>";
		} else {
			echo "<script>alert('Wrong Username or Password');</script>";
		}
	}
}

