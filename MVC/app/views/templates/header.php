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
        
        <!-- Tautan ditambahkan di samping nama -->
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="<?= BASEURL; ?>">Home <span class="visually-hidden">(current)</span></a>
            <a class="nav-item nav-link" href="<?= BASEURL; ?>/about">About</a>
        </div>
    </div>
</nav>

<script src="<?= BASEURL; ?>/js/bootstrap.bundle.min.js"></script>
</body>
</html>
