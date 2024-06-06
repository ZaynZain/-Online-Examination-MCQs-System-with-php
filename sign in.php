<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<?php
	include_once("functionconnection.php");
	if(isset($_POST['email'])&&isset($_POST['password']))
	{
		$email=$_POST['email'];
		$password=$_POST['password'];
		
		$sql= "SELECT * FROM users WHERE email='$email' AND password='$password'";
		$query= mysqli_query($mysqli, $sql);
		$num_rows = mysqli_num_rows($query);
		if($num_rows>=1){
			$_SESSION['key2']='';
			$_SESSION['key1']='';
			header("location:index.php");
		}
		else{
			echo "not exsit";
			$_SESSION['dontexist']='';
			
		}
	}
	if(isset($_POST['name']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$conformpassword=$_POST['conformpassword'];
		$sql= "SELECT * FROM users WHERE name='$email'"; 
		$query= mysqli_query($mysqli, $sql);
		$num_rows = mysqli_num_rows($query);
			if($num_rows>=1){
			$_SESSION['user_exist']='';	
		}
		else{
			$sql="INSERT INTO users VALUES (NULL,'$name','$email','$password','$conformpassword')";
			
			mysqli_query($mysqli, $sql);
			$_SESSION['key1']='';
			$_SESSION['key2']='';
			
			header("location:index.php");
		}
		
	}
	
	?>
	<script>
	function abc(){
		var name= document.forms["form"]["name"].value;
		if(name==""){
			alert("enter the name");
			return false;
		}
		var email= document.forms["form"]["email"].value;
		if(email==""){
			alert("enter the email");
			return false;
		}
		var password= document.forms["form"]["password"].value;
		if(password==""){
			alert("enter the password");
			return false;
		}
		var conformpassword= document.forms["form"]["conformpassword"].value;
		if(conformpassword==""){
			alert("conform password");
			return false;
		}
		if(password!=conformpassword){
			alert("password not match");
		}
	}
	</script>
	<style>
		#maindiv{
			
			background-color:whitesmoke;
			box-shadow: 1px 5px 5px 1px  gray;
		}
	
	
	</style>
</head>

<body>
	
	<br>
	<br>
	<br>
	<br>
	<br>
	
	
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<style>
		#maindiv {
			max-width: 400px;
			margin: 0 auto;
			padding: 20px;
		}

		.form-group label {
			font-weight: bold;
		}

		.form-group input {
			width: 100%;
			padding: 8px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}

		.form-group input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<p align="center">Create your account to get full access</p>
	<div id="maindiv">
		<h1 align="center">SIGN IN</h1>
		<form name="form" action="" method="post">
			<div class="form-group">
				<label for="name">Name</label>
				<input name="name" id="name" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input name="email" id="email" type="email" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input name="password" id="password" type="password" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="conformpassword">Confirm Password</label>
				<input name="conformpassword" id="conformpassword" type="password" class="form-control" required>
			</div>
			<input type="submit" value="Submit" onClick="return(abc())" class="btn btn-primary">
		</form>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	
	</form>
</div>
<br>
<br>
<br>
<p align="center">If you are already memeber login</p>
<div id="maindiv">
	<h1 align="center">LOGIN</h1>
	<form action="" method="post" name="loginform">
		<div class="form-group">
	    <label>email </label>
		<input type="email" name="email"  class="form-control">
		</div>
		<div class="form-group">
		<label>password</label>
		<input type="password" name="password"  class="form-control">
		</div>
		<button><a href="changepassword.php"> change password</a></button>
		<input type="submit" value="LOGIN"  class="btn btn-primary">
	</form>
	</div>
</body>
</html>