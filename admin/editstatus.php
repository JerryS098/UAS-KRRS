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

    <?php
        include "koneksi.php";
        $id = $_GET['id'];
        $edit = mysqli_query($koneksi, "SELECT * FROM status WHERE id = '".$_GET['id']."' ");
        $data = mysqli_fetch_array($edit)
	?>

    <div class="container">
    <form id="loginform" action="" method="post">

    <div class="form-group">
        <label for="ipk">IPK > 2</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <select name="ipk" class="form-control" id="ipk" value="<?php echo $data['ipk'] ?>">
                <option value="Sudah">Sudah</option>
                <option value="Belum">Belum</option>
            </select>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="tagihan">Tagihan</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <select name="tagihan" class="form-control" id="tagihan" value="<?php echo $data['tagihan']?>">
                <option value="Lunas">Lunas</option>
                <option value="Belum">Belum</option>
            </select>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="kehadiran">Kehadiran > 75%</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <select name="kehadiran" class="form-control" id="kehadiran" value="<?php echo $data['kehadiran'] ?>">
                <option value="Sudah">Sudah</option>
                <option value="Belum">Belum</option>
            </select>
          </div>
        </div>
      </div>

      <button type="submit" class="btn btn-primary" name="edit">Save</button>
    </form>
    </div>

    <?php      
        if (isset($_POST['edit'])) {
            $update = mysqli_query($koneksi, "UPDATE status SET ipk = '".$_POST['ipk']."', tagihan = '".$_POST['tagihan']."', kehadiran = '".$_POST['kehadiran']."' WHERE id = '".$_GET['id']."'");
            if ($update) {
                echo "<script>
                        alert('Data berhasil diupdate');
                        document.location = '/web/admin/status.php';</script>";
            } else {
                echo "<script>
                        alert('Data gagal diupdate');
                        document.location = '/web/admin/status.php';</script>";
            }
        }
    ?>
  </div>
</body>
</html>