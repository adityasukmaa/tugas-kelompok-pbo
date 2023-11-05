<?php

    include_once "Kendaraan.php";

    class Motor implements Kendaraan 
    {
        public function melaju(): void
        {
            echo "Motor Melaju";
        }

        public function mengerem(): void
        {
            echo "Motor Mengerem";
        }
    }

?>
