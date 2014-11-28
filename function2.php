<html>
<body>
<?php
function add_some_extra(&$string){
	$string .= "and something extra.";
}
$str = "This is a string ";
add_some_extra($str);
echo $str."<br>";

function makecoffee($type = "cappuccino"){
	return  "Making a cup of $type.<br>";
}


echo makecoffee();
echo makecoffee(null);
echo makecoffee("espress");

function samll_numbers(){

	return array (0,1,2);
}
echo var_dump(samll_numbers());



?>
</body>
</html>
