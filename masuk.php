<?php
include_once "function/helper.php";
include_once "function/koneksi.php";
include_once "module/masuk/action.php";
if (isset($_POST["submit"])) {
	tambah($_POST);
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Halaman Utama</title>
		<?php include_once('navbar2.php') ?>
	</head>
	<body>
		<div id="pebungkus">
			<div class="card shadow">
				<h4 class="card-header">Kendaraan Masuk</h4>
				<div class="container">
					<form action="" method="post">
						<span>
							<br><label>Jenis Kendaraan</label><br>
							<select name="jenis_kendaraan" class="form-control">
								<?php $query = mysqli_query($koneksi, "SELECT jenis_id, jeniskendaraan FROM jeniskendaraan ORDER BY jeniskendaraan ASC"); ?>
								<?php while($row = mysqli_fetch_assoc($query)): ?>
								<?php if($jenis_id == $row["jenis_id"]) : ?>
								<option value="<?= $row['jenis_id']; ?>" selected="true"><?= $row["jeniskendaraan"]; ?></option>
								<?php else : ?>
								<option value="<?= $row['jenis_id']; ?>"><?= $row["jeniskendaraan"]; ?></option>
								<?php endif; ?>
								<?php endwhile; ?>
							</select>
						</span><br>
						<span>
							<label>Status</label><br>
							<select name="status" class="form-control">
								<option value="tamu">Tamu Hotel</option>
								<option value="pengunjung">Pengunjung</option>
								<option value="pegawai">Pegawai</option>
							</select>
						</span><br>
						<span>
							<label>Nomor Polisi</label><br>
							<input type="text" class="form-control" name="nomor_polisi"  autocomplete="off">
						</span><br>
						<span>
							<button type="submit" name="submit" class="btn btn-primary" >Tambah</button>
						</span>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>