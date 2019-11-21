<?php
$array = array();
echo ("Wie zit er in de klas?" . PHP_EOL);
$naam = readline();
$array = $naam;
echo ("De studenten in de klas zijn:" . PHP_EOL);
print_r(explode(" ", $array, 100));
?>