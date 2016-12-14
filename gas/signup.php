

<?php

session_start();
$con=mysql_connect("localhost","root","");

if(!$con) 
	{
		die("could not connect" .mysql_error());
	}
mysql_select_db("db_gas",$con);

 
$username=$_POST['username']; 
$password=$_POST['password']; 
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$gas_no=$_POST['gas_no'];
$c_name=$_POST['c_name'];

$result=mysql_query("insert into user(username,password,fname,lname,email,dob,gender,gas_no,c_name) values ('$username','$password','$fname','$lname','$email
','$dob','$gender','$gas_no','$c_name')");


if ($result){
	echo "Registered Successfully";	
    
	}
	
else{
	echo "Not registered";
	
}

?>


