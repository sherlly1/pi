<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pengguna Baru</title>
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
        h2 {
            color: #333;
            margin-bottom: 20px;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            text-align: left;
        }
        input[type="text"],
        input[type="password"],
        input[type="date"],
        input[type="number"],
        input[type="submit"],
        button {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        button {
            background-color: #f44336;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #cc2b1d;
        }
    </style>
</head>
<body>
    <form action="register_process.php" method="POST">
        <h2>Daftar Pengguna Baru</h2>
        <label for="fullname">Nama Lengkap:</label>
        <input type="text" id="fullname" name="fullname" required>

        <label for="placeofbirth">Tempat Lahir:</label>
        <input type="text" id="placeofbirth" name="placeofbirth" required>

        <label for="birthdate">Tanggal Lahir:</label>
        <input type="date" id="birthdate" name="birthdate" required>

        <label for="age">Umur:</label>
        <input type="number" id="age" name="age" required>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" value="Daftar">
        <button type="button" onclick="window.history.back();">Kembali</button>
    </form>
</body>
</html>
