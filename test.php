<?php
$koneksi = new mysqli("localhost", "ppob_user", "passwordku123", "ppob_db");
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
echo "Koneksi berhasil!";
?>
