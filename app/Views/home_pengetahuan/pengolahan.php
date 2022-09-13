<?= $this->extend('template_home/index') ?>

<?= $this->section('content') ?>
<div class="container-fluid bg-light py-5">
    <div class="col-md-6 m-auto text-center">
        <h1 class="h1">Pengolahan Ikan</h1>
        <p>
            Berbagai macam pengolahan ikan.
        </p>
    </div>

    <?php
    foreach ($olah as $row) {
    ?>
        <div class="col-md-3">
            <div class="accordion-item card">
                <h2 class="accordion-header text-body d-flex justify-content-between" id="accordionIconOne">
                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionIcon-1" aria-controls="accordionIcon-1">
                        <?= $row['nama_ikan'] ?>
                    </button>
                </h2>

                <div id="accordionIcon-1" class="accordion-collapse collapse" data-bs-parent="#accordionIcon">
                    <div class="accordion-body">
                        <?= $row['cara_pengolahan'] ?>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <?= $pager->links('olah', 'data_pagination') ?>

</div>
<?= $this->endSection() ?>