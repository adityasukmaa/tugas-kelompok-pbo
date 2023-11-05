<?php

    include_once "Kendaraan.php";

    class Sepeda implements Kendaraan 
    {
        public function melaju(): void
        {
            echo "Sepeda Melaju";
        }

        public function mengerem(): void
        {
            echo "Sepeda Mengerem";
        }
    }

?>
