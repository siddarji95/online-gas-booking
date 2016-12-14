<?php
session_start();

$user_check=123;
$con=mysql_connect("localhost","root","");

if(!$con) 
	{
		die("could not connect" .mysql_error());
	}
mysql_select_db("db_gas",$con);


$query = mysql_query("select d_id, company_name, d_address from dealer");

  $user_check = $_SESSION['login_user'];
   
   
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css2/homepage.css" rel="stylesheet" type="text/css" />
    <link href="css2/menu.css" rel="stylesheet" type="text/css" />
		
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="js/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
  <style>
    .name{
color: blue;
background-image: url("images/2.jpg");
	
	
	
	}
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
</head>
<body >
<div class='name'>
   <h1 align='center'>BookYourGas.com</h1>
                <p align='center'><i>Online Gas booking website</i></p>
                <p align='center'>
                  <i>Associated with Indian Gas Limited</i>
                </p>
				<div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="book.php">Book</a></li>
        <li><a href="safetytips.php">Safatytips</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
	  <?php 
	   if(!isset($_SESSION['login_user'])){
      echo '<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
   }
else
{
	echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>';
	
	
}
	  
	  
	  ?>
        
      </ul>
    </div>
  </div>
</nav>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/1.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Free Registration</h3>
          <p>You can apply for book any gas you want. Registration is free and always be. </p>
        </div>      
      </div>

      <div class="item">
        <img src="images/2.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>No need to stand in queues.</h3>
          <p>Users can book their gas online any time any where.</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <h3>Our Gas Partner</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="images/hp.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>HP Gas</p>
    </div>
    <div class="col-sm-4"> 
      <img src="images/bharat gas.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Bharat Gas</p>    
    </div>
	 <div class="col-sm-4"> 
      <img src="images/bharat gas.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Bharat Gas</p>    
    </div>
    
    </div>
  </div>
</div><br>

<footer class="container-fluid text-center">
 <div class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Mumbai, Maharastra</p>
      <p><span class="glyphicon glyphicon-phone"></span> +919969319254</p>
      <p><span class="glyphicon glyphicon-envelope"></span> siddharth.darji@somaiya.edu</p> 
    </div>
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
		<form action="feedback.php" method="post">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comment" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
		  </form>
        </div>
      </div> 
    </div>
  </div>
</div>

</footer>

</body>
</html>
