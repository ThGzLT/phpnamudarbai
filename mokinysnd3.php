<?php
/*
 * Tarkime turime masyvą objektų Mokinys. Reikia
atspausdinti mokinių vardus ir pavardes su jų trimestro
vidurkiu į html lentelę vidurkio mažėjimo tvarka.
Mokinys klasė – vardas, pavardė.
Mokinys paveldi Trimestras klasę – dalykų masyvas
su pažymiais, kur indeksas dalyko pavadinimas
 */
class trimestras
{
    public $trimestras;
    function __construct($trimestras)
    {
        $this->trimestras = $trimestras;
    }
    function trvid($mokinys1)
    {
        echo array_sum($mokinys1->trimestras) / sizeof($mokinys1->trimestras);
    }
}
class mokinys extends trimestras
{
    public $vardas;
    public $pavarde;
    function __construct($trimestras, $vardas, $pavarde)
    {
        parent::__construct($trimestras);
        $this->vardas = $vardas;
        $this->pavarde = $pavarde;
    }
    public function trivid()
    {
        return round(array_sum($this->trimestras) / count($this->trimestras));
    }
    function vardaspavarde()
    {
        return $this->vardas . '' . $this->pavarde;
    }
}
$array = [
    $mokinys1 = new mokinys (['lietuviu' => 9, 'matematika' => 10, 'anglu' => 10], "anupras", "dirvele"),
    $mokinys1 = new mokinys (['lietuviu' => 8, 'matematika' => 7, 'anglu' => 9], 'kazimieras', 'kazdulis'),
    $mokinys1 = new mokinys (['lietuviu' => 6, 'matematika' => 10, 'anglu' => 6], "birute", 'skupaila')
];
$tuscias = [];
foreach ($array as $mokinys) {
    $masyvas = [];
    array_push($masyvas, $mokinys->vardaspavarde(), $mokinys->trivid());
    array_push($tuscias, $masyvas);
}
array_multisort(array_column($tuscias, '1'), SORT_ASC, $tuscias);
echo '<table><thead><tr><th>VardasPavarde</th><th>Vidurkis</th></tr></thead>';
foreach ($tuscias as $value) {
    echo '<tr><td>' . $value[0] . '</td><td>' . $value[1] . '</td><td>' . $value[2] . '</td></tr>';
}
echo '</table>';
echo '<hr>';
/*
foreach ($array as $key) {
    foreach ($key as $key1) {
        if ($key = "string"){
            continue;

        }
    }
    $x = array_sum($key1);

    for ($r=0; $r <=2; $r++) {
        echo $x . '' . $array[$r]->vardaspavarde();
    }

}

var_dump($array[1]);
echo $array[1]->vardaspavarde();
*/
?>