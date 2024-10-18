<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Menghitung Luas Permukaan dan Volume Tabung</title>
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
                <h3 class="card-title text-center">Aplikasi Menghitung Luas Permukaan dan Volume Tabung</h3>
                <br>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Get the POST data
                    $jari_jari = $_POST['jari_jari'];
                    $tinggi = $_POST['tinggi'];
                    $pi = 3.14159;

                    // Calculate surface area and volume
                    $luas_permukaan = 2 * $pi * $jari_jari * ($jari_jari + $tinggi);
                    $volume = $pi * $jari_jari * $jari_jari * $tinggi;

                    // Round the results
                    $luas_permukaan = round($luas_permukaan);
                    $volume = round($volume);

                    // Output the results
                    echo "<p class='result'>Jari-jari: " . htmlspecialchars($jari_jari) . "</p>";
                    echo "<p class='result'>Tinggi: " . htmlspecialchars($tinggi) . "</p>";
                    echo "<p class='result'>Luas Permukaan: " . htmlspecialchars($luas_permukaan) . "</p>";
                    echo "<p class='result'>Volume: " . htmlspecialchars($volume) . "</p>";
                } else {
                    echo "<p class='result'>Silakan masukkan data pada form sebelumnya.</p>";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
