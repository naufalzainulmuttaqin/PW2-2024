<?php
include_once('koneksi.php');

// Tangkap data
$id = $_POST['id']; // Pastikan Anda memiliki nilai ID yang valid dari form sebelumnya
$pasien_id = $_POST['pasien_id'];
$tanggal = $_POST['tanggal'];
$berat = $_POST['berat'];
$tinggi = $_POST['tinggi'];
$tensi = $_POST['tensi'];
$keterangan = $_POST['keterangan'];

// Query update
$query = "UPDATE periksa SET pasien_id=?, tanggal=?, berat=?, tinggi=?, tensi=?, keterangan=? WHERE id=?";

// Persiapkan dan jalankan statement
$stmt = $dbh->prepare($query);
$stmt->execute([$pasien_id, $tanggal, $berat, $tinggi, $tensi, $keterangan, $id]);

// Periksa apakah proses update berhasil
if ($stmt->rowCount() > 0) {
    header('location: periksa.php');
} else {
    echo "Gagal memperbarui data";
}
?>
