<?php
session_start();

// Koneksi ke database
$conn = new mysqli('localhost', 'root', '', 'kecanduan_game');

// Check koneksi
if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}

// Ambil nilai nama dan umur dari POST
$nama = $_POST['nama'];
$umur = $_POST['umur'];

$id_gejala = $_POST['id_gejala'];
$total_mb = 0;
$total_md = 0;

foreach ($id_gejala as $id) {
    $jawaban = $_POST['jawaban_' . $id];
    
    // Ambil nilai MB dan MD dari database
    $sql = "SELECT mb, md FROM gejala WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $mb = $row['mb'];
    $md = $row['md'];

    // Hitung total MB dan MD
    if ($jawaban == 'ya') {
        $total_mb += $mb;
        $total_md += $md;
    } else {
        $total_mb += $md;
        $total_md += $mb;
    }
}

// Hitung nilai CF
if ($total_md != 0) {
    $cf = ($total_mb - $total_md) / ($total_mb + $total_md);
} else {
    $cf = 0; // menghindari pembagian dengan nol
}

// Konversi CF ke persentase
$persentase_cf = abs($cf) * 100;

// Tentukan tingkat kecanduan berdasarkan persentase CF
if ($persentase_cf >= 70) {
    $tingkat = 'Tinggi';
} elseif ($persentase_cf >= 40 && $persentase_cf < 70) {
    $tingkat = 'Sedang';
} else {
    $tingkat = 'Rendah';
}

// Ambil solusi dari tabel tingkat_kecanduan sesuai dengan tingkat kecanduan
$sql_solusi = "SELECT keterangan FROM tingkat_kecanduan WHERE level = '$tingkat'";
$result_solusi = $conn->query($sql_solusi);

if ($result_solusi->num_rows > 0) {
    $row_solusi = $result_solusi->fetch_assoc();
    $solusi = $row_solusi['keterangan'];
} else {
    $solusi = "Data solusi tidak tersedia untuk tingkat kecanduan $tingkat";
}

// Simpan hasil analisis ke database
$sql_simpan = "INSERT INTO hasil_analisis (nama, umur, cf_value, persentase_cf, tingkat_kecanduan, solusi)
               VALUES ('$nama', '$umur', '$cf', '$persentase_cf', '$tingkat', '$solusi')";

if ($conn->query($sql_simpan) === TRUE) {
    echo "Hasil analisis berhasil disimpan ke database.";
} else {
    echo "Error: " . $sql_simpan . "<br>" . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Analisis Kecanduan Game</title>
    <link rel="icon" type="image/png" href="logo.jpg">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('background.jpg'); /* Pastikan Anda memiliki file background.jpg di folder yang sama */
            background-size: cover;
            background-position: center;
            text-align: center;
            padding-top: 50px;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
        }
        .result {
            margin-top: 20px;
            text-align: left;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            font-size: 16px;
            color: #ffffff;
            background-color: #f44336;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Hasil Analisis Kecanduan Game</h2>
        
        <div class="result">
            <p>Nama: <?php echo htmlspecialchars($nama); ?></p>
            <p>Umur: <?php echo htmlspecialchars($umur); ?></p>
            <p>Nilai Certainty Factor total: <?php echo round($cf, 2); ?></p>
            <p>Persentase: <?php echo round($persentase_cf, 2); ?>%</p>
            <p>Tingkat Kecanduan: <?php echo $tingkat; ?></p>
            <p>Solusi: <?php echo $solusi; ?></p>
        </div>

        <a href="index.php" class="btn">Kembali ke Beranda</a>
    </div>
</body>
</html>
