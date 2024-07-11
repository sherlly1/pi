<!DOCTYPE html>
<html>
<head>
    <title>Login ke Sistem Pakar</title>
    <link rel="icon" type="image/png" href="logo.jpg">
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
            max-width: 400px;
            background-color: rgba(255, 255, 255, 0.8); /* Memberi opacity pada latar belakang */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            text-align: left;
            margin-bottom: 8px;
            color: #333;
        }
        input[type="text"],
input[type="password"] {
    width: calc(100% - 24px); /* Lebar input minus padding dan border */
    padding: 12px;
    margin-bottom: 15px;
    border: none;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type="submit"],
button {
    width: calc(50% - 5px); /* Lebar 50% dari container dengan jarak 5px */
    padding: 12px;
    margin-bottom: 15px;
    border: none;
    border-radius: 4px;
    box-sizing: border-box;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

        input[type="submit"] {
            background-color: #007bff;
            color: white;
        }
        button {
            background-color: #f44336;
            color: white;
        }
        input[type="submit"]:hover,
        button:hover {
            background-color: #0056b3;
        }
        /* Eye icon style for password visibility */
        .eye-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login ke Sistem Pakar</h2>
        <form action="login_process.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br>
            <label for="password">Password:</label>
            <div style="position: relative;">
                <input type="password" id="password" name="password" required>
                <span class="eye-icon" onclick="togglePasswordVisibility()">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="#666">
                        <path d="M12 4C6.48 4 2 9.14 2 12s4.48 8 10 8s10-4.14 10-8s-4.48-8-10-8zm0 14c-3.31 0-6-2.69-6-6s2.69-6 6-6s6 2.69 6 6s-2.69 6-6 6z"/>
                        <circle cx="12" cy="12" r="2.5"/>
                    </svg>
                </span>
            </div>
            <br><br>
            <input type="submit" value="Login" style="background-color: #f44336; color: white; width: 100px;">
            <button type="button" onclick="window.history.back();" style="background-color: #f44336; color: white;">Kembali</button>
        </form>
    </div>

    <script>
        function togglePasswordVisibility() {
            var passwordField = document.getElementById("password");
            var eyeIcon = document.querySelector(".eye-icon");

            if (passwordField.type === "password") {
                passwordField.type = "text";
                eyeIcon.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="#666"><path d="M12 4C6.48 4 2 9.14 2 12s4.48 8 10 8s10-4.14 10-8s-4.48-8-10-8zm0 14c-3.31 0-6-2.69-6-6s2.69-6 6-6s6 2.69 6 6s-2.69 6-6 6z"/><circle cx="12" cy="12" r="2.5"/></svg>';
            } else {
                passwordField.type = "password";
                eyeIcon.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="#666"><path d="M12 4C6.48 4 2 9.14 2 12s4.48 8 10 8s10-4.14 10-8s-4.48-8-10-8zm0 14c-3.31 0-6-2.69-6-6s2.69-6 6-6s6 2.69 6 6s-2.69 6-6 6z"/><circle cx="12" cy="12" r="2.5"/></svg>';
            }
        }
    </script>
</body>
</html>
