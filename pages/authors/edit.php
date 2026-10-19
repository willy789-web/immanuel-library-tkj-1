<<<<<<< HEAD
<?php require_once '../../config/bootstrap.php';
requireLogin('../auth/login.php');
require_once '../../repositories/author-repository.php';
$id = (int) ($_GET['id'] ?? 0);
$author = getAuthor($id);
if (!$author) {
    flash('Penulis tidak ditemukan.', 'error');
    redirect('index.php');
}
$base = '../../';
$pageTitle = 'Edit Penulis';
$pageSubtitle = 'Perbarui data penulis'; ?><!doctype html>
=======
<?php
require_once __DIR__ . "/../../repositories/author-repository.php";

$author = getAuthor();

$pageTitle = "Edit Penulis";
$pageSubtitle = "Perbarui data penulis";
?>

<!DOCTYPE html>
>>>>>>> f88312c (feat: update sourcode)
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?= $pageTitle ?></title>
    <link rel="stylesheet" href="../../styles/authors/edit.css">
</head>

<body>
<<<<<<< HEAD
    <div class="app-shell"><?php require '../../components/admin/sidebar.php'; ?>
        <main class="app-main"><?php require '../../components/admin/topbar.php'; ?>
            <div class="app-content">
                <form method="POST" action="../../actions/authors/update.php"><input type="hidden" name="id"
                        value="<?= $id ?>">
                    <div class="form-card">
                        <div class="form-group"><label>Nama</label><input required name="name"
                                value="<?= e($author['name']) ?>"></div>
                        <div class="form-group"><label>Bio</label><textarea name="bio"
                                rows="5"><?= e($author['bio']) ?></textarea></div>
                        <div class="form-actions"><a href="index.php" class="btn btn-outline">Batal</a><button
                                type="submit" name="update" value="1" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </div>
                </form>
            </div>
        </main>
    </div>
=======
  <div class="app-shell">
    <?php require_once __DIR__ . "/../../components/admin/sidebar.php" ?>

    <main class="app-main">
      <?php require_once __DIR__ . "/../../components/admin/topbar.php" ?>

      <div class="app-content">
        <form method="POST" action="../../actions/authors/update.php">
          <input type="hidden" name="id" value="<?= $author['id'] ?>">
          <div class="form-card">
            <div class="form-section-title">Data Penulis</div>
            <div class="form-group">
              <label for="name">Nama Penulis</label>
              <input type="text" id="name" name="name" value="<?= $author['name'] ?>">
            </div>
            <div class="form-group">
              <label for="bio">Biografi Singkat</label>
              <textarea id="bio" name="bio" rows="3"><?= $author['bio'] ?></textarea>
            </div>
            <div class="form-actions">
              <a href="index.php" class="btn btn-outline">Batal</a>
              <button type="submit" name="update" class="btn btn-primary">Simpan Perubahan</button>
            </div>
          </div>
        </form>
      </div>
    </main>
  </div>
>>>>>>> f88312c (feat: update sourcode)
</body>

</html>