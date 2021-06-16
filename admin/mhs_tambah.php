<?php
    include"../koneksi.php";
?>
<!doctype html> 
<html> 
<head> 
	<meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<title>Tutorial Bootstrap 4 - www.malasngoding.com</title> 
</head> 
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
 
    <a class="navbar-brand" href="#">Malas Ngoding</a>
 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
 
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
 
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tentang</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Tutorial
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Tutorial HTML</a>
            <a class="dropdown-item" href="#">Tutorial CSS</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Tutorial Bootstrap</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Link Mati</a>
        </li>
      </ul>
 
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Cari" aria-label="Cari">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
      </form>
 
   </div>
 
</nav>
<h5>Contoh Form Grid</h5>
<form>
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="mhs_npm">NPM</label>
			<input type="text" class="form-control" id="mhs_npm" placeholder="Nomor Pokok Mahasiswa">
		</div>
		<div class="form-group col-md-6">
			<label for="mhs_nama">Nama</label>
			<input type="text" class="form-control" id="mhs_nama" placeholder="Nama Lengkap">
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md-4">
			<label for="mhs_prodi">Program Studi</label>
            <select id="form_prodi">
		    <option value="">Pilih Prodi</option>
		    <?php
		    $cek = mysqli_query($koneksi,"SELECT kls_id,kls_ket FROM tb_kls WHERE CHAR_LENGTH(kls_id)=1 ORDER BY kls_ket");
		    while($c = mysqli_fetch_array($cek)){
			    ?>
		    <option value="<?php echo $c['kls_id']; ?>"><?php echo $c['kls_ket']; ?></option>
			    <?php 
		    }
		    ?>
	        </select>
		</div>
		<div class="form-group col-md-2">
		    <label for="mhs_smt">Semester</label><br>
			<select id="form_smt"></select>
		</div>
		<div class="form-group col-md-2">
            <label for="mhs_tkls">Tipe Kelas</label><br>
			<select id="form_tkls"></select>
		</div>
		<div class="form-group col-md-2">
		    <label for="mhs_kls">Kelas</label><br>
			<select id="form_kls"></select>
		</div>
		<script type="text/javascript">
		$(document).ready(function(){
			$("#form_smt").hide();
			$("#form_tkls").hide();
			$("#form_kls").hide();
			$('body').on("change","#form_prodi",function(){
				var id = $(this).val();
				var data = "id="+id+"&data=semester";
				$.ajax({
					type: 'POST',
					url: "mhs_get_kelas.php",
					data: data,
					success: function(hasil) {
						$("#form_smt").html(hasil);
						$("#form_smt").show();
						$("#form_tkls").hide();
						$("#form_kls").hide();
					}
				});
			});
			$('body').on("change","#form_smt",function(){
				var id = $(this).val();
				var data = "id="+id+"&data=tipekelas";
				$.ajax({
					type: 'POST',
					url: "mhs_get_kelas.php",
					data: data,
					success: function(hasil) {
						$("#form_tkls").html(hasil);
						$("#form_tkls").show();
						$("#form_kls").hide();
					}
				});
			});
			$('body').on("change","#form_tkls",function(){
				var id = $(this).val();
				var data = "id="+id+"&data=kelas";
				$.ajax({
					type: 'POST',
					url: "mhs_get_kelas.php",
					data: data,
					success: function(hasil) {
						$("#form_kls").html(hasil);
						$("#form_kls").show();
					}
				});
			});
		});
	</script>
	</div>
	<button type="submit" class="btn btn-primary">Tombol</button>
</form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body> 
</html>