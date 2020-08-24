<?php $dt_news = $news->result_array();?>
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
                    <div class="row cpl-0">
                        <div class="col-sm-12 pt-30 pb-30 pl-0" style="font-size:12px;">
                            Home/News/ <a href=""><u>Daily News</u> </a>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row pb-30">
                        <div class="col-lg-8">
                            <div class="row lbpr-30">

                                <div class="col-sm-12 pl-0 news-b-image m-0 "
                                    style="background-image: url('') ; background-color:#F4F4F4; height: 98px; width:100%">
                                </div>
                            </div>
                            <div class="row text-theme-2 pt-30 pb-30 lbpr-30 cpl-0">
                                <i><b>News Article</b></i>
                                <div class="col pt-1">
                                    <hr class="hr-theme">
                                </div>
                            </div>

                            <div class="row pb-20 lbpr-30">
                                <div class="col-sm-12 feature-b-image img-c-p"
                                    style="background-image: linear-gradient(0deg, rgba(0,0,0,0.2), rgba(0,0,0,0.2)),url('<?php echo base_url() . 'assets/images/' . $dt_news[0]['post_image']; ?>') ;">
                                    <div class="row d-flex align-items-end img-nc img-c-content"
                                        style="height:500px;width:100%">
                                        <div class="col-sm-12 mb-30">
                                            <div class=" col-sm-12 feature-date pb-10 ">
                                                <div style="font-size:12px;color:white; font-weight:100">
                                                    <?php $date = date_create($dt_news[0]['post_date']);
echo date_format($date, "d M Y");?>
                                                </div>

                                            </div>
                                            <div class="col-sm-12 feature-title pb-0">
                                                <?=$dt_news[0]['post_title']?>
                                            </div>
                                            <div class="col-sm-12  text-thema-split-3 pt-10" style="height:80px;">
                                                <div class=""
                                                    style="margin-top: 0px;font-size:15px;color:white; font-weight:100">
                                                    <?php echo strip_tags($dt_news[0]['post_contents']) ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 pt-20">
                                                <a class="a-link-c"
                                                    href="<?php echo base_url() . 'news/detail/' . $dt_news[0]['post_slug']; ?>">Read
                                                    Now</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php for ($i = 1; $i < count($dt_news); $i++): ?>
                            <div class="row pb-20 cpl-0">

                                <div class="col-5 news-b-image m-0"
                                    style="background-image: url('<?php echo base_url() . 'assets/images/' . $dt_news[$i]['post_image']; ?>') ;">

                                </div>

                                <div class="col-7">
                                    <div class="col-12 colot-theme-1 pb-10" style="font-size:12px;"><span><?php $date = date_create($dt_news[$i]['post_date']);
echo date_format($date, "d M Y");?> | 0
                                            Min Read</span></div>
                                    <div class="col-12  text-thema-split-2" style="height:86px;">
                                        <div class="text-theme-1"
                                            style="margin-top: 0px;font-size:24px;font-weight:bold;">
                                            <?=$dt_news[$i]['post_title']?>
                                        </div>
                                    </div>
                                    <div class="col-12  text-thema-split-4 " text-theme-1>
                                        <div class="colot-theme-1" style="font-size:15px;">
                                            <?php echo strip_tags($dt_news[$i]['post_contents']) ?>
                                        </div>

                                    </div>
                                    <div class="col-12 mt-10" style="font-size:15px;">
                                        <a class="a-link-c"
                                            href="<?php echo base_url() . 'news/detail/' . $dt_news[$i]['post_slug']; ?>">Read
                                            Now</a></div>
                                </div>

                            </div>
                            <?php endfor;?>
                            <div class="row pb-20 cpl-0 d-flex justify-content-center">
                                <!-- <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item pr-10">
                                            <a class="page-link" href="#" tabindex="-1">&lt;</a>
                                        </li>
                                        <li class="page-item pr-10"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item pr-10"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item pr-10"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item pr-10">
                                            <a class="page-link" href="#">&gt;</a>
                                        </li>
                                    </ul>
                                </nav> -->
                                <?=$this->pagination->create_links();?>
                            </div>
                        </div>
                        <div class="col-lg-4 pb-70">

                            <div class="stc-menu">
                                <div class="row">

                                    <div class="col-sm-12 pl-0 news-b-image m-0 "
                                        style="background-image: url('') ; background-color:#F4F4F4; height: 325px; width:100%">
                                    </div>

                                </div>
                                <div class="row text-theme-2 pt-30 pb-30 cpl-0">
                                    <i><b>Popular in Foodbang</b></i>
                                    <div class="col pt-1">
                                        <hr class="hr-theme">
                                    </div>
                                </div>
                                <?php foreach ($popular as $item): ?>
                                <div class="row pb-20 cpl-0">
                                    <div class="col-4 popular-b-image m-0"
                                        style="background-image: url('<?php echo base_url() . 'assets/images/' . $item['post_image']; ?>') ;">
                                    </div>
                                    <div class="col-8 pl-0 pr-0">
                                        <div class="col-12 colot-theme-1  mb-10" style="font-size:12px;">
                                            <span><?php $date = date_create($item['post_date']);?>
                                            </span></div>
                                        <div class="col-12  text-thema-split-2" style="height:43px;">
                                            <div class="text-theme-1"
                                                style="margin-top:0px;font-size:19px;font-weight:bold; line-height: normal;">
                                                <?=$item['post_title']?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach;?>
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