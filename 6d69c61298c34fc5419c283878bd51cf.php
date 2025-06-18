<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Catatan Perawatan Alat</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet" />

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Montserrat', sans-serif;
    }

    body {
      background-color: #f9f9f9;
      color: #13353E;
    }

    .container {
      display: flex;
    }

    .sidebar {
      width: 240px;
      background-color: #269CA3;
      padding: 20px;
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      min-height: 100vh;
    }

    .sidebar .logo {
      width: 130px;
      margin-bottom: 40px;
    }

    .sidebar nav a {
      display: block;
      color: white;
      padding: 12px 0;
      font-weight: 600;
      text-decoration: none;
      cursor: pointer;
      padding-left: 10px;
      border-radius: 25px;
      transition: background-color 0.3s, color 0.3s;
    }

    .sidebar nav a.active,
    .sidebar nav a:hover {
      background-color: white;
      color: #13353E;
    }

    main {
      flex: 1;
      padding: 30px;
    }

    .top-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .top-header h1 {
      font-size: 24px;
      font-weight: 700;
      color: #13353E;
    }

    .header-icons .icon {
      width: 28px;
      margin-left: 16px;
    }

    .filter-section {
      margin: 20px 0;
    }

    .filter-section select {
      padding: 8px 12px;
      border-radius: 6px;
      border: 1px solid #ccc;
    }

    .cards-section .card {
      background-color: white;
      border-radius: 6px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.15);
      margin-bottom: 16px;
      padding: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .card-left h3 {
      font-size: 16px;
      font-weight: 700;
      color: #13353E;
      margin-bottom: 4px;
    }

    .card-left p {
      font-size: 14px;
      margin: 2px 0;
    }

    .icon-info {
      color: #269CA3;
      font-weight: bold;
    }

    .card-right .btn {
      padding: 8px 16px;
      border: none;
      border-radius: 20px;
      color: white;
      font-weight: 600;
      cursor: pointer;
      margin-left: 10px;
      transition: background-color 0.3s;
    }

    .btn.selesai {
      background-color: #269CA3;
    }

    .btn.selesai.clicked {
      background-color: #fbc02d;
      color: #13353E;
    }

    .btn.notif {
      background-color: #269CA3;
    }

    .btn.notif.clicked {
      background-color: #4caf50;
      color: white;
    }

    .lainnya {
      text-align: center;
      margin-top: 30px;
      font-size: 14px;
      color: #13353E;
    }

    .arrow {
      font-size: 20px;
      display: block;
    }
  </style>
</head>

<body>
  <div class="container">
    <aside class="sidebar">
      <img src="<?php echo e(asset('assets/logo website baru.png')); ?>" alt="Logo MedLoan" class="logo" />
      <nav>
        <a href="#">Laporan Kerusakan Alat</a>
        <a class="active" href="<?php echo e(route('teknisi.pencatatan_perawatan_alat')); ?>">Catatan Perawatan Alat</a>
      </nav>
    </aside>

    <main>
      <header class="top-header">
        <h1>CATATAN PERAWATAN ALAT</h1>
        <div class="header-icons">
          <img src="<?php echo e(asset('assets/filter.png')); ?>" class="icon" alt="Filter" />
          <img src="<?php echo e(asset('assets/profile.png')); ?>" class="icon" alt="User" />
        </div>
      </header>

      <section class="filter-section">
        <select>
          <option>Semua</option>
        </select>
      </section>

      <section class="cards-section">
        <div class="card">
          <div class="card-left">
            <h3>UAP OKSIGEN</h3>
            <p>Kode Alat : UAP-001</p>
            <p><span class="icon-info">!</span> Status : <strong>SELESAI</strong></p>
          </div>
          <div class="card-right">
            <button class="btn selesai">SELESAI</button>
            <button class="btn notif">TMPLKN NOTIFIKASI</button>
          </div>
        </div>

        <div class="card">
          <div class="card-left">
            <h3>DIGITAL SPHYGMOMANOMETER</h3>
            <p>Kode Alat : SPHYG-501</p>
            <p><span class="icon-info">!</span> Status : <strong>SELESAI</strong></p>
          </div>
          <div class="card-right">
            <button class="btn selesai">SELESAI</button>
            <button class="btn notif">TMPLKN NOTIFIKASI</button>
          </div>
        </div>

        <div class="card">
          <div class="card-left">
            <h3>KURSI RODA</h3>
            <p>Kode Alat : KRSD-611</p>
            <p><span class="icon-info">!</span> Status : <strong>SELESAI</strong></p>
          </div>
          <div class="card-right">
            <button class="btn selesai">SELESAI</button>
            <button class="btn notif">TMPLKN NOTIFIKASI</button>
          </div>
        </div>
      </section>

      <div class="lainnya">
        Lainnya<br /><span class="arrow">&#9660;</span>
      </div>
    </main>
  </div>

  <script>
    const menuLinks = document.querySelectorAll('.sidebar nav a');
    menuLinks.forEach(link => {
      link.addEventListener('click', (e) => {
        e.preventDefault();
        menuLinks.forEach(l => l.classList.remove('active'));
        link.classList.add('active');
      });
    });

    const selesaiButtons = document.querySelectorAll('.btn.selesai');
    selesaiButtons.forEach(btn => {
      btn.addEventListener('click', () => {
        btn.classList.toggle('clicked');
      });
    });

    const notifButtons = document.querySelectorAll('.btn.notif');
    notifButtons.forEach(btn => {
      btn.addEventListener('click', () => {
        btn.classList.toggle('clicked');
      });
    });
  </script>
</body>
</html>
<?php /**PATH D:\laragon\www\aplikasi-medloan\resources\views/teknisi/pencatatan_perawatan_alat.blade.php ENDPATH**/ ?>