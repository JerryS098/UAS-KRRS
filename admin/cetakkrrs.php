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
                <img src="/assets/LogoUntarCetakKRRS.png" width="80">
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
    <h5><pre class="tab">NIM/Nama            : <span id="nimout"></span> / <span id="namaout"></span></pre></h5>
    <h5><pre class="tab">IPS terakhir        : </pre></h5>
    <h5><pre class="tab">SKS kumulatif       : </pre></h5>
    <h5><pre class="tab">IPK Kini            : </pre></h5>
  </div>
  <table class="table" border="1px solid black" id="tabelcetakkrrs">
    <thead class="thead-dark">
        <tr>
            <th>Kode</th>
            <th>Nama Matakuliah</th>
            <th>SKS</th>
            <th>Kelas</th>
            <th>Hari</th>
            <th>Waktu</th>
            <th>Dosen</th>
            <th>Ruang</th>
        </tr>
    </thead>
    <tbody id="tabelcetakkrrs">

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
<script src="krrs.js"></script>
<script>
  var nomormahasiswa = localStorage.getItem("nimvalue");
  var namamahasiswa = localStorage.getItem("namavalue");
  document.getElementById('nimout').innerHTML=localStorage.getItem("nimvalue");
  document.getElementById('namaout').innerHTML=localStorage.getItem("namavalue");

  var localarray = localStorage.getItem('Arraycheckboxvalue');
  var thearray = JSON.parse(localarray);

  var table = document.getElementById('tabelcetakkrrs');

  for(i = 0; i < thearray.length; i++) {
    if (thearray[i] === '1234') {
        var row = `<tr>
                    <td>1234</td>
                    <td>Introduction to Algorithm</div></td>
                    <td>4</td>
                    <td>A</td>
                    <td>Senin</td>
                    <td>07.30-11.10</td>
                    <td>Udin S.kom, M.Kom</td>
                    <td>R804</td>
                  </tr>`
        table.innerHTML += row;
    } else if (thearray[i] === '5678') {
      var row = `<tr>
                    <td>5678</td>
                    <td>Computation</div></td>
                    <td>4</td>
                    <td>A</td>
                    <td>Selasa</td>
                    <td>07.30-11.10</td>
                    <td>Kelly Hermawan S.kom, M.Kom</td>
                    <td>R904</td>
                  </tr>`
        table.innerHTML += row;
    } else if (thearray[i] === '1290') {
      var row = `<tr>
                    <td>1290</td>
                    <td>Computer Hardware & Computer Software</div></td>
                    <td>6</td>
                    <td>A</td>
                    <td>Rabu</td>
                    <td>09.30-15.10</td>
                    <td>Ucok Halim S.kom, M.SI</td>
                    <td>lab 901</td>
                  </tr>`
        table.innerHTML += row;
    } else if (thearray[i] === '4912') {
      var row = `<tr>
                    <td>4912</td>
                    <td>Game Development</div></td>
                    <td>4</td>
                    <td>A</td>
                    <td>Selasa</td>
                    <td>13.30-17.10</td>
                    <td>Gerry Hasanuddin S.SI, M.Sc</td>
                    <td>lab 601</td>
                  </tr>`
        table.innerHTML += row;
    } else if (thearray[i] === '6741') {
      var row = `<tr>
                    <td>6741</td>
                    <td>Operating System</div></td>
                    <td>4</td>
                    <td>A</td>
                    <td>Jumat</td>
                    <td>11.30-15.10</td>
                    <td>Tedy Wawan Ir., M.T.I., Dr.</td>
                    <td>lab oracle lt. 12</td>
                  </tr>`
        table.innerHTML += row;
    } else if (thearray[i] === '9185') {
      var row = `<tr>
                    <td>9185</td>
                    <td>Artificial Intelligence</div></td>
                    <td>4</td>
                    <td>A</td>
                    <td>Kamis</td>
                    <td>07.30-11.10</td>
                    <td>Muhammad Fahnudin ST, M.Sc</td>
                    <td>R804</td>
                  </tr>`
        table.innerHTML += row;
    } else if (thearray[i] === '1067') {
      var row = `<tr>
                    <td>1067</td>
                    <td>Web Programming</div></td>
                    <td>4</td>
                    <td>A</td>
                    <td>Senin</td>
                    <td>13.30-17.10</td>
                    <td>Tomy Herman S.kom, M.Kom</td>
                    <td>lab 601</td>
                  </tr>`
        table.innerHTML += row;
    } else if (thearray[i] === '7956') {
      var row = `<tr>
                    <td>7956</td>
                    <td>Data Entry</div></td>
                    <td>4</td>
                    <td>A</td>
                    <td>Jumat</td>
                    <td>13.30-17.10</td>
                    <td>Yessa Kristanto S.T, M.Kom</td>
                    <td>R901</td>
                  </tr>`
        table.innerHTML += row;
    }
  }


</script>
</body>
</html>
