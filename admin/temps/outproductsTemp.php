<section class="wrapper">

	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-file-text-o"></i>Out Products</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
				<li><i class="icon-envelope-l"></i>Out Products</li>
			</ol>
		</div>
	</div>

	<section class="panel">
		<header class="panel-heading">
		  Out Products
		</header>
	  
	  <table class="table table-striped table-advance table-hover">
	   <tbody>
	      <tr>
	         <th><i class="icon_profile"></i> Name</th>
	         <th><i class="icon_profile"></i> Price</th>
	         <th><i class="icon_calendar"></i> Registration Date</th>
	         <th><i class="icon-envelope-l"></i> Category</th>
	         <th><i class="icon_mobile"></i> Description</th>
	         <th><i class="icon_pin_alt"></i> Image</th>
	         <th><i class="icon_cogs"></i> Action</th>
	      </tr>

<?php
foreach ($outproduct->data as $key => $value) {
?>

	      <tr>
	         <td><?=$value['name']?></td>
	         <td><?=$value['price']?></td>
	         <td><?=explode(" ", $value['created_at'])[0]?><br><?=explode(" ", $value['created_at'])[1]?></td>
	         <td><?=$outproduct->getCatName($value['cat_id'])->name?></td>
	         <td><?=$value['desc']?></td>
	         <td><img width="250" src="<?=$value['img']?>"></td>
	         <td>
	          <div class="btn-group">
	              <a class="btn btn-primary" href="outproduct.php?edit=<?=$value['id']?>"><i class="icon_document"></i></a>
	              <a class="btn btn-success" href="outproduct.php?view=<?=$value['id']?>"><i class="icon_check_alt2"></i></a>
	              <a class="btn btn-danger" href="outproduct.php?delete=<?=$value['id']?>"><i class="icon_close_alt2"></i></a>
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