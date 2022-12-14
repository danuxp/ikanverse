<?= $this->extend('template/index') ?>

<?= $this->section('content') ?>


<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Users</span> </h4>

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
                    <?= form_open('users/tambah') ?>
                    <div class="mb-3">
                        <label for="defaultFormControlInput" class="form-label">Username</label>
                        <input type="text" class="form-control" placeholder="Masukkan Username" name="username" />
                        <small class="text-danger"> <?= $validation->getError('username') ?> </small>

                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <?= form_close() ?>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card mb-4">
                <!-- Basic Bootstrap Table -->
                <h5 class="card-header">Tabel Users</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead class="bg-primary">
                            <tr>
                                <th>No</th>
                                <th>Username</th>
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
                                    <td><?= $row['username'] ?></td>

                                    <td>
                                        <!-- <button class="btn btn-sm btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#editModal<?= $row['id_user'] ?>"> <i class="bx bx-edit-alt me-1"></i> Edit</button> -->

                                        <button class="btn btn-sm btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#hapusModal<?= $row['id_user'] ?>"> <i class="bx bx-trash me-1"></i> Hapus</button>
                                    </td>
                                </tr>

                                <!-- Modal Edit-->
                                <div class="modal fade" id="editModal<?= $row['id_user'] ?>" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel1">Form Edit</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <?= form_open('users/edit') ?>

                                                <div class="row">

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
                                <div class="modal fade" id="hapusModal<?= $row['id_user'] ?>" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel1">Peringatan!</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <?= form_open('users/hapus/' . $row['id_user']) ?>

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
                <!-- Basic Pagination -->
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item first">
                            <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-left"></i></a>
                        </li>
                        <li class="page-item prev">
                            <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevron-left"></i></a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0);">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0);">2</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="javascript:void(0);">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0);">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0);">5</a>
                        </li>
                        <li class="page-item next">
                            <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevron-right"></i></a>
                        </li>
                        <li class="page-item last">
                            <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-right"></i></a>
                        </li>
                    </ul>
                </nav>
                <!--/ Basic Pagination -->

            </div>
        </div>
    </div>
</div>
<!-- / Content -->
<?= $this->endSection() ?>