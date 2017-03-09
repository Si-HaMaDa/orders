<section class="wrapper">

	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-file-text-o"></i>The messages</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
				<li><i class="icon-envelope-l"></i>Users</li>
			</ol>
		</div>
	</div>

	<section class="panel">
		<header class="panel-heading">
		  The messages
		</header>
	  
	  <table class="table table-striped table-advance table-hover">
	   <tbody>
	      <tr>
	         <th><i class="icon_profile"></i> Name</th>
	         <th><i class="icon_profile"></i> Level</th>
	         <th><i class="icon_calendar"></i> Registration Date</th>
	         <th><i class="icon-envelope-l"></i> Email</th>
	         <th><i class="icon_mobile"></i> Phone</th>
	         <th><i class="icon_pin_alt"></i> City</th>
	         <th><i class="icon_cogs"></i> Action</th>
	      </tr>

<?php
foreach ($user->data as $key => $value) {
?>

	      <tr>
	         <td><?=$value['name']?></td>
	         <td><?= empty($value['lvl']) ? 'user' : $value['lvl']?></td>
	         <td><?=explode(" ", $value['created_at'])[0]?><br><?=explode(" ", $value['created_at'])[1]?></td>
	         <td><?=$value['email']?></td>
	         <td>0<?=$value['phone']?></td>
	         <td><?=$value['city']?></td>
	         <td>
	          <div class="btn-group">
	              <a class="btn btn-primary" href="user.php?edit=<?=$value['id']?>"><i class="icon_document"></i></a>
	              <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
	              <a class="btn btn-danger" href="user.php?delete=<?=$value['id']?>"><i class="icon_close_alt2"></i></a>
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