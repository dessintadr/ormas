<html>
<head>
	<title></title>
</head>
<body>
<H1>Tambahkan Data Ormas</H1>
<form enctype="multipart/form-data" action="tambahdata.php" method="POST">
	<table>
<tr><td>Nama Organisasi</td> 
		<td>:</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr><td>Bidang Kegiatan </td>
		 <td>:</td>
		 <td><input type="text" name="bidang_kegiatan"></td>
	</tr>
	<tr><td>Ruang Lingkup  </td>
		<td>:</td>
		<td><input type="text" name="ruang_lingkup"></td>	
	</tr>
	<tr><td>Alamat Kantor/Sekretariat </td>
		<td>:</td>
		<td><input type="text" name="alamat"></td>
	</tr>
	<tr><td>Tempat dan Waktu Pendirian </td>
		<td>:</td>
		<td><input type="text" name="tempat"></td>	 
	</tr>
	<tr><td>Asas Ciri Organisasi </td> 
		<td>:</td>
		<td><input type="text" name="asas"></td>
	</tr>
	<tr><td>Tujuan Organisasi </td>
		<td>:</td>
		<td><input type="text" name="tujuan"></td> 
	</tr>
	<tr><td>Nama Pendiri </td> 
		<td>:</td>
		<td><input type="text" name="pendiri"></td>
	</tr>
	<tr><td>Nama Pembina </td>
		<td>:</td>
		<td><input type="text" name="pembina"></td> 
	</tr>
	<tr><td>Nama Penasehat </td> 
		<td>:</td>
		<td><input type="text" name="penasihat"></td>
	</tr>
	<tr>
		<td>Ketua</td>
		<td>:</td>
		<td><input type="text" name="ketua"></td>	 
	</tr>
	<tr><td>Sekretaris</td>
		<td>:</td>
		<td><input type="text" name="sekretaris"></td>
	</tr>
	<tr><td>Bendahara </td>
		<td>:</td>
		<td><input type="text" name="bendahara"></td>
	</tr>
	<tr><td>Masa Bhakti Kepengurusan </td>
		<td>:</td>
		<td><input type="text" name="masa_bhakti"></td>	 
	</tr>
	<tr><td>Keputusan Tertinggi Orgnaisai </td>
		<td>:</td>
		<td><input type="text" name="keputusan"></td> 
	</tr>
	<tr><td>Unit/Satuan/Sayap Otonom Organisasi </td> 
		<td>:</td>
		<td><input type="text" name="unit"></td> 

	</tr>
	<tr><td>Usaha Organisasi </td>
		<td>:</td>
		<td><input type="text" name="usaha"></td> 
	</tr>
	<tr><td>Nama Sumber Keuangan </td> 
		<td>:</td>
		<td><input type="text" name="sumber_keuangan"></td> 
	</tr>
	<tr> 
        <td>Logo Organisasi</td>
        <td>:</td>
        <td><input type="file" name="gambar"></td>
        </tr>
</table>
<tr><input type="submit" name="Simpan" value="Simpan"></tr>
</form>

<?php
if (isset($_POST['Simpan'])) {
	$nama = $_POST['nama'];
	$bidang_kegiatan = $_POST['bidang_kegiatan'];
	$ruang_lingkup = $_POST['ruang_lingkup'];
	$alamat = $_POST['alamat'];
	$tempat = $_POST['tempat'];
	$asas = $_POST['asas'];
	$tujuan = $_POST['tujuan'];
	$pendiri = $_POST['pendiri'];
	$pembina = $_POST['pembina'];
	$penasihat = $_POST['penasihat'];
	$ketua = $_POST['ketua'];
	$sekretaris = $_POST['sekretaris'];
	$bendahara = $_POST['bendahara'];
	$masa_bhakti = $_POST['masa_bhakti'];
	$keputusan = $_POST['keputusan'];
	$unit = $_POST['unit'];
	$usaha = $_POST['usaha'];
	$sumber_keuangan = $_POST['sumber_keuangan'];
	$nama_file = $_FILES['gambar']['name'];
    $source = $_FILES['gambar']['tmp_name']; 
    $folder = './file/';

    move_uploaded_file($source, $folder.$nama_file);

    include_once("koneksi.php");
	$result = mysqli_query($connect, "INSERT INTO ormas (id, nama, bidang_kegiatan, ruang_lingkup, alamat, tempat, asas,tujuan,pendiri,pembina,penasihat,ketua, sekretaris, bendahara, masa_bhakti, keputusan, unit, usaha, sumber_keuangan) VALUES ('$id', '$nama', '$bidang_kegiatan', '$ruang_lingkup', '$alamat', '$tempat', 'asas', '$tujuan', '$pendiri', '$pembina', '$penasihat', '$ketua', '$sekretaris', '$bendahara', '$masa_bhakti', '$keputusan', '$unit', '$usaha', '$sumber_keuangan')");

	$result = mysqli_query($mysqli, "INSERT INTO upload VALUES ( NULL, '$nama_file')");
        if($result){
            echo 'YEY BERHASIL';
        }else {
            echo 'COBA LAGI';
        }
        header("Location:index.php");
}
?>
</body>
</html>