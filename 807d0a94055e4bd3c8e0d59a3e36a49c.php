<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Laporan Pemakaian Alat</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #ffffff;
            height: 100%;
        }
        .container {
            display: flex;
            min-height: 100vh;
        }
        /* Sidebar */
        .sidebar {
            background: #329ca2;
            color: #EFEFDA;
            width: 270px;
            min-width: 220px;
            display: flex;
            flex-direction: column;
            padding: 32px 0 0 0;
            gap: 16px;
            height: 100vh;
            position: sticky;
            top: 0;
            border-top-right-radius: 12px;
        }
        .sidebar .logo {
            text-align: left;
            padding: 0 32px 32px 32px;
            font-weight: bold;
            font-size: 1.2em;
            letter-spacing: 1px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .sidebar .logo img {
            height: 32px;
            margin-right: 8px;
        }
        .sidebar nav {
            display: flex;
            flex-direction: column;
            gap: 8px;
            padding: 0 32px;
        }
        .sidebar nav a {
            color: #EFEFDA;
            text-decoration: none;
            padding: 12px 18px;
            border-radius: 24px;
            font-size: 1em;
            font-weight: 500;
            transition: background 0.2s, color 0.2s;
            display: block;
        }
        .sidebar nav a.active, .sidebar nav a:hover {
            background: #EFEFDA;
            color: #329ca2;
            font-weight: bold;
        }
        /* Main Content */
        .main-content {
            flex: 1;
            padding: 36px 40px;
            background: #ffffff;
        }
        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }
        .topbar .user-avatar {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #329ca2;
        }
        .page-title {
            font-size: 1.8em;
            font-weight: bold;
            color: #1D434E;
            margin-bottom: 16px;
            text-align: center;
        }
        .filter-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
            flex-wrap: wrap;
            gap: 10px;
        }
        .filter-bar select {
            padding: 10px 14px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 1em;
        }
        .filter-bar button {
            background: #83d3cf;
            color: #fff;
            border: none;
            border-radius: 6px;
            padding: 10px 16px;
            font-size: 1em;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
        }
        .filter-bar button:hover {
            background: #66c1bb;
        }
        /* Card */
        .alat-card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            padding: 20px 24px;
            margin-bottom: 18px;
            position: relative;
        }
        .alat-card h3 {
            margin: 0 0 8px 0;
            font-size: 1.1em;
            font-weight: bold;
            color: #1D434E;
        }
        .alat-card p {
            margin: 4px 0;
            color: #1D434E;
            font-size: 0.95em;
        }
        .alat-card .download-icon {
            position: absolute;
            top: 16px;
            right: 16px;
            color: #1D434E;
            font-size: 1.2em;
            cursor: pointer;
            transition: color 0.2s;
        }
        .alat-card .download-icon:hover {
            color: #329ca2;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="logo">
                <img src="<?php echo e(asset('assets/logo website baru.png')); ?>" alt="MedLoan Logo" />
                MedLoan
            </div>
            <nav>
                
                <a href="#" class="active">LAPORAN PEMAKAIAN</a>
                <a href="<?php echo e(url('/pengelolaan_daftar_alat_medis')); ?>">PENGELOLAAN DAFTAR ALAT MEDIS</a>
                <a href="<?php echo e(url('/persetujuan_pengelolaan')); ?>">PERSETUJUAN PENGELOLAAN</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <div class="topbar">
                <div class="page-title">LAPORAN PEMAKAIAN ALAT</div>
                <img src="<?php echo e(asset('assets/profile.png')); ?>" alt="User Avatar" class="user-avatar"/>
            </div>

            <div class="filter-bar">
              <form method="GET" action="<?php echo e(url('/laporan-pemakaian')); ?>" class="filter-bar">
                <select name="bulan" id="bulan" onchange="this.form.submit()">
                    <option value="">-- Semua Bulan --</option>
                    <option value="06-2025" <?php echo e(request('bulan') == '06-2025' ? 'selected' : ''); ?>>Juni 2025</option>
                    <option value="05-2025" <?php echo e(request('bulan') == '05-2025' ? 'selected' : ''); ?>>Mei 2025</option>
                    <option value="04-2025" <?php echo e(request('bulan') == '04-2025' ? 'selected' : ''); ?>>April 2025</option>
                </select>
            </form>
           
            </div>

            <!-- Daftar Alat -->
            <?php $__currentLoopData = $laporan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="alat-card">
                
                <h3><?php echo e(strtoupper($item->nama_alat)); ?></h3>
                <p>Nama Peminjam: <?php echo e($item->nama_peminjam); ?></p>
                <?php if($item->durasi_pemakaian): ?>
                    <p>Durasi Pemakaian: <?php echo e($item->durasi_pemakaian); ?> hari</p>
                <?php else: ?>
                    <p>Total Hari digunakan: <?php echo e($item->total_hari); ?> hari</p>
                <?php endif; ?>
                
                <p>Terakhir Dipinjam: <?php echo e(\Carbon\Carbon::parse($item->tanggal_terakhir)->format('j F Y')); ?></p>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </main>
    </div>
</body>
</html>
<?php /**PATH D:\laragon\www\aplikasi-medloan\resources\views/admin/laporan/pemakaian.blade.php ENDPATH**/ ?>