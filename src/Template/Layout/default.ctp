<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Pengalaman berbelanja terbaik di Indonesia">
    <meta name="author" content="PT. Zolaku | Zolaku Indonesia">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="width=1200" name="viewport">

    <meta property="og:url" content="https://zolaku.com"/>
    <meta property="og:type" content="website"/>

    <meta property="og:title" content="Zolaku | Pengalaman berbelanja terbaik di Indonesia"/>
    <meta property="og:description" content="Pengalaman berbelanja terbaik di Indonesia"/>
    <meta property="og:image" content="https://zolaku.com/images/logo-wide.png"/>

    <link rel="icon" href="images/png/logo/favicon.png">

    <title>ZOLAKU | Pengalaman berbelanja terbaik di Indonesia</title>

    <!-- mobile screen -->
    <link href="https://m.zolaku.com/" media="only screen and (max-width: 640px)" rel="alternate">

    <!-- css link vendor -->

    <?= $this->Html->css([
        '/scripts/css-vendor/blockbox',
        '/scripts/vendor/Ionicons/css/ionicons',
        '/scripts/vendor/owl.carousel/owl.carousel',
        '/scripts/vendor/perfect-scrollbar/css/perfect-scrollbar',
        '/scripts/vendor/swiper-js/css/swiper',
    ]); ?>

    <!-- fontawesome link -->
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- css link custom -->
    <?= $this->Html->css([
    '/scripts/css-custom/zolaku-overides',
    '/scripts/css-custom/zolaku-pages',
    '/scripts/css-custom/zolaku-media-query'
    ]); ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>


<body class="zolaku-app">
<!-- start : headpanel -->
<div class="c-headpanel c-headpanel--shadow u-pos-fixed--top z-index-100">
    <!-- navbar top -->
    <div class="u-bg--white">
        <div class="o-container c-navbar-faq">
            <!-- left navigation -->
            <nav class="c-nav c-nav--inline c-nav--dark o-flex o-align-items--center">
                <a href="#" class="c-nav--link c-separator">
                    <img src="<?= $this->Url->build('/images/png/logo/logo-wide.png'); ?>" width="110" alt="logo zolaku">
                </a>
                <a href="contact-us.html" class="c-nav--link u-mrg-t--5">Kontak Kami</a>
            </nav>
            <!-- left navigation -->

        </div>
    </div>
    <!-- navbar top -->
</div>
<!-- end : headpanel -->


<!-- start : banner -->
<div class="o-container-wrapper l-banner-faq">
    <div class="u-pos-relative u-bg--soft-red">
        <?= $this->element('Partials/search'); ?>
    </div>
</div>
<!-- end : banner -->


<!-- start : main content -->
<div class="o-container-wrapper u-pad-all--30">
    <?= $this->fetch('content') ?>
</div>
<!-- end : main content -->


<!-- start : footer -->
<div class="u-pos-relative">
    <div class="o-container-wrapper u-pad-v--20 bd-t">
        <div class="o-container">

            <?= $this->element('Partials/footer'); ?>

        </div>
    </div>
</div>
<!-- start : footer -->


<!-- start : javascript vendor -->
<?= $this->Html->script([
'/scripts/vendor/jquery/jquery',
'/scripts/vendor/popper.js/popper',
'/scripts/vendor/bootstrap/bootstrap',
'/scripts/vendor/owl.carousel/owl.carousel',
'/scripts/vendor/perfect-scrollbar/js/perfect-scrollbar.jquery',
'/scripts/vendor/swiper-js/js/swiper',
]); ?>
<!-- end : javascript vendor -->
</body>
</html>