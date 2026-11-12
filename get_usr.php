<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['rfid_uid'])) {
    $rfid_uid = $_GET['rfid_uid'];
    $sql = "SELECT username,section FROM users WHERE rfid_uid = ?   ";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $rfid_uid);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "Username: " . $row["username"].
            "<br>Section: ".  $row["section"] . date('d-m-Y');
        }
    } else {
        echo "No user found with this RFID UID.";
    }
    $stmt->close();
}

$conn->close();
?>