<?php
//Menggabungkan dengan file koneksi yang telah kita buat
include_once "function/helper.php";
include_once "function/koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<style type="text/css">
		table {
			font-size: 17px;
		}
		thead {
			font-weight: bold;
			background-color: blue;
			color: white;
		}
		td {
			padding: 10px;
		}
		hr {
			margin-top: 20px;
			margin-bottom: 20px;
		}
		.download {
			background-color: green;
			color: #fff;
			border-radius: 10px;
			padding: 10px 20px 10px 20px;
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
	<div align="center">
		<h2>Cara Ekspor Data/Laporan ke PDF Dengan Mudah Menggunakan Mpdf pada PHP</h2>
		<a href="ekspor.php">
			<button class="download">Download</button>
		</a>
		<table border="1">
	    	<thead>
	    		<tr>
                    <td>No</td>
	    			<td>Kendaraan Id</td>
	    			<td>Jenis ID</td>
	    			<td>Nomor Polisi</td>
	    			<td>Waktu Masuk</td>
                    <td>Waktu Keluar</td>
	    			<td>Harga</td>
                    <td>Keterangan</td>
	    		</tr>
	    	</thead>
	    	<tbody>
				<?php
			        $no = 1;
			        $query = "SELECT * FROM kendaraan ORDER BY kendaraan_id ASC";
			        $dewan1 = $koneksi->prepare($query);
			        $dewan1->execute();
			        $res1 = $dewan1->get_result();

			        if ($res1->num_rows > 0) {
				        while ($row = $res1->fetch_assoc()) {
				            $idKen = $row['kendaraan_id'];
				            $idJen = $row['jenis_id'];
				            $nopol = $row['nomor_polisi'];
				            $waktuMasuk = $row['waktu_masuk'];
                            $waktuKeluar = $row['waktu_keluar'];
                            $harga = $row['harga'];
                            $keterangan = $row['keterangan'];

							echo "<tr>";
								echo "<td>".$no++."</td>";
								echo "<td>".$idKen."</td>";
								echo "<td>".$idJen."</td>";
								echo "<td>".$nopol."</td>";
								echo "<td>".$waktuMasuk."</td>";
                                echo "<td>".$waktuKeluar."</td>";
                                echo "<td>".$harga."</td>";
                                echo "<td>".$keterangan."</td>";
							echo "</tr>";
			    	} } else { 
			    		echo "<tr>";
			    			echo "<td colspan='8'>Tidak ada data ditemukan</td>";
			    		echo "</tr>";
			     	}
			    ?>
	    	</tbody>
	    </table>
    </div><hr>

</body>
</html>