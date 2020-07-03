<?php
//koneksi
session_start();
include "koneksi.php";

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SPK PEMILIHAN KOSAN DAN KONTRAKAN METODE TOPSIS</title>
    <!--bootstrap-->
    <link href="tampilan/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles/slider.css" rel="stylesheet" type="text/css" media="all">

  </head>
  <body><br>
  	<h1></h1>
  	<h3>Login disini:</h3>
  	<form action="proses_login.php" method="post">
  		<table>
  			<tr>
  				<td>username</td>
  				<td><input type="text" name="username"></td>
  			</tr>
   			<tr>
  				<td>password</td>
  				<td><input type="password" name="password"></td>
  			</tr>
  			<tr>
  				<td></td>
  				<td><input type="submit" value="masuk"></td>
  			</tr>
  		</table>
  	</form>
  </body>


    <!--footer-->
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
