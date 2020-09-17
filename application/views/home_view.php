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
    <link rel="canonical" href="<?php echo  $site_canonical; ?>" />
    <script type="application/ld+json">
        <?php echo  $site_org; ?>
    </script>
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
        @media only screen and (max-width: 768px) {
            /* .title-c {
            width: 60%
        }

        .dec-c {
            width: 60%
        } */

            .prm-30 {
                padding-right: 30px;
            }


        }
    </style>
</head>

<body class="content-animate">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M6T53D9" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
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
                                        <img class="d-block w-100 img-c" src="<?php echo base_url() . 'assets/images/' . $item->slider_image; ?>" alt="First slide">
                                        <div class="carousel-caption d-flex justify-content-start d-flex align-items-center container" style="height:100%;width:auto;">
                                            <div class="row">
                                                <div class="col-sm-8 title-c text-thema-split-3" style="max-height:141px;">
                                                    <a href=" <?= $item->slider_link ?>" style="color:white;">
                                                        <?= $item->slider_title ?>
                                                </div></a>
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
                    <?php if (!empty($slot1) && !empty($feature_article)) : ?>
                        <div class="row text-theme-2 pb-10 pt-20 cpl-0">
                            <i><b>Featured Article</b></i>
                            <div class="col pt-1">
                                <hr class="hr-theme">
                            </div>
                        </div>
                        <div class="row pm-16">
                            <div class="col-md-6 feature-b-image img-c-p mf-h" style="background-image: linear-gradient(0deg, rgba(0,0,0,0.2), rgba(0,0,0,0.2)),url('<?php echo base_url() . 'assets/images/' . $slot1['post_image']; ?>')">
                                <div class="row d-flex align-items-end img-nc img-c-content" style="height:100%">
                                    <div class="col-12 mb-30">
                                        <div class="col-12 feature-date">
                                            <?php $date = date_create($slot1['post_date']);
                                            echo date_format($date, "d M Y"); ?>
                                        </div>
                                        <div class="col-12 feature-title text-thema-split-2">
                                            <?= $slot1['post_title'] ?>
                                        </div>
                                        <div class="col-12 ">
                                            <a class="a-link-c" href="<?php echo base_url() . dy_link($slot1['post_slug'], $slot1['post_type_id']); ?>">Read
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <?php foreach ($feature_article as $item) : ?>
                                        <div class="col-md-6 feature-right-box feature-b-image img-c-p" style="background-image: linear-gradient(0deg, rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url('<?php echo base_url() . 'assets/images/' . $item['post_image']; ?>')">
                                            <div class="row d-flex align-items-end" style="height:100%">
                                                <div class="col-12 mb-10">
                                                    <div class="col-12 feature-date">
                                                        <?php $date = date_create($item['post_date']);
                                                        echo date_format($date, "d M Y"); ?>
                                                    </div>
                                                    <div class="col-12 feature-title text-thema-split-2">
                                                        <?= $item['post_title'] ?>
                                                    </div>
                                                    <div class="col-12 ">
                                                        <a class="a-link-c" href="<?php echo base_url() . dy_link($item['post_slug'], $item['post_type_id']); ?>">Read
                                                            Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="row unhide-m">
                        <div class="col-lg-12 pl-0 pr-0">
                            <div class="stc-menu">
                                <div class="row text-theme-2 pt-0 cpl-0">
                                    <i><b>Popular in Foodbang</b></i>
                                    <div class="col pt-1">
                                        <hr class="hr-theme">
                                    </div>
                                </div>
                                <?php foreach ($popular as $key => $item) : ?>

                                    <?php if ($key == 2) {
                                        break;
                                    } ?>
                                    <div class="row pt-10 cpl-0">
                                        <div class="col-3 popular-b-image m-0" style="background-image: url('<?php echo base_url() . 'assets/images/' . $item['post_image']; ?>') ;">
                                        </div>
                                        <div class="col-9 pl-0 pr-0">
                                            <div class="col-12 colot-theme-1  mb-10" style="font-size:12px;"><span>
                                                    <?php $date = date_create($item['post_date']);
                                                    echo date_format($date, "d M Y"); ?>
                                                </span></div>
                                            <div class="col-12  text-thema-split-2" style="height:45px;">
                                                <div class="text-theme-1" style="margin-top:0px;font-size:19px;font-weight:bold; line-height: normal;word-spacing: -3px;">
                                                    <a href="<?php echo base_url() . dy_link($item['post_slug'], $item['post_type_id']); ?>"><?= $item['post_title'] ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                    <div class="row pb-30">
                        <div class="col-lg-8 pm-16">
                            <div class="container">
                                <div class="row text-theme-2 pt-20 pb-10 pr-10 cpl-0 mpt-0">
                                    <i><b>News Article</b></i>
                                    <div class="col pt-1">
                                        <hr class="hr-theme">
                                    </div>
                                </div>
                                <?php foreach ($news_update as $item) : ?>
                                    <div class="row pb-20">
                                        <div class="col-md-5 news-b-image m-0" style="background-image: url('<?php echo base_url() . 'assets/images/' . $item['post_image']; ?>">

                                        </div>
                                        <div class="col-md-7 rpm-rl">
                                            <div class="col-12 colot-theme-1 pb-10 rpm-rl mp-date" style="font-size:12px;">
                                                <span><?php $date = date_create($item['post_date']);
                                                        echo date_format($date, "d M Y"); ?> | <?= min_of_read($item['post_title'], $item['post_contents']) ?>
                                                    Min Read</span>
                                            </div>
                                            <div class="col-12  mb-10 text-thema-split-2 rpm-rl " style="max-height:65px;">
                                                <div class="text-theme-1" style="margin-top: 0px;font-size:24px;font-weight:bold;">
                                                    <a href="<?php echo base_url() . dy_link($item['post_slug'], $item['post_type_id']); ?>"><?= $item['post_title'] ?></a>
                                                </div>
                                            </div>
                                            <div class="col-12  text-thema-split-4 rpm-rl" text-theme-1>
                                                <div class="colot-theme-1" style="font-size:15px;">
                                                    <?php echo strip_tags($item['post_contents']) ?>
                                                </div>

                                            </div>
                                            <div class="col-12 mt-10 rpm-rl rm-mt" style="font-size:15px;">
                                                <a class="a-link-c " href="<?php echo base_url() . 'news/detail/' . $item['post_slug']; ?>">Read
                                                    Now</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                        <div class="col-lg-4 hide-m">
                            <div class="stc-menu">
                                <div class="row text-theme-2 pt-20 pb-10 cpl-0">
                                    <i><b>Popular in Foodbang</b></i>
                                    <div class="col pt-1">
                                        <hr class="hr-theme">
                                    </div>
                                </div>
                                <?php foreach ($popular as $item) : ?>
                                    <div class="row pb-20 cpl-0">
                                        <div class="col-4 popular-b-image m-0" style="background-image: url('<?php echo base_url() . 'assets/images/' . $item['post_image']; ?>') ;">
                                        </div>
                                        <div class="col-8 pl-0 pr-0">
                                            <div class="col-12 colot-theme-1  mb-10" style="font-size:12px;"><span>
                                                    <?php $date = date_create($item['post_date']);
                                                    echo date_format($date, "d M Y"); ?>
                                                </span></div>
                                            <div class="col-12  text-thema-split-2" style="height:45px;">
                                                <div class="text-theme-1" style="margin-top:0px;font-size:19px;font-weight:bold; line-height: normal;word-spacing: -3px;">
                                                    <a href="<?php echo base_url() . dy_link($item['post_slug'], $item['post_type_id']); ?>"><?= $item['post_title'] ?></a>
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

            <section style="background-color:#FFF9EA;overflow:hidden;">
                <div class="container">
                    <div class="row text-theme-2 pt-20 pb-10 cpl-0">
                        <i><b>Promo</b></i>
                        <div class="col pt-1">
                            <hr class="hr-theme">
                        </div>
                    </div>
                    <div class="row cpl-0">
                        <div class="col-sm-12 p-0 ">
                            <div class="slider demo">
                                <?php foreach ($promo_post as $item) : ?>
                                    <div>
                                        <div class="pr-10">
                                            <a href="<?php echo base_url() . 'promo?id_promo=' . $item['post_id']; ?>">
                                                <div class=" promo-barner pr-10" style="background-image: url('<?php echo base_url() . 'assets/images/' . $item['post_image']; ?>') ;"">
								             </div>
                                         </a>
                                    </div>
                                </div>
                                <div>
                                    <div class=" pr-10">
                                                    <a href="<?php echo base_url() . 'promo?id_promo=' . $item['post_id']; ?>">
                                                        <div class=" promo-barner pr-10" style="background-image: url('<?php echo base_url() . 'assets/images/' . $item['post_image']; ?>') ;"">
								             </div>
                                         </a>
                                    </div>
                                </div>
                                <?php endforeach; ?>
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
                                                                        <div class="pr-10"><input class="form-control" style="width:30vw;" type="email" name="email" placeholder="send your email" required></div>
                                                                        <div class="pr-10 d-flex align-items-end" style="margin:0px;padding:0px;">
                                                                            <button type="submit" class="btn btn-primary" style="color: black;background-color: #F79D46;border-color: #F79D46;margin:0px;">Subscribe</button>
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

                            <div class="col-md-12 pr-10 text-theme-2 subcribe-text d-flex justify-content-center" style="font-size:7vw;">
                                <i><b>Subscribe
                                        for
                                        more updates!
                                    </b></i>
                            </div>
                            <div class="col-7 pr-10"><input class="form-control" type="email" name="email" placeholder="send your email" required></div>
                            <div class="col-5 prm-30 d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary" style="color: black;background-color: #F79D46;border-color: #F79D46;margin:0px;">Subscribe</button>
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