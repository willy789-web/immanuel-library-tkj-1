<<<<<<< HEAD
<?php require_once '../../config/bootstrap.php';$me=requireLogin('../auth/login.php');if($me['role']!=='admin')redirect('../books/index.php');require_once '../../repositories/user-repository.php';$id=(int)($_GET['id']??0);$user=getUser($id);if(!$user){flash('Pengguna tidak ditemukan.','error');redirect('index.php');}$base='../../';$pageTitle='Edit Pengguna';$pageSubtitle='Perbarui akun pengguna';?><!doctype html><html lang="id"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title><?=$pageTitle?></title><link rel="stylesheet" href="../../styles/users/edit.css"></head><body><div class="app-shell"><?php require '../../components/admin/sidebar.php';?><main class="app-main"><?php require '../../components/admin/topbar.php';?><div class="app-content"><form method="POST" action="../../actions/users/update.php"><input type="hidden" name="id" value="<?=$id?>"><div class="form-card"><div class="form-row"><div class="form-group"><label>Nama</label><input required name="name" value="<?=e($user['name'])?>"></div><div class="form-group"><label>Email</label><input required type="email" name="email" value="<?=e($user['email'])?>"></div></div><div class="form-row"><div class="form-group"><label>Password baru (opsional)</label><input minlength="8" type="password" name="password"></div><div class="form-group"><label>Role</label><select name="role"><option value="member" <?=$user['role']==='member'?'selected':''?>>Member</option><option value="admin" <?=$user['role']==='admin'?'selected':''?>>Admin</option></select></div></div><div class="form-actions"><a href="index.php" class="btn btn-outline">Batal</a><button type="submit" name="update" value="1" class="btn btn-primary">Simpan Perubahan</button></div></div></form></div></main></div></body></html>
=======
<?php
require_once __DIR__ . "/../../repositories/user-repository.php";

$user = getUser();

$pageTitle = "Edit Pengguna";
$pageSubtitle = "Perbarui data dan role pengguna";
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Pengguna - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/users/edit.css">
</head>
<body>
  <div class="app-shell">
  <?php require_once __DIR__ . "/../../components/admin/sidebar.php" ?>

    <main class="app-main">
    <?php require_once __DIR__ . "/../../components/admin/topbar.php" ?>

      <div class="app-content">
        <form method="POST" action="../../actions/users/update.php">
          <input type="hidden" name="id" value="<?= $user['id'] ?>">
          <div class="form-card">
            <div class="form-section-title">Data Pengguna</div>
            <div class="form-row">
              <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" id="name" name="name" value="<?= $user['name'] ?>">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?= $user['email'] ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="role">Role</label>
              <select id="role" name="role">
                <option value="member" <?= $user['role'] === 'member' ? 'selected' : '' ?>>Member</option>
                <option value="admin" <?= $user['role'] === 'admin' ? 'selected' : '' ?>>Admin</option>
              </select>
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
