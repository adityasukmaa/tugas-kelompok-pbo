<?php

    include_once "Kendaraan.php";

    class Mobil implements Kendaraan 
    {
        public function melaju(): void
        {
            echo "Mobil Melaju";
        }

        public function mengerem(): void
        {
            echo "Mobil Mengerem";
        }
    }

?>
