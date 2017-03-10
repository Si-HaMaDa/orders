<section class="wrapper">

	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-file-text-o"></i>The messages</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
				<li><i class="icon-envelope-l"></i><a href="messages.php">Messages</a></li>
				<li><i class="icon-envelope-l"></i>Message</li>
			</ol>
		</div>
	</div>

	<section class="">
		<header class="panel panel-heading">
		  <h3>Subject: <?=$call->data['subject']?></h3>
		  <time>AT: <?=explode(" ", $call->data['created_at'])[0]?> | <?=explode(" ", $call->data['created_at'])[1]?></time><br>
		  <i>From: <?=$call->data['city']?></i>
		</header>

		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Name</h3>
		  </div>
		  <div class="panel-body">
		    <?=$call->data['name']?>
		  </div>
		</div>

		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Phone</h3>
		  </div>
		  <div class="panel-body">
		    <?=$call->data['phone']?>
		  </div>
		</div>

		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Email</h3>
		  </div>
		  <div class="panel-body">
		    <?=$call->data['email']?>
		  </div>
		</div>

		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">The message</h3>
		  </div>
		  <div class="panel-body">
		    <?=$call->data['desc']?>
		  </div>
		</div>

	</section>

</section>