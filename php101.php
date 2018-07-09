<?php

/*Sukurkite klasę automobilis su parametrais markė ir modelis.
Klasė turi funkciją, kuri atgrąžina šiuos duomenis.
Sukurkite šios klasės objektą.
Iškvieskite jos funkciją duomenų išvedimui.
*/

Class auto
{
    public $marke;
    public $modelis;


    function gatavas()
    {
        return $this->marke . '' . $this->modelis;

    }
}

$auto1 = new auto();
$auto1->marke = 'Zil';
$auto1->modelis = 'l1';
echo $auto1->gatavas();
?>