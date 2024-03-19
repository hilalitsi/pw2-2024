<?php
include_once 'class_balok.php';

    // Membuat objek pertama
    $balok1 = new Balok(29, 16, 7);
    echo "Objek 1:\n";
    echo '<br>';
    echo "Luas: " . $balok1->getLuas() . "\n";
    echo '<br>';
    echo "Keliling: " . $balok1->getKeliling() . "\n";
    echo '<br>';
    echo "Volume: " . $balok1->getVolume() . "\n\n";
    echo '<br><br>';

    // Membuat objek kedua
    $balok2 = new Balok(10, 5, 3);
    echo "Objek 2:\n";
    echo '<br>';
    echo "Luas: " . $balok2->getLuas() . "\n";
    echo '<br>';
    echo "Keliling: " . $balok2->getKeliling() . "\n";
    echo '<br>';
    echo "Volume: " . $balok2->getVolume() . "\n\n";
    echo '<br><br>';

    // Membuat objek ketiga
    $balok3 = new Balok(15, 8, 6);
    echo "Objek 3:\n";
    echo '<br>';
    echo "Luas: " . $balok3->getLuas() . "\n";
    echo '<br>';
    echo "Keliling: " . $balok3->getKeliling() . "\n";
    echo '<br>';
    echo "Volume: " . $balok3->getVolume() . "\n\n";
    echo '<br><br>';

    // Membuat objek keempat
    $balok4 = new Balok(20, 10, 4);
    echo "Objek 4:\n";
    echo '<br>';
    echo "Luas: " . $balok4->getLuas() . "\n";
    echo '<br>';
    echo "Keliling: " . $balok4->getKeliling() . "\n";
    echo '<br>';
    echo "Volume: " . $balok4->getVolume() . "\n\n";
?>
