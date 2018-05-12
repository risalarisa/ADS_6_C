<?php
        mysql_connect("localhost","root","");   
        mysql_select_db("pencaroba");
        $lokasi_file    = $_FILES['gambar']['tmp_name'];
        $nama_file      = $_FILES['gambar']['name'];
        $acak           = rand(1,99);
        $nama_file_unik = $acak.$nama_file;
        $vdir_upload = "img/";
        $vfile_upload = $vdir_upload . $nama_file_unik;
        move_uploaded_file($_FILES["gambar"]["tmp_name"], $vfile_upload);
       
        $simpan=$_POST['simpan'];   
       
        if ($simpan){
            if (empty($lokasi_file)){
            //echo "<center><font color='#FF0000' size='+2'>Maaf Anda belum memilih Gambar<br></font></center>";
            ?><script language="javascript">alert('Maaf Anda belum memilih Gambar')</script><?php
            ?><script>document.location.href="input_image.php";</script><?php
    }else{
        mysql_query("INSERT INTO tb_images VALUES ('','$nama_file_unik')")or die (Error.mysql_error());
        //echo "<center><font color='#FF0000' size='+1'>Berhasil disimpan</font></center><br>";
                ?><script language="javascript">alert('Images Berhasil Disimpan')</script><?php
            ?><script>document.location.href="view_image.php";</script><?php
    }
        }
        ?>