{{-- resources/views/laporan_kerusakan.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Laporan Kerusakan Alat</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Arial', sans-serif;
    }

    body {
      display: flex;
      height: 100vh;
      background-color: #f9f9f9;
    }

    .wrapper {
      display: flex;
      width: 100%;
    }

    .sidebar {
      background-color: #2ca3aa;
      width: 260px;
      color: white;
      padding: 20px;
      display: flex;
      flex-direction: column;
    }

    .logo {
      width: 130px;
      margin-bottom: 40px;
    }

    .sidebar ul {
      list-style: none;
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .sidebar li {
      padding: 10px 15px;
      border-radius: 20px;
      cursor: pointer;
      font-weight: bold;
      transition: background-color 0.3s, color 0.3s;
    }

    .sidebar li.active {
      background-color: white;
      color: #2ca3aa;
    }

    .content {
      flex: 1;
      padding: 30px 40px;
      position: relative;
    }

    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .header h1 {
      font-size: 24px;
      color: #173940;
    }

    .header-icons img {
      width: 32px;
      margin-left: 10px;
    }

    .filter {
      margin: 20px 0;
    }

    .filter select {
      padding: 10px;
      border-radius: 6px;
      border: 1px solid #ccc;
      font-size: 16px;
    }

    .report-list {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .report-card {
      background-color: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 1px 2px 5px rgba(0,0,0,0.1);
      position: relative;
    }

    .report-card h2 {
      font-size: 18px;
      font-weight: bold;
      color: #173940;
      margin-bottom: 10px;
    }

    .report-card p {
      font-size: 14px;
      color: #333;
    }

    .detail-btn {
      position: absolute;
      right: 20px;
      top: 50%;
      transform: translateY(-50%);
      background-color: #2ca3aa;
      color: white;
      padding: 10px 20px;
      border-radius: 15px;
      text-decoration: none;
      font-weight: bold;
      font-size: 12px;
      transition: background-color 0.3s;
    }

    .detail-btn.clicked {
      background-color: #4caf50; /* hijau */
      color: white;
    }

    .lainnya {
      margin-top: 40px;
      text-align: center;
      color: #2c3e50;
      font-size: 14px;
    }

    .lainnya .arrow {
      font-size: 18px;
      margin-top: 5px;
    }
  </style>
</head>
<body>
  <div class="wrapper">
    <aside class="sidebar">
      <img src="{{ asset('assets/logo website baru.png') }}" alt="Logo MedLoan" class="logo" />
      <nav>
        <ul>
          <li class="active">LAPORAN KERUSAKAN ALAT</li>
          <li><a href="{{ route('teknisi.index') }}" style="color: white; text-decoration: none;">CATATAN PERAWATAN ALAT</a></li>
        </ul>
      </nav>
    </aside>

    <main class="content">
      <header class="header">
        <h1>LAPORAN KERUSAKAN ALAT</h1>
        <div class="header-icons">
          <img src="{{ asset('assets/filter.png') }}" alt="Menu Icon" />
          <img src="{{ asset('assets/profile.png') }}" alt="User Icon" />
        </div>
      </header>

      <div class="filter">
        <select>
          <option>Feb 2025</option>
        </select>
      </div>

      <section class="report-list">
  @foreach($laporans as $laporan)
    <div class="report-card">
      <h2>{{ strtoupper($laporan->alat_medis) }}</h2>
      <p>NAMA PELAPOR : {{ strtoupper($laporan->nama_pelapor) }}</p>
      <p>JABATAN : {{ strtoupper($laporan->jabatan) }}</p>
      <div>
    <strong>STATUS :</strong>
    @if(strtoupper($laporan->status) === 'TELAH DIPERBAIKI')
        <span style="color: green;">{{ strtoupper($laporan->status) }}</span>
    @else
        <span style="color: red;">BELUM DIPERBAIKI</span>
    @endif
  </div>
      <a href="{{ route('laporan-kerusakan.show', $laporan->id) }}" class="detail-btn">TINJAU DETAIL LAPORAN</a>
        
    </div>
  @endforeach
</section>


  <script>
    const sidebarItems = document.querySelectorAll('.sidebar ul li');
    sidebarItems.forEach(item => {
      item.addEventListener('click', () => {
        sidebarItems.forEach(i => i.classList.remove('active'));
        item.classList.add('active');
      });
    });
  </script>
</body>
</html>
