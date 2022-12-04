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
    <header>Hi, <?php echo $_SESSION['username']; ?></header>
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

  <div class="content">
    <h2>KRRS Online Mahasiswa</h2>
    <p>Selamat datang di Web KRRS Online Mahasiswa untuk melakukan Pengisian KRRS ONLINE dan CETAK KSS ONLINE.</p>
    <br>
    <h3>Perhatian Untuk Seluruh Mahasiswa.</h3>
    <p style="color: red;">1. Cetak KSS (Kartu Study Sementara) saat telah selesai pengisian KRRS ONLINE untuk bukti pengisian dan pengambilan KSM (Kartu Studi Mahasiswa)</p>
    <p>2. Sebelum mengisi KRRS Online anda diharuskan sudah mempersiapkan mata kuliah yang akan diambil</p>
    <p>3. Anda tidak dapat mengisi KRRS ONLINE Apabila masih menunggak pembayaran kuliah</p>
    <p style="color: red;">4. Panduan pengisian KRRS ONLINE dapat anda lihat di Panduan KRRS</p>
  </div>
</body>
</html>