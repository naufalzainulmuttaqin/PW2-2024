<?php
include_once('koneksi.php');

// Tangkap data dari URL
$id = $_GET['id'];

// Query delete
$query = "DELETE FROM periksa WHERE id='$id'";

// Eksekusi query
if ($dbh->query($query)) {
    header('location: periksa.php');
} else {
    echo "Gagal menghapus data";
}
?>
