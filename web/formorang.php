<!DOCTYPE html>
<html>
<head>
	<title> Pencarian Orang </title>
	<link rel="stylesheet" type="text/css" href="css/ini.css">
</head>

<body >
	<img src="bg.jpeg" id="bg" alt="">
	<div class="transbox" style="height: 120px; width: 96%; padding:10px;"> 
		<a href="index.html"><h2 style="margin-top: 15px;margin-bottom: -20px"> PENCAROBA </h2>
		<h3> Pencarian Orang dan Barang Hilang </h3>
		</div></a>



	<div class="transbox" style="width: 96%; height: 450px;  padding: 10px;background: white; color: black; border-color: gray;text-align: left; opacity: 0.95; background-color:#ffb366;">
		<div class="transbox-left"><p> DATA ORANG HILANG </p></div>

		<form action="orang.php" method="POST" enctype="multipart/form-data">
	
	<input type="text" name="nama_orang" id="nama_orang" placeholder="Nama Orang hilang*" required oninvalid="this.setCustomValidity('Mohon Diisi')">
	Jenis Kelamin :
	<input type="radio" name="jk" style="height: 20px; width: 20px; margin: 0px; margin-bottom: 15px; margin-left: 5px;"
<?php if (isset($jk) && $jk=="perempuan") echo "checked";?>
value="perempuan">Perempuan
<input type="radio" name="jk" style="height: 20px; width: 20px; margin: 0px; margin-bottom: 15px; margin-left: 5px;"
<?php if (isset($jk) && $jk=="laki") echo "checked";?>
value="laki">Laki-laki 
	<input type="text" name="umur" id="umur" placeholder="Umur*" required oninvalid="this.setCustomValidity('Mohon Diisi')">
	<input type="text" name="tinggi" id="tinggi" placeholder="Tinggi Badan*" required oninvalid="this.setCustomValidity('Mohon Diisi')">
	<input type="date" name="tanggalhilang" id="tanggalhilang" placeholder="Tanggal Hilang*" required oninvalid="this.setCustomValidity('Mohon Diisi')">
	<input type="text" name="pakaian" id="pakaian" placeholder="Pakaian Terakhir*" required oninvalid="this.setCustomValidity('Mohon Diisi')">
	<input type="text" name="keterangan" id="keterangan" placeholder="Keterangan Tambahan (Terakhir terlihat dimana, dengan siapa)">
	<br>
	Foto Terakhir : <br>
	<input type="file" name="foto" id="foto" style="border: none; padding : 1px; height: 19px">
	<div class="transbox" style="height: 40px;width :143px; float: left; margin-top: 1px ;padding: 0px;background: none;border: none; opacity:0.99;"></div>
	</div>

	<div class="transbox" style="width: 96%;height: 300px; padding: 10px;background: white; color: black; border-color: gray;opacity: 0.95">
		<div class="transbox-left"><p> DATA PELAPOR </p></div>

	<input type="text" name="namapelapor" placeholder="Nama Pelapor">
	<input type="text" name="noktp"  placeholder="No. KTP*" required oninvalid="this.setCustomValidity('Mohon Diisi')">
	<input type="text" name="notelpon"  placeholder="No. Telepon yang Bisa Dihubungi*" required oninvalid="this.setCustomValidity('Mohon Diisi')">
	<textarea name="alamatpelapor" placeholder="Alamat Pelapor*"  required oninvalid="this.setCustomValidity('Mohon Diisi')" style="height:100px;"></textarea>
	</div>

	<div class="transbox" style="height: 50px;padding: 0px;background: none;border: none; opacity:0.99;"><input type="submit" name="submit" value="Kirim"  style="background-color: white;"></div>

</form>
	</div>
</body>
</html>