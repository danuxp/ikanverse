<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="<?= base_url() ?>/assets/vendor/libs/jquery/jquery.js"></script>
<script src="<?= base_url() ?>/assets/vendor/libs/popper/popper.js"></script>
<script src="<?= base_url() ?>/assets/vendor/js/bootstrap.js"></script>
<script src="<?= base_url() ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="<?= base_url() ?>/assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="<?= base_url() ?>/assets/vendor/libs/apex-charts/apexcharts.js"></script>


<!-- Page JS -->
<script src="<?= base_url() ?>/assets/js/dashboards-analytics.js"></script>
<script src="<?= base_url() ?>/assets/js/ui-modals.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- dataTables -->
<!-- <script src="<?= base_url() ?>/assets/vendor/libs/dataTables/js/jquery_dataTables.js"></script>
<script src="<?= base_url() ?>/assets/vendor/libs/dataTables/js/datatables-bootstrap5.js"></script>
<script src="<?= base_url() ?>/assets/vendor/libs/dataTables/js/datatables.responsive.js"></script>
<script src="<?= base_url() ?>/assets/vendor/libs/dataTables/js/responsive.bootstrap5.js"></script>

<script src="<?= base_url() ?>/assets/vendor/libs/dataTables/js/docs.js"></script>
<script src="<?= base_url() ?>/assets/vendor/libs/dataTables/js/docs-tables-datatables.js"></script> -->

<!-- dataTables -->
<!-- <script src="<?= base_url() ?>/assets/vendor/libs/dataTables/jquery_dataTables.js"></script>
<script src="<?= base_url() ?>/assets/vendor/libs/dataTables/jquery_dataTables.min.js"></script>

<script src="<?= base_url() ?>/assets/vendor/libs/dataTables/datatables-bootstrap5.js"></script>
<script src="<?= base_url() ?>/assets/vendor/libs/dataTables/datatables.responsive.js"></script>
<script src="<?= base_url() ?>/assets/vendor/libs/dataTables/responsive.bootstrap5.js"></script>

<script src="<?= base_url() ?>/assets/vendor/libs/dataTables/docs.js"></script>
<script src="<?= base_url() ?>/assets/vendor/libs/dataTables/docs-tables-datatables.js"></script> -->


<!-- Main JS -->
<script src="<?= base_url() ?>/assets/js/main.js"></script>

<script>
    $(document).ready(function() {
        window.setTimeout(function() {
            $(".alert-notif").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 3500);
    });
</script>
</body>

</html>