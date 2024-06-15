<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Manajemen Perpustakaan</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-beta3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            margin-right: 20px;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 16px rgba(0, 0, 0, 0.2);
        }
        .card-header {
            font-size: 1.25rem;
            font-weight: bold;
            background-color: #007bff;
            color: white;
            text-align: center;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
        .card-body {
            padding: 20px;
        }
        .btn-block {
            margin-top: 10px;
            font-size: 1rem;
            padding: 10px;
            border-radius: 5px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .btn-success {
            background-color: #28a745;
            border: none;
        }
        .btn-success:hover {
            background-color: #218838;
        }
        .container h1 {
            font-weight: bold;
            margin-bottom: 20px;
        }
        .card-body a {
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            color: white;
        }
        .card-body a i {
            margin-right: 10px;
        }
        .card-container {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            flex-wrap: nowrap;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Sistem Manajemen Perpustakaan</h1>
        <div class="card-container">
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-users"></i> Manajemen Member
                </div>
                <div class="card-body">
                    <a href="Member.php" class="btn btn-primary btn-block">
                        <i class="fas fa-eye"></i> Lihat Semua Member
                    </a>
                    <a href="FormMember.php" class="btn btn-success btn-block">
                        <i class="fas fa-user-plus"></i> Tambah Member Baru
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-book"></i> Manajemen Buku
                </div>
                <div class="card-body">
                    <a href="Buku.php" class="btn btn-primary btn-block">
                        <i class="fas fa-eye"></i> Lihat Semua Buku
                    </a>
                    <a href="FormBuku.php" class="btn btn-success btn-block">
                        <i class="fas fa-book-medical"></i> Tambah Buku Baru
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-hand-holding"></i> Manajemen Peminjaman
                </div>
                <div class="card-body">
                    <a href="Peminjaman.php" class="btn btn-primary btn-block">
                        <i class="fas fa-eye"></i> Lihat Semua Peminjaman
                    </a>
                    <a href="FormPeminjaman.php" class="btn btn-success btn-block">
                        <i class="fas fa-hand-holding-medical"></i> Tambah Peminjaman Baru
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-beta3/js/bootstrap.min.js"></script>
</body>
</html>
