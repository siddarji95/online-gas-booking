<?php
session_start();

//$_SESSION['dealerId'] = $_GET['id'];	
$con=mysql_connect("localhost","root","");

if(!$con) 
	{
		die("could not connect" .mysql_error());
	}

mysql_select_db("db_gas",$con);

$query = mysql_query("select d_id, company_name, d_address from dealer");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <link href="css2/homepage.css" rel="stylesheet" type="text/css" />
 <link href="css2/menu.css" rel="stylesheet" type="text/css" />
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
<script>
	var obj;
	
	function SetDealerAddress(obj) {
		var selectedDealerId = obj.selectedIndex;
		var dAddress = obj.options[selectedDealerId].getAttribute('address');
		
		document.getElementById('dealerId').setAttribute('value', selectedDealerId);
		document.getElementById('daddress').setAttribute('value', dAddress);
	}
	
	function SubmitForm() {		
		if(ValidForm()) {
			document.getElementById('bookingForm').submit();
		}
		
		if(obj != null) {
			obj.focus();
		}
	}
	
	function ValidForm() {
		var objName = document.getElementById('name');
		var objAddress = document.getElementById('Caddress');
		var objCnumber = document.getElementById('Cnumber');
		var objCphone = document.getElementById('Cphone');
		
		if(objName.value == "") {
			alert("Please provide name for booking.");
			obj = objName;
			return false;
		}
		
		if(objAddress.value == "") {
			alert("Please provide Address for booking.");
			obj = objAddress;
			return false;
		}
		
		if(objCitinumber.value == "") {
			alert("Please provide citizenship number for booking.");
			obj = objCitinumber;
			return false;
		}
		
		if(objCphone.value == "") {
			alert("Please provide number for booking.");
			obj = objCphone;
			return false;
		}
		
		return true;
	}
</script>
</head>
<body bgcolor="#000000">
<div id="container">
<div id="head">
<h1>BookYourGas.com</h1>
<p><i>Online Gas booking website</i></p>
<p>
  <i>Associated with Nepal Gas Limited</i></p>
</div>
<a href="login.php" >Login</a>
<a href="form.html">Sign UP</a>
<div id="menu">
	<ul>
		<li><a href="index.php"><strong>Home</strong></a></li>
		<li><a href="book.php"><strong>Book</strong></a></li>
		<li><strong><a href="safetytips.php">Safety Tips</a></strong></li>
		<li><a href="#"><strong>About Us</strong></a></li>
	</ul>
</div>
<div id="submenu"></div>
<div id="body"><center>
<form id="bookingForm" action="booking.php" method="post">
                        <p>&nbsp;</p>
        <fieldset>
          <legend><font color = "black"> <strong>BOOK</strong></font></legend> 
	<table width="508" height="267" cellpadding="0" cellspacing="0">
                            <tbody>
							
							<tr>
								<td width="169" height="33"><label>Name </label></td><td width="289"><input type="text" id="name" name="name" class="txtfield" placeholder="Enter Your Name" width="250" /></td></tr><br />
							<tr>
								<td height="31"><label>Address </label></td><td><input type="text" id="Caddress" name="address" class="txtfield" placeholder="Enter your Address"/ width="250"></td></tr>
                            <tr>
								<td height="42"><label>Citizenship Number</label></td><td><input type="text" id="Cnumber"name="Cnumber" class="txtfield" placeholder="Enter Your Citizenship Number" width="250"/></td></tr>
							<tr>
								<td height="31"><label>Phone No. </label></td><td><input type="text" id="Cphone" name="pnumber" class="txtfield" placeholder="Enter your Phone Number" width="250" /></td></tr>
                           
							<tr>
								<td height='31'>
									<label>Dealer's Name </label>
								</td>
								<td>
									<select id='dealer' name='dealer' onChange='javascript: SetDealerAddress(this);'>
										<option value='0' >Select Dealer...</option>
										<?php
										while($row = mysql_fetch_array($query)){
											echo "<option value='" . $row['d_id'] . "' address='" . $row['d_address'] . "'>" . $row['company_name'] . "</option>";
										}?>
									</select>
									
									
									<input type="hidden" name="numberofgas" value="1">
								</td>
							</tr>
                            <!--<tr>
								<td height="31">
									<label>Dealer's Address </label>
								</td>
								<td>
									<input type="text" value="" id="daddress" name="daddress" class="txtfield" width="250" readonly=readonly/>
								</td>
							</tr>-->
							
							<tr><td colspan="2"><input type="submit" value="Submit" /></td></tr> <!--<input type="button" value="Submit" onClick="javascript: SubmitForm();" />-->
							</tbody>
		</table></fieldset></form></center>
</div>

</div>
<div id="foot"></div>
</div>
</body>
</html>
