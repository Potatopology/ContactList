<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<link rel="stylesheet" href="css/material.min.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<!-- TextFields -->
		<h3>Contact List</h3>
		<form method="POST" action="index.php">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" id="last" name="last">
				<label class="mdl-textfield__label" for="last">Last Name</label>
			</div>
			<br>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" id="first" name="first">
				<label class="mdl-textfield__label" for="first">First Name</label>
			</div>
			<br>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" id="middle" name="middle">
				<label class="mdl-textfield__label" for="middle">Middle Name</label>
			</div>
			<br>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" id="address" name="address">
				<label class="mdl-textfield__label" for="address">Address</label>
			</div>
			<br>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="home" name="home">
				<label class="mdl-textfield__label" for="home">Home Phone</label>
				<span class="mdl-textfield__error">Input is not a number!</span>
			</div>
			<br>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="mobile" name="mobile">
				<label class="mdl-textfield__label" for="mobile">Mobile Phone</label>
				<span class="mdl-textfield__error">Input is not a number!</span>
			</div>
			<br>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" id="email" name="email">
				<label class="mdl-textfield__label" for="email">Email</label>
			</div>
			<br>
			<br>
			<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" type="submit" name="submit" id="submit" value="Submit">
				Save
			</button>
			<button class="mdl-button mdl-js-button mdl-button--primary" type="reset" value="Clear">
				Clear
			</button>
		</form>
	</div>
		
	<!-- javascript -->
	<script src="js/material.min.js"></script>


<?php 
mysql_connect("localhost", "root") or die("No Connection");
mysql_select_db("web2trial") or die("No Database");

$sql="select * from web2trial";
$result=mysql_query($sql);
$cnt=mysql_num_rows($result);
if($cnt==0)
print"No records found";
else{
	while($rec=mysql_fetch_array($result))
	{
		$Lname=$rec["LastName"];
		$Fname=$rec["FirstName"];
		$Mname=$rec["MiddleName"];
		$add=$rec["Address"];
		$hphone=$rec["HomePhone"];
		$mphone=$rec["MobilePhone"];
		$Eadd=$rec["EmailAddress"];
		
		
		print"<table>";
		print"<tr><td>Lname</td><td>Fname</td><td>Mname</td><td>add</td><td>hphone</td><td>mphone</td><td>Eadd</td></tr>";
		print"<tr><td>$Lname</td><td>$Fname</td><td>$Mname</td><td>$add</td><td>$hphone</td><td>$mphone</td><td>$Eadd</td></tr>";
		print"</table>";
	}
}

?>

	</form>
</body>
</html>