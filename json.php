<?php 

function json_f($data) {
    echo "{", '"password"',":", json_encode($data), "}";
}


?>