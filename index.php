<?php
session_start();
if (!isset($_SESSION['database'])) {
	header("location:settings.php");
}
?>

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
					<ul class="nav navbar-nav navbar-right">
					</ul>
					<form  method="post" role = "form" action="logout.php" class="nav navbar-nav navbar-right">
                    <button id="logout"  type="submit" name="Submit" class="btn btn-sm">Log out</button>
                	</form>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="modal-backdrop fade in" id="spinner" style="display:none">
				<div class="alert alert-warning" style="position:absolute;left:40%;top:25%;width:400px"><img src="./img/select2-spinner.gif" /> Please wait...
				</div>
			</div>
		</div>

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
