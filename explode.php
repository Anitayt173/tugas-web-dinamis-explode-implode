<?php 
// Function explode

$mahasiswa = "Anita,Ardhia,Fira,Yuli";
$hasil_mahasiswa = explode(",", $mahasiswa);

echo "<pre>";
print_r ($hasil_mahasiswa);
echo "</pre>";

echo "<hr>";

$tanggal="Sabtu 23 Maret 2019";
$hasil_tanggal = explode(" ", $tanggal);
echo "<pre>";
print_r ($hasil_tanggal);
echo "</pre>";

echo "<hr>";


$waktu = "23:Maret:2019";
$hasil_waktu = explode(":", $waktu);
echo "<pre>";
print_r ($hasil_waktu);
echo "</pre>";

echo "<hr>";

$prodi = "Prodi-Teknik-Informatika";
$hasil_prodi = explode("-", $prodi);

echo "<pre>";
print_r ($hasil_prodi);
echo "</pre>";

echo "<hr>";

$jurusan = "Teknik Informatika, Sistem Informatika, Management Informatika";
$hasil_jurusan = explode(",", $jurusan);

echo "<pre>";
print_r ($hasil_jurusan);
echo "</pre>";

?>
