<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<!-- Bootstrap -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	
<!-- Custom CSS -->
<title>Untitled Document</title>
	
		
	<style>
    body {
        background-color: #F7F7F7;
    }
    h1 {
        font-size: 36px;
        margin-top: 30px;
        margin-bottom: 30px;
        text-align: center;
    }
    .card {
        width: 500px;
        margin: 0 auto;
        background-color: #fff;
        border-radius: 4px;
        box-shadow: 0px 2px 4px rgba(0,0,0,0.3);
        padding: 20px;
        margin-bottom: 30px;
    }
    .card img {
        width: 98px;
        height: 98px;
        border-radius: 50%;
    }
    .card table {
        margin-top: 30px;
    }
    .card td {
        padding: 10px;
    }
    .card button {
        margin-top: 30px;
    }
</style>
	
	<?php
	$server="localhost";
	$user="root";
	$password="";
	$database="exam";
	$con= mysqli_connect($server,$user,$password,$database);
	$db=mysqli_select_db($con,"exam");
	$rollnographics=$_POST["rollnographics"];
	$sql= "SELECT sr,rollno,stname,course,timing,pic,marks FROM recordgraphics WHERE rollno='$rollnographics' ORDER BY sr DESC LIMIT 1";
	$data= mysqli_query($con,$sql);
	while($row= mysqli_fetch_array($data,MYSQLI_NUM)){
		/*
		echo "<h1 align='center'> RESULT OF IT</h1>";

		echo "<table align='center'>
		<tr>
		<td>Roll No :</td>
		<td>{$row[1]}</td>
		</tr>
		<tr>
		<td>Student Name :</td>
		<td>{$row[2]}</td>
		</tr>
		<tr>
		<td>Course :</td>
		<td>{$row[3]}</td>
		</tr>
		<tr>
		<td>Timing :</td>
		<td>{$row[4]}</td>
		</tr>
		<tr>
		<td>photo :</td>
		<td><img src='pictures/{$row[5]}' width='98px' height='98px'></td>
		</tr>
			<tr>
		<td>marks :</td>
		<td>{$row[6]}</td>
		</tr>
		</table>";
	*/
		
		  echo "<h1>RESULT OF PREVIOUS GRAPHICS STUDENT</h1>";
    echo "<div class='card'>";
    echo "<div class='row'>";
    echo "<div class='col-md-4'>";
    echo "<img src='pictures/{$row[5]}'>";
    echo "</div>";
    echo "<div class='col-md-8'>";
    echo "<table class='table'>";
    echo "<tr><td>Roll No:</td><td>{$row[1]}</td></tr>";
    echo "<tr><td>Student Name:</td><td>{$row[2]}</td></tr>";
    echo "<tr><td>Course:</td><td>{$row[3]}</td></tr>";
    echo "<tr><td>Timing:</td><td>{$row[4]}</td></tr>";
    echo "<tr><td>Marks:</td><td>{$row[6]}</td></tr>";
    echo "</table>";
    echo "</div>";
    echo "</div>";
	}
	
	
	?>
</head>

<body>
	<button><a href="index.php" > back</a></button>
</body>
</html>