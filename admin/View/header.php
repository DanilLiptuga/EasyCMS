<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Админ-панель</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300">
    <link rel="stylesheet" href="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.13.0/css/mdb.min.css">
    <link rel="stylesheet" type="text/css" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/mdb-plugins-gathered.min.css">
    <!-- Bootstrap core CSS -->
    <link href="/admin/Assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/admin/Assets/css/dashboard.css" rel="stylesheet">

    <!-- simplelineicons for this template -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/admin/Assets/js/plugins/froala/froala_editor.pkgd.min.js"></script>
    <!-- Redactor CSS -->
    <link rel="stylesheet" href="/admin/Assets/js/plugins/redactor/redactor.css">
</head>

<body>
<header>
    <div class="error"><?= $error ?></div>
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/admin">Easy</a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/">
                            <i class="icon-home icons"></i> <?= $this->language->getElement('home') ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/pages">
                            <i class="icon-doc icons"></i> <?= $this->language->getElement('pages') ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/posts">
                            <i class="icon-pencil icons"></i> <?= $this->language->getElement('posts') ?>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="/admin/settings">
                            <i class="icon-equalizer icons"></i> <?= $this->language->getElement('settings') ?>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="right-toolbar">
                <a href="/admin/logout">
                    <i class="icon-logout icons"></i> <?= $this->language->getElement('logout') ?>
                </a>
            </div>
        </div>
    </nav>
</header>