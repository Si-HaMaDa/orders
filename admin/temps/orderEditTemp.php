<section class="wrapper">

	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-file-text-o"></i>The Order</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
				<li><i class="icon-envelope-l"></i><a href="orders.php">Orders</a></li>
				<li><i class="icon-envelope-l"></i>Order</li>
			</ol>
		</div>
	</div>

	<section class="panel">
		<header class="panel-heading">
		  <h3>The order: <?=$order->data['id']?></h3>
		</header>

		<div class="panel-body">
		  	<form class="form-validate form-horizontal" method="post">

				<div class="form-group">
				  <label class="col-sm-2 control-label">User id<span class="required">*</span></label>
				  <div class="col-sm-10">
				      <input type="text" name="user_id" minlength="1" class="form-control" value="<?=$order->data['user_id']?>" placeholder="Name" required>
				  </div>
				</div>

				<div class="form-group">
				  <label class="col-sm-2 control-label">Product id</label>
				  <div class="col-sm-10">
				      <input type="text" name="product_id" minlength="1" class="form-control" value="<?=$order->data['product_id']?>" placeholder="Image">
				  </div>
				</div>

				<div class="form-group">
				  <label class="col-sm-2 control-label">Number</label>
				  <div class="col-sm-10">
				      <input type="text" name="num" minlength="1" class="form-control" value="<?=$order->data['num']?>" placeholder="Price">
				  </div>
				</div>

				<div class="form-group">
				  <label class="col-sm-2 control-label">Notes</label>
				  <div class="col-sm-10">
				      <textarea class="form-control ckeditor" name="notes" rows="6"><?=$order->data['notes']?></textarea>
				  </div>
				</div>

				<div class="form-group">
				  <div class="col-lg-offset-2 col-lg-10">
				      <button class="btn btn-primary" name="edit" type="submit">Save</button>
				  </div>
				</div>

		   	</form>
		</div>

	</section>

</section>