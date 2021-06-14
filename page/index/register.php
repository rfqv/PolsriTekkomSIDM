<!DOCTYPE html>
<html>
<head>
    <title>Registrasi Mahasiswa Baru</title>
</head>

<body>
    <header>
        <h3>Registrasi Mahasiswa Baru</h3>
    </header>
    <form action="register_process.php" method="POST">
        <fieldset>
        <p>
            <label for="nama">Nama *) : </label>
            <input type="text" name="nama" placeholder="Nama Lengkap" />
        </p>
        <p>
            <label for="npm">NPM : </label>
            <input type="text" name="npm" placeholder="NPM" />
        </p>
        <p>
            <label for="nik">No. KTP/NIK : </label>
            <input type="text" name="nik" placeholder="No KTP/ NIK" />
        </p>
        <p>
            <label for="tempatlahir">Tempat Lahir *) : </label>
            <input type="text" name="tempatlahir" placeholder="Tempat Lahir" />
        </p>
        <p>
            <label for="tanggallahir">Tanggal Lahir *) : </label>
            <input type="text" name="tanggallahir" placeholder="Tanggal Lahir" />
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin *) : </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan">Perempuan</label>
        </p>
        <p>
            <label for="jenis_kelamin">Golongan Darah : </label>
            <label><input type="radio" name="gd" value="A">A</label>
            <label><input type="radio" name="gd" value="B">B</label>
            <label><input type="radio" name="gd" value="AB">AB</label>
            <label><input type="radio" name="gd" value="O">O</label>
        </p>
        <p>
            <label for="agama">Agama : </label>
            <select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
        </p>
        <p>
            <label for="jurusan">Jurusan : </label>
            <input type="text" name="jurusan" placeholder="Jurusan" />
        </p>
        <p>
            <label for="prodi">Program Studi : </label>
            <input type="text" name="prodi" placeholder="Program Studi" />
        </p>
        <p>
            <label for="jenjang">Jenjang : </label>
            <input type="text" name="jenjang" placeholder="Jenjang" />
        </p>
        <p>
            <label for="nmayah">Nama Ayah : </label>
            <input type="text" name="nmayah" placeholder="Nama Ayah" />
        </p>
        <p>
            <label for="nmibu">Nama Ibu : </label>
            <input type="text" name="nmibu" placeholder="Nama Ibu" />
        </p>
        <p>
            <label for="alamatmhs">Alamat Mahasiswa : </label>
            <textarea name="alamatmhs"></textarea>
        </p>
        <p>
            <label for="alamatortu">Alamat Orang Tua : </label>
            <textarea name="alamatortu"></textarea>
        </p>
        <p>
            <label for="kodepos">Kode Pos : </label>
            <input type="text" name="kodepos" placeholder="Kode Pos" />
            <label for="nohp">No. Telp/HP : </label>
            <input type="text" name="nohp" placeholder="No. Telp/HP" />
        </p>
        <p>
            <label for="email">Email : </label>
            <input type="text" name="email" placeholder="Email" />
        </p>
        <p>
            <label for="thnmsuk">Tahun Masuk : </label>
            <input type="text" name="thnmsuk" placeholder="Tahun Masuk" />
        </p>
        <p>
            <label for="ijazah">Ijazah (SLTA/D3) : </label>
            <input type="fupload" type="file" id="fupload" />
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>