<?php

$versions = $this->version->create();

$statusPage = $this->pageModel->getStatusPublished();
$home = $this->homePageModel->getStatus($_SESSION['page_id']);

if (isset($statusPage['alert']) && $home['set']) {
    echo $statusPage['alert'];
}

if (isset($values)) {
    foreach ($values as $value) {
        echo $value;
    }
}

if (isset($_SESSION['Active']) && $versions['state'] == 0) {
    echo '<ul class="list-inline text-right mt-4">
            ' . $versions['value'] . '
            <li class="list-inline-item" data-toggle="tooltip" data-placement="bottom" title="' . $t->trans($home['page']) . '">
                <a href="page/home-set" id="sk-publish" class="btn ' . $home['btn'] . ' btn-sm" role="button"><i class="fa ' . $home['icon'] . '" aria-hidden="true"></i></a>
            </li>';
    if ($home['set']) {
        echo '<li class="list-inline-item" data-toggle="tooltip" data-placement="bottom" title="' . $t->trans($statusPage['page']) . '">
                <a href="page/publish" id="sk-publish" class="btn ' . $statusPage['btn'] . ' btn-sm" role="button"><i class="fa ' . $statusPage['icon'] . '" aria-hidden="true"></i></a>
            </li>';
    }
    echo '<li class="list-inline-item" data-toggle="tooltip" data-placement="bottom" title="' . $t->trans("Update") . '">
                <a href="page/update" id="sk-update" class="btn btn-outline-info btn-sm" role="button"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
            </li>
            <li class="list-inline-item" data-toggle="tooltip" data-placement="bottom" title="' . $t->trans("Delete") . '">
                <button type="button" id="sk-delete" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#confirmDelete">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                </button>
            </li>
        </ul>';
} else if (isset($_SESSION['Active']) && $versions['state'] > 0) {
    echo '<ul class="list-inline text-right mt-4">
            <li class="list-inline-item" data-toggle="tooltip" data-placement="bottom" title="' . $t->trans($home['page']) . '">
                <a href="page/home-set" id="sk-publish" class="btn ' . $home['btn'] . ' btn-sm" role="button"><i class="fa ' . $home['icon'] . '" aria-hidden="true"></i></a>
            </li>';
    if ($home['set']) {
        echo '<li class="list-inline-item" data-toggle="tooltip" data-placement="bottom" title="' . $t->trans($statusPage['page']) . '">
                <a href="page/publish" id="sk-publish" class="btn ' . $statusPage['btn'] . ' btn-sm" role="button"><i class="fa ' . $statusPage['icon'] . '" aria-hidden="true"></i></a>
            </li>';
    }
    echo '<li class="list-inline-item" data-toggle="tooltip" data-placement="bottom" title="' . $t->trans("Update") . '">
                <a href="page/update" id="sk-update" class="btn btn-outline-info btn-sm" role="button"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
            </li>
            <li class="list-inline-item" data-toggle="tooltip" data-placement="bottom" title="' . $t->trans("Delete") . '">
                <button type="button" id="sk-delete" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#confirmDelete">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                </button>
            </li>
        </ul>';
    echo $versions['value'];
}

(isset($_SESSION['Active'])) ? $topics = $this->pageModel->getUniqTopics() : $topics = $this->pageModel->getUniqPublishedTopics();
if (!is_null($topics)) {
    if (!empty($topics)) {
        $allpages = array();
        foreach ($topics as $topic) {
            (isset($_SESSION['Active'])) ? $pages = $this->pageModel->getPagesByTopic($topic) : $pages = $this->pageModel->getPublishedPagesByTopic($topic);
            if ($pages !== false) $allpages = array_merge($allpages, $pages);
        }
    }
    if (!empty($allpages)) {
        $x = 0;
        $i = 0;
        foreach ($allpages as $page) {
            if ($page['id'] == $_SESSION['page_id']) {
                $i = $x;
            }
            $x++;
        }

        $p = $i - 1;
        $n = $i + 1;

        ($p < 0) ? $p = $x - 1 : $p = $p;
        ($n > $x - 1) ? $n = 0 : $n = $n;

        $prev = $allpages[$p]['slug'];
        $prevPage = $allpages[$p]['filename'];
        $next = $allpages[$n]['slug'];
        $nextPage = $allpages[$n]['filename'];
    }
}
?>

<?php if (isset($next) && isset($nextPage) && $x > 1) : ?>
    <div class="mt4">
        <?php if (isset($next) && isset($nextPage) && $x > 1 && $x <= 2) : ?>
            <nav arialabel="pagination">
                <ul class="pagination justify-content-center">
                <?php else : ?>
                    <nav arialabel="pagination d-flex">
                        <ul class="pagination">
                        <?php endif; ?>

                        <?php if (isset($next) && isset($nextPage) && $x > 1 && $x <= 2) : ?>
                            <li class="page-item">
                                <a class="page-link text-muted" href="<?= 'page/' . $next ?>"><?= $nextPage ?></a>
                            </li>
                        <?php endif; ?>

                        <?php if (isset($prev) && isset($prevPage) && $x > 2) : ?>
                            <li class="page-item p-1">
                                <a class="page-link text-muted" href="<?= 'page/' . $prev ?>"><i class="fa fa-angle-double-left" ariahidden="true"></i> <?= $prevPage ?></a>
                            </li>
                        <?php endif; ?>

                        <?php if (isset($next) && isset($nextPage) && $x > 2) : ?>
                            <li class="page-item ml-auto p-1">
                                <a class="page-link text-muted" href="<?= 'page/' . $next ?>"><?= $nextPage ?> <i class="fa fa-angle-double-right" ariahidden="true"></i></a>
                            </li>
                        <?php endif; ?>

                        </ul>
                    </nav>
    </div>
<?php endif; ?>

<!-- Modal confirm delete -->
<div class="modal" id="confirmDelete">
    <div class="modal-dialog">
        <div class="modal-content shadow">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title"><?= $t->trans('Warning'); ?></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <?= $t->trans('Confirm delete?'); ?>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <a href="page/delete" class="btn btn-success" role="button"><?= $t->trans('Yes'); ?></a>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><?= $t->trans('No'); ?></button>
            </div>

        </div>
    </div>
</div>