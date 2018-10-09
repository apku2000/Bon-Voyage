<!DOctype html>
<html>
<body>
	<fieldset style="background-color:maroon;color:yellow;font-size:28px">
	<marquee>
	Your Converted value 
	<?php
	$x=$_POST["monir"];
	$y=$_POST["na"];
	
	
	if($y=="KWD")
	echo "In Kuwaiti dinars: ".$x*(0.0047);	
	elseif($y=="QAR")
	echo "In Qatari Riyals: ".$x*(0.059);
	elseif($y=="AED")
	echo "In Emrati Dirhams: ".$x*(0.057);
	elseif($y=="BHD")
	echo "In Bahraini Dirhams: ".$x*(0.0058);
	elseif($y=="USD")
	echo "In US Dollars: ".$x*(0.015);
	?>
	</marquee>
	</fieldset>
</body>
</html>
