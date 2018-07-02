<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>pirmas tinklapis</title>
   

</head>
<body>


<?php
// php7 task1
$a = array(5, 6, 10, 15);
$b =  array(8,5, 3, 25);

function skaiciuot ($a, $b) {
    $count = count ($a);
    return (array_sum($a)/ $count) - (array_sum($b)/$count);
}
echo skaiciuot ($a, $b);


?>


<?php
// php7 task2
$number = array ();        
function divisor()
{
    foreach (range(0,1000) as $number) {
        $divisors = [];
        for ($i = 1; $i < $number; $i++)
        {
            if (($number % $i) == 0)
            {
                $divisors [] = $i;

            }
        }
        if ($number == array_sum($divisors) && $number>0){
            echo " $number yra Tobulasis skaicius <br>"; }
        else {echo "";
        }
    }
}
divisor ($number);

?>