<?php
/*
 * Sukurkite masyvą iš 3-4 elementų ir išveskite juos pagal datos
lauką nuo vėliausio iki anksčiausio, t.y. mažėjimo tvarka.
 */

$date = [
    new DateTime("1600-01-05"),
    new DateTime("1100-01-05"),
    new DateTime("1400-01-05"),
    new DateTime("1200-01-05")];

asort($date);
print_r($date);