<!DOCTYPE html>
<html lang="en">
<head>
<title>Table</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<?php
$servername = "localhost";
$serverUserName = "root";
$password = '';
$dbname = "galgoppo";

$con = mysqli_connect($servername, $serverUserName, $password, $dbname);

$sql = "SELECT * FROM user_info";

$query = mysqli_query($con,$sql);

$count = mysqli_num_rows($query);

if ($count > 0) {
?>

<table class='table border'>
	<thead class="thead-dark">
		<tr>
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Usarname</th>
			<th>Email</th>
			<th>Action</th>
		</tr>
	</thead>


<?php
	while ($row = mysqli_fetch_assoc($query)) {
		
		$id = $row['id'];
		$fname = $row['fname'];
		$lname = $row['lname'];
		$username = $row['username'];
		$email = $row['email'];
?>

	<tbody>
		<tr>
			<td><?php echo $id; ?></td>
			<td><?php echo $fname; ?></td>
			<td><?php echo $lname; ?></td>
			<td><?php echo $username; ?></td>
			<td><?php echo $email; ?></td>
			<td><a href="edit-data.php?id=<?php echo $id?>&&firstname=<?php echo $fname ?>&&lastname=<?php echo $lname ?>&&username=<?php echo $username ?>&&email=<?php echo $email ?>">Edit</a> || <a href="delete.php?id=<?php echo $id; ?>">Delete</a></td>
		</tr>
	</tbody>


<?php		
	}
?>

</table>

<?php
}else {
	echo "<h1 color = 'red'>You Have No Data</h1>";
}

?>