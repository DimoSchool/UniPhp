This is my lab 4:

<?php 

$name = 'Dimo';

if (strlen($name) > 4) {
    print("$name is a long name\n");
} else {
    print("$name is a short name\n");
}

// --------

$laundryWeightKg = 8;

if (strlen($name) < 9) {
    print("$laundryWeightKg kg of laundry fits in regular machine.\n");
} else {
    print("$laundryWeightKg kg of laundry fits in medium to large machines.\n");
}

// --------

$favcolor = "bicycle";

switch ($favcolor) {
    case "bus":
        echo "beep beep\n";
        break;
    case "train":
        echo "Runs on tracks\n";
        break;
    case "car":
        echo "has at least three wheels\n";
        break;
    case "helicopter":
        echo "can fly\n";
        break;
    case "bicycle":
        echo "can not forget once you learned\n";
        break;
    default:
        echo "you do not have tranport\n";
}

// --------

echo "Login in your Sustem: \n";

$login = readline("Login: ");
$password = readline("Password: ");

if ($login == "dimo" and $password == "nika") {
    echo "You logged in successfully!\n";
} else {
    echo "Wrong creds :(\n";
}    

?>
