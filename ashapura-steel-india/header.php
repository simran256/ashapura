<?php
include('conn.php');
if (isset($_GET['alias'])) {
    $url = $_GET['alias'];
}
$arr = explode("/", $_SERVER['REQUEST_URI']);
$position = count($arr) - 2;
if ($arr[$position] == 'product' || $arr[$position] == 'products') {
    $header = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM cat_prod WHERE ct_pd_url='$url'"));
    $title = $header['ct_pd_title'];
    $description = $header['ct_pd_mt_ds'];
    $page_keyword = $header['ct_pd_ky'];
} else {
    $addr = $arr[$position];
    if ($addr == 'bestarch-interior') {
        $header = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM cms_menu WHERE page_url='home'"));
        $title = $header['page_title'];
        $description = $header['message'];
        $page_keyword = $header['page_keyword'];
    } else {
        $header = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM cms_menu WHERE page_url='$addr'"));
        $title = $header['page_title'];
        $description = $header['message'];
        $page_keyword = $header['page_keyword'];
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <meta name="description" content="<?= $description ?>" />
    <meta name="author" content="<?= $theme['company_name'] ?>">
    <link rel="canonical" href="<?= $page_keyword ?>" />
    <link href="<?= $site ?>css/bootstrap.css" rel="stylesheet">
    <link href="<?= $site ?>css/revolution-slider.css" rel="stylesheet">
    <link href="<?= $site ?>css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?= $site ?>admin/uploads/fav_icon_image/<?= $logo['fav_icon_image'] ?>" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="Cache-control" content="public" max-age="31557600" content-encoding="gzip">
    <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
    <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
    <link href="<?= $site ?>css/responsive.css" rel="stylesheet">
</head>
<body>
<div class="page-wrapper">

<header class="main-header header-style-one">
    <div class="header-top">
        <div class="auto-container clearfix">
            <div class="top-left pull-left">
                <ul class="links-nav clearfix">
                    <li><a href="tel:+91<?= $theme['mobile'] ?>"><span class="fa fa-mobile"></span> +91 <?= $theme['mobile'] ?></a></li>
                    <li><a href="mailto:<?= $theme['email'] ?>"><span class="fa fa-envelope"></span> <?= $theme['email'] ?></a></li>
                </ul>
            </div>
            <div class="top-right pull-right">
                <div class="language-switcher">
                    <div id="google_translate_element" class="form-currency top-select">
                        <script type="text/javascript">
                            function googleTranslateElementInit() {
                                new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                            }
                        </script>
                        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                    </div>
                </div>
                <div class="social-icon">
                    <a href="<?= $theme['facebook_link'] ?>"><span class="fa fa-facebook"></span> </a>
                    <a href="<?= $theme['twittter_link'] ?>"><span class="fa fa-twitter"></span> </a>
                    <a href="<?= $theme['linkedin_link'] ?>"><span class="fa fa-linkedin"></span></a>
                    <a href="<?= $theme['instagram_link'] ?>"><span class="fa fa-instagram"></span></a>
                    <a href="<?= $theme['youtube_link'] ?>"><span class="fa fa-youtube"></span></a>
                </div>
            </div>
        </div>
    </div>

    <div class="header-lower">
        <div class="auto-container">
            <div class="nav-outer clearfix">
                <nav class="main-menu">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="logo"><a href="<?= $site ?>"><img src="<?= $site ?>admin/uploads/logo/<?= $logo['logo_image'] ?>" alt="" title=""></a></div>
                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix">
                            <li><a href="<?= $site ?>">Home</a></li>
                            <li><a href="<?= $site ?>about-us.php">About Us</a></li>
                            <li class="dropdown"><a href="<?= $site ?>product/">Our Products</a>
                                <ul>
                                    <?php
                                    $categories = mysqli_query($conn, "SELECT * FROM cat_prod WHERE sub_category_id='0'");
                                    while ($category = mysqli_fetch_assoc($categories)) {
                                        $cat_url = $category['ct_pd_url'];
                                        $cat_name = $category['ct_pd_name'];
                                        $products = mysqli_query($conn, "SELECT * FROM cat_prod WHERE sub_category_id='" . $category['category_id'] . "' ");
                                        if (mysqli_num_rows($products) > 0) {
                                            echo "<li class='dropdown'><a href='{$site}services.php?category={$cat_url}'>{$cat_name}</a><ul>";
                                            while ($product = mysqli_fetch_assoc($products)) {
                                                $prod_url = $product['ct_pd_url'];
                                                echo "<li><a href='{$site}service-details.php?product={$prod_url}'>{$product['ct_pd_name']}</a></li>";
                                            }
                                            echo "</ul></li>";
                                        } else {
                                            echo "<li><a href='{$site}services.php?category={$cat_url}'>{$cat_name}</a></li>";
                                        }
                                    }
                                    ?>
                                </ul>
                            </li>
                            <li><a href="<?= $site ?>our-gallery.php">Our Gallery</a></li>
                            <li><a href="<?= $site ?>contact-us.php">Contact Us</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
