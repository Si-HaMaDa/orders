<?php

require 'header-1.php';

use classes\Order\Order as order;

$order = new order();


if (isset($_GET['id']) && isset($_GET['name']) && is_numeric($_GET['id'])){

	if (!empty($_SESSION) && @$_SESSION['user_logged_in']){

		if (isset($_POST['submit'])) {
			if(!$order->saveData()){
				$order->postData();
			}
		}
	} else {
		echo "<script>alert('you must be logged in to order products');window.location='sign.php';</script>";
		die('Try another tirck :D');
	}

} else {
	echo "<script>window.location='index.php';</script>";
	die('Try another tirck :D');
}


?>





<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Order <?=$_GET['name']?> product</h3>
	</div>
	<div class="panel-body">
	  	<form class="form-validate form-horizontal" method="post">

			<div class="form-group">
			  <label class="col-sm-2 control-label">the Number you want to order<span class="required">*</span></label>
			  <div class="col-sm-10">
			      <input type="text" name="num" minlength="1" class="form-control" placeholder="the Number you want to order" required>
			  </div>
			</div>

			<div class="form-group">
			  <label class="control-label col-sm-2">Your Notes</label>
			  <div class="col-sm-10">
			      <textarea class="form-control ckeditor" name="notes" rows="6"></textarea>
			  </div>
			</div>

			<div class="form-group">
			  <div class="col-lg-offset-2 col-lg-10">
			      <button class="btn btn-primary" name="submit" type="submit">Order</button>
			  </div>
			</div>

	   	</form>
	</div>
</div>






<?php
require 'footer.php';
?>