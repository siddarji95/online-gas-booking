<?php
session_start();
mysql_connect("localhost","root","root");
mysql_select_db("dealer");

if($_SESSION['user_id'] == "")
{
	
		header("location:index.php");
}

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
</style></head>

<<body bgcolor="#000000">
<div id="container">
<div id="head">
<h1>BookYourGas.com</h1>
<p><i>Online Gas booking website</i></p>
<p>
  <i>Admin Page</i></p>
</div>
<div id="menu">
<ul>
<li><a href="#"><strong>Home</strong></a></li>
<li><a href="#"><strong>Dealer</strong></a></li>
<li><strong><a href="safetytips.php">Demand</a></strong></li>
<li><a href="#"><strong>About Us</strong></a></li>
<li><a href="logout.php"><strong>Log Out</strong></a></li>

</ul>
</div>
<div id="submenu"></div>
<div id="body"><center>
<form action="dealer.php" method="post">
                        <p>&nbsp;</p>
                        <fieldset>
                        <legend><font color = "black"> <strong>Dealer's Info</strong></font></legend> 
<table width="377" cellpadding="0" cellspacing="0">
                            <tbody>
							
							<tr><td height="33"><label>Dealer's Name </label></td><td><input type="text" name="name" class="txtfield" /></td></tr><br />
							<tr><td height="31"><label>Address </label></td><td><input type="text" name="address" class="txtfield" /></td></tr>
                            <tr><td height="42"><label>Number of Gas</label></td><td><input type="text" name="number" class="txtfield" /></td></tr>
							
							<tr><td colspan="2"><input type="submit" value="Submit"  /></td></tr>
							</tbody>
		</table></fieldset></form></center>
</div>
<div id="foot"></div>
</div>

</body>
</html>