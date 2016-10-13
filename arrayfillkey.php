<?php

$keys = array('foo', 5, 10, 'bar','not a banana');
$a = array_fill_keys($keys, 'banana');
print_r($a);

?>