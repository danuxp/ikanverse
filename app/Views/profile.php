<?= $this->extend('template/index') ?>

<?= $this->section('content') ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Profile</h5>
                <div class="card-body">
                    <table>
                        <tr>
                            <td>
                                Nama Perusahaan
                            </td>
                            <td>:</td>
                            <td>
                                <?= (empty($getData['nama_perusahaan'])) ? '' : $getData['nama_perusahaan'] ?>
                            </td> 
                        </tr>


                        <tr>
                            <td>
                                Alamat
                            </td>
                            <td>:</td>
                            <td>

                                <?= (empty($getData['alamat'])) ? '' : $getData['alamat'] ?>
                            </td>
                        </tr>


                        <tr>
                            <td>
                                No Telp
                            </td>
                            <td>:</td>
                            <td>
                                <?= (empty($getData['no_telp'])) ? '' : $getData['no_telp'] ?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Email
                            </td>
                            <td>:</td>
                            <td>

                                <?= (empty($getData['email'])) ? '' : $getData['email'] ?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Instagram
                            </td>
                            <td>:</td>
                            <td>

                                <?= (empty($getData['instagram'])) ? '' : $getData['instagram'] ?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Facebook
                            </td>
                            <td>:</td>
                            <td>

                                <?= (empty($getData['facebook'])) ? '' : $getData['facebook'] ?>
                            </td>
                        </tr>

                    </table>

                    <a href="<?= base_url('setting') ?>" class="btn btn-primary"> Setting </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>