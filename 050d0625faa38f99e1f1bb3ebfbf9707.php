<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Form Laporan Perawatan Alat</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
  <style>
    body { 
      font-family: 'Inter', sans-serif;
      margin: 0;
      background: #fff;
      color: #1b3b43;
    }
    .container {
      padding: 30px;
    }
    header {
      display: flex;
      align-items: center;
      gap: 20px;
      margin-bottom: 20px;
    }
    .logo {
      width: 140px;
    }
    h1 {
      font-size: 24px;
      font-weight: 700;
    }
    .form-card {
      border: 1px solid #ccc;
      border-radius: 6px;
      padding: 30px;
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
      box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.15);
    }
    .form-left,
    .form-right {
      flex: 1;
      min-width: 320px;
      display: flex;
      flex-direction: column;
      gap: 18px;
    }
    label {
      font-weight: 600;
      font-size: 14px;
      display: flex;
      flex-direction: column;
      gap: 6px;
    }
    label img {
      width: 20px;
      height: 20px;
      margin-right: 6px;
      vertical-align: middle;
    }
    input[type="text"],
    select,
    textarea {
      padding: 10px;
      border: 1px solid #bbb;
      border-radius: 6px;
      font-family: 'Inter', sans-serif;
      font-size: 14px;
      resize: none;
      box-shadow: 1px 1px 3px rgba(0,0,0,0.1);
    }
    textarea {
      min-height: 80px;
    }
    .split {
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
    }
    .form-bottom {
      width: 100%;
      margin-top: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
    }
    .checkbox {
      font-size: 13px;
      display: flex;
      align-items: center;
      gap: 6px;
    }
    button[type="submit"] {
      background-color: #2ca5a5;
      color: white;
      border: none;
      padding: 12px 20px;
      font-weight: bold;
      border-radius: 8px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="container">
    <header>
      <img src="<?php echo e(asset('assets/logo website baru.png')); ?>" alt="MedLoan Logo" class="logo" />
      <h1>FORM LAPORAN PERAWATAN ALAT</h1>
    </header>

    <form class="form-card" method="POST" action="<?php echo e(route('perawatan.store')); ?>" enctype="multipart/form-data">
      <?php echo csrf_field(); ?>
      <div class="form-left">
        <label>
          <div style="display:flex; align-items:center;">
            <img src="<?php echo e(asset('assets/teknisi.png')); ?>" alt="" /> NAMA TEKNISI:
          </div>
          <input type="text" name="nama_teknisi" placeholder="masukkan nama anda..." required />
        </label>

        <label>
          <div style="display:flex; align-items:center;">
            <img src="<?php echo e(asset('assets/unit kerja.png')); ?>" alt="" /> UNIT KERJA:
          </div>
          <input type="text" name="unit_kerja" placeholder="masukkan unit kerja anda..." required />
        </label>

        <label>
          <div style="display:flex; align-items:center;">
            <img src="<?php echo e(asset('assets/tanggal.png')); ?>" alt="" /> TANGGAL DAN WAKTU PERBAIKAN:
          </div>
          <div class="split">
            <input type="date" name="tanggal_perbaikan" required />
            <input type="time" name="waktu_perbaikan" required />
          </div>
        </label>

        <label>
          <div style="display:flex; align-items:center;">
            <img src="<?php echo e(asset('assets/jenis perawatan.png')); ?>" alt="" /> JENIS PERAWATAN:
          </div>
          <select name="jenis_perawatan" required>
            <option value="">-- pilih jenis perawatan --</option>
            <option value="preventif">Pemeriksaan rutin</option>
            <option value="korektif">Perbaikan ringan</option>
            <option value="inspeksi">Kalibrasi</option>
            <option value="kalibrasi">Penggantian komponen</option>
            <option value="lainnya">Lainnya</option>
          </select>
        </label>

        <label>
          <div style="display:flex; align-items:center;">
            <img src="<?php echo e(asset('assets/tindakan.png')); ?>" alt="" /> DESKRIPSI TINDAKAN:
          </div>
          <textarea name="deskripsi_tindakan" placeholder="tulis detail tindakan.." required></textarea>
        </label>
      </div>

      <div class="form-right">
        <label>
          <div style="display:flex; align-items:center;">
            <img src="<?php echo e(asset('assets/up gambar.png')); ?>" alt="" /> UNGGAH GAMBAR:
          </div>
          <input type="file" name="gambar" accept="image/*" />
        </label>

        <label>
          <div style="display:flex; align-items:center;">
    <img src="<?php echo e(asset('assets/nama alat.png')); ?>" alt="" /> NAMA ALAT:
  </div>
  <input type="text" name="nama_alat" value="<?php echo e($nama_alat ?? ''); ?>" placeholder="masukkan nama alat...." required />
        </label>

        <label>
          <div style="display:flex; align-items:center;">
            <img src="<?php echo e(asset('assets/kondisi.png')); ?>" alt="" /> KONDISI SETELAH PERAWATAN:
          </div>
          <textarea name="kondisi_setelah_perawatan" placeholder="tulis kondisi setelah perawatan..." required></textarea>
        </label>
      </div>

      <div class="form-bottom">
        <label class="checkbox">
          <input type="checkbox" name="pernyataan" required />
          Saya menyatakan bahwa data yang saya isikan sesuai dengan kondisi lapangan
        </label>
        <button type="submit">SIMPAN</button>
      </div>
    </form>
  </div>
</body>
</html>
<?php /**PATH D:\laragon\www\aplikasi-medloan\resources\views/teknisi/form_perawatan.blade.php ENDPATH**/ ?>