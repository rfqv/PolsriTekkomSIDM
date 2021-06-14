<?
include "daftar/library.php";
include "daftar/fungsi_indotgl.php";
$tanggal=date("d/m/Y");
?>

        <link href="daftar/js/jquery-ui.min.css" rel="stylesheet" type="text/css" />
        <!-- load jquery library -->
        <script src="daftar/js/jquery-1.9.1.min.js"></script>
        <!-- load jquery ui js file -->
        <script src="daftar/js/jquery-ui.min.js"></script>
<body >
	<link rel="stylesheet" href="daftar/jquery-ui.css" type="text/css" />
	<script type="text/javascript" src="daftar/jquery-1.9.js"></script>
	<script type="text/javascript" src="daftar/jquery-ui.js"></script>
	<script type="text/javascript">
		$(function() {
		$( "#input" ).datepicker({
			changeMonth: true,
			changeYear: true
		});
		});
	</script>
	<script type="text/javascript">
		$(function() {
		$( "#input2" ).datepicker({
			changeMonth: true,
			changeYear: true
		});
		});
	</script>
	
<font face="Georgia, Times New Roman, Times, serif" size="3">
<br>
<form enctype="multipart/form-data" method="post" action="index.php?page=simpan_daftar">
<table width="552" align="center" cellpadding="2" cellspacing="2" bordercolor="#999999" bgcolor="#CCCCCC" >
  <tr>
    <td height="30" colspan="3" bgcolor="#FF9933"><div align="center">Form Pendaftaran Siswa Baru SMK MUHAMMADIYAH 4 YK</div></td>
    </tr>
  <tr>
    <td height="30" bgcolor="#FF9900">Tanggal Daftar </td>
    <td bgcolor="#FF9900"><div align="center">:</div></td>
    <td bgcolor="#FF9900"><input name="tanggal_daftar" type="text" id="input" value="<?php $tgl=date ('m/d/y'); echo"$tgl"; ?>" />      </td>
  </tr>
  <tr>
    <td height="30" bgcolor="#FF9900">Nama Lengkap </td>
    <td bgcolor="#FF9900"><div align="center">:</div></td>
    <td bgcolor="#FF9900"><input name="nama_lengkap" type="text" id="nama_lengkap" size="35"></td>
  </tr>
  <tr>
    <td height="30" bgcolor="#FF9900">Jenis Kelamin </td>
    <td bgcolor="#FF9900"><div align="center">:</div></td>
    <td bgcolor="#FF9900"><input name="jenis_kelamin" type="radio" value="L">
      Laki-Laki
      
      <input name="jenis_kelamin" type="radio" value="P">
      Perempuan </td>
  </tr>
  <tr>
    <td height="30" bgcolor="#FF9900">Agama</td>
    <td bgcolor="#FF9900"><div align="center">:</div></td>
    <td bgcolor="#FF9900"><select name="agama" id="agama">
        <option value="Islam" selected>Islam</option>
        <option value="Protestan">Protestan</option>
        <option value="Katolik">Katolik</option>
        <option value="Hindu">Hindu</option>
        <option value="Budha">Budha</option>
    </select></td>
  </tr>
  <tr>
    <td height="30" bgcolor="#FF9900">Golongan Darah </td>
    <td bgcolor="#FF9900"><div align="center">:</div></td>
    <td bgcolor="#FF9900"><input name="gdarah" type="radio" value="A">
      A
      <input name="gdarah" type="radio" value="B">
      B
      <input name="gdarah" type="radio" value="AB">
      AB
      <input name="gdarah" type="radio" value="O">
      O</td>
  </tr>
  <tr>
    <td height="30" bgcolor="#FF9900">Tempat Lahir</td>
    <td bgcolor="#FF9900"><div align="center">:</div></td>
    <td bgcolor="#FF9900"><input name="tempat_lahir" type="text" id="tempat_lahir" size="35">      </td>
  </tr>
  <tr>
    <td height="30" bgcolor="#FF9900">Tanggal Lahir</td>
    <td bgcolor="#FF9900"><div align="center">:</div></td>
    <td bgcolor="#FF9900"><input name="tanggal_lahir" type="text" id="input2" /></td>
  </tr>
  <tr>
    <td height="30" bgcolor="#FF9900">Minat Jurusan </td>
    <td bgcolor="#FF9900"><div align="center">:</div></td>
    <td bgcolor="#FF9900"><select name="jurusan" id="jurusan">
      <option>IPA</option>
      <option>IPS</option>
    </select></td>
  </tr>
  <tr>
    <td height="30" bgcolor="#FF9900">Asal Sekolah </td>
    <td bgcolor="#FF9900"><div align="center">:</div></td>
    <td bgcolor="#FF9900"><input name="asal" type="text" id="asal" size="40"></td>
  </tr>
  <tr>
    <td height="30" bgcolor="#FF9900">Tahun Lulus </td>
    <td bgcolor="#FF9900"><div align="center">:</div></td>
    <td bgcolor="#FF9900"><input name="tahun_lulus" type="text" id="tahun_lulus" size="20"></td>
  </tr>
  <tr>
    <td height="30" bgcolor="#FF9900">Nama Ayah </td>
    <td bgcolor="#FF9900"><div align="center">:</div></td>
    <td bgcolor="#FF9900"><input name="nama_ortu" type="text" id="nama_ortu" size="40"></td>
  </tr>
  <tr>
    <td height="30" bgcolor="#FF9900">Pekerjaan Ayah </td>
    <td bgcolor="#FF9900"><div align="center">:</div></td>
    <td bgcolor="#FF9900"><input name="pekerjaan_ortu" type="text" id="pekerjaan_ortu" size="35"></td>
  </tr>
  <tr>
    <td height="30" bgcolor="#FF9900">Nama Ibu </td>
    <td bgcolor="#FF9900"><div align="center">:</div></td>
    <td bgcolor="#FF9900"><input name="ibu_nama" type="text" id="ibu_nama" size="40"></td>
  </tr>
  <tr>
    <td height="30" bgcolor="#FF9900">Pekerjaan Ibu </td>
    <td bgcolor="#FF9900"><div align="center">:</div></td>
    <td bgcolor="#FF9900"><input name="ibu_pekerjaan" type="text" id="ibu_pekerjaan" size="35"></td>
  </tr>
  <tr>
    <td height="30" bgcolor="#FF9900">Email</td>
    <td bgcolor="#FF9900"><div align="center">:</div></td>
    <td bgcolor="#FF9900"><input name="email" type="text" id="email" size="35"></td>
  </tr>
  <tr>
    <td height="30" bgcolor="#FF9900">No Telpon </td>
    <td bgcolor="#FF9900"><div align="center">:</div></td>
    <td bgcolor="#FF9900"><input name="no_telp" type="text" id="no_telp" size="30">
      <input name="status" type="hidden" id="status" value="Belum Verifikasi" size="30"></td>
  </tr>
  <tr>
    <td width="159" height="114" bgcolor="#FF9900">Alamat</td>
    <td width="3" bgcolor="#FF9900"><div align="center">:</div></td>
    <td width="368" bgcolor="#FF9900"><textarea name="alamat" cols="40" rows="5" id="alamat" ></textarea></td>
  </tr>
  <tr>
    <td height="30" bgcolor="#FF9900">Foto (100x150pixel) </td>
    <td bgcolor="#FF9900">:</td>
    <td bgcolor="#FF9900"><input name="fupload" type="file" id="fupload"></td>
  </tr>
  <tr>
    <td height="30" bgcolor="#FF9900">&nbsp;</td>
    <td bgcolor="#FF9900"><div align="center"></div></td>
    <td bgcolor="#FF9900"><input type=submit value=Daftar></td>
  </tr>
</table>

</form>

</body>
	<iframe width=174 height=189 name="gToday:normal:calender/agenda.js" id="gToday:normal:calender/agenda.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
	</iframe>