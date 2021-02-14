<?php
define('hostname','localhost');
define('username', 'admin');
define('password', 'admin@123');
define('db', 'rep');

function connect()
{
	
$conn = mysqli_connect(hostname, username, password, db);
if ($conn){
	return $conn;
}

}

function checkpass($user,$pass){
	$conn = connect();
	$sql = "select password from login where username = '$user'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)){
			if ($pass ==  $row['password']){
				return "1";
			}
			else{
				return "0";
			}
		}
	}
}

function uploads($name,$il,$file,$tags,$source,$username,$rv)
{
	$conn = connect();
	$sql = "insert into upload(filename,inputline,file,tags,source,user,rv) values ('$name','$il','$file','$tags','$source','$username','$rv')";
	if(mysqli_query($conn,$sql)){
		return "1";
	}else{
		echo mysqli_error($conn);
	return "0" ;
}
mysql_close($conn);
}


function display($user){
	$conn = connect();
	$sql = "select filename,file from upload where user = '$user'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)){
			echo "<br><span id=file> " . $row['filename'] . "<br>";
		}

}
}

function displaygen(){
	$conn = connect();
	$sql = "select filename,file from upload";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)){
			echo "<br><span class=list> " . $row['filename'] . "</span><br>";
		}

}
}


function getnum(){
	$conn = connect();
	$sql = "select filename,file from upload";
	$result = mysqli_query($conn, $sql);
	return(mysqli_num_rows($result));

}
function search($name){
	$conn = connect();
	$sql = "select filename,inputline from upload where filename = '$name'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)){
			return ($row['inputline']);

}
}

}	
?>


