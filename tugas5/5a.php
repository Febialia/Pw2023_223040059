<?php
$mahasiswa = [
    [
        "nama" => "Febi Alia Rahman",
        "nrp" => "223040059",
        "email" => "febi.223040059@unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Muhammad Rifki Ramadani",
        "nrp" => "223040046",
        "email" => "rifki223040046@unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Aurelia Melati Suci",
        "nrp" => "223040045",
        "email" => "aurelia.223040059@unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Angga Nugraha Sofyan",
        "nrp" => "223040052",
        "email" => "angga.223040052@unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Ahmad Suherman",
        "nrp" => "223040066",
        "email" => "ahmad.223040066@unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Ji'ta Bilhaq",
        "nrp" => "223040055",
        "email" => "ji'ta.223040055@unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Fadhilla Nur Islami",
        "nrp" => "223040082",
        "email" => "fadhilla.223040082@unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Muhammad Raihan Nagata Akbar",
        "nrp" => "223060054",
        "email" => "raihan.223040054@unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Syahbina Dinova",
        "nrp" => "223040074",
        "email" => "syahbina.223040074@unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Bima Hafit Prakoso",
        "nrp" => "223040087",
        "email" => "Bima.223040087@unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],

];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>Nrp : <?= $mhs["nrp"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>

        </ul>

    <?php endforeach; ?>
</body>

</html>