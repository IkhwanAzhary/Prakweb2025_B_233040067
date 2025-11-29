<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pengguna</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Daftar Pengguna</h1>
        <!-- Tabel untuk menampilkan daftar semua pengguna -->
        <table class="user-table">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Loop untuk menampilkan setiap pengguna -->
                <?php foreach ($users as $user): ?>
                <tr>
                    <!-- Menampilkan nama dengan sanitasi HTML untuk keamanan -->
                    <td><?= htmlspecialchars($user['name']); ?></td>
                    <!-- Menampilkan email dengan sanitasi HTML -->
                    <td><?= htmlspecialchars($user['email']); ?></td>
                    <!-- Link untuk melihat detail pengguna berdasarkan ID -->
                    <td><a href="index.php?id=<?= $user['id']; ?>" class="btn-small">Detail</a></td>
                    <td><a href=""></a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
