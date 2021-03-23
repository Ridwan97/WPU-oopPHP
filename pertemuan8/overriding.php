<?php 

class Produk {
	public 	$judul,
			$penulis,
			$penerbit,
			$harga;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoProduk() {
		// Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000) - 100 halanan.
		$str = " {$this->judul} | {$this->getLabel()} ( Rp. {$this->harga})" ;
		
		return $str;
	}

}

class komik extends Produk {
	public $jmlHalaman;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ){

		parent::__construct ($judul, $penulis , $penerbit, $harga);
		$this->jmlHalaman = $jmlHalaman;

	}

	public function getInfoProduk() {
		$str = "komik : ". parent::getInfoProduk() . " ~ {$this->jmlHalaman} Halaman. ";
		return $str ;
	}
}

class game extends Produk {

	public $waktuMain;

	public function __construct ($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0 ){
		parent::__construct ($judul, $penulis, $penerbit , $harga );

		$this->waktuMain = $waktuMain;
	}

	public function getInfoProduk() {
		$str = "game :" . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
		return $str;
	}
}

class CetakInfoProduk {
	public function cetak( Produk $produk) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str ;
	}
}


$produk1 = new komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new game("Uncharted", "Neil Duckmann", "Sony Computer", 250000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();


?>