
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact</title>
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
      <script language="javascript">
			function showDetails(id) {
				//alert('http://localhost/gas/detailDetail.php?id=' + id);	
				document.location.href = 'http://localhost/gas/book.php?id=' + id;	
			}
			
			function hightlight(obj) {
				obj.setAttribute("style", "height: 22px; text-decoration: underline; cursor: pointer; color: blue;");
			}
			
			function unhightlight(obj) {
				obj.setAttribute("style", "height: 22px; text-decoration: none; color: black;");
			}
		</script>
</head>
<body>
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
        <li><a href="index.php">Home</a></li>
        <li><a href="book.php">Book</a></li>
        <li><a href="safetytips.php">Safatytips</a></li>
        <li class="active"><a href="contact.html">Contact</a></li>
      </ul>
	     <ul class="nav navbar-nav navbar-right">
	  <?php 
	  session_start();
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
