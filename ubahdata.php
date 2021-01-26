<?php
include_once("koneksi.php");

if (isset($_POST['Simpan'])){
	$id = $_POST['id'];
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
	//$nama_file = $_FILES['gambar']['name'];
    //$source = $_FILES['gambar']['tmp_name']; 
    //$folder = './file/';


    $result = mysqli_query($connect, "UPDATE ormas SET  nama='$nama', bidang_kegiatan='$bidang_kegiatan', ruang_lingkup='$ruang_lingkup', alamat='$alamat', tempat='$tempat', asas='asas', tujuan='$tujuan', pendiri='$pendiri', pembina='$pembina', penasihat='$penasihat', ketua='$ketua', sekretaris='$sekretaris', bendahara='$bendahara', masa_bhakti='$masa_bhakti', keputusan='$keputusan', unit='$unit', usaha='$usaha', sumber_keuangan='$sumber_keuangan' WHERE id='$id'  ");

    //$result = mysqli_query($connect, "UPDATE upload SET nama_file='$nama_file' WHERE id_file=$id_file ");
    
    header("Location: index.php");
}
?>

<?php
$id = $_GET['id'];
//$id_file = $_GET['id_file'];

$result = mysqli_query($connect, "SELECT * FROM ormas WHERE id = '$id' ");
while ($data = mysqli_fetch_array($result
)){
	//$id = $data['id'];
	$nama = $data['nama'];
	//$bidang_kegiatan = $data['bidang_kegiatan'];
	//$ruang_lingkup = $data['ruang_lingkup'];
	//$alamat = $data['alamat'];
	//$tempat = $data['tempat'];
	//$asas = $data['asas'];
	//$tujuan = $data['tujuan'];
	//$pendiri = $data['pendiri'];
	//$pembina = $data['pembina'];
	//$penasihat = $data['penasihat'];
	//$ketua = $data['ketua'];
	//$sekretaris = $data['sekretaris'];
	//$bendahara = $data['bendahara'];
	//$masa_bhakti = $data['masa_bhakti'];
	//$keputusan = $data['keputusan'];
	//$unit = $data['unit'];
	//$usaha = $data['usaha'];
	//$sumber_keuangan = $data['sumber_keuangan'];
	//$nama_file = $_FILES['gambar']['name'];
    //$source = $_FILES['gambar']['tmp_name']; 
    //$folder = './file/';


   // move_uploaded_file($source, $folder.$nama_file);

}
?>
<html>
<head>
	<title></title>
</head>
<body>
<H1>Ubah Data Ormas</H1>
	<form name="ubah" method="POST" action="ubahdata.php">
	<table>
		<?php
		$result = mysqli_query($connect, "SELECT * FROM  ormas WHERE id=$id"); 
	foreach ($result as $data) { 
		?>
<tr><td>Nama Organisasi</td> 
		<td>:</td>
		<td><input type="text" name="nama" value=<?php echo $nama;?>></td>
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
		<td><input type="text" name="masa_bbhakti"></td>	 
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
	<tr><td><input type="submit" name="Simpan" value="Simpan"></td>
	</tr>
<?php
}
?>
</form>
</table>
</body>
</html>
