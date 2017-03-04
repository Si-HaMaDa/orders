<?php

require 'header-1.php';

use classes\Call\Call as call;

$call = new call();

if (isset($_POST['submit'])) {
	if(!$call->saveData()){
		$call->postData();
	}
}

?>





<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Contact us</h3>
	</div>
	<div class="panel-body">
	  	<form class="form-validate form-horizontal" method="post">

			<div class="form-group">
			  <label class="col-sm-2 control-label">Name<span class="required">*</span></label>
			  <div class="col-sm-10">
			      <input type="text" name="name" minlength="3" class="form-control" placeholder="Your Name" required>
			  </div>
			</div>

			<div class="form-group">
			  <label class="col-sm-2 control-label">Email<span class="required">*</span></label>
			  <div class="col-sm-10">
			      <input type="text" name="email" minlength="5" class="form-control" placeholder="Your Email" required>
			  </div>
			</div>

			<div class="form-group">
			  <label class="col-sm-2 control-label">Phone<span class="required">*</span></label>
			  <div class="col-sm-10">
			      <input type="text" name="phone" minlength="5" class="form-control" placeholder="Your Phone number" required>
			  </div>
			</div>

			<div class="form-group">
			  <label class="col-sm-2 control-label">Subject<span class="required">*</span></label>
			  <div class="col-sm-10">
			      <input type="text" name="subject" minlength="3" class="form-control" placeholder="The message title" required>
			  </div>
			</div>

			<div class="form-group">
			  <label class="control-label col-sm-2">Your Message</label>
			  <div class="col-sm-10">
			      <textarea class="form-control ckeditor" name="desc" rows="6"></textarea>
			  </div>
			</div>

			<div class="form-group">
			  <div class="col-lg-offset-2 col-lg-10">
			      <button class="btn btn-primary" name="submit" type="submit">Save</button>
			  </div>
			</div>

	   	</form>
	</div>
</div>






<?php
require 'footer.php';
?>