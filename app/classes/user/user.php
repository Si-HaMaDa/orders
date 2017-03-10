<?php namespace classes\User;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
* Users class
*/
class User extends Eloquent
{
	public $data = array(
		'id'  => '',
		'name'  => '',
		'email' => '',
		'phone' => '',
		'lvl'  => '',
		'country'  => '',
		'city'  => ''
		);
	public $errors = array();
	public $signin_data_fetch;
	public $signup_data_check = array('checked' => '');
	public $user_logged = false;
	public $pass_options = array('cost' => 9);

	private $update_array = array();

	function __construct(){
		if (!empty($_SESSION) && @$_SESSION['user_logged_in'])
			$this->user_logged = true;
	}


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
			echo "<script>alert('the user has been deleted successfully');window.location='users.php';</script>";
			die('Try another tirck :D');
		}
	}


	public function signup()
	{
		if ($this->user_logged && !$this->checkAdmin()) {
			echo "<script>alert('You already have an account!');window.location='index.php';</script>";
			return false;
			die('Try another tirck :D');
		}

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

			if (!$this->checkAdmin()) {
				$geoip = file_get_contents('https://geoip-db.com/json');
    			$geoip = json_decode($geoip);
				$this->country = filter_var( $geoip->country_name, FILTER_SANITIZE_STRING);
  	 			$this->city    = filter_var( $geoip->city	     , FILTER_SANITIZE_STRING);
			} else {
				$this->country = filter_var( $_POST['country'], FILTER_SANITIZE_STRING);
  	 			$this->city    = filter_var( $_POST['city'], FILTER_SANITIZE_STRING);
			}


    		$hashed_password = password_hash(
    			filter_var( $_POST['pass'] , FILTER_SANITIZE_STRING),
    			PASSWORD_BCRYPT, $this->pass_options);

			$this->name  = filter_var( $_POST['name'] , FILTER_SANITIZE_STRING);
			$this->pass  = $hashed_password;
			$this->email = filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL );
			$this->phone = filter_var( $_POST['phone'], FILTER_SANITIZE_STRING);
			

  	 		if ($this->checkAdmin() && $_POST['lvl']) {
				$this->lvl = filter_var( $_POST['lvl'], FILTER_SANITIZE_STRING);
  	 		}

			if ($this->save()){
				echo "<script>alert('Done');window.location='index.php';</script>";
				die('Try another tirck :D');
			}
		} else {
			dd($this->errors);
			echo "<script>alert('Please fix the errors<br>');</script>";
			return false;
			die('Try another tirck :D');
		}
	}


	public function updateee($edit)
	{

		if ($this->user_logged && $_SESSION['user_lvl'] == 7) {

			if (isset($_POST['pass'])) {
				if ($_POST['pass'] != $_POST['rpass'])
					$this->errors['pass'] = "not match";
			}

			if ($_POST['lvl']) {
				$this->lvl   = filter_var( $_POST['lvl']  , FILTER_SANITIZE_STRING);
			}

		}

		


		$this->signup_data_check['email'] = $this::all()
		->where('id', '!=', $edit)
		->where('email', filter_var( $_POST['email'], FILTER_SANITIZE_STRING))
		->toArray();
		if (!empty($this->signup_data_check['email'])) {
			$this->errors['email'] = "exist email";
		}
		
		$this->signup_data_check['phone'] = $this::all()
		->where('id', '!=', $edit)
		->where('phone', filter_var( $_POST['phone'], FILTER_SANITIZE_STRING))
		->toArray();
		if (!empty($this->signup_data_check['phone'])) {
			$this->errors['phone'] = "exist phone";
		}	

		if (empty($this->errors)){

			$this->update_array = array(
				'name' 	 => filter_var( $_POST['name'] , FILTER_SANITIZE_STRING),
          	 	'email'  => filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL ),
          	 	'phone'  => filter_var( $_POST['phone'], FILTER_SANITIZE_STRING),
          	 	'country'=> filter_var( $_POST['country'], FILTER_SANITIZE_STRING),
          	 	'city' 	 => filter_var( $_POST['city']	  , FILTER_SANITIZE_STRING)
				);

			if (isset($_POST['pass'])) {
				$hashed_password = password_hash(
	    			filter_var( $_POST['pass'] , FILTER_SANITIZE_STRING), PASSWORD_BCRYPT, $this->pass_options);
				$this->update_array['pass'] = $hashed_password;

			}

			if (isset($_POST['lvl'])) {
				$this->update_array['lvl'] = filter_var( $_POST['lvl'] ,FILTER_SANITIZE_STRING);
			}

			if ($this::where('id', $edit)->update($this->update_array))
			{
				echo "<script>alert('Done');window.location='';</script>";
				die('Try another tirck :D');
			}
		} else {
			$this->signup_data_check['checked'] = 'checked';
			echo "<script>alert('Please fix the errors<br>');</script>";
			return false;
			die('Try another tirck :D');
		}
	}


	public function signin()
	{
		if ($this->user_logged) {
			echo "<script>alert('You already logged in!');window.location='index.php';</script>";
			return false;
			die('Try another tirck :D');
		}

		$this->signin_data_fetch = $this
		::where('email', filter_var( $_POST['email'], FILTER_SANITIZE_STRING))
		->orWhere('phone', filter_var( $_POST['email'], FILTER_SANITIZE_STRING))
		->first();

		// print_r($this->signin_data_fetch);
		// dd($this->signin_data_fetch);
		if (
			!empty($this->signin_data_fetch) &&
			password_verify(filter_var( $_POST['pass'], FILTER_SANITIZE_STRING), $this->signin_data_fetch['pass'])
			){
			$_SESSION['user_id'] = $this->signin_data_fetch['id'];
            $_SESSION['user_name'] = $this->signin_data_fetch['name'];
            $_SESSION['user_email'] = $this->signin_data_fetch['email'];
            $_SESSION['user_lvl'] = $this->signin_data_fetch['lvl'];
            $_SESSION['user_logged_in'] = 1;
            $this->user_logged = true;

			echo "<script>alert('Hi ".$this->signin_data_fetch['name']."! You\'re loged in...');window.location='index.php';</script>";
			die('Try another tirck :D');
		} else {
			echo "<script>alert('Wrong Username or Password');</script>";
		}
	}


	public function logout()
	{
		$_SESSION = array();
        session_destroy();
        echo "<script>alert('You\'re loged out...');window.location='index.php';</script>";
        die('Try another tirck :D');
	}


	public function checkAdmin()
	{
		if (!$this->user_logged || $_SESSION['user_lvl'] != 7){
			return false;
		}
		return true;
	}

	public function checkAdminPages()
	{
		if (!$this->checkAdmin()){
			header('location: http://localhost/orders/sign.php');
			return false;
			die('Try another tirck!');
		}
	}
}

