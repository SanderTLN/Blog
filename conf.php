<?php
$serverinimi="localhost";
$kasutajanimi="mihol";
$parol="123456";
$andmebaas="admintool";
$yhendus=new mysqli($serverinimi, $kasutajanimi, $parol, $andmebaas);
$yhendus->set_charset('UTF8');

if($yhendus === false){
    die("ERROR: Could not connect. " . new mysqli());
}

?>