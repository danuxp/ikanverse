<?= $this->extend('template/index') ?>

<?= $this->section('content') ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Jual Beli /</span> Cek Harga </h4>

    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-pills flex-column flex-md-row mb-3">
                <li class="nav-item">
                    <a class="nav-link active" href="<?= base_url('bibit') ?>"><i class="bx bx-user me-1"></i> Bibit
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('cekharga') ?>"><i class="bx bx-bell me-1"></i>Cek Harga</a>
                </li>
            </ul>
            <div class="card mb-4">
                <a href="" class="card-header">
                    <button type="button" class="btn btn-sm btn-dark">Tambah</button>
                </a>

                <!-- Grid Card -->
                <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
                    <div class="col">
                        <div class="card h-100">
                            <img class="card-img-top" src="../assets/img/elements/IkanChanna.jpg" alt="Card image cap" />
                            <div class="card-body">
                                <!-- Modal -->
                                <div class="modal fade" id="modalScrollable" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalScrollableTitle">Modal title</h5>
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

                    <div class="col">
                        <div class="card h-100">
                            <img class="card-img-top" src="../assets/img/elements/Channa.jpg" alt="Card image cap" />
                            <div class="card-body">
                                <!-- Modal -->
                                <div class="modal fade" id="modalScrollable" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalScrollableTitle">Modal title</h5>
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
                    <div class="col">
                        <div class="card h-100">
                            <img class="card-img-top" src="../assets/img/elements/Channau.jpg" alt="Card image cap" />
                            <div class="card-body">
                                <!-- Modal -->
                                <div class="modal fade" id="modalScrollable" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalScrollableTitle">Modal title</h5>
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
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    This is a longer card with supporting text below as a natural lead-in to additional
                                    content.
                                </p>
                            </div>
                            <div class="card-body">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalScrollable">
                                    Selengkapnya
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img class="card-img-top" src="../assets/img/elements/toman.jpg" alt="Card image cap" />
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    This is a longer card with supporting text below as a natural lead-in to additional
                                    content.
                                    This content is a little bit longer.
                                </p>
                            </div>
                            <div class="card-body">
                                <!-- Modal -->
                                <div class="modal fade" id="modalScrollable" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalScrollableTitle">Modal title</h5>
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
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalScrollable">
                                        Selengkapnya
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img class="card-img-top" src="../assets/img/elements/barca.jpg" alt="Card image cap" />
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    This is a longer card with supporting text below as a natural lead-in to additional
                                    content.
                                    This content is a little bit longer.
                                </p>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="modalScrollable" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalScrollableTitle">Modal title</h5>
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
                                            <p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                                Close
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="card-body">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalScrollable">
                                    Selengkapnya
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img class="card-img-top" src="../assets/img/elements/a2.jpg" alt="Card image cap" />
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    This is a longer card with supporting text below as a natural lead-in to additional
                                    content.
                                    This content is a little bit longer.
                                </p>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="modalScrollable" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalScrollableTitle">Modal title</h5>
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
                            <div class="card-body">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalScrollable">
                                    Selengkapnya
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- / Content -->
<?= $this->endSection() ?>