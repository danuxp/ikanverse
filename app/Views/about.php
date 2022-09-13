<?= $this->extend('template_home/index') ?>

<?= $this->section('content') ?>
<section class="bg-success py-5">
    <div class="container">
        <div class="row align-items-center py-5">
            <div class="col-md-12 text-white">
                <h1>Tentang Kami</h1>
                <p>
                    Ikan verse merupakan situs jual beli ikan dan hasil laut online. Kami memberikan daftar komoditas ikan dan hasil laut terlengkap dengan harga yang terjangkau untuk masyarakat. Untuk saat ini, kami melayani pembelian dalam jumlah besar (grosir).

                </p>
            </div>
            <!-- <div class="col-md-4">
                <img src="assets/img/about-hero.svg" alt="About Hero">
            </div> -->
        </div>
    </div>
</section>
<!-- Close Banner -->

<!-- Start Section -->
<section class="container py-5">
    <div class="row text-center pt-5 pb-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Pelayanan Kami</h1>
            <p>
                Kami akan memberikan pelayanan sebaik mungkin untuk Anda
            </p>
        </div>
    </div>
    <div class="row">

        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5 services-icon-wap shadow">
                <div class="h1 text-success text-center"><i class="fa fa-truck fa-lg"></i></div>
                <h2 class="h5 mt-4 text-center">Delivery Services</h2>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5 services-icon-wap shadow">
                <div class="h1 text-success text-center"><i class="fas fa-exchange-alt"></i></div>
                <h2 class="h5 mt-4 text-center">Shipping & Return</h2>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5 services-icon-wap shadow">
                <div class="h1 text-success text-center"><i class="fa fa-percent"></i></div>
                <h2 class="h5 mt-4 text-center">Promotion</h2>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5 services-icon-wap shadow">
                <div class="h1 text-success text-center"><i class="fa fa-user"></i></div>
                <h2 class="h5 mt-4 text-center">24 Hours Service</h2>
            </div>
        </div>
    </div>
</section>
<!-- End Section -->
<?= $this->endSection() ?>