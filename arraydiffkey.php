<?php
$array1 = array('Birds'  => 1, 'red'  => 2, 'grass'  => 3, 'purple' => 4);
$array2 = array('grass' => 5, 'Birds' => 6, 'yellow' => 7, 'nyan'   => 8);

var_dump(array_diff_key($array1, $array2));


?>