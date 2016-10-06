<?php

$per_page = 5; //per page result 
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
$con=mysql_connect("localhost","root","root");
if(!$con)
  die("could not connect" .mysql_error());
  mysql_select_db("db_gas",$con);
  $sql ="select * from dealer";
  $sqli= "select * from dealer LIMIT $start , $per_page" ;
  
  $num_row = mysql_num_rows(mysql_query($sql)); //25
  $num_page = ceil($num_row/$per_page); //total number of pages  9
  $result = mysql_query ("$sqli");
  
  
  echo "<table border='1'>
  <tr><th>Date</th>
  <th>Dealer name</th>
  <th>Address</th>
  <th>number of gas</th></tr>";

  
  while($row = mysql_fetch_array($result))
  {
	  echo "<tr>";
	  echo "<td>" .$row['date']."</td>";
	  echo "<td>" .$row['company_name']."</td>";
	  echo "<td>" .$row['d_address']."</td>";
	  echo "<td>" .$row['gas_stock']."</td>";
	  echo"</tr>";
  }
  echo"</table>";
 
 $prev = $page - 1;
 $next = $page + 1;
 
 
	
 
 
 
 echo "<hr>";
 echo "<a href='?page=1'> /<<  </a>";
 if($prev >0)
 echo "<a href='?page=$prev'>  <  </a>";
 
 $number=1;
 for($number; $number<=$num_page ; $number=$number+1)
 	{
		if($page == $number)
			{
				echo "<b>[$number]</b>";
			}
			else
			{
				echo "<a href='?page=$number'>$number </a>";
			}
	}
 
 if($next <  $num_page + 1)
 echo "<a href='?page=$next'> > </a>";
 
 ?>