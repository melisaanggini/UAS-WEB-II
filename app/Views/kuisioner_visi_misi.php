<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuisioner Mahasiswa - Fakultas Teknik Universitas Lambung Mangkurat</title>
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
            margin-left: 250px;
            padding: 20px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #ffffff;
            padding: 10px 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
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
        .container {
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .container h2 {
            text-align: center;
            color: #333;
        }
        .container p {
            text-align: center;
            color: #777;
        }
        .stepper {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        .stepper div {
            text-align: center;
            flex: 1;
        }
        .stepper div:not(:last-child)::after {
            content: '';
            display: block;
            height: 2px;
            background: #ddd;
            margin: 0 auto;
            width: 100%;
            max-width: 50px;
        }
        .stepper div span {
            display: block;
            width: 30px;
            height: 30px;
            background: #ddd;
            color: #fff;
            line-height: 30px;
            border-radius: 50%;
            margin: 0 auto;
            margin-bottom: 5px;
        }
        .stepper div.active span {
            background: #007bff;
        }
        .stepper div.active p {
            color: #007bff;
            text-decoration: underline;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            color: #333;
            margin-bottom: 5px;
        }
        .form-group input, .form-group select, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .form-group input[type="radio"], .form-group input[type="checkbox"] {
            width: auto;
        }
        .form-actions {
            display: flex;
            justify-content: space-between;
        }
        .form-actions button {
            padding: 10px 20px;
            border: none;
            background: #007bff;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-actions button:hover {
            background: #0056b3;
        }
        .form-actions .secondary {
            background: #f4f4f4;
            color: #333;
        }
        .form-actions .secondary:hover {
            background: #ddd;
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
                <h1>Kuisioner Mahasiswa</h1>
                <p>Isi kuisioner bagi mahasiswa aktif FT ULM untuk peningkatan kualitas dan evaluasi layanan FT ULM</p>
            </div>
            <div>
                <input type="text" placeholder="Cari Layanan...">
                <img src="https://via.placeholder.com/40" alt="User Profile">
            </div>
        </div>
        <div class="container">
            <h2>Kuisioner Mahasiswa</h2>
            <p>Isi kuisioner bagi mahasiswa aktif FT ULM untuk peningkatan kualitas dan evaluasi layanan FT ULM</p>
            <div class="stepper">
                <div class="step" id="step1">
                    <span>1</span>
                    <p>Biodata</p>
                </div>
                <div class="step active" id="step2">
                    <span>2</span>
                    <p>Visi Misi FT ULM</p>
                </div>
                <div class="step" id="step3">
                    <span>3</span>
                    <p>Layanan Akademik</p>
                </div>
                <div class="step" id="step4">
                    <span>4</span>
                    <p>Layanan Kemahasiswaan</p>
                </div>
                <div class="step" id="step5">
                    <span>5</span>
                    <p>Selesai</p>
                </div>
            </div>
            <form action="kuisioner_layanan_akademik.php">
                <div class="form-group">
                    <label>Apakah Anda sudah pernah membaca "Visi, Misi, Tujuan dan Strategi" Fakultas Teknik ULM?</label>
                    <input type="radio" name="visi_misi" value="Ya" required> Ya
                    <input type="radio" name="visi_misi" value="Tidak" required> Tidak
                </div>
                <div class="form-group">
                    <label>Jika Ya, darimana anda mengetahui visi dan misi Fakultas? Boleh dipilih lebih dari satu</label>
                    <input type="checkbox" name="sumber_visi_misi" value="Website / Media Sosial"> Website / Media Sosial
                    <input type="checkbox" name="sumber_visi_misi" value="Brosur"> Brosur
                    <input type="checkbox" name="sumber_visi_misi" value="Pidato / Sosialisasi Pimpinan"> Pidato / Sosialisasi Pimpinan
                    <input type="checkbox" name="sumber_visi_misi" value="Banner / Pamflet"> Banner / Pamflet
                    <input type="checkbox" name="sumber_visi_misi" value="Paparan Informasi"> Paparan Informasi
                </div>
                <div class="form-group">
                    <label>Apakah anda sudah pernah mendapatkan sosialisasi/penjelasan tentang "Visi, Misi, Tujuan dan Strategi" Fakultas Teknik ULM?</label>
                    <input type="radio" name="sosialisasi_visi_misi" value="Sering" required> Sering
                    <input type="radio" name="sosialisasi_visi_misi" value="Beberapa Kali"> Beberapa Kali
                    <input type="radio" name="sosialisasi_visi_misi" value="Satu Kali"> Satu Kali
                    <input type="radio" name="sosialisasi_visi_misi" value="Tidak Sama Sekali"> Tidak Sama Sekali
                </div>
                <div class="form-group">
                    <label>Bagaimanakah tingkat pemahaman anda terhadap "Visi, Misi, Tujuan dan Strategi" Fakultas Teknik ULM?</label>
                    <input type="radio" name="pemahaman_visi_misi" value="Sangat Paham" required> Sangat Paham
                    <input type="radio" name="pemahaman_visi_misi" value="Paham"> Paham
                    <input type="radio" name="pemahaman_visi_misi" value="Kurang Paham"> Kurang Paham
                    <input type="radio" name="pemahaman_visi_misi" value="Tidak Paham"> Tidak Paham
                </div>
                <div class="form-group">
                    <label>Menurut Anda apakah semua aspek kegiatan akademik sudah terakomodasi dalam visi dan misi Fakultas Teknik ULM?</label>
                    <input type="radio" name="akomodasi_visi_misi" value="Sudah" required> Sudah
                    <input type="radio" name="akomodasi_visi_misi" value="Sebagian"> Sebagian
                    <input type="radio" name="akomodasi_visi_misi" value="Hanya Sedikit"> Hanya Sedikit
                    <input type="radio" name="akomodasi_visi_misi" value="Tidak Ada"> Tidak Ada
                </div>
                <div class="form-group">
                    <label>Berdasarkan pertanyaan diatas, sudah tercermin dalam segi apakah visi dan misi Fakultas Teknik ULM? Boleh memilih jawaban lebih dari satu</label>
                    <input type="checkbox" name="cerminan_visi_misi" value="Kurikulum & Kompetensi Lulusan"> Kurikulum & Kompetensi Lulusan
                    <input type="checkbox" name="cerminan_visi_misi" value="Proses Pembelajaran"> Proses Pembelajaran
                    <input type="checkbox" name="cerminan_visi_misi" value="Penelitian / Pengabdian"> Penelitian / Pengabdian
                    <input type="checkbox" name="cerminan_visi_misi" value="Kompetensi dosen/ karyawan"> Kompetensi dosen/ karyawan
                    <input type="checkbox" name="cerminan_visi_misi" value="Tidak Ada"> Tidak Ada
                </div>
                <div class="form-actions">
                    <a href="/kuisioner_layanan_akademik">Lanjut</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>