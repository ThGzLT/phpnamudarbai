<?php
/*
 * Susikurkite klasę Radar, kurioje būtų tokie atributai:
1. $date - Data ir laikas
2. $number - Automobilio numeris.
3. $distance - Nuvažiuotas atstumas metrais
4. $time - Sugaištas laikas sekundėmis

Panaudokime klasę Radar. Reikia susikurti metodą, kuris
paskaičiuotų greitį kilometrais per valandą.

Sukurkite masyvą iš 3-4 elementų ir išveskite automobilius
pagal greitį mažėjimo tvarka. Taip pat išveskite ir greičio
reikšmes vieno ženklo po kablelio tikslumu.
*/

class Radar
{
    public $date;
    public $number;
    public $distance;
    public $time;

    function __construct($date, $number, $distance, $time)
    {
        $this->date = $date;
        $this->number = $number;
        $this->distance = $distance;
        $this->time = $time;
    }

    function greitis()
    {
        $greiciai = $this->distance / $this->time;
    }
}

$masinos = [
    new radar ('2010-01-10', '1', 1000, 60),
    new radar ('2015-10-01', '2', 1500, 30),
    new radar ('2004-01-10', '3', 800, 20),
    new radar ('2001-01-10', '4', 600, 10)
];
foreach ($masinos as $key) {
    $key11 = $key->distance / $key->time;
    echo round($key11, 1);
    var_dump($key11);
}