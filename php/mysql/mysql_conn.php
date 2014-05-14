<?php

  if(isset($_POST['hostname'])){
  	 $mysql_db_hostname = $_POST['hostname'];
  }else{
  	 $mysql_db_hostname = $_SESSION['hostname'];
  }
 
   if(isset($_POST['port'])){
  	 $mysql_db_port = $_POST['port'];
  }else{
  	 $mysql_db_port = $_SESSION['port'];
  }
  
   if(isset($_POST['dbuser'])){
  	 $mysql_db_user = $_POST['dbuser'];
  }else{
  	 $mysql_db_user = $_SESSION['dbuser'];
  }

  
  if(isset($_POST['dbpassword'])){
  	 $mysql_db_password = $_POST['dbpassword'];
  }else{
  	 $mysql_db_password = $_SESSION['dbpassword'];
  }

  $mysql_db_database = '';
  
  $mysqli_conection = new mysqli($mysql_db_hostname, $mysql_db_user, $mysql_db_password, $mysql_db_database,$mysql_db_port);
    if ($mysqli_conection->connect_errno) {
    	echo "Failed to connect to MySQL: (" . $mysqli_conection->connect_errno . ") " . $mysqli_conection->connect_error;
    }
?>