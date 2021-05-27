<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Siswa</title>
</head>
<body>
    <header>
        <h3>Siswa yang sudah mendaftar</h3>
        <nav>
            <ul>
                <li><a href="form-daftar.php">+ Tambah Siswa</a></li>
            </ul>
        </nav>
    </header>
    <br>
    <main>
        <table border="1">
            <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Asal Sekolah</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM calon_siswa";
                    $query =  mysqli_query($db, $sql);

                    while($siswa = mysqli_fetch_array($query)){
                        echo "<tr>";

                        echo "<td>" .$siswa['id']. "</td>";
                        echo "<td>" .$siswa['nama']. "</td>";
                        echo "<td>" .$siswa['alamat']. "</td>";
                        echo "<td>" .$siswa['jenis_kelamin']. "</td>";
                        echo "<td>" .$siswa['agama']. "</td>";
                        echo "<td>" .$siswa['sekolah_asal']. "</td>";
                        
                        echo "<td>";
                        echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
                        echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a> | ";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
        <p>Total: <?php echo mysqli_num_rows($query)?></p>
    </main>
</body>
</html>