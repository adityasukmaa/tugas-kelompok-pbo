<?php 

    include_once "Mobil.php";
    include_once "Motor.php";
    include_once "Sepeda.php";
    include_once "Kereta.php";

    $mobil1 = new Mobil();

    echo $mobil1->melaju();
    echo "<br/>";
    echo $mobil1->mengerem();
    echo "<br/>";

    $motor1 = new Motor();

    echo $motor1->melaju();
    echo "<br/>";
    echo $motor1->mengerem();


    echo "<br/>";

    $sepeda1 = new Sepeda();

    echo $sepeda1->melaju();
    echo "<br/>";
    echo $sepeda1->mengerem();


    
    echo "<br/>";

    $kereta1 = new Kereta();

    echo $kereta1->melaju();
    echo "<br/>";
    echo $kereta1->mengerem();
