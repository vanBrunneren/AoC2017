<?php

	$input_number = 312051;

	$counter = 0;

	for($i = $input_number; $i > 0; $i--) {
		$counter++;
		$square_root = sqrt($i);
		if($square_root == floor($square_root) && (floor($square_root) % 2 != 0)) {

			$line_counter = 0;
			//echo $square_root . "\n";
			for($k = $square_root; $k >= 1; $k = $k - 2) {
				$line_counter++;
			}
			
			$distance_from_corner_to_value = $input_number - $i;
			
			$c = 0;
			while($distance_from_corner_to_value > 0) {
				$distance_from_corner_to_value -= $square_root + 1;
				$c++;				
			}


			$start_of_active_row = $i + (($c - 1) * ($square_root + 1));
			$end_of_active_row = $i + ($c * ($square_root + 1));
			$center_of_active_row = round(($end_of_active_row - $start_of_active_row) / 2);

			$steps_to_center = $input_number - ($start_of_active_row + $center_of_active_row);

			$result = abs($steps_to_center) + $line_counter;
			
			echo $result . "\n";
			exit;

		}

	}

?>