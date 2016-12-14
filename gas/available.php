

<?php
session_start();




$per_page = 17; //per page result 
if(!isset($_GET['page']))
	{
		$page = 1;  //current page 
	}
	else
	{
		$page = $_GET['page'];
	}
	if($page<=1)
	$start = 0; // staring row
	else
	$start = $page * $per_page - $per_page;


$con=mysql_connect("localhost","root","");

if(!$con) {
	die("could not connect" .mysql_error());
}
mysql_select_db("db_gas",$con);

$per_page =17;

$searchParam = '';

if(!isset($_GET['page']))
    $page = 1;
else
    $page = $_GET['page'];

if($page <= 1)
    $start = 0;
else
    $start = ($page * $per_page) - ($per_page - 1);

if(isset($_POST['search'])) {
    $searchParam = $_POST['search'];
}

if(isset($_GET['search'])) {
    $searchParam = $_POST['search'];
}

$query = "SELECT * FROM dealer";

if($searchParam != "")
    $query = $query . " WHERE company_name LIKE '%" . $searchParam . "%' OR d_address LIKE '%" . $searchParam . "%' ";

$num_row = mysql_num_rows(mysql_query($query));
$no_of_pages = ceil($num_row/$per_page);

$query = $query . " LIMIT " . $start . " , " . $per_page;

 
$result = mysql_query ($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Available Gases</title>
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
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li class="active"><a href="book.php">Book</a></li>
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
<form action="available.php" method="post">
                    <input type="text" name="search" placeholder="search here" value="<?php echo $searchParam; ?>"/>
                    <input type="submit" value=">>"  />
                </form>
                <table border='1' cellspacing="0" cellpadding="0" style="margin-top: 10px;">
                    <tr style='height: 30px; background-color: grey;'>
                        <th width="120px">Date</th>
                        <th width="300px">Dealer name</th>
                        <th width="150px">Address</th>
                        <th width="250px">Available number of gas</th>
                    </tr>
                    
                    <?php
					if (mysql_num_rows($result) > 0) {
						while($row = mysql_fetch_array($result))
						{
						  echo "<tr id='".$row['d_id']."' onClick='javascript: showDetails(".$row['d_id'].");' onMouseOver='javascript: hightlight(this);' onMouseOut='javascript: unhightlight(this);' style='height: 22px; background-color: white;'>";
						  echo "<td style='padding-left: 5px;'>" .$row['date']."</td>";
						  echo "<td style='padding-left: 5px;'>" .$row['company_name']."</td>";
						  echo "<td style='padding-left: 5px;'>" .$row['d_address']."</td>";
						  echo "<td style='padding-left: 5px;'>" .$row['gas_stock']."</td>";
						  echo"</tr>";
						}
					}
					 else
                        {
                            echo "<tr><td colspan='9'>No records found</td></tr>";
                        }	
					?>
					  </table>
<div id="pagingDiv">
                <?php
                    $prev = $page - 1;
                    $next = $page + 1;

                    echo "<hr>";

                    if ($prev > 0)
                        echo "<a href='?page=$prev&search=$searchParam'> Prev</a>";

                    $number = 1;

                    for ($number; $number <= $no_of_pages; $number = $number + 1) {
                        if ($page == $number) {
                            echo "<b>[$number]</b>";
                        } else {
                            echo "<a href='?page=$number&search=$searchParam'>$number </a>";
                        }
                    }

                    if ($next < $no_of_pages + 1)
                        echo "<a href='?page=$next&search=$searchParam'> Next </a>";
                ?>
 




</body>
</html>
