<?php
session_start();

// Pastikan admin sudah login
if (!isset($_SESSION['admin'])) {
    header("Location: login_admin.php");
    exit();
}

// Koneksi ke database
$conn = new mysqli('localhost', 'root', '', 'kecanduan_game');

// Check koneksi
if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}

// Query untuk mengambil data dari tabel hasil_analisis
$sql = "SELECT * FROM hasil_analisis";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        a {
            text-decoration: none;
            color: #007bff;
        }
    </style>
</head>
<body>
    <h2>Selamat datang, <?php echo $_SESSION['admin']; ?>!</h2>
    <a href="logout.php">Logout</a>
    <h3>Data Hasil Analisis Kecanduan Game</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Nilai CF</th>
            <th>Persentase CF</th>
            <th>Tingkat Kecanduan</th>
            <th>Solusi</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['nama'] . "</td>";
                echo "<td>" . $row['umur'] . "</td>";
                echo "<td>" . $row['cf_value'] . "</td>";
                echo "<td>" . $row['persentase_cf'] . "</td>";
                echo "<td>" . $row['tingkat_kecanduan'] . "</td>";
                echo "<td>" . $row['solusi'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='8'>Tidak ada data.</td></tr>";
        }
        ?>
    </table>
</body>
</html>
<?php
$conn->close();
?>
