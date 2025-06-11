<!DOCTYPE html>
<html>
<head>
    <title>Skenario Keempat - Array dan Perulangan</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f0f8ff;
            padding: 20px;
            color: #333;
        }
        h1 {
            color: #2E8B57;
            border-bottom: 3px solid #ccc;
            padding-bottom: 5px;
        }
        h2 {
            color: #1E90FF;
            border-left: 5px solid #1E90FF;
            padding-left: 10px;
        }
        h3 {
            color: #8B0000;
        }
        b {
            color: #006400;
        }
        hr {
            border: 1px solid #ccc;
            margin: 30px 0;
        }
        ul {
            background-color: #e0ffff;
            padding: 15px;
            border-left: 5px solid #1E90FF;
            list-style-type: square;
        }
        .output {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 10px 15px;
            margin-bottom: 15px;
            line-height: 1.6;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Skenario Keempat - PHP</h1>

    <?php
    // =======================
    // KASUS 1
    // =======================
    echo "<h2>Kasus 1 - Tanggal: Senin, 10 - Mar - 2025</h2>";
    echo "<div class='output'>";

    // Hari
    echo "<b>Hari:</b><br>";
    $hari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
    for ($i = 0; $i < count($hari); $i++) {
        echo $hari[$i] . "<br>";
    }

    // Tanggal
    echo "<br><b>Tanggal:</b><br>";
    $tanggal = range(1, 31);
    foreach ($tanggal as $t) {
        echo $t . " ";
    }

    // Bulan
    echo "<br><br><b>Bulan:</b><br>";
    $bulan = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sep", "Okt", "Nov", "Des"];
    $i = 0;
    while ($i < count($bulan)) {
        echo $bulan[$i] . " ";
        $i++;
    }

    // Tahun
    echo "<br><br><b>Tahun:</b><br>";
    $tahun = 2024;
    do {
        echo $tahun . " ";
        $tahun++;
    } while ($tahun <= 2026);

    echo "</div>";


    // =======================
    // KASUS 2
    // =======================
    echo "<hr><h2>Kasus 2 - Anak Ayam Turun 30</h2>";
    echo "<div class='output'>";
    for ($i = 30; $i >= 1; $i--) {
        if ($i == 1) {
            echo "Anak ayam turun 1, mati satu tinggal induknya<br>";
        } else {
            echo "Anak ayam turun $i, mati satu tinggal " . ($i - 1) . "<br>";
        }
    }
    echo "</div>";


    // =======================
    // KASUS 3
    // =======================
    echo "<hr><h2>Kasus 3 - Mawar Shooleh dan Mawar untuk Ibu</h2>";
    echo "<div class='output'>";

    // Mawar milik Shooleh
    $jumlahMawarShooleh = 0;
    echo "<b>Mawar Shooleh:</b> ";
    for ($mawar = 21; $mawar >= 10; $mawar--) {
        echo "$mawar ";
        $jumlahMawarShooleh++;
    }
    echo "<br><b>Total Mawar Shooleh:</b> $jumlahMawarShooleh";

    // Mawar untuk ibu
    $jumlahMawarIbu = 0;
    echo "<br><br><b>Mawar untuk Ibu:</b> ";
    for ($mawar = 21; $mawar >= 10; $mawar -= 4) {
        echo "$mawar ";
        $jumlahMawarIbu++;
    }
    echo "<br><b>Total Mawar untuk Ibu:</b> $jumlahMawarIbu";

    echo "</div>";


    // =======================
    // KASUS 4
    // =======================
    echo "<hr><h2>Kasus 4 - Lagu Ambyar Berdasarkan Suasana Hati</h2>";
    echo "<div class='output'>";

    $ambyar = [
        "galau" => ["Mesin Waktu - Budi Doremi"],
        "semangat" => ["Selamat Pagi - Ran"],
        "marah" => ["Yang Patah Tumbuh", "Yang Hilang Berganti - Banda Neira"]
    ];

    foreach ($ambyar as $suasana => $laguList) {
        echo "<b>$suasana:</b><br>";
        foreach ($laguList as $lagu) {
            echo "- $lagu<br>";
        }
        echo "<br>";
    }

    echo "</div>";

    echo "<hr><h3>Diskusi</h3>";
    echo "<ul>
        <li><strong>Pelajaran:</strong> Penggunaan array, perulangan for, foreach, while, dan do while.</li>
        <li><strong>Nama:</strong> Naufal Roid R (25) & Restu Ahmad H (29)</li>
    </ul>";
    ?>
</body>
</html>