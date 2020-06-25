<?php 

require_once 'init.php';

$sheep = new Animal("shaun");

echo $sheep->getName();
echo "<br>";
echo $sheep->getLegs();
echo "<br>";
echo $sheep->getColdBlooded(); // menggunakan string false bukan bool false supaya tercetak seperti contoh


echo "<br>";
echo "<hr>";
$kodok = new Frog("buduk", 4);
$kodok->jump() ; // "hop hop"

echo "<br>";
echo "<hr>";

$sungokong = new Ape("kera sakti");
$sungokong->yell(); // "Auooo"
