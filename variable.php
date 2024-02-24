<?php
// membuat variabel = setiap variabel hrus ada $
// setiap variabel atau sintax php diakhiri dengan ;
// membuat list/array memakai [], dan array bisa membuat array yg lainnya di array yang sama
$mahasiswa1 = ["Naufal Zainul", "Sistem Informasi", 01123, [3.6, 3.5] ];

// panggil variabel = echo dan cara menambahkan nilai memakai = .
echo 'Nama: ' . $mahasiswa1[0] . "<br>"; //concatenation
// 
echo "Jurusan: $mahasiswa1[1] <br>"; //strng interpolation
// 
echo 'IPS Semeser 1: ' . $mahasiswa1 [3][0];
