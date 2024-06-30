<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Fakultas Teknik Universitas Lambung Mangkurat</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center; 
            align-items: center;
            height: 100vh;
            background: url('https://images.pexels.com/photos/26777218/pexels-photo-26777218.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2') center center no-repeat;
            background-size: cover;
            padding-right: 20vw; 
        }
        
        .container {
            width: 100%;
            max-width: 500px;
            background-image: linear-gradient(to right, #ffcccc 0%, #ccffcc 100%);
            background-size: 200% 200%;
            padding: 40px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 10px;
            text-align: center;
            align-items: center;
            justify-content: center;
            margin-left: 240px;
            animation: gradientShift 10s linear infinite;
            
    }
        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
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

    .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
    }

    .input-group input:focus {
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
        <form action="<?php echo base_url('login/authenticate'); ?>" method="POST">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn">Login</button>
            <a href="#" class="link">Lupa password?</a>
            <a href="#" class="link">Belum Mempunyai Akun? Daftar</a>
        </form>
        <?php if (isset($error)) { echo '<div class="alert alert-danger mt-3">'.$error.'</div>'; } ?>
    </div>
</body>
</html>
