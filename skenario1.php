<!DOCTYPE html>
<html>
<head>
  <title>Penilaian Nilai</title>
  <style>
    body {
      background-color: black;
      color: white;
      font-family: Arial, sans-serif;
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
  <h2>Skenario Pertama</h2>

  <table>
    <tr>
      <th>NILAI</th>
      <th>KETERANGAN</th>
    </tr>
    <tr><td>100 - 90</td><td>A</td></tr>
    <tr><td>89 - 80</td><td>B</td></tr>
    <tr><td>79 - 70</td><td>C</td></tr>
    <tr><td>69 - 0</td><td>D</td></tr>
    <tr><td>Kurang dari 0 dan lebih dari 100</td><td>Nilai wajib di antara 0 - 100</td></tr>
  </table>

  <br>
  <form method="POST">
    <label>Masukkan Nilai: <input type="number" name="nilai"></label>
    <button type="submit">Cek</button>
  </form>

  <p id="hasil">
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai = intval($_POST["nilai"]);
        if ($nilai >= 90 && $nilai <= 100) {
          echo "Nilai $nilai = A";
        } elseif ($nilai >= 80 && $nilai <= 89) {
          echo "Nilai $nilai = B";
        } elseif ($nilai >= 70 && $nilai <= 79) {
          echo "Nilai $nilai = C";
        } elseif ($nilai >= 0 && $nilai <= 69) {
          echo "Nilai $nilai = D";
        } else {
          echo "Nilai wajib di antara 0 - 100";
        }
      }
    ?>
  </p>
</body>
</html>