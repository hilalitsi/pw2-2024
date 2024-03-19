<?php
    include_once 'class_balok.php';

    $balok1 = new Balok(29, 16, 7);
    echo "Objek 1:\n<br>";
    echo "Luas: " . $balok1->getLuas() . "\n<br>";
    echo "Keliling: " . $balok1->getKeliling() . "\n<br>";
    echo "Volume: " . $balok1->getVolume() . "\n\n<br><br>";

    // Membuat objek kedua
    $balok2 = new Balok(10, 5, 3);
    echo "Objek 2:\n<br>";
    echo "Luas: " . $balok2->getLuas() . "\n<br>";
    echo "Keliling: " . $balok2->getKeliling() . "\n<br>";
    echo "Volume: " . $balok2->getVolume() . "\n\n<br><br>";

    // Membuat objek ketiga
    $balok3 = new Balok(15, 8, 6);
    echo "Objek 3:\n<br>";
    echo "Luas: " . $balok3->getLuas() . "\n<br>";
    echo "Keliling: " . $balok3->getKeliling() . "\n<br>";
    echo "Volume: " . $balok3->getVolume() . "\n\n<br><br>";

    // Membuat objek keempat
    $balok4 = new Balok(20, 10, 4);
    echo "Objek 4:\n<br>";
    echo "Luas: " . $balok4->getLuas() . "\n<br>";
    echo "Keliling: " . $balok4->getKeliling() . "\n<br>";
    echo "Volume: " . $balok4->getVolume() . "\n\n";