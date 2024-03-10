<?php
// Koneksi ke database
include "koneksi.php"; 

if (isset($_POST['submit'])) {
    // Tangkap data dari form
    $nama = $_POST['nama'];
    $ttl = $_POST['ttl'];
    $jk = $_POST['jk'];
    $lomba = $_POST['lomba'];
    $kategori = $_POST['kategori'];

    // Masukkan data ke database (INSERT)
    $query = "INSERT INTO pilihan_lomba(nama, ttl, jk, lomba, kategori) VALUES ('$nama', '$ttl', '$jk', '$lomba', '$kategori')";
    // Eksekusi query

    $result = $conn->query($query);

    header('Location: index.php'); // Redirect kembali ke halaman utama
}

?>
