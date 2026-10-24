<?php

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$file = __DIR__ . $path;

if (is_dir($file)) {
    $items = scandir($file);

    echo "<h1>Index of " . htmlspecialchars($path) . "</h1><ul>";

    foreach ($items as $item) {
        if ($item === '.') {
            continue;
        }

        $url = rtrim($path, '/') . '/' . rawurlencode($item);
        echo '<li><a href="' . htmlspecialchars($url) . '">'
            . htmlspecialchars($item) . '</a></li>';
    }

    echo '</ul>';
    return true;
}

return false;