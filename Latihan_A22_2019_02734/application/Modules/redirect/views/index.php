<html>
<title>
    <?= $title; ?>
</title>

<head>
    <link rel="stylesheet" href="<?= base_url('assets/') ?>bootstrap.min.css">

</head>

<body>
    <div class="container">
        <row>
            <br>
            <br>
            <br>
            <center>
                <p>Selamat Datang Di Repo-Minggu-12 ( A22.2019.02734 )</p>
                <p>Silahkan Pilih Salah Satu Link</p>
                <br>
                <a href="<?= base_url('sekolah/awal') ?>" target="_blank" class="btn btn-primary btn-sm">Tentang CRUD Sekolah</a>
                <a href="<?= base_url('mobil/home/lihatdata') ?>" target="_blank" class="btn btn-secondary btn-sm">Tentang CRUD Mobil</a>
            </center>
        </row>
    </div>
</body>

</html>