<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
</head>
<body>
<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>Tambah Buku<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <h2 class="mb-4">Tambah Buku</h2>
    <?php if (session()->getFlashdata('errors')): ?>
        <div class="alert alert-danger">
            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                <p><?= $error ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <form method="post" action="/posts/store">
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" name="judul" class="form-control" value="<?= old('judul') ?>" required>
        </div>
        <div class="form-group">
            <label for="penulis">Penulis</label>
            <input type="text" name="penulis" class="form-control" value="<?= old('penulis') ?>" required>
        </div>
        <div class="form-group">
            <label for="penerbit">Penerbit</label>
            <input type="text" name="penerbit" class="form-control" value="<?= old('penerbit') ?>" required>
        </div>
        <div class="form-group">
            <label for="tahun_terbit">Tahun Terbit</label>
            <input type="number" name="tahun_terbit" class="form-control" value="<?= old('tahun_terbit') ?>" required min="1801" max="2023">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
<?= $this->endSection() ?>

</body>
</html>
