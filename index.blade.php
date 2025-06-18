<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Catatan Perawatan Alat</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Inter', sans-serif;
      background-color: #f9f9f9;
    }
    .container { display: flex; }
    .sidebar {
      background-color: #228896;
      color: white;
      width: 260px;
      height: 100vh;
      display: flex;
      flex-direction: column;
      padding: 20px 0;
    }
    .sidebar .logo {
      text-align: center;
      margin-bottom: 20px;
    }
    .sidebar .logo img {
      width: 120px;
    }
    .sidebar ul { list-style: none; padding: 0; }
    .sidebar ul li {
      padding: 12px 20px;
      font-weight: bold;
      cursor: pointer;
    }
    .sidebar ul li.active {
      background-color: white;
      color: #228896;
      border-radius: 20px 0 0 20px;
    }
    .sidebar ul li a {
      color: inherit;
      text-decoration: none;
      display: block;
    }
    .content {
      flex-grow: 1;
      padding: 30px;
    }
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    header h1 {
      font-size: 24px;
      font-weight: 700;
      color: #1b3b43;
    }
    .user-controls {
      display: flex;
      align-items: center;
      gap: 10px;
    }
    .profile-icon {
      width: 36px;
      height: 36px;
      border-radius: 50%;
    }
    .filter {
      margin: 20px 0;
    }
    select {
      padding: 8px 16px;
      border-radius: 6px;
      border: 1px solid #ccc;
    }
    .device-list {
      display: flex;
      flex-direction: column;
      gap: 16px;
    }
    .device-card {
      background-color: white;
      box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
      border-radius: 6px;
      padding: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .device-card h2 {
      margin: 0;
      font-size: 16px;
      font-weight: 700;
      color: #1b3b43;
    }
    .device-card p {
      margin: 4px 0;
      font-size: 14px;
    }
    .status {
      color: #1b3b43;
    }
    .status span.warning {
      color: #e53935;
      font-weight: bold;
    }
    .btn {
      background-color: #2ca5a5;
      color: white;
      padding: 10px 18px;
      border: none;
      border-radius: 12px;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    .btn.clicked {
      background-color: #e57373;
    }
    .load-more {
      text-align: center;
      margin-top: 20px;
      color: #333;
    }
  </style>
</head>
<body>
  <div class="container">
    <aside class="sidebar">
      <div class="logo">
        <img src="{{ asset('ASSETS/logo website baru.png') }}" alt="Logo MedLoan">
      </div>
      <nav>
        <ul>
           <li><a href="{{ route('laporan-kerusakan.index') }}">LAPORAN KERUSAKAN ALAT</a></li>

          <li class="active"><a href="{{ route('teknisi.index') }}">CATATAN PERAWATAN ALAT</a></li>
        </ul>
      </nav>
    </aside>

    <main class="content">
      <header>
        <h1>CATATAN PERAWATAN ALAT</h1>
        <div class="user-controls">
          <button class="filter-btn">☰</button>
          <img class="profile-icon" src="{{ asset('ASSETS/profile.png') }}" alt="User" />
        </div>
      </header>

      <div class="filter">
        <select>
          <option>Semua</option>
        </select>
      </div>

      <section class="device-list">
  @forelse ($alatList as $alat)
    <div class="device-card">
      <div>
        <h2>{{ $alat->nama_alat }}</h2>
        <p class="status">
            ! STATUS :
            <span class="{{ $alat->status_perawatan == 'PERLU PERAWATAN' ? 'warning' : 'success' }}">
                {{ $alat->status_perawatan }}
            </span>
        </p>
      </div>
@if($alat->status_perawatan == 'PERLU PERAWATAN')
    <a href="{{ route('form.perawatan', ['nama_alat' => $alat->nama_alat]) }}">
        <button type="button" class="btn">MULAI PERAWATAN</button>
    </a>
@else
    <button class="btn" disabled>SELESAI</button>
@endif

    </div>
  @empty
    <p>Tidak ada alat yang perlu perawatan.</p>
  @endforelse
</section>


      <div class="load-more">
        <p>Lainnya</p>
        <span>⌄</span>
      </div>
    </main>
  </div>
</body>
</html>
