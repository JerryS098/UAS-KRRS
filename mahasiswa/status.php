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
    <img src="/web/assets/LogoUntar.png"class="mascot">
    <label class="logo">Pengisian KRRS UNTAR</label>
  </nav>

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

  <div class="content">
    <h2>Status Registrasi</h2>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>IPK > 2</th>
                <th>Tagihan</th>
                <th>Kehadiran > 75% </th>
            </tr>
        </thead>
        <tbody class="list">
            <?php 
                include "koneksi.php";
                session_start();
                $username = $_SESSION['username'];
                $ambildata = mysqli_query($koneksi, "SELECT * FROM status WHERE username = '$username' ");
                $no = 1;
                while($data = mysqli_fetch_array($ambildata)){
		        ?>
		        <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['username']; ?></div></td>
                    <td><div class="status"><?php echo $data['ipk']; ?></div></td>
                    <td><div class="status"><?php echo $data['tagihan']; ?></div></td>
                    <td><div class="status"><?php echo $data['kehadiran']; ?></div></td>
                    <td>
                      <?php } ?>		
			        </td>
		        </tr>
        </tbody>
    </table>
  </div>
</body>
</html>