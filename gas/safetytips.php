

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Safatytips</title>
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
        <li class="active"><a href="safetytips.php">Safatytips</a></li>
        <li><a href="contact.php">Contact</a></li>
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


<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/safaty1.jpg" alt="Chania" width="460" height="345">
      </div>

      <div class="item">
        <img src="images/safaty2.jpg" alt="Chania" width="460" height="345">
      </div>
    
      <div class="item">
        <img src="images/safaty3.jpg" alt="Flower" width="460" height="345">
      </div>

      <div class="item">
        <img src="images/safaty4.jpg" alt="Flower" width="460" height="345">
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
</div>


</body>
</html>
