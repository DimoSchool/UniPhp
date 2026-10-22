This is my lab 2:

<?php 

$scoreFloat = 55.9;
print("float scoreFloat: $scoreFloat\n");
print("int scoreFloat:" . (int) $scoreFloat . "\n");

// ---------

$age = 21;

var_dump($age);

$age = NULL;

var_dump($age);

unset($age);

// look like vaiable no longer exists
/** @disregard */
var_dump($age);

?>  
