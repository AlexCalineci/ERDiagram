<?php
if (!isset($_SESSION)) {
	session_start();
}
if ($_POST['database'] == 'Mysql') {
	require ("php/mysql_conn.php");

	ob_start();
	$db = $mysqli_conection;
	// Define $myusername and $mypassword
	$username = $_POST['dbuser'];
	$password = $_POST['dbpassword'];
	$hostname = $_POST['hostname'];
	$port = $_POST['port'];

	// To protect MySQL injection (more detail about MySQL injection)
	$username = stripslashes($username);
	$hostname = stripslashes($username);
	$username = mysqli_real_escape_string($mysqli_conection, $username);
	$password = mysqli_real_escape_string($mysqli_conection, $password);

	$sql = "show databases";
	$result = mysqli_query($mysqli_conection, $sql);
	$count = mysqli_num_rows($result);
	
	if ($count == 1) {
		$_SESSION["username"] = $username;
		$_SESSION["password"] = $password;
		$_SESSION["database"] = $_POST['database'];
		header("location:index.php");
	} else {
		echo "Wrong Username or Password";
	}
	ob_end_flush();
}
?>

