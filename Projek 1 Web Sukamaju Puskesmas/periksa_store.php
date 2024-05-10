<?php
include_once('koneksi.php');

// Tangkap data
$pasien_id = $_POST['pasien_id'];
$tanggal = $_POST['tanggal'];
$berat = $_POST['berat'];
$tinggi = $_POST['tinggi'];
$tensi = $_POST['tensi'];
$keterangan = $_POST['keterangan'];

// Ambil dokter_id dari form jika ada
if (isset($_POST['dokter_id'])) {
    $dokter_id = $_POST['dokter_id'];
} else {
    $dokter_id = 1;
}

// Query insert
$query = "INSERT INTO periksa (pasien_id, tanggal, berat, tinggi, tensi, keterangan, dokter_id) VALUES (?, ?, ?, ?, ?, ?, ?)";

// Persiapkan dan jalankan statement
$stmt = $dbh->prepare($query);
$stmt->execute([$pasien_id, $tanggal, $berat, $tinggi, $tensi, $keterangan, $dokter_id]);

// Periksa apakah proses insert berhasil
if ($stmt->rowCount() > 0) {
    header('location: periksa.php');
} else {
    echo "Gagal menyimpan data";
}
?>
