<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
		<?php
	include_once("functionconnection.php");
	if(!isset($_SESSION['key1'])){
		header("location:sign in.php");
		
	}
	
	if(!isset($_SESSION['key2'])){
		header("location:sign in.php");
		
	}
	if(isset($_POST['email'])){
		$email=$_POST['email'];
		$currentpassword=$_POST['password'];
		$newpassword=$_POST['newpassword'];
		$cnewpassword=$_POST['cnewpassword'];
		mysqli_query( $mysqli,"UPDATE users SET password='$newpassword' WHERE email='$email'") or die(mysqli_error()); 
		$_SESSION['passchange']='';
		echo "change successfully";
		header("location:index.php");
	}
	
	?>
</head>

<body>
	<form action="" method="post" name="chnageform">
	<lable>email address</lable>
	<input type="email" name="email">
	<label> current password</label>
	<input type="password" name="password">
	<label>new password</label>
	<input type="password" name="newpassword">
	<lable>cnew password</lable>
		<input type="password" name="cnewpassword">
		<input type="submit" value="enter">
		</form>
</body>
</html>