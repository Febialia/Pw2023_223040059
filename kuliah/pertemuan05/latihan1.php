<?php
// ARRAY adalah variabel yang bisa menampung banyak nilai

// Membuat Array
$hari = array('Senin', 'Selasa', 'Rabu', 'Kamis', "Jum'at", 'Sabtu', 'Minggu');
$bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
$myarray = ['febi', 10, false];
$binatang = ['🐈', '🐇', '🐒', '🐼', '🐮'];

// Mencetak Array
var_dump($hari);
print_r($bulan);
var_dump($myarray);
var_dump($binatang[4]);

echo "<hr>";

// Manipulasi Array
// Menambah elemen di akhir array
$bulan[] = 'April';
$bulan[] = 'Mei';
print_r($bulan);

echo "<hr>";
array_push($bulan, 'Juni', 'Juli', 'Agustus');
print_r($bulan);

echo "<hr>";
// Menambah elemen di awal array
array_unshift($binatang, '🐍', '🐓');
print_r($binatang);

// Menghapus elemen di akhir Array
array_pop($hari);
print_r($hari);
echo "<hr>";

// Menghapus elemen diawal Array
array_shift($hari);
print_r($hari);
