<div class="col-md-4 content-right">
    <?php if (isset($recentPosts[0])){ ?>
    <div class="recent">
        <h3>RECENT POSTS</h3>
        <ul>
            <?php foreach ($recentPosts as $post): ?>
            <li><a href="/post/<?= $post->id; ?>"><?= $post->title; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <?php } ?>
    <?php if (isset($recentComments[0])){ ?>
    <div class="comments">
        <h3>RECENT COMMENTS</h3>
        <ul>
            <?php foreach ($recentComments as $comment): ;?>

                <li><?= $comment->author ?> on <a href="/post/<?= $comment->post; ?>"><?= $this->load->model('posts')->getPost($comment->post)->title; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="clearfix"></div>
    <?php } ?>
    <?php if (isset($categories[0])){ ?>
    <div class="categories">
        <h3>CATEGORIES</h3>
        <ul>
            <?php foreach ($categories as $category): ?>
                <li><a href="/category/<?= $category->id; ?>"><?= $category->name; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="clearfix"></div>
    <?php } ?>
</div>