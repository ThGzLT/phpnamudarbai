<?php
/*
 * Sukurkite masyvą iš 3-4 elementų ir išveskite juos pagal datos
lauką nuo vėliausio iki anksčiausio, t.y. mažėjimo tvarka.
 */

$data = [
    ['2010-01-10', '1', 1000, 60],
    ['2015-10-01', '2', 1500, 30],
    ['2004-01-10', '3', 800, 20],
    ['2001-01-10', '4', 600, 10]
];

array_multisort(array_column($data, '0'), SORT_DESC, $data);
var_dump($data);
foreach ($data as $key) {
    echo $key[0]. "<br>".$key[1]. "<br>". $key[2] ."<br>". $key[3];
    var_dump($key);
}
?>
