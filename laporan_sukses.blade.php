<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laporan Disimpan</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Inter', sans-serif;
      background-color: white;
    }

    .container {
      padding: 40px 20px;
      text-align: center;
    }

    .header-banner {
      background-color: #2CA5A5;
      color: #f5f5dc;
      padding: 20px 30px;
      border-radius: 40px 40px 0 0;
      font-weight: 700;
      font-size: 24px;
    }

    .card {
      background-color: #1c4952;
      padding: 30px 20px;
      color: #e6f0f2;
      border-radius: 0 0 12px 12px;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 15px;
    }

    .check-icon {
      width: 80px;
      height: 80px;
    }

    .card h2 {
      font-size: 24px;
      margin: 10px 0 4px 0;
      font-weight: 600;
    }

    .card p {
      font-size: 14px;
      font-weight: 500;
      margin: 0;
    }

    .button-area {
      margin-top: 40px;
      text-align: right;
      padding-right: 40px;
    }

    .btn-back {
      background-color: #2CA5A5;
      color: white;
      padding: 10px 24px;
      border-radius: 20px;
      text-decoration: none;
      font-weight: 600;
      font-size: 14px;
    }

    .btn-back:hover {
      background-color: #21868b;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header-banner">
      <h1>LAPORAN DIVERIFIKASI</h1>
    </div>

    <div class="card">
      <img src="{{ asset('assets/Approval.png') }}" alt="Laporan Disimpan" class="check-icon">
      <div class="text-group">
        <h2>“ LAPORAN TELAH DISIMPAN ”</h2>
        <p>TERIMAKASIH SUDAH MERAWAT ALAT DENGAN BAIK ☺</p>
      </div>
    </div>

    <div class="button-area">
      <a href="{{ route('teknisi.index') }}" class="btn-back">KEMBALI</a>
    </div>
  </div>
</body>
</html>
