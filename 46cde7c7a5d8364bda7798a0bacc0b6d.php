<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FORM PEMINJAMAN - MedLoan</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <style>
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
      background: #F5F5DC;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    body {
      min-height: 100vh;
      width: 100vw;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .container-finalform {
      width: 900px;
      max-width: 98vw;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-start;
      min-height: 80vh;
    }
    .header-finalform {
      width: 90%;
      max-width: 800px;
      margin: 48px auto 0 auto;
      background: #2c98a0;
      color: #fff;
      border-radius: 40px;
      padding: 20px 0;
      text-align: center;
      font-size: 2em;
      font-weight: bold;
      letter-spacing: 1px;
      box-sizing: border-box;
    }
    .box-finalform {
      margin-top: 32px;
      background: #20444C;
      border-radius: 20px;
      width: 90%;
      max-width: 700px;
      min-height: 200px;
      display: flex;
      align-items: center;
      gap: 28px;
      padding: 36px;
      color: #E2F0F3;
      flex-wrap: wrap;
      justify-content: center;
    }
    .icon-finalform {
      font-size: 4.6em;
      color: #F5F5DC;
      background: #20444C;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-right: 16px;
    }
    .content-finalform {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: flex-start;
      flex: 1;
      min-width: 220px;
    }
    .content-finalform .big-message {
      font-size: 2em;
      font-weight: bold;
      color: #E2F0F3;
      margin-bottom: 18px;
      line-height: 1.2;
      letter-spacing: 1px;
    }
    .content-finalform .desc {
      font-size: 1.08em;
      color: #E2F0F3;
      margin-bottom: 6px;
      font-weight: 400;
    }
    .content-finalform .note {
      font-size: 1.08em;
      color: #F5F5DC;
      font-weight: bold;
      letter-spacing: 0.8px;
    }
    @media (max-width: 700px) {
      .container-finalform {
        width: 100vw;
      }
      .header-finalform, .box-finalform {
        width: 99vw;
        max-width: 99vw;
        padding-left: 0;
        padding-right: 0;
      }
      .box-finalform {
        flex-direction: column;
        align-items: center;
        gap: 16px;
        padding: 24px 8px 18px 8px;
      }
      .icon-finalform {
        margin-right: 0;
        margin-bottom: 12px;
      }
      .content-finalform {
        align-items: center;
        text-align: center;
      }
    }
  </style>
</head>
<body>
  <div class="container-finalform">
    <div class="header-finalform">
      FORM PEMINJAMAN
    </div>
    <div class="box-finalform">
      <div class="icon-finalform">
        <i class="fa-solid fa-circle-check"></i>
      </div>
      <div class="content-finalform">
        <div class="big-message">" JAWABAN ANDA TELAH DIREKAM "</div>
        <div class="desc">
          MedLoan - Peminjaman Alat Tenaga Medis
        </div>
        <div class="note">
          - TAAT UNTUK TEPAT WAKTU SAAT MENGEMBALIKAN -
        </div>
      </div>
    </div>
  </div>
</body>
</html>
<?php /**PATH D:\laragon\www\aplikasi-medloan\resources\views/sukses_peminjaman.blade.php ENDPATH**/ ?>