<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: linear-gradient(to right, #ffcccc 0%, #ccffcc 100%);
            margin: 0;
            padding: 0;
            background-size: 200% 200%;
            animation: gradientShift 10s linear infinite;
        }
        
        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .sidebar {
            width: 250px;
            background: #ffffff;
            height: 100vh;
            position: fixed;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
            overflow-y: auto;
            padding-top: 20px;
        }

        .sidebar img {
            display: block;
            margin: 0 auto 10px auto;
            width: 50px;
        }

        .sidebar h2, .sidebar h5 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            padding: 10px 20px;
            text-align: left;
            color: #333;
            cursor: pointer;
            display: flex;
            align-items: center;
            font-size: 16px;
        }

        .sidebar ul li:hover, .sidebar ul li.active {
            background: #e7f1ff;
            color: #007bff;
        }

        .sidebar .label {
            margin-left: 20px;
            margin-bottom: 10px;
            color: #333;
            font-size: 16px;
        }

        .content {
            margin-left: 270px;
            padding: 2rem;
        }

        .header {
            background-image: linear-gradient(to right, #ffcccc, #ccffcc);
            color: white;
            padding: 20px;
            font-size: 24px;
            text-align: center;
            border-radius: 5px;
            font-weight: bold;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .card {
            margin: 1rem 0;
            border: none;
            border-radius: 10px;
            background-color: #FFECB3;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .card img {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .card-body {
            text-align: center;
        }

        .alert {
            background-color: #FFECB3;
            color: black;
            padding: 10px;
            margin-top: 10px;
            text-align: center;
            font-size: 16px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .alert a {
            font-weight: bold;
            color: #0056b3;
            text-decoration: none;
        }

        .jumbotron {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
            margin-top: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .jumbotron h1 {
            color: #333;
            font-size: 28px;
            font-weight: bold;
        }

        .jumbotron p {
            color: #666;
            font-size: 18px;
        }

        .mt-5 {
            font-weight: bold;
        }

        @media (max-width: 768px) {
            .header, .alert, .jumbotron h1, .jumbotron p {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <img src="https://3.bp.blogspot.com/-33E6NBlEVik/VUl2ED2CtdI/AAAAAAAAAsg/aQwGsCxefNQ/s1600/unlam.jpg" alt="Logo ULM">
        <h2>Fakultas Teknik</h2>
        <h5>Universitas Lambung Mangkurat</h5>
        <ul>
            <li class="active"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></li>
            <li><i class="fas fa-concierge-bell"></i><span>e-Services</span></li>
            <li><i class="fas fa-bell"></i><span>e-Command Center</span></li>
            <li><i class="fas fa-envelope"></i><span>e-Response</span></li>
            <li><i class="fas fa-users"></i><span>e-Commerce</span></li>
            <li><i class="fas fa-building"></i><span>e-Office</span></li>
            <label class="label">Other</label>
            <li><a href="/kuisioner_biodata"><i class="fas fa-question-circle"></i>Kuisioner</a></li>
            <li><i class="fas fa-question-circle"></i><span>FAQ</span></li>
            <li><i class="fas fa-user"></i><span>Profile</span></li>
            <li><i class="fas fa-sign-out-alt"></i><span>Logout</span></li>
        </ul>
    </div>
    <div class="content">
        <div class="header">
            <h2>Dashboard</h2>
        </div>
        <div class="alert mt-3">
            Kamu belum mengisi Kuisioner pada periode semester ini, silahkan isi Kuisioner <a href="/kuisioner_biodata">Disini</a>
        </div>
        <div class="jumbotron text-center bg-white p-4">
            <h1 class="display-4">Selamat Datang di Layanan Fakultas Teknik!</h1>
            <p class="lead">Di website ini kamu dapat mengajukan layanan dan mengecek status pengajuannya</p>
        </div>
        <div class="row text-center">
            <div class="col-md-3">
                <div class="card bg-light">
                    <div class="card-body">
                        <h5 class="card-title">4</h5>
                        <p class="card-text">Layanan diajukan</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-light">
                    <div class="card-body">
                        <h5 class="card-title">2</h5>
                        <p class="card-text">Menunggu persetujuan</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-light">
                    <div class="card-body">
                        <h5 class="card-title">1</h5>
                        <p class="card-text">Layanan disetujui</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-light">
                    <div class="card-body">
                        <h5 class="card-title">1</h5>
                        <p class="card-text">Layanan ditolak</p>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="mt-5">Mungkin yang kamu butuhkan</h3>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="https://i.pinimg.com/564x/17/4f/5d/174f5dce9a192f703b5a4d8c4d7d4547.jpg" alt="Surat Keterangan Lulus">
                    <div class="card-body">
                        <h5 class="card-title">Surat Keterangan Lulus</h5>
                        <p class="card-text">Dapatkan Surat Keterangan Lulus dengan Mudah.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="https://i.pinimg.com/564x/17/4f/5d/174f5dce9a192f703b5a4d8c4d7d4547.jpg" alt="Surat Pengantar Izin PKL">
                    <div class="card-body">
                        <h5 class="card-title">Surat Pengantar Izin PKL</h5>
                        <p class="card-text">Persiapkan untuk PKL dengan Surat Pengantar.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="https://i.pinimg.com/564x/17/4f/5d/174f5dce9a192f703b5a4d8c4d7d4547.jpg" alt="Surat Pengantar Izin Penelitian">
                    <div class="card-body">
                        <h5 class="card-title">Surat Pengantar Izin Penelitian</h5>
                        <p class="card-text">Dapatkan Surat Pengantar untuk Penelitian.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="https://i.pinimg.com/564x/17/4f/5d/174f5dce9a192f703b5a4d8c4d7d4547.jpg" alt="Permintaan Data MK/PKL/TA">
                    <div class="card-body">
                        <h5 class="card-title">Permintaan Data MK/PKL/TA</h5>
                        <p class="card-text">Ajukan Permintaan Data dengan Mudah.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
