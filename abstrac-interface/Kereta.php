<?php

    include_once "Kendaraan.php";

    class Kereta implements Kendaraan 
    {
        public function melaju(): void
        {
            echo "Kereta Melaju";
        }

        public function mengerem(): void
        {
            echo "Kereta Mengerem";
        }
    }

?>
