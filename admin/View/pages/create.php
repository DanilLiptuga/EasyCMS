<?php $this->theme->header(); ?>

    <main>
        <div class="container">
            <div class="row">
                <div class="col page-title">
                    <h3>Create page</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-9">
                    <form id="formPage">
                        <div class="form-group">
                            <label for="formTitle">Title</label>
                            <input type="text" name="title" class="form-control" id="formTitle" placeholder="Title page...">
                        </div>
                        <div class="form-group">
                            <label for="editor">Content</label>
                            <textarea name="content" id="editor" class="form-control"></textarea>
                        </div>
                            <div class="form-group">
                                <label for="formTemplate">
                                    Template
                                </label>
                                    <select name="Template" class="form-control" id="formTemplate">
                                        <option selected value="Default">Default</option>
                                        <?php
                                        $dir = ROOT_PATH.$this->theme->path.'templates/';
                                        if (is_dir($dir)) {
                                            if ($dh = opendir($dir)) {
                                                while (($file = readdir($dh)) !== false) {
                                                    if (filetype($dir . $file) == 'file'){
                                                        $fileName = basename($this->theme->path.'templates/'.$file, ".php").PHP_EOL;?>
                                                        <option value="<?= $fileName ?>"><?= $fileName ?></option>
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
                            <input type="text" name="link" class="form-control" id="formLink" placeholder="For example: about">
                        </div>
                    </form>
                </div>
                <div class="col-3">
                    <div>
                        <p>Publish this page</p>
                        <button type="submit" class="btn btn-primary" onclick="page.add()">
                            Publish
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php $this->theme->footer(); ?>