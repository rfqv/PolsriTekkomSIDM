<?php
include"koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <script language='JavaScript'>
    var txt=".:::. Sistem Informasi Data Mahasiswa | Teknik Komputer POLSRI ";
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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top" style="background:#aa0d74;">
      <div class="container-fluid">
        <div class="collapse navbar-collapse">
        <div class="nav navbar-nav navbar-right">
         <ul id="nav">
          <li ><a href="index.php" style="color:#fff;"><span class="glyphicon glyphicon-home"> Beranda | </span></a></li>
	      <li ><a href="profil.php" style="color:#fff;"><span class="glyphicon glyphicon-globe"> Profil | </span></a></li>
          <li class="a"><a href="cara_pesan.php" style="color:#fff;"><span class="glyphicon glyphicon-question-sign"> Cari | </span></a></li>
          <li class="a"><a href="login.php" style="color:#fff;"><span class="glyphicon glyphicon-log-in"> Masuk</span></a></li>
          </ul>
          <div class="clear"></div>
          
          </div>
      </div>
    </nav>
    <div class="jumbotron">
      <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-4" style="padding-top:10px;left:200px;">
     <img width="200px" height="200px" src="img/logopolsri.png"><img src="img/logotekkom.jpeg">  
    </div>
      <div class="col-md-6" style="margin:auto;left:200px;">
        <h2><b>Sistem Informasi Data Mahasiswa<h1 style="color:#800280;">Teknik<b> Komputer</b></h1></h2>
        <h2>Politeknik Negeri Sriwijaya</h2>
      </div>
    </div>
    </div>
        <div class="footer">
        <center>&copy; 2021 M. Rifqi Virgiansyah</center>
        </div>
      </div>
  </body>
</html>
