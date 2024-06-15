<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>Edit Buku</h1>
                </div>
                <div class="card-body">

                    <?php if (session()->getFlashdata('errors')) : ?>
                        <div>
                            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                                <p><?= $error ?></p>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <form method="post" action="/posts/update/<?= $data['id'] ?>">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" value="<?= $data['judul'] ?>" required>
                        <label for="penulis">Penulis</label>
                        <input type="text" name="penulis" value="<?= $data['penulis'] ?>" required>
                        <label for="penerbit">Penerbit</label>
                        <input type="text" name="penerbit" value="<?= $data['penerbit'] ?>" required>
                        <label for="tahun_terbit">Tahun Terbit</label>
                        <input type="number" name="tahun_terbit" value="<?= $data['tahun_terbit'] ?>" required>
                        <button type="submit">Update</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('extra-js') ?>
<!-- You can include additional JavaScript here if needed -->
<?= $this->endSection() ?>
