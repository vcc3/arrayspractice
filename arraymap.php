<?php

function cube($n)
{
    return($n * $n * $n);
}

$a = array(5, 6, 7, 8, 9);
// takes array $a and puts thu function cube which is the number cubed prints out value
$b = array_map("cube", $a);
//$b is not the array$a but in cubed value. print new 5 values.
print_r($b);

?>