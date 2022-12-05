<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Halaman Sign In Web KRRS</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style2.css">
  
</head>
<style>
  body{
    background: rgba(0,0,0,0.5);
    background-image: url(/web/assets/untar.jpg);
    background-size: cover;
  }
  </style>
<body>
  <div class="container">
    <h2 class="text-center"><img src="/web/assets/un4.png" width="50px" height="50px"><br>Register</h2>
    <hr>
    <form id="loginform" action="" method="post">

      <div class="form-group">
        <label for="username">NIM</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-user"></i></div>
            <input type="text" class="form-control" id="username" name="username" placeholder="enter username">
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-user"></i></div>
            <input type="email" class="form-control" id="email" name="email" placeholder="enter email">
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="nama">Nama</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-user"></i></div>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="enter name">
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
            <input type="password" class="form-control" id="password" name="password" placeholder="enter password">
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="role">Role</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <select name="role" class="form-control" id="role">
                <option value="mahasiswa">mahasiswa</option>
            </select>
          </div>
        </div>
      </div>


      <button type="submit" class="btn btn-primary" name="simpan">Save</button>
      <p id="akses"></p>
    </form>
  </div>

  <?php 
        include 'koneksi.php';
        
        if (isset($_POST['simpan'])) {
            $insert = mysqli_query($koneksi, "INSERT INTO login VALUES ('".$_POST['username']."', '".$_POST['email']."', '".$_POST['nama']."', '".$_POST['password']."', '".$_POST['role']."')");
            if ($insert) {
                echo "<script>
                        alert('Data berhasil diinput');
                        document.location = 'index.php';</script>";
            } else {
                echo "<script>
                        alert('Data gagal diinput');
                        document.location = 'index.php';</script>";
            }
        }
    ?>

  
  <script src="https://kit.fontawesome.com/dc636bd3ef.js" crossorigin="anonymous"></script>
</body>
</html>