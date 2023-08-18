<div class="container">
    <div class="row mt-3">
        <div class="col-md-6"></div>
        <?php if (empty($buku)) : ?>
            <div class="alert alert-danger" role="alert">
                Data Buku Tidak Ditemukan
            </div>
        <?php endif; ?>
    </div>

    <div class="d-flex justify-content-between">
        <a class="btn btn-primary sm" href="<?= base_url(); ?>buku/tambah" style="height:40px;">+ Tambah Data Buku</a>
        <div class="row-mt-3">
            <div class="col-md-4" style="width:100%; height:40px;">
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari Data Buku" name="keyword">
                        <button class="btn btn-primary float-right" type="submit">Cari</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>
    <div class="card">
        <div class="card-header">
            <h4 style="text-align: center;">Data Buku</h4>
        </div>
        <div class="card-body">
            <table class="table table-light">
                <thead>
                    <tr>
                        <th>ISBN</th>
                        <th>Author</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($buku as $bk) : ?>
                        <tr>
                            <td><?= $bk['isbn']; ?></td>
                            <td><?= $bk['author']; ?></td>
                            <td><?= $bk['title']; ?></td>
                            <td>$<?= $bk['price']; ?></td>
                            <td>
                                <a class="btn btn-warning btn-sm" href="<?= base_url(); ?>buku/ubah/<?= $bk['isbn']; ?>">Edit</a>
                                <a class="btn btn-danger btn-sm" href="<?= base_url(); ?>buku/hapus/<?= $bk['isbn']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus?');">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <?php if (empty($bk)) : ?>
                    <tr>
                        <td colspan="4">
                            <div class="alert alert-danger" role="alert">
                                Data not found!
                            </div>
                        </td>
                    </tr>
                <?php endif; ?>
            </table>
        </div>
    </div>