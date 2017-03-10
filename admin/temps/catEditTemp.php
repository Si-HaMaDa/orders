<section class="wrapper">

	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-file-text-o"></i>The Category</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
				<li><i class="icon-envelope-l"></i><a href="cats.php">Categories</a></li>
				<li><i class="icon-envelope-l"></i>Category</li>
			</ol>
		</div>
	</div>

	<section class="panel">
		<header class="panel-heading">
		  <h3>The cat: <?=$cat->data['name']?></h3>
		</header>

		<div class="panel-body">
		  	<form class="form-validate form-horizontal" method="post">

				<div class="form-group">
				  <label class="col-sm-2 control-label">Name<span class="required">*</span></label>
				  <div class="col-sm-10">
				      <input type="text" name="name" minlength="5" class="form-control" value="<?=$cat->data['name']?>" placeholder="Name" required>
				  </div>
				</div>

				<div class="form-group">
				  <label class="col-sm-2 control-label">Image</label>
				  <div class="col-sm-10">
				      <input type="text" name="img" minlength="3" class="form-control" value="<?=$cat->data['img']?>" placeholder="Image">
				  </div>
				</div>

				<div class="form-group">
				  <label class="col-sm-2 control-label">Description</label>
				  <div class="col-sm-10">
				      <textarea class="form-control ckeditor" name="desc" rows="6"><?=$cat->data['desc']?></textarea>
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