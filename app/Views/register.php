<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Fakultas Teknik Universitas Lambung Mangkurat</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: flex-end; 
            align-items: center;
            height: 100vh;
            background: url('https://images.pexels.com/photos/26777218/pexels-photo-26777218.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2') center center no-repeat;
            background-size: cover;
            padding-right: 20vw;  
        }
        .container {
            width: 100%;
            max-width: 500px;
            background: rgba(255, 255, 255, 0.8); /* Set background to white with 80% opacity */
            padding: 40px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 10px;
            text-align: center;
            margin: 20px; /* Add margin */
        }
        .header img {
            width: 100px;
            margin-bottom: 20px;
        }
        .header h2 {
            margin: 0;
            font-size: 24px;
            color: #333;
        }
        .header p {
            margin: 0;
            margin-bottom: 20px;
            color: #777;
        }
        form {
            width: 100%;
        }
        .input-group {
            margin-bottom: 15px;
            text-align: left;
        }
        .input-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }
        .input-group input, .input-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .input-group input:focus, .input-group select:focus {
            outline: none;
            border-color: #007bff;
        }
        .btn {
            width: 100%;
            padding: 10px;
            border: none;
            background: linear-gradient(145deg, #ffffff, #e6e6e6);
            color: #333;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            box-shadow: 5px 5px 10px #ccc, -5px -5px 10px #fff;
            transition: all 0.3s ease;
        }
        .btn:hover {
            background: linear-gradient(145deg, #e6e6e6, #ffffff);
            box-shadow: inset 5px 5px 10px #ccc, inset -5px -5px 10px #fff;
        }
        .link {
            display: block;
            margin-top: 10px;
            color: #007bff;
            text-decoration: none;
        }
        .link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="https://s2paud.ulm.ac.id/wp-content/uploads/2023/04/Logo-ULM.png" alt="Logo ULM">
            <h2>Fakultas Teknik</h2>
            <p>Universitas Lambung Mangkurat</p>
        </div>
        <form action="register_process.php" method="POST">
            <div class="input-group">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" id="nama_lengkap" name="nama_lengkap" required>
            </div>
            <div class="input-group">
                <label for="no_handphone">No. Handphone</label>
                <input type="text" id="no_handphone" name="no_handphone" required>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="masuk_sebagai">Masuk Sebagai</label>
                <select id="masuk_sebagai" name="masuk_sebagai" required>
                    <option value="">Pilih Jenis Pengguna</option>
                    <option value="mahasiswa">Mahasiswa</option>
                    <option value="dosen">Dosen</option>
                    <option value="staff">Staff</option>
                </select>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="input-group">
                <label for="konfirmasi_password">Konfirmasi Password</label>
                <input type="password" id="konfirmasi_password" name="konfirmasi_password" required>
            </div>
            <button type="submit" class="btn">Daftar</button>
            <a href="login.php" class="link">Sudah Mempunyai Akun? Login</a>
        </form>
    </div>
</body>
</html>
