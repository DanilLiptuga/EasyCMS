<!DOCTYPE HTML>
<html>
<head>
    <title>Personal Blog a Blogging Category Flat Bootstarp  Responsive Website Template | Home :: w3layouts</title>
    <link href="<?= $this->path; ?>css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="<?= $this->path; ?>css/style.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="<?= $this->settings->getSetting('Site description')->value; ?>" />
    <meta name="keywords" content="Personal Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design"
    />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!----webfonts---->
    <link href='http://fonts.googleapis.com/css?family=Oswald:100,400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,300italic' rel='stylesheet' type='text/css'>
    <!----//webfonts---->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!--end slider -->
    <!--script-->
    <script type="text/javascript" src="<?= $this->path; ?>js/move-top.js"></script>
    <script type="text/javascript" src="<?= $this->path; ?>js/easing.js"></script>
    <script type="text/javascript" src="<?= $this->path; ?>js/init.js"></script>
    <!--/script-->
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
            });
        });
    </script>
    <!---->

</head>
<body>
<!---header---->
<div class="header">
    <div class="container">
        <div class="logo">
            <div class="logo-wrapper">
            <a href="/">
                <?= $this->settings->getSetting('Site name')->value; ?>
            </a>
            </div>
        </div>
        <!---start-top-nav---->
        <div class="top-menu">
            <div class="search">
                <form action="/search" method="post">
                    <input type="text" name="s" placeholder="" required="">
                    <input type="submit" value=""/>
                </form>
            </div>
            <span class="menu"> </span>
            <ul>
                <li><a href="/">HOME</a></li>
                <li><a href="/page/about">ABOUT</a></li>
                <li><a href="/page/contact">CONTACT</a></li>
                <div class="clearfix"> </div>
            </ul>
        </div>
        <div class="clearfix"></div>
        <script>
            $("span.menu").click(function(){
                $(".top-menu ul").slideToggle("slow" , function(){
                });
            });
        </script>
        <!---//End-top-nav---->
    </div>
</div>
<!--/header-->