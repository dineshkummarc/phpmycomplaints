<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "cms";
$bd = ($GLOBALS["___mysqli_ston"] = mysqli_connect($mysql_hostname,  $mysql_user,  $mysql_password)) or die("Could not connect database");
mysqli_select_db( $bd, $mysql_database) or die("Could not select database");

?>