<?php

$array = array(0 => 100, "color" => "red");
print_r(array_keys($array));
// 0 is to color as 100 is to red

$array = array("blue", "red", "green", "blue", "blue");
print_r(array_keys($array, "blue"));
// value that are blue are 0,3,4

$array = array("shirt" => array("blue", "red", "green"),
//array value 0 = color
               "type"  => array("small", "medium", "large"));
//array value1=size
print_r(array_keys($array));
//prints out shirt and size not the actual color or size.

?>