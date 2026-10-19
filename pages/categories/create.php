<<<<<<< HEAD
<?php require_once '../../config/bootstrap.php';requireLogin('../auth/login.php');$base='../../';$pageTitle='Tambah Kategori';$pageSubtitle='Tambahkan kategori buku';?><!doctype html><html lang="id"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title><?=$pageTitle?></title><link rel="stylesheet" href="../../styles/categories/create.css"></head><body><div class="app-shell"><?php require '../../components/admin/sidebar.php';?><main class="app-main"><?php require '../../components/admin/topbar.php';?><div class="app-content"><form method="POST" action="../../actions/categories/store.php"><div class="form-card"><div class="form-group"><label>Nama</label><input required name="name" value="<?=old('name')?>"></div><div class="form-group"><label>Deskripsi</label><textarea name="description" rows="5"><?=old('description')?></textarea></div><div class="form-actions"><a href="index.php" class="btn btn-outline">Batal</a><button type="submit" name="store" value="1" class="btn btn-primary">Simpan</button></div></div></form></div></main></div></body></html>
=======
<?php
$pageTitle = "Tambah Kategori";
$pageSubtitle = "Buat kategori baru untuk mengelompokkan buku";
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Kategori - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/categories/create.css">
</head>
<body>
  <div class="app-shell">
  <?php require_once __DIR__ . "/../../components/admin/sidebar.php" ?>

    <main class="app-main">
    <?php require_once __DIR__ . "/../../components/admin/topbar.php" ?>

      <div class="app-content">
        <form method="POST" action="../../actions/categories/store.php">
          <div class="form-card">
            <div class="form-section-title">Data Kategori</div>
            <div class="form-group">
              <label for="name">Nama Kategori</label>
              <input type="text" id="name" name="name" placeholder="Contoh: Fiksi">
            </div>
            <div class="form-group">
              <label for="description">Deskripsi</label>
              <textarea id="description" name="description" rows="3" placeholder="Deskripsi singkat kategori"></textarea>
            </div>

            <div class="form-actions">
              <a href="index.php" class="btn btn-outline">Batal</a>
              <button type="submit" name="store" class="btn btn-primary">Simpan Kategori</button>
            </div>
          </div>
        </form>
      </div>
    </main>
  </div>
</body>
</html>
>>>>>>> f88312c (feat: update sourcode)
