<!DOCTYPE html>
<html>
<head>
    <title>Pertanyaan Sistem Pakar</title>
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
        }
        .question {
            text-align: left;
            margin-bottom: 20px;
        }
        .answer {
            display: block;
            margin-top: 10px;
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
        <h2>Pertanyaan Sistem Pakar</h2>
        
        <form action="proses_jawaban.php" method="POST">
            <?php
            // Koneksi ke database
            $conn = new mysqli('localhost', 'root', '', 'kecanduan_game');

            // Check koneksi
            if ($conn->connect_error) {
                die("Koneksi Gagal: " . $conn->connect_error);
            }

            // Query untuk mengambil pertanyaan
            $sql = "SELECT * FROM pertanyaan";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="question">
                        <p><?php echo $row['teks_pertanyaan']; ?></p>
                        <input type="hidden" name="id_pertanyaan[]" value="<?php echo $row['id']; ?>">
                        <input type="radio" id="jawaban-ya-<?php echo $row['id']; ?>" name="jawaban_<?php echo $row['id']; ?>" value="ya" required>
                        <label for="jawaban-ya-<?php echo $row['id']; ?>">Ya</label>
                        <input type="radio" id="jawaban-tidak-<?php echo $row['id']; ?>" name="jawaban_<?php echo $row['id']; ?>" value="tidak">
                        <label for="jawaban-tidak-<?php echo $row['id']; ?>">Tidak</label>
                    </div>
                    <?php
                }
            } else {
                echo "Belum ada pertanyaan yang ditambahkan.";
            }

            $conn->close();
            ?>
            
            <input type="submit" class="btn" value="Kirim">
        </form>
    </div>
</body>
</html>
