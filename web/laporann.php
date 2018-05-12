<!DOCTYPE html>
<html>
<head>
	<title> Halaman Laporan </title>
	<link rel="stylesheet" type="text/css" href="css/ini.css">
</head>

<body >
	<img src="bg.jpeg" id="bg" alt="">

	<a href="laporan.php">
	<div class="boxsmall1">
	Laporan Orang Hilang
	</div></a>

	
	<div class="boxsmall1" style="margin-left: 0px;background-color: white; color: black;border: 1px solid white;">
	Laporan Barang Hilang
	</div>

	<div class="transbox1">
    <table style="width: 20%; height:120px; float: left; margin-left: 25px;">
    <tr>
    <td style="border: 1px solid #FFA600; text-align: center;"> Foto</td>

    </tr>
    </table>
    <table style="width: 40%; height: 20px; float: left; margin-left: 30px; margin-bottom: 50px">

        <tr bgcolor= "#FFD78D">
            <th> Jenis barang</th>
            <?php
            include ("koneksi.php");
            $query ="SELECT jenisbarang FROM data_laporan_barang";
            $hasil = mysqli_query($db ,$query);

            while ($data = mysqli_fetch_array ($hasil)){
        
        echo "    
        <td>".$data['jenisbarang']."</td>
        ";
        
        }

            ?>
        </tr>
        <tr bgcolor="#FFEBC7">
            <th> Warna Barang</th>
             <?php
            //include ("koneksi.php");
            $query ="SELECT wanabarang FROM data_laporan_barang";
            $hasil = mysqli_query($db ,$query);

            while ($data = mysqli_fetch_array ($hasil)){
        
        echo "    
        <td>".$data['wanabarang']."</td>
        ";
        
        }

            ?>
        </tr>
       <tr bgcolor= "#FFD78D">
            <th> Ukuran Barang</th>
             <?php
            //include ("koneksi.php");
            $query ="SELECT ukuranbarang FROM data_laporan_barang";
            $hasil = mysqli_query($db ,$query);

            while ($data = mysqli_fetch_array ($hasil)){
        
        echo "    
        <td>".$data['ukuranbarang']."</td>
        ";
        
        }

            ?>
        </tr>
       <tr bgcolor="#FFEBC7">
            <th> Ciri Ciri</th>
             <?php
            //include ("koneksi.php");
            $query ="SELECT ciribarang FROM data_laporan_barang";
            $hasil = mysqli_query($db ,$query);

            while ($data = mysqli_fetch_array ($hasil)){
        
        echo "    
        <td>".$data['ciribarang']."</td>
        ";
        
        }

            ?>
        </tr>
       <tr bgcolor="#FFD78D">
            <th> Tanggal Hilang</th>
             <?php
            //include ("koneksi.php");
            $query ="SELECT tanggalbarang FROM data_laporan_barang";
            $hasil = mysqli_query($db ,$query);

            while ($data = mysqli_fetch_array ($hasil)){
        
        echo "    
        <td>".$data['tanggalbarang']."</td>
        ";
        
        }

            ?>
        </tr>
       <tr bgcolor="#FFD78D">
            <th> Keterangan</th>
             <?php
            //include ("koneksi.php");
            $query ="SELECT keterangan FROM data_laporan_barang";
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
            $query ="SELECT namapelapor FROM data_laporan_barang";
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
            $query ="SELECT noktp FROM data_laporan_barang";
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
            $query ="SELECT notelpon FROM data_laporan_barang";
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
            $query ="SELECT alamat FROM data_laporan_barang";
            $hasil = mysqli_query($db ,$query);

            while ($data = mysqli_fetch_array ($hasil)){
        
        echo "    
        <td>".$data['alamat']."</td>
        ";
        
        }

            ?>
        </tr>

     </table>
     <div class="transbox" style="height: 50px; width : 30%;padding: 0px;background: none;border: none; opacity:0.99; "><input type="submit" name="hapus" value="Hapus" style="background-color: #FFC857; margin-top: 10px; float: left; width: 319px"></div>       
    </div>

    <!--
    <script>
        var table ='';
        var rows = 1;
        var cols = 1;
        for(var r = 0; r < rows;r++)
        {
            table += '<tr>';
            for(var c = 0; c <= cols;c++)
            {
                table += '<td>' + c + '</td>';
            }
            table += '</tr>';
        }
        document.write('<table>'+table+'</table>')
    </script>
-->


</body>


</html>