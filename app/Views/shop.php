<?= $this->extend('template_home/index') ?>

<?= $this->section('content') ?>
<div class="container py-5">
    <div class="row">

        <!-- <div class="col-lg-3">
            <h1 class="h2 pb-4">Kategori</h1>
            <ul class="list-unstyled templatemo-accordion">
                <?php
                // foreach ($jenis_ikan as $row) { 
                ?>
                    <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                        <?php
                        // echo $row['nama_jenis_ikan'] 
                        ?>
                    </a>
                <?php
                // } 
                ?>
            </ul>
        </div> -->

        <div class="col-lg-12">
            <!-- <div class="row"> -->
            <div class="nav-align-top mb-4">
                <ul class="nav nav-pills mb-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" role="tab" data-bs-toggle="tab" href="#navs-pills-top-home" aria-controls="navs-pills-top-home" aria-selected="true">
                            Jual Ikan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" role="tab" data-bs-toggle="tab" href="#navs-pills-top-profile" aria-controls="navs-pills-top-profile" aria-selected="false">
                            Jual Bibit Ikan
                        </a>
                    </li>

                </ul>
                <!-- <div class="col-md-6">
                        <p>Jual Ikan</p>
                    </div>
                    <div class="col-md-6 pb-4">
                        <div class="d-flex">
                            <input class="form-control" type="text" placeholder="Search">
                            </input>
                        </div>
                    </div> -->
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="navs-pills-top-home" role="tabpanel">
                        <div class="row">
                            <?php
                            foreach ($ikan as $row) {
                            ?>
                                <div class="col-md-4">
                                    <div class="card mb-4 product-wap rounded-0">
                                        <div class="card rounded-0">
                                            <img class="card-img rounded-0 img-fluid" src="<?= base_url('uploads/' . $row['gambar']) ?>">
                                            <!-- <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                                <ul class="list-unstyled">
                                                    <li><a class="btn btn-success text-white" href="shop-single.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="far fa-eye"></i></a></li>
                                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="fas fa-cart-plus"></i></a></li>
                                                </ul>
                                            </div> -->
                                        </div>
                                        <div class="card-body">
                                            <a href="shop-single.html" class="h3 text-decoration-none"><?= $row['nama_ikan'] ?></a>

                                            <p><?= $row['stok'] ?></p>
                                            <p><?= $row['tersedia'] ?></p>

                                            <p class="text-center mb-0"><?= $row['harga'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                        <?= $pager_ikan->links('ikan', 'data_pagination') ?>
                        

                    </div>

                    <div class="tab-pane fade show" id="navs-pills-top-profile" role="tabpanel">
                        <div class="row">
                            <?php
                            foreach ($bibit as $row) {
                            ?>
                                <div class="col-md-4">
                                    <div class="card mb-4 product-wap rounded-0">
                                        <div class="card rounded-0">
                                            <img class="card-img rounded-0 img-fluid" src="<?= base_url('uploads/' . $row['gambar']) ?>">
                                            <!-- <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                                <ul class="list-unstyled">
                                                    <li><a class="btn btn-success text-white" href="shop-single.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="far fa-eye"></i></a></li>
                                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="fas fa-cart-plus"></i></a></li>
                                                </ul>
                                            </div> -->
                                        </div>
                                        <div class="card-body">
                                            <a href="shop-single.html" class="h3 text-decoration-none"><?= $row['nama_bibit'] ?></a>

                                            <p><?= $row['stok'] ?></p>
                                            <p><?= $row['tersedia'] ?></p>

                                            <p class="text-center mb-0"><?= $row['harga'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                        <?= $pager_bibit->links('bibit', 'data_pagination') ?>
                    </div>
                </div>
            </div>






            <!-- </div> -->

        </div>
    </div>
    <!-- End Content -->
</div>
</a>

<?= $this->endSection() ?>