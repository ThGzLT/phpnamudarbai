<?php
/*
Papildykite Mokinys klasę tekstiniu atributu gimimoData, t.y. jo
reikšmė bus pvz ‘2001-10-31’.
Sukurkite Mokinys klasei metodą, kuris grąžintų sveiką skaičių kiek
mokiniui yra metų, pvz. 17 (16,5 → 16).
Sukurkite kelių (3-4) mokinių masyvą ir atspausdinkite html
lentelėje tik tuos mokinius kurie turi 18 metų ir daugiau
*/

class Mokinys
{
    public $vardas;
    public $pavarde;
    public $gimimodata;

    function __construct($vardas, $pavarde, $gimimodata)
    {
        $this->vardas = $vardas;
        $this->pavarde = $pavarde;
        $this->gimimodata = date_create($gimimodata);
    }

    function Gdata($mokiniai)
    {
        $dabar =date_create( '2018-07-09');
        return round(date_diff($dabar, $this->gimimodata));
    }

    function astnlk($mokiniai)
    {
        foreach ($mokiniai as $key) {
            if ($key->Gdata() >= 18)
                echo $key;
            else {
                echo "";
            }
        }
    }
}

$mokiniai = [
    new Mokinys ("anzelmas", "Karabasas", '1999-01-01'),
    new Mokinys ("Anupras", "Kuprele", '2010-01-04'),
    new Mokinys ("Kuprotas", "Klevas", '2000-01-10'),
    new Mokinys ("Kazys", "Jegele", '2008-01-30')
];

var_dump($mokiniai);
print_r($mokiniai->Gdata($mokiniai));