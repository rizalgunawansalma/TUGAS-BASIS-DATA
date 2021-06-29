<?php
include "koneksi.php";

if(isset($_GET['kode'])){
mysqli_query($koneksi,"delete from pasien where id_pasien='$_GET[kode]'");

echo "Data berhasil dihapus!!";
echo "<meta http-equiv=refresh content=2;URL='tugas8.php'>";

}
?> 
