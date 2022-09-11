<?= $this->extend('template/index') ?>

<?= $this->section('content') ?>


<!-- Modal Tambah Ikan -->
<div class="modal fade" id="modalTambah" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <?= form_open_multipart('jualbeli/tambah-ikan') ?>

                <div class="row">
                    <div class="col mb-2">
                        <label for="nameBasic" class="form-label">Nama Ikan</label>
                        <input type="text" name="nama_ikan" class="form-control" placeholder="Masukkan Nama Ikan" required />
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 mb-2">
                        <label for="nameBasic" class="form-label">Harga</label>
                        <input type="text" name="harga" class="form-control" placeholder="Masukkan Harga" required />
                    </div>
                    <div class="col-6 mb-2">
                        <label for="nameBasic" class="form-label">Stok</label>
                        <input type="text" name="stok" class="form-control" placeholder="Masukkan Stok" required />
                    </div>
                </div>

                <div class="form-check form-switch mb-2">
                    <label class="form-check-label">Tersedia <small class="text-danger">*klik jika tersedia</small> </label>
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" <?php
                                                                                                $check = 'checked';

                                                                                                if ($check == 'checked') {
                                                                                                    echo 'value="1"';
                                                                                                } ?> name="tersedia" />
                </div>


                <div class="row mb-2">
                    <div>
                        <label for="formFile" class="form-label">Gambar</label>
                        <input class="form-control" type="file" name="gambar" />
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="exampleFormControlSelect1" class="form-label">Jenis Ikan</label>
                        <select class="form-select" name="jenis_ikan">
                            <?php foreach ($jenis_ikan as $row) { ?>
                                <option value="<?= $row['id_jenis'] ?>"><?= $row['nama_jenis_ikan'] ?></option>
                            <?php } ?>
                        </select>
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


<!-- Modal Tambah Bibit -->
<div class="modal fade" id="bibitTambah" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <?= form_open_multipart('jualbeli/tambah-bibit') ?>

                <div class="row">
                    <div class="col mb-2">
                        <label for="nameBasic" class="form-label">Nama Bibit</label>
                        <input type="text" name="nama_bibit" class="form-control" placeholder="Masukkan Nama Bibit" required />
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 mb-2">
                        <label for="nameBasic" class="form-label">Harga</label>
                        <input type="text" name="harga" class="form-control" placeholder="Masukkan Harga" required />
                    </div>
                    <div class="col-6 mb-2">
                        <label for="nameBasic" class="form-label">Stok</label>
                        <input type="text" name="stok" class="form-control" placeholder="Masukkan Stok" required />
                    </div>
                </div>

                <div class="form-check form-switch mb-2">
                    <label class="form-check-label">Tersedia <small class="text-danger">*klik jika tersedia</small> </label>
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" <?php
                                                                                                $check = 'checked';

                                                                                                if ($check == 'checked') {
                                                                                                    echo 'value="1"';
                                                                                                } ?> name="tersedia" />
                </div>


                <div class="row mb-2">
                    <div>
                        <label for="formFile" class="form-label">Gambar</label>
                        <input class="form-control" type="file" name="gambar_bibit" />
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="exampleFormControlSelect1" class="form-label">Jenis Ikan</label>
                        <select class="form-select" name="jenis_ikan">
                            <?php foreach ($jenis_ikan as $row) { ?>
                                <option value="<?= $row['id_jenis'] ?>"><?= $row['nama_jenis_ikan'] ?></option>
                            <?php } ?>
                        </select>
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
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Jual Beli /</span> Bibit </h4>
    <div class="row">
        <div class="col-md-12">
            <div class="nav-align-top">
                <ul class="nav nav-pills mb-3" role="tablist">
                    <li class="nav-item">
                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-home" aria-controls="navs-pills-top-home" aria-selected="true">
                            Jual Ikan
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-profile" aria-controls="navs-pills-top-profile" aria-selected="false">
                            Jual Bibit
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="navs-pills-top-home" role="tabpanel">
                        <?php if (session()->getFlashData('pesan-ikan')) : ?>
                            <div class="alert alert-success alert-dismissible alert-notif" role="alert">
                                <?= session()->getFlashData('pesan-ikan'); ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif; ?>

                        <?php if ($validation->getError('gambar') == true) :
                        ?>
                            <div class="alert alert-danger alert-dismissible  alert-notif" role="alert">
                                <?= $validation->getError('gambar');
                                ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif; ?>

                        <div class="demo-inline-spacing mb-4">
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
                        <div class="row">
                            <!-- loopingnya datanya disini -->
                            <?php
                            foreach ($getData as $row) {
                            ?>
                                <div class="col-md-4 ">
                                    <div class="card h-100">
                                        <img class="card-img-top w-50" src="<?= base_url('uploads/' . $row['gambar']) ?>" alt="Card image cap" />
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $row['nama_ikan'] ?></h5>
                                            <table>
                                                <tr>
                                                    <td> Harga </td>
                                                    <td>:</td>
                                                    <td> <?= $row['harga'] ?> </td>
                                                </tr>

                                                <tr>
                                                    <td> Stok </td>
                                                    <td>:</td>
                                                    <td> <?= $row['stok'] ?> </td>
                                                </tr>

                                                <tr>
                                                    <td> Tersedia </td>
                                                    <td>:</td>
                                                    <td> <?= ($row['tersedia'] == 1) ? '<span class="badge bg-success">Tersedia</span>' : '<span class="badge bg-secondary">Tidak Tersedia</span>' ?> </td>
                                                </tr>

                                                <tr>
                                                    <td> Jenis Ikan </td>
                                                    <td>:</td>
                                                    <td> <?= '<span class="badge bg-primary">' . $row['nama_jenis_ikan'] . '</span>' ?> </td>
                                                </tr>
                                            </table>

                                            <div class="tombol mt-3">
                                                <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editModal<?= $row['id_ikan'] ?>">
                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                </button>

                                                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal<?= $row['id_ikan'] ?>">
                                                    <i class="bx bx-trash me-1"></i>Hapus
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- sampai sini -->

                                <!-- Modal edit-->
                                <div class="modal fade" id="editModal<?= $row['id_ikan'] ?>" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel1">Peringatan!</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <?= form_open_multipart('jualbeli/edit-ikan/') ?>
                                                <div class="row">
                                                    <div class="col mb-2">
                                                        <label for="nameBasic" class="form-label">Nama Ikan</label>
                                                        <input type="text" name="nama_ikan" class="form-control" placeholder="Masukkan Nama Ikan" required value="<?= $row['nama_ikan'] ?>" />

                                                        <input type="hidden" name="id_ikan" class="form-control" value="<?= $row['id_ikan'] ?>" />

                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-6 mb-2">
                                                        <label for="nameBasic" class="form-label">Harga</label>
                                                        <input type="text" name="harga" class="form-control" placeholder="Masukkan Harga" required value="<?= $row['harga'] ?>" />
                                                    </div>
                                                    <div class="col-6 mb-2">
                                                        <label for="nameBasic" class="form-label">Stok</label>
                                                        <input type="text" name="stok" class="form-control" placeholder="Masukkan Stok" required value="<?= $row['stok'] ?>" />
                                                    </div>
                                                </div>

                                                <div class="form-check form-switch mb-2">
                                                    <label class="form-check-label">Tersedia <small class="text-danger">*klik jika tersedia</small> </label>
                                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="tersedia" <?= ($row['tersedia'] == 1) ? 'checked' : '' ?> <?= ($row['tersedia'] == 1) ? 'value="1"' : 'value="0"' ?> />
                                                </div>


                                                <div class="row mb-2">
                                                    <div>
                                                        <label for="formFile" class="form-label">Gambar</label>
                                                        <input class="form-control" type="file" name="gambar" />

                                                        <input class="form-control" type="hidden" name="gambarLama" value="<?= $row['gambar'] ?>" />

                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col">
                                                        <label for="exampleFormControlSelect1" class="form-label">Jenis Ikan</label>
                                                        <select class="form-select" name="jenis_ikan">
                                                            <?php foreach ($jenis_ikan as $rowJenis) { ?>
                                                                <option <?= ($row['id_jenis'] == $rowJenis['id_jenis']) ? 'selected' : '' ?> value="<?= $rowJenis['id_jenis'] ?>"><?= $rowJenis['nama_jenis_ikan'] ?></option>
                                                            <?php } ?>
                                                        </select>
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
                                <div class="modal fade" id="hapusModal<?= $row['id_ikan'] ?>" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel1">Peringatan!</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <?= form_open('jualbeli/hapus-ikan/' . $row['id_ikan']) ?>
                                                <p>Apakah Anda Yakin Ingin Menghapus Data ?</p>

                                                <input class="form-control" type="hidden" name="gambar" value="<?= $row['gambar'] ?>" />
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

                            <hr>
                            <!-- Basic Pagination -->
                            <?= $pager->links('getData', 'data_pagination') ?>
                            <!--/ Basic Pagination -->
                        </div>
                    </div>

                    <!-- Tambah Bibit -->
                    <div class="tab-pane fade" id="navs-pills-top-profile" role="tabpanel">
                        <?php if (session()->getFlashData('pesan-bibit')) : ?>
                            <div class="alert alert-success alert-dismissible alert-notif" role="alert">
                                <?= session()->getFlashData('pesan-bibit'); ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif; ?>

                        <?php if ($validation->getError('gambar_bibit') == true) :
                        ?>
                            <div class="alert alert-danger alert-dismissible  alert-notif" role="alert">
                                <?= $validation->getError('gambar_bibit');
                                ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif; ?>
                        <div class="demo-inline-spacing mb-4">
                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#bibitTambah">
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
                        <div class="row">
                            <!-- loopingnya datanya disini -->
                            <?php
                            foreach ($getData2 as $row) {
                            ?>
                                <div class="col-md-4 ">
                                    <div class="card h-100">
                                        <img class="card-img-top w-50" src="<?= base_url('uploads/' . $row['gambar']) ?>" alt="Card image cap" />
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $row['nama_bibit'] ?></h5>
                                            <table>
                                                <tr>
                                                    <td> Harga </td>
                                                    <td>:</td>
                                                    <td> <?= $row['harga'] ?> </td>
                                                </tr>

                                                <tr>
                                                    <td> Stok </td>
                                                    <td>:</td>
                                                    <td> <?= $row['stok'] ?> </td>
                                                </tr>

                                                <tr>
                                                    <td> Tersedia </td>
                                                    <td>:</td>
                                                    <td> <?= ($row['tersedia'] == 1) ? '<span class="badge bg-success">Tersedia</span>' : '<span class="badge bg-secondary">Tidak Tersedia</span>' ?> </td>
                                                </tr>

                                                <tr>
                                                    <td> Jenis Ikan </td>
                                                    <td>:</td>
                                                    <td> <?= '<span class="badge bg-primary">' . $row['nama_jenis_ikan'] . '</span>' ?> </td>
                                                </tr>
                                            </table>

                                            <div class="tombol mt-3">
                                                <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editBibit<?= $row['id_bibit'] ?>">
                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                </button>

                                                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapusBibit<?= $row['id_bibit'] ?>">
                                                    <i class="bx bx-trash me-1"></i>Hapus
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal edit-->
                                <div class="modal fade" id="editBibit<?= $row['id_bibit'] ?>" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel1">Peringatan!</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <?= form_open_multipart('jualbeli/edit-bibit/') ?>
                                                <div class="row">
                                                    <div class="col mb-2">
                                                        <label for="nameBasic" class="form-label">Nama Bibit</label>
                                                        <input type="text" name="nama_bibit" class="form-control" placeholder="Masukkan Nama Ikan" required value="<?= $row['nama_bibit'] ?>" />

                                                        <input type="hidden" name="id_bibit" class="form-control" value="<?= $row['id_bibit'] ?>" />

                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-6 mb-2">
                                                        <label for="nameBasic" class="form-label">Harga</label>
                                                        <input type="text" name="harga" class="form-control" placeholder="Masukkan Harga" required value="<?= $row['harga'] ?>" />
                                                    </div>
                                                    <div class="col-6 mb-2">
                                                        <label for="nameBasic" class="form-label">Stok</label>
                                                        <input type="text" name="stok" class="form-control" placeholder="Masukkan Stok" required value="<?= $row['stok'] ?>" />
                                                    </div>
                                                </div>

                                                <div class="form-check form-switch mb-2">
                                                    <label class="form-check-label">Tersedia <small class="text-danger">*klik jika tersedia</small> </label>
                                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="tersedia" <?= ($row['tersedia'] == 1) ? 'checked' : '' ?> <?= ($row['tersedia'] == 1) ? 'value="1"' : 'value="0"' ?> />
                                                </div>


                                                <div class="row mb-2">
                                                    <div>
                                                        <label for="formFile" class="form-label">Gambar</label>
                                                        <input class="form-control" type="file" name="gambar_bibit" />

                                                        <input class="form-control" type="hidden" name="gambarLama" value="<?= $row['gambar'] ?>" />

                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col">
                                                        <label for="exampleFormControlSelect1" class="form-label">Jenis Ikan</label>
                                                        <select class="form-select" name="jenis_ikan">
                                                            <?php foreach ($jenis_ikan as $rowJenis) { ?>
                                                                <option <?= ($row['id_jenis'] == $rowJenis['id_jenis']) ? 'selected' : '' ?> value="<?= $rowJenis['id_jenis'] ?>"><?= $rowJenis['nama_jenis_ikan'] ?></option>
                                                            <?php } ?>
                                                        </select>
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
                                <div class="modal fade" id="hapusBibit<?= $row['id_bibit'] ?>" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel1">Peringatan!</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <?= form_open('jualbeli/hapus-bibit/' . $row['id_bibit']) ?>
                                                <p>Apakah Anda Yakin Ingin Menghapus Data ?</p>

                                                <input class="form-control" type="hidden" name="gambar_bibit" value="<?= $row['gambar'] ?>" />
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
                            <!-- sampai sini -->

                            <hr>
                            <!-- Basic Pagination -->
                            <?= $pager2->links('getData2', 'data_pagination') ?>
                            <!--/ Basic Pagination -->
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<!-- / Content -->
<?= $this->endSection() ?>