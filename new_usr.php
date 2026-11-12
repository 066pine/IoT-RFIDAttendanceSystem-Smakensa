<?php 
    include "koneksi.php";
    include "header.php";
?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    
    
<div class="container" >
  <div class="card-header">Tambah user</div>
  <div class="card-body"> 
    <form action="proc_new_usr.php" method="POST">
    RFID UID :
    <input type="text" name="rfid_uid" value="" class="form-control">
    NAMA :
    <input type="text" name="nama" value="" class="form-control">

    <div class="form-group">
    <label for="exampleFormControlSelect1">Section : </label>
    <select name="divisi"class="form-control" id="exampleFormControlSelect2">
      <option>Resepsionis</option>
      <option>Akuntansi</option>
      <option>IT Support</option>
      <option>Pemasaran</option>
      <option>Produksi</option>
      <option>Guru</option>
    </select>
  </div>

    <br>
    <input type="submit" name="simpan" value="Tambahkan" class="btn btn-success">
</div>
</div>
</div>
</form>
</body>