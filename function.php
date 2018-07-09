<?php
include "array.php";


function sveikinimas($data)
{
    foreach ($data as $key) {
        foreach ($key as $key1) {
            $keyz = 2018 - $key1;
            if ($keyz == 2018) {
                echo "";
            } else {
                echo $keyz ;
            }
        }
    }
}


?>
