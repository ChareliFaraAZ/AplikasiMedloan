<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Tenaga Medis - MedLoan</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <div class="container">
    <div class="login-box">
      <img src="{{ asset('assets/logo website baru.png') }}" alt="MedLoan" class="logo">
      <form method="POST" action="{{ route('login.proses') }}">
        @csrf
        <input type="email" name="email" placeholder="Email" required />
        <input type="password" name="password" placeholder="Password" required />
        <div class="button-group">
          <button type="submit" class="signin">Sign In</button>
        </div>
        @if (session('error'))
        <div class="alert alert-danger">
        {{ session('error') }}
     </div>
     @endif

      </form>
    </div>
  </div>
</body>
</html>
