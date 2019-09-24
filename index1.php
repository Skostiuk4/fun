<?php
//function multiplex
function plus($a, $b) {
	$add = $a + $b;
	$subt = $a - $b;
	$multiplication = $a * $b;
	$division = $a / $b;

	return array($add, $subt, $multiplication, $division);
	
}

$result_array = plus(15, 3,'/');
echo "add: " . $result_array[0] . "<br />";
echo "subt: " . $result_array[1] . "<br />";
echo "multiplication: " . $result_array[2] . "<br />";
echo "division: " . $result_array[3] . "<br />";


?>



