<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Online Examination System</title>

	<!-- Bootstrap CDN -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-k/jmhj4Fv+Fd+a/nUO7jJ87LpYfL3X5i+yVxXkAspFYJvl67F7dnrBCRFVktEo1Y+ZP70gbhYmZmFBFVh+k9Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<style>
		body {
			background-color: #f7f7f7;
			font-family: Arial, sans-serif;
			font-size: 16px;
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
			width: 100%;
		}
		table input[type="text"], table input[type="file"] {
			display: block;
			padding: 5px;
			width: 100%;
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
	</style>

</head>

<body>
	<h1>Online Examination System</h1>
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
