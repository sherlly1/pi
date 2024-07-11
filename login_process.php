<?php
// Koneksi ke database
$conn = new mysqli('localhost', 'root', '', 'kecanduan_game');

// Check koneksi
if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}

// Ambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Cek keberadaan pengguna
$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
        // Login berhasil, arahkan ke halaman berikutnya (misalnya, halaman pertanyaan sistem pakar)
        header("Location: pertanyaan_sistem_pakar.php");
        exit;
    } else {
        echo "Password salah.";
    }
} else {
    echo "Pengguna tidak ditemukan.";
}

$conn->close();
?>
