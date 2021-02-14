<?php 
require 'config.php';
$username = $_REQUEST['username'];

if(isset($_POST['store'])){
	$name = $_REQUEST['name'];
	$il = $_REQUEST['il'];
	$tags = $_REQUEST['tags'];
	$source = $_REQUEST['source'];
	$file = $_FILES["files"];
	$rv = $_REQUEST['rv'];

	$str = file_get_contents($file["tmp_name"]);

	if($name && $il && $tags && $source && $file){
		if(uploads($name,$il,base64_encode($str),$tags,$source,$username,$rv) == "1"){
			echo "upload success";
		}

	else{
		echo "fail";
	}
}else{
	echo "fill all fields";
}

}





$user = $_REQUEST['username'];
$pass = $_REQUEST['password'];
$key = checkpass($user,$pass);
if ($key == 1){
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>welcome 
		<?php
		$user = $_REQUEST['username'];
		echo $user;
		?> </title>
	</head>
	</head>
	<style type='text/css'>
	header,nav,span,section,body,p,footer{
		margin:0px;
		padding:0px;
	}	
	header{
		height: 50px;
		padding-top:20px;
		padding-left:20px;
		font-size: 50px;
		float: center; 
	}

	footer{
		padding-top: 20px;
		border:solid;
		padding-bottom:20px;
	}
	#welcome{
		padding: 150px;
		font-size: 30px;
	}
	#upload{
		padding-left: 20px;
		padding-top: 20px;
		padding-bottom: 20px;
		border: solid;
		width: 50%;
		font-size: 20px;
	}
	#uploadheader{
	font-size:40px;

	}
	#file{
		padding-left: 300px;
		font-size: 30px;
		padding-top: 30px;
	}
	</style>
	<body>
		<header><center>This is our repository</center></header><br><br>

	<span id=welcome>welcome back <?php $user = $_REQUEST['username']; echo $user; ?> </span><br><br>
	<section>
	<center><div id='upload' class='container'>
		<span id=uploadheader>upload</span>
		<br><br>
	
	<form method="POST" action="" enctype="multipart/form-data">
	<table>
		<tr>
	<td><span>file name</span></td><td><input type='text' name='name'></td></tr><tr><td><span><input type='file' name="files"></span></td></tr><tr>
		<td>input line</td><td><input type='text' name='il'></td></tr>
		<tr><td>tags</td><td><input type='text' name='tags'></td></tr>
		<tr><td>rv</td><td><input type='text' name='rv'></td></tr>

		<tr><td>source</td><td><input type='text' name='source'></td></tr>
		<tr><td><input type='submit' value='submit' name=store></td></tr>
	</table>
	</form>
	</div></center>
	<br>
	<br>
	<div id=yourwork>
		<span id=welcome>your uploads</span>

		<br><br><br>
		<?php 
		display($user);
		
		?>

	</div>
	</body>
	</html>
<?php
}else{
	
};
?>