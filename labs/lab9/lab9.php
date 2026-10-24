This is my lab 9:

<?php 


$file = __DIR__ . '/limerick.txt';

$limerick = array(
    'There once was a coder named Byte,',
    'Whose code would run well day or night.',
    'It printed a line,',
    'And worked super fine,',
    'And never got stuck in a fright.'
);

foreach ($limerick as $str) {
    file_put_contents($file, "$str\n", FILE_APPEND);
}

echo '--------' . PHP_EOL;
// --------

$url = 'https://jsonplaceholder.typicode.com/posts/1';

$response = file_get_contents($url);

$data = json_decode($response, true);

var_dump($data);

echo '--------' . PHP_EOL;
// --------


$dir = __DIR__ . '/data/';
$fileNamePattern = '*.txt';
$files = glob($dir . $fileNamePattern);

$outputFile = __DIR__ . '/total.txt';
touch($outputFile);
unlink($outputFile);

$total = 0;
foreach ($files as $file) {
    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $firstName = $lines[0];
    $lastName = $lines[1];
    $scoreString = $lines[2];
    $score = intval($scoreString);

    $outputFileHandle = fopen($outputFile, 'a');
    fwrite($outputFileHandle, "Player = $firstName $lastName / Score = $score\n");
    fclose($outputFileHandle);

    $total += $score;
}

$outputFileHandle = fopen($outputFile, 'a');
fwrite($outputFileHandle, "total of all scores = $total");
fclose($outputFileHandle);

print file_get_contents($outputFile) . PHP_EOL;
?>
