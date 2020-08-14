<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Page Title -->
    <title><?php echo $site_title; ?></title>

    <!-- Page header -->
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
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
</head>

<body class="content-animate">

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
                <div class="container">
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
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100 img-c"
                                        src="<?php echo base_url() . 'assets/images/cooked-food.png'; ?>"
                                        alt="First slide">
                                    <div class="carousel-caption d-flex justify-content-start d-flex align-items-center container"
                                        style="height:100%">
                                        <div class="row">
                                            <div class="col-sm-8 title-c">Jakartas 6 Best Spots for Casual Dining</div>
                                            <div class="col-sm-4"></div>
                                            <div class="col-sm-8 dec-c">Donec dapibus mauris id odio ornare tempus duis
                                                sit.</div>
                                            <div class="col-sm-4 "></div>
                                        </div>
                                        <div class="row">

                                        </div>
                                    </div>
                                </div>
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
                    <div class="row pb-30">
                        <div class="col-md-3 pl-0 text-theme-2" style="font-size:55px;">
                            <b>About Us</b>
                        </div>
                        <div class="col-md-9 pt-20">
                            <div class="row">
                                <div class="col-sm-12" style="font-size:15px;"> Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Morbi
                                    vitae dapibus lacus, ac
                                    laoreet est. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                                    posuere
                                    cubilia curae; Donec finibus facilisis nibh nec pretium. Vestibulum interdum
                                    faucibus
                                    semper. Aliquam tempor velit non imperdiet sagittis. Integer vestibulum elit vel
                                    tellus
                                    pulvinar, non mollis tellus eleifend. Sed eget lacus at ex aliquet ultricies. Nunc
                                    varius
                                    pulvinar quam non molestie. Praesent efficitur nec turpis vel scelerisque. Cras
                                    lacinia
                                    mauris faucibus nunc consectetur aliquam. Class aptent taciti sociosqu ad litora
                                    torquent
                                    per conubia nostra, per inceptos himenaeos. Sed ultrices, augue eu vehicula
                                    facilisis, dui
                                    purus feugiat tellus, a pulvinar leo urna sed enim. Pellentesque eu pellentesque
                                    urna, non
                                    gravida justo. Vestibulum nec sapien in tellus egestas sagittis. Nullam imperdiet
                                    orci sit
                                    amet pharetra dignissim. Integer cursus elit sagittis, sagittis dui id, venenatis
                                    nibh.
                                    Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc eget libero
                                    libero. In ut
                                    malesuada erat. Proin finibus libero quis blandit faucibus. Mauris auctor ex nec
                                    nisl
                                    dignissim, in congue felis rhoncus. Curabitur sed magna non turpis tristique
                                    suscipit non
                                    vel leo.
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="row pb-30">
                        <div class="col-md-3 pl-0 text-theme-2" style="font-size:55px;">
                            <b>The Team</b>
                        </div>
                        <div class="col-md-9 pt-20">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-12 pb-20">
                                            <div class="row pl-10">
                                                <div class="col-sm-6 pr-100">
                                                    <div class="row">
                                                        <div class="col-sm-12 popular-b-image m-0 pl-10"
                                                            style="background-image: url('<?php echo base_url() . 'assets/images/9055948b94acfb2c86f7c41d98107813.png'; ?>') ; height:261px;">
                                                        </div>
                                                        <div class="col-sm-12 mt-10 pl-0">
                                                            <div class="text-theme-2"
                                                                style="margin-top:0px;font-size:25px;font-weight:bold;">
                                                                Calvin Sidharta
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-12 pl-0" style="height:50px;">
                                                            <div class="" style="margin-top:0px;font-size:14px;">
                                                                Co-Founder
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-sm-6 pr-100">
                                                    <div class="row">
                                                        <div class="col-sm-12 popular-b-image m-0 pl-10"
                                                            style="background-image: url('<?php echo base_url() . 'assets/images/9055948b94acfb2c86f7c41d98107813.png'; ?>') ; height:261px;">
                                                        </div>
                                                        <div class="col-sm-12 mt-10 pl-0">
                                                            <div class="text-theme-2"
                                                                style="margin-top:0px;font-size:25px;font-weight:bold;">
                                                                Calvin Sidharta
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-12 pl-0" style="height:50px;">
                                                            <div class="" style="margin-top:0px;font-size:14px;">
                                                                Co-Founder
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12" style="font-size:15px;"> Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Morbi
                                    vitae dapibus lacus, ac
                                    laoreet est. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                                    posuere
                                    cubilia curae; Donec finibus facilisis nibh nec pretium. Vestibulum interdum
                                    faucibus
                                    semper. Aliquam tempor velit non imperdiet sagittis. Integer vestibulum elit vel
                                    tellus
                                    pulvinar, non mollis tellus eleifend. Sed eget lacus at ex aliquet ultricies. Nunc
                                    varius
                                    pulvinar quam non molestie. Praesent efficitur nec turpis vel scelerisque. Cras
                                    lacinia
                                    mauris faucibus nunc consectetur aliquam. Class aptent taciti sociosqu ad litora
                                    torquent
                                    per conubia nostra, per inceptos himenaeos. Sed ultrices, augue eu vehicula
                                    facilisis, dui
                                    purus feugiat tellus, a pulvinar leo urna sed enim. Pellentesque eu pellentesque
                                    urna, non
                                    gravida justo. Vestibulum nec sapien in tellus egestas sagittis. Nullam imperdiet
                                    orci sit
                                    amet pharetra dignissim. Integer cursus elit sagittis, sagittis dui id, venenatis
                                    nibh.
                                    Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc eget libero
                                    libero. In ut
                                    malesuada erat. Proin finibus libero quis blandit faucibus. Mauris auctor ex nec
                                    nisl
                                    dignissim, in congue felis rhoncus. Curabitur sed magna non turpis tristique
                                    suscipit non
                                    vel leo.
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </section>

            <section style="background-color:#FFF9EA;">
                <div class="container pt-30 pb-30">
                    <div class="row">
                        <div class="col-md-3 pl-0 text-theme-2" style="font-size:55px;">
                            <b>Contact Us</b>
                        </div>
                        <div class="col-md-9 pt-20">
                            <div class="row">
                                <div class="col-sm-12 text-theme-2 pb-20" style="font-size:25px;">
                                    <b>Foodbang HQ</b>
                                </div>
                                <div class="col-sm-12 pb-20" style="max-width: 350px;font-size:15px;font-weight: 500;">
                                    <div> Wisma Prima - 4th Floor, Jl. Kapten Tendean No. 34 Daerah Khusus Ibukota
                                        Jakarta
                                        12720 Indonesia
                                    </div>

                                </div>
                                <div class="col-sm-12" style="font-size:15px; font-weight: 500;">
                                    <i class="fas fa-phone pr-10"></i>021 - 1234 5678
                                </div>
                                <div class="col-sm-12" style="font-size:15px; font-weight: 500;">
                                    <i class="fas fa-envelope pr-10"></i>admin@foodbang.com
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </section>



            <section class=" pb-30 pt-30">
                <div class=" container">

                    <div class="d-flex justify-content-center">
                        <div class="pr-10 text-theme-2"><i><b>Subscribe for more
                                    updates!</b> </i> </div>
                        <div class="pr-10"><input class="form-control" type="text" placeholder="send your email"></div>
                        <div class="pr-10"><button type="submit" class="btn btn-primary mb-2" style="
												color: black;
												background-color: #F79D46;
												border-color: #F79D46;
											">Subscribe
                            </button></div>

                    </div>
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