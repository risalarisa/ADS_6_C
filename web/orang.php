	<?php
	include("koneksi.php");


	$target_dir = "images/";
	$target_file = $target_dir. basename($_FILES["foto"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));	

	if (isset($_POST['submit'])) {

		
		$nama_orang = $_POST['nama_orang'];
		$jk = $_POST['jk'];
		$umur = $_POST['umur'];
		$tinggi = $_POST['tinggi'];
		$tanggalhilang = $_POST['tanggalhilang'];
		$pakaian = $_POST['pakaian'];
		$keterangan = $_POST['keterangan'];
		$check = getimagesize($_FILES["foto"]["images/"]);

		$namapelapor = $_POST['namapelapor'];
		$noktp = $_POST['noktp'];
		$notelpon = $_POST['notelpon'];
		$alamatpelapor = $_POST['alamatpelapor'];

		$conn = mysqli_connect("localhost","root","","ads");

		$query = mysqli_query($conn,"INSERT INTO data_laporan_orang VALUES (NULL, '$nama_orang', '$jk', '$umur', '$tinggi', '$alamatpelapor','$tanggalhilang', '$pakaian', '$keterangan', '$check','$namapelapor', '$noktp', '$notelpon')") or die(mysqli_error($conn));   	
	    	
	    	if($query){
	    		echo "<script>alert('sukses')</script>";
	    		echo "<script>alert('sukses');window.location='../web/index.html'</script>";
	    		
	     	}
		   	else{
		   		echo "<script>alert('gagal')</script>";
		   		
		   	}
}
	?>
