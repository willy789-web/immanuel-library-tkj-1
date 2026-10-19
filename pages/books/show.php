<<<<<<< HEAD
<?php require_once '../../config/bootstrap.php';
requireLogin('../auth/login.php');
require_once '../../repositories/book-repository.php';
$book = getBook((int) ($_GET['id'] ?? 0));
if (!$book) {
    flash('Buku tidak ditemukan.', 'error');
    redirect('index.php');
}
$base = '../../';
$pageTitle = 'Detail Buku';
$pageSubtitle = 'Detail buku'; ?><!doctype html>
=======
<?php
require_once __DIR__ . "/../../repositories/book-repository.php";

$book = getBook();

$pageTitle = "Detail Buku";
$pageSubtitle = "Informasi lengkap buku beserta kategori dan penulis";
?>

<!DOCTYPE html>
>>>>>>> f88312c (feat: update sourcode)
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?= e($book['title']) ?></title>
    <link rel="stylesheet" href="../../styles/books/show.css">
</head>

<body>
<<<<<<< HEAD
    <div class="app-shell"><?php require '../../components/admin/sidebar.php'; ?>
        <main class="app-main"><?php require '../../components/admin/topbar.php'; ?>
            <div class="app-content">
                <div class="form-card">
                    <h2><?= e($book['title']) ?></h2>
                    <p><b>ISBN:</b> <?= e($book['isbn']) ?></p>
                    <p><b>Tahun:</b> <?= $book['year'] ?> &nbsp; <b>Stok:</b> <?= $book['stock'] ?></p>
                    <p><b>Kategori:</b> <?= e($book['category']) ?></p>
                    <p><b>Penulis:</b> <?= e(implode(', ', $book['authors'])) ?></p>
                    <p><?= nl2br(e($book['description'])) ?></p><a href="edit.php?id=<?= $book['id'] ?>"
                        class="btn btn-primary">Edit</a> <a href="index.php" class="btn btn-outline">Kembali</a>
=======
  <div class="app-shell">
  <?php require_once __DIR__ . "/../../components/admin/sidebar.php" ?>

    <main class="app-main">
    <?php require_once __DIR__ . "/../../components/admin/topbar.php" ?>

      <div class="app-content">
        <div class="detail-grid">
          <div class="detail-cover"><svg class="icon" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2Z"/></svg></div>
          <div class="detail-card">
            <h1><?= $book['title'] ?></h1>
            <p class="detail-meta">ISBN: <?= $book['isbn'] ?> &middot; Terbit <?= $book['year'] ?></p>

            <div class="detail-row">
              <div class="detail-label">Kategori</div>
              <div class="detail-value"><span class="badge badge-muted"><?= $book['category'] ?></span></div>
            </div>
            <div class="detail-row">
              <div class="detail-label">Penulis</div>
              <div class="detail-value">
                <div class="chip-list">
                  <?php foreach ($book['authors'] as $authorName): ?>
                    <span class="chip"><?= $authorName ?></span>
                  <?php endforeach; ?>
>>>>>>> f88312c (feat: update sourcode)
                </div>
            </div>
        </main>
    </div>
</body>

</html>