<section class="wrapper">

	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-file-text-o"></i>The messages</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
				<li><i class="icon-envelope-l"></i>Messages</li>
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
	         <th><i class="icon_profile"></i> Info</th>
	         <th><i class="icon_calendar"></i> Date</th>
	         <th><i class="icon_pin_alt"></i> City</th>
	         <th><i class="icon_mobile"></i> subject</th>
	         <th><i class="icon_mobile"></i> the message</th>
	         <th><i class="icon_cogs"></i> Action</th>
	      </tr>

<?php
foreach ($call->data as $key => $value) {
?>

	      <tr>
	         <td><?=$value['name']?><br><?=$value['phone']?><br><?=$value['email']?></td>
	         <td><?=explode(" ", $value['created_at'])[0]?><br><?=explode(" ", $value['created_at'])[1]?></td>
	         <td><?=$value['city']?></td>
	         <td><?=$value['subject']?></td>
	         <td><?=substr($value['desc'], 0, 50).'...'?></td>
	         <td>
	          <div class="btn-group">
	              <a class="btn btn-primary" href="?view=<?=$value['id']?>"><i class="icon_document"></i></a>
	              <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
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