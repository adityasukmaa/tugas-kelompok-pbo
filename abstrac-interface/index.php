<?php 

    include_once "Mobil.php";
    include_once "Motor.php";

    $mobil1 = new Mobil();

    echo $mobil1->melaju();
    echo "<br/>";
    echo $mobil1->mengerem();
    echo "<br/>";

    $motor1 = new Motor();

    echo $motor1->melaju();
    echo "<br/>";
    echo $motor1->mengerem();

?>