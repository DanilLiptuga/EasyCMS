<?php $this->theme->header(); ?>

    <main>
        <div class="container">
            <div class="row">
                <div class="col page-title">
                    <h3>Edit page</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-9">
                    <form id="formPage">
                        <div class="form-group">
                            <label for="formTitle">Title</label>
                            <input type="text" name="title" class="form-control" id="formTitle" placeholder="Title page..." value="<?= $page->title ?>">
                        </div>
                        <div class="form-group">
                            <label for="editor">Content</label>
                            <textarea name="content" id="editor" class="form-control"><div class="fr-view"><?= $page->content ?></div></textarea>
                        </div>
                        <div class="form-group">
                            <label for="formTemplate">
                                Template
                            </label>
                            <select name="Template" class="form-control" id="formTemplate">
                                <option <?php if(trim($page->Template) == 'Default') echo 'selected'; ?> value="Default">Default</option>
                                <?php
                                echo $page->Template;
                                $dir = ROOT_PATH.$this->theme->path.'templates/';
                                if (is_dir($dir)) {
                                    if ($dh = opendir($dir)) {
                                        while (($file = readdir($dh)) !== false) {
                                            if (filetype($dir . $file) == 'file'){
                                                $fileName = basename($this->theme->path.'templates/'.$file, ".php").PHP_EOL; ?>
                                                <option <?php if(trim($fileName) == trim($page->Template)) echo 'selected'; ?> value="<?= $fileName ?>"><?= $fileName ?></option>
                                            <?php }
                                        }
                                        closedir($dh);
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="formLink">Link</label>
                            <input type="text" name="link" class="form-control" id="formLink" value="<?= $page->link; ?>" placeholder="For example: about">
                        </div>
                    </form>
                </div>
                <div class="col-3">
                    <div class="right-col-block">
                        <p>Edit this page</p>
                        <button type="submit" class="btn btn-primary" onclick="page.edit(<?= $page->id ?>)">
                            Update
                        </button>
                    </div>
                    <div class="right-col-block">
                        <p>Check this page: <a href="/page/<?= $page->link ?>">This page</a></p>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php $this->theme->footer(); ?>