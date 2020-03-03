<?php
$this->theme->header();
?>
    <div class="content">
        <div class="container">
            <div class="content-grids">
                <div class="col-md-8 content-main">
                    <div class="content-grid">
                        <?php if(isset($searchResult[0])){ ?>
                        <? foreach ($searchResult as $post) : ?>
                            <div class="content-grid-info">
                                <img src="<?= $post->image; ?>" alt=""/>
                                <div class="post-info">
                                    <h4><a href="/post/<?= $post->id; ?>"><?= $post->title ?></a> <?= $post->date ?></h4>
                                    <p><?= $post->description; ?></p>
                                    <a href="/post/<?= $post->id; ?>"><span></span>READ MORE</a>
                                </div>
                            </div>
                        <? endforeach; }
                        else { ?>
                        No matches were found.
    <?php } ?>
                    </div>
                </div>
                <?php $this->theme->sidebar();  ?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
<?php
$this->theme->footer();