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

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Jual Beli /</span> Bibit </h4>
    <div class="row">
        <div class="col-md-12">
            <div class="nav-align-top">
                <ul class="nav nav-pills mb-3" role="tablist">
                    <li class="nav-item">
                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-home" aria-controls="navs-pills-top-home" aria-selected="true">
                            Jual Bibit
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-profile" aria-controls="navs-pills-top-profile" aria-selected="false">
                            Jual Ikan Dewasa
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="navs-pills-top-home" role="tabpanel">
                        <?php if (session()->getFlashData('pesan')) : ?>
                            <div class="alert alert-success alert-dismissible alert-notif" role="alert">
                                <?= session()->getFlashData('pesan'); ?>
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
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Ikan Koi</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Ikan Hias</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <!-- loopingnya datanya disini -->
                            <?php
                            foreach ($getData as $row) {
                            ?>
                                <div class="col-md-4 mb-4">
                                    <div class="card h-100">
                                        <img class="card-img-top" src="../assets/img/elements/IkanChanna.jpg" alt="Card image cap" />
                                        <div class="card-body">

                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">
                                                This is a longer card with supporting text below as a natural lead-in to additional
                                                content.
                                                This content is a little bit longer.
                                            </p>
                                        </div>

                                        <div class="card-body">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalScrollable">
                                                Selengkapnya
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- sampai sini -->
                            <?php } ?>

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
                    <div class="tab-pane fade" id="navs-pills-top-profile" role="tabpanel">
                        <div class="demo-inline-spacing mb-4">
                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalTambah">
                                <i class="bx bx-plus"></i> Tambah
                            </button>

                            <div class="btn-group" id="dropdown-icon-demo">
                                <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bx bx-filter-alt"></i> Filter
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Ikan Koi</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Ikan Hias</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <!-- loopingnya datanya disini -->
                            <div class="col-md-4 mb-4">
                                <div class="card h-100">
                                    <img class="card-img-top" src="../assets/img/elements/IkanChanna.jpg" alt="Card image cap" />
                                    <div class="card-body">

                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">
                                            This is a longer card with supporting text below as a natural lead-in to additional
                                            content.
                                            This content is a little bit longer.
                                        </p>
                                    </div>

                                    <div class="card-body">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalScrollable">
                                            Selengkapnya
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- sampai sini -->

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

        </div>
    </div>
</div>
<!-- / Content -->
<?= $this->endSection() ?>