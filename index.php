<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Masiswa Baru | Universitas Nasional</title>

</head>

<body>
    <header>
        <h3>Pendaftaran Masiswa Baru</h3>
        <h1>Universitas Nasional</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
        </ul>
    </nav>

    </body>
</html>

<?php if(isset($_GET['status'])): #index.php ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran mahasiswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>
