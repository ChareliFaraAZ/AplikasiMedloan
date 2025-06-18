<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Tenaga Medis - MedLoan</title>
  <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
  <div class="container">
    <div class="login-box">
      <img src="<?php echo e(asset('assets/logo website baru.png')); ?>" alt="MedLoan" class="logo">
      <form method="POST" action="<?php echo e(route('login.proses')); ?>">
        <?php echo csrf_field(); ?>
        <input type="email" name="email" placeholder="Email" required />
        <input type="password" name="password" placeholder="Password" required />
        <div class="button-group">
          <button type="submit" class="signin">Sign In</button>
        </div>
        <?php if(session('error')): ?>
        <div class="alert alert-danger">
        <?php echo e(session('error')); ?>

     </div>
     <?php endif; ?>

      </form>
    </div>
  </div>
</body>
</html>
<?php /**PATH D:\laragon\www\aplikasi-medloan\resources\views/login.blade.php ENDPATH**/ ?>