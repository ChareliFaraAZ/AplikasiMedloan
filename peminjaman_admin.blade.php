<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>MedLoan - Peminjaman Admin</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <style>
    /* (gunakan seluruh CSS Anda sebelumnya tanpa perubahan) */
    /* TAMBAHKAN style ini di bawah .btn-pinjam jika ingin buton lain terlihat seragam */
    .btn-aksi {
      display: inline-block;
      margin: 4px 6px;
      padding: 8px 16px;
      border-radius: 14px;
      font-size: 0.9em;
      font-weight: 600;
      border: none;
      cursor: pointer;
      transition: 0.2s;
    }
    .btn-detail {
      background: #5b8c5a;
      color: #fff;
    }
    .btn-edit {
      background: #e6b800;
      color: #fff;
    }
    .btn-hapus {
      background: #cc3333;
      color: #fff;
    }
    .btn-aksi:hover {
      opacity: 0.9;
      transform: scale(1.05);
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
        <a href="#" class="active">PEMINJAMAN (ADMIN)</a>
        <a href="{{ url('/laporan-pemakaian') }}">LAPORAN PEMAKAIAN</a>
        <a href="{{ url('/admin/tambahalat') }}">TAMBAH ALAT</a>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
      <div class="topbar">
        <button class="icon-menu" onclick="window.location.href='{{ url('/filter') }}'">
          <i class="fa-solid fa-bars"></i>
        </button>
        <img src="{{ asset('assets/profile.png') }}" alt="User Avatar" class="user-avatar"/>
      </div>

      <div class="alat-grid">
        @foreach ($alat as $item)
        <div class="alat-card">
          <img src="{{ asset('assets/' . $item->gambar) }}" alt="{{ $item->nama }}">
          <div class="nama-alat">{{ strtoupper($item->nama) }}</div>

          <div>
            <a href="{{ url('alat/' . $item->id) }}" class="btn-aksi btn-detail">DETAIL</a>
            <a href="{{ url('alat/' . $item->id . '/edit') }}" class="btn-aksi btn-edit">EDIT</a>
            <form action="{{ url('alat/' . $item->id) }}" method="POST" style="display:inline">
              @csrf
              @method('DELETE')
              <button type="submit" onclick="return confirm('Yakin ingin hapus alat ini?')" class="btn-aksi btn-hapus">HAPUS</button>
            </form>
          </div>
        </div>
        @endforeach
      </div>
    </main>
  </div>
</body>
</html>
