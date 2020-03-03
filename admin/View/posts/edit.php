<?php $this->theme->header(); ?>

    <main>
        <div class="container">
            <div class="row">
                <div class="col page-title">
                    <h3>Edit post</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-9">
                    <form id="formPage">
                        <div class="form-group">
                            <label for="formTitle">Title</label>
                            <input type="text" name="title" class="form-control" id="formTitle" placeholder="Title post..." value="<?= $post->title ?>">
                        </div>
                        <div class="form-group">
                            <label for="formDescription">Description</label>
                            <input type="text" name="description" class="form-control" id="formDescription" placeholder="Description of post..." value="<?= $post->description ?>">
                        </div>
                        <div class="form-group">
                            <label for="editor">Content</label>
                            <textarea name="content" id="editor" class="form-control"><?= $post->content ?></textarea>
                        </div>
                        <div class="form-group">
                            <select name="category" id="category" class="mdb-select colorful-select dropdown-primary md-form" multiple searchable="Search here..">
                                <option value="" disabled selected>Choose categorie</option>
                                <?php foreach ($categories as $category): ?>
                                    <option <?php if (strpos($post->category, $category->id) !== false) echo 'selected';?> value="<?= $category->id; ?>"><?= $category->name; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <label class="mdb-main-label">Category</label>
                            <button onclick="post.addCategory()" type="button" class="btn-save btn btn-primary btn-sm">Create category</button>
                            <button type="button" class="btn-save btn btn-primary btn-sm">Save</button>
                        </div>
                        <div class="form-group">
                            <label for="file">Image</label>
                            <input accept="image/x-png,image/gif,image/jpeg" type="file" id="file" class="inputfile" name="file" aria-label="File browser example"/>
                            <label for="file">Choose a file</label>
                            <div id="list">
                                <span>
    <img class="thumb" src="<?= $post->image ?>"/>
                                </span>
                            </div>

                            <script>
                                function handleFileSelect(evt) {
                                    var files = evt.target.files; // FileList object

                                    // Loop through the FileList and render image files as thumbnails.
                                    for (var i = 0, f; f = files[i]; i++) {

                                        // Only process image files.
                                        if (!f.type.match('image.*')) {
                                            continue;
                                        }

                                        var reader = new FileReader();

                                        // Closure to capture the file information.
                                        reader.onload = (function(theFile) {
                                            return function(e) {
                                                // Render thumbnail.
                                                var span = document.createElement('span');
                                                span.innerHTML = ['<img class="thumb" src="', e.target.result,
                                                    '" title="', escape(theFile.name), '"/>'].join('');
                                                document.getElementById('list').innerHTML = span.innerHTML;
                                                //document.querySelector('.inputfile + label').classList = 'fade';
                                            };
                                        })(f);

                                        // Read in the image file as a data URL.
                                        reader.readAsDataURL(f);
                                    }
                                }

                                document.getElementById('file').addEventListener('change', handleFileSelect, false);
                            </script>
                        </div>
                    </form>
                </div>
                <div class="col-3">
                    <div class="right-col-block">
                        <p>Edit this post</p>
                        <button type="submit" class="btn btn-primary" onclick="post.edit(<?= $post->id ?>)">
                            Update
                        </button>
                    </div>
                    <div class="right-col-block">
                        <p>Check this post: <a href="/post/<?= $post->id ?>">This post</a></p>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php $this->theme->footer(); ?>