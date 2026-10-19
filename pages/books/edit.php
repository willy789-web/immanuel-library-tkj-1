<<<<<<< HEAD
<?php require_once '../../config/bootstrap.php'; requireLogin('../auth/login.php'); require_once '../../repositories/book-repository.php'; require_once '../../repositories/category-repository.php'; require_once '../../repositories/author-repository.php'; $id=(int)($_GET['id']??0);$book=getBook($id); $categories=getCategories(); $authors=getAuthors();if(!$book){flash('Buku tidak ditemukan.','error');redirect('index.php');}$base='../../';$pageTitle='Edit Buku';$pageSubtitle='Perbarui data buku';?><!doctype html><html lang="id"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title><?=$pageTitle?></title><link rel="stylesheet" href="../../styles/books/edit.css"></head><body><div class="app-shell"><?php require '../../components/admin/sidebar.php';?><main class="app-main"><?php require '../../components/admin/topbar.php';?><div class="app-content"><form method="POST" action="../../actions/books/update.php"><input type="hidden" name="id" value="<?=$id?>"><div class="form-card"><div class="form-group"><label>Judul Buku</label><input required name="title" value="<?=e($book['title'])?>"></div><div class="form-row"><div class="form-group"><label>ISBN</label><input name="isbn" value="<?=e($book['isbn'])?>"></div><div class="form-group"><label>Tahun</label><input required type="number" name="year" value="<?=$book['year']?>"></div></div><div class="form-row"><div class="form-group"><label>Stok</label><input required min="0" type="number" name="stock" value="<?=$book['stock']?>"></div><div class="form-group"><label>Kategori</label><select name="category_id"><?php foreach($categories as $c):?><option value="<?=$c['id']?>" <?=$book['category_id']==$c['id']?'selected':''?>><?=e($c['name'])?></option><?php endforeach;?></select></div></div><div class="form-group"><label>Deskripsi</label><textarea name="description" rows="4"><?=e($book['description'])?></textarea></div></div><div class="form-card" style="margin-top:20px"><div class="form-section-title">Penulis</div><?php foreach($authors as $a):?><label style="display:block;margin:8px 0"><input type="checkbox" name="author_ids[]" value="<?=$a['id']?>" <?=in_array($a['id'],$book['author_ids']??[])?'checked':''?>> <?=e($a['name'])?></label><?php endforeach;?><div class="form-actions"><a href="index.php" class="btn btn-outline">Batal</a><button type="submit" name="update" value="1" class="btn btn-primary">Simpan Perubahan</button></div></div></form></div></main></div></body></html>
=======
<?php
require_once __DIR__ . "/../../repositories/book-repository.php";
require_once __DIR__ . "/../../repositories/category-repository.php";
require_once __DIR__ . "/../../repositories/author-repository.php";

$id = $_GET['id'];
$book = getBook($id);
$categories = getCategories();
$authors = getAuthors();

$pageTitle = "Edit Buku";
$pageSubtitle = "Perbarui data buku, kategori, dan penulis";
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Buku - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/books/edit.css">
</head>
<body>
  <div class="app-shell">
  <?php require_once __DIR__ . "/../../components/admin/sidebar.php" ?>

    <main class="app-main">
    <?php require_once __DIR__ . "/../../components/admin/topbar.php" ?>

      <div class="app-content">
        <form method="POST" action="../../actions/books/update.php">
          <input type="hidden" name="id" value="<?= $book['id'] ?>">
          <div class="form-card" style="margin-bottom:20px;">
            <div class="form-section-title">Data Buku</div>
            <div class="form-group">
              <label for="title">Judul Buku</label>
              <input type="text" id="title" name="title" value="<?= $book['title'] ?>">
            </div>
            <div class="form-row">
              <div class="form-group">
                <label for="isbn">ISBN</label>
                <input type="text" id="isbn" name="isbn" value="<?= $book['isbn'] ?>">
              </div>
              <div class="form-group">
                <label for="year">Tahun Terbit</label>
                <input type="number" id="year" name="year" value="<?= $book['year'] ?>">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label for="stock">Jumlah Stok</label>
                <input type="number" id="stock" name="stock" value="<?= $book['stock'] ?>">
              </div>
              <div class="form-group">
                <label for="category_id">Kategori</label>
                <select id="category_id" name="category_id">
                  <?php foreach ($categories as $category): ?>
                    <option value="<?= $category['id'] ?>" <?= $category['id'] === $book['category_id'] ? 'selected' : '' ?>><?= $category['name'] ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="description">Deskripsi</label>
              <textarea id="description" name="description" rows="3"><?= $book['description'] ?></textarea>
            </div>
          </div>

          <div class="form-card">
            <div class="form-section-title">Penulis Buku</div>
            <div class="form-group">
              <label>Pilih Penulis (bisa lebih dari satu)</label>
              <div class="checkbox-grid">
                <?php foreach ($authors as $author): ?>
                  <label class="checkbox-item">
                    <input type="checkbox" name="author_ids[]" value="<?= $author['id'] ?>" <?= in_array($author['id'], $book['author_ids']) ? 'checked' : '' ?>>
                    <?= $author['name'] ?>
                  </label>
                <?php endforeach; ?>
              </div>
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
</body>
</html>
>>>>>>> f88312c (feat: update sourcode)
