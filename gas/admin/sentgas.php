<?php
session_start();	
$con=mysql_connect("localhost","root","root");
$dealerid = $_GET['id'];
if(!$con) 
	{
		die("could not connect" .mysql_error());
	}

mysql_select_db("db_gas",$con);

 $result = mysql_query("select * from dealer where d_id=" . $dealerid );

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
                   <li><a href="detail.php"><strong>Home</strong></a></li>
					<li><a href="dealer.php"><strong>Add New Dealer</strong></a></li>    
                </ul>
            </div>
        
        	<div id="submenu">
        </div>
         <div id="body">
			</br></br></br></br></br>
		 <center>
			<fieldset>
			<legend><font color = "black"> <strong>Dealer's Info</strong></font></legend><br>
			<strong>Dealer's Name :</strong>
				<?php
					$row = mysql_fetch_array($result);
					echo $row['company_name'];
				?></br></br>
		   <strong>Address</strong> : 
				<?php 
					echo $row['d_address'];
				?></br></br>
		   <strong>Available Number of Gas : </strong>
				<?php
					echo $row['gas_stock'];
				?>				
		 </fieldset>
         </center>
		 
                </div>
            </div></div>
        	
            <div id="foot"></div>
    	</div>
    </body>
</html>
<?php mysql_close($con); ?>