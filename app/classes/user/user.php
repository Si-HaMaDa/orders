<?php namespace classes\User;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
* Users class
*/
class User extends Eloquent
{
	public $data;
	public $errors = array();
	public $signin_data_fetch;
	public $signup_data_check = array('checked' => '');
	public $user_logged = false;
	public $pass_options = array('cost' => 9);

	function __construct(){}

	public function signup()
	{
		if ($_POST['pass'] != $_POST['rpass']) {
			$this->errors['pass'] = "not match";
		}


		$this->signup_data_check['email'] = $this::all()
		->where('email', filter_var( $_POST['email'], FILTER_SANITIZE_STRING))
		->toArray();
		if (!empty($this->signup_data_check['email'])) {
			$this->errors['email'] = "exist email";
		}
		
		$this->signup_data_check['phone'] = $this::all()
		->where('phone', filter_var( $_POST['phone'], FILTER_SANITIZE_STRING))
		->toArray();
		if (!empty($this->signup_data_check['phone'])) {
			$this->errors['phone'] = "exist phone";
		}	

		if (empty($this->errors)){

			$geoip = file_get_contents('https://geoip-db.com/json');
    		$geoip = json_decode($geoip);

    		$hashed_password = password_hash(
    			filter_var( $_POST['pass'] , FILTER_SANITIZE_STRING),
    			PASSWORD_BCRYPT, $this->pass_options);

			$this->name  = filter_var( $_POST['name'] , FILTER_SANITIZE_STRING);
			$this->pass  = $hashed_password;
			$this->email = filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL );
			$this->phone = filter_var( $_POST['phone'], FILTER_SANITIZE_STRING);
			$this->country = filter_var( $geoip->country_name, FILTER_SANITIZE_STRING);
  	 		$this->city    = filter_var( $geoip->city	     , FILTER_SANITIZE_STRING);
			if ($this->save()){
				echo "<script>alert('Done');window.location='index.php';</script>";
			}
		} else {
			$this->signup_data_check['checked'] = 'checked';
			echo "<script>alert('Please fix the errors<br>');</script>";
			return false;
		}
	}


	public function signin()
	{
		$this->signin_data_fetch = $this
		::where('email', filter_var( $_POST['name'], FILTER_SANITIZE_STRING))
		->orWhere('phone', filter_var( $_POST['name'], FILTER_SANITIZE_STRING))
		->first()
		->toArray();

		// print_r($this->signin_data_fetch);
		// dd($this->signin_data_fetch);
		if (
			!empty($this->signin_data_fetch) &&
			password_verify(filter_var( $_POST['pass'], FILTER_SANITIZE_STRING), $this->signin_data_fetch['pass'])
			){
			$_SESSION['user_id'] = $this->signin_data_fetch['id'];
            $_SESSION['user_name'] = $this->signin_data_fetch['name'];
            $_SESSION['user_email'] = $this->signin_data_fetch['email'];
            $_SESSION['user_logged_in'] = 1;

			echo "<script>alert('Hi ".$this->signin_data_fetch['name']."! You\'re loged in...');window.location='sign.php';</script>";
		} else {
			echo "<script>alert('Wrong Username or Password');</script>";
		}
	}


	public function logout()
	{
		$_SESSION = array();
        session_destroy();
	}
}

