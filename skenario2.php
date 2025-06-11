<!DOCTYPE html>
<html>
<head>
  <title>Cek Waktu</title>
  <style>
    body {
      background-color: black;
      color: white;
      font-family: Arial;
    }
    h2 {
      color: limegreen;
    }
    table, th, td {
      border: 1px solid white;
      border-collapse: collapse;
      padding: 10px;
      text-align: center;
    }
  </style>
</head>
<body>
  <h2>Skenario Waktu</h2>

  <table>
    <tr><th>JAM</th><th>KETERANGAN</th></tr>
    <tr><td>00:00 - 04:00</td><td>Dini hari</td></tr>
    <tr><td>04:00 - 10:00</td><td>Pagi</td></tr>
    <tr><td>10:00 - 15:00</td><td>Siang</td></tr>
    <tr><td>15:00 - 17:30</td><td>Sore</td></tr>
    <tr><td>17:30 - 18:30</td><td>Petang</td></tr>
    <tr><td>18:30 - 24:00</td><td>Malam</td></tr>
    <tr><td>Kurang dari 00:00 dan lebih dari 24:00</td><td>Dunia lain</td></tr>
  </table>

  <br><br>

  <form method="post">
    Masukkan Jam (HH:MM): <input type="time" name="jam" required>
    <input type="submit" name="cek" value="Cek">
  </form>

  <br>

  <?php
  if (isset($_POST['cek'])) {
      $jam_input = $_POST['jam'];
      list($jam, $menit) = explode(":", $jam_input);
      $totalMenit = ((int)$jam * 60) + (int)$menit;
      $hasil = "";

      if ($totalMenit >= 0 && $totalMenit < 240) {
          $hasil = "Dini hari";
      } elseif ($totalMenit >= 240 && $totalMenit < 600) {
          $hasil = "Pagi";
      } elseif ($totalMenit >= 600 && $totalMenit < 900) {
          $hasil = "Siang";
      } elseif ($totalMenit >= 900 && $totalMenit < 1050) {
          $hasil = "Sore";
      } elseif ($totalMenit >= 1050 && $totalMenit < 1110) {
          $hasil = "Petang";
      } elseif ($totalMenit >= 1110 && $totalMenit <= 1439) {
          $hasil = "Malam";
      } else {
          $hasil = "Dunia lain";
      }

      echo "<p>Hasil: $jam_input = <strong>$hasil</strong></p>";
  }
  ?>
</body>
</html>