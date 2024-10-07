<?php
$json_mahasiswa = '{
    "nama": "Taufikul Hakim",
    "usia": 20,
    "alamat": "Grobogan",
    "pekerjaan": "IT Jaringan",
    "hobi": ["Badminton", "Bersepeda", "Coding"]
}';

// Decode JSON menjadi PHP Object
$obj_mhs = json_decode($json_mahasiswa);

// Decode JSON menjadi PHP Array
$array_mhs = json_decode($json_mahasiswa, true);

// Akses data mahasiswa menggunakan Object
echo "Menggunakan Object: "
  . "Saya seorang Mahasiswa bernama " . $obj_mhs->nama
  . ", saya berusia " . $obj_mhs->usia
  . ", saya tinggal di " . $obj_mhs->alamat
  . " tahun, pekerjaan saya sebagai " . $obj_mhs->pekerjaan
  . ", Hobi saya " . implode(", ", $obj_mhs->hobi) . ".<br>";

// Akses data mahasiswa menggunakan Array
echo "Menggunakan Array: "
  . "Saya seorang Mahasiswa bernama " . $array_mhs['nama']
  . ", saya berusia " . $array_mhs['usia']
  . ", saya tinggal di " . $array_mhs['alamat']
  . " tahun, pekerjaan saya sebagai " . $array_mhs['pekerjaan']
  . ", Hobi saya " . implode(", ", $array_mhs['hobi']) . ".\n";

