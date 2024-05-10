<?php
include_once('koneksi.php');

// Tangkap data dari URL
$id = $_GET['id'];

// Query untuk menghapus baris-baris terkait dari tabel 'periksa'
$query_periksa = "DELETE FROM periksa WHERE dokter_id='$id'";


if ($dbh->query($query_periksa)) {
    
    $query_paramedik = "DELETE FROM paramedik WHERE id='$id'";
    
    if ($dbh->query($query_paramedik)) {
        header('location: paramedik.php');
    } else {
        echo "Gagal menghapus data paramedik";
    }
} else {
    echo "Gagal menghapus data periksa";
}
?>
