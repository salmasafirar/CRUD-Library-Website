<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    <h5>Form Tambah Data Buku</h5>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="isbn">ISBN</label>
                            <input type="text" name="isbn" class="form-control" id="isbn" value="<?= set_value('isbn');?>">
                            <small class="form-text text-danger"><?= form_error('isbn'); ?></small>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="author">Author</label>
                            <input type="text" name="author" class="form-control" id="author" value="<?= set_value('author');?>">
                            <small class="form-text text-danger"><?= form_error('author'); ?></small>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" id="title" value="<?= set_value('title');?>">
                            <small class="form-text text-danger"><?= form_error('title'); ?></small>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" name="price" class="form-control" id="price" value="<?= set_value('price');?>">
                            <small class="form-text text-danger"><?= form_error('price'); ?></small>
                        </div>
                        <br>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                        <a href="<?= base_url(); ?>buku/index/" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>