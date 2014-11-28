<html>
<body>
<?php
function writeMsg(){
echo "hello world!";
  
}
writeMsg();

$foo = 'Bob';
$bar = &$foo ;
$bar = "my name is $bar<br>";
echo $bar ;
echo $foo ;
?>

<?php
 var_dump(0 == "a");
 var_dump("1"== "01");
 var_dump("10"== "le1");
 var_dump(100 == "1e2");
switch ("a"){
	case 0:
	echo "0";
	break ;
       case "a":
	echo "a";
	break ;
}
?>

<br>
<h1>standard_array_compare  函数</h1>
<br>
<?php
	function standard_array_compare($op1,$op2){
		if(count($op1)<count($op2)){
		return -1 ;	
		} else if (count($op1) > count($op2) ){
			return 1 ;
		} 
		foreach ($op1 as $key => $val){
		if(!array_key_exists($key,$op2)){
		return null ;	
		}
		else if ($val < $op2[$key]){
		return  -1 ;	
		}	
		else if($val > $op2[$key]){
				return 1 ;
			}	
		}
		return 0 ;		
	}

	 $a = array("2","2");
	$b =  array("1","2");
	$var =	standard_array_compare($a,$b);
	echo "var == $var";

?>
</body>
</html>
