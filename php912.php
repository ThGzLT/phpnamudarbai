<?php
/*
  3. Turime mokinių sąrašą su dalykais ir gautais pažymiais už tuos dalykus, pvz.:
$mokiniai = [
[vardas => “Jonas”, pazymiai => [
lietuviu => [4, 8, 6, 7], anglu => [6, 7, 8],
matematika => [3, 5, 4]]],
[vardas => “Ona”, pazymiai => [
lietuviu => [10, 9, 10], anglu => [9, 8, 10],
matematika => [10, 10, 9, 9]]],
... ];
Suskaičiuokite kuris geriausiai mokosi pagal visų dalykų pažymių
vidurkius. Dalyko pažymio nustatymui reikės panaudoti funkciją
round()
 */
$mokiniai = array(
    array("vardas" => "Jonas",
        pazymiai => array
        ("lietuviu" => array(4, 8, 6, 7),
            "anglu" => array(6, 7, 8),
            "matematika" => array(3, 5, 4)
        )
    ),
    array(vardas => "Ona",
        pazymiai => array
        ("lietuviu" => array(10, 9, 10),
            "anglu" => array(9, 8, 10),
            "matematika" => array(10, 10, 9, 9)

        )
    )
);
//echo $mokiniai[1]['vardas'] ."". $mokiniai[0]['pazymiai']["anglu"][1];
function Svabra($mokiniai)
{
    $a = round(array_sum($mokiniai[1]['pazymiai']["anglu"]) / sizeof($mokiniai[1]['pazymiai']["anglu"]));
    $b = round(array_sum($mokiniai[1]['pazymiai']["lietuviu"]) / sizeof($mokiniai[1]['pazymiai']["lietuviu"]));
    $c = round(array_sum($mokiniai[1]['pazymiai']["matematika"]) / sizeof($mokiniai[1]['pazymiai']["matematika"]));
    $d = $a + $b + $c;

    $f = round(array_sum($mokiniai[0]['pazymiai']["anglu"]) / sizeof($mokiniai[1]['pazymiai']["anglu"]));
    $g = round(array_sum($mokiniai[0]['pazymiai']["lietuviu"]) / sizeof($mokiniai[1]['pazymiai']["lietuviu"]));
    $h = round(array_sum($mokiniai[0]['pazymiai']["matematika"]) / sizeof($mokiniai[1]['pazymiai']["matematika"]));
    $r = $f + $g + $h;

    if ($d > $r) {
        echo "Onute geriau varo $d";
    } else {
        "Petras geriau varo $r";
    }
}

svabra($mokiniai);