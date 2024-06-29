<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - Fakultas Teknik Universitas Lambung Mangkurat</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
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
        .sidebar h2 {
            text-align: center;
            color: #333;
            margin-bottom: 10px;
            font-size: 30px;
        }
        .sidebar h5 {
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
        .sidebar ul li.active {
            background: #d7e7ff;
        }
        .sidebar ul li i {
            margin-right: 10px;
        }
        .sidebar .label {
            margin-left: 20px;
            margin-bottom: 10px;
            color: #333;
            font-size: 16px;
        }
        
        .main-content {
            margin-left: 300px;
            padding: 20px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #ffffff;
            padding: 10px 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        .header input {
            width: 300px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .header img {
            width: 40px;
            border-radius: 50%;
        }
        .faq-container {
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .faq-container h2 {
            text-align: center;
            color: #333;
        }
        .faq-container p {
            text-align: center;
            color: #777;
        }
        .faq-item {
            border-top: 1px solid #ddd;
            padding: 15px 0;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .faq-item:first-child {
            border-top: none;
        }
        .faq-item:hover {
            background: #f9f9f9;
        }
        .faq-item span {
            color: #007bff;
        }
        .card-container {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }
        .card {
            background: #ffffff;
            width: 30%;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            text-align: center;
        }
        .card h3 {
            color: #333;
        }
        .card p {
            color: #777;
        }
        .card button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background: #007bff;
            color: #fff;
            cursor: pointer;
        }
        .card button:hover {
            background: #0056b3;
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
            <li><i class="fas fa-question-circle"></i><span>Kuisioner</span></li>
            <li><i class="fas fa-question-circle"></i><span>FAQ</span></li>
            <li><i class="fas fa-user"></i><span>Profile</span></li>
            <li><i class="fas fa-sign-out-alt"></i><span>Logout</span></li>
        </ul>
    </div>
    <div class="main-content">
        <div class="header">
            <div>
                <h1>FAQ</h1>
                <p>Tanyakan Semua yang perlu Anda ketahui tentang Website Layanan FT ULM</p>
            </div>
            <div>
                <input type="text" placeholder="Cari Layanan...">
                <img src="https://via.placeholder.com/40" alt="User Profile">
            </div>
        </div>
        <div class="faq-container">
            <h2>Frequently asked questions</h2>
            <p>FAQ berisi pertanyaan-pertanyaan yang sering diajukan oleh orang-orang tentang layanan FT ULM. FAQ bertujuan untuk memberikan informasi yang dibutuhkan secara cepat dan mudah.</p>
            <div class="faq-item">
                <p>Bagaimana cara mengubah Password dan Biodata di Layanan FT ULM?</p>
                <span>+</span>
            </div>
            <div class="faq-item">
                <p>Bagaimana proses mengajukan sebuah layanan?</p>
                <span>+</span>
            </div>
            <div class="faq-item">
                <p>Bagaimana cara melacak status pengajuan surat yang telah diajukan?</p>
                <span>+</span>
            </div>
            <div class="faq-item">
                <p>Berapa lama waktu yang dibutuhkan untuk memproses permohonan surat?</p>
                <span>+</span>
            </div>
            <div class="faq-item">
                <p>Apa yang harus saya lakukan ketika proses pengajuan tidak ada kemajuan lebih dari 3 hari?</p>
                <span>+</span>
            </div>
            <div class="faq-item">
                <p>Bagaimana cara saya menerima surat setelah diproses? Apakah saya harus mengambilnya sendiri atau bisa dikirimkan?</p>
                <span>+</span>
            </div>
        </div>
        <div class="card-container">
            <div class="card">
                <h3>Bingung Cara Mengajukan Sebuah Layanan Surat?</h3>
                <p>Klik Tombol Tutorial dibawah ini untuk mengetahui step-by-step dalam mengajukan sebuah layanan.</p>
                <button>Tutorial</button>
            </div>
            <div class="card">
                <h3>Masih Mempunyai Pertanyaan Terkait Layanan FT?</h3>
                <p>Tidak dapat menemukan jawaban yang kamu cari? Silahkan Hubungi kami melalui Layanan Tanya FT.</p>
                <button>Tanya FT</button>
            </div>
        </div>
    </div>
</body>
</html>