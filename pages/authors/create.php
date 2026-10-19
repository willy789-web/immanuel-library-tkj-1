<<<<<<< HEAD
<?php require_once '../../config/bootstrap.php';requireLogin('../auth/login.php');$base='../../';$pageTitle='Tambah Penulis';$pageSubtitle='Tambahkan data penulis';?><!doctype html><html lang="id"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title><?=$pageTitle?></title><link rel="stylesheet" href="../../styles/authors/create.css"></head><body><div class="app-shell"><?php require '../../components/admin/sidebar.php';?><main class="app-main"><?php require '../../components/admin/topbar.php';?><div class="app-content"><form method="POST" action="../../actions/authors/store.php"><div class="form-card"><div class="form-group"><label>Nama</label><input required name="name" value="<?=old('name')?>"></div><div class="form-group"><label>Bio</label><textarea name="bio" rows="5"><?=old('bio')?></textarea></div><div class="form-actions"><a href="index.php" class="btn btn-outline">Batal</a><button type="submit" name="store" value="1" class="btn btn-primary">Simpan</button></div></div></form></div></main></div></body></html>
=======
<?php
$pageTitle = "Tambah Penulis";
$pageSubtitle = "Daftarkan penulis baru ke sistem";
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Penulis - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/authors/create.css">
</head>
<body>
  <div class="app-shell">
  <?php require_once __DIR__ . "/../../components/admin/sidebar.php" ?>

    <main class="app-main">
    <?php require_once __DIR__ . "/../../components/admin/topbar.php" ?>

      <div class="app-content">
        <form method="POST" action="../../actions/authors/store.php">
          <div class="form-card">
            <div class="form-section-title">Data Penulis</div>
            <div class="form-group">
              <label for="name">Nama Penulis</label>
              <input type="text" id="name" name="name" placeholder="Contoh: Tere Liye">
            </div>
            <div class="form-group">
              <label for="bio">Biografi Singkat</label>
              <textarea id="bio" name="bio" rows="3" placeholder="Biografi singkat penulis"></textarea>
            </div>
            <div class="form-actions">
              <a href="index.php" class="btn btn-outline">Batal</a>
              <button type="submit" name="store" class="btn btn-primary">Simpan Penulis</button>
            </div>
          </div>
        </form>
      </div>
    </main>
  </div>
</body>
</html>
>>>>>>> f88312c (feat: update sourcode)
