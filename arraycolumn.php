<?php
// Array representing a possible record set returned from a database
$records = array( array('id' => 2135,'first_name' => 'John','age' => 36 ),
				  array('id' => 3245,'first_name' => 'Sally','age' => 21,),
				  array('id' => 5342,'first_name' => 'Jane','age' => 12,),
				  array('id' => 5623,'first_name' => 'Peter','age' => 45,)
);
 
$first_names = array_column($records, 'first_name');
print_r($first_names);
$id = array_column($records,'id');
print_r($id);
?>



