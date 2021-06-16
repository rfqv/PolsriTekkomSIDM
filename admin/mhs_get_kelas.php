<?php 
include '../koneksi.php';
$data = $_POST['data'];
$id = $_POST['id'];
$n=strlen($id);
$m=($n==1?3:($n==3?5:7));
// $wil=($n==1?'Semester':($n==3?'Tipe Kelas':'Kelas'));
?>
<?php 
if($data == "semester"){
	?>
	<select id="form_smt">
		<option value="">Pilih Semester</option>
		<?php 
		$cek = mysqli_query($koneksi,"SELECT kls_id,kls_ket FROM tb_kls WHERE LEFT(kls_id,'$n')='$id' AND CHAR_LENGTH(kls_id)=$m ORDER BY kls_ket");
		while($c = mysqli_fetch_array($cek)){
			?>
			<option value="<?php echo $c['kls_id']; ?>"><?php echo $c['kls_ket']; ?></option>
			<?php 
		}
		?>
	</select>
	<?php 
}else if($data == "tipekelas"){ 
	?>
	<select id="form_tkls">
		<option value="">Pilih Tipe Kelas</option>
		<?php 
		$cek = mysqli_query($koneksi,"SELECT kls_id,kls_ket FROM tb_kls WHERE LEFT(kls_id,'$n')='$id' AND CHAR_LENGTH(kls_id)=$m ORDER BY kls_ket");
		while($c = mysqli_fetch_array($cek)){
			?>
			<option value="<?php echo $c['kls_id']; ?>"><?php echo $c['kls_ket']; ?></option>
			<?php 
		}
		?>
	</select>
	<?php 
}else if($data == "kelas"){ 
	?>
	<select id="form_kls">
		<option value="">Pilih Kelas</option>
		<?php 
		$cek =mysqli_query($koneksi,"SELECT kls_id,kls_ket FROM tb_kls WHERE LEFT(kls_id,'$n')='$id' AND CHAR_LENGTH(kls_id)=$m ORDER BY kls_ket");
		while($c = mysqli_fetch_array($cek)){
			?>
			<option value="<?php echo $c['kls_id']; ?>"><?php echo $c['kls_ket']; ?></option>
			<?php 
		}
		?>
	</select>
	<?php 
}
?>