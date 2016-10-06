<?php
$connection=@mysql_connect("localhost","root","root");
if (!$connection)
    echo"Could not connect";
$select=@mysql_select_db("db_gas",$connection);
if (!$connection)
{
    echo"Could not connect";
}
$date=date("y-m-d");
$user= "insert into dealer (date,company_name,d_address,gas_stock,total_stock) VALUES ('$date','$_POST[name]','$_POST[address]','$_POST[number]','$_POST[number]')";

if(!mysql_query($user,$connection)){
    die("error".mysql_error());
}
else {
    header('location:admin.php');
}

/**
 * Created by PhpStorm.
 * User: acer
 * Date: 1/25/2016
 * Time: 3:46 PM
 */ 