<?php

Class zmogus
{
    public $vardas;
    public $pavarde;

    function __construct($vardas, $pavarde)
    {
        $this->vardas = $vardas;
        $this->pavarde = $pavarde;
    }

    function vardaspavarde()
    {
        return $this->vardas . '' . $this->pavarde;
    }
}

$zmogus1 = new zmogus ('Jonas', "Jonaitis");
$zmogus2 = new zmogus ('Petras', 'Petraitis');
$zmogus3 = new zmogus ('Rapolas', 'Rapolauskas');
?>