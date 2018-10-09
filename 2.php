<html>
	<body>
	
	<?php
	$bla="";
	function countWords($str){	
	$str=strtolower($str);
 global $bla;
 $bla = array_count_values(str_word_count($str,1));
}

 countWords($_GET["pav"]);
 echo "<table style='border:1px solid black'>".print_r($bla)."</table>";
	
	?>
	
	<form method="GET" action="<?php echo $_SERVER["PHP_SELF"]?>">
	<input type="textbox" name="pav">
	<input type="submit" value="find">
	</form>
	</body>
	</html>
	
