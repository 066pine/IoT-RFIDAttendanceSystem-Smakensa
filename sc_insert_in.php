    <?php
    include 'koneksi.php';    
    $waktu = date('Y-m-d H:i:s');
    $rfid_uid = $_GET['rfid_uid']; 
    $sql_users = "SELECT nama, divisi FROM anggota WHERE rfid_uid = ?";
   
    $jamabsen = date('H');
    if ($jamabsen < 14) {
        $status = 'MASUK';  
    } else {
        $status = 'KELUAR'; 
    }

    $stmt_users = $conn->prepare($sql_users);
    $stmt_users->bind_param("s", $rfid_uid);
    if ($stmt_users->execute()) {

        $stmt_users->bind_result($nama, $divisi);

        if ($stmt_users->fetch()) {

            $stmt_users->close();

            $sql_absensi = "INSERT INTO absen(nama, divisi, keterangan, Waktu, rfid_uid) VALUES (?,?,?,?,?) ";
            $stmt_absensi = $conn->prepare($sql_absensi);
          

            $stmt_absensi->bind_param("sssss", $nama, $divisi, $status, $waktu, $rfid_uid);
            
            if ($stmt_absensi->execute()) {
                echo "Data berhasil disisipkan pada " . $waktu;
            } else {
                echo "Error saat menyisipkan data: " . $stmt_absensi->error;
            }

            $stmt_absensi->close();
        } 
        else {
            echo "Tidak ada pengguna ditemukan untuk rfid_uid: " . $rfid_uid;
        }
    } else {
        echo "Error saat mengambil data pengguna: " . $stmt_users->error;
    }


    $conn->close();
    ?>
