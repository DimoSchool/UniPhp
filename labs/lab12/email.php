This is my lab 12:


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email sticky form</title>
    <style>
        form {
            border: solid 1px black;
            padding: 1rem;
        }
    </style>
</head>
<body>

    <!-- FROM 1 -->
    <p style="font-weight: bold;">Email form:</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" >

        <?php 
            if (!$_POST) {
                $email_display = '';
            } else {
                $email_display = $_POST['email'];
            }
        ?>
        
        <label for="email">Email:</label>
        <input id="email" type="text" name="email" value="<?= $email_display ?>">
        
        <button type="submit">Submit</button>
    </form>

    <!-- Message -->
    <?php
        if ($_POST) {
            if (filter_var($email_display, FILTER_VALIDATE_EMAIL)) {
                echo "<p>You entered <b> $email_display </b>as valid email.</p>";
            } else {
                echo "You entered invalid email!";
            }
        } 
    ?>
    
</body>
</html>
