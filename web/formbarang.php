<!DOCTYPE html>
<html>
<head>
	<title> Pencarian Barang </title>
	<link rel="stylesheet" type="text/css" href="css/ini.css">
</head>

<body >
	<img src="bg.jpeg" id="bg" alt="">
	<div class="transbox" style="height: 120px; width: 96%; padding:10px;"> 
		<a href="index.html"><h2 style="margin-top: 15px;margin-bottom: -20px"> PENCAROBA </h2>
		<h3> Pencarian Orang dan Barang Hilang </h3>
		</div></a>
	<div class="transbox" style="width: 96%; padding: 10px; color: black; border-color: gray;text-align: left; opacity: 0.95; background-color:#ffb366; height: 450px;">
		<div class="transbox-left"><p> DATA BARANG HILANG </p></div>

		<form action="barang.php" method="POST">
	
	<input type="text" name="jenisbarang" placeholder="Jenis Barang hilang*" required oninvalid="this.setCustomValidity('Mohon Diisi')">
	<input type="text" name="warnabarang" id="warnabarang" placeholder="Warna Barang*" required oninvalid="this.setCustomValidity('Mohon Diisi')">
	<input type="text" name="ukuranbarang" id="ukuranbarang" placeholder="Ukuran Barang*" required oninvalid="this.setCustomValidity('Mohon Diisi')">
	<input type="text" name="ciribarang" id="ciribarang" placeholder="Ciri-ciri Barang*" required oninvalid="this.setCustomValidity('Mohon Diisi')">
	<input type="date" name="tanggalbarang" id="tanggalbarang" placeholder="Tanggal Kehilangan*" required oninvalid="this.setCustomValidity('Mohon Diisi')">
	<input type="text" name="keterangan" id="keterangan" placeholder="Keterangan Tambahan">
	<br>
	Foto Barang : <br>
	<input type="file" name="foto" style="border: none;">
	</div>

	<div class="transbox" style="width: 96%;height: 300px; padding: 10px;background: white; color: black; border-color: gray;opacity: 0.95">
		<div class="transbox-left"><p> DATA PELAPOR </p></div>

	<input type="text" name="namapelapor" placeholder="Nama Pelapor">
	<input type="text" name="noktp"  placeholder="No. KTP*" required oninvalid="this.setCustomValidity('Mohon Diisi')">
	<input type="text" name="notelpon"  placeholder="No. Telepon yang Bisa Dihubungi*" required oninvalid="this.setCustomValidity('Mohon Diisi')">
	<textarea name="alamat" placeholder="Alamat Pelapor*"  required oninvalid="this.setCustomValidity('Mohon Diisi')" style="height:100px;"></textarea>
	</div>

	<div class="transbox" style="height: 50px;padding: 0px;background: none;border: none; opacity:0.99;"><input type="submit" name="submit" value="Kirim" style="background-color: white;"></div>

</form>
</body>
</html>