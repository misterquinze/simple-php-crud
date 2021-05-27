<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-crud</title>
</head>
<body>
    <header>
        <h3>Pendaftaran siswa baru</h3>
        <h1>SMA Baru</h1>
        <h4>Menu</h4>
        <nav>
            <ul>
                <li><a href="form-daftar.php">Daftar Baru</a></li>
                <li><a href="list-siswa.php">Pendaftar</a></li>
            </ul>
        </nav>
        <?php if (isset($_GET ['status']) ) : ?>
        <p>
            <?php
            if ($_GET['status'] == 'sukses') {
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
            ?>
        </p>
        <?php endif; ?>
    </header>
    <main>
        
    </main>
</body>
</html>