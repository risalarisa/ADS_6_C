	<?php
	include("koneksi.php");
		
	if (isset($_POST['submit'])) {

		
		$jenisbarang = $_POST['jenisbarang'];
		$warnabarang = $_POST['warnabarang'];
		$ukuranbarang = $_POST['ukuranbarang'];
		$ciribarang = $_POST['ciribarang'];
		$tanggalbarang = $_POST['tanggalbarang'];
		$keterangan = $_POST['keterangan'];

		$namapelapor = $_POST['namapelapor'];
		$noktp = $_POST['noktp'];
		$notelpon = $_POST['notelpon'];
		$alamat = $_POST['alamat'];

		$conn = mysqli_connect("localhost","root","","ads");

		$query = mysqli_query($conn,"INSERT INTO data_laporan_barang VALUES (NULL, '$jenisbarang', '$warnabarang', '$ukuranbarang','$ciribarang', '$tanggalbarang', '$keterangan', '', '$namapelapor', '$noktp', '$notelpon', '$alamat')") or die(mysqli_error($conn));   	
	    	
	    	if($query){
	    		echo "<script>alert('sukses');window.location='../web/index.html'</script>";
	     	}
		   	else{
		   		echo "<script>alert('gagal')</script>";
		   	}
}
	?>
