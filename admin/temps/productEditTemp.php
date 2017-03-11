<section class="wrapper">

	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-file-text-o"></i>The Product</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
				<li><i class="icon-envelope-l"></i><a href="products.php">Products</a></li>
				<li><i class="icon-envelope-l"></i>Product</li>
			</ol>
		</div>
	</div>

	<section class="panel">
		<header class="panel-heading">
		  <h3>The Product: <?=$product->data['name']?></h3>
		</header>

		<div class="panel-body">
		  	<form class="form-validate form-horizontal" method="post">

				<div class="form-group">
				  <label class="col-sm-2 control-label">Name<span class="required">*</span></label>
				  <div class="col-sm-10">
				      <input type="text" name="name" minlength="3" class="form-control" value="<?=$product->data['name']?>" placeholder="Name" required>
				  </div>
				</div>

				<div class="form-group">
				  <label class="col-sm-2 control-label">Image</label>
				  <div class="col-sm-10">
				      <input type="text" name="img" minlength="3" class="form-control" value="<?=$product->data['img']?>" placeholder="Image">
				  </div>
				</div>

				<div class="form-group">
				  <label class="col-sm-2 control-label">Price</label>
				  <div class="col-sm-10">
				      <input type="text" name="price" minlength="1" class="form-control" value="<?=$product->data['price']?>" placeholder="Price">
				  </div>
				</div>

				<div class="form-group">
				  <label class="col-sm-2 control-label">Statu<span class="required">*</span></label>
				  <div class="col-sm-10">
				      <input type="text" name="statu" minlength="1" class="form-control" value="<?=$product->data['statu']?>" placeholder="Statu">
				  </div>
				</div>

				<div class="form-group">
				  <label class="col-sm-2 control-label">Description</label>
				  <div class="col-sm-10">
				      <textarea class="form-control ckeditor" name="desc" rows="6"><?=$product->data['desc']?></textarea>
				  </div>
				</div>

				<div class="form-group">
				  <label class="col-sm-2 control-label">Categoery<span class="required">*</span></label>
				  <div class="col-sm-10"> 
				      <div class="btn-row">
                          <div class="btn-group-vertical" data-toggle="buttons">
                          <?php
                          foreach ($product->getCatData() as $value) {
                          	$checked = '';
                          	$checkedd = '';
                          	if ($value["id"] == $product->data['cat_id']) {
                          		$checked = 'active';
                          		$checkedd = 'checked';
                          	}
                          	echo '
                          		<label class="btn btn-default '.$checked.'">
                                  <input name="cat" value="'.$value["id"].'" id="option1" type="radio" '.$checkedd.'>
                                  '.$value["name"].'
                              	</label>
                                  ';
                          }
                          ?>
                          </div>
                      </div>
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