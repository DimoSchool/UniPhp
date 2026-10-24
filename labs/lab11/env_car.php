<html>
<body>

<?php 
$env_friendly = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $env_friendly = filter_var(
        $_POST['env-friendly'],
        FILTER_VALIDATE_BOOLEAN,
        FILTER_NULL_ON_FAILURE
    );

    if ($env_friendly) {
        echo 'We suggest you <b>Electric car</b>.';
    } else {
        echo 'We suggest you <b>Gas car</b>.';
    }
}
?>

    


</body>
</html>
