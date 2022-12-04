<html lang="en">
<head>
  <style>
    body{
        text-align: center;
    }
    .maincetak{
        margin-left: 20%;
        margin-right: 20%;
    }
    .tab{
        tab-size: 10;
    }
    .sobekdisini{
        text-align: center;
    }
  </style>
  <meta charset="UTF-8">
  <title>Cetak KRRS</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/dc636bd3ef.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style2.css">
  
</head>
<body>
<div class="maincetak">
  <div style="border-bottom: 2px solid #900; margin-bottom: 10px;">
    <table border="0" cellpadding="0" width="100%" style="margin: 0;">
      <tbody>
        <tr>
            <td width="10%">
                <img src="/web/assets/LogoUntarCetakKRRS.png" width="80">
            </td>
            <td align="center">
                <div style="font-size: 24px;">
                <b>UNIVERSITAS TARUMANEGARA</b>
            </div>
            <div>Jl. Letjen S.Parman No.1 Jakarta Barat, 11440</div>
            <div>www.untar.ac.id</div>
            </td>
            <td width="10%"></td>
        </tr>
      </tbody>
    </table>
  </div>
  <div style="margin: 0;text-align:center">
    <h5 style="margin: 0;">KARTU STUDI SEMENTARA</h5>
    " TAHUN AJARAN 2022/2023 SEMESTER GANJIL "
  </div>
  <div>
    <br>
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
  </div>
  <table class="table" border="1px solid black" id="tabelcetakkrrs">
    <thead class="thead-dark">
        <tr>
            <th>Kode</th>
            <th>Nama Matakuliah</th>
            <th>Kelas</th>
            <th>Sks</th>
            <th>Hari</th>
            <th>Waktu</th>
            <th>Ruang</th>
        </tr>
    </thead>
    <tbody>
        <?php 
                include "koneksi.php";
                
                if (isset($_POST['simpan'])) {
                    $checked = $_POST['checked'];
                    $count = count($checked);

                    for($i = 0; $i < $count; $i++){
                      $check[] = (int)$checked[$i];
                    }
                    $data2 = "'".implode("','",$check)."'";
                    $ambildata = mysqli_query($koneksi, "SELECT * FROM matkul WHERE id IN ($data2)");
                }

                
                $no = 1;
                while($data = mysqli_fetch_array($ambildata)){
		        ?>
		        <tr>
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


<div class="sobekdisini">
    <br><br>
    <p><pre class="tab">        ------------------------------- Sobek Disini -------------------------------        </pre></p>
</div>
<p>PERHATIAN</p>
<p><pre class="tab">    Nomor Registrasi anda adalah</pre></p>
<pre class="tab">    <?php echo rand() . "\n";
                              ?><pre>
<p><pre class="tab">    Harap catat dan ingat nomor ini dan jangan diperlihatkan ke orang lain</pre></p>
<p><pre class="tab">    KSS ini sebagai bukti pengambilan KSM (Kartu Studi Mahasiswa)</pre></p>
</div>
</body>
</html>