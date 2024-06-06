
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	
<title>Untitled Document</title>
	<script>
	 x=101;
		function abc3(){
			x--;
			document.getElementById("change").innerHTML=x;
			setTimeout("abc3()",1000);	
			if(x==0){
				++x;
				document.getElementById("abc").submit();
			}
		}
	
	</script>
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
</head>
	<?php
	$server="localhost";
	$user="root";
	$password="";
	$database="exam";
	$con= mysqli_connect($server,$user,$password,$database);
	$db=mysqli_select_db($con,"exam");
	if(!$con&&!$db){
		
	}
	else{
		$rollno= $_POST['rollno'];
		$stname= $_POST['stname'];
		$course= $_POST['course'];
		$timing= $_POST['timing'];
		
		if($_FILES["upload"]["error"]>0){
			echo "error:" .$_FILES["upload"]["error"]. "<br>";
			echo "here is error";
		}
		else{
			$name=$_FILES["upload"]["name"];
			$type=$_FILES["upload"]["type"];
			$size=$_FILES["upload"]["size"]/1024;
			$path=$_FILES["upload"]["tmp_name"];
			$name= preg_replace("/\s+/","-",$name);
			$picname= pathinfo($name,PATHINFO_FILENAME);
			$mix=$picname .date("YmjHis").".".$picname;
			move_uploaded_file($path, "pictures/" .$mix);
			$sql="INSERT INTO recordgraphics(sr,rollno,stname,course,timing,pic) VALUES (NULL,'$rollno','$stname','$course','$timing','$mix')";
			mysqli_query($con,$sql);
			
		/*	echo "<h1 align='center' style='background-color:red'> IT PAPER START</h1>";
			echo "<table align='center' width='50%' height='300px' style='background-color:darkgray; border-radius:5px; box-shadow: 4px 4px 8px gray;>
			<tr align='center'>
			<td align='center'>Student Photo</td>
			<td colspan='4' align='center'><img src='pictures/$mix' width='98px' height='98px'></td>
			</tr>
			
			<tr align='center'>
			<td>Roll No</td>
			<td>$rollno</td>
			</tr align='center'>
			<tr>
            <td align='center'>Student Name</td>
			<td align='center'>$stname</td>
			</tr>
			<tr align='center'>
			<td>Course</td>
			<td>$course</td>
			</tr>
			<tr align='center'>
			<td>Timing</td>
			<td>$timing</td>
			</tr>
			</table>"; */
					 
    echo "<h1>GRAPHICS PAPER START</h1>";
    echo "<div class='card'>";
    echo "<div class='row'>";
    echo "<div class='col-md-4'>";
    echo "<img src='pictures/$mix'";
    echo "</div>";
    echo "<div class='col-md-8'>";
    echo "<table class='table'>";
    echo "<tr><td>ROLL NO:</td><td>$rollno</td></tr>";
    echo "<tr><td>STUDENT NAME:</td><td>$stname</td></tr>";
    echo "<tr><td>COURSE:</td><td>$course</td></tr>";
    echo "<tr><td>TIMING:</td><td>$timing</td></tr>";
  
    echo "</table>";
    echo "</div>";
    echo "</div>";
			
			
		}
	}
	?>

<body onLoad="abc3()" bgcolor="#F0DB18">
	
	<h1 id="change" style="font-size: 5;" align="center"></h1>
	<hr size="5" color="black">
	<hr size="10" color="red">
	<hr size="5" color="black">
	<h1 align="center">Time Allow Only 1 Mint</h1>
	<center><b>After 1 Mint The Paper Automatically Submitted!</b></center>
	<table width="100%">
		<form method="post" action="graphics result card.php" id="abc">
		<tr><td><h2 style="background-color: orangered"> IT STANDS FOR?</h2></td></tr>
		<tr><td><input type="radio" value="0" name="q1">Intertanment Techonology</td></tr>
		<tr><td><input type="radio" value="1" name="q1">Information techonology</td></tr>
		<tr><td><input type="radio" value="0" name="q1">Intertanment Techonology</td></tr>
		<tr><td><input type="radio" value="0" name="q1">Intertanment Techonology</td></tr>
	
			<tr><td><h2 style="background-color: orangered"> IT STANDS FOR?</h2></td></tr>
		<tr><td><input type="radio" value="0" name="q2">Intertanment Techonoligy</td></tr>
		<tr><td><input type="radio" value="0" name="q2">Intertanment Techonoligy</td></tr>
		<tr><td><input type="radio" value="1" name="q2">Information techonology</td></tr>
		<tr><td><input type="radio" value="0" name="q2">Intertanment Techonoligy</td></tr>
	
			<tr><td><h2 style="background-color: orangered"> IT STANDS FOR?</h2></td></tr>
		<tr><td><input type="radio" value="1" name="q3">Information techonology</td></tr>
		<tr><td><input type="radio" value="0" name="q3">Intertanment Techonoligy</td></tr>
		<tr><td><input type="radio" value="0" name="q3">Intertanment Techonoligy</td></tr>
		<tr><td><input type="radio" value="0" name="q3">Intertanment Techonoligy</td></tr>
	
			<tr><td><h2 style="background-color: orangered"> IT STANDS FOR?</h2></td></tr>
		<tr><td><input type="radio" value="0" name="q4">Intertanment Techonoligy</td></tr>
		<tr><td><input type="radio" value="0" name="q4">Intertanment Techonoligy</td></tr>
		<tr><td><input type="radio" value="0" name="q4">Intertanment Techonoligy</td></tr>
		<tr><td><input type="radio" value="1" name="q4">Information techonology</td></tr>
	
			<tr><td><h2 style="background-color: orangered"> IT STANDS FOR?</h2></td></tr>
		<tr><td><input type="radio" value="0" name="q5">Intertanment Techonoligy</td></tr>
		<tr><td><input type="radio" value="0" name="q5">Intertanment Techonoligy</td></tr>
		<tr><td><input type="radio" value="0" name="q5">Intertanment Techonoligy</td></tr>
		<tr><td><input type="radio" value="1" name="q5">Information techonology</td></tr>
	
			<tr><td><h2 style="background-color: orangered"> IT STANDS FOR?</h2></td></tr>
		<tr><td><input type="radio" value="1" name="q6">Information techonology</td></tr>
		<tr><td><input type="radio" value="0" name="q6">Intertanment Techonoligy</td></tr>
		<tr><td><input type="radio" value="0" name="q6">Intertanment Techonoligy</td></tr>
		<tr><td><input type="radio" value="0" name="q6">Intertanment Techonoligy</td></tr>
			<br>
			<tr>
				<td>
			<hr color="black" size="5">
			<hr color="red" size="10">
			<hr color="black" size="5">
				</td>
			</tr>
	     <tr><td align="center"><input type="submit" value="submit paper"></td></tr>
		
	</form>
	
	
	</table>
</body>
</html>