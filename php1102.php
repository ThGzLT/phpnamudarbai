<?php
/*
PRATIMAS
21
Sukurkite klasę Ivykis, kurios atributai yra: pavadinimas, data.
(panaudoti DateTime).
Sukurkite klasę Istorija, kurios atributai yra: laikotarpio
pavadinimas, įvykiai (masyvas).
Sukurkite metodą klasėje Istorija, kuris atspausdina istoriją
lentelėje ir apskaičiuoja kiek laiko praėjo nuo kiekvieno
įvykio
*/

class Ivykis
{
    public $pavadinimas;
    public $data;


    function __construct($pavadinimas, $data)
    {


        $this->pavadinimas = $pavadinimas;
        $this->data = $data;
    }
}

$samagonas = new Ivykis ("Vilnius", "1995-01-10");
$samagonas = new DateTime('2010-01-10');
echo $samagonas->format("Y-m-d");
var_dump($samagonas);
echo $samagonas->data;


class Istorija
{
    public $laikotarpiopavadinimas;
    public $ivykiai = [];

    function __construct($laikotarpiopavadinimas, $ivykiai)
    {
        $this->laikotarpiopavadinimas = $laikotarpiopavadinimas;
        $this->ivykiai = $ivykiai;
    }

    function vardaspavarde()
    {
        return $this->laikotarpiopavadinimas . '' . $this->ivykiai;
    }

    function historycalc($history)
    {

        foreach ($history as $key) {

               if ($value = new DateTime());
                {
                    $dabar = date_create('2018-07-09');
                    $skirtumas = date_diff($dabar, $value);
                    echo $skirtumas;
                }
            }
        }

}

$history = [
    new Istorija ("renensansas", "1500-01-01"),
    new Istorija ("viduramziai", "1200-01-01")
];
foreach($history as $key) {
    echo $key->historycalc($history);
}
var_dump($history);
// echo $history->historycalc()->y;
