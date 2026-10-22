This is my lab 3:

<?php 

$name = 'Dimo';
print($name . ' likes php' . "\n");


$fruit = 'apple';
print("$fruit juice is made of {$fruit}s.\n");

$fruit = 'orange';
print("$fruit juice is made of {$fruit}s.\n");

// ----------

echo <<< TEXT
PHP is fun \n
\u{13E8}
\u{1F418}
\u{1F418}
\n
TEXT;

// ----------

$appleJuice = "apple juice is made from apples.\n";
print($appleJuice);
print(str_replace('apple', 'grape', $appleJuice));

?>
