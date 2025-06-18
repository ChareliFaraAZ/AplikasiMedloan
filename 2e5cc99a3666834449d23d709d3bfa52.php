<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Persetujuan Pengelolaan dan Peminjaman</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
      padding-bottom: 30px;
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
      margin-bottom: 30px;
    }

    .header select {
      padding: 10px 14px;
      border-radius: 8px;
      border: 1px solid #ccc;
      background-color: white;
      font-size: 14px;
    }

    .peminjaman-card {
      background-color: #fff;
      border-radius: 12px;
      padding: 20px;
      margin-bottom: 20px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.06);
      border-left: 5px solid #2F9992;
    }

    .peminjaman-card h2 {
      margin: 0 0 10px;
      font-size: 18px;
      color: #333;
    }

    .peminjaman-card p {
      margin: 0 0 12px;
      font-size: 14px;
      color: #666;
    }

    .actions {
      margin-top: 10px;
    }

    .setujui,
    .tolak {
      padding: 10px 20px;
      border: none;
      border-radius: 20px;
      margin-right: 10px;
      color: white;
      cursor: pointer;
      font-weight: bold;
      font-size: 14px;
      transition: 0.3s;
    }

    .setujui {
      background: linear-gradient(to right, #2bb673, #2F9992);
    }

    .tolak {
      background-color: #e74c3c;
    }

    .status .perlu {
      color: #e67e22;
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
        <li><a href="<?php echo e(url('/pengelolaan_daftar_alat_medis')); ?>">PENGELOLAAN DAFTAR ALAT MEDIS</a></li>
        <li class="active"><a href="<?php echo e(url('/persetujuan_pengelolaan')); ?>">PERSETUJUAN & PENGELOLAAN</a></li>

        
      </ul>
    </aside>

    <main class="main-content">
      <div class="header">
        <h1>Persetujuan Pengelolaan dan Peminjaman</h1>
        <select>
          <option>Filter Status: Semua</option>
          <option>Menunggu</option>
          <option>Disetujui</option>
          <option>Ditolak</option>
        </select>
      </div>

      <div class="peminjaman-card">
        <div class="info">
          <h2>UAP OKSIGEN</h2>
          <p>Kode Alat: UAP-001</p>
          <p class="status">Status: <span class="perlu">PERLU PERAWATAN</span></p>
        </div>
        <div class="actions">
          <button class="setujui">✔️ Setujui</button>
          <button class="tolak">❌ Tolak</button>
        </div>
      </div>

      <div class="peminjaman-card">
        <div class="info">
          <h2>DIGITAL SPHYGMOMANOMETER</h2>
          <p>Kode Alat: SPHYG-501</p>
          <p class="status">Status: <span class="perlu">PERLU PERAWATAN</span></p>
        </div>
        <div class="actions">
          <button class="setujui">✔️ Setujui</button>
          <button class="tolak">❌ Tolak</button>
        </div>
      </div>

      <div class="peminjaman-card">
        <div class="info">
          <h2>KURSI RODA</h2>
          <p>Kode Alat: KRSD-611</p>
          <p class="status">Status: <span class="perlu">PERLU PERAWATAN</span></p>
        </div>
        <div class="actions">
          <button class="setujui">✔️ Setujui</button>
          <button class="tolak">❌ Tolak</button>
        </div>
      </div>
    </main>
  </div>
  <script>
  // Saat tombol "Setujui" diklik
  document.querySelectorAll('.setujui').forEach(button => {
    button.addEventListener('click', function() {
      Swal.fire({
        icon: 'success',
        title: 'Disetujui!',
        text: 'Permintaan telah disetujui.',
        timer: 1500,
        showConfirmButton: false
      });
    });
  });

  // Saat tombol "Tolak" diklik
  document.querySelectorAll('.tolak').forEach(button => {
    button.addEventListener('click', function() {
      Swal.fire({
        icon: 'error',
        title: 'Ditolak!',
        text: 'Permintaan telah ditolak.',
        timer: 1500,
        showConfirmButton: false
      });
    });
  });
</script>

</body>
</html>
<?php /**PATH D:\laragon\www\aplikasi-medloan\resources\views/admin/laporan/persetujuan_pengelolaan.blade.php ENDPATH**/ ?>