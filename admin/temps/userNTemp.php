<section class="wrapper">

	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-file-text-o"></i>The User</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
				<li><i class="icon-envelope-l"></i><a href="users.php">Users</a></li>
				<li><i class="icon-envelope-l"></i>User</li>
			</ol>
		</div>
	</div>

	<section class="panel">
		<header class="panel-heading">
		  <h3>The user: <?=$user->data['name']?></h3>
		</header>

		<div class="panel-body">
		  	<form class="form-validate form-horizontal" method="post">

				<div class="form-group">
				  <label class="col-sm-2 control-label">Name<span class="required">*</span></label>
				  <div class="col-sm-10">
				      <input type="text" name="name" minlength="5" class="form-control" value="<?php echo $user->data['name']; ?>" placeholder="Name" required>
				  </div>
				</div>

				<div class="form-group">
				  <label class="col-sm-2 control-label">Change Password</label>
				  <div class="col-sm-10">
				      <input type="text" name="pass" minlength="3" class="form-control" placeholder="Put the new Password">
				      <input type="text" name="rpass" minlength="3" class="form-control" placeholder="Repet the Password">
				  </div>
				</div>

				<div class="form-group">
				  <label class="col-sm-2 control-label">Email</label>
				  <div class="col-sm-10">
				      <input type="text" name="email" minlength="3" class="form-control" value="<?php echo $user->data['email']; ?>" placeholder="Email">
				  </div>
				</div>

				<div class="form-group">
				  <label class="col-sm-2 control-label">Phone</label>
				  <div class="col-sm-10">
				      <input type="text" name="phone" minlength="5" class="form-control" value="<?php echo $user->data['phone']; ?>" placeholder="Phone">
				  </div>
				</div>

				<div class="form-group">
				  <label class="col-sm-2 control-label">Country<span class="required">*</span></label>
				  <div class="col-sm-10">
				      <input type="text" name="country" minlength="3" class="form-control" value="<?php echo $user->data['country']; ?>" placeholder="country">
				  </div>
				</div>

				<div class="form-group">
				  <label class="col-sm-2 control-label">City<span class="required">*</span></label>
				  <div class="col-sm-10">
				      <input type="text" name="city" minlength="3" class="form-control" value="<?php echo $user->data['city']; ?>" placeholder="city">
				  </div>
				</div>

				<div class="form-group">
				  <label class="col-sm-2 control-label">Level<span class="required">*</span></label>
				  <div class="col-sm-10">
				      <input id="admin" type="checkbox" value="7" name="lvl" <?=$user->data['lvl']?'checked':''?>> 
				      <label for="admin">Admin</label>
				  </div>
				</div>

				<div class="form-group">
				  <div class="col-lg-offset-2 col-lg-10">
				      <button class="btn btn-primary" name="new" type="submit">Save</button>
				  </div>
				</div>

		   	</form>
		</div>

	</section>

</section>