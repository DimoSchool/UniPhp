
<?php 

function draw_letter(string $s = "D",string $f = " "){
echo <<<TEXT
$s$s$s$s$f$f$f
$s$f$f$f$s$f$f
$s$f$f$f$f$s$f
$s$f$f$f$f$f$s
$s$f$f$f$f$s$f
$s$f$f$f$s$f$f
$s$s$s$s$f$f$f

TEXT;
}

?>
