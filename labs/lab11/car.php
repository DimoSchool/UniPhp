<html>
<body>

<?php 
$metallic_paint = $fog_lights = $reversing_camera = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    echo '<p>You want your car to have:</p>';
    echo '<ul>';

    foreach ($_POST as $option) {
        echo "<li>$option</li>";
    }
    echo '</ul>';

}
?>
</body>
</html>
