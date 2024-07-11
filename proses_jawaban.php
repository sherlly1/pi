<!DOCTYPE html>
<html>
<head>
    <title>Hasil Diagnosa</title>
    <link rel="icon" type="image/png" href="logo.jpg">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            background-image: url('logo.jpg');
            background-size: cover;
            background-position: center;
            text-align: center;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
        }
        .result {
            text-align: left;
            margin-top: 20px;
        }
        .result p {
            margin: 10px 0;
        }
        .result .catatan {
            margin-top: 20px;
            background-color: #f9f9f9;
            padding: 10px;
            border-radius: 4px;
        }
        .result .catatan p {
            margin: 5px 0;
        }
        .btn {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Hasil Diagnosa</h2>
        <div class="result">
            <?php
            // Koneksi ke database
            $conn = new mysqli('localhost', 'root', '', 'kecanduan_game');

            // Check koneksi
            if ($conn->connect_error) {
                die("Koneksi Gagal: " . $conn->connect_error);
            }

            // Inisialisasi total CF dan jumlah aturan yang terpenuhi
            $total_cf = 0;
            $jumlah_aturan = 0;
            $catatan_terkumpul = [];

            // Loop untuk menghitung CF dari setiap pertanyaan yang dikirimkan melalui form
            foreach ($_POST['id_pertanyaan'] as $id_pertanyaan) {
                // Ambil jawaban dari $_POST, pastikan aman dengan real_escape_string
                $jawaban = $conn->real_escape_string($_POST['jawaban_' . $id_pertanyaan]);
                
                // Query untuk mendapatkan CF dari aturan yang sesuai dengan id_pertanyaan dan jawaban
                $sql = "SELECT cf, catatan FROM aturan_cf WHERE id_pertanyaan = $id_pertanyaan AND jawaban = '$jawaban'";
                $result = $conn->query($sql);

                // Jika query mengembalikan hasil, tambahkan nilai CF ke total_cf
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $cf = floatval($row['cf']);
                    $catatan = $row['catatan'];
                    $total_cf += $cf;
                    $jumlah_aturan++;
                    if (!empty($catatan)) {
                        $catatan_terkumpul[] = $catatan;
                    }
                }
            }

            // Hitung persentase hasil diagnosa jika ada aturan yang terpenuhi
            if ($jumlah_aturan > 0) {
                $persentase = ($total_cf / $jumlah_aturan) * 100;
                $persentase = round($persentase, 2); // Pembulatan dua angka desimal
                
                echo "<p><strong>Hasil diagnosa:</strong> " . $persentase . "%</p>";

                // Tentukan threshold untuk menampilkan solusi
                $threshold = 30; // Misalnya, threshold adalah 30%

                // Menentukan tingkat kecanduan
                $tingkat_kecanduan = "";
                if ($persentase >= 75) {
                    $tingkat_kecanduan = "Sangat Tinggi";
                } elseif ($persentase >= 50) {
                    $tingkat_kecanduan = "Tinggi";
                } elseif ($persentase >= 25) {
                    $tingkat_kecanduan = "Sedang";
                } else {
                    $tingkat_kecanduan = "Rendah";
                }

                echo "<p><strong>Tingkat kecanduan:</strong> " . $tingkat_kecanduan . "</p>";

                // Jika persentase hasil diagnosa mencapai atau melebihi threshold
                if ($persentase >= $threshold) {
                    // Menampilkan rekomendasi
                    echo "<p><strong>Rekomendasi:</strong> Disarankan untuk segera mencari bantuan profesional seperti konseling atau terapi untuk mengatasi kecanduan game online. Pengaturan waktu bermain dan pembatasan akses ke game online juga dapat membantu dalam jangka pendek.</p>";
                } else {
                    echo "<p>Hasil diagnosa tidak mencapai threshold untuk memberikan solusi.</p>";
                }

                // Tampilkan catatan jika ada
                if (!empty($catatan_terkumpul)) {
                    echo "<div class='catatan'><strong>Catatan:</strong><br>";
                    foreach ($catatan_terkumpul as $catatan) {
                        echo "<p>- " . $catatan . "</p>";
                    }
                    echo "</div>";
                }
            } else {
                echo "<p>Tidak ada data yang sesuai untuk menghitung hasil diagnosa.</p>";
            }

            // Tutup koneksi database setelah selesai menggunakan
            $conn->close();
            ?>
        </div>
    </div>
</body>
</html>
