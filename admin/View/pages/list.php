<?php $this->theme->header(); ?>

<main>
    <div class="container">
        <div class="row">
            <div class="col page-title">
                <h3>
                    Pages
                    <a href="/admin/pages/add"><i class="icon-plus icons"></i></a>
                </h3>
            </div>
        </div>

        <table class="table">
            <thead>
            <tr>
                <th>№</th>
                <th>Title</th>
                <th>Date</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($pages as $i => $page): ?>
                <tr>
                    <th scope="row"><?= ++$i ?></th>
                    <td><a href="/admin/pages/edit/<?= $page->id ?>"> <?= $page->title ?></a></td>
                    <td><?= $page->date ?></td>
                    <td>
                        <a href="/admin/pages/remove/<?= $page->id ?>" class="icon-close" aria-label="Close">
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>

<?php $this->theme->footer(); ?>
