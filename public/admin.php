<?php    
    require __DIR__ . '/../lib/functions.php';
    getPart('header');
    $file = file_get_contents('../data/last_message.json');
    $info = json_decode($file);
    echo "<div class='card container text-center'>";
    echo "<p class='ard-text'>".$info->{'pseudo'}."</p>";
    echo "<p class='ard-text'>".$info->{'message'}."</p>";
    echo "</div>";
    getPart('footer');
?>