<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Hasil Kuisioner</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
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
        .header .input-group {
            width: 300px;
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
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #007bff;
            color: #fff;
        }
        th, td {
            text-align: left;
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
                <h1>Hasil Kuisioner Mahasiswa</h1>
                <p>Isi kuisioner bagi mahasiswa aktif FT ULM untuk peningkatan kualitas dan evaluasi layanan FT ULM</p>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari Layanan..." aria-label="Recipient's username" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Cari</button>
                </div>
                <img src="https://via.placeholder.com/40" alt="User Profile" class="rounded-circle">
            </div>
        </div>
        <div class="container">
            <h2>Hasil Kuisioner Biodata</h2>
            <p>Berikut adalah hasil kuisioner biodata yang telah diisi oleh mahasiswa.</p>
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Lengkap</th>
                        <th>NIM</th>
                        <th>Program Studi</th>
                        <th>Semester</th>
                        <th>No. Handphone</th>
                        <th>Tahun Akademik</th>
                        <th>Domisili</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($biodata as $i => $u){ ?>
                    <tr>
                        <td><?= $i + 1; ?></td>
                        <td><?= htmlspecialchars($u['namaLengkap']); ?></td>
                        <td><?= htmlspecialchars($u['NIM']); ?></td>
                        <td><?= htmlspecialchars($u['programStudi']); ?></td>
                        <td><?= htmlspecialchars($u['semester']); ?></td>
                        <td><?= htmlspecialchars($u['noHandphone']); ?></td>
                        <td><?= htmlspecialchars($u['tahunAkademik']); ?></td>
                        <td><?= htmlspecialchars($u['domisili']); ?></td>
                        <td><a href="<?= base_url('admin/deleteBiodata/'.$u['id']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Delete</a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>

            <h2>Hasil Kuisioner Visi Misi</h2>
            <p>Berikut adalah hasil kuisioner visi dan misi yang telah diisi oleh mahasiswa.</p>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Pernah Membaca</th>
                        <th>Sumber Informasi</th>
                        <th>Pernah Mendapat Sosialisasi</th>
                        <th>Tingkat Pemahaman</th>
                        <th>Aspek Terakomodasi</th>
                        <th>Cerminan Visi Misi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($visi_misi as $j => $v){ ?>
                    <tr>
                        <td><?= $j + 1; ?></td>
                        <td><?= htmlspecialchars($v['sudah_baca_visi_misi']); ?></td>
                        <td><?= htmlspecialchars($v['sumber_info_visi_misi']); ?></td>
                        <td><?= htmlspecialchars($v['sosialisasi_visi_misi']); ?></td>
                        <td><?= htmlspecialchars($v['pemahaman_visi_misi']); ?></td>
                        <td><?= htmlspecialchars($v['akomodasi_kegiatan_akademik']); ?></td
                        <td><?= htmlspecialchars($v['tercermin_visi_misi']); ?></td>
                        <td><a href="<?= base_url('admin/deleteVisiMisi/'.$v['id']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Delete</a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
