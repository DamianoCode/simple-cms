<?php session_start(); if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){ ?>
<center><? include('menu.php');?></center>
<?php
require('../config.php');

$link = mysqli_connect('localhost', DB_USERNAME, DB_PASSWORD, DB_NAME);

$metatitle=$_POST['metatitle'];
$metadesc=$_POST['metadesc'];
$tytul=$_POST['tytul'];
$krotkiopis = $_POST['krotkiopis'];
$tytulmenu=$_POST['tytulmenu'];
$tresc=$_POST['tresc'];
$krotkanazwa=$_POST['krotkanazwa'];

$zapytanie=mysqli_query($link,"INSERT INTO `strony` (`metatitle`,`metadesc`,`tytul`,`tytulmenu`,`krotkiopis`,`tresc`,`krotkanazwa`) VALUES ('$metatitle', '$metadesc','$tytul','$tytulmenu', '$krotkiopis','$tresc','$krotkanazwa')");
echo ('<br>Dodanie strony '.$tytul.' przebiegła pomyślnie');

} 
else { echo "Nie jestes zalogowany"; }?>