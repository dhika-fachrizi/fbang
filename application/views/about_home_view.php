<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-M6T53D9');
    </script>
    <!-- End Google Tag Manager -->
    <!-- Page Title -->
    <title><?php echo $site_title; ?></title>

    <!-- Page header -->
    <meta charset="utf-8" />
    <meta name="description" content="<?php echo $meta->meta_desc; ?>" />
    <meta name="keywords" content="<?php echo $meta->meta_title; ?>" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width" />
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/slick/slick.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/slick/slick-theme.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('theme/css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('theme/css/style.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('theme/css/style-custome-dhika.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('theme/css/padding-margin.css') ?>" />
    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo base_url('theme/images/' . $icon); ?>">
    <!-- SEO Tag -->
    <meta name="description" content="<?php echo $site_desc; ?>" />
    <link rel="canonical" href="<?php echo site_url(); ?>" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $site_title; ?>" />
    <meta property="og:description" content="<?php echo $site_desc; ?>" />
    <meta property="og:url" content="<?php echo site_url(); ?>" />
    <meta property="og:site_name" content="<?php echo $site_name; ?>" />
    <meta property="og:image" content="<?php echo base_url() . 'theme/images/' . $site_image ?>" />
    <meta property="og:image:secure_url" content="<?php echo base_url() . 'theme/images/' . $site_image ?>" />
    <meta property="og:image:width" content="560" />
    <meta property="og:image:height" content="315" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="<?php echo $site_desc; ?>" />
    <meta name="twitter:title" content="<?php echo $site_title; ?>" />
    <meta name="twitter:site" content="<?php echo $site_twitter; ?>" />
    <meta name="twitter:image" content="<?php echo base_url() . 'theme/images/' . $site_image ?>" />
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/fontawesome/css/all.css' ?>" />
    <!-- End SEO Tag. -->
    <style>
    .mpt-20 {
        padding-top: 20px;
    }

    @media only screen and (max-width: 768px) {

        .mpt-20 {
            padding-top: 0px;
        }
    }
    </style>
</head>

<body class="content-animate" style="letter-spacing: 0px;word-spacing: -1px;">

    <!-- PRELOADER
		==================================================-->
    <div class="page-loader">
        <div class="loader-area"></div>
        <div class="loader font-face1">loading...
        </div>
    </div>
    <!-- PAGE
		==================================================-->
    <div id="top">

        <!-- Navigation panel
			================================================== -->
        <?php echo $header; ?>
        <!-- End Navigation panel -->

        <!-- Main Content
			==================================================-->
        <main class="cd-main-content">

            <!-- HOME SECTION
				================================================== cooked-food.png-->
            <section>
                <div class="container hide-m">
                    <div class="row">
                        <div class="col-sm-12 pt-30 pb-30 pl-0 text-theme-1" style="font-size:15px; font-weight: 500;">
                            Home/<a href=""><u>About Us</u> </a>
                        </div>
                    </div>
                </div>
            </section>
            <section id="homepage" class="home page-section parallax-2 overlay-light-alpha-10">
                <div class="table-content">
                    <div class="table-center-text">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <?php foreach ($slider->result() as $key => $item) : ?>
                                <?php if ($key == 0) : ?>
                                <li data-target="#carouselExampleIndicators" data-slide-to="<?= $key ?>" class="active">
                                </li>
                                <?php else : ?>
                                <li data-target="#carouselExampleIndicators" data-slide-to="<?= $key ?>">
                                </li>
                                <?php endif; ?>
                                <?php endforeach; ?>
                            </ol>
                            <div class="carousel-inner">
                                <?php foreach ($slider->result() as $key => $item) : ?>
                                <div class="carousel-item <?php echo $key == 0 ? 'active' : ''; ?>">
                                    <img class="d-block w-100 img-c"
                                        src="<?php echo base_url() . 'assets/images/' . $item->slider_image; ?>"
                                        alt="First slide">
                                    <div class="carousel-caption d-flex justify-content-start d-flex align-items-center container"
                                        style="height:100%;width:auto;">
                                        <div class="row">
                                            <div class="col-sm-8 title-c text-thema-split-3" style="max-height:141px;">
                                                <?= $item->slider_title ?></div>
                                            <div class="col-sm-4"></div>
                                            <div class="col-sm-8 dec-c text-thema-split-2" style="max-height:50px;">
                                                <?= $item->slider_desc ?></div>
                                            <div class=" col-sm-4 "></div>
                                        </div>
                                        <div class=" row">
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>


                            </div>
                            <a class=" carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container pt-30">
                    <div class="row pb-30 ">
                        <div class="col-md-3 pm-16 text-theme-2 " style="font-size:55px;">
                            <b>About Us</b>
                        </div>
                        <div class="col-md-9 mpt-20">
                            <div class="row">
                                <div class="col-sm-12" style="font-size:15px;">
                                    <p>Foodbang.co.id merupakan chapter kelanjutan dari @JKTFOODBANG di Instagram,
                                        dimana kami ingin mencoba melebarkan sayap ke seluruh Indonesia.</p>
                                    <p>JKTFOODBANG sendiri ditemukan tahun 2014 di Jakarta, dan sampai sekarang tetap
                                        manjadi salah satu food blogger (bukan youtubers yah! :p) dengan followers
                                        terbanyak dan cakupan terluas, mulai dari restoran mewah sampai ke street food
                                        dan UMKM.</p>
                                    <p>Misi </p>
                                    <ul style="list-style-type:disc">
                                        <li>Memberikan teman-teman informasi yang kredibel tentang kuliner di seluruh
                                            Indonesia.</li>
                                        <li>Membantu UMKM F&B dalam menciptakan brand-awareness yang lebih baik lagi di
                                            era digitalisasi ini sehigga dapat bersaing dengan sehat.</li>
                                    </ul>
                                    <p>VISI </p>
                                    <ul style="list-style-type:disc">
                                        <li>Menjadi One Stop Shop Ekosistem yang dapat menyediakan semua kebutuhan F&B
                                            dari hulu sampai ke hilir.</li>
                                    </ul>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </section>

            <section style="background-color:#FFF9EA;">
                <div class="container pt-30 pb-30" style="padding-bottom:30px;">
                    <div class="row">
                        <div class="col-md-3 pm-16 text-theme-2" style="font-size:55px;">
                            <b>Contact Us</b>
                        </div>
                        <div class="col-md-9 mpt-20">
                            <div class="row">
                                <div class="col-sm-12 text-theme-2 pb-20" style="font-size:25px;">
                                    <b>PT. Karya Kuliner Bangsa</b>
                                </div>
                                <div class="col-sm-12 pb-20" style="max-width: 350px;font-size:15px;font-weight: 500;">
                                    <div> Office 8 Tower; Level 18-A
                                        Jl. Jend Sudirman Kav. 52-53
                                        SCBD
                                        Jakarta Selatan

                                    </div>

                                </div>
                                <div class="col-sm-12" style="font-size:15px; font-weight: 500;">
                                    <i class="fas fa-phone pr-10"></i>+6281317755099
                                </div>
                                <div class="col-sm-12" style="font-size:15px; font-weight: 500;">
                                    <i class="fas fa-envelope pr-10"></i>hello@foodbang.co.id
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </section>


            <section class=" pb-30 pt-30 hide-m">
                <div class=" container d-flex justify-content-center">
                    <form class="form-inline" action="<?php echo site_url('subscribe'); ?>" method="post">
                        <div class="row d-flex justify-content-center">

                            <div class="pr-10 text-theme-2 subcribe-text">
                                <i><b>Subscribe
                                        for
                                        more updates!
                                    </b></i>
                            </div>
                            <div class="pr-10"><input class="form-control" style="width:30vw;" type="email" name="email"
                                    placeholder="send your email" required></div>
                            <div class="pr-10 d-flex align-items-end" style="margin:0px;padding:0px;">
                                <button type="submit" class="btn btn-primary"
                                    style="color: black;background-color: #F79D46;border-color: #F79D46;margin:0px;">Subscribe</button>
                            </div>

                        </div>
                        <div>
                            <?php echo $this->session->flashdata('message'); ?>
                        </div>
                    </form>
                </div>
            </section>

            <section class=" pb-30 pt-30 unhide-m">
                <div class=" container d-flex justify-content-center mb-30 mt-30">
                    <form class="form-inline" action="<?php echo site_url('subscribe'); ?>" method="post">
                        <div class="row d-flex justify-content-center">

                            <div class="col-md-12 pr-10 text-theme-2 subcribe-text d-flex justify-content-center"
                                style="font-size:7vw;">
                                <i><b>Subscribe
                                        for
                                        more updates!
                                    </b></i>
                            </div>
                            <div class="col-7 pr-10"><input class="form-control" type="email" name="email"
                                    placeholder="send your email" required></div>
                            <div class="col-5 prm-30 d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary"
                                    style="color: black;background-color: #F79D46;border-color: #F79D46;margin:0px;">Subscribe</button>
                            </div>

                        </div>
                        <div>
                            <?php echo $this->session->flashdata('message'); ?>
                        </div>
                    </form>
                </div>
            </section>


            <!-- FOOTER
				================================================== -->
            <?php echo $footer; ?>

        </main>

    </div>


    <!-- JAVASCRIPT
		==================================================-->
    <script src="<?php echo base_url('theme/js/jquery-2.2.4.min.js') ?>"></script>
    <script src="<?php echo base_url('theme/js/jquery.easing.min.js') ?>"></script>
    <script src="<?php echo base_url('theme/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('theme/js/waypoints.min.js') ?>"></script>
    <script src="<?php echo base_url('theme/js/jquery.scrollTo.min.js') ?>"></script>
    <script src="<?php echo base_url('theme/js/jquery.localScroll.min.js') ?>"></script>
    <script src="<?php echo base_url('theme/js/jquery.viewport.mini.js') ?>"></script>
    <script src="<?php echo base_url('theme/js/jquery.sticky.js') ?>"></script>
    <script src="<?php echo base_url('theme/js/jquery.fitvids.js') ?>"></script>
    <script src="<?php echo base_url('theme/js/jquery.parallax-1.1.3.js') ?>"></script>
    <script src="<?php echo base_url('theme/js/isotope.pkgd.min.js') ?>"></script>
    <script src="<?php echo base_url('theme/js/imagesloaded.pkgd.min.js') ?>"></script>
    <script src="<?php echo base_url('theme/js/masonry.pkgd.min.js') ?>"></script>
    <script src="<?php echo base_url('theme/js/jquery.magnific-popup.min.js') ?>"></script>
    <script src="<?php echo base_url('theme/js/jquery.counterup.min.js') ?>"></script>
    <script src="<?php echo base_url('theme/js/slick.min.js') ?>"></script>
    <script src="<?php echo base_url('theme/js/wow.min.js') ?>"></script>
    <script src="<?php echo base_url('theme/js/script.js') ?>"></script>
    <script src="<?php echo base_url('theme/js/stickybits.min.js') ?>"></script>

    <script src="<?php echo base_url('assets/plugins/slick/slick.js') ?>"></script>

    <script>
    $(document).ready(function() {

        $('.demo').slick({
            dots: true,
            arrows: false,

            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });

    });
    </script>

</body>

</html>