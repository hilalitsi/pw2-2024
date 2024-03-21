<?php

    class Pemain_bola {
        protected $nama;
        protected $asal;

        protected function __construct($nama, $asal) {
            $this->nama = $nama;
            $this->asal = $asal;
        }

        protected function getInfo() {
            echo 'Nama Pemain: ' . $this->nama . '<br>';
            echo 'Asal Negara: ' . $this->asal . '<br>';
        }
    }

    class Ronaldo extends Pemain_bola {
        public $posisi;


        public function __construct($nama, $asal, $posisi) {
            parent::__construct($nama, $asal);
            $this->posisi = $posisi;
        }

        public function getInfoRonaldo () {
            parent::getInfo();
            echo 'Posisi Pemain: ' . $this->posisi . '<br>';
        }
    }

    class Messi extends Pemain_bola {
        public $posisi;
        
        public function __construct($nama, $asal, $posisi) {
            parent::__construct($nama, $asal);
            $this->posisi = $posisi;
        }

        public function getInfoMessi () {
            parent::getInfo();
            echo 'Posisi Pemain: ' . $this->posisi . '<br>';        
        }
    }
    class Neymar extends Pemain_bola {
        public $posisi;
        
        public function __construct($nama, $asal, $posisi) {
            parent::__construct($nama, $asal);
            $this->posisi = $posisi;
        }

        public function getInfoNeymar () {
            parent::getInfo();
            echo 'Posisi Pemain: ' . $this->posisi . '<br>';        
        }
    }

?>