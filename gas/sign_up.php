<html>
	<head>
		<title> registration form </title>
<link rel= "stylesheet" href = "style1.css">
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 200px;
    background-color: #f1f1f1;
float:left;
}

li a {
    display: block;
    color: #000;
    padding: 8px 0 8px 16px;
    text-decoration: none;
}

/* Change the link color on hover */
li a:hover {
    background-color: #555;
    color: white;
}
</style>
<script>
    function validateForm() {
    var x = document.forms["myForm"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
    }
</script>
	</head>
	<body bgcolor="yellow">
	<center><h1> Bookgas.in </h1></center>
<ul>
 		<li><a href="index.php"><strong>Home</strong></a></li>
		<li><a href="book.php"><strong>Book</strong></a></li>
		<li><strong><a href="safetytips.php">Safety Tips</a></strong></li>
		<li><a href="about_us.php"><strong>About Us</strong></a></li>           
</ul>
		<form align="right" name="myForm" action="demo_form.asp" onsubmit="return validateForm();">
		
		<p><b><i><h2> Create an account </h2></i></b></p>
                <p> <h3>It's free and always will be.</h3></p>
			*First Name: 
			<input type = "text" name = "name" required><br><br>
			*Last Name:
			<input type = "text" name = "name" required><br><br>
			*Email-id:
			<input type = "email" name = "email" required><br><br>
                        *Password:
                        <input type = "password" name = "pwd" required><br>
						<a href="password.html">Forget password?</a><br><br>
                        *Birthday:
                        <input type="date" name="bday" required><br><br>
                         
                        *Gender:
                        <input type="radio" name="gender" value="male" checked> Male
                        <input type="radio" name="gender" value="female"> Female<br>
                       *Gas number:
                        <input type = "text" name = "name" required><br><br>
                        *Gas company:
			<select>
			<option required> --Select gas-- </option>
			<option value = "HP"> HP gas</option>
			<option value = "BH"> Bharat gas </option>
			
			</select><br><br>
		
  
                        Address: <br>
			<textarea rows="5" cols="50">
			</textarea>
                        <input type = "submit" value = "Submit">
		</form>
		</aside>
		
	</body>
</html>