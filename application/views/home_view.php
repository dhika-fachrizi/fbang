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
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/font-awesome.min.css' ?>" />
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
                <div class="container">
                    <div class="row text-theme-2 pb-30 pt-30">
                        <i><b>Feature Article</b></i>
                        <div class="col-sm pt-1">
                            <hr class="hr-theme">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 feature-b-image"
                            style="background-image: url('<?php echo base_url() . 'assets/images/sushi-on-brown-wooden-board-2098085.png'; ?>') ;">
                            <div class="row d-flex align-items-end" style="height:100%">
                                <div class="col-sm-12 mb-30">
                                    <div class="col-sm-12 feature-date">
                                        14 Juni 2020

                                    </div>
                                    <div class="col-sm-12 feature-title">
                                        consectetur, eum temporibus neque illo quod maxime quae cumque
                                    </div>
                                    <div class="col-sm-12 ">
                                        <a href="" class="feature-dec">READ NOW</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-6 feature-right-box feature-b-image"
                                    style="background-image: url('<?php echo base_url() . 'assets/images/sushi-on-brown-wooden-board-2098085.png'; ?>')">

                                    <div class="row d-flex align-items-end" style="height:100%">
                                        <div class="col-sm-12 mb-10">
                                            <div class="col-sm-12 feature-date">
                                                14 Juni 2020

                                            </div>
                                            <div class="col-sm-12 feature-title">
                                                consectetur, eum eum eum
                                            </div>
                                            <div class="col-sm-12 ">
                                                <a href="" class="feature-dec">READ NOW</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 feature-right-box feature-b-image"
                                    style="background-image: url('<?php echo base_url() . 'assets/images/sushi-on-brown-wooden-board-2098085.png'; ?>')">
                                    <div class="row d-flex align-items-end" style="height:100%">
                                        <div class="col-sm-12 mb-10">
                                            <div class="col-sm-12 feature-date">
                                                14 Juni 2020

                                            </div>
                                            <div class="col-sm-12 feature-title">
                                                consectetur, eum eum eum
                                            </div>
                                            <div class="col-sm-12 ">
                                                <a href="" class="feature-dec">READ NOW</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-sm-6 feature-right-box feature-b-image"
                                    style="background-image: url('<?php echo base_url() . 'assets/images/sushi-on-brown-wooden-board-2098085.png'; ?>')">
                                    <div class="row d-flex align-items-end" style="height:100%">
                                        <div class="col-sm-12 mb-10">
                                            <div class="col-sm-12 feature-date">
                                                14 Juni 2020

                                            </div>
                                            <div class="col-sm-12 feature-title">
                                                consectetur, eum eum eum
                                            </div>
                                            <div class="col-sm-12 ">
                                                <a href="" class="feature-dec">READ NOW</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 feature-right-box feature-b-image"
                                    style="background-image: url('<?php echo base_url() . 'assets/images/sushi-on-brown-wooden-board-2098085.png'; ?>')">
                                    <div class="row d-flex align-items-end" style="height:100%">
                                        <div class="col-sm-12 mb-10">
                                            <div class="col-sm-12 feature-date">
                                                14 Juni 2020

                                            </div>
                                            <div class="col-sm-12 feature-title">
                                                consectetur, eum eum eum
                                            </div>
                                            <div class="col-sm-12 ">
                                                <a href="" class="feature-dec">READ NOW</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8" style="height:1600px">
                            <div class="row text-theme-2 pt-30 pb-30 pr-30">
                                <i><b>News Article</b></i>
                                <div class="col-sm pt-1">
                                    <hr class="hr-theme">
                                </div>
                            </div>
                            <div class="row pb-20">

                                <div class="col-sm-5 news-b-image m-0"
                                    style="background-image: url('<?php echo base_url() . 'assets/images/sushi-on-brown-wooden-board-2098085.png'; ?>') ;">

                                </div>

                                <div class="col-sm-7">
                                    <div class="col-sm-12 text-theme-1" style="font-size:15px;"><span>14 July 2020 | 0
                                            Min Read</span></div>
                                    <div class="col-sm-12  text-thema-split-2" style="height:86px;">
                                        <div class="text-theme-1"
                                            style="margin-top: 0px;font-size:24px;font-weight:bold;"> Lorem ipsum
                                            dolor sit amet
                                            consectetur
                                            adipisicing
                                            elit. Laboriosam quasi
                                            repudiandae error in unde delectus corporis atque nisi voluptates
                                            architecto,
                                            nulla ad dolore harum id voluptate incidunt fugiat et saepe.
                                        </div>
                                    </div>
                                    <div class="col-sm-12  text-thema-split-4" text-theme-1>
                                        <div class="text-theme-2" style="font-size:15px;"> Lorem
                                            ipsum
                                            dolor sit amet
                                            consectetur
                                            adipisicing
                                            elit. Laboriosam quasi
                                            repudiandae error in unde delectus corporis atque nisi voluptates
                                            architecto,
                                            nulla ad dolore harum id voluptate incidunt fugiat et saepe.
                                            nulla ad dolore harum id voluptate incidunt fugiat et saepe.
                                            nulla ad dolore harum id voluptate incidunt fugiat et saepe.
                                            nulla ad dolore harum id voluptate incidunt fugiat et saepe.
                                            nulla ad dolore harum id voluptate incidunt fugiat et saepe.
                                            nulla ad dolore harum id voluptate incidunt fugiat et saepe.
                                            nulla ad dolore harum id voluptate incidunt fugiat et saepe.

                                        </div>

                                    </div>
                                    <div class="col-sm-12 mt-40" style="font-size:15px;">Read More</div>
                                </div>

                            </div>
                            <div class="row pb-20">

                                <div class="col-sm-5 news-b-image m-0"
                                    style="background-image: url('<?php echo base_url() . 'assets/images/sushi-on-brown-wooden-board-2098085.png'; ?>') ;">

                                </div>

                                <div class="col-sm-7">
                                    <div class="col-sm-12 text-theme-1" style="font-size:15px;"><span>14 July 2020 | 0
                                            Min Read</span></div>
                                    <div class="col-sm-12  text-thema-split-2" style="height:86px;">
                                        <div class="text-theme-1"
                                            style="margin-top: 0px;font-size:24px;font-weight:bold;"> Lorem ipsum
                                            dolor sit amet
                                            consectetur
                                            adipisicing
                                            elit. Laboriosam quasi
                                            repudiandae error in unde delectus corporis atque nisi voluptates
                                            architecto,
                                            nulla ad dolore harum id voluptate incidunt fugiat et saepe.
                                        </div>
                                    </div>
                                    <div class="col-sm-12  text-thema-split-4" text-theme-1>
                                        <div class="text-theme-2" style="font-size:15px;"> Lorem
                                            ipsum
                                            dolor sit amet
                                            consectetur
                                            adipisicing
                                            elit. Laboriosam quasi
                                            repudiandae error in unde delectus corporis atque nisi voluptates
                                            architecto,
                                            nulla ad dolore harum id voluptate incidunt fugiat et saepe.
                                            nulla ad dolore harum id voluptate incidunt fugiat et saepe.
                                            nulla ad dolore harum id voluptate incidunt fugiat et saepe.
                                            nulla ad dolore harum id voluptate incidunt fugiat et saepe.
                                            nulla ad dolore harum id voluptate incidunt fugiat et saepe.
                                            nulla ad dolore harum id voluptate incidunt fugiat et saepe.
                                            nulla ad dolore harum id voluptate incidunt fugiat et saepe.

                                        </div>

                                    </div>
                                    <div class="col-sm-12 mt-40" style="font-size:15px;">Read More</div>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="stc-menu" style="">
                                <div class="row text-theme-2 pt-30 pb-30">
                                    <i><b>Popular in Foodbang</b></i>
                                    <div class="col-sm pt-1">
                                        <hr class="hr-theme">
                                    </div>
                                </div>

                                <div class="row pb-20">
                                    <div class="col-sm-5 popular-b-image m-0"
                                        style="background-image: url('<?php echo base_url() . 'assets/images/sushi-on-brown-wooden-board-2098085.png'; ?>') ;">
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="col-sm-12 text-theme-1 " style="font-size:15px;"><span>14 July
                                                2020
                                            </span></div>
                                        <div class="col-sm-12  text-thema-split-4" style="height:126px;">
                                            <div class="text-theme-1"
                                                style="margin-top:0px;font-size:20px;font-weight:bold;"> Lorem ipsum
                                                dolor sit amet
                                                consectetur
                                                adipisicing
                                                elit. Laboriosam quasi
                                                repudiandae error in unde delectus corporis atque nisi voluptates
                                                architecto,
                                                nulla ad dolore harum id voluptate incidunt fugiat et saepe.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-20">
                                    <div class="col-sm-5 popular-b-image m-0"
                                        style="background-image: url('<?php echo base_url() . 'assets/images/sushi-on-brown-wooden-board-2098085.png'; ?>') ;">
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="col-sm-12 text-theme-1 " style="font-size:15px;"><span>14 July
                                                2020
                                            </span></div>
                                        <div class="col-sm-12  text-thema-split-4" style="height:126px;">
                                            <div class="text-theme-1"
                                                style="margin-top:0px;font-size:20px;font-weight:bold;"> Lorem ipsum
                                                dolor sit amet
                                                consectetur
                                                adipisicing
                                                elit. Laboriosam quasi
                                                repudiandae error in unde delectus corporis atque nisi voluptates
                                                architecto,
                                                nulla ad dolore harum id voluptate incidunt fugiat et saepe.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-20">
                                    <div class="col-sm-5 popular-b-image m-0"
                                        style="background-image: url('<?php echo base_url() . 'assets/images/sushi-on-brown-wooden-board-2098085.png'; ?>') ;">
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="col-sm-12 text-theme-1 " style="font-size:15px;"><span>14 July
                                                2020
                                            </span></div>
                                        <div class="col-sm-12  text-thema-split-4" style="height:126px;">
                                            <div class="text-theme-1"
                                                style="margin-top:0px;font-size:20px;font-weight:bold;"> Lorem ipsum
                                                dolor sit amet
                                                consectetur
                                                adipisicing
                                                elit. Laboriosam quasi
                                                repudiandae error in unde delectus corporis atque nisi voluptates
                                                architecto,
                                                nulla ad dolore harum id voluptate incidunt fugiat et saepe.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </section>

            <section style="background-color:#FFF9EA;">
                <div class="container">
                    <div class="row text-theme-2 pt-30 pb-30">
                        <i><b>Popular in Foodbang</b></i>
                        <div class="col-sm pt-1">
                            <hr class="hr-theme">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 p-0">
                            <div class="slider demo">
                                <div class="pr-10">
                                    <div class=" popular-b-image"
                                        style="height:287px; background-image: url('<?php echo base_url() . 'assets/images/sushi-on-brown-wooden-board-2098085.png'; ?>') ;"">
								    </div>
                                </div>
                                <div class=" pr-10">
                                        <div class=" popular-b-image"
                                            style="height:287px; background-image: url('<?php echo base_url() . 'assets/images/sushi-on-brown-wooden-board-2098085.png'; ?>') ;"">
								    </div>
                                </div>
                                <div class=" pr-10">
                                            <div class=" popular-b-image"
                                                style="height:287px; background-image: url('<?php echo base_url() . 'assets/images/sushi-on-brown-wooden-board-2098085.png'; ?>') ;"">
								    </div>
                                </div>
                                <div class=" pr-10">
                                                <div class=" popular-b-image"
                                                    style="height:287px; background-image: url('<?php echo base_url() . 'assets/images/sushi-on-brown-wooden-board-2098085.png'; ?>') ;"">
								    </div>
                                </div>
                                <div class=" pr-10">
                                                    <div class=" popular-b-image"
                                                        style="height:287px; background-image: url('<?php echo base_url() . 'assets/images/sushi-on-brown-wooden-board-2098085.png'; ?>') ;"">
								    </div>
                                </div>



                            </div>
                        </div>

                    </div>

                </div>
			</section>

			<section class=" pb-30 pt-30">
                                                        <div class=" container">

                                                            <div class="d-flex justify-content-center">
                                                                <div class="pr-10">Subscribe for more updates!</div>
                                                                <div class="pr-10"><input class="form-control"
                                                                        type="text" placeholder="send your email"></div>
                                                                <div class="pr-10"><button type="submit"
                                                                        class="btn btn-primary mb-2" style="
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