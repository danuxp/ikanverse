<!-- Basic Pagination -->
<!-- <nav aria-label="Page navigation">
    <ul class="pagination justify-content-center">
        
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
      
    </ul>
</nav> -->
<!--/ Basic Pagination -->

<?php $pager->setSurroundCount(2) ?>

<nav aria-label="Page navigation">
    <ul class="pagination justify-content-center">
        <?php if ($pager->hasPrevious()) : ?>
            <li class="page-item first">
                <a class="page-link" href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?>">
                    <span aria-hidden="true">
                        <?= lang('Pager.first') ?>
                    </span>

                </a>
            </li>
            <li class="page-item prev">
                <a class="page-link" href="<?= $pager->getPrevious() ?>" aria-label="<?= lang('Pager.previous') ?>">
                    <span aria-hidden="true">
                        <?= lang('Pager.previous') ?>
                    </span>
                </a>
            </li>
        <?php endif ?>

        <?php foreach ($pager->links() as $link) : ?>
            <li class="page-item <?= $link['active'] ? 'active' : '' ?>">
                <a class="page-link" href="<?= $link['uri'] ?>">
                    <?= $link['title'] ?>
                </a>
            </li>
        <?php endforeach ?>

        <?php if ($pager->hasNext()) : ?>
            <li class="page-item next">
                <a class="page-link" href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>">
                    <span aria-hidden="true"><?= lang('Pager.next') ?></span>
                </a>
            </li>
            <li class="page-item last">
                <a class="page-link" href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>">
                    <span aria-hidden="true"><?= lang('Pager.last') ?></span>
                </a>
            </li>
        <?php endif ?>
    </ul>
</nav>