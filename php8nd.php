<?php
/*Parašykite funkciją skaliariškai sudauginančią du vektorius
(vienmačius masyvus).
Patikrinkite funkcijos rezultatą su šiais dviem vektoriais
(5, 6, 10, 15) ir (8, 5, 3, 25).
Rezultatas: 475.
Info: https://lt.wikipedia.org/wiki/Skaliarinė_sandauga */


$a =  [5,6,10,15];
$b =  [8,5,3,25];
function skale ($a, $b){
    $i = [0,1,2,3];
    foreach ($i as $key) {
        $x = $a[$key] * $b[$key];
        $z[] = $x;
    }

    echo array_sum($z);
}
echo skale ($a, $b);

?>
<?php
/* Sukurkite žmonių masyvą su duomenimis žmonių duomenimis:
vardas, pavardė, asmens kodas.
Sukurkite antrą tokį patį masyvą tik su skirtingais duomenimis.
Pridėkite antro masyvo elementus į pirmojo galą panaudodami
minėtus du būdus.
Po to pašalinkite šiuos elementus ir pridėkite prie masyvo
pradžios.
*/
$zmones1 = [
["Petras", "Petraitis", 25251512012],
["Anupras", "Dirvele", 415126263561],
["Jonas", "Jonaitis", 321212626262],
];
$zmones2 = [
["Rapolas", "Prapolas", 2156481455],
["Juozas", "Juozapavicius" , 8292161262 ],
["Kazys", "Kazlauskas", 32154562626],
];
var_dump($zmones1);

for ($i = 0; $i < count($zmones2); $i++) {

array_push($zmones1, $zmones2[$i]);
}

for ($i = 0; $i < count($zmones2); $i++) {

$zmones1 [] = $zmones2[$i];
}
var_dump($zmones1);

array_splice ($zmones1, 3);
var_dump($zmones1);

for ($i = 0; $i < count($zmones2); $i++) {

array_unshift($zmones1, $zmones2[$i]);
}

var_dump($zmones1);
$a = [
    '49001010123' => [
        'vardas' => 'Jonas',
        'pavarde' => 'Jonaitis',
        'gdata' => '1990-01-01'
    ],
    '37502055584' => [
        'vardas' => 'Petras',
        'pavarde' => 'Petraitis',
        'gdata' => '1985-02-05'
    ],
    '89001010123' => [
        'vardas' => 'Jonas',
        'pavarde' => 'Jonaitis',
        'gdata' => '1990-01-01'
    ],
    '375020515584' => [
        'vardas' => 'Antanas',
        'pavarde' => 'Petraitis',
        'gdata' => '1985-02-05'
    ],
];

foreach ($a as $key => $value) {
if (substr($key, 0, 1) === '3') {
unset($a[$key]);
}
}

echo "atrinkti atributai";
var_dump($a);
?>

<?php
/* 1. Turime masyvą $a = [‘Jonas’, ‘Petras’, ‘Antanas’,‘Povilas’].
//Atspausdinkite visas galimas skirtingas poras laikant, kad pvz
//poros ‘Jonas’ - ‘Petras’ ir ‘Petras’ - ‘Jonas’ yra tokios pat. */


$a = ['Jonas', 'Petras' , 'Antanas','Povilas'];
foreach ($a as $value) {
    foreach ($a as $value1) {
        if ($value != $value1) {
            echo "$value bei $value1<br>";
        }
    }
}
?>


<?php
/*
 * 2. Ta pati sąlyga tik pvz poros ‘Jonas’ - ‘Petras’ ir ‘Petras’ - ‘Jonas’
yra laikomos skirtingomis.
 */
$a = ['Jonas', 'Petras' , 'Antanas','Povilas'];
foreach ($a as $value) {
    foreach ($a as $value1) {
        if ($value < $value1) {
            echo "$value bei $value1<br>";
        }
    }
}
?>
<?php
/* 3. Turime daugiamatį masyvą, kuris aprašo kažką panašaus į
Excel lentelę arba matricą, t.y. pirmas indeksas žymi eilutę, o
antras stulpelį. Eilutės gali turėti skirtingą elementų (stulpelių)
skaičių. Suskaičiuokite stulpeliuose esančių skaičių sumas ir
išveskite didžiausią.
*/
$a = [[1, 3, 4],
    [2, 5],
    [2 => 3, 5 => 8],
    [1, 1, 5 => 1]];
$max = 0;
foreach ($a as $eilute) {
    foreach ($eilute as $key => $value) {
        if (($skaiciavimas[$key] += $value) > $max){
            $max = $skaiciavimas[$key];
        }
    }
}
var_dump ($skaiciavimas);
echo $max;
?>
