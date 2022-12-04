<?php
    session_start();
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Web KRRS</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/dc636bd3ef.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style2.css">
  
</head>
<body>
  <nav>
    <img src="/web/assets/un4.png"class="mascot">
    <label class="logo">Pengisian KRRS UNTAR</label>
    <ul class="btn-group mr2">
        <li><a class="btn btn-outline-warning" href="/web/mahasiswa/index.php">Home</a></li>
        <li><a class="btn btn-outline-warning" href="/web/mahasiswa/tentang.html" target="_blank">Tentang</a></li>
        <li><a class="btn btn-outline-warning" href="/web/mahasiswa/kontak.html" target="_blank">Kontak</a></li>
        <li><a class="btn btn-outline-warning" href="/web/mahasiswa/masukkan.html" target="_blank">Masukan</a></li>
    </ul>
  </nav>
  
  <div class="sidebar">
    <header>Menu</header>
    <ul>
      <li><a href="/web/mahasiswa/profil.php"><i class="fas fa-user"></i>Profil</a></li>
      <li><a href="/web/mahasiswa/lintar.html"><i class="fas fa-address-book"></i>Lintar Mahasiswa</a></li>
      <li><a href="/web/mahasiswa/status.php"><i class="fas fa-address-card"></i>Status Registrasi</a></li>
      <li><a href="/web/mahasiswa/panduan.html"><i class="fas fa-file"></i>Panduan KRRS</a></li>
      <li><a href="/web/mahasiswa/krrs.php"><i class="fas fa-pen"></i>KRRS Reguler</a></li>
      <li><a href="/web/mahasiswa/cetakkrrs.php" target="_blank"><i class="fas fa-print"></i>Cetak KRRS</a></li>
      <li><a href="/web/mahasiswa/logout.html"><i class="fas fa-circle-xmark"></i>LOG OUT</a></li>
    </ul>
  </div>

<div class="dmahasiswa">
    <form method="post">
        
    <h1>Data Mahasiswa</h1>
    <div class="forms">
    <table>
        <tr>
            <td><label for="nim">Nomor Pokok Mahasiswa: </label></td>
            <td><input type="text" id="nim" name="nim" placeholder="NIM"></td>
        </tr>

        <tr>
            <td><label for="nama">Nama Mahasiswa: </label></td>
            <td><input type="text" id="nama" name="nama" placeholder="Nama Mahasiswa"></td>
        </tr>

        <tr>
            <td><label for="ttl">Tempat, Tanggal Lahir:</label></td>
            <td><input type="text" id="ttl" name="ttl" placeholder="Tempat, Tanggal Lahir"></td>
        </tr>
        
        <tr>
            <td><label for="gender"> Jenis Kelamin :</label></td>
            <td><input type="radio" id="gender" name="gender" value="Laki-laki"> Laki-laki
                <input type="radio" id="gender" name="gender" value="Perempuan"> Perempuan
            </td>
        </tr>

        <tr>
            <td><label for="agama">Agama:</label></td>
            <td><input type="text" id="agama" name="agama"placeholder="Agama"></td>
        </tr>

        <tr>
            <td><label for="alamat">Alamat:</label></td>
            <td><textarea id="alamat" name="alamat" placeholder="Alamat"></textarea></td>
        </tr>

        <tr>
            <td><label for="telp">Telephone:</label></td>
            <td><input type="text" id="telp" name="telp" placeholder="Nomor Telepon"></td>
        </tr>

        <tr>
            <td><label for="email">Email:</label></td>
            <td><input type="text" id="email" name="email" placeholder="Email"></td>
        </tr>
    </table>
    </div>
    

    <h1>Data Sekolah</h1>
    <div class="forms">
    <table>
        <tr>
            <td><label for="sekolah">Asal Sekolah:</label></td>
            <td><input type="text" id="sekolah" name="sekolah" placeholder="Nama Asal Sekolah"></td>
        </tr>

        <tr>
            <td><label for="ijazah">No. Ijazah:</label></td>
            <td><input type="text" id="ijazah" name="ijazah" placeholder="Nomor Ijazah"></td>
        </tr>

        <tr>
            <td><label for="tglijazah">Tanggal Ijazah:</label></td>
            <td><input type="date" id="tglijazah" name="tglijazah" placeholder="Tanggal Ijazah"></td>
        </tr>
        
        <tr>
            <td><label for="foto">Upload Foto Ijazah</label></td>
            <td><input type="file" class="form-control-file" id="foto" name="foto"></td>
        </tr>
    </table>
    </div>

    <h1>Data Orang Tua / Wali</h1>
    <div class="forms">
    <table>
        <tr>
            <td><label for="namaortu">Nama Orang Tua/Wali:</label></td>
            <td><input type="text" id="nama" name="namaortu" placeholder="Nama Orang Tua"></td>
        </tr>

        <tr>
            <td><label for="alamat">Alamat:</label></td>
            <td><input type="text" id="alamat" name="alamatortu" placeholder="Alamat Orang Tua"></td>
        </tr>

        <tr>
            <td><label for="telp">Telepon:</label></td>
            <td><input type="text" id="telp" name="telportu" placeholder="Telepon Orang Tua"></td>
        </tr>        
    </table>
    </div>

    <button type="submit" class="btn btn-primary" name="simpan">Submit</button>
    </form>
  
</div>
   <?php 
        include 'koneksi.php';
        
        if (isset($_POST['simpan'])) {
            $insert = mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES ('".$_POST['nim']."', '".$_POST['nama']."', '".$_POST['ttl']."', '".$_POST['gender']."', '".$_POST['agama']."', '".$_POST['alamat']."', '".$_POST['telp']."', '".$_POST['email']."')");
            $insert2 = mysqli_query($koneksi, "INSERT INTO sekolah VALUES ('".$_POST['sekolah']."', '".$_POST['ijazah']."', '".$_POST['tglijazah']."', '".$_POST['foto']."')");
            $insert3 = mysqli_query($koneksi, "INSERT INTO pembimbing VALUES ('".$_POST['namaortu']."', '".$_POST['alamatortu']."', '".$_POST['telportu']."')");
            if ($insert) {
                echo "<script>
                        alert('Data berhasil diinput');
                        document.location = '/web/mahasiswa/profil.php';</script>";
            } else {
                echo "<script>
                        alert('Data gagal diinput');
                        document.location = '/web/mahasiswa/profil.php';</script>";
            }
        }
   ?>

<script src="krrs.js"></script>

</body>
</html>