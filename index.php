<?php
    require "generate_pass.php";
    require "json.php";
    require "csv.php";

   
    $funkce = filter_input(INPUT_GET, 'funkce', FILTER_SANITIZE_SPECIAL_CHARS);
    $format = filter_input(INPUT_GET, 'format', FILTER_SANITIZE_SPECIAL_CHARS);
    $nums = filter_input(INPUT_GET, 'n');

    $vysledek = $funkce($nums);
    $output = $format($vysledek);
    
?>