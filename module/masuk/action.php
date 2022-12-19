<?php 
function tambah($data){
	global $koneksi;
	ini_set('date.timezone', 'Asia/Jakarta');
	$waktu_masuk = date("Y-m-d H:i:s");
	$jenis_id = $data["jenis_kendaraan"];
	$nomor_polisi = $data["nomor_polisi"];
	$keterangan = 'Masuk';
	$status = $data["status"];

	$query = "INSERT INTO kendaraan VALUES ('','$jenis_id','$nomor_polisi','$waktu_masuk','','','$keterangan','$status')";
		mysqli_query($koneksi, $query);
}

 ?>