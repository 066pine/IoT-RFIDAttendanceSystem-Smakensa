<?php
include "koneksi.php";
$time = time();
$query = mysql_query("SELECT username FROM online_users WHERE username = '$username' AND timestamp > '$time'");
if (mysql_num_rows($query) > 0) {
    // User is considered online
}
$online_users_query = mysql_query("SELECT COUNT(*) FROM online_users WHERE timestamp > '$time'");
$online_users_count = mysql_result($online_users_query, 0);
echo "Online users: $online_users_count";



?>