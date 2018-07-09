<?php
// Atspausdinkite visas galimas skirtingas poras vyras - moteris
$zmones = [
    ['vardas' => 'Jonas', 'lytis' => 'V'],
    ['vardas' => 'Ona', 'lytis' => 'M'],
    ['vardas' => 'Petras', 'lytis' => 'V'],
    ['vardas' => 'Marytė', 'lytis' => 'M'],
    ['vardas' => 'Eglė', 'lytis' => 'M']
];
foreach ($zmones as $key => $value) {
    foreach ($zmones as $key1 => $value1) {
        if ($value === $value1) {
            echo "";
        } else {
            echo  $value['vardas'] . "bei " . $value1['vardas']; '<br>';
        }
    }
}
?>


