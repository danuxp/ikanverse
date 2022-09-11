<?= $this->extend('template/index') ?>

<?= $this->section('content') ?>


<!-- Modal Tambah-->
<div class="modal fade" id="modalTambah" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <?= form_open('olah-bibit/tambah-bibit') ?>
                    <div class="col mb-3">
                        <label for="exampleFormControlSelect1" class="form-label">Bibit Ikan</label>
                        <select class="form-select" name="id_bibit">
                            <?php foreach ($bibit as $row) { ?>
                                <option value="<?= $row['id_bibit'] ?>"><?= $row['nama_bibit'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="row g-2">
                    <div>
                        <label for="exampleFormControlTextarea1" class="form-label">Olah Bibit Ikan</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="olahbibit"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Batal
                </button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>
<!-- end modal -->


<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> <?= $judul ?> </h4>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="demo-inline-spacing mx-4 ">
                    <?php if (session()->getFlashData('pesan')) : ?>
                        <div class="alert alert-success alert-dismissible alert-notif" role="alert">
                            <?= session()->getFlashData('pesan'); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                    <?php endif; ?>
                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalTambah">
                        <i class="bx bx-plus"></i> Tambah
                    </button>

                    <div class="btn-group" id="dropdown-icon-demo">
                        <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bx bx-filter-alt"></i> Filter
                        </button>
                        <ul class="dropdown-menu">
                            <?php foreach ($jenis_ikan as $row) { ?>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><?= $row['nama_jenis_ikan'] ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>


                <!-- loopingnya datanya disini -->
                <h5 class="card-header">Tabel Cara Budidaya Ikan</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead class="bg-primary">
                            <tr>
                                <th>No</th>
                                <th>Bibit Ikan</th>
                                <th>Jenis Ikan</th>
                                <th>Olah Bibit Ikan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <?php
                            $no = 1;
                            foreach ($getData as $row) {
                            ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $row['nama_bibit'] ?></td>
                                    <td><?= $row['nama_jenis_ikan'] ?></td>
                                    <td><?= $row['olahbibit'] ?></td>
                                    <td>
                                        <button class="btn btn-sm btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#modalEdit<?= $row['id'] ?>"> <i class="bx bx-edit-alt me-1"></i> Edit</button>

                                        <button class="btn btn-sm btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#modalHapus<?= $row['id'] ?>"> <i class="bx bx-trash me-1"></i> Hapus</button>
                                    </td>
                                </tr>


                                <!-- Modal Edit-->
                                <div class="modal fade" id="modalEdit<?= $row['id'] ?>" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel1">Edit Data</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="row">
                                                    <?= form_open('olah-bibit/edit-bibit') ?>
                                                    <div class="col mb-3">
                                                        <input type="hidden" name="id" class="form-control" value="<?= $row['id'] ?>" />

                                                        <label for="exampleFormControlSelect1" class="form-label">Bibit Ikan</label>
                                                        <select class="form-select" name="id_bibit">
                                                            <?php foreach ($bibit as $rowIkan) { ?>
                                                                <option <?= ($row['id_bibit'] == $rowIkan['id_bibit']) ? 'selected' : '' ?> value="<?= $rowIkan['id_bibit'] ?>"><?= $rowIkan['nama_bibit'] ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row g-2">
                                                    <div>
                                                        <label for="exampleFormControlTextarea1" class="form-label">Olah Bibit Ikan</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="olahbibit"><?= $row['olahbibit'] ?></textarea>
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
                                <!-- end modal -->

                                <!-- Modal hapus-->
                                <div class="modal fade" id="modalHapus<?= $row['id'] ?>" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel1">Peringatan!</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <?= form_open('olah-bibit/olah-bibit/' . $row['id']) ?>
                                                <p>Apakah Anda Yakin Ingin Menghapus Data ?</p>
                                                <input type="hidden" name="_method" value="DELETE">

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
                <!-- sampai sini -->

                <hr>
                <!-- Basic Pagination -->
                <?= $pager->links('getData', 'data_pagination') ?>
                <!--/ Basic Pagination -->

            </div>
        </div>
    </div>
</div>
<!-- / Content -->
<?= $this->endSection() ?>