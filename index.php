<?php
include 'koneksi.php';
$result = mysqli_query($connect, "SELECT * FROM ormas ORDER BY id ASC");
?>

<!DOCTYPE html>
<html>
<head>
	<title> Data Ormas</title>
</head>
<body>
<H1 align="center"> Database Organisasi Kemasyarakatan Daerah Jawa Tengah</H1>

<form method="POST" action="index.php"><input type="text" name="query" placeholder="Cari">
<input type="button" name="Cari" value="Cari"></form>
<table>
	<tr><input type="button" name="tambah" value="Tambah Data" onclick='top.location="tambahdata.php"'></tr>

<?php
if(isset($_POST['Cari'])){
    $query = $_POST['Cari'];
    if($query != ''){
    	$result = mysqli_query($connect, "SELECT * FROM ormas WHERE nama LIKE '%".$Cari."%' OR ketua LIKE '%".$Cari."%' " );
    }else{
    	$result = mysqli_query($connect, "SELECT * FROM ormas");
    		
    	}
    }
    	if(mysqli_num_rows($result)){

		$result = mysqli_query($connect, "SELECT * FROM  ormas"); 
		foreach ($result as $data) {
	# code...
	?>
	<tr><td>INI LOGO</td></tr>
	<tr><td>Nama Organisasi</td> 
		<td>: <?php echo $data['nama']?> </td></td>
	</tr>
	<tr><td>Bidang Kegiatan </td>
		 <td>: <?php echo $data['bidang_kegiatan']?></td>
	</tr>
	<tr><td>Ruang Lingkup  </td>
		<td>: <?php echo $data['ruang_lingkup']?></td>	
	</tr>
	<tr><td>Alamat Kantor/Sekretariat </td>
		<td>:<?php echo $data['alamat']?></td>
	</tr>
	<tr><td>Tempat dan Waktu Pendirian </td>
		<td>: <?php echo $data['tempat']?></td>	 
	</tr>
	<tr><td>Asas Ciri Organisasi </td> 
		<td>: <?php echo $data['asas']?></td>
	</tr>
	<tr><td>Tujuan Organisasi </td>
		<td>:<?php echo $data['tujuan']?></td> 
	</tr>
	<tr><td>Nama Pendiri </td> 
		<td>:<?php echo $data['pendiri']?></td>
	</tr>
	<tr><td>Nama Pembina </td>
		<td>:<?php echo $data['pembina']?></td> 
	</tr>
	<tr><td>Nama Penasehat </td> 
		<td>:<?php echo $data['penasihat']?></td>
	</tr>
	<tr>
		<td>Ketua</td>
		<td>:<?php echo $data['ketua']?></td>	 
	</tr>
	<tr><td>Sekretaris</td>
		<td>:<?php echo $data['sekretaris']?></td>
	</tr>
	<tr><td>Bendahara </td>
		<td>: <?php echo $data['bendahara']?></td>
	</tr>
	<tr><td>Masa Bhakti Kepengurusan </td>
		<td>: <?php echo $data['masa_bhakti']?></td>	 
	</tr>
	<tr><td>Keputusan Tertinggi Orgnaisai </td>
		<td>:<?php echo $data['keputusan']?></td> 
	</tr>
	<tr><td>Unit/Satuan/Sayap Otonom Organisasi </td> 
		<td>: <?php echo $data['unit']?></td>
	</tr>
	<tr><td>Usaha Organisasi </td>
		<td>: <?php echo $data['usaha']?></td>
	</tr>
	<tr><td>Nama Sumber Keuangan </td> 
		<td>: <?php echo $data['sumber_keuangan']?></td>
	</tr>
	<tr>
		<td>
			<a href="ubahdata.php?id=<?php echo $data['id']; ?> "> <button> Ubah Data</button></a>
			<a href="hapusdata.php?id=<?php echo $data['id']; ?> "> <button> Hapus Data</button></a>
		</td>
	</tr>
	<?php
}else{
    echo '<tr><td colspan="5">Data Tidak Ditemukan</td></tr>';}
}
?>
</table>
</form>
</body>
</html>