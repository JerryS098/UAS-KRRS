<?php
    session_start();
    include 'koneksi.php';
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
        <li><a class="btn btn-outline-warning" href="/web/admin/index.php">Home</a></li>
        <li><a class="btn btn-outline-warning" href="/web/admin/tentang.html" target="_blank">Tentang</a></li>
        <li><a class="btn btn-outline-warning" href="/web/admin/kontak.html" target="_blank">Kontak</a></li>
        <li><a class="btn btn-outline-warning" href="/web/admin/masukkan.html" target="_blank">Masukan</a></li>
    </ul>
  </nav>
  
  <div class="sidebar">
    <header>Menu</header>
    <ul>
      <li><a href="/web/admin/profil.html"><i class="fas fa-user"></i>Profil</a></li>
      <li><a href="/web/admin/lintar.html"><i class="fas fa-address-book"></i>Lintar Mahasiswa</a></li>
      <li><a href="/web/admin/status.php"><i class="fas fa-address-card"></i>Status Registrasi</a></li>
      <li><a href="/web/admin/panduan.html"><i class="fas fa-file"></i>Panduan KRRS</a></li>
      <li><a href="/web/admin/krrs.php"><i class="fas fa-pen"></i>KRRS Reguler</a></li>
      <li><a href="/web/admin/cetakkrrs.php" target="_blank"><i class="fas fa-print"></i>Cetak KRRS</a></li>
      <li><a href="/web/admin/logout.html"><i class="fas fa-circle-xmark"></i>LOG OUT</a></li>
    </ul>
  </div>

<div class="content">
    Tabel Mahasiswa
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Tempat Tanggal Lahir</th>
                <th>Jenis Kelamin </th>
                <th>Agama</th>
                <th>Alamat</th>
                <th>Telp</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody class="list">
            <?php 
                include "koneksi.php";
                $username = $_GET['username'];
                $ambildata = mysqli_query($koneksi, "SELECT mahasiswa.*, login.username from mahasiswa join login on mahasiswa.username = login.username WHERE mahasiswa.username = '$username'");
                $no = 1;
                while($data = mysqli_fetch_array($ambildata)){
		        ?>
		        <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['username']; ?></div></td>
                    <td><?php echo $data['nama']; ?></div></td>
                    <td><?php echo $data['ttl']; ?></div></td>
                    <td><?php echo $data['gender']; ?></div></td>
                    <td><?php echo $data['agama']; ?></div></td>
                    <td><?php echo $data['alamat']; ?></div></td>
                    <td><?php echo $data['telp']; ?></div></td>
                    <td><?php echo $data['email']; ?></div></td>
                      <?php } ?>		
		        </tr>
        </tbody>
    </table>
</div>
</body>
</html>