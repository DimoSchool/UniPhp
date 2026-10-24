This is my lab 7:

<?php 

$colors = ["red", "green", "blue", "pink", "black"];

print($colors[array_rand($colors)] . PHP_EOL);

echo '--------' . PHP_EOL;

// ---------

foreach ($colors as $color) {
    print($color . PHP_EOL);
}

echo '--------' . PHP_EOL;

// ---------

print(array_pop($colors) . str_repeat(PHP_EOL, 2));
var_dump($colors);

echo '--------' . PHP_EOL;

// ---------

$ages = array(23, 31, 55);

$average = array_sum($ages) / count($ages);

print("Average is: $average\n")
?>
