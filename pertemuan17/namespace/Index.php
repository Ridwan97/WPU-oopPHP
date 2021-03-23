<?php 

require_once 'App/init.php';

// $produk1 = new komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
// $produk2 = new game("Uncharted", "Neil Duckmann", "Sony Computer", 250000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();

use App\Services\User as ServicesUser;
use App\Produk\User as ProdukUser;

new App\Produk\User();
echo "<br>";
new App\Services\User();