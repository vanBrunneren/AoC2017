<?php
ini_set('memory_limit', '-1');
function recCount ($input_string, $string_array, $loop_value) {	

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
	if($new_string == $loop_value) {
		echo count($string_array) . "\n";
		exit;
	}
	
	if(in_array(trim($new_string), $string_array)) {
		if(!$loop_value) {
			echo count($string_array) . "\n";
			$loop_value = trim($new_string);
		}

		$string_array[] = $new_string;
	} else {
		$string_array[] = $new_string;
		
	}


	recCount($new_string, $string_array, $loop_value);
	
	
}

//$input_string = "0	2	7	0";
$input_string = "5	1	10	0	1	7	13	14	3	12	8	10	7	12	0	6";
$string_array[] = $input_string;
recCount($input_string, $string_array, "");





























































?>