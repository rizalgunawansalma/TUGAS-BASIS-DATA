<?php
include "koneksi.php";
$sql=mysqli_query($koneksi,"select * from pasien where id_pasien='$_GET[kode]'");
$data=mysqli_fetch_array($sql);

?>

<h3> Ubah Data Pasien </h3>
<a href="tugas8.php">Go to Home</a>

<form action="" method="post">
<table>
    <tr>
        <td width="120"> ID </td>
        <td> <input type="text" name="id_pasien" value="<?php echo $data['id_pasien']; ?>"> </td>
    </tr>
    <tr>
        <td> Nama </td>
        <td> <input type="text" name="nama" value="<?php echo $data['nama']; ?>"> </td>
    </tr>
    <tr>
        <td> No. HP </td>
        <td> <input type="text" name="no_hp" value="<?php echo $data['no_hp']; ?>"> </td>
    </tr>
	<td> Diagnosa </td>
        <td> <input type="text" name="diagnosa" value="<?php echo $data['diagnosa']; ?>"> </td>
    </tr>
	<td> Alamat </td>
        <td> <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"> </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="proses" value="Ubah"> </td>
    </tr>
</table>

</form>

<?php
include "koneksi.php";
if(isset($_POST['proses'])){
mysqli_query($koneksi, "update pasien set  nama = '$_POST[nama]','no_hp = '$_POST[no_hp]','diagnosa = '$_POST[diagnosa]','alamat = '$_POST[alamat]',' where id_pasien = '$_GET[kode]'");

echo "Data pasien telah diubah";
echo "<meta http-equiv=refresh content=1;URL='tugas8.php'>";

}

?>
