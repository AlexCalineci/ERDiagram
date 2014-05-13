<?php

  $mysql_db_hostname = $_POST['hostname'];
  
  if(!isset($_POST['port'])){
  	$mysql_db_port = 3306;
  }else{
  	$mysql_db_port = $_POST['port'];
  }
  $mysql_db_user =  $_POST['dbuser'];
  $mysql_db_password = $_POST['dbpassword'];  
  $mysql_db_database = '';
  
  $mysqli_conection = new mysqli($mysql_db_hostname, $mysql_db_user, $mysql_db_password, $mysql_db_database,$mysql_db_port);
    if ($mysqli_conection->connect_errno) {
    	echo "Failed to connect to MySQL: (" . $mysqli_conection->connect_errno . ") " . $mysqli_conection->connect_error;
    }
?>