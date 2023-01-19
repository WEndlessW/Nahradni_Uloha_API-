<?php
    function csv_f($data){
        str_getcsv($data);
        echo "password: ", $data;
    }

?>