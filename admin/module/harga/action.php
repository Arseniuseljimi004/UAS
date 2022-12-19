<?php 
function tambah($data){
	global $koneksi;
    $jenis_id = $data['jenis_kendaraan'];
    $harga = $_POST['harga'];

	$query = "UPDATE jeniskendaraan SET  bayar = '$harga' WHERE jenis_id = '$jenis_id'";
		mysqli_query($koneksi, $query);
}

// function edit($data){
//     global $koneksi;
//     $jeniskendaraan = $_POST['jenis_kendaraan'];
//     $harga = $_POST['harga'];

//     $query = "UPDATE jeniskendaraan SET jeniskendaraan = '$jeniskendaraan', harga = '$harga' WHERE jeniskendaraan = '$jeniskendaraan'";
//     mysqli_query($koneksi, $query);
// }

 ?>