<?php
    include "koneksi.php";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $rfid_uid = $_POST['rfid_uid'];
        $nama = $_POST['nama'];
        $divisi = $_POST['divisi'];

        if(empty($rfid_uid)) {
            echo "<script>alert('RFID UID tidak boleh kosong');location.href='new_usr.php';</script>";
        } else {
            // Gunakan prepared statement untuk mencegah SQL Injection
            $sql = "INSERT INTO anggota(rfid_uid, nama, divisi) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $rfid_uid, $nama, $divisi);

            if($stmt->execute()) {
                echo "<script>alert('Data berhasil disimpan');location.href='new_usr.php';</script>";
            } else {
                echo "<script>alert('Terjadi kesalahan saat menyimpan data');location.href='new_usr.php';</script>";
            }
        }
    } else {
        echo "<script>alert('Akses tidak sah');location.href='new_usr.php';</script>";
    }
?>
