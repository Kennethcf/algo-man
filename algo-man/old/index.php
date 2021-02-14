<?php  
require 'config.php'



?>




<!DOCTYPE html>
<html>
<head>
	<title>hii</title>
</head>
<style type="text/css">
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
nav{
	height:40px;
	padding-left: 20px;

}
.nav{
	font-size: 30px;
	border:solid;
	padding-left: 30px;
	padding-right: 30px;
	float:right;
	margin-top: 30px;
	display: block;
}
section{
	margin-top:30px;
}
.count{
	font-size:30px;
	margin-left:30px;
}
.list{
	padding-left: 45px;
	font-size: 30px;
}

#counter {
	color: red;
}
#search{
	font-size: 30px;
	float: right;
}
#val{
padding-left: 40px;
}
footer{
	padding-top: 20px;
	border:solid;
	padding-bottom:20px;
}
</style>


<script type="text/javascript">
</script>
<body>
<header><center>This is our repository</center></header>
<nav><span class=nav onclick="window.open('admin.html')">admin login </span><span class=nav onclick="window.open('user.php')">user login</span></nav>

<hr>
<section>
<span class="count">Total number of codes in our rep <?php echo "<span id=counter>" . getnum()."</span>"  ?></span>
<br>
<div id=search> 
<form action="" method="post">
search<input type="text" name="search-text">
<input type="submit" value="search" onclick="search()" name="search"></div><br><br>

</form>
<?php 
if(isset($_POST['search'])){
	$val = search($_REQUEST['search-text']);
	echo "<p id=search>$val</p>";

};
?>
</div>
<br>
<br>
<?php

displaygen();

?>
</section>
<footer><center>college project 2020,happy corona</center></footer>

</body>
</html>