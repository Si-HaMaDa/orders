<section class="wrapper">

	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-file-text-o"></i>The Products</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
				<li><i class="icon-envelope-l"></i><a href="products.php">Products</a></li>
				<li><i class="icon-envelope-l"></i>Product</li>
			</ol>
		</div>
	</div>

	<section class="">
		<header class="panel panel-heading">
		  <h3><?=$product->data['name']?></h3>
		  <time>AT: <?=explode(" ", $product->data['created_at'])[0]?> | <?=explode(" ", $product->data['created_at'])[1]?></time><br>
		  <!-- <i>Category: <?=$product->data['cat_id']?></i> -->
		</header>

		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Category</h3>
		  </div>
		  <div class="panel-body">
		    <?=$product->getCatName($product->data['cat_id'])->name?>
		  </div>
		</div>

		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Price</h3>
		  </div>
		  <div class="panel-body">
		    <?=$product->data['price']?>
		  </div>
		</div>

		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Statu</h3>
		  </div>
		  <div class="panel-body">
		    <?=$product->data['statu']?>
		  </div>
		</div>

		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Image</h3>
		  </div>
		  <div class="panel-body">
		    <img src="<?=$product->data['img']?>" width="500">
		  </div>
		</div>

		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Description</h3>
		  </div>
		  <div class="panel-body">
		    <?=$product->data['desc']?>
		  </div>
		</div>

	</section>

</section>