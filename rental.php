<?php 

// 1. parent
class Rental {
    // poin 1
    private $hargaSewaPerHari;

    // poin 2
    // menentukan harga
    public function setHargaSewa($harga) {
        $this->hargaSewaPerHari = $harga;
    }

    //mengambil harga
    public function getHargaSewa() {
        return $this->hargaSewaPerHari;
    }

    public function hitungDiskon($lamaSewa) {
        return 0;
    }
}

// 2. child rental mobil
class RentalMobil extends Rental {
    public function hitungDiskon($lamaSewa) {
        return ($lamaSewa > 3) ? "Dapat Diskon 10%" : "Tidak mendapatkan diskon";
    }
}

// 2. child rental motor 
class RentalMotor extends Rental {
    public function hitungDiskon($lamaSewa) {
       return ($lamaSewa > 3) ? "Dapat Diskon 5%" : "Tidak mendapatkan diskon";
    }
}

// 5. instansiasi
$mobil = new RentalMobil();
$mobil->setHargaSewa(300000);
echo "Harga sewa mobil: Rp " . $mobil->getHargaSewa() . "<br>";
echo "Status diskon (6 hari): " . $mobil->hitungDiskon(6) . "<br>";

echo "<hr>";

$motor = new RentalMotor();
$motor->setHargaSewa(60000);
echo "Harga sewa motor: Rp " . $motor->getHargaSewa() . "<br>";
echo "Status diskon (1 hari): " . $motor->hitungDiskon(1);

?>
