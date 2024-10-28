<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="<?= BASEURL; ?>">PHP MVC</a>
        
        <!-- Tombol toggler untuk mobile view -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle Navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup"> <!-- Memperbaiki nama class -->
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="<?= BASEURL; ?>">Home <span class="visually-hidden">(current)</span></a>
                <a class="nav-item nav-link" href="<?= BASEURL; ?>/mahasiswa">Mahasiswa</a> <!-- Perbaikan ejaan "Mahasiswa" -->
                <a class="nav-item nav-link" href="<?= BASEURL; ?>/about">About</a>
            </div>
        </div>
    </div>
</nav>

<script src="<?= BASEURL; ?>/js/bootstrap.bundle.min.js"></script>
</body>
</html>
