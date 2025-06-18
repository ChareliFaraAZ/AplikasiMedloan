<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Form Peminjaman</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <style>
      body, html {
      margin: 0;
      padding: 0;
      background: #000;
      height: 100vh;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .main-bg {
      min-height: 100vh;
      background: #F7F6E6;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-start;
      padding: 0;
    }
    .header-bar {
      width: 80vw;
      max-width: 1100px;
      margin: 48px auto 0 auto;
      background: #2c98a0;
      color: #fff;
      border-radius: 40px;
      padding: 22px 0 18px 0;
      text-align: center;
      font-size: 2em;
      font-weight: bold;
      letter-spacing: 1px;
    }
    .form-card {
      margin: 36px auto 0 auto;
      background: #FDF7F7;
      border-radius: 36px;
      box-shadow: 0 8px 32px rgba(130,29,48,0.09);
      padding: 50px 60px 40px 60px;
      display: flex;
      flex-direction: row;
      gap: 44px;
      max-width: 900px;
      align-items: center;
    }
    .alat-info {
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      gap: 18px;
    }
    .alat-info img {
      width: 220px;
      height: 140px;
      object-fit: cover;
      border-radius: 12px;
      margin-bottom: 10px;
      background: #eee;
      box-shadow: 0 2px 8px rgba(130,29,48,0.08);
    }
    .alat-info .nama-alat {
      font-size: 1.1em;
      font-weight: bold;
      color: #1D434E;
      margin-bottom: 2px;
      letter-spacing: 0.5px;
      text-transform: uppercase;
    }
    .alat-info .status, .alat-info .stok {
      font-size: 1em;
      color: #1D434E;
      margin-bottom: 2px;
      font-weight: 500;
    }
    .form-fields {
      flex: 2;
      display: flex;
      flex-direction: column;
      gap: 26px;
    }
    .input-group {
      display: flex;
      align-items: center;
      background: #1D434E;
      border-radius: 22px;
      padding: 0 22px;
      height: 54px;
      gap: 14px;
      color: #EFEFDA;
    }
    .input-group i {
      font-size: 1.2em;
      min-width: 24px;
      color: #EFEFDA;
    }
    .input-group input {
      border: none;
      background: transparent;
      outline: none;
      color: #EFEFDA;
      font-size: 1em;
      flex: 1;
      padding: 12px 0;
      font-family: inherit;
      letter-spacing: 0.5px;
    }
    .input-group input::placeholder {
      color: #EFEFDA;
      opacity: 0.85;
    }
    .btn-pinjam {
      background: #2c98a0;
      color: #fff;
      border: none;
      border-radius: 14px;
      padding: 10px 38px;
      font-size: 1.1em;
      font-weight: 600;
      cursor: pointer;
      transition: background 0.2s, transform 0.2s;
      margin-top: 20px;
      align-self: flex-end;
    }
    .btn-pinjam:hover {
      background: #1D434E;
      transform: scale(1.04);
    }
    @media (max-width: 900px) {
      .header-bar {
        width: 97vw;
        font-size: 1.3em;
        padding: 16px 0 14px 0;
      }
      .form-card {
        flex-direction: column;
        align-items: stretch;
        padding: 28px 10px 20px 10px;
        gap: 26px;
        width: 97vw;
        max-width: 97vw;
      }
      .alat-info img {
        width: 100%;
        max-width: 240px;
        height: 120px;
      }
    }
  </style>
</head>
<body>
  <div class="main-bg">
    <div class="header-bar">
      FORM PEMINJAMAN
    </div>
    <form class="form-card" autocomplete="off" method="POST" action="{{ url('/prosespeminjaman') }}">
      @csrf
      <input type="hidden" name="alat_id" value="{{ $alat->id }}">
      
      <!-- Kiri: Info alat -->
      <div class="alat-info">
        <img src="{{ asset('assets/' . $alat->gambar) }}" alt="{{ $alat->nama }}">
        <div class="nama-alat">{{ strtoupper($alat->nama) }}</div>
        <div class="status">STATUS : {{ $alat->status }}</div>
        <div class="stok">STOK : {{ $alat->stok }}</div>
      </div>

      <!-- Kanan: Form -->
       <div class="form-fields">
    <div class="input-group">
        <i class="fa-solid fa-user"></i>
        <input type="text" name="nama_peminjam" placeholder="NAME" required>

    </div>

    <div style="display: flex; flex-direction: column; gap: 8px;">
        <label style="font-weight: 600; color: #1D434E; font-size: 1em; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">DATE PEMINJAMAN</label>
        <div class="input-group">
            <i class="fa-solid fa-calendar-days"></i>
            <input type="date" name="tanggal_pinjam" required>
        </div>
    </div>

    <div style="display: flex; flex-direction: column; gap: 8px;">
        <label style="font-weight: 600; color: #1D434E; font-size: 1em; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">DATE PENGEMBALIAN</label>
        <div class="input-group">
            <i class="fa-solid fa-calendar-days"></i>
            <input type="date" name="tanggal_kembali" required>
        </div>
    </div>

    <div style="display: flex; flex-direction: column; gap: 8px;">
  <label style="font-weight: 600; color: #1D434E; font-size: 1em; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">JUMLAH</label>
  <div class="input-group">
    <i class="fa-solid fa-box"></i>
    <input type="number" name="jumlah" min="1" max="{{ $alat->stok }}" required placeholder="JUMLAH">
  </div>
</div>

    <button type="submit" class="btn-pinjam">PINJAM</button>
</div>

    </form>
  </div>
</body>
</html>
