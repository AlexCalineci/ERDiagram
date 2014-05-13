<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
		<title>ERDiagram</title>

		<!-- Bootstrap core CSS -->
		<link href="./lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="./lib/bootstrap/css/bootstrap-select.min.css" rel="stylesheet">
		<!-- Custom styles for this template -->
		<link href="./css/registration_settings.css" rel="stylesheet">
		<!-- Just for debugging purposes. Don't actually copy this line! -->
		<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

	<body>
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>

					</button>
					<a class="navbar-brand" href="#">ERDiagram</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right"></ul>

				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<form class="registration" method="post" role = "form" action="databasecheck.php">
					<br>
					<select class="form-control list" name = "database" id="database">
						<option>Mysql</option>
						<option disabled>Oracle</option>
						<option disabled>MSSQL</option>
						<option disabled>Postgresql</option>
						<option disabled>IBM DB2</option>
					</select>
					<br>
					<div class="input-group">
					<div class="row">
						<div class="col-lg-6">
							<input type="text" class="form-control" placeholder="Hostname"  name = "hostname" id="hostname" required>
							</div>
								<div class="col-lg-6">
									<input type="text" class="form-control" placeholder="port"  name = "port" id="port">
								</div>
							</div>
						</div>
						<br>
						<input type="text" class="form-control" placeholder="Username"  name = "dbuser" id="dbuser" required autofocus>
						<br>
						<input type="password" class="form-control" placeholder="Password"  name = "dbpassword" id="dbpassword">
						<br>
						<button class="btn btn-lg btn-primary btn-block" type="submit" name="Connect" value="Connect">
							Connect to
						</button>
				</form>
			</div>
		</div>
		<!-- /container -->
		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="./javascript/jquery.jsPlumb-1.5.5-min.js"></script>
		<script src="./lib/bootstrap/js/bootstrap.min.js"></script>
		<script src="./lib/bootstrap/js/bootstrap-select.min.js"></script>
		<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
		<script src="./javascript/js_utils.js"></script>

	</body>

</html>
