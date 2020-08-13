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

            <!-- NEWS SECTION
				================================================== -->
            <section>
                <div class="container">
                    <div class="row ">
                        <div class="col-sm-12 pt-30 pb-30 pl-0 text-theme-1" style="font-size:15px;">
                            Home/News/ <a href=""><u>Daily News</u> </a>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row pb-30">
                        <div class="col-sm-8">
                            <div class="row pr-30">

                                <div class="col-sm-12 pl-0 news-b-image m-0 "
                                    style="background-image: url('') ; background-color:#F4F4F4; height: 98px;">
                                </div>
                            </div>
                            <div class="row text-theme-2 pt-30 pb-30 pr-30">
                                <i><b>News Article</b></i>
                                <div class="col-sm pt-1">
                                    <hr class="hr-theme">
                                </div>
                            </div>

                            <div class="row pb-20 pr-30">
                                <div class="col-sm-12 feature-b-image img-c-p"
                                    style="background-image: linear-gradient(0deg, rgba(0,0,0,0.2), rgba(0,0,0,0.2)),url('<?php echo base_url() . 'assets/images/sushi-on-brown-wooden-board-2098085.png'; ?>') ;">
                                    <div class="row d-flex align-items-end img-nc img-c-content" style="height:500px">
                                        <div class="col-sm-12 mb-30">
                                            <div class=" col-sm-12 feature-date pb-10 ">
                                                <div style="font-size:12px;color:white; font-weight:100">
                                                    14
                                                    Juni 2020
                                                </div>

                                            </div>
                                            <div class="col-sm-12 feature-title">
                                                consectetur, eum temporibus neque illo quod maxime quae cumque
                                            </div>
                                            <div class="col-sm-12  text-thema-split-3 pt-10" style="height:80px;">
                                                <div class=""
                                                    style="margin-top: 0px;font-size:15px;color:white; font-weight:100">
                                                    Lorem
                                                    ipsum
                                                    dolor sit amet
                                                    consectetur
                                                    adipisicing
                                                    elit. Laboriosam quasi
                                                    repudiandae error in unde delectus corporis atque nisi voluptates
                                                    architecto,
                                                    nulla ad dolore harum id voluptate incidunt fugiat et saepe.
                                                    Lorem
                                                    ipsum
                                                    dolor sit amet
                                                    consectetur
                                                    adipisicing
                                                    elit. Laboriosam quasi
                                                    repudiandae error in unde delectus corporis atque nisi voluptates
                                                    architecto,
                                                    nulla ad dolore harum id voluptate incidunt fugiat et saepe.
                                                </div>
                                            </div>
                                            <div class="col-sm-12 pt-20">
                                                <a class="a-link-c"
                                                    href="<?php echo base_url() . 'news/detail'; ?>">Read Now</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php foreach ([1, 2, 3, 4, 5, 6] as $loop): ?>
                            <div class="row pb-20">
                                <div class="col-sm-5 news-b-image m-0"
                                    style="background-image:linear-gradient(0deg, rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url('<?php echo base_url() . 'assets/images/sushi-on-brown-wooden-board-2098085.png'; ?>') ;">

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
                                    <div class="col-sm-12 mt-40" style="font-size:15px;"><a class="a-link-c"
                                            href="<?php echo base_url() . 'news/detail'; ?>">Read Now</a></div>
                                </div>

                            </div>
                            <?php endforeach;?>
                        </div>
                        <div class="col-sm-4">

                            <div class="stc-menu" style="">
                                <div class="row">

                                    <div class="col-sm-12 pl-0 news-b-image m-0 "
                                        style="background-image: url('') ; background-color:#F4F4F4; height: 325px;">
                                    </div>

                                </div>
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
            <!-- FOOTER
				================================================== -->
            <?php echo $footer; ?>

        </main>

    </div>



    <!-- JAVASCRIPT
		==================================================-->
    <script src=" <?php echo base_url('theme/js/jquery-2.2.4.min.js') ?>">
    </script>
    <script src="<?php echo base_url('theme/js/jquery.easing.min.js') ?>">
    </script>
    <script src="<?php echo base_url('theme/js/bootstrap.min.js') ?>">
    </script>
    <script src="<?php echo base_url('theme/js/waypoints.min.js') ?>">
    </script>
    <script src="<?php echo base_url('theme/js/jquery.scrollTo.min.js') ?>">
    </script>
    <script src="<?php echo base_url('theme/js/jquery.localScroll.min.js') ?>">
    </script>
    <script src="<?php echo base_url('theme/js/jquery.viewport.mini.js') ?>">
    </script>
    <script src="<?php echo base_url('theme/js/jquery.sticky.js') ?>">
    </script>
    <script src="<?php echo base_url('theme/js/jquery.fitvids.js') ?>">
    </script>
    <script src="<?php echo base_url('theme/js/jquery.parallax-1.1.3.js') ?>">
    </script>
    <script src="<?php echo base_url('theme/js/isotope.pkgd.min.js') ?>">
    </script>
    <script src="<?php echo base_url('theme/js/imagesloaded.pkgd.min.js') ?>">
    </script>
    <script src="<?php echo base_url('theme/js/masonry.pkgd.min.js') ?>">
    </script>
    <script src="<?php echo base_url('theme/js/jquery.magnific-popup.min.js') ?>">
    </script>
    <script src="<?php echo base_url('theme/js/jquery.counterup.min.js') ?>">
    </script>
    <script src="<?php echo base_url('theme/js/slick.min.js') ?>">
    </script>
    <script src="<?php echo base_url('theme/js/wow.min.js') ?>">
    </script>
    <script src="<?php echo base_url('theme/js/script.js') ?>">
    </script>
    <script src="<?php echo base_url('theme/js/stickybits.min.js') ?>">
    </script>
    <script>

    </script>

</body>

</html>