<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Laporan Notifikasi</title>
  <style>
    /* Reset dan Font */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      background-color: #ffffff;
      color: #ffffff;
    }

    .container {
      text-align: center;
      padding: 20px;
    }

    /* Header */
    .header {
      background-color: #2ca3aa;
      padding: 20px 0;
      border-radius: 40px;
      margin: 0 auto;
      max-width: 900px;
    }

    .header h1 {
      font-size: 28px;
      font-weight: bold;
    }

    /* Card */
    .card {
      background-color: #1e4a54;
      max-width: 900px;
      margin: 20px auto;
      border-radius: 20px;
      padding: 30px;
    }

    .card-content {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 30px;
      flex-wrap: wrap;
    }

    .icon img {
      width: 100px;
    }

    .text {
      max-width: 600px;
    }

    .text h2 {
      font-size: 30px;
      font-weight: bold;
      color: #b6f2f1;
    }

    .text .bold {
      font-size: 16px;
      font-weight: bold;
      color: #f0f0d8;
      margin-top: 10px;
    }

    .text .sub {
      font-size: 16px;
      margin-top: 10px;
      color: #e9ebdd;
    }

    /* Button Group */
    .button-group {
      margin-top: 30px;
      display: flex;
      justify-content: center;
      gap: 30px;
      flex-wrap: wrap;
    }

    .btn {
      background-color: #2ca3aa;
      padding: 12px 25px;
      border-radius: 10px;
      color: white;
      text-decoration: none;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #21868b;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <h1>LAPORAN NOTIFIKASI</h1>
    </div>

    <div class="card">
      <div class="card-content">
        <div class="icon">
          <img src="{{ asset('img/aprovv.png') }}" alt="Checklist Icon" />
        </div>
        <div class="text">
          <h2>“ NOTIFIKASI DITAMPILKAN ”</h2>
          <p class="bold">TERIMAKASIH SUTRISNO, TELAH MERAWAT UAP OKSIGEN DENGAN BAIK <span>😊</span></p>
          <p class="sub">Notifikasi ini akan ditampilkan di dashboard pengguna</p>
        </div>
      </div>
    </div>

    <div class="button-group">
      <a href="{{ route('form_peminjaman') }}" class="btn">ISI LAPORAN BARU</a>
      <a href="{{ route('home') }}" class="btn">KEMBALI KE HOME</a>
    </div>
  </div>
</body>
</html>
