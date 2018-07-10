<?php
/*
  * Sukurkite klasę Gyvunas su atributais: svoris, ugis.
Sukurkite klasę Suo su atributais: spalva, lytis ir
metodu išvesti visą informaciją.
Sukurkite konstruktorius.
Sukurkite klasės Suo objektą ir iškvieskite metodą
informacijai spausdinti
  */

class Gyvunas
{
    public $svoris;
    public $ugis;

    function __construct($svoris, $ugis)
    {

        $this->svoris = $svoris;
        $this->ugis = $ugis;
    }

    function svorisugis()
    {
        return $this->svoris . "" . $this->ugis;
    }

}

class Suo extends Gyvunas
{
    public $spalva;
    public $lytis;

    function __construct($svoris, $ugis, $spalva, $lytis)
    {
        parent::__construct($svoris, $ugis);
        $this->spalva = $spalva;
        $this->lytis = $lytis;
    }

    public function Suoinfo()
    {
        return $this->svoris . "" . $this->ugis . "" . $this->spalva . "" . $this->lytis;
    }

}

$laika = new Suo ('100kg', '1metras', 'raudona', 'mot');
echo $laika->Suoinfo();
?>