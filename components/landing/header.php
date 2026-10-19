<header>
<<<<<<< HEAD
  <nav class="navbar">
    <a href="<?= e($base ?? '') ?>index.php" class="brand"><span class="logo-badge">PD</span> Perpustakaan Digital</a>
    <div class="nav-links">
      <a href="<?= e($base ?? '') ?>index.php" class="active">Beranda</a>
      <a href="<?= e($base ?? '') ?>pages/books/index.php">Katalog Buku</a>
      <a href="<?= e($base ?? '') ?>pages/authors/index.php">Penulis</a>
    </div>
    <div class="nav-actions">
      <?php if (!empty($u)): ?>
        <a href="<?= e($base ?? '') ?>pages/books/index.php" class="btn btn-primary btn-sm">Dashboard</a>
      <?php else: ?>
        <a href="<?= e($base ?? '') ?>pages/auth/login.php" class="btn btn-outline btn-sm">Masuk</a>
        <a href="<?= e($base ?? '') ?>pages/auth/register.php" class="btn btn-primary btn-sm">Daftar</a>
      <?php endif; ?>
    </div>
  </nav>
</header>
=======
    <nav class="navbar">
        <a href="/index.php" class="brand">
            <span class="logo-badge">PD</span>
            Perpustakaan Digital
        </a>
        <div class="nav-links">
            <a href="/index.php" class="active">Beranda</a>
            <a href="/pages/books/index.php">Katalog Buku</a>
            <a href="/pages/authors/index.php">Penulis</a>
        </div>
        <div class="nav-actions">
            <a href="/pages/auth/login.php" class="btn btn-outline btn-sm">Masuk</a>
            <a href="/pages/auth/register.php" class="btn btn-primary btn-sm">Daftar</a>
        </div>
    </nav>
</header>
>>>>>>> f88312c (feat: update sourcode)
