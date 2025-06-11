<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Jadwal Harian Anas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f7f9;
            margin: 40px;
            color: #333;
        }

        h1, h2 {
            text-align: center;
            color: #2c3e50;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            background-color: #ffffff;
            border: 1px solid #ddd;
            margin: 8px 0;
            padding: 12px;
            border-radius: 8px;
            box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.05);
        }

        .note {
            margin-top: 20px;
            padding: 12px;
            background-color: #eafaf1;
            border-left: 5px solid #2ecc71;
        }

        .footer {
            margin-top: 40px;
            text-align: center;
            font-style: italic;
        }
    </style>
</head>
<body>

<?php
// Jadwal harian Anas
$jadwal = [
    "04:00" => "Bangun tidur",
    "04:30" => "Olahraga pagi",
    "05:30" => "Mandi dan bersiap sekolah",
    "06:00" => "Sarapan",
    "06:30" => "Berangkat ke sekolah",
    "07:00" => "Kegiatan di sekolah",
    "13:00" => "Pulang sekolah",
    "13:30" => "Istirahat dan makan siang",
    "14:30" => "Belajar / Mengerjakan tugas sekolah",
    "16:30" => "Waktu bermain / bebas",
    "18:00" => "Makan malam bersama keluarga",
    "19:00" => "Chatting dengan Daffa",
    "20:00" => "Persiapan tidur / kegiatan bebas",
    "22:00" => "Tidur"
];

// Nama siswa dan teman diskusi
$nama = "Anas Akbar";
$temanDiskusi = "Daffa Rahadyan";
?>

<h1>Jadwal Harian Anas</h1>
<ul>
    <?php foreach ($jadwal as $jam => $kegiatan): ?>
        <li><strong>Jam <?= $jam; ?></strong>: <?= $kegiatan; ?></li>
    <?php endforeach; ?>
</ul>

<div class="note">
    <h2>Catatan Penting</h2>
    <?php
    foreach ($jadwal as $jam => $kegiatan) {
        if ($jam == "19:00" && $kegiatan == "Chatting dengan Raya") {
            echo "<p>Pada jam $jam, Anas melakukan chatting dengan Daffa menggunakan waktu lokal rumah Daffa.</p>";
        } elseif ($jam == "14:30") {
            echo "<p>Pada jam $jam, Anas mengerjakan tugas jika ada. Jika tidak, Anas memiliki waktu luang hingga jam 16:30.</p>";
        }
    }
    ?>
</div>

<div class="footer">
    <p>Disusun oleh: <strong><?= $nama; ?></strong> dan <strong><?= $temanDiskusi; ?></strong></p>
</div>

</body>
</html>