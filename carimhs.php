
<?php 
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<script language='JavaScript'>
	var txt=".:::. Pencarian Mahasiswa | SIDM Tekkom POLSRI ";
	var speed=200;
	var refresh=null;
	function action() { document.title=txt;
	txt=txt.substring(1,txt.length)+txt.charAt(0);
	refresh=setTimeout("action()",speed);}action();
	</script>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta property="og:site_name" content="Sistem Informasi Data Mahasiswa Teknik Komputer POLSRI">
	<meta property="og:title" content="Sistem Informasi Data Mahasiswa | Teknik Komputer POLSRI" />
	<meta property="og:description" content="Sistem Informasi Data Mahasiswa Teknik Komputer POLSRI" />
	<meta property="og:image" content="https://www.polsri.ac.id/files/2011/01/logo-polsri.png">
	<meta property="og:type" content="website" />
	<meta property="og:updated_time" content="1440432930" />
	<link rel="icon" href="img/logopolsri.png">
	<link href="css/bootstrap.min.css" rel="stylesheet"
<link href="css/style.css" rel="stylesheet">
</head>
<h3>Pencarian Mahasiswa</h3>
 
<form action="carimhs.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>
 
<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
 
<table border="1">
	<tr>
		<th>No</th>
		<th>Nama</th>
	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysql_query("select * from mhs where nama like '%".$cari."%'");				
	}else{
		$data = mysql_query("select * from mhs");		
	}
	$no = 1;
	while($d = mysql_fetch_array($data)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['nama']; ?></td>
	</tr>
	<?php } ?>
</table>