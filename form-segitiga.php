<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Luas dan Keliling Segitiga</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #181C14;
        }
        .card {
            background-color: #3C3D37; 
            width: 100%;
            max-width: 400px; 
            color: #ECDFCC; 
        }
        .form-control, .btn-primary {
            background-color: #697565; 
            border: none;
            color: #ECDFCC;
            font-size: 1rem; 
        }
        .btn-primary:hover {
            background-color: #5f6a5d;
        }
        .form-label, .card-title {
            color: #ECDFCC; 
            font-size: 1.2rem;
        }
    </style>
</head>
<body>

    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="card p-4 m-3"> 
            <div class="card-body">
                <h3 class="card-title text-center">Form Menghitung Luas dan Keliling Segitiga</h3>
                <form action="hitung-segitiga.php" method="POST" name="form-segitiga">
                    <div class="mb-3">
                        <label for="alas" class="form-label">Alas</label>
                        <input type="text" class="form-control" name="alas" id="alas" required>
                    </div>
                    <div class="mb-3">
                        <label for="tinggi" class="form-label">Tinggi</label>
                        <input type="text" class="form-control" name="tinggi" id="tinggi" required>
                    </div>
                    <div class="mb-3">
                        <label for="sisi_a" class="form-label">Sisi A</label>
                        <input type="text" class="form-control" name="sisi_a" id="sisi_a" required>
                    </div>
                    <div class="mb-3">
                        <label for="sisi_b" class="form-label">Sisi B</label>
                        <input type="text" class="form-control" name="sisi_b" id="sisi_b" required>
                    </div>
                    <div class="mb-3">
                        <label for="sisi_c" class="form-label">Sisi C</label>
                        <input type="text" class="form-control" name="sisi_c" id="sisi_c" required>
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
