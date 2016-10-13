<?php

$array = array(1976 => 'subaru', 1957 => 'toyota', 1984 => 'volkswagon', 1970 => 'honda');

echo "Subaru came out in ", array_search('subaru', $array); // $key = 1976;
echo "<br>";
echo "Honda came out in " , array_search('honda', $array);   // $key = 1970;

?>