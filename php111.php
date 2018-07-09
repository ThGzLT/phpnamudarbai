<?php
/*
 * Sukurkite masyvą, kuriame būtų bent trys Zmogus klasės
objektai ir atspausdinkite visus žmones lentelėje.
Zmogus klasė atskirame faile.
 */
include "zmogus.php";
echo $zmogus1->vardaspavarde();
$array = array(
    array($zmogus1),
    array($zmogus2),
    array($zmogus3)
);
foreach ($array as $key) {
    foreach ($key as $key1) {
        echo $key1->vardaspavarde(); //$key1-> iskviesti stringa
    }
}
?>


