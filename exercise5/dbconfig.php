<?php
$host = "localhost";
$user = "root";
$password = "";
$datbase = "MyHomePageSql";
$con = mysqli_connect($host,$user,$password);
mysqli_select_db($con, $datbase);
?>