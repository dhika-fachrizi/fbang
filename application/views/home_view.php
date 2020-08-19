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
            <section id="homepage" class="home page-section parallax-2 overlay-light-alpha-10">
                <div class="table-content">
                    <div class="table-center-text">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100 img-c" src="<?php echo base_url() . 'assets/images/cooked-food.png'; ?>" alt="First slide">
                                    <div class="carousel-caption d-flex justify-content-start d-flex align-items-center container" style="height:100%">
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
                                <div class="carousel-item">
                                    <img class="d-block w-100 img-c" src="<?php echo base_url() . 'assets/images/cooked-food.png'; ?>" alt="First slide">
                                    <div class="carousel-caption d-flex justify-content-start d-flex align-items-center container" style="height:100%">
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
                            <a class=" carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row text-theme-2 pb-30 pt-30 cpl-0">
                        <i><b>Feature Article</b></i>
                        <div class="col pt-1">
                            <hr class="hr-theme">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 feature-b-image img-c-p" style="background-image: linear-gradient(0deg, rgba(0,0,0,0.2), rgba(0,0,0,0.2)),url('<?php echo base_url() . 'assets/images/sushi-on-brown-wooden-board-2098085.png'; ?>') ;">
                            <div class="row d-flex align-items-end img-nc img-c-content" style="height:100%">
                                <div class="col-12 mb-30">
                                    <div class="col-12 feature-date">
                                        14 Juni 2020

                                    </div>
                                    <div class="col-12 feature-title">
                                        consectetur, eum temporibus neque illo quod maxime quae cumqueconsectetur, eum
                                        temporibus neque illo quod maxime quae cumque
                                    </div>
                                    <div class="col-12 ">
                                        <a class="a-link-c" href="<?php echo base_url() . 'news/detail'; ?>">Read
                                            Now</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row">
                            <?php foreach ($feature_article as $item): ?>
                                <div class="col-6 feature-right-box feature-b-image img-c-p" style="background-image: linear-gradient(0deg, rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url('<?php echo base_url() . 'assets/images/'.$item['post_image']; ?>')">
                                    <div class="row d-flex align-items-end" style="height:100%">
                                        <div class="col-12 mb-10">
                                            <div class="col-12 feature-date">
                                            <?php $date = date_create($item['post_date']);
                                                    echo date_format($date, "d M Y"); ?>
                                            </div>
                                            <div class="col-12 feature-title">
                                                <?= $item['post_title'] ?>
                                            </div>
                                            <div class="col-12 ">
                                                <a class="a-link-c" href="<?php echo base_url() . 'news/detail/'.$item['post_slug']; ?>">Read Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                    <div class="row pb-30">
                        <div class="col-lg-8 cpl-0">
                            <div class="container">
                                <div class="row text-theme-2 pt-30 pb-30 pr-30 cpl-0">
                                    <i><b>News Article</b></i>
                                    <div class="col pt-1">
                                        <hr class="hr-theme">
                                    </div>
                                </div>
                                <?php foreach ($news_update as $item) : ?>
                                    <div class="row pb-20 ">

                                        <div class="col-5 news-b-image m-0" style="background-image: url('<?php echo base_url() . 'assets/images/' . $item['post_image']; ?>">

                                        </div>

                                        <div class="col-7">
                                            <div class="col-12 colot-theme-1" style="font-size:15px;"><span><?php $date = date_create($item['post_date']);
                                                                                                            echo date_format($date, "d M Y"); ?> | <?= $item['post_views'] ?>
                                                    Min Read</span></div>
                                            <div class="col-12  text-thema-split-2" style="height:86px;">
                                                <div class="text-theme-1" style="margin-top: 0px;font-size:24px;font-weight:bold;">
                                                    <?= $item['post_title'] ?>
                                                </div>
                                            </div>
                                            <div class="col-12  text-thema-split-4" text-theme-1>
                                                <div class="colot-theme-1" style="font-size:15px;">
                                                    <?= $item['post_description'] ?>
                                                </div>

                                            </div>
                                            <div class="col-12 mt-10" style="font-size:15px;">
                                                <a class="a-link-c" href="<?php echo base_url() . 'news/detail/'.$item['post_slug']; ?>">Read
                                                    Now</a></div>
                                        </div>

                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="stc-menu">
                                <div class="row text-theme-2 pt-30 pb-30 cpl-0">
                                    <i><b>Popular in Foodbang</b></i>
                                    <div class="col pt-1">
                                        <hr class="hr-theme">
                                    </div>
                                </div>
                                <?php foreach ($popular as $item) : ?>
                                    <div class="row pb-20 cpl-0">
                                        <div class="col-4 popular-b-image m-0" style="background-image: url('<?php echo base_url() . 'assets/images/'.$item['post_image']; ?>') ;">
                                        </div>
                                        <div class="col-8 pl-0 pr-0">
                                            <div class="col-12 colot-theme-1  mb-10" style="font-size:15px;"><span>
                                                    <?php $date = date_create($item['post_date']);
                                                    echo date_format($date, "d M Y"); ?>
                                                </span></div>
                                            <div class="col-12  text-thema-split-2" style="height:40px;">
                                                <div class="text-theme-1" style="margin-top:0px;font-size:19px;font-weight:bold; line-height: normal;">
                                                    <?= $item['post_title'] ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            </div>


                        </div>
                    </div>

                </div>
            </section>

            <section style="background-color:#FFF9EA;">
                <div class="container">
                    <div class="row text-theme-2 pt-30 pb-30 cpl-0">
                        <i><b>Promo</b></i>
                        <div class="col pt-1">
                            <hr class="hr-theme">
                        </div>
                    </div>
                    <div class="row cpl-0">
                        <div class="col-sm-12 p-0 ">
                            <div class="slider demo">
                                <?php foreach ($popular_image as $item): ?>
                                <div class="pr-10">
                                    <div class="popular-b-image promo-barner" style="background-image: url('<?php echo base_url() . 'assets/images/'.$item['post_image']; ?>') ;"">
								    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                    </div>

                </div>
			</section>

			<section class=" pb-30 pt-30">
                <div class=" container">
                    <div class="d-flex justify-content-center">
                        <form class="form-inline" action="<?php echo site_url('subscribe'); ?>" method="post">
                            <div class="pr-10 text-theme-2 subcribe-text"> <i><b>Subscribe for more updates! </b></i></div>
                            <div class="pr-10"><input class="form-control" style="width:30vw;" type="email" name="email" placeholder="send your email" required></div>
                                <div class="pr-10"><button type="submit" class="btn btn-primary mb-2" style="color: black;background-color: #F79D46;border-color: #F79D46;">Subscribe</button>
                            </div>
                        </form>
                    </div>
                    <div><?php echo $this->session->flashdata('message'); ?></div>
                </div>
            </section>

            

            <!-- FOOTER
				================================================== -->
            <?php echo $footer; ?>

        </main>

    </div>


    <!-- JAVASCRIPT
        ==================================================-->
    <script src="<?php echo base_url('assets/js/popper.js') ?>"></script>
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