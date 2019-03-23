<?php 
// Function implode

$hari = array("hari_satu"=>"Senin","hari_dua"=>"Selasa","hari_tiga"=>"Rabu","hari_empat"=>"kamis");
$hasil_hari = implode(" ", $hari);

echo "<pre>";
print_r ($hasil_hari);
echo "</pre>";
echo "<hr>";

$matakuliah = array("semester_satu"=>"Web Statis","semester_dua"=>"Web Dinamis","semester_tiga"=>"Java","semester_empat"=>"Android");

$hasil_matakuliah = implode(",", $matakuliah);

echo "<pre>";
print_r ($hasil_matakuliah);
echo "</pre>";
echo "<hr>";

$tanggal_lahir = array("tahun"=>"1999","bulan"=>"Juli","tanggal"=>"11");
$hasil_tanggal_lahir = implode(":", $tanggal_lahir);

echo "<pre>";
print_r ($hasil_tanggal_lahir);
echo "</pre>";
echo "<hr>";

$identitas = array("dosen"=>"Widodo Wahyu", "matkul"=>"Web Dinamis");
$implode_identitas = implode(" - ", $identitas);

echo "<pre>";
print_r ($implode_identitas);
echo "</pre>";
echo "<hr>";

$ruangan = array("ruang"=>"Lab 1","matakuliah"=>"Web Dinamis");
$hasil_ruangan = implode(" => ", $ruangan);
echo "<pre>";
print_r ($hasil_ruangan);
echo "</pre>";
?>
