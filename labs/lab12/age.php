This is my lab 12:


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age sticky form</title>
    <style>
        form {
            border: solid 1px black;
            padding: 1rem;
        }
    </style>
</head>
<body>

    <!-- FROM 1 -->
    <p style="font-weight: bold;">Age form:</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" >

        <?php 
            if (!$_POST) {
                $age_display = '';
            } else {
                $age_display = $_POST['age'];
            }
        ?>
        
        <label for="age">Age:</label>
        <input id="age" type="text" name="age" value="<?= $age_display ?>">
        
        <button type="submit">Submit</button>
    </form>

    <!-- Message -->
    <?php
        if ($_POST) {
            if (filter_var($age_display, FILTER_VALIDATE_INT)) {
                echo "<p>You entered <b> $age_display </b>as age.</p>";
            } else {
                echo "You entered invalid value!";
            }
        } 

    ?>
    
</body>
</html>
