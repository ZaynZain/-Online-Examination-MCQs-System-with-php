<!doctype html>
<html>
<head>
<?php
	include_once("functionconnection.php");
	if(!isset($_SESSION['key1'])){
		header("location:sign in.php");
		
	}
	
	if(!isset($_SESSION['key2'])){
		header("location:sign in.php");
		
	}
	
	?>

<meta charset="utf-8">
	<!-- Bootstrap -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<!--	Bootstrap CSS file -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	
	
<title>Untitled Document</title>
	<script>
	function abc(){
		rollno=document.forms["xyz"]["rollno"].value
		if(rollno==""){
			alert ("Roll No Must Be Given");
			return false
		}
		name=document.forms["xyz"]["stname"].value
		if(name==""){
			alert("Name Must Be Given");
			return false
		}
		file=document.forms["xyz"]["upload"].value
		if(file==""){
			alert("Photo Must Be Uploaded");
			return false;
		}
		course=document.forms["xyz"]["course"].value
		if(course=="it"){
			document.getElementById("abc").action="it.php";
			
		}
		if(course=="graphics"){
			document.getElementById("abc").action="graphics.php";
			
		}
	}
	
	</script>
	
	<style>
		body {
			background-color: #f7f7f7;
			font-family: Arial, sans-serif;
			font-size: 16px;
		}
		 #navbarNav{
		   margin-left: 50%;
		   
	   }
	   #nav{
		   height: 90px;
		   background-color:  #007bff;
	   }
	  
	  
		h1 {
			margin-top: 30px;
			margin-bottom: 30px;
			text-align: center;
			font-weight: bold;
			color: #343a40;
		}
		table {
			background-color: #fff;
			border-collapse: collapse;
			box-shadow: 0 0 4px #ccc;
			margin: 0 auto;
			padding: 20px;
		}
		table td {
			padding: 10px;
			vertical-align: middle;
		}
		table select {
			display: block;
			padding: 5px;
			width: 95%;
		}
		table input[type="text"], table input[type="file"] {
			display: block;
			padding: 5px;
			width: 90%;
		}
		table input[type="submit"] {
			background-color: #007bff;
			border: none;
			color: #fff;
			cursor: pointer;
			font-size: 16px;
			font-weight: bold;
			margin-top: 20px;
			padding: 10px 20px;
			text-align: center;
			transition: all .2s ease-in-out;
			width: 100%;
		}
		table input[type="submit"]:hover {
			background-color: #0069d9;
		}
		hr {
			border-top: 1px solid #ccc;
			margin: 30px auto;
			width: 80%;
		}
		.alert {
			margin-bottom: 30px;
			text-align: center;
			font-weight: bold;
		}
		.alert-danger {
			background-color: #f8d7da;
			border: 1px solid #f5c6cb;
			color: #721c24;
			padding: 10px 20px;
		}
		.alert-danger a {
			color: #721c24;
			font-weight: bold;
			text-decoration: underline;
		}
		
		
	footer {
  padding: 50px 0;
}

footer h3 {
  color: #fff;
  font-size: 18px;
  margin-bottom: 20px;
}

footer p {
  color: #fff;
}

footer ul li {
  margin-bottom: 10px;
}

footer ul li a {
  color: #fff;
}

	
	</style>

</head>

<body>
	
	 <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid" id="nav" >
        <a class="navbar-brand" href="#"><img src="photos/logo.png" width="50" height="50"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
			   <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	
	
	
	
	<h1 align="center">ONLINE EXAMINATION SYSTEM</h1>
	<form name="xyz" method="post" enctype="multipart/form-data" id="abc" action="it.php">
	<table>
		<tr> 
			<td>ROLL NO</td>
		    <td><input type="text" name="rollno"></td>
             <td>STUDENT NAME</td>
		    <td><input type="text" name="stname"></td>
		</tr>
		
		<tr> 
			<td>SELECT COURSE</td>
		    <td>
		<select name="course">
			<option value="it">IT</option>
			<option value="graphics">Graphics</option>
			<option value="css">CSS</option>
		</select>	
			</td>
			<td>SELECT TIMING</td>
           	   <td>
		<select name="timing">
			<option value="8to10am">08:00 TO 10:00 AM</option>
			<option value="9to11am">09:00 TO 10:00 AM</option>
		</select>	
			</td>
		</tr>
		
		<tr> 
			<td>UPLOAD PHOTO</td>
		    <td><input type="file" name="upload"></td>
             <td colspan="2">
				 <input type="submit" value="START PAPER" onClick= "return(abc())">
			</td>
		   
		</tr>
		
			
		
	</table>
	
	</form>
	<h1 align="center"><font color="red">FILL THE CORRECT INFORMATION IN ALL FILDS</font></h1>
	<hr>
	<table  align="center" width="310px" height="0px" bgcolor="red" style="box-shadow: 4px 4px 4px black">
		
	<form action="resultitold.php" method="post">
		<tr><td colspan="2" align="center">GET PREVIOUS IT RESULT</td></tr>
		<tr>
			<td align="center">ROLL NO</td>
			<td><input name="rollnoit"></td>
		</tr>
		<tr><td colspan="2" align="center"><input type="submit" value="GET RESULT"></td></tr>
				
		</form>
	
	</table>
	
	<br>
	<table align="center" width="310px" height="0px" bgcolor="red" style="box-shadow: 4px 4px 4px black">
		
	<form action="resultgraphicsold.php" method="post">
		<tr><td colspan="2" align="center">GET PREVIOUS GRAPHICS RESULT</td></tr>
		<tr>
			<td align="center">ROLL NO</td>
			<td ><input name="rollnographics"></td>
		</tr>
		<tr><td colspan="2" align="center"><input type="submit" value="GET RESULT"></td></tr>
				
		</form>
	
	</table>
	
	
	
	<footer class="bg-dark text-white">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h3>About Us</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel felis nunc.</p>
      </div>
      <div class="col-md-4">
        <h3>Latest Posts</h3>
        <ul class="list-unstyled">
          <li><a href="#">Post Title Here</a></li>
          <li><a href="#">Post Title Here</a></li>
          <li><a href="#">Post Title Here</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h3>Contact Us</h3>
        <p>123 Main St, New York, NY 10001</p>
        <p>Phone: (123) 456-7890</p>
        <p>Email: info@example.com</p>
      </div>
    </div>
  </div>
</footer>

	
	

	
	
</body>
</html>