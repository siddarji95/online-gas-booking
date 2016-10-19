<?php

@session_start();

$con=mysql_connect("localhost","root","");

if(!$con) {
	die("could not connect" .mysql_error());
}
mysql_select_db("db_gas",$con);

$date=date('y-m-d');


//$dealerid = $_SESSION['dealerId'];
$Dealerid = $_POST['dealer'];
$cnumber = $_POST['Cnumber'];
$pnumber = $_POST['pnumber'];
$name = $_POST['name'];
$address = $_POST['address'];

mysql_query("insert into booking(citizenship_no,c_name,c_address,c_contact,booking_date,d_id) values ('$cnumber','$name','$address','$pnumber','$date','$Dealerid')");
mysql_query("update dealer set gas_stock = gas_stock - 1 WHERE d_id IN (SELECT d_id from booking WHERE d_id = $Dealerid )");

$_SESSION['alert'] = "thankyou for booking gas from ".$_POST['dname'];	
header('location:checkout.html');

?>