<?php
  if (!isset($_SESSION)){
  	session_start();
  }
if($_POST['database']=='Mysql'){
	require ("php/mysql_conn.php");
	
}

ob_start();
$db = $mysqli_conection;
// Define $myusername and $mypassword
$username= $_POST['username'];
$password = $_POST['password'];
$hostname = $_POST['hostname'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysqli_real_escape_string($mysqli_conection, $myusername);
$mypassword = mysqli_real_escape_string($mysqli_conection, $mypassword);
$sql = "SELECT user_id FROM " . $tbl_name . " WHERE username='" . $myusername . "' and password='" . $mypassword . "'";
$result = mysqli_query($mysqli_conection, $sql);
$uid = mysqli_fetch_assoc($result);
$user_id = $uid['user_id'];
$count = mysqli_num_rows($result);

if ($count == 1) {
	$_SESSION["myusername"] = $myusername;
	$_SESSION["mypassword"] = $mypassword;
	$_SESSION["user_id"] = $user_id;
	header("location:index.php");
} else {
	echo "Wrong Username or Password";
}
ob_end_flush();
?>

/644501072/4134/