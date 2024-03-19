<?php

    class Car {
        // hak akses: public, private, protected
        public $brand;
        public $Color;


        // method
        function getBrand() {
            return $this->brand;
        }
        function getColor() {
            return $this->Color;
        }
    }

    // object
    $tesla = new Car();
    $supra = new Car();

    // set value / setter
    $tesla->brand = 'Tesla';
    $tesla->Color = 'Grey';
    $supra->brand = 'Supra';
    $supra->Color = 'Black';

    // echo
    echo $tesla->getBrand();
    echo '<br>';
    echo $tesla->getColor();
    echo '<br><br>';
    echo $supra->getBrand();
    echo '<br>';
    echo $supra->getColor();

?>