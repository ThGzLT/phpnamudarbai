<?php
/*
 * Tarkime Mokinys klasės $trimestras atributas turi tokio tipo
reikšmes:
[‘lietuviu’ => 8, ‘matematika’ => 9, ‘anglu’ => 8]
Parašykite klasei Mokinys metodą kuris grąžintų trimestro
vidurkį.
 */
class zmogus {
    public $vardas;
    public $pavarde;
    function __construct ($vardas, $pavarde) {
        $this->vardas = $vardas;
        $this->pavarde = $pavarde;
    }
    function vardaspavarde () {
        return $this->vardas . '' . $this->pavarde;
    }
}

class mokinys extends zmogus {
    public $lygis;
    public $trimestras;
    function __construct (  $lygis, $vardas, $pavarde) {
        parent::__construct($vardas, $pavarde);
        $this->lygis = $lygis;

    }
    function trvid($mokinys1) {

       echo array_sum($mokinys1->trimestras)/ sizeof($mokinys1->trimestras);
    }
}
$mokinys1 = new mokinys ("4b", "anupras", "dirvele");
$mokinys1->trimestras = ['lietuviu'=> 9, 'matematika'=> 10, 'anglu'=>10];
echo $mokinys1->vardaspavarde () . '' . $mokinys1->trvid($mokinys1);
var_dump($mokinys1);
var_dump($mokinys1->trimestras);