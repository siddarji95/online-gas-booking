<?php
session_start();


$con=mysql_connect("localhost","root","");

if(!$con) 
	{
		die("could not connect" .mysql_error());
	}
mysql_select_db("db_gas",$con);


$query = mysql_query("select d_id, company_name, d_address from dealer");

  $user_check = $_SESSION['login_user'];
   
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.html");
   }


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Book</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css2/homepage.css" rel="stylesheet" type="text/css" />
    <link href="css2/menu.css" rel="stylesheet" type="text/css" />
		
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="js/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
  <style>
    .name{
color: blue;
	background-image: url("images/1.jpg");
	
	
	}
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
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
		
		if(objCphone.value) {
			alert("Please provide number for booking.");
			obj = objCphone;
			return false;
		}
		
		return true;
	}
</script>
</head>
<body>
<div class='name'>
   <h1 align='center'>BookYourGas.com</h1>
                <p align='center'><i>Online Gas booking website</i></p>
                <p align='center'>
                  <i>Associated with Indian Gas Limited</i>
                </p>
				<div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li class="active"><a href="book.php">Book</a></li>
        <li><a href="safetytips.php">Safatytips</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
	   <ul class="nav navbar-nav navbar-right">
	  <?php 
	   if(!isset($_SESSION['login_user'])){
      echo '<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
   }
else
{
	echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>';
	
}
?>
        
      </ul>
      
    </div>
  </div>
</nav>
<form id="bookingForm" action="booking.php" method="post" onSubmit="ValidForm()">
                        <p>&nbsp;</p>
        <fieldset>
          <legend><font color = "black"> <strong>BOOK</strong></font></legend> 
		  To see available gases click <a style="color:red;" href="available.php">here</a><br><br>
	<table width="508" height="267" cellpadding="0" cellspacing="0">
                            <tbody>
							
							<tr>
								<td width="169" height="33"><label>Name </label></td><td width="289"><input type="text" id="name" name="name" class="txtfield" placeholder="Enter Your Name" width="250" required /></td></tr><br />
							<tr>
								<td height="31"><label>Address </label></td><td><input type="text" id="Caddress" name="address" class="txtfield" placeholder="Enter your Address" required></td></tr>
                            <tr>
								<td height="42"><label>Citizenship Number</label></td><td><input type="text" id="Cnumber"name="Cnumber" class="txtfield" placeholder="Enter Your Citizenship Number" required></td></tr>
							<tr>
								<td height="31"><label>Phone No. </label></td><td><input type="text" id="Cphone" name="pnumber" class="txtfield" placeholder="Enter your Phone Number" required></td></tr>
                           
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



</body>
</html>
