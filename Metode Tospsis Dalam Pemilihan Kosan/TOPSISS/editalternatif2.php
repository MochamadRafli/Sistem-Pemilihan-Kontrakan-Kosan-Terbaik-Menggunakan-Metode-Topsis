<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SPK PEMILIHAN KOSAN DAN KONTRAKAN METODE TOPSIS</title>
    <!--bootstrap-->
    <link href="tampilan/css/bootstrap.min.css" rel="stylesheet">

  </head>
<body>
      <nav class="">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Sistem Pendukung Keputusan Kosan Dan kontrakan Metode Topsis</a>
        </div>

        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="kriteria.php">Kriteria</a>
            </li>
            <li>
              <a href="alternatif.php">Alternatif</a>
            </li>
            <li>
              <a href="nilmat.php">Nilai Matriks</a>
            </li>
            <li>
              <a href="hastop.php">Hasil Topsis</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">

      <div class="row">
        <!--form alternatif-->
        <div class="col-lg-6 col-lg-offset-3">
          <div class="panel panel-default">
      <div class="panel-heading text-center">
            Edit Detail
      </div>
  <a href="form_simpan.php">Tambah Data</a><br><br>
            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12">
  <table border="1" width="100%">
  <tr>
    <th>Foto</th>
    <th>ID</th>
    <th>Nama Kos</th>
    <th>Telpon</th>
    <th>Alamat</th>
    <th colspan="2">Aksi</th>
  </tr>
  <?php
  // Load file koneksi.php
  include "koneksi.php";

  // Buat query untuk menampilkan semua data siswa
  $sql = $pdo->prepare(" SELECT * FROM tab_detail ");
  $sql->execute(); // Eksekusi querynya

  while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td><img src='gambar/".$data['foto']."' width='100' height='100'></td>";
    echo "<td>".$data['id']."</td>";
    echo "<td>".$data['nama Kos']."</td>";
    echo "<td>".$data['telpon']."</td>";
    echo "<td>".$data['alamat']."</td>";
    echo "<td><a href='form_ubah.php?id=".$data['id']."'>Ubah</a></td>";
    echo "<td><a href='proses_hapus.php?id=".$data['id']."'>Hapus</a></td>";
    echo "</tr>";
  }
  ?>
  </table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

      <footer class="text-center">
      <div class="footer-below">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <em>Sistem Pendukung Keputusan Kosan Dan Kontrakan Metode Topsis</em>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!--plugin-->
    <script src="tampilan/js/bootstrap.min.js"></script>
</body>
</html>