<?php

$animals = array("d" => "donkey", "a" => "ape", "b" => "bison", "c" => "cobra");

function test_alter(&$item1, $key, $prefix)
{
    $item1 = "$prefix: $item1";
}

function test_print($item2, $key)
{
    echo "$key. $item2<br />\n";
}

echo "Before ...:\n";
array_walk($animals, 'test_print');

array_walk($animals, 'test_alter', 'Animal');
echo "... and after:\n";


array_walk($animals, 'test_print');

?>