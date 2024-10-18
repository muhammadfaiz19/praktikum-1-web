<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Perhitungan Lingkaran</title>
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
        <div class="card p-5">
            <div class="card-body">
                <h3 class="card-title text-center">Aplikasi Menghitung Luas dan Keliling Lingkaran</h3>
                <br>

                <?php
                    // Get the jari_jari from the POST data
                    $jari_jari = $_POST['jari_jari'];
                    $pi = 3.14159;

                    $luas = $pi * $jari_jari * $jari_jari;
                    $keliling = 2 * $pi * $jari_jari;

                    // Round the results
                    $luas = round($luas);
                    $keliling = round($keliling);

                    // Output results inside styled card
                    echo "<p class='result'>Jari-jari : " . htmlspecialchars($jari_jari) . "</p>";
                    echo "<p class='result'>Luas : " . htmlspecialchars($luas) . "</p>";
                    echo "<p class='result'>Keliling : " . htmlspecialchars($keliling) . "</p>";
                ?>
            </div>
        </div>
    </div>
</body>
</html>
