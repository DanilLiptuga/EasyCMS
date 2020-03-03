<?php $this->theme->header(); ?>

<main>
    <div class="container">
        <div class="row">
            <div class="col page-title">
                <h3>
                    Posts
                    <a href="/admin/posts/add"><i class="icon-plus icons"></i></a>
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
            <?php foreach($posts as $i => $post): ?>
                <tr>
                    <th scope="row"><?= ++$i ?></th>
                    <td><a href="/admin/posts/edit/<?= $post->id ?>"> <?= $post->title ?></a></td>
                    <td><?= date('Y-m-d', strtotime($post->date)); ?></td>
                    <td>
                        <a href="/admin/posts/remove/<?= $post->id ?>" class="icon-close" aria-label="Close">
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>

<?php $this->theme->footer(); ?>
