<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Web KRRS</title>
  <style>
    .tab{
        tab-size: 10;
    }
  </style>
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

  <div class="krrs">
    <div class="krrstitle">
        <h1>KRRS MAHASISWA</h1>
    </div>
    <?php 
        include "koneksi.php";
        session_start();
        $username = $_SESSION['username'];
        $ambildata = mysqli_query($koneksi, "SELECT * FROM nilai WHERE username = '$username' ");
        $no = 1;
        while($data = mysqli_fetch_array($ambildata)){
		?>
    <h3><pre class="tab">NIM/Nama            : <?php echo $data['username']; ?>/<?php echo $data['nama']; ?></span></pre></h3>
    <h3><pre class="tab">IPS terakhir        : <?php echo $data['ips']; ?></pre></h3>
    <h3><pre class="tab">SKS kumulatif       : <?php echo $data['sks']; ?></pre></h3>
    <h3><pre class="tab">IPK Kini            : <?php echo $data['ipkkini']; ?></pre></h3>
    <?php } ?>
    <table class="table" border="1px solid black">
    <form id="createform" action="cetakkrrs.php" method="post">
        <thead class="thead-dark">
            <tr>
                <th>Pilih</th>
                <th>Kode</th>
                <th>Nama Matakuliah</th>
                <th>Kelas</th>
                <th>SKS</th>
                <th>Hari</th>
                <th>Waktu</th>
                <th>Ruangan</th>
            </tr>
        </thead>
        <tbody>
        <?php 
                include "koneksi.php";

                $ambildata = mysqli_query($koneksi, "SELECT * FROM matkul");
                $no = 1;
                while($data = mysqli_fetch_array($ambildata)){
		        ?>
		        <tr>
                    <td><input type="checkbox" name="checked[]" class="chkbox" value="<?php echo $data['id']; ?>"></td>
                    <td><?php echo $data['id']; ?></div></td>
                    <td><?php echo $data['matakuliah']; ?></div></td>
                    <td><?php echo $data['kelas']; ?></div></td>
                    <td><?php echo $data['sks']; ?></div></td>
                    <td><?php echo $data['hari']; ?></div></td>
                    <td><?php echo $data['waktu']; ?></div></td>
                    <td><?php echo $data['ruangan']; ?></div></td> 
                      <?php } ?>		
		        </tr>   
        </tbody>
    </table>
    <a class="btn btn-outline-dark" href="index.php">Halaman Utama</a>
    <button type="submit" class="btn btn-primary" name="simpan">Submit</button>
    </form>
    
  </div>
</body>
</html>