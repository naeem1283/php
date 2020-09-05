<title>Delete</title>

<?php
$servername = "localhost";
$serverUserName = "root";
$password = '';
$dbname = "galgoppo";

$con = mysqli_connect($servername, $serverUserName, $password, $dbname);

$rec =  $_REQUEST['id'];

$sql = "DELETE FROM user_info WHERE id = $rec";

$query = mysqli_query($con,$sql);

if ($query){
	header("location: table.php");
}else {
	echo 'Data not deleted';
}


?>