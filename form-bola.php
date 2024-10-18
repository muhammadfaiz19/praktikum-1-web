<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Luas Permukaan dan Volume Bola</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #181C14;
        }
        .card {
            background-color: #3C3D37;
            max-width: 600px; 
            margin: auto;
            margin-top: 50px; 
        }
        .form-control, .btn-primary {
            background-color: #697565; 
            border: none;
            color: #ECDFCC;
            font-size: 1.2rem; 
        }
        .btn-primary:hover {
            background-color: #5f6a5d;
        }
        .form-label, .card-title {
            color: #ECDFCC; 
            font-size: 1.3rem; 
        }
    </style>
</head>
<body>

    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="card p-5 m-3">
            <div class="card-body">
                <h3 class="card-title text-center mb-4">Form Menghitung Luas Permukaan dan Volume Bola</h3>
                <form action="hitung-bola.php" method="POST" name="form-bola">
                    <div class="mb-4">
                        <label for="jari_jari" class="form-label">Jari-jari:</label>
                        <input type="text" name="jari_jari" id="jari_jari" class="form-control" required>
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
