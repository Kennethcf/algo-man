<?php
require 'config.php';
if(isset($_POST["submit"])){
	if ($_REQUEST['username'] == ""){
		echo "<script>alert('enter username')</script>";
	}
	if($_REQUEST['password'] == ""){
		echo "<script>alert('enter password')</script>";

	}
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
	if ($username != "" && $password != ""){
	if (createacc($username,$password) == 1){
		echo "<script>alert('account created');window.open('index.php')</script>";	
	}else{
		echo "<script>alert('try again')</script>";
	}
}

}




?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
    body{
    background-color: #4158D0;
}
</style>
<body>
	<center><div class="loginBox">
		<img src="user.png" class="user">
		<form action="" method="POST">
			<table>
			<tr><td>Email</td>
			<td><input type="text" name="username" placeholder="Enter Email"></td></tr>
			<tr><td>Password</td>
			<td><input type="password" name="password" placeholder="********"></td></tr>
			<tr><td><input type="submit" name="submit" value="create"></td></tr>

			</table>
		</form>
			<button onclick="window.open('index.php','_self')">home</button>

	</div></center>
</body>
</html>
