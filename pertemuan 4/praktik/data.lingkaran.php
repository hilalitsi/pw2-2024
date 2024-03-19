<?php

    require_once 'class.lingkaran.php';

    echo'Nilai PHI - ' . Lingkaran::PHI;

    $Lingkar1 = new Lingkaran(0);
    $Lingkar2 = new Lingkaran(27);

    echo '<br><br>';
    echo '<br>Luas Lingkaran1 adalah ' . $Lingkar1->getLuas() . 'cm'; 
    echo '<br>Luas Lingkaran2 adalah ' . $Lingkar2->getLuas() . 'cm';
    
    //keliling
    echo '<br>';
    echo '<br>Keliling Lingkaran1 adalah ' . $Lingkar1->getKeliling() . 'cm'; 
    echo '<br>Keliling Lingkaran2 adalah ' . $Lingkar2->getKeliling() . 'cm'; 

    


?>