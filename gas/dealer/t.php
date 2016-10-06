<?php
session_start();
mysql_connect("localhost","root","root");
mysql_select_db("db_gas");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <link href="../css2/homepage.css" rel="stylesheet" type="text/css" />
        <link href="../css2/menu.css" rel="stylesheet" type="text/css" />
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
        
        
    </head>
	
    <body bgcolor="#000000">
        <div id="container">
            <div id="head">
                <h1>BookYourGas.com</h1>
                <p><i>Online Gas booking website</i></p>
                <p>
                  <i>Associated with Nepal Gas Limited</i>
                </p>
            </div>
            
            <div id="menu">
                <ul>
                    <li><a href="index.php"><strong>Home</strong></a></li>
                    
                    <li><a href="logout.php"><strong>Log out</strong></a></li>    
                </ul>
            </div>
        
        	<div id="submenu"></div>
         <div id="body">
           
               
                <table border='1' cellspacing="0" cellpadding="0" style="margin-top: 10px;">
                    <tr style='height: 30px; background-color: grey;'>
                        <th width="120px">Name</th>
                        <th width="300px">Address</th>
                        <th width="150px">contact</th>
                        <th width="250px">Citizenship number</th>
                    </tr>	
					  <?php
					  
					  if($_SESSION['dealerId'] != "") {
						$query = "select * from booking where d_id =23" . $dealerId;
						$result = mysql_query($query);
						while($row = mysql_fetch_array($result))
						{
						  
						  echo "<td style='padding-left: 5px;'>" .$row['c_name']."</td>";
						  echo "<td style='padding-left: 5px;'>" .$row['c_address']."</td>";
						  echo "<td style='padding-left: 5px;'>" .$row['c_contact']."</td>";
						  echo "<td style='padding-left: 5px;'>" .$row['citizenship_no']."</td>";
						  echo"</tr>";
						}
					  
					  }
					?>
					
					  </table>
					
					
					

                </div>
            </div></div>
        	
            <div id="foot"></div>
    	</div>
    </body>
</html>
