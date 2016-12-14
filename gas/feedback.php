<?php


$con=mysql_connect("localhost","root","");

if(!$con) 
	{
		die("could not connect" .mysql_error());
	}
mysql_select_db("db_gas",$con);

$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];


$result=mysql_query("insert into contact(name,email,comment) values ('$name','$email','$comment')");
if ($result){
echo "<script> alert('Your feedback has been saved');</script>";

}

?>