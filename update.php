<?php

$fname = $_REQUEST['firstname'];

$lname = $_REQUEST['lastname'];

$email = $_REQUEST['email'];

$username = $_REQUEST['username'];

$id = $_REQUEST['id'];

$servername = "localhost";
$serverUserName = "root";
$password = '';
$dbname = "galgoppo";

$con = mysqli_connect($servername, $serverUserName, $password, $dbname);

if (!$con) {
	die("Databese Not Found".mysqli_error($con));
}

$sql = "UPDATE user_info SET fname = $fname, lname = $lname, username = $username, email = $email WHERE id = $id";

if(!$sql) {
	die("Opration failed: ".mysqli_error($sql));
}

$query = mysqli_query($con,$sql);

if(!$query) {
	die("Query failed".mysqli_error($query));
}else{
	header ("location: table.php");
}

?>