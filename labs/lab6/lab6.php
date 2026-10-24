This is my lab 6:

<?php 

do {
    $input = readline("Enter word: ");

} while (ctype_lower(substr($input, 0, 1)));
// } while (!str_starts_with(ucfirst($input), $input));
// } while (substr($input, 0, 1) != ucfirst(substr($input, 0, 1)));

// ----------

while (true) {
    $input2 = readline("Enter word/number: ");

    if (is_numeric($input2)) {
        break;
    }
}

// ----------

for ($i = 1; $i <= 21; $i++) {
    if ($i % 3 != 0) {
        continue;
    }

    echo $i . "\n";
}

?>
