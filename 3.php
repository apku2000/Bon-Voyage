<!Doctype html>
<html>
	
	<body>
	<?php
	if(empty($name))
	{ $error="*Enter Name";}
	if(empty($aadhar))
	{ $error1="*Enter Aadhar number";}
	if(strlen($aadhar)!=12)
	{ $error2="*Aadhar number should be of 12 digits";}
	if(strlen($p)!=3)
	{ $error3="*Preferred number should be of 3 digits only";}
	

	if(empty($error) && empty($error1) && empty($error2) && empty($error3))
	{ $a=rand(1000000,9999999);
	
	echo "Hello "." ".$name." .Your Registration is successful.Your new mobile number is ".$a.$p;}
		
	?>
		<br><br>
		<br>
		
		<h1 style="font-style:italic">Sim Registration</h1>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
		   <h3> Your Name:</h3><input type="textbox" name="n1"><span style="color:red"><?php echo $error; ?></span><br><br>
			<h3>Aadhar Number:</h3><input type="number" name="an"><span style="color:red"><?php echo $error1; ?><br><?php echo $error2; ?></span><br><br>
			<h3>Enter  digits:</h3><input type="number" name="an1"><br><br><span style="color:red"><?php echo $error3; ?></span><br><br>
			
							  <br><br>
								<input type="submit" class="c1" value="Register">
		</form>
		
		<br><br><br>
		
		
	
		
	</body>
</html>
										
