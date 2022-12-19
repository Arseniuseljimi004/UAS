<?php
// require 'action.php';
include_once("../../function/helper.php");
include_once("../../function/koneksi.php");
function query($query){
	global $koneksi;
	$result= mysqli_query($koneksi, $query);
	$rows=[];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[]= $row;
	}
	return $rows;
}
	
	// ambil id dari url
	$id = $_GET["id"];
	$bayar = $_GET["bayar"];
	$waktu_keluar = $_GET["waktu"];
	
	
	// fungsi keluar
	global $id,$bayar,$kode_bayar,$status,$koneksi;
	
	$waktu = mysqli_query($koneksi, "SELECT waktu_masuk FROM kendaraan WHERE kendaraan_id = $id");
	$waktu_masuk = mysqli_fetch_assoc($waktu);
	$keterangan = "Keluar";
	$rumus = ceil(((strtotime($waktu_keluar) - strtotime($waktu_masuk['waktu_masuk']))/3600)) ;
	$status = mysqli_query($koneksi, "SELECT stat FROM kendaraan WHERE kendaraan_id = $id");

	while ($row = $status->fetch_assoc()) {
		if($row['stat'] == "tamu"){
			$harga = (int) ($rumus * $bayar) * 0.15;
			}elseif( $row['stat'] == "pengunjung"){
				$harga = $rumus * $bayar;
			}else{
			$harga = 0;
			}
	}
	
	
	$query = "UPDATE kendaraan SET waktu_keluar = '$waktu_keluar', harga='$harga', keterangan= '$keterangan' WHERE kendaraan_id = $id";
	mysqli_query($koneksi, $query);
	 include_once ('bayarkeluar.php');
	// header(BASE_URL.'laporan.php')
	
	// echo "<h1>".$harga."</h1>"
// $alert = query("SELECT harga FROM kendaraan WHERE kendaraan_id=$id");
// $knd = query("SELECT * FROM `kendaraan` INNER JOIN  jeniskendaraan ON kendaraan.jenis_id = jeniskendaraan.jenis_id WHERE kendaraan_id = $id")[0];
?>
