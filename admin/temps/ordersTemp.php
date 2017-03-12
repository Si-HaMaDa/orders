<section class="wrapper">

	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-file-text-o"></i>The orders</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
				<li><i class="icon-envelope-l"></i>orders</li>
			</ol>
		</div>
	</div>

	<section class="panel">
		<header class="panel-heading">
		  The orders
		</header>
	  
	  <table class="table table-striped table-advance table-hover">
	   <tbody>
	      <tr>
	         <th><i class="icon_profile"></i> Product</th>
	         <th><i class="icon_profile"></i> User</th>
	         <th><i class="icon_profile"></i> Order Date</th>
	         <th><i class="icon_calendar"></i> Number</th>
	         <th><i class="icon_pin_alt"></i> Notes</th>
	         <th><i class="icon_cogs"></i> Action</th>
	      </tr>

<?php
foreach ($order->data as $key => $value) {
?>

	      <tr>
	         <td><?=@$product->find($value['product_id'])->name?></td>
	         <td><?=@$user->find($value['user_id'])->name?></td>
	         <td><?=explode(" ", $value['created_at'])[0]?><br><?=explode(" ", $value['created_at'])[1]?></td>
	         <td><?=$value['num']?></td>
	         <td><?=substr($value['notes'], 0, 50).'...'?></td>
	         <td>
	          <div class="btn-group">
	              <a class="btn btn-primary" href="?edit=<?=$value['id']?>"><i class="icon_document"></i></a>
	              <a class="btn btn-success" href="?view=<?=$value['id']?>"><i class="icon_check_alt2"></i></a>
	              <a class="btn btn-danger" href="?delete=<?=$value['id']?>"><i class="icon_close_alt2"></i></a>
	          </div>
	         </td>
	      </tr>

<?php
}
?>

	   </tbody>
	  </table>
	</section>

</section>