<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Form Laporan Perbaikan</title>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Arial', sans-serif;
    }

    body {
      background-color: #ffffff;
      padding: 30px;
    }

    .container {
      max-width: 960px;
      margin: 0 auto;
    }

    .header {
      background-color: #2ca3aa;
      color: #f2f2dc;
      padding: 20px 40px;
      border-radius: 50px;
      text-align: center;
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 30px;
    }

    .form-box {
      border: 2px solid #ccc;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .row {
      display: flex;
      justify-content: space-between;
      gap: 20px;
      flex-wrap: wrap;
    }

    .row.full {
      flex-direction: column;
    }

    .left, .right {
      flex: 1;
      min-width: 280px;
    }

    label {
      font-size: 14px;
      color: #0d2d33;
      font-weight: bold;
      display: flex;
      align-items: center;
      margin-bottom: 5px;
    }

    label img {
      width: 24px;
      height: 24px;
      margin-right: 8px;
    }

    input[type="text"],
    input[type="file"],
    input[type="date"],
    input[type="time"],
    textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      box-shadow: 1px 2px 3px rgba(0, 0, 0, 0.1);
    }

    textarea {
      resize: none;
    }

    .submit-btn {
      display: flex;
      justify-content: flex-end;
    }

    .submit-btn button {
      background-color: #2ca3aa;
      color: white;
      border: none;
      padding: 10px 30px;
      font-weight: bold;
      border-radius: 20px;
      cursor: pointer;
    }
  </style>
</head>
<body>
    @if(session('success'))
    <div style="background-color: #d4edda; color: #155724; padding: 10px; margin-bottom: 10px; border-radius: 5px;">
        {{ session('success') }}
    </div>
@endif
  <div class="container">
    <div class="header">
      <h1>FORM LAPORAN PERBAIKAN</h1>
    </div>

    <div class="form-box">
      <form action="{{ route('laporan.perbaikan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="laporan_kerusakan_id" value="{{ $laporan->id }}">


        <div class="row">
          <div class="left">
            <label>
              <img src="{{ asset('assets/teknisi.png') }}" alt="Teknisi" />
              NAMA TEKNISI :
            </label>
            <input type="text" name="nama_teknisi" placeholder="masukkan nama anda..." required />
          </div>

          <div class="right">
            <label>
              <img src="{{ asset('assets/up gambar.png') }}" alt="Upload" />
              UNGGAH GAMBAR :
            </label>
            <input type="file" name="gambar" />
          </div>
        </div>

        <div class="row">
          <div class="left">
            <label>
              <img src="{{ asset('assets/tanggal.png') }}" alt="Tanggal" />
              TANGGAL DAN WAKTU PERBAIKAN :
            </label>
            <input type="date" name="tanggal" required />
            <input type="time" name="waktu" required />
          </div>

          <div class="right">
            <label>
              <img src="{{ asset('assets/tindakan.png') }}" alt="Nama Alat" />
              NAMA ALAT :
            </label>
            <input type="text" name="nama_alat" placeholder="masukkan nama alat...." required />
          </div>
        </div>

        <div class="row full">
          <label>
            <img src="{{ asset('assets/kondisi.png') }}" alt="Laporan" />
            LAPORAN PERBAIKAN :
          </label>
          <textarea name="laporan" rows="6" placeholder="tulis detail laporan...." required></textarea>
        </div>

        <div class="submit-btn">
          <button type="submit">KIRIM</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
