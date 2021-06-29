<h3> Tambah Data </h3>
<a href="tugas8.php">Go to Home</a>

<form action="" method="post">
<table>
    <tr>
        <td width="120"> ID </td>
        <td> <input type="text" name="id_pasien"> </td>
    </tr>
    <tr>
        <td> Nama </td>
        <td> <input type="text" name="nama"> </td>
    </tr>
    <tr>
        <td> No. HP </td>
        <td> <input type="text" name="no_hp"> </td>
    </tr>
	<tr>
        <td> Diagnosa </td>
        <td> <input type="text" name="diagnosa"> </td>
    </tr>
	<tr>
        <td> Alamat </td>
        <td> <input type="text" name="alamat"> </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="proses" value="Simpan"> </td>
    </tr>
</table>

</form>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
mysqli_query($koneksi, "insert into pasien set  
id_pasien = '$_POST[id_pasien]',
nama = '$_POST[nama]',
no_hp = '$_POST[no_hp]',
diagnosa = '$_POST[diagnosa]',
alamat = '$_POST[alamat]'");

echo "Data barang baru telah tersimpan";

}

?> 
