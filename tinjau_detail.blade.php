{{-- resources/views/tinjau_detail.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Detail Laporan Kerusakan</title>
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

.back-arrow {
  position: absolute;
  left: 30px;
  font-size: 24px;
  color: black;
  text-decoration: none;
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

.image-section {
  text-align: center;
}

.image-section img {
  width: 200px;
  height: auto;
  border-radius: 10px;
  margin-bottom: 10px;
}

.alat-title {
  font-weight: bold;
  color: #173940;
  margin-top: 5px;
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

.buttons {
  display: flex;
  justify-content: center;
  gap: 20px;
  margin-top: 30px;
}

.btn-verifikasi {
  background-color: #2ca3aa;
  color: white;
  border: none;
  padding: 12px 24px;
  border-radius: 30px;
  font-weight: bold;
  cursor: pointer;
  font-size: 14px;
}

.btn {
  background-color: #2ca3aa;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  font-weight: bold;
}


  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <a href="{{ route('laporan-kerusakan.index') }}" class="back-arrow">&#8592;</a>
      <h1>FORM LAPORAN KERUSAKAN</h1>
    </div>

    <div class="report-box">
      
      </div>

      <div class="detail-section">
        <div class="info-box">
          <img src="{{ asset('assets/teknisi.png') }}" alt="Icon Nama" />
          <p><strong>NAMA :</strong> {{ strtoupper($laporan->nama_pelapor) }}</p>
        </div>
        <div class="info-box">
          <img src="{{ asset('assets/clarity_tools-solid.png') }}" alt="Icon Jabatan" />
          <p><strong>JABATAN :</strong> {{ strtoupper($laporan->jabatan) }}</p>
        </div>
        <div class="info-box">
          <img src="{{ asset('assets/Schedule.png') }}" alt="Icon Tanggal" />
          <p><strong>TANGGAL & WAKTU LAPOR :</strong><br>{{ \Carbon\Carbon::parse($laporan->created_at)->format('d M Y, H:i') }} WIB</p>
        </div>
        <div class="info-box">
          <img src="{{ asset('assets/streamline-freehand_desk-computer-base-work-standing-user-1.png') }}" alt="Icon Laporan" />
          <p><strong>LAPORAN KERUSAKAN :</strong><br>{{ strtoupper($laporan->isi_laporan) }}</p>
        </div>
      </div>
    </div>

    <div class="buttons">
      <form action="{{ route('laporan-kerusakan.verifikasi', $laporan->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <button class="btn-verifikasi">VERIFIKASI</button>
      </form>
      <a href="{{ route('laporan-perbaikan.create', ['id' => $laporan->id]) }}">
  <button class="btn">TULIS LAPORAN PERBAIKAN</button>
</a>



    </div>
  </div>
</body>
</html>
