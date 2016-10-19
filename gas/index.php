
<?php
@session_start();
if($_SESSION['alert'])
{
?>
	<script> alert($_SESSION['alert']); </script>
	<?php
	unset($_SESSION['alert']);
}

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
<?php

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <link href="css2/homepage.css" rel="stylesheet" type="text/css" />
        <link href="css2/menu.css" rel="stylesheet" type="text/css" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Untitled Document</title>
        <style type="text/css">
        <!--
        body {
            margin-left: 0px;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
        }
        -->
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
	
    <body bgcolor="#000000">
        <div id="container">
            <div id="head">
                <h1>BookYourgas.com</h1>
                <p><i>Online Gas booking website</i></p>
                <p>
                  <i>Associated with Indian Gas Limited</i>
                </p>
            </div>
			<a href="login.php" >Login</a>
<a href="form.html">Sign UP</a>
            
            <div id="menu">
                <ul>
                    <li><a href="index.php"><strong>Home</strong></a></li>
                    <li><a href="book.php"><strong>Book</strong></a></li>
                    <li><strong><a href="safetytips.php">Safety Tips</a></strong></li>
                    <li><a href="#"><strong>About Us</strong></a></li>    
                </ul>
            </div>
        
        	<div id="submenu">
        </div>
         <div id="body">
            <div  class="display">
                <form action="index.php" method="post">
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
                
                </div>
            </div></div>
        	
            <div id="foot"></div>
    	</div>
    </body>
</html>
<?php mysql_close($con); ?>