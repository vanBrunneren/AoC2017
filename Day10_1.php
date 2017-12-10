<?php

$lengths_string = "230,1,2,221,97,252,168,169,57,99,0,254,181,255,235,167";
$lengths_array = explode(",", $lengths_string);
$values_array = array();
for($i = 0; $i < 256; $i++) {
    $values_array[] = $i;
}

$from = 0;
$to = 0;

foreach($lengths_array as $skip_size => $length) {

    if($from + $length > count($values_array)-1) {
        $to = $from + $length - count($values_array) - 1;
    } else {
        $to = $from + $length;
    }



    $from = $to;

}
