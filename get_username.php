<?php
// Connection to the database
include "koneksi.php";

if (isset($_GET['rfid_uid'])) {
    $rfid_uid = $_GET['rfid_uid'];
    $sql = "SELECT nama FROM anggota WHERE rfid_uid='$rfid_uid'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo $row['nama'];
    } else {
        echo "User not found";
    }
}

$conn->close();
?>
