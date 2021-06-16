<!doctype html>
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
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <meta property="og:site_name" content="Sistem Informasi Data Mahasiswa Teknik Komputer POLSRI">
    <meta property="og:title" content="Sistem Informasi Data Mahasiswa | Teknik Komputer POLSRI" />
    <meta property="og:description" content="Sistem Informasi Data Mahasiswa Teknik Komputer POLSRI" />
    <meta property="og:image" content="https://www.polsri.ac.id/files/2011/01/logo-polsri.png">
    <meta property="og:type" content="website" />
    <meta property="og:updated_time" content="1440432930" />
    <link rel="icon" href="img/logopolsri.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar fixed-top navbar-expand-sm navbar-dark" style="background-color:#800280;">
      <div class="container">
      <a href="#" class="navbar-brand">
        SIDM
      </a>
      <button
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarNav"
      class="navbar-toggler"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav nav">
          <li class="nav-item active">
            <a href="index.php" class="nav-link">
              Beranda
            </a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle"
            id="navbarDropdown"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
            >
              Menu
            </a>
            <ul class="dropdown-menu"
            aria-labelledby="navbarDropdown">
              <li><a href="profil.php" class="dropdown-item">Profil</a></li>
              <li><a href="kontak.php" class="dropdown-item">Kontak</a></li>
              <li><a href="galeri.php" class="dropdown-item">Galeri</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="login.php" class="nav-link">
              Login
            </a>
          </li>
        </ul>
      </div>
      <form class="d-flex">
        <input type="text" class="form-control me-2">
        <button type="submit" class="btn btn-light">Cari</button>
      </form>
    </div>
    </nav>
    <div class="container-fluid bg-light jumbotron">
        <div class="row">
            <div class="col d-flex" align="center">
                <img class="responsive" src="img/logopolsri.png">
                <img class="responsive" src="img/logotekkom.png">
            </div>
            <div class="row d-flex" align="center" style="margin:auto;color:#800280;">
                <h2 class="text-sidm">Sistem Informasi Data Mahasiswa</h3>
                <h1 class="text-tekkom">Teknik<b> Komputer</b></h1>
                <h2 class="text-polsri">Politeknik Negeri Sriwijaya</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-light jumbotron-responsive">
        <div class="row">
            <div class="col" align="center">
                <img class="responsive" src="img/logopolsri.png">
            </div>
            <div class="col" align="center">
                <img class="responsive" src="img/logotekkom.png">
            </div>
            <div class="row" align="center" style="margin:auto;color:#800280;">
                <h2 class="text-sidm">Sistem Informasi Data Mahasiswa</h3>
                <h1 class="text-tekkom">Teknik<b> Komputer</b></h1>
                <h2 class="text-polsri">Politeknik Negeri Sriwijaya</h2>
            </div>
        </div>
    </div>
    <div class="footer fixed-bottom">
      <p>&copy; 2021 | M. Rifqi Virgiansyah</p>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>