<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Luas dan Keliling Lingkaran</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #181C14; 
        }
        .card {
            background-color: #3C3D37;
            width: 100%;
            max-width: 600px; 
        }
        .form-control, .btn-primary {
            background-color: #697565;
            color: #ECDFCC;
            font-size: 1.2rem; 
            border: none;
        }
        .btn-primary:hover {
            background-color: #5f6a5d;
        }
        .form-label, .card-title, .text-light {
            color: #ECDFCC; 
            font-size: 1.3rem;
        }
    </style>
</head>
<body>

    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="card p-5 m-3">
            <div class="card-body">
                <h3 class="card-title text-center mb-4">Form Menghitung Luas dan Keliling Lingkaran</h3>
                <form action="hitung-lingkaran.php" method="POST" name="form-lingkaran">
                    <div class="mb-4">
                        <label for="jari_jari" class="form-label">Jari-jari</label>
                        <input type="text" class="form-control" name="jari_jari" id="jari_jari" required>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-lg">Hitung</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
