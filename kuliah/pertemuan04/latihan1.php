<?php
// mengecek sebuah bilangan ganjil / genap

$angka = 10;

function cek_ganjil_genap($angka) /// parameter
{
    // jika angka dibagi 2, sisanya 1 maka ganjil
    if ($angka % 2 == 1) {
        return "$angka adalah bilangan GANJIL!";
    } else { // selain dari itu
        return "$angka adalah bilangan GENAP!";
    }
}

echo cek_ganjil_genap(10); //argumen
echo "<br>";
echo cek_ganjil_genap(5);
echo "<br>";
echo cek_ganjil_genap(500);
