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
                <div class="d-flex align-items-start align-items-sm-center gap-4">
                    <img src="../assets/img/avatars/1.png" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                    <div class="button-wrapper">
                        <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Upload new photo</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input type="file" id="upload" class="account-file-input" hidden accept="image/png, image/jpeg" />
                        </label>
                        <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                            <i class="bx bx-reset d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Reset</span>
                        </button>

                        <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <label for="nameBasic" class="form-label">Name</label>
                        <input type="text" id="nameBasic" class="form-control" placeholder="Enter Name" />
                    </div>
                </div>
                <div class="row g-2">
                    <div>
                        <label for="exampleFormControlTextarea1" class="form-label">Textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->


<!-- Modal selengkapnya -->
<div class="modal fade" id="modalScrollable" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalScrollableTitle">Cara Budidaya</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>
                    Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
                    dapibus ac facilisis
                    in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                    vestibulum at eros.
                </p>
                <p>
                    Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                    Vivamus sagittis
                    lacus vel augue laoreet rutrum faucibus dolor auctor.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Close
            </div>
        </div>
    </div>
</div>
<!-- Modal -->


<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Budidaya /</span> Cara Budidaya </h4>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="demo-inline-spacing ms-4 mb-4">
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

                <!-- Grid Card -->
                <div class="row">
                    <!-- loopingnya datanya disini -->
                    <div class="col-md-4 ms-4">
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

                    <div class="col-md-4">
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

                </div>

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