<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" type="text/css" href="file:///C:/xampp/htdocs/adita/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="file:///C:/xampp/htdocs/adita/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Informasi RPL</title>
</head>
<body>
    <style>
        header {
            background-color: aqua;
            color: grey;
            text-align: center;
            padding: 5px;
        }
  
        nav {
            background-color: grey;
            color: aqua;
            text-align: center;
            padding: 5px;
        }
        </style>   
  
      <header>
          <div class="mt-3">
              <h2>SMK NEGERI 5 KOTA BEKASI</h2>
              <p><i>SMK Bisa, SMK Hebat, SMK Pasti Bisa Pasti Hebat</i></p>
          </div>
          <p><marquee>REKAYASA PERANGKAT LUNAK</marquee></p>
      </header>
  
      <nav>
          <a href="index.php" style= "text-decoration: none; font-weight: bold;">Home</a> |
          <a href="mapel.php" style= "text-decoration: none; font-weight: bold;">Mata Pelajaran</a> |
          <a href="#" style= "text-decoration: none; font-weight: bold;">Events</a> |
          <a href="dataguru.php" style= "text-decoration: none; font-weight: bold;">Data Guru</a> |
          <a href="#" style= "text-decoration: none; font-weight: bold;">Data Siswa</a>
      </nav>
  
      <div class="mt-3">  
          <div class="container">
              <h3 class="text-center">DATA GURU</h3>
          <div class="mt-3">
      </div>
  
      <div class="card">
          <div class="card-header bg-primary text-white">
            GURU REKAYASA PERANGKAT LUNAK
          </div>
  
      <div class="card-body">
  
        <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#modalTambah">
          Tambah Guru
        </button>
  
          <table class="tale table-bordered table-striped table-hover">
            <tr>
              <th>No.</th>
              <th>Nama</th>
              <th>NIP</th>
              <th>Mata Pelajaran</th>
              <th>Opsi</th>
            </tr>
  
            <tr>
              <td>1.</td>
              <td>Pak Yuli Supriyanto</td>
              <td>19209945</td>
              <td>Basis Data & P.web</td>
              <td>
                <a href="#" class="btn btn-warning">Edit</a>
                <a href="#" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
          </table>
  
        <!-- Modal -->
        <div class="modal fade modal-lg" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Data Guru</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>