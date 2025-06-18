<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kelola Daftar Alat Medis</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #f9f9f9;
      color: #333;
    }

    .container {
      display: flex;
      height: 100vh;
    }

    .sidebar {
      width: 230px;
      background-color: #2F9992;
      color: white;
      display: flex;
      flex-direction: column;
      border-top-right-radius: 40px;
      border-bottom-right-radius: 40px;
      padding-top: 30px;
      box-shadow: 2px 0 10px rgba(0, 0, 0, 0.05);
    }

    .logo {
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 18px;
      font-weight: bold;
      text-align: center;
      margin-bottom: 30px;
      gap: 10px;
    }

    .logo img {
      height: 100px;
    }

    .nav {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .nav li {
      margin: 6px 0;
    }

    .nav li a {
      color: white;
      text-decoration: none;
      padding: 12px 24px;
      display: block;
      transition: 0.3s;
    }

    .nav li.active a,
    .nav li a:hover {
      background-color: white;
      color: #2F9992;
      border-top-left-radius: 30px;
      border-bottom-left-radius: 30px;
    }

    .main-content {
      flex: 1;
      padding: 40px;
      background-color: #ffffff;
      overflow-y: auto;
    }

    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }

    .controls {
      display: flex;
      gap: 10px;
      align-items: center;
    }

    .btn {
      padding: 8px 12px;
      border: none;
      background-color: #2F9992;
      color: white;
      border-radius: 8px;
      cursor: pointer;
      font-weight: bold;
    }

    .search {
      padding: 8px;
      border-radius: 6px;
      border: 1px solid #ccc;
      width: 200px;
    }

    .alat-table {
      width: 100%;
      border-collapse: collapse;
      background: #fff;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }

    .alat-table th, .alat-table td {
      text-align: left;
      padding: 12px 16px;
      border-bottom: 1px solid #eee;
    }

    .alat-table th {
      background-color: #f0f0f0;
    }

    .alat-table td button {
      background-color: transparent;
      border: none;
      font-size: 16px;
      cursor: pointer;
    }

    .alat-table td button:disabled {
      opacity: 0.3;
      cursor: not-allowed;
    }

    .status.tersedia {
      color: #2ca67a;
      font-weight: bold;
    }

    .status.dipinjam {
      color: #f39c12;
      font-weight: bold;
    }

    .status.rusak {
      color: #e74c3c;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="container">
    <aside class="sidebar">
      <div class="logo">
        <img src="<?php echo e(asset('assets/logo website baru.png')); ?>" alt="MedLoan Logo" />
      </div>
      <ul class="nav">
      
        <li><a href="<?php echo e(url('/laporan-pemakaian')); ?>">LAPORAN PEMAKAIAN ALAT</a></li>
        <li class="active"><a href="<?php echo e(url('/pengelolaan_daftar_alat_medis')); ?>">PENGELOLAAN DAFTAR ALAT MEDIS</a></li>
        <li><a href="<?php echo e(url('/persetujuan_pengelolaan')); ?>">PERSETUJUAN DAN PENGELOLAAN</a></li>

        
      </ul>
    </aside>

    <main class="main-content">
      <div class="header">
        <h1>Kelola Daftar Alat Medis</h1>
        <div class="controls">
          <button class="btn">Tambah Alat Baru</button>
          <button class="btn">+ Cari</button>
          <input type="text" placeholder="Cari..." class="search">
          <button class="btn">Refresh</button>
        </div>
      </div>

      <table class="alat-table">
        <thead>
          <tr>
            <th>Nama Alat</th>
            <th>Jenis</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Tensi Digital</td>
            <td>Diagnostik</td>
            <td class="status tersedia">Tersedia</td>
            <td>
              <button title="Edit">✏️</button>
              <button title="Hapus">🗑️</button>
            </td>
          </tr>
          <tr>
            <td>Infus Stand</td>
            <td>Perawatan</td>
            <td class="status dipinjam">Dipinjam</td>
            <td>
              <button title="Edit">✏️</button>
              <button disabled title="Tidak bisa dihapus">🚫</button>
            </td>
          </tr>
          <tr>
            <td>Oximeter</td>
            <td>Diagnostik</td>
            <td class="status rusak">Rusak</td>
            <td>
              <button title="Edit">✏️</button>
              <button title="Hapus">🗑️</button>
            </td>
          </tr>
        </tbody>
      </table>
    </main>
  </div>
</body>
</html>
<?php /**PATH D:\laragon\www\aplikasi-medloan\resources\views/admin/laporan/pengelolaan_daftar_alat_medis.blade.php ENDPATH**/ ?>