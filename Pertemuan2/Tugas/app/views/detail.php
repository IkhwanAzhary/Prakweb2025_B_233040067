<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <!-- Menampilkan nama pengguna dengan sanitasi HTML -->
        <h1>Selamat Datang, <?= htmlspecialchars($user['name']); ?></h1>

        <!-- Menampilkan email pengguna -->
        <p>Email: <?= htmlspecialchars($user['email']); ?></p>

        <!-- Link untuk kembali ke halaman daftar pengguna -->
        <a href="index.php" class="btn">Kembali ke Daftar</a>
    </div>
</body>
</html>
