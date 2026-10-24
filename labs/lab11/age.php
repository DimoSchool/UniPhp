<html>
<body>

<?php 
$age = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $age = $_POST['age'];

    if (filter_var($age, FILTER_VALIDATE_INT)) {
        echo 'Your age is: ' .  $_POST['age'];
    } else {
        echo 'You entered invalid value';
    }
}
?>

    


</body>
</html>
