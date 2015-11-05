<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Hackaton</title>
<meta name='viewport'
	content='initial-scale=1,maximum-scale=1,user-scalable=no' />
<link
	href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
	rel="stylesheet">

<link href="<?php echo base_url(); ?>public/css/app.css" rel="stylesheet" />
</head>
<body>

	<!-- Static navbar -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#navbar" aria-expanded="false"
					aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Hackaton</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#"><span
							class="glyphicon glyphicon-modal-window"></span>Menu 1</a></li>
					<li class="active"><a href="#"><span
							class="glyphicon glyphicon-modal-window"></span>Menu 2</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="../navbar-static-top/"><span
							class="glyphicon glyphicon-search"></span>Search</a></li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
		<!--/.container-fluid -->
	</nav>

	<!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="jumbotron itini-description">
		<div class="container">
			<h1>The best idea</h1>
			<p>A short description of the idea - <?php echo $message['message']?></p>
		</div>
	</div>
		
	<div class="container ">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-6">
				<div class="panel panel-primary">
			      <!-- Default panel contents -->
			      <div class="panel-heading">panel title</div>
				  <p>panel content</p>
			    </div>
		    </div>
		</div>

		<hr>

		<footer>
			<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
		</footer>

	</div>
	<!-- /container -->

	<script src='https://code.jquery.com/jquery-git2.min.js'></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>public/js/app.js"></script>
	
</body>
</html>