<html>
<body>
<?php
$con = mysql_connect("localhost","liyongqiang","lyq");
if (!$con){
	die('could not connet :'.mysql_error());
	
} else {
	echo " mysql";
	echo "my name is lily";
}

?>
</body>
</hmtl>
