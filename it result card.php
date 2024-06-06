<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Result Card</title>
<!-- Bootstrap -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
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
$sql= 'SELECT sr,rollno,stname,course,timing,pic,marks FROM recordit ORDER BY sr DESC LIMIT 1';
$data= mysqli_query($con,$sql);
while($row= mysqli_fetch_array($data,MYSQLI_NUM)){
    $marks = $row[6];
    echo "<h1>RESULT OF IT</h1>";
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
 
	if(isset($_POST['q1'])){
			$q1=$_POST["q1"];
			$q2=$_POST["q2"];
			$q3=$_POST["q3"];
			$q4=$_POST["q4"];
			$q5=$_POST["q5"];
			$q6=$_POST["q6"];
			
			$marks= $q1+$q2+$q3+$q4+$q5+$q6;
			$x=$row[1];
			$update="UPDATE recordit SET marks='$marks' WHERE rollno='$x'";
			mysqli_query($con,$update);
			header("Refresh:0");
		}
	}
	
	?>
</head>

<body>
	<button><a href="index.php" > back</a></button>
</body>
</html>

	
