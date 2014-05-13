<?php
  $mysql_db_hostname =  $_POST['hostname'];
  $mysql_db_port =  $_POST['port'];
  $mysql_db_user =  $_POST['username'];
  $mysql_db_password = $_POST['password'];  
  $mysqli_conection = new mysqli($mysql_db_hostname, $mysql_db_user, $mysql_db_password, $mysql_db_database);
    if ($mysqli_conection->connect_errno) {
    	echo "Failed to connect to MySQL: (" . $mysqli_conection->connect_errno . ") " . $mysqli_conection->connect_error;
    }
?>