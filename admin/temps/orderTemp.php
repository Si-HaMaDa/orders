<section class="wrapper">

	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-file-text-o"></i>The Orders</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
				<li><i class="icon-envelope-l"></i><a href="orders.php">Orders</a></li>
				<li><i class="icon-envelope-l"></i>Order</li>
			</ol>
		</div>
	</div>

	<section class="">
		<header class="panel panel-heading">
		  <h3>Order id: <?=$order->data['id']?></h3>
		  <time>AT: <?=explode(" ", $order->data['created_at'])[0]?> | <?=explode(" ", $order->data['created_at'])[1]?></time><br>
		</header>

		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Product</h3>
		  </div>
		  <div class="panel-body">
			  id: <?=$product->id?><br>
			  Name: <?=$product->name?>
		  </div>
		</div>

		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">User</h3>
		  </div>
		  <div class="panel-body">
		  	id: <?=$user->id?><br>
		    Name: <?=$user->name?><br>
		    Phone: <?=$user->phone?><br>
		    Email: <?=$user->email?><br>
		  </div>
		</div>

		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Details</h3>
		  </div>
		  <div class="panel-body">
		    Number:<?=$order->data['num']?><br><br>
		    Notes:<br><?=$order->data['notes']?><br>
		  </div>
		</div>

	</section>

</section>