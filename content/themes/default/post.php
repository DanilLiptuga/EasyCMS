<?php
$this->theme->header();
?>
    <div class="single">
        <div class="container">
            <div class="col-md-8 single-main">
                <div class="single-grid">
                    <img src="<?= $post->image; ?>" alt=""/>
                    <p><?= $post->content; ?></p>
                </div>
                <?php if (!!$comments){?>
                <ul class="comment-list">
                    <?php foreach ($comments as $comment): ?>
                    <h5 class="post-author_head">Written by <a href="#" title="Posts by admin" rel="author"><?= $comment->author; ?></a></h5>
                        <div class="desc">
                            <p><?= $comment->text; ?></p>
                        </div>
                        <hr>
                        <div class="clearfix"></div>
                    <?php endforeach; ?>
                </ul>
                <?php } ?>
                <div class="content-form">
                    <h3>Leave a comment</h3>
                    <form action="/comment/add" method="post">
                        <input name="author" id="comment_author" type="text" placeholder="Name" required/>
                        <textarea name="text" id="comment_text" placeholder="Message"></textarea>
                        <input type="hidden" id="post_id" name="post_id" value="<?= $post->id; ?>">
                        <input type="submit" value="SEND"/>
                    </form>
                </div>
            </div>
            <?php $this->theme->sidebar(); ?>
            <div class="clearfix"></div>
        </div>
    </div>
<?php
$this->theme->footer();