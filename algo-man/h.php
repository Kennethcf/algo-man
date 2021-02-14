

<!DOCTYPE html>
<html lang="en">
<head>
  <title>home page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
  	body {
  background-image: url("https://static.vecteezy.com/system/resources/previews/000/177/414/original/abstract-underwater-blue-background-vector.jpg");
  background-repeat: no-repeat;
width:100%;
}
     
  </style>
</head>
<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-home"></span>REPOSITORY</a>
    </div>
   
    <form class="navbar-form navbar-left" action="">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
      <button type="button" class="btn btn-success">
      Download</button>
    </form>
     <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

    </ul>

  </div>
</nav>


<aside>
  <p id=aside>documentation</p>
</aside>

<div class="container"> 
<?php 
if(isset($_POST['search'])){
	$val = search($_REQUEST['search-text']);
	echo "<p id=search>$val</p>";
//this code displays search result


};
?>

<p id=counter>this repository has <?php echo "<span id=counter>" . getnum()."</span>"  ?> codes</p>


<?php
echo displaygen(); //class="list" for styling 

?>

</div>

</body>
</html>

