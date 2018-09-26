<?php
session_start();
$harga_pengiriman;
$totalharga;
$tgl=date('d-m-Y');
$pengiriman = $_POST["pengiriman"];
$belanjaan 	= $_POST["belanjaan"];
$alamat 	= $_POST["alamat"];	 
 echo "Tanggal Pembeliaan : $tgl <br><br>";
 echo "Data Alamat Pembeli: $alamat";
 echo "<p>Belanjaan yang dipilih:</p>";

foreach ($belanjaan as $nilai) {
	echo "- $nilai <br />";
}

	$totalBiaya = 0;

	if ($pengiriman=="JNE") {
	$harga_pengiriman = 8000;
}elseif ($pengiriman=="TIKI") {
	$harga_pengiriman = 12000;
}elseif ($pengiriman=="Grab"){
	$harga_pengiriman = 15000;
}

for ($i = 0; $i < count($belanjaan); $i++) { 
if ($belanjaan[$i] == "AC") {
		$harga = 3000000;
	} elseif($belanjaan[$i] == "Kulkas"){
		$harga = 9000000;
	} else {
		$harga = 2500000;
	}
	$totalBiaya = $totalBiaya + $harga;
}
error_reporting(0);
echo "<br>Harga Pengiriman $pengiriman : Rp. ". number_format($harga_pengiriman)."<br>";
$totalBiaya = $totalBiaya + $harga_pengiriman;
$baris = count($_SESSION['daftarbelanjaan']);
$_SESSION['daftarbelanjaan'][$baris] = array(
	"belanjaan" => $belanjaan, "pengiriman" => $pengiriman, "alamat" => $alamat, "totalBiaya" => $totalBiaya
);
$daftarbelanjaan = $_SESSION['daftarbelanjaan'];
echo "<br>Total Harga = Rp." . number_format($daftarbelanjaan[0]['totalBiaya']);

?>
<br><br>
<a href="loginno2.php">Logout</a>