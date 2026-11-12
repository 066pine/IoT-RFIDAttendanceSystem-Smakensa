<?php
include "koneksi.php"; 
include 'header.php'; 
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <title>List users</title>
</head>
<body>

<div class="container" style="margin-top: 80px">
  <div class="row">
    <div class="col-md-12">
        
        <div class="card-header">
          Anggota TEFA
        </div>
        <div class="card-body">
          <a href="new_usr.php" class="btn btn-md btn-success" style="margin-bottom: 10px">Tambah Anggota</a>
          <table class="table table-bordered" id="myTable">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">RFID_UID</th>
                <th scope="col">Nama</th>
                <th scope="col">Divisi</th>
              </tr>
            </thead>
            <tbody>    
              <?php
              $query = mysqli_query($conn, "SELECT * FROM anggota");
              while ($row = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>".$row['id_anggota']."</td>";
                echo "<td>".$row['rfid_uid']."</td>";
                echo "<td>".$row['nama']."</td>";
                echo "<td>".$row['divisi']."</td>";
                echo "</tr>";   
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function() {
    $('#myTable').DataTable();
  });
</script>

<?php
$conn->close();
?>
</body>
</html>
