<?php
require 'function.php';
$id_data = $_GET['id_data'];
if(hapusdata($id_data) > 0){
     echo "
            <script>
            alert('data telah terhapus!');
            document.location.href = 'index-admin.php';
            </script>
            ";
}else{
    echo "
            <script>
            alert('data gagal terhapus!');
            document.location.href = 'tambah-data.php';
            </script>
            ";
    }

?>