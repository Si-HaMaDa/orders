<?php
include "header.php";

include "side.php";

use classes\Info\Info as info;

$info = new info();


if (isset($_POST['submit'])) {
	if(!$info->saveData()){
		$info->postData();
	}
} else {
	$info->getData();
}

?>

<section class="wrapper">


	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-file-text-o"></i> Site Information</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
				<li><i class="icon_document_alt"></i>Information</li>
			</ol>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<section class="panel">
				<header class="panel-heading">
				 Site Information
				</header>
				<div class="panel-body">
				  	<form class="form-validate form-horizontal" method="post">

						<div class="form-group">
						  <label class="col-sm-2 control-label">Company Name<span class="required">*</span></label>
						  <div class="col-sm-10">
						      <input type="text" name="name" minlength="5" class="form-control" value="<?php echo $info->data['name']; ?>" placeholder="Companey Name" required>
						  </div>
						</div>

						<div class="form-group">
						  <label class="col-sm-2 control-label">Company Headquarter</label>
						  <div class="col-sm-10">
						      <input type="text" name="head" minlength="5" class="form-control" value="<?php echo $info->data['head']; ?>" placeholder="Company Headquarter">
						  </div>
						</div>

						<div class="form-group">
						  <label class="col-sm-2 control-label">Company Phones</label>
						  <div class="col-sm-10">
						      <input type="text" name="phones" minlength="5" class="form-control" value="<?php echo $info->data['phones']; ?>" placeholder="Company Phones">
						  </div>
						</div>

						<div class="form-group">
						  <label class="col-sm-2 control-label">Company Work Times<span class="required">*</span></label>
						  <div class="col-sm-10">
						      <input type="text" name="worktime" minlength="5" class="form-control" value="<?php echo $info->data['worktime']; ?>" placeholder="Company Work Times">
						  </div>
						</div>

						<div class="form-group">
						  <label class="control-label col-sm-2">Site Description</label>
						  <div class="col-sm-10">
						      <textarea class="form-control ckeditor" name="desc" rows="6"><?php echo $info->data['desc']; ?></textarea>
						  </div>
						</div>

						<div class="form-group">
						  <div class="col-lg-offset-2 col-lg-10">
						      <button class="btn btn-primary" name="submit" type="submit">Save</button>
						  </div>
						</div>

				   	</form>
				</div>
            </section>

</section>







<?php

include "footer.php";

?>