<?= $this->extend('template/index') ?>

<?= $this->section('content') ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Setting</h5>
                <div class="card-body">
                    <?= form_open('setting/edit') ?>
                    <div class="mb-3">
                        <label> Nama Perusahaan</label>
                        <input type="text" class="form-control" name="nama" value="<?= (empty($getData['nama_perusahaan'])) ? '' : $getData['nama_perusahaan'] ?>" />
                    </div>

                    <div class="mb-3">
                        <label> Alamat</label>
                        <textarea type="text" class="form-control" name="alamat" rows="5"><?= (empty($getData['alamat'])) ? '' : $getData['alamat'] ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label> No Telp</label>
                        <input type="text" class="form-control" name="no_telp" value="<?= (empty($getData['no_telp'])) ? '' : $getData['no_telp'] ?>" />
                    </div>

                    <div class="mb-3">
                        <label> Email</label>
                        <input type="email" class="form-control" name="email" value="<?= (empty($getData['email'])) ? '' : $getData['email'] ?>" />
                    </div>

                    <div class="mb-3">
                        <label> Instagram</label>
                        <input type="text" class="form-control" name="instagram" value="<?= (empty($getData['instagram'])) ? '' : $getData['instagram'] ?>" />
                    </div>

                    <div class="mb-3">
                        <label> Facebook</label>
                        <input type="text" class="form-control" name="facebook" value="<?= (empty($getData['facebook'])) ? '' : $getData['facebook'] ?>" />
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>