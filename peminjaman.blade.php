<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>MedLoan - Peminjaman</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <style>
     body, html {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #F7F6E6;
      height: 100%;
    }
    .container {
      display: flex;
      min-height: 100vh;
    }
    /* Sidebar */
    .sidebar {
      background: #2c98a0;
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
      vertical-align: middle;
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
      color:#2c98a0;
      font-weight: bold;
    }
    /* Main Content */
    .main-content {
      flex: 1;
      padding: 36px 40px;
      display: flex;
      flex-direction: column;
      background: #F7F6E6;
      min-height: 100vh;
    }
    .topbar {
      display: flex;
      justify-content: flex-end;
      align-items: center;
      margin-bottom: 24px;
      gap: 18px;
    }
    .topbar .icon-menu {
      font-size: 1.5em;
      color: #2c98a0;
      cursor: pointer;
      background: #EFEFDA;
      border-radius: 8px;
      padding: 6px 10px;
      border: none;
      outline: none;
    }
    .topbar .user-avatar {
      width: 38px;
      height: 38px;
      border-radius: 50%;
      object-fit: cover;
      border: 2px solid #2c98a0;
      background: #fff;
    }
    /* Grid alat kesehatan */
    .alat-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 32px 28px;
      width: 100%;
      margin-top: 10px;
    }
    .alat-card {
      background: #fff;
      border-radius: 18px;
      box-shadow: 0 4px 18px rgba(130,29,48,0.10);
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 28px 20px 20px 20px;
      gap: 18px;
      transition: box-shadow 0.2s, transform 0.2s;
    }
    .alat-card:hover {
      box-shadow: 0 8px 32px rgba(130,29,48,0.18);
      transform: translateY(-3px) scale(1.02);
    }
    .alat-card img {
      width: 100%;
      max-width: 120px;
      height: 90px;
      object-fit: contain;
      margin-bottom: 6px;
      border-radius: 10px;
      background: #F7F6E6;
    }
    .alat-card .nama-alat {
      font-size: 1.08em;
      font-weight: 600;
      color: #1D434E;
      text-align: center;
      min-height: 40px;
    }
    .alat-card .btn-pinjam {
      background: #2c98a0;
      color: #EFEFDA;
      border: none;
      border-radius: 18px;
      padding: 10px 34px;
      font-size: 1em;
      font-weight: 600;
      cursor: pointer;
      transition: background 0.2s, transform 0.2s;
      margin-top: 6px;
    }
    .alat-card .btn-pinjam:hover {
      background: #1D434E;
      transform: scale(1.05);
    }
    @media (max-width: 900px) {
      .container {
        flex-direction: column;
      }
      .sidebar {
        width: 100%;
        min-width: unset;
        height: auto;
        flex-direction: row;
        padding: 0;
        justify-content: flex-start;
        align-items: flex-start;
      }
      .sidebar nav {
        flex-direction: row;
        gap: 0;
        padding: 0 12px;
      }
      .sidebar .logo {
        padding: 16px;
      }
      .main-content {
        padding: 20px 8px;
      }
      .alat-grid {
        gap: 18px 8px;
      }
    }
    @media (max-width: 600px) {
      .main-content {
        padding: 8px 2px;
      }
      .alat-card {
        padding: 16px 6px 14px 6px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- Sidebar -->
    <aside class="sidebar">
      <div class="logo">
        <img src="{{ asset('assets/logo website baru.png') }}" alt="MedLoan Logo" />
        MedLoan
      </div>
      <nav>
        <a href="#" class="active">PEMINJAMAN</a>
        <li><a href="{{ route('form.lapor.kerusakan') }}">LAPORAN KERUSAKAN</a></li>


        
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
      <div class="topbar">
        
         
        </button>
        <img src="{{ asset('assets/profile.png') }}" alt="User Avatar" class="user-avatar"/>
      </div>

      <form method="GET" action="{{ url()->current() }}" style="margin-bottom: 20px;">
  <input type="text" name="search" placeholder="Cari nama alat..." value="{{ request('search') }}"
         style="padding: 10px 14px; border-radius: 8px; border: 1px solid #ccc; width: 250px; margin-right: 8px;">
  <button type="submit"
          style="padding: 10px 18px; background-color: #2c98a0; color: white; border: none; border-radius: 8px; font-weight: bold;">
    Cari
  </button>
</form>


      <div class="alat-grid">
        @foreach ($alat as $item)
        <div class="alat-card">
          <img src="{{ asset('assets/' . $item->gambar) }}" alt="{{ $item->nama }}">
          <div class="nama-alat">{{ strtoupper($item->nama) }}</div>
          <button class="btn-pinjam" onclick="window.location.href='{{ url('form_peminjaman?alat_id=' . $item->id) }}'">PINJAM</button>

        </div>
        @endforeach

        @if ($alat->isEmpty())
  <div style="grid-column: 1 / -1; text-align: center; color: #555; font-style: italic; font-size: 1.1em;">
    Tidak ada alat ditemukan{{ request('search') ? ' untuk pencarian "' . request('search') . '"' : '' }}.
  </div>
@endif


      </div>
    </main>
  </div>
</body>
</html>
