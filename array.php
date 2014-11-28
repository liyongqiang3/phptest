<html>
<body>
		<?php
		function   writeName ($fname ){
			$cars =  array("baoma","bengchi","aodi");
			$arrlength = count($cars);
			for ($i = 0; $i < $arrlength ; $i++) { 
				echo "<h1>my  car is name $cars[$i]</h1><br><>";
			}
			echo "my name is $fname <br>";
		}
		writeName("liyongqiang");
	
		?>


<?php

$ages = array("li"=>"34","haode"=>"35","haoa"=>"67");
foreach($ages as $x=>$x_value){
echo "key = ". $x . ",value = ". $x_value;
echo "<br>";
}
?>
</body>

</html>
