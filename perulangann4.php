<!DOCTYPE html>
<html>
<head>
    <title>Menentukan Status Kehadiran Karyawan</title>
</head>
<body>
    <h2>Daftar Kehadiran Karyawan</h2>

    <?php
    $karyawan = ["Andi", "Budi", "Citra", "Dodi", "Eka"];

    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr>
            <th>No</th>
            <th>Nama Karyawan</th>
            <th>Status Kehadiran</th>
          </tr>";

    for ($i = 0; $i < count($karyawan); $i++) {
        $no_urut = $i + 1;

        if ($no_urut % 2 == 0) {
            $status = "Hadir";
        } else {
            $status = "Izin";
        }

        echo "<tr>
                <td>$no_urut</td>
                <td>{$karyawan[$i]}</td>
                <td>$status</td>
              </tr>";
    }

    echo "</table>";
    ?>
</body>
</html>