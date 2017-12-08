<?php
ini_set('memory_limit', '-1');
function recCount ($input_string, $string_array) {	

	$input_array = explode("\t", $input_string);

	$max_value = max($input_array);

	$max_key = array_search($max_value, $input_array);

	$new_array = $input_array;
	$new_array[$max_key] = 0;

	$i = 1;
	$counter_value = $max_key;
	while($max_value >= $i) {
		$counter_value++;
		if($counter_value >= count($input_array)) {
			$counter_value -= count($input_array);
		}

		$new_array[$counter_value]++;
		$i++;

	}

	$new_string = implode("\t", $new_array);
	
	if(in_array(trim($new_string), $string_array)) {
		echo count($string_array) . "\n";
		exit;
	} else {
		$string_array[] = $new_string;
		recCount($new_string, $string_array);
	}
	
	
}

//$input_string = "0	2	7	0";
$input_string = "5	1	10	0	1	7	13	14	3	12	8	10	7	12	0	6";
$string_array[] = $input_string;
recCount($input_string, $string_array, $counter);



























































/*
$input_string = "5	1	10	0	1	7	13	14	3	12	8	10	7	12	0	6";
$input_array = explode("\t", $input_string);

$settedArray = array();

$counter = 0;
calculate($input_array, $settedArray, $counter);

function calculate($input_array, $settedArray, $counter) {

	//print_r($input_array);

	$max_value = max($input_array);
	
	foreach($input_array as $key => $value) {

		if($value == $max_value) {

			$newArray = $input_array; 
			$tmpKey = $key;
			$newArray[$tmpKey] = 0;
			$arrayCount = count($newArray);

			for($i = 1; $i < $value; $i++) {
				if($arrayCount <= $i+$tmpKey) {
					$tmpKey = -$i;
				}
				$newArray[$i+$tmpKey]++;
			}

			foreach($settedArray as $sa) {
				if(!array_diff_assoc($newArray, $sa)) {
					print_r($newArray);
					print_r($settedArray);
					echo $counter . "\n";
					exit;
				}
			}

			$settedArray[] = $newArray;
			$counter++;
			calculate($newArray, $settedArray, $counter);

		}

	}

}

*/














/*
$setted_arrays[] = $input_array;

calculate($input_array, $setted_arrays);

function calculate($input, $setted_arrays) {

	$max_value = max($input);

	$tmp_array = $input;

	foreach($input as $key => $value) {

		if($value == $max_value) {
			
			$k = $key;
			$tmp_array[$k+$i] = 0;
			for($i = 1; $i < $value+1; $i++) {
				if($k+$i > count($input)-1) {
					$k = -$i;
				}
				$tmp_array[$k+$i]++;
			}

			foreach($setted_arrays as $sa) {
				if(!array_diff_assoc($tmp_array, $sa)) {
					print_r($tmp_array);
					print_r($sa);
					exit;
				}
			}

			$setted_arrays[] = $tmp_array;
			calculate($tmp_array, $setted_arrays);
			
		}

	}
}
*/


?>