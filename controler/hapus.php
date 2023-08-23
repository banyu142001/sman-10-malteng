<?php 

include "../controler/control.php";

// ambil data (id) yang dikirimkan
 $id = $_GET["id"];

 if(hapus($id) > 0 ){
    header("Location: ../layout/data-pegawai.php");
 }else{

    echo " <script>
            alert('Data Gagal dihapus!!!')
            document.location.href = '../layout/data-pegawai.php'
          </script> ";
 }


?>