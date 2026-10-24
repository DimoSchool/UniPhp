This is my lab 11:


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Costume rental form</title>
    <style>
        form {
            border: solid 1px black;
            padding: 1rem;
        }
    </style>
</head>
<body>

    <!-- FROM 1 -->
    <p style="font-weight: bold;">Superhero form:</p>
    <form action="./costumeSearch.php" method="GET" >
        <label for="superhero-name">Superhero name:</label>
        <input id="superhero-name" type="text" name="superhero-name">
        <button type="submit">Submit</button>
    </form>

    
    <!-- FROM 2 -->
    <p style="font-weight: bold;">Login form:</p>
    <form action="./login.php" method="POST" enctype="multipart/form-data">
        <label for="username">Username:</label>
        <input id="username" type="text" name="username">
        <label for="password">Username:</label>
        <input id="password" type="password" name="password">
        <button type="submit">Submit</button>
    </form>

    
    <!-- FROM 3 -->
    <p style="font-weight: bold;">Age form:</p>
    <form action="./age.php" method="POST" enctype="multipart/form-data">
        <label for="age">Age:</label>
        <input id="age" type="number" name="age" step="0.01">
        <button type="submit">Submit</button>
    </form>


    <!-- FROM 4 -->
    <p style="font-weight: bold;">Car form:</p>
    <form action="./env_car.php" method="POST" enctype="multipart/form-data">
        <p>You want environmentally friendly car?</p>
        
        <label for="env-friendly">No</label>
        <input id="env-friendly" type="radio" name="env-friendly" value="false">

        <label for="env-friendly">Yes</label>
        <input id="env-friendly" type="radio" name="env-friendly" value="true">
        
        <button type="submit">Submit</button>
    </form>


    <!-- FROM 5 -->
    <p style="font-weight: bold;">Car form:</p>
    <form action="./car.php" method="POST" enctype="multipart/form-data">
        <p>Customise your car:</p>

        <input type="checkbox" id="metallic-paint" name="metallic-paint" value="Metallic paint">
        <label for="metallic-paint"> metallic paint</label><br>

        <input type="checkbox" id="fog-lights" name="fog-lights" value="Fog lights">
        <label for="fog-lights"> fog lights</label><br>

        <input type="checkbox" id="reversing-camera" name="reversing-camera" value="Reversing camera">
        <label for="reversing-camera"> reversing-camera</label><br><br>

        
        <button type="submit">Submit</button>
    </form>
</body>

</html>