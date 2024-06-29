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
        .quiz-section {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .quiz-group {
            background: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .quiz-group label {
            font-weight: bold;
        }
        .quiz-options {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }
        .quiz-options label {
            flex: 1;
        }
        .quiz-options label:not(:last-child) {
            margin-right: 10px;
        }
        .quiz-label {
            text-align: center;
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
                <div class="step" id="step2">
                    <span>2</span>
                    <p>Visi Misi FT ULM</p>
                </div>
                <div class="step active" id="step3">
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
            <form action="kuisioner_layanan_kemahasiswaan.php">
                <div class="quiz-section">
                    <label class="quiz-label"><h3>Keandalan (Reliability)</h3>Aspek Keandalan (reliability) bertujuan untuk mengukur sejauh mana layanan akademik yang
                        diberikan oleh Fakultas Teknik dapat diandalkan dan konsisten.
                    </label>
                    <div class="quiz-group">
                        <label>Kejelasan materi yang disampaikan oleh dosen</label>
                        <div class="quiz-options">
                            <label><input type="radio" name="materi_dosen" value="Sangat Baik" required> Sangat Baik</label>
                            <label><input type="radio" name="materi_dosen" value="Baik"> Baik</label>
                            <label><input type="radio" name="materi_dosen" value="Cukup"> Cukup</label>
                            <label><input type="radio" name="materi_dosen" value="Kurang"> Kurang</label>
                        </div>
                    </div>
                    <div class="quiz-group">
                        <label>Ketepatan waktu pelaksanaan perkuliahan</label>
                        <div class="quiz-options">
                            <label><input type="radio" name="waktu_perkuliahan" value="Sangat Baik" required> Sangat Baik</label>
                            <label><input type="radio" name="waktu_perkuliahan" value="Baik"> Baik</label>
                            <label><input type="radio" name="waktu_perkuliahan" value="Cukup"> Cukup</label>
                            <label><input type="radio" name="waktu_perkuliahan" value="Kurang"> Kurang</label>
                        </div>
                    </div>
                    <div class="quiz-group">
                        <label>Kelengkapan referensi untuk pembelajaran (handout, buku, modul, ppt, dll)</label>
                        <div class="quiz-options">
                            <label><input type="radio" name="referensi_pembelajaran" value="Sangat Baik" required> Sangat Baik</label>
                            <label><input type="radio" name="referensi_pembelajaran" value="Baik"> Baik</label>
                            <label><input type="radio" name="referensi_pembelajaran" value="Cukup"> Cukup</label>
                            <label><input type="radio" name="referensi_pembelajaran" value="Kurang"> Kurang</label>
                        </div>
                    </div>
                    <div class="quiz-group">
                        <label>Kesesuaian Keahlian dosen mengajar sesuai bidang keahliannya</label>
                        <div class="quiz-options">
                            <label><input type="radio" name="keahlian_dosen" value="Sangat Baik" required> Sangat Baik</label>
                            <label><input type="radio" name="keahlian_dosen" value="Baik"> Baik</label>
                            <label><input type="radio" name="keahlian_dosen" value="Cukup"> Cukup</label>
                            <label><input type="radio" name="keahlian_dosen" value="Kurang"> Kurang</label>
                        </div>
                    </div>
                    <div class="quiz-group">
                        <label>Kemampuan staf akademik untuk melayani administrasi kemahasiswaan</label>
                        <div class="quiz-options">
                            <label><input type="radio" name="kemampuan_staf" value="Sangat Baik" required> Sangat Baik</label>
                            <label><input type="radio" name="kemampuan_staf" value="Baik"> Baik</label>
                            <label><input type="radio" name="kemampuan_staf" value="Cukup"> Cukup</label>
                            <label><input type="radio" name="kemampuan_staf" value="Kurang"> Kurang</label>
                        </div>
                    </div>
                    <div class="quiz-group">
                        <label>Kualitas layanan staf akademik untuk memenuhi kepentingan mahasiswa</label>
                        <div class="quiz-options">
                            <label><input type="radio" name="layanan_staf" value="Sangat Baik" required> Sangat Baik</label>
                            <label><input type="radio" name="layanan_staf" value="Baik"> Baik</label>
                            <label><input type="radio" name="layanan_staf" value="Cukup"> Cukup</label>
                            <label><input type="radio" name="layanan_staf" value="Kurang"> Kurang</label>
                        </div>
                    </div>
                    <div class="quiz-group">
                        <label>Kejelasan pedoman (kurikulum dan akademik)</label>
                        <div class="quiz-options">
                            <label><input type="radio" name="pedoman_kurikulum" value="Sangat Baik" required> Sangat Baik</label>
                            <label><input type="radio" name="pedoman_kurikulum" value="Baik"> Baik</label>
                            <label><input type="radio" name="pedoman_kurikulum" value="Cukup"> Cukup</label>
                            <label><input type="radio" name="pedoman_kurikulum" value="Kurang"> Kurang</label>
                        </div>
                    </div>

                    <label class="quiz-label"><h3>Daya Tanggap (Responsiveness)</h3>Aspek Daya Tanggap (Responsiveness) bertujuan untuk mengukur sejauh mana layanan akademik 
                    yang diberikan oleh Fakultas Teknik responsif terhadap kebutuhan dan permintaan mahasiswa.
                    </label>
                    <div class="quiz-group">
                        <label>Kesediaan dosen dan karyawan memberikan pelayanan setiap waktu</label>
                        <div class="quiz-options">
                            <label><input type="radio" name="pelayanan_dosen" value="Sangat Baik" required> Sangat Baik</label>
                            <label><input type="radio" name="pelayanan_dosen" value="Baik"> Baik</label>
                            <label><input type="radio" name="pelayanan_dosen" value="Cukup"> Cukup</label>
                            <label><input type="radio" name="pelayanan_dosen" value="Kurang"> Kurang</label>
                        </div>
                    </div>
                    <div class="quiz-group">
                        <label>Kecepatan Dosen dan Karyawan dalam menanggapi keluhan mahasiswa</label>
                        <div class="quiz-options">
                            <label><input type="radio" name="keluhan_mahasiswa" value="Sangat Baik" required> Sangat Baik</label>
                            <label><input type="radio" name="keluhan_mahasiswa" value="Baik"> Baik</label>
                            <label><input type="radio" name="keluhan_mahasiswa" value="Cukup"> Cukup</label>
                            <label><input type="radio" name="keluhan_mahasiswa" value="Kurang"> Kurang</label>
                        </div>
                    </div>
                    <div class="quiz-group">
                        <label>Kecepatan dalam memberikan pelayanan</label>
                        <div class="quiz-options">
                            <label><input type="radio" name="kecepatan_pelayanan" value="Sangat Baik" required> Sangat Baik</label>
                            <label><input type="radio" name="kecepatan_pelayanan" value="Baik"> Baik</label>
                            <label><input type="radio" name="kecepatan_pelayanan" value="Cukup"> Cukup</label>
                            <label><input type="radio" name="kecepatan_pelayanan" value="Kurang"> Kurang</label>
                        </div>
                    </div>
                    <div class="quiz-group">
                        <label>Sikap profesionalisme dalam memberikan pelayanan</label>
                        <div class="quiz-options">
                            <label><input type="radio" name="profesionalisme" value="Sangat Baik" required> Sangat Baik</label>
                            <label><input type="radio" name="profesionalisme" value="Baik"> Baik</label>
                            <label><input type="radio" name="profesionalisme" value="Cukup"> Cukup</label>
                            <label><input type="radio" name="profesionalisme" value="Kurang"> Kurang</label>
                        </div>
                    </div>

                    <label class="quiz-label"><h3>Kepastian (assurance)</h3>Aspek Kepastian (assurance) bertujuan untuk mengukur tingkat keyakinan san rasa aman yang 
                    dirasakan oleh mahasiswa terkait dengan Kompetensidan kredibilitas staf akademik.
                    </label>
                    <div class="quiz-group">
                        <label>Permasalahan akademik dikonsultasikan dan ditangani oleh dosen pembimbing akademik</label>
                        <div class="quiz-options">
                            <label><input type="radio" name="konsultasi_dosen" value="Sangat Baik" required> Sangat Baik</label>
                            <label><input type="radio" name="konsultasi_dosen" value="Baik"> Baik</label>
                            <label><input type="radio" name="konsultasi_dosen" value="Cukup"> Cukup</label>
                            <label><input type="radio" name="konsultasi_dosen" value="Kurang"> Kurang</label>
                        </div>
                    </div>
                    <div class="quiz-group">
                        <label>Keramahan dan kesopanan staf akademik dalam memberikan pelayanan</label>
                        <div class="quiz-options">
                            <label><input type="radio" name="kesopanan_staf" value="Sangat Baik" required> Sangat Baik</label>
                            <label><input type="radio" name="kesopanan_staf" value="Baik"> Baik</label>
                            <label><input type="radio" name="kesopanan_staf" value="Cukup"> Cukup</label>
                            <label><input type="radio" name="kesopanan_staf" value="Kurang"> Kurang</label>
                        </div>
                    </div>
                    <div class="quiz-group">
                        <label>Transparansi dan keterukuran sistem penilaian</label>
                        <div class="quiz-options">
                            <label><input type="radio" name="transparansi_penilaian" value="Sangat Baik" required> Sangat Baik</label>
                            <label><input type="radio" name="transparansi_penilaian" value="Baik"> Baik</label>
                            <label><input type="radio" name="transparansi_penilaian" value="Cukup"> Cukup</label>
                            <label><input type="radio" name="transparansi_penilaian" value="Kurang"> Kurang</label>
                        </div>
                    </div>
                    <div class="quiz-group">
                        <label>Suasana akademik</label>
                        <div class="quiz-options">
                            <label><input type="radio" name="suasana_akademik" value="Sangat Baik" required> Sangat Baik</label>
                            <label><input type="radio" name="suasana_akademik" value="Baik"> Baik</label>
                            <label><input type="radio" name="suasana_akademik" value="Cukup"> Cukup</label>
                            <label><input type="radio" name="suasana_akademik" value="Kurang"> Kurang</label>
                        </div>
                    </div>
                    <div class="quiz-group">
                        <label>Penerapan sanksi bagi mahasiswa yang melanggar peraturan yang telah ditetapkan dan berlaku untuk semua mahasiswa tanpa terkecuali</label>
                        <div class="quiz-options">
                            <label><input type="radio" name="penerapan_sanksi" value="Sangat Baik" required> Sangat Baik</label>
                            <label><input type="radio" name="penerapan_sanksi" value="Baik"> Baik</label>
                            <label><input type="radio" name="penerapan_sanksi" value="Cukup"> Cukup</label>
                            <label><input type="radio" name="penerapan_sanksi" value="Kurang"> Kurang</label>
                        </div>
                    </div>

                    <label class="quiz-label"><h3>Empati (empathy)</h3>Aspek Empati (empathy) bertujuan untuk mengukur kemampuan Dosen dan stafnya untuk
                    memahami dan merespons kebutuhan, minat bakat, dan keadaan individu mahasiswa.
                    </label>
                    <div class="quiz-group">
                        <label>Kepedulian dosen dan staf dalam memahami kepentingan dan kesulitan mahasiswa</label>
                        <div class="quiz-options">
                            <label><input type="radio" name="kepedulian_dosen" value="Sangat Baik" required> Sangat Baik</label>
                            <label><input type="radio" name="kepedulian_dosen" value="Baik"> Baik</label>
                            <label><input type="radio" name="kepedulian_dosen" value="Cukup"> Cukup</label>
                            <label><input type="radio" name="kepedulian_dosen" value="Kurang"> Kurang</label>
                        </div>
                    </div>
                    <div class="quiz-group">
                        <label>Proses monitoring terhadap kemajuan mahasiswa melalui dosen pembimbing akademik</label>
                        <div class="quiz-options">
                            <label><input type="radio" name="monitoring_kemajuan" value="Sangat Baik" required> Sangat Baik</label>
                            <label><input type="radio" name="monitoring_kemajuan" value="Baik"> Baik</label>
                            <label><input type="radio" name="monitoring_kemajuan" value="Cukup"> Cukup</label>
                            <label><input type="radio" name="monitoring_kemajuan" value="Kurang"> Kurang</label>
                        </div>
                    </div>
                    <div class="quiz-group">
                        <label>Kesiadaan dosen dalam membantu mahasiswa yang mengalami kesulitan bidang akademik/mata kuliah</label>
                        <div class="quiz-options">
                            <label><input type="radio" name="bantuan_dosen" value="Sangat Baik" required> Sangat Baik</label>
                            <label><input type="radio" name="bantuan_dosen" value="Baik"> Baik</label>
                            <label><input type="radio" name="bantuan_dosen" value="Cukup"> Cukup</label>
                            <label><input type="radio" name="bantuan_dosen" value="Kurang"> Kurang</label>
                        </div>
                    </div>
                    <div class="quiz-group">
                        <label>Fakultas berusaha memahami minat dan bakat mahasiswa dan berusaha mengembangkannya</label>
                        <div class="quiz-options">
                            <label><input type="radio" name="minat_bakat" value="Sangat Baik" required> Sangat Baik</label>
                            <label><input type="radio" name="minat_bakat" value="Baik"> Baik</label>
                            <label><input type="radio" name="minat_bakat" value="Cukup"> Cukup</label>
                            <label><input type="radio" name="minat_bakat" value="Kurang"> Kurang</label>
                        </div>
                    </div>

                    <label class="quiz-label"><h3>Tangible (keberwujudan saran prasarana)</h3>Aspek Tangible (keberwujudan saran prasarana) bertujuan untuk mengatur kepuasan
                    mahasiswa terhadap kualitas dan kondisi sarana prasaran yang disediakan oleh Fakultas Teknik.
                    </label>
                    <div class="quiz-group">
                        <label>Kerapian dan kebersihan ruang kuliah</label>
                        <div class="quiz-options">
                            <label><input type="radio" name="kebersihan_ruang" value="Sangat Baik" required> Sangat Baik</label>
                            <label><input type="radio" name="kebersihan_ruang" value="Baik"> Baik</label>
                            <label><input type="radio" name="kebersihan_ruang" value="Cukup"> Cukup</label>
                            <label><input type="radio" name="kebersihan_ruang" value="Kurang"> Kurang</label>
                        </div>
                    </div>
                    <div class="quiz-group">
                        <label>Ketersediaan ruang kuliah/studio/laboratorium</label>
                        <div class="quiz-options">
                            <label><input type="radio" name="ketersediaan_ruang" value="Sangat Baik" required> Sangat Baik</label>
                            <label><input type="radio" name="ketersediaan_ruang" value="Baik"> Baik</label>
                            <label><input type="radio" name="ketersediaan_ruang" value="Cukup"> Cukup</label>
                            <label><input type="radio" name="ketersediaan_ruang" value="Kurang"> Kurang</label>
                        </div>
                    </div>
                    <div class="quiz-group">
                        <label>Ketersediaan sarana pembelajaran di ruang kuliah (lcd, papan tulis, kursi, meja, dll)</label>
                        <div class="quiz-options">
                            <label><input type="radio" name="sarana_pembelajaran" value="Sangat Baik" required> Sangat Baik</label>
                            <label><input type="radio" name="sarana_pembelajaran" value="Baik"> Baik</label>
                            <label><input type="radio" name="sarana_pembelajaran" value="Cukup"> Cukup</label>
                            <label><input type="radio" name="sarana_pembelajaran" value="Kurang"> Kurang</label>
                        </div>
                    </div>
                    <div class="quiz-group">
                        <label>Ketersediaan Buku referensi yang ada diperpustakaan/ruang baca</label>
                        <div class="quiz-options">
                            <label><input type="radio" name="buku_referensi" value="Sangat Baik" required> Sangat Baik</label>
                            <label><input type="radio" name="buku_referensi" value="Baik"> Baik</label>
                            <label><input type="radio" name="buku_referensi" value="Cukup"> Cukup</label>
                            <label><input type="radio" name="buku_referensi" value="Kurang"> Kurang</label>
                        </div>
                    </div>
                    <div class="quiz-group">
                        <label>Ketersediaan fasilitas ibadah, kamar kecil yang rapi dan bersih</label>
                        <div class="quiz-options">
                            <label><input type="radio" name="fasilitas_ibadah" value="Sangat Baik" required> Sangat Baik</label>
                            <label><input type="radio" name="fasilitas_ibadah" value="Baik"> Baik</label>
                            <label><input type="radio" name="fasilitas_ibadah" value="Cukup"> Cukup</label>
                            <label><input type="radio" name="fasilitas_ibadah" value="Kurang"> Kurang</label>
                        </div>
                    </div>
                    <div class="quiz-group">
                        <label>Ketersediaan tempat parkir yang luas</label>
                        <div class="quiz-options">
                            <label><input type="radio" name="parkir_luas" value="Sangat Baik" required> Sangat Baik</label>
                            <label><input type="radio" name="parkir_luas" value="Baik"> Baik</label>
                            <label><input type="radio" name="parkir_luas" value="Cukup"> Cukup</label>
                            <label><input type="radio" name="parkir_luas" value="Kurang"> Kurang</label>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="button" class="secondary" onclick="window.history.back()">Sebelumnya</button>
                    <a href="/kuisioner_layanan_kemahasiswaan">Lanjut</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
