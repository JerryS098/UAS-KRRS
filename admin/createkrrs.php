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
<style class="text/css">
  body{
    background: rgba(0,0,0,0.5);
    background-image: url(/web/assets/untar.jpg);
    background-size: cover;
  }
</style>

  
    <div class="container">
    <form id="createform" action="" method="post">

      <?php 
                include "koneksi.php";
                $ambildata = mysqli_query($koneksi, "SELECT * FROM login");
                $no = 1;         
		    ?>
      <div class="form-group">
        <label for="username_id">Username</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <select name="username" class="form-control" id="username_id">
              <?php foreach($ambildata as $data) : ?>
                <option value="<?php echo $data['username']; ?>"><?php echo $data['username']; ?>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
      </div>
      

      <div class="form-group">
        <label for="nama">Nama</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <td><input type="text" id="nama" name="nama" placeholder="Nama"></td>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="ips">IPS</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <td><input type="text" id="ips" name="ips" placeholder="IPS Terakhir"></td>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="sks">SKS Kumulatif</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <td><input type="text" id="sks" name="sks" placeholder="SKS Kumulatif"></td>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="ipkkini">IPK Kini</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <td><input type="text" id="ipkkini" name="ipkkini" placeholder="IPK Kini"></td>
          </div>
        </div>
      </div>

      <button type="submit" class="btn btn-primary" name="simpan">Save</button>
    </form>
  </div>

    <?php 
        include 'koneksi.php';
        
        if (isset($_POST['simpan'])) {
            $username = $_POST['username'];
            $nama = $_POST['nama'];
            $ips = $_POST['ips'];
            $sks = $_POST['sks'];
            $ipkkini = $_POST['ipkkini'];
            $insert = mysqli_query($koneksi, "INSERT INTO nilai(username, nama, ips, sks, ipkkini) VALUES ('$username', '$nama', '$ips', '$sks', '$ipkkini')");
            if ($insert) {
                echo "<script>
                        alert('Data berhasil diinput');
                        document.location = '/web/admin/krrs.php';</script>";
            } else {
                echo "<script>
                        alert('Data gagal diinput');
                        document.location = '/web/admin/krrs.php';</script>";
            }
        }
    ?>
  </div>
</body>
</html>