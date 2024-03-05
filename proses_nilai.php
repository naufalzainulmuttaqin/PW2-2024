<?php
// tangkap input form
$nama = $_GET['nama'];
$matkul = $_GET['matkul'];
$uts = $_GET['uts'];
$uas = $_GET['uas'];
$tugas = $_GET['tugas'];


// hitung nilai total (30% UTS + 35% UAS + Tugas 35%)
$nilai_total= (30/100 * $uts) + (35/100 * $uas) + (35/100 * $tugas);

if ($nilai_total > 55){
    $hasil = 'lulus';
} else {
    $hasil = 'Tidak lulus';
}

if (($nilai_total >= 85) && ($nilai_total <= 100)) {
    $grade = 'A';
} elseif (($nilai_total >= 70) && ($nilai_total <= 84)) {
    $grade = 'B';
} elseif (($nilai_total >= 56) && ($nilai_total <= 69)){
    $grade = 'C';
} elseif (($nilai_total >= 36) && ($nilai_total <= 55)){
    $grade = 'D';
} elseif (($nilai_total >= 0) && ($nilai_total <= 35)) {
    $grade = 'E';
} else {
    $grade = 'I';
}


// tampilkan hasil inputya
echo "Nama Lengkap: $nama";
echo "<br> Mata Kuliah: $matkul";
echo "<br> Nilai UTS: $uts";
echo "<br> Nilai Tugas: $tugas";
echo "<br> Nilai UAS: $uas";
echo "<br> Grade : $grade";
echo "<br> Hasil: :$hasil";