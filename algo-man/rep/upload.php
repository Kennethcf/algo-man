<?php
require 'config.php';
$name = $_REQUEST['name'];
$il = $_REQUEST['il'];
$tags = $_REQUEST['tags'];
$source = $_REQUEST['source'];
$file = $_FILES["files"];
$str = file_get_contents($file["tmp_name"]);
if(uploads($name,$il,base64_encode($str),$tags,$source) == "1"){
	echo "upload success";
}
else{
	echo "fail";
};

?>