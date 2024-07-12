<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard User</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/png" href="logo.jpg">
</head>
<body>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0; /* Warna latar belakang default */
            background-image: url('logo.jpg'); /* Path gambar latar belakang */
            background-size: cover; /* Menyesuaikan ukuran gambar dengan latar belakang */
            background-position: center; /* Posisi gambar latar belakang di tengah */
            text-align: center;
            margin: 0;
            padding: 0;
            height: 100vh; /* Menyesuaikan tinggi halaman */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
            background-color: rgba(255, 255, 255, 0.9); /* Warna latar belakang putih dengan transparansi */
            padding: 20px;
            border-radius: 10px;
        }

        header {
            background: #ff0000; /* Warna merah untuk header */
            color: #fff;
            padding: 20px;
            border-radius: 10px 10px 0 0;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        header h1 {
            margin: 0;
            font-size: 24px;
        }

        .admin-button {
            background-color: #cc0000; /* Warna merah yang lebih gelap untuk tombol admin */
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .admin-button img {
            width: 20px;
            height: 20px;
            margin-right: 8px;
        }

        main {
            padding: 20px;
        }

        main h2 {
            color: #0000ff;
        }

        main p {
            text-align: justify;
            color: #333;
        }

        .submit {
            background-color: #0000ff; /* Warna merah untuk tombol mulai diagnosa */
            color: #fff;
            border: none;
            padding: 15px 30px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 18px;
            margin-top: 20px;
        }

        .submit:hover {
            background-color: #0000ff; /* Warna merah yang lebih gelap saat hover */
        }

        footer {
            background: #0000ff; /* Warna merah untuk footer */
            color: #fff;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
            border-radius: 0 0 10px 10px;
        }

    </style>
    <div class="container">
        <header>
            <button class="admin-button" onclick="location.href='login_admin.php'">
                <img src="admin.png" alt="Admin"> Admin
            </button>
        </header>
        <main>
        <h1>Selamat Datang!</h1>
            <h2>Sistem Pakar Kecanduan Game Online</h2>
            <p>Sistem pakar kecanduan game online adalah sebuah aplikasi yang dirancang untuk membantu dalam mengidentifikasi dan mendiagnosis tingkat kecanduan seseorang terhadap game online. Sistem ini menggunakan metode kecerdasan buatan yang dikenal sebagai sistem pakar, di mana pengetahuan dan keahlian seorang pakar dalam bidang tertentu diintegrasikan ke dalam perangkat lunak. Dengan menggunakan data dari pengguna, seperti waktu yang dihabiskan bermain game, gejala yang dialami, dan dampak terhadap kehidupan sehari-hari, sistem pakar ini dapat memberikan penilaian objektif mengenai tingkat kecanduan game online. Hasil dari penilaian ini kemudian dapat digunakan untuk memberikan saran atau rekomendasi penanganan lebih lanjut.</p>
            <p>Keunggulan utama dari sistem pakar kecanduan game online adalah kemampuannya untuk memberikan penilaian yang cepat dan akurat, tanpa memerlukan interaksi langsung dengan seorang ahli. Sistem ini juga dapat diakses kapan saja dan di mana saja, sehingga memudahkan individu yang mungkin malu atau enggan untuk mencari bantuan langsung dari seorang profesional. Selain itu, dengan terus-menerus memperbarui data dan algoritma yang digunakan, sistem pakar ini dapat terus meningkatkan akurasi dan efektivitasnya dalam mendeteksi kecanduan game online, serta memberikan rekomendasi yang lebih tepat sesuai dengan perkembangan terbaru di bidang ini.</p>
            <button class="submit" onclick="location.href='login.php'">Mulai Diagnosa</button>
        </main>
        <footer>
            <p>&copy; Sherly Octavia Aanggraeni 2024</p>
            <p><span>Sistem Pakar Kecanduan Game Online.</span> All rights reserved.</p>
        </footer>
    </div>
</body>
</html>
