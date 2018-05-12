<!DOCTYPE html>
<html>
<head>
	<title> Halaman Laporan </title>
	<link rel="stylesheet" type="text/css" href="css/ini.css">
</head>

<body >
	<img src="bg.jpeg" id="bg" alt="">

	
	<div class="boxsmall1" style="background-color: white;color: black;border-color: white;">
	Laporan Orang Hilang
	</div>

	<a href="laporann.php">
	<div class="boxsmall1" style="margin-left: 0px;">
	Laporan Barang Hilang
	</div></a>

    
	<div class="transbox1">
    <table style="width: 20%; height:120px; float: left; margin-left: 25px;">
    <tr>
    <td style="border: 1px solid #FFA600; text-align: center;"> Foto</td>
    
    </tr>
    </table>
    <table style="width: 40%; height: 20px; float: left; margin-left: 30px;">

        <tr bgcolor= "#FFD78D">
            <th> Nama</th>
            <?php
            include ("koneksi.php");
            $query ="SELECT nama_orang FROM data_laporan_orang";
            $hasil = mysqli_query($db ,$query);

            while ($data = mysqli_fetch_array ($hasil)){
        
        echo "    
        <td>".$data['nama_orang']."</td>
        ";
        
        }

            ?>
        </tr>
        <tr bgcolor="#FFEBC7">
            <th> Jenis Kelamin</th>
             <?php
            //include ("koneksi.php");
            $query ="SELECT jk FROM data_laporan_orang";
            $hasil = mysqli_query($db ,$query);

            while ($data = mysqli_fetch_array ($hasil)){
        
        echo "    
        <td>".$data['jk']."</td>
        ";
        
        }

            ?>
        </tr>
       <tr bgcolor= "#FFD78D">
            <th> Umur</th>
             <?php
            //include ("koneksi.php");
            $query ="SELECT umur FROM data_laporan_orang";
            $hasil = mysqli_query($db ,$query);

            while ($data = mysqli_fetch_array ($hasil)){
        
        echo "    
        <td>".$data['umur']."</td>
        ";
        
        }

            ?>
        </tr>
       <tr bgcolor="#FFEBC7">
            <th> Tinggi Badan</th>
             <?php
            //include ("koneksi.php");
            $query ="SELECT tinggi FROM data_laporan_orang";
            $hasil = mysqli_query($db ,$query);

            while ($data = mysqli_fetch_array ($hasil)){
        
        echo "    
        <td>".$data['tinggi']."</td>
        ";
        
        }

            ?>
        </tr>
       <tr bgcolor="#FFD78D">
            <th> Tanggal Hilang</th>
             <?php
            //include ("koneksi.php");
            $query ="SELECT tanggalhilang FROM data_laporan_orang";
            $hasil = mysqli_query($db ,$query);

            while ($data = mysqli_fetch_array ($hasil)){
        
        echo "    
        <td>".$data['tanggalhilang']."</td>
        ";
        
        }

            ?>
        </tr>
       <tr bgcolor= "#FFEBC7">
            <th> Pakaian Terakhir</th>
             <?php
            //include ("koneksi.php");
            $query ="SELECT pakaian FROM data_laporan_orang";
            $hasil = mysqli_query($db ,$query);

            while ($data = mysqli_fetch_array ($hasil)){
        
        echo "    
        <td>".$data['pakaian']."</td>
        ";
        
        }

            ?>
        </tr>
       <tr bgcolor="#FFD78D">
            <th> Keterangan</th>
             <?php
            //include ("koneksi.php");
            $query ="SELECT keterangan FROM data_laporan_orang";
            $hasil = mysqli_query($db ,$query);

            while ($data = mysqli_fetch_array ($hasil)){
        
        echo "    
        <td>".$data['keterangan']."</td>
        ";
        
        }

            ?>
        </tr>
        </table>


     <table style="width: 30%; height:120px; float: left; margin-left: 30px;">
            <tr bgcolor="#FFA600">
                <td colspan="2" style="text-align: center;"> DATA PELAPOR </td>
            </tr>

            <tr bgcolor= "#FFD78D">
            <th> Nama Pelapor</th>
            <?php
            //include ("koneksi.php");
            $query ="SELECT namapelapor FROM data_laporan_orang";
            $hasil = mysqli_query($db ,$query);

            while ($data = mysqli_fetch_array ($hasil)){
        
        echo "    
        <td>".$data['namapelapor']."</td>
        ";
        
        }

            ?>
        </tr>
        <tr bgcolor="#FFEBC7">
            <th> No KTP</th>
             <?php
            //include ("koneksi.php");
            $query ="SELECT noktp FROM data_laporan_orang";
            $hasil = mysqli_query($db ,$query);

            while ($data = mysqli_fetch_array ($hasil)){
        
        echo "    
        <td>".$data['noktp']."</td>
        ";
        
        }

            ?>
        </tr>
       <tr bgcolor= "#FFD78D">
            <th> No. Telp</th>
             <?php
            //include ("koneksi.php");
            $query ="SELECT notelpon FROM data_laporan_orang";
            $hasil = mysqli_query($db ,$query);

            while ($data = mysqli_fetch_array ($hasil)){
        
        echo "    
        <td>".$data['notelpon']."</td>
        ";
        
        }

            ?>
        </tr>
       <tr bgcolor="#FFEBC7">
            <th> alamat</th>
             <?php
            //include ("koneksi.php");
            $query ="SELECT alamatpelapor FROM data_laporan_orang";
            $hasil = mysqli_query($db ,$query);

            while ($data = mysqli_fetch_array ($hasil)){
        
        echo "    
        <td>".$data['alamatpelapor']."</td>
        ";
        
        }

            ?>
        </tr>

     </table>
     <div class="transbox" style="height: 50px; width : 30%;padding: 0px;background: none;border: none; opacity:0.99; "><input type="submit" name="hapus" value="Hapus" style="background-color: #FFC857; margin-top: 10px; float: left; width: 319px"></div>
     <br>
     <br>
     <table style="width: 20%; height:120px; float: left; margin-left: 25px;">
    <tr>
    <td style="border: 1px solid #FFA600; text-align: center;"> Foto</td>
    
    </tr>
    </table>
    <table style="width: 40%; height: 20px; float: left; margin-left: 30px;">

        
        <tr bgcolor= "#FFD78D">
            <th> Nama</th>
            <?php
            include ("koneksi.php");
            $query ="SELECT nama_orang FROM data_laporan_orang";
            $hasil = mysqli_query($db ,$query);

            while ($data = mysqli_fetch_array ($hasil)){
        
        echo "    
        <td>".$data['nama_orang']."</td>
        ";
        
        }

            ?>
        </tr>
        <tr bgcolor="#FFEBC7">
            <th> Jenis Kelamin</th>
             <?php
            include ("koneksi.php");
            $query ="SELECT jk FROM data_laporan_orang";
            $hasil = mysqli_query($db ,$query);

            while ($data = mysqli_fetch_array ($hasil)){
        
        echo "    
        <td>".$data['jk']."</td>
        ";
        
        }

            ?>
        </tr>
       <tr bgcolor= "#FFD78D">
            <th> Umur</th>
             <?php
            include ("koneksi.php");
            $query ="SELECT umur FROM data_laporan_orang";
            $hasil = mysqli_query($db ,$query);

            while ($data = mysqli_fetch_array ($hasil)){
        
        echo "    
        <td>".$data['umur']."</td>
        ";
        
        }

            ?>
        </tr>
       <tr bgcolor="#FFEBC7">
            <th> Tinggi Badan</th>
             <?php
            include ("koneksi.php");
            $query ="SELECT tinggi FROM data_laporan_orang";
            $hasil = mysqli_query($db ,$query);

            while ($data = mysqli_fetch_array ($hasil)){
        
        echo "    
        <td>".$data['tinggi']."</td>
        ";
        
        }

            ?>
        </tr>
       <tr bgcolor="#FFD78D">
            <th> Tanggal Hilang</th>
             <?php
            include ("koneksi.php");
            $query ="SELECT tanggalhilang FROM data_laporan_orang";
            $hasil = mysqli_query($db ,$query);

            while ($data = mysqli_fetch_array ($hasil)){
        
        echo "    
        <td>".$data['tanggalhilang']."</td>
        ";
        
        }

            ?>
        </tr>
       <tr bgcolor= "#FFEBC7">
            <th> Pakaian Terakhir</th>
             <?php
            include ("koneksi.php");
            $query ="SELECT pakaian FROM data_laporan_orang";
            $hasil = mysqli_query($db ,$query);

            while ($data = mysqli_fetch_array ($hasil)){
        
        echo "    
        <td>".$data['pakaian']."</td>
        ";
        
        }

            ?>
        </tr>
       <tr bgcolor="#FFD78D">
            <th> Keterangan</th>
             <?php
            include ("koneksi.php");
            $query ="SELECT keterangan FROM data_laporan_orang";
            $hasil = mysqli_query($db ,$query);

            while ($data = mysqli_fetch_array ($hasil)){
        
        echo "    
        <td>".$data['keterangan']."</td>
        ";
        
        }

            ?>
        </tr>
        </table>


     <table style="width: 30%; height:120px; float: left; margin-left: 30px;">
            <tr bgcolor="#FFA600">
                <td colspan="2" style="text-align: center;"> DATA PELAPOR </td>
            </tr>

            <tr bgcolor= "#FFD78D">
            <th> Nama Pelapor</th>
            <?php
            include ("koneksi.php");
            $query ="SELECT namapelapor FROM data_laporan_orang";
            $hasil = mysqli_query($db ,$query);

            while ($data = mysqli_fetch_array ($hasil)){
        
        echo "    
        <td>".$data['namapelapor']."</td>
        ";
        
        }

            ?>
        </tr>
        <tr bgcolor="#FFEBC7">
            <th> No KTP</th>
             <?php
            include ("koneksi.php");
            $query ="SELECT noktp FROM data_laporan_orang";
            $hasil = mysqli_query($db ,$query);

            while ($data = mysqli_fetch_array ($hasil)){
        
        echo "    
        <td>".$data['noktp']."</td>
        ";
        
        }

            ?>
        </tr>
       <tr bgcolor= "#FFD78D">
            <th> No. Telp</th>
             <?php
            include ("koneksi.php");
            $query ="SELECT notelpon FROM data_laporan_orang";
            $hasil = mysqli_query($db ,$query);

            while ($data = mysqli_fetch_array ($hasil)){
        
        echo "    
        <td>".$data['notelpon']."</td>
        ";
        
        }

            ?>
        </tr>
       <tr bgcolor="#FFEBC7">
            <th> alamat</th>
             <?php
            include ("koneksi.php");
            $query ="SELECT alamatpelapor FROM data_laporan_orang";
            $hasil = mysqli_query($db ,$query);

            while ($data = mysqli_fetch_array ($hasil)){
        
        echo "    
        <td>".$data['alamatpelapor']."</td>
        ";
        
        }

            ?>
        </tr>

     </table>
     <div class="transbox" style="height: 50px; width : 30%;padding: 0px;background: none;border: none; opacity:0.99; "><input type="submit" name="hapus" value="Hapus" style="background-color: #FFC857; margin-top: 10px; float: left; width: 319px"></div>       
    </div>



</body>


</html>