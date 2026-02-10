<?php
include 'koneksi.php';

$id       = $_POST['id'];
$status   = $_POST['status'];
$feedback = $_POST['feedback'];

// Update langsung tanpa prepared statement
$query = "UPDATE aspirasi 
          SET status = '$status', feedback = '$feedback' 
          WHERE id_aspirasi = $id";

$sql = mysqli_query($koneksi, $query);

// Kembali ke halaman admin
if ($sql) {
    echo "<script>
            alert('Berhasil memperbarui status dan feedback aspirasi');
            window.location.href = 'admin.php';
          </script>";
    exit;
}
