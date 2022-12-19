<?php
//Jika download plugin mpdf tanpa composer (versi lama)
require_once "../vendor/autoload.php";
$mpdf = new \Mpdf\Mpdf();


//Menggabungkan dengan file koneksi yang telah kita buat
include_once("function/koneksi.php");

$nama_dokumen='hasil-ekspor';
ob_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">
</head>
<body>
	<div>
		<h2>Laporan Parkiran</h2>
		<p>Id Jenis 
			1 = Motor |
			2 = Mobil |
			3 = Sepeda |
			4 = Bis

		</p>

		<table border="1">
	    	<thead>
	    		<tr>
	    			<td>No</td>
	    			<td>ID Kendaraan</td>
	    			<td>ID Jenis</td>
	    			<td>Nomor Polisi</td>
	    			<td>Waktu Masuk</td>
					<td>Waktu Keluar</td>
					<td>Harga</td>
					<td>Keterangan</td>
					<td>Status</td>
	    		</tr>
	    	</thead>
	    	<tbody>
				<?php
			        $no = 1;
			        $query = "SELECT * FROM kendaraan ORDER BY kendaraan_id DESC";
			        $dewan1 = $koneksi->prepare($query);
			        $dewan1->execute();
			        $res1 = $dewan1->get_result();

			        if ($res1->num_rows > 0) {
				        while ($row = $res1->fetch_assoc()) {
				            $idKen = $row['kendaraan_id'];
		                	$idJen = $row['jenis_id'];
				            $noPol = $row['nomor_polisi'];
				            $waktuM = $row['waktu_masuk'];
							$waktuK = $row['waktu_keluar'];
							$harga = $row['harga'];
							$ket = $row['keterangan'];
							$stat = $row['stat'];

							echo "<tr>";
								echo "<td>".$no++."</td>";
								echo "<td>".$idKen."</td>";
								echo "<td>".$idJen."</td>";
								echo "<td>".$noPol."</td>";
								echo "<td>".$waktuM."</td>";
								echo "<td>".$waktuK."</td>";
								echo "<td>".$harga."</td>";
								echo "<td>".$ket."</td>";
								echo "<td>".$stat."</td>";
							echo "</tr>";
			    	} } else { 
			    		echo "<tr>";
			    			echo "<td colspan='8'>Tidak ada data ditemukan</td>";
			    		echo "</tr>";
			     	}
			    ?>
	    	</tbody>
	    </table>
    </div>

</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();

$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output("".$nama_dokumen.".pdf" ,'D');
$db1->close();
?>