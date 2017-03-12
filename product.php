<?php

require 'header-1.php';

use classes\Product\Product as product;

$product = new product();

$product->getData();
?>

<?php
if ( isset($_GET['view']) && is_numeric($_GET['view']) ) {

	$product->getOneData((int)($_GET['view']));
?>

<div class="panel panel-default">
	<div class="panel-heading">
		<h1 class="panel-title"><?=$product->data['name']?></h1>
	</div>
	<div class="panel-body">

		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Product Image</h3>
		  </div>
		  <div class="panel-body">
		    <img class="img-responsive" src="<?=$product->data['img']?>" />
		  </div>
		</div>

		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Product Description</h3>
		  </div>
		  <div class="panel-body">
		    <?=$product->data['desc']?>
		  </div>
		</div>

		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Product Category</h3>
		  </div>
		  <div class="panel-body">
		    <?=$product->getCatName($product->data['cat_id'])->name?>
		  </div>
		</div>

		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Product Statu</h3>
		  </div>
		  <div class="panel-body">
		    <?=$product->data['statu']?>
		  </div>
		</div>

		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Product Price</h3>
		  </div>
		  <div class="panel-body">
		    <?=$product->data['price']?>
		  </div>
		</div>

		<div>
			<a href="order.php?id=<?=$product->data['id']?>&name=<?=$product->data['name']?>" class="btn btn-primary">Order this Product</a>
		</div>

	</div>
</div>

<?php
} else {
	echo "<script>window.location='index.php';</script>";
	die('Try another tirck :D');
}

require 'footer.php';
?>