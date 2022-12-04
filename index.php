<?php
    session_start();
    include "koneksi.php";
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
<style class="text/css">
body{
  background: rgba(0,0,0,0.5);
  background-image: url(/web/assets/untar.jpg);
  background-size: cover;
}
</style>
<body>

  <div class="container">
    <h2 class="text-center"><img src="/web/assets/un4.png" width="50px" height="50px"><br>Login</h2>
    <hr>
    <form id="loginform" action="" method="post">
      <div class="form-group">
        <label for="username">Username</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-user"></i></div>
            <input type="text" class="form-control" id="username" name="username" placeholder="username">
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
            <input type="password" class="form-control" id="password" name="password" placeholder="password">
          </div>
        </div>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Remember Me</label>
      </div>
      <button type="submit" class="btn btn-primary" name="login">Login</button>
      <p>Don't have account? <a href="signup.php">click here</a></p>
    </form>

    <?php
        if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $qry = mysqli_query($koneksi, "SELECT * FROM login WHERE username = '$username' AND password = '$password'");
            $check = mysqli_num_rows($qry);
            $username = $check['username'];
            $password = $check['password'];
            $role = $check['role'];
            if ($check > 0) {
              $data = mysqli_fetch_assoc($qry);
              session_start();
              if ($data['role'] == "admin") {
                session_start();
                $_SESSION['username'] = $data['username'];
                $_SESSION['role'] = "admin";
                header("location:/web/admin/index.php");
              } else {
                session_start();
                $_SESSION['username'] = $data['username'];
                $_SESSION['role'] = "mahasiswa";
                header("location:/web/mahasiswa/index.php");
              }
            }
        }
    ?>

  </div>
</body>
</html>