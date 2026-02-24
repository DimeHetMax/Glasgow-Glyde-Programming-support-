<?php
$title= 'Single dimentional Arrays';
include 'partials/header.php';

$names = ['Max', 'MaD', 'John', 'Dorian', 'Nikky'];
$age =[26,28,50, 65, 65];

// echo($names[0]);
// echo(count($names));
// echo(count($age));
// echo(min($age));
echo( round(array_sum($age) / count($age)));
?>

