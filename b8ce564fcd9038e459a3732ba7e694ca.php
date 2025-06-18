<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Form Laporan Kerusakan</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Arial', sans-serif;
    }

    body {
      background-color: #fdf5f5;
      padding: 20px;
    }

    .container {
      max-width: 960px;
      margin: 0 auto;
    }

    .header {
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #2ca3aa;
      padding: 20px 40px;
      border-radius: 50px;
      color: white;
      font-size: 22px;
      font-weight: bold;
      position: relative;
    }

    .report-box {
      display: flex;
      gap: 40px;
      background-color: #fff0f0;
      border-radius: 30px;
      padding: 40px;
      margin-top: 40px;
      align-items: flex-start;
    }

    .detail-section {
      flex: 1;
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .info-box {
      background-color: #14464b;
      color: white;
      padding: 15px 20px;
      border-radius: 20px;
      display: flex;
      align-items: flex-start;
      gap: 10px;
      font-size: 14px;
    }

    .info-box img {
      width: 24px;
      height: 24px;
      margin-top: 2px;
    }

    input[type="text"],
    input[type="datetime-local"],
    textarea {
      background-color: #084d52;
      color: white;
      border: none;
      border-radius: 10px;
      padding: 10px;
      width: 100%;
      font-size: 16px;
    }

    input::placeholder,
    textarea::placeholder {
      color: #cfd8dc;
    }

    input:focus,
    textarea:focus {
      outline: 2px solid #1ebac6;
    }

    .buttons {
      display: flex;
      justify-content: center;
      gap: 20px;
      margin-top: 20px;
    }

    .btn-verifikasi {
      background-color: #1ebac6;
      color: white;
      padding: 10px 25px;
      border: none;
      border-radius: 20px;
      font-size: 16px;
      cursor: pointer;
    }

    .btn-disabled {
      background-color: #d3e0e2;
      color: #555;
      padding: 10px 25px;
      border: none;
      border-radius: 20px;
      font-size: 16px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      FORM LAPORAN KERUSAKAN
    </div>

    <?php if(session('success')): ?>
    <div style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 15px;">
        <?php echo e(session('success')); ?>

    </div>
    <?php endif; ?>

    <form action="<?php echo e(route('laporan-kerusakan.store')); ?>" method="POST">
      <?php echo csrf_field(); ?>
      <div class="report-box">

        <div class="detail-section">
          <div class="info-box">
            <img src="<?php echo e(asset('assets/Vector.png')); ?>" alt="Icon Nama" />
            <p><strong>NAMA:</strong>
              <input type="text" name="nama" placeholder="Isi nama Anda" required>
            </p>
          </div>

          <div class="info-box">
            <img src="<?php echo e(asset('assets/streamline-freehand_desk-computer-base-work-standing-user-1.png')); ?>" alt="Icon Jabatan" />
            <p><strong>JABATAN:</strong>
              <input type="text" name="jabatan" placeholder="Contoh: Perawat Ruang ICU" required>
            </p>
          </div>

          <div class="info-box">
            <img src="<?php echo e(asset('assets/Schedule.png')); ?>" alt="Icon Tanggal" />
            <p><strong>TANGGAL & WAKTU LAPOR:</strong><br>
              <input type="datetime-local" name="tanggal_laporan" required>
            </p>
          </div>

          <div class="info-box">
            <img src="<?php echo e(asset('assets/clarity_tools-solid.png')); ?>" alt="Icon Alat Medis" />
            <p><strong>ALAT MEDIS:</strong>
              <input type="text" name="alat_medis" placeholder="Contoh: Defibrillator" required>
            </p>
          </div>

          <div class="info-box">
            <img src="<?php echo e(asset('assets/carbon_report.png')); ?>" alt="Icon Laporan" />
            <p><strong>ISI LAPORAN:</strong><br>
              <textarea name="isi_laporan" rows="5" placeholder="Deskripsikan kerusakan alat di sini..." required></textarea>
            </p>
          </div>
        </div>
      </div>

      <div class="buttons">
        <button type="submit" class="btn-verifikasi">KIRIM LAPORAN</button>
        <button type="reset" class="btn-disabled">RESET</button>
      </div>
    </form>
  </div>
</body>
</html>
<?php /**PATH D:\laragon\www\aplikasi-medloan\resources\views/form_laporan_kerusakan.blade.php ENDPATH**/ ?>