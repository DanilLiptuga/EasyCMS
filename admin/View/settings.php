<?php $this->theme->header();?>
    <main>
        <div class="container">
            <div class="row">
                <div class="col page-title">
                    <h3>Settings</h3>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <form method="post">
                        <?php foreach($settings as $setting):
                        if ($setting->name == 'Language'){ ?>
                            <div class="form-group row">
                                <label for="formLangSite" class="col-2 col-form-label">
                                    <?= $setting->name ?>
                                </label>
                                <div class="col-10">
                                    <select name="<?= $setting->id ?>" class="form-control" id="formLangSite">
                                        <?php
                                        $dir = ROOT_PATH."/admin/Config/Language/";
                                        if (is_dir($dir)) {
                                            if ($dh = opendir($dir)) {
                                                while (($file = readdir($dh)) !== false) {
                                                    if (filetype($dir . $file) == 'file'){
                                                        $fileName = basename("/admin/Config/Language/".$file, ".php").PHP_EOL;?>
                                                        <option <?php if ($setting->value == $fileName) echo 'selected'; ?> value="<?= $fileName ?>"><?= $fileName ?></option>
                                                    <?php }
                                                }
                                                closedir($dh);
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        <?php }
                        elseif ($setting->name == 'Theme') { ?>
                            <div class="form-group row">
                                <label for="formLangSite" class="col-2 col-form-label">
                                    <?= $setting->name ?>
                                </label>
                                <div class="col-10">
                                    <select name="<?= $setting->id ?>" class="form-control" id="formLangSite">
                                        <?php
                                        $dir = ROOT_PATH."/content/themes/";
                                        if (is_dir($dir)) {
                                            if ($dh = opendir($dir)) {
                                                while (($file = readdir($dh)) !== false) {
                                                    if ($file != '.' && $file != '..'){
                                                    if (filetype($dir . $file) == 'dir'){ ?>
                                                        <option <?php if ($setting->value == $file) echo 'selected'; ?> value="<?= $file ?>"><?= $file ?></option>
                                                    <?php }}
                                                }
                                                closedir($dh);
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        <?php }
                            else{ ?>
                            <div class="form-group row">
                                <label for="formNameSite" class="col-2 col-form-label">
                                    <?= $setting->name ?>
                                </label>
                                <div class="col-10">
                                    <input class="form-control" type="text" name="<?= $setting->id ?>" value="<?= $setting->value ?>" id="formNameSite">
                                </div>
                            </div>
                        <?php }
                        endforeach; ?>

                        <button type="submit" name="save_but" class="btn btn-primary">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

<?php $this->theme->footer(); ?>