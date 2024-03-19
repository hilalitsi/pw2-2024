<?php
class Calculator {
    private $bilangan1;
    private $bilangan2;

    public function __construct($bil1, $bil2) {
        $this->bilangan1 = $bil1;
        $this->bilangan2 = $bil2;
    }

    public function pertambahan() {
        return $this->bilangan1 + $this->bilangan2;
    }

    public function pengurangan() {
        return $this->bilangan1 - $this->bilangan2;
    }

    public function pembagian() {
        if ($this->bilangan2 == 0) {
            return "Tidak bisa dibagi dengan nol";
        } else {
            return $this->bilangan1 / $this->bilangan2;
        }
    }

    public function perkalian() {
        return $this->bilangan1 * $this->bilangan2;
    }
}

    // Buat object dan tampilkan masing-masing method
    $calculator = new Calculator(10, 5);
    echo "Hasil Pertambahan: " . $calculator->pertambahan() . "\n";
    echo '<br>';
    echo "Hasil Pengurangan: " . $calculator->pengurangan() . "\n";
    echo '<br>';
    echo "Hasil Perkalian: " . $calculator->perkalian() . "\n";
    echo '<br>';
    echo "Hasil Pembagian: " . $calculator->pembagian() . "\n";
    echo '<br>';
?>