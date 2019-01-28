<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Process page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="style.css" rel="stylesheet">
</head>
<body>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Uruguayan things</h1>      
    <p>The best place  to purchase Uruguayan things</p>
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Deals</a></li>
        <li><a href="#">Stores</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
		<li><a href="process.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
		
      </ul>
    </div>
  </div>
</nav>

<div class="container">    
  <div class="row">
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <div class="panel-heading">You purchased</div>
		<div class="panel-heading">
         <?php
              $arrlength = count($_SESSION["cart"]);
              if($arrlength > 0)
              {
                echo "<ul>";
                for($x = 0; $x < $arrlength; $x++) {
                  echo "<li>" . $_SESSION["cart"][$x] . " </li>";
                  echo "<br/>";
                  echo "<button class='remove btn btn-secondary' value=$x>Remove Item From List</button>";
                  echo "<br/>";
                }
                echo "</ul>";
              };
              ?>
			  </div>
        
		</div>
  	</div>
    </div>
    
  </div>
</div><br>

<br><br>

<footer class="container-fluid text-center">
  <p>Online Store Copyright</p>  
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
</footer>

</body>
</html>