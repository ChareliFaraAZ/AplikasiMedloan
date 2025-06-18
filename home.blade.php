<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>MedLoan - Home</title>
  <style>
 
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #EFEFDA;
    }

    .header-bar {
      background-color: #EFEFDA;
      color: #821D30;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 16px 32px;
    }
    .header-left {
      display: flex;
      align-items: center;
      gap: 12px;
    }
    .header-logo {
      height: 48px;
      width: 48px;
      object-fit: contain;
      border-radius: 8px;
      background: #fff;
      padding: 4px;
    }
    .header-title {
      font-size: 1.6em;
      font-weight: bold;
    }
    .header-right {
      display: flex;
      flex-direction: column;
      align-items: flex-end;
      gap: 8px;
    }
    .btn-masuk {
      background: #821D30;
      color: #EFEFDA;
      border: none;
      border-radius: 12px;
      padding: 8px 24px;
      font-size: 1em;
      font-weight: 600;
      cursor: pointer;
      transition: background 0.2s;
    }
    .btn-masuk:hover {
      background: #ffdde2;
    }

    .banner {
      width: 100%;
      overflow: hidden;
      height: 340px;
      background-color: #efefda;
      position: relative;
      margin-bottom: 32px;
      display: flex;
      align-items: center;
    }
    .banner-track {
      display: flex;
      gap: 36px;
      position: absolute;
      animation: scrollRight 28s linear infinite;
    }
    .banner img {
      height: 320px;
      width: auto;
      flex-shrink: 0;
      border-radius: 12px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.08);
      background: #fff;
    }
    @keyframes scrollRight {
      0% { transform: translateX(-100%); }
      100% { transform: translateX(100%); }
    }

    .layanan-kami-row {
      display: flex;
      align-items: flex-start;
      background-color: #EFEFDA;
      padding: 18px 32px;
      border-radius: 12px;
      margin: 32px auto 0 auto;
      max-width: 900px;
      gap: 18px;
      box-sizing: border-box;
    }

    .layanan-kami-title {
      font-size: 1.1em;
      font-weight: 600;
      color: #821d30;
      min-width: 130px;
      margin-top: 7px;
    }

    .layanan-kami-buttons {
      display: flex;
      flex-direction: column;
      gap: 12px;
    }

    .layanan-btn-row {
      display: flex;
      flex-direction: row;
      gap: 18px;
    }

    .layanan-btn {
      background: linear-gradient(90deg, #821D30 60%, #1D434E 100%);
      color: #fff;
      border: none;
      border-radius: 6px;
      width: 160px; 
      height: 44px;  
      box-sizing: border-box;
      padding: 0 16px;
      font-size: 1em;
      font-weight: 600;
      cursor: pointer;
      box-shadow: 0 2px 8px rgba(0,0,0,0.06);
      transition: background 0.2s, color 0.2s, transform 0.15s;
      outline: none;
      letter-spacing: 0.5px;
      text-align: center;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .layanan-btn:hover, .layanan-btn:focus {
      background: linear-gradient(90deg, #1D434E 0%, #821D30 100%);
      color: #EFEFDA;
      transform: translateY(-2px) scale(1.04);
      box-shadow: 0 4px 16px rgba(29,67,78,0.18);
    }

    @media (max-width: 700px) {
      .layanan-kami-row {
        flex-direction: column;
        align-items: flex-start;
        padding: 12px 8px;
        max-width: 100%;
        gap: 10px;
      }
      .layanan-kami-buttons {
        width: 100%;
      }
      .layanan-btn-row {
        flex-direction: column;
        gap: 10px;
        width: 100%;
      }
      .layanan-btn {
        width: 100%;
        min-width: unset;
      }
    }
  </style>
</head>
<body>

  <!-- Header -->
  <div class="header-bar">
    <div class="header-left">
      <img src="{{ asset('assets/logo-website.png') }}" alt="Logo" class="header-logo">
      <div class="header-title">MedLoan</div>
    </div>
    <div class="header-right">
      <a href="{{ route('login') }}">
      </a>
    </div>
  </div>

  <!-- Banner -->
  <div class="banner">
    <div class="banner-track">
      <img src="{{ asset('assets/Banner (1).png') }}" alt="Banner 1">
      <img src="{{ asset('assets/banner 2.png') }}" alt="Banner 2">
      <img src="{{ asset('assets/banner 3.png') }}" alt="Banner 3">
    </div>
  </div>

  <!-- Layanan Kami -->
  <div class="layanan-kami-row">
    <div class="layanan-kami-title">Layanan Kami</div>
    <div class="layanan-kami-buttons">
      <div class="layanan-btn-row">
    <a href="{{ route('peminjaman') }}" class="layanan-btn">Peminjaman</a>
</div>
    </div>
  </div>

</body>
</html>
