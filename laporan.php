<?php
include_once("function/helper.php");
include_once("function/koneksi.php");
include_once 'function/function.php';
$masuk = query("SELECT * FROM `kendaraan` INNER JOIN  jeniskendaraan ON kendaraan.jenis_id = jeniskendaraan.jenis_id WHERE keterangan = 'Keluar' ORDER BY keterangan DESC");
?>
<?php include_once('navbar2.php') ?>
<div id="pebungkus">
	<div class="card">
		<h4 class="card-header">Laporan</h4><br>
		<!-- <a href="mobil.php" class="card-header"">Cetak</a> -->
		<div class="card-body">
			<div class="table-responsive">
				<form  method="post" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<table>
						<tr>
							<th>No</th>
							<th>Jenis Kendaraan</th>
							<th>Nomor Polisi</th>
							<th>Waktu Masuk</th>
							<th>Waktu keluar</th>
							<th>Harga</th>
							<th>Status</th>
						</tr>
						<?php $i =1; ?>
						<!-- <?php mysqli_connect() ?> -->
						
						<?php foreach ($masuk as $msk): ?>
							
						
						<tr>
							<td><?php echo $i ?></td>
							<td><?php echo $msk["jeniskendaraan"] ?></td>
							<td><?php echo $msk["nomor_polisi"] ?></td>
							<td><?php echo $msk["waktu_masuk"] ?></td>
							<td><?php echo $msk["waktu_keluar"] ?></td>
							<td><?php echo $msk["harga"] ?></td>
							<td><?php echo $msk["keterangan"] ?></td>
						</tr>
						<?php $i++; ?>
						
						
						<?php endforeach ?>
					</table>
					
					<!-- <span>
									<button type="submit" name="submit" >Buka Portal</button>
					</span> -->
				</form>
			</div>
		</div>
		
	</div>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/script.js"></script>