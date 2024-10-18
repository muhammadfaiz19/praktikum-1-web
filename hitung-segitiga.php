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
            max-width: 600px; 
            color: #ECDFCC; 
        }
        .card-title {
            font-size: 1.5rem;
            color: #ECDFCC; 
            margin-bottom: 20px; 
        }
        .result {
            background-color: #2D2E2B; 
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px; 
            font-size: 1.2rem; 
            color: #ECDFCC; 
            font-weight: bold; 
        }
    </style>
</head>
<body>

    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="card p-4">
            <h3 class="card-title text-center">Aplikasi Menghitung Luas dan Keliling Segitiga</h3>
            
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Get the POST data
                $alas = $_POST['alas'] ?? 0;
                $tinggi = $_POST['tinggi'] ?? 0;
                $sisi_a = $_POST['sisi_a'] ?? 0;
                $sisi_b = $_POST['sisi_b'] ?? 0;
                $sisi_c = $_POST['sisi_c'] ?? 0;

                // Calculate area and perimeter
                $luas = 0.5 * $alas * $tinggi;
                $keliling = $sisi_a + $sisi_b + $sisi_c;

                // Round the results
                $luas = round($luas);
                $keliling = round($keliling);

                // Output the results
                echo "<p class='result'>Alas: " . htmlspecialchars($alas) . "</p>";
                echo "<p class='result'>Tinggi: " . htmlspecialchars($tinggi) . "</p>";
                echo "<p class='result'>Sisi A: " . htmlspecialchars($sisi_a) . "</p>";
                echo "<p class='result'>Sisi B: " . htmlspecialchars($sisi_b) . "</p>";
                echo "<p class='result'>Sisi C: " . htmlspecialchars($sisi_c) . "</p>";
                echo "<p class='result'>Luas: " . htmlspecialchars($luas) . "</p>";
                echo "<p class='result'>Keliling: " . htmlspecialchars($keliling) . "</p>";
            } else {
                echo "<p class='result'>Silakan masukkan data pada form sebelumnya.</p>";
            }
            ?>
        </div>
    </div>

</body>
</html>
