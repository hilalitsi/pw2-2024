<?php

    require_once 'class_kasus.php';

    // object
    $ronaldo = new Ronaldo('Cristiano Ronaldo', 'Portugal', 'Center Forward');
    $messi = new Messi('Lionel Messi', 'Argentina', 'Right Wing');
    $neymar = new Neymar('Neymar Junior', 'Brazil', 'Left Wing');

    //echo
    echo "Info Pemain:<br>";
    $ronaldo->getInfoRonaldo();
    echo "<br>";

    echo "Info Pemain:<br>";
    $messi->getInfoMessi();
    echo "<br>";

    echo "Info Pemain:<br>";
    $neymar->getInfoNeymar();

?>