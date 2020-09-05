<?php


$fname = $_REQUEST['firstname'];

$lname = $_REQUEST['lastname'];

$email = $_REQUEST['email'];

$username = $_REQUEST['username'];

$id = $_REQUEST['id'];

?>



<html>
<head>
	<title>Edit</title>
	<style>
	* {
		font-family: arial;
		bankground-color: ;
	}
	input{
		width: 100%;
		height: 8vh;
		margin: 1rem 0;
		padding: 1.5rem 1rem;
		border-radius: 5px;
		border: 1px solid #ccc;
	}
	input[type=submit]:hover {
		background-color: #45a049;
	}
	input[type=submit] {
		background-color: #4CAF50;
		color: white;
		border-radius: 4px;
	}
	</style>
</head>


<body>
	<form action="update.php?id=<?php echo $id?>" method="post">
		<label for="fname">First Name</label>
		<input type="text" id="fname" name="firstname" value=<?php echo $fname ?>>

		<label for="fname">Last Name</label>
		<input type="text" id="lname" name="lastname" value=<?php echo $lname ?>>

		<label for="email">E-Mail</label>
		<input type="text" name="email" value=<?php echo $email ?>>

		<label for="username">Username</label>
		<input type="text" id="usarname" name="username" value=<?php echo $username ?>>

		<!--<label for="password">Password</label>
		<input type="password" name="pass" value=<?php// echo $password ?>>-->

		<input type="submit" value="Submit">
	</form>
</body>
</html>