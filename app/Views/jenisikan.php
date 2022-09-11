<?= $this->extend('template/index') ?>

<?= $this->section('content') ?>


<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Pengetahuan Ikan /</span> Jenis Ikan </h4>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">

                <!-- <h5 class="card-header">Default</h5> -->
                <div class="card-body">
                    <?php if (session()->getFlashData('pesan')) : ?>
                        <div class="alert alert-success alert-dismissible alert-notif" role="alert">
                            <?= session()->getFlashData('pesan'); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                    <?php endif; ?>
                    <?= form_open('jenisikan/tambah') ?>
                    <div class="mb-3">
                        <label for="defaultFormControlInput" class="form-label">Jenis Ikan</label>
                        <input type="text" class="form-control" placeholder="Masukkan Jenis Ikan" name="jenis_ikan" />
                        <small class="text-danger"> <?= $validation->getError('jenis_ikan') ?> </small>

                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <?= form_close() ?>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card mb-4">
                <!-- Basic Bootstrap Table -->
                <h5 class="card-header">Tabel Jenis Ikan</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead class="bg-primary">
                            <tr>
                                <th>No</th>
                                <th>Jenis Ikan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <?php
                            $no = 1;
                            foreach ($getData as $row) {
                            ?>
                                <tr>
                                    <td>
                                        <?= $no++ ?>
                                    </td>
                                    <td><?= $row['nama_jenis_ikan'] ?></td>

                                    <td>
                                        <button class="btn btn-sm btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#editModal<?= $row['id_jenis'] ?>"> <i class="bx bx-edit-alt me-1"></i> Edit</button>

                                        <button class="btn btn-sm btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#hapusModal<?= $row['id_jenis'] ?>"> <i class="bx bx-trash me-1"></i> Hapus</button>
                                    </td>
                                </tr>

                                <!-- Modal Edit-->
                                <div class="modal fade" id="editModal<?= $row['id_jenis'] ?>" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel1">Form Edit</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <?= form_open('jenisikan/edit') ?>

                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label for="nameBasic" class="form-label">Jenis Ikan</label>
                                                        <input type="text" name="jenis_ikan" class="form-control" required value="<?= $row['nama_jenis_ikan'] ?>" />

                                                        <input type="text" name="id" class="form-control" required value="<?= $row['id_jenis'] ?>" />

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                                    Batal
                                                </button>
                                                <button type="submit" class="btn btn-primary">Edit</button>
                                            </div>
                                            <?= form_close() ?>

                                        </div>
                                    </div>
                                </div>
                                <!-- end Modal -->


                                <!-- Modal hapus-->
                                <div class="modal fade" id="hapusModal<?= $row['id_jenis'] ?>" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel1">Peringatan!</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <?= form_open('jenisikan/hapus/' . $row['id_jenis']) ?>

                                                <input type="hidden" name="_method" value="DELETE">
                                                <p>Apakah Anda Yakin Ingin Menghapus Data ?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                                    Batal
                                                </button>
                                                <button type="submit" class="btn btn-primary">Hapus</button>
                                            </div>
                                            <?= form_close() ?>

                                        </div>
                                    </div>
                                </div>
                                <!-- end Modal -->
                            <?php } ?>

                        </tbody>
                    </table>
                </div>
                <!--/ Basic Bootstrap Table -->

                <hr>
                <?= $pager->links('getData', 'data_pagination') ?>

            </div>
        </div>
    </div>
</div>
<!-- / Content -->
<?= $this->endSection() ?>