

<?php

session_start();
$con=mysql_connect("localhost","root","");

if(!$con) 
	{
		die("could not connect" .mysql_error());
	}
mysql_select_db("db_gas",$con);





// Define $username and $password 
$username=$_POST['username']; 
$password=$_POST['password']; 

// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$sql="SELECT * FROM user WHERE username='$username' and password='$password'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $username and $password, table row must be 1 row
if($count==1){
	
         $_SESSION['login_user'] = $username;
         


header("location:welcome.php");
}
else {
echo "Wrong Username or Password";
}

?>
