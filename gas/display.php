<?php
$con=mysql_connect("localhost","root","root");
if(!$con)
  die("could not connect" .mysql_error());
  mysql_select_db("db_gas",$con);
  $result = mysql_query ("select * from dealer");
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
  mysql_close($con);
 ?>