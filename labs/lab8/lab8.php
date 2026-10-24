This is my lab 8:

<?php 

$heights = array('Fred'=>1.82, 'Joe'=>1.55, 'Robin'=>1.7);

foreach ($heights as $name => $height) {
    print("$name:\t$height\n");
}

echo '--------' . PHP_EOL;
// -------

$movies = array(
    'Back to the future' => [
        'duration' => 116,
        'leadingActor' => 'Micael J. Fox'
    ],
    'The Fifth Element' => [
        'duration' => 126,
        'leadingActor' => 'Bruce Willis'
    ],
    'Alien' => [
        'duration' => 117,
        'leadingActor' => 'Sigourney Weaver'
    ],
);

var_dump($movies);

echo '--------' . PHP_EOL;
// -------

$odd = array(1, 3, 5, 7, 9);
$even = array(2, 4, 6, 8);

$numbers = [...$odd, ...$even];

sort($numbers);
print_r($numbers);


?>
