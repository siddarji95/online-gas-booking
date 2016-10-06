<?php
session_start();
mysql_connect("localhost","root","root");
mysql_select_db("db_gas");	
 echo "dealerId = " .$_SESSION['d_id'];

if (isset($_POST['button']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
	
	if(($username != "") && ($password != ""))
	{
		$query = "select * from dealer where company_name = '" . $username . "' and d_address = '" . $password . "'";
        $result = mysql_query($query);
		
		if(mysql_num_rows(mysql_query($query)) > 0) {
			
			$row = mysql_fetch_array($result);
			
			$_SESSION['d_id'] = $row['d_id'];
			
			
			header("location:t.php");
		}
		else {
			$msg = "Invalid login.";
		}	
	}
	else {
		$msg = "Please provide username/password.";
	}
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

<body bgcolor="#000000">
<div id="container">
<div id="head">
<h1>BookYourGas.com</h1>
<p><i>Online Gas booking website</i></p>
<p>
  <i>Dealer Page</i></p>
</div>
<div id="menu">

</div>
<div id="submenu"></div>
<div id="body">

			<p><br />
			  <br /><br />
	</p>
	<p>&nbsp;</p>
			<p><br />
			  <br />
    </p>
			<center><form  action="index.php" method="POST">
			<fieldset >
			<legend><font color = "black"> <strong>Login</strong></font></legend> 
			
			<p><br>
		
		
			Username: <br /><input type="text" size="20" name="username" autofocus="autofocus"/>
			<br />
			<br />

			Password: <br /><input type="password" size="20" name="password"/>
			<br />

<br />
			<input type="submit" name="button" value="Login"/>
			</p>
            </fieldset>
			<?php
	if ($msg != "") {
		echo "<label>" . $msg . "</label>";
	}
	?>
	</form></center>
</div>
<div id="foot"></div>
</div>

</body>
</html>