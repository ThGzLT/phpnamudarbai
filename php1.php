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
function ar($number)
{
    $divisors = [];
    for ($i = 1; $i < $number; $i++) {
        if ($number % $i == 0) {
            $divisors [] = $i;
        }
    }
    return $divisors;
}

function daliklis1($number1, $number)
{
    if ($number1 == $number) {
        return true;
    }
    return false;
}

foreach (range(1, 1000) as $key) {
    $sum = array_sum(ar($key));
    if (daliklis1($sum, $key)) {
        echo $key . ' ';
    }
}
?>
