<?php include("config.php"); ?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru</title>
</head>
<body>
    <h3>Siswa yang sudah mendaftar</h3>
    <p><a href="form-daftar.php">[+] Tambah Baru</a></p>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
            <th>Tindakan</th>
        </tr>

        <?php
        $sql = "SELECT * FROM calon_siswa"; // tabel yang benar
        $query = mysqli_query($db, $sql);   // gunakan $db, bukan $conn
        $no = 1;

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$no++."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['jenis_kelamin']."</td>";
            echo "<td>".$siswa['agama']."</td>";
            echo "<td>".$siswa['sekolah_asal']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id']."' onclick='return confirm(\"Hapus data?\")'>Hapus</a>";
            echo "</td>";
            echo "</tr>";
        }
        ?>

    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>
