<?php
$b_social = json_decode($detail['detail_news_social']);
$b_availability = json_decode($detail['detail_news_availability']);
$b_gmaps = json_decode($detail['detail_news_gmaps']);

?>
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
    <title><?=$detail['post_title']?> |<?php echo $site_title; ?></title>

    <!-- Page header -->
    <meta charset="utf-8" />
    <meta name="description" content="<?=$detail['post_description']?>" />
    <meta name="keywords" content="<?=$detail['post_description_title']?>" />
    <meta name="keywords" content="<?=$detail['post_title']?>" />
    <meta name="author" content="" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width" />
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url('theme/css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('theme/css/style.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('theme/css/style-custome-dhika.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('theme/css/padding-margin.css') ?>" />
    <!-- Favicons -->
    <link href="<?php echo base_url() . 'theme/css/jssocials.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'theme/css/jssocials-theme-flat.css' ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/fontawesome/css/all.css' ?>" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="shortcut icon" href="<?php echo base_url('theme/images/' . $icon); ?>">
    <!-- SEO Tag -->
    <meta name="description" content="<?php echo $site_desc; ?>" />
    <link rel="canonical" href="<?php echo $site_canonical; ?>" />
    <script type="application/ld+json"><?php echo $site_org; ?> </script>
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
    <style>
    @media only screen and (max-width: 768px) {

        .dn-img-exploler {
            height: 300px;
        }
    }
    </style>
    <!-- End SEO Tag. -->
</head>

<body class="content-animate">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M6T53D9" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- PRELOADER
		==================================================-->
    <!-- <div class="page-loader">
        <div class="loader-area"></div>
        <div class="loader font-face1">loading...
        </div>
    </div> -->
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
                <div class="container hide-m">
                    <div class="row  cpl-0">
                        <div class="col-sm-12 pt-30 pb-30 pl-0 " style="font-size:12px;">
                            Home/News/<a href=""><u>Detail News</u> </a>
                        </div>
                    </div>
                </div>
            </section>


            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="row cpl-0">
                                <div class="col-sm-12 pl-0">
                                    <div class="row">
                                        <div class="col-sm-7 text-thema-1 text-theme-color-1" style="font-size:12px"><?php $date = date_create($detail['post_date']);
echo date_format($date, "d M Y");?>, by <?=$detail['user_name']?> |
                                            <?=min_of_read($detail['post_title'], $detail['post_contents'])?>
                                            Mins read</div>
                                        <div class="col-sm-5 d-flex justify-content-md-end pr-30">
                                            <div class="SocialShareArticle" style="color: #fff;font-size: 10px;"></div>
                                        </div>
                                    </div>


                                </div>
                                <div class="col-sm-12 pl-0 text-theme-2 text-thema-split-2"
                                    style="font-size:40px;font-weight: bold;word-spacing:-1px; line-height: normal;">
                                    <?=$detail['post_title']?>
                                </div>
                            </div>
                            <div class="row lbpr-30 pm-16">

                                <div class="col-sm-12 pl-0 news-b-image m-0"
                                    style="background-image: url('') ; background-color:#F4F4F4; height: 98px; width:100%"
                                    hidden>
                                </div>

                                <div class="col-sm-12 pl-0 pr-0 pt-30">
                                    <img src="<?php echo base_url() . 'assets/images/' . $detail['post_image']; ?>"
                                        class="img-fluid" alt="Responsive image" width="100%">
                                </div>

                                <div class="col-sm-12 pl-0 pr-0 pt-10 text-thema-1 text-theme-color-1"
                                    style="font-size:12px">
                                    Photo caption : <?=$detail['post_image_desc']?>
                                </div>
                            </div>

                            <div class="row lbpr-30 pt-20 pm-16">
                                <div class="col-sm-12 pl-0 text-thema-1" style="font-size:15px">
                                    <?=$detail['post_contents']?>
                                </div>
                            </div>

                            <div class="mt-30 lbpr-30 mb-30 pm-16">
                                <div class="row" style=" background-color:#FFF9EA;">
                                    <div class="col-3 pl-0 pr-0">
                                        <?php if (!empty($b_gmaps)): ?>
                                        <a
                                            href="https://www.google.com/maps/search/?api=1&query=<?=$b_gmaps->lat . ',' . $b_gmaps->lng?>">
                                            <div class="col-12 pl-0 news-b-image m-0 "
                                                style="background-image: url('<?php echo base_url() . 'assets/images/map.png' ?>') ; background-color:#F4F4F4; min-height: 140px;height:100%">
                                            </div>
                                        </a>
                                        <?php else: ?>
                                        <div class="col-12 pl-0 news-b-image m-0 "
                                            style="background-image: url('<?php echo base_url() . 'assets/images/map.png' ?>') ; background-color:#F4F4F4; min-height: 140px;height:100%">
                                        </div>
                                        <?php endif;?>
                                    </div>
                                    <div class="col-9 pb-10">
                                        <div class="row" style="min-height:100%;">
                                            <div class="col-7">
                                                <div class="row" style="min-height:100%;">
                                                    <div class="col-12 pt-10" style="color:red;">
                                                        <?=$detail['detail_news_name']?>
                                                    </div>
                                                    <div class="col-12" style="font-size:12px;">
                                                        <?=$detail['detail_news_address']?></div>
                                                    <div class="col-12  d-flex align-items-end" style="font-size:12px;">
                                                        <?=$detail['detail_news_phone']?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="row" style="min-height:100%;">
                                                    <div class="pt-10 col-12 d-flex justify-content-end"
                                                        style="font-size:10px;">avalibel at</div>
                                                    <div class="pt-10 col-12  d-flex flex-row-reverse">
                                                        <div>
                                                            <?php foreach ($b_availability as $a): ?>
                                                            <div style="float:right"><a href="<?php echo $a->availability_value; ?>"><img
                                                                        src="<?php echo base_url() . 'assets/images/' . $a->availability_img; ?>"
                                                                        class="img-fluid pl-10 pb-10 detail-img-av"
                                                                        alt="Responsive image" style="height:25px;">
                                                                </a>
                                                            </div>
                                                            <?php endforeach;?>
                                                        </div>
                                                    </div>

                                                    <div
                                                        class="pt-10 pr-0 col-12 row d-flex flex-row-reverse d-flex align-items-end">
                                                        <?php foreach ($b_social as $s): ?>
                                                        <a href="<?php echo $s->social_value; ?>"><i
                                                                class="<?php echo $s->social_icon; ?> pl-10"></i></a>

                                                        <?php endforeach;?>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-30 pm-16">
                                <div class="col-12 pl-0">
                                    <?php $split_tag = explode(",", $detail['post_tags']);
foreach ($split_tag as $tag): ?>
                                    <div class="float-left mr-10 mb-10"
                                        style="background-color:#F0F0F0; color:#919191; padding:2px 5px; border-radius:5px; font-size:10px;">
                                        <a href="<?php echo site_url('tag/' . $tag); ?>"><?php echo $tag; ?></a>
                                    </div>

                                    <?php endforeach;?>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4">

                            <div class="hide-m">
                                <div class="row">
                                    <div class="col-sm-12 pl-0 news-b-image m-0"
                                        style="background-image: url('') ; background-color:#F4F4F4; height: 325px;width:100%"
                                        hidden>
                                    </div>
                                </div>
                                <div class="row text-theme-2 pt-30 pb-30  cpl-0">
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
                                        <div class="col-12 colot-theme-1  mb-10" style="font-size:15px;"><span>
                                                <?php $date = date_create($item['post_date']);
echo date_format($date, "d M Y");?>
                                            </span></div>
                                        <div class="col-12  text-thema-split-2" style="height:40px;">
                                            <div class="text-theme-1"
                                                style="margin-top:0px;font-size:19px;font-weight:bold; line-height: normal;">
                                                <a
                                                    href="<?php echo base_url() . dy_link($item['post_slug'], $item['post_type_id']); ?>"><?=$item['post_title']?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach?>
                            </div>

                            <div class="row unhide-m">
                                <div class="col-lg-12 pl-0 pr-0">
                                    <div class="stc-menu">
                                        <div class="row text-theme-2 pt-0 cpl-0">
                                            <i><b>Popular in Foodbang</b></i>
                                            <div class="col pt-1">
                                                <hr class="hr-theme">
                                            </div>
                                        </div>
                                        <?php foreach ($popular as $key => $item): ?>

                                        <?php if ($key == 2) {
    break;
}?>
                                        <div class="row pt-10 cpl-0">
                                            <div class="col-3 popular-b-image m-0"
                                                style="background-image: url('<?php echo base_url() . 'assets/images/' . $item['post_image']; ?>') ;">
                                            </div>
                                            <div class="col-9 pl-0 pr-0">
                                                <div class="col-12 colot-theme-1  mb-10" style="font-size:12px;"><span>
                                                        <?php $date = date_create($item['post_date']);
echo date_format($date, "d M Y");?>
                                                    </span></div>
                                                <div class="col-12  text-thema-split-2" style="height:45px;">
                                                    <div class="text-theme-1"
                                                        style="margin-top:0px;font-size:19px;font-weight:bold; line-height: normal;word-spacing: -3px;">
                                                        <a
                                                            href="<?php echo base_url() . dy_link($item['post_slug'], $item['post_type_id']); ?>"><?=$item['post_title']?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <section class="pb-30">
                <div class="container">
                    <div class="row text-theme-2 pt-30 pb-10 cpl-0">
                        <i><b>More to Explore</b></i>
                        <div class="col pt-1">
                            <hr class="hr-theme">
                        </div>
                    </div>
                    <div class="row cpl-0">
                        <?php foreach ($more_to_exploler as $item): ?>
                        <div class="col-md-3">
                            <div class="row pr-10">
                                <div class="col-12 image-exploler m-0 dn-img-exploler"
                                    style="background-image: url('<?php echo base_url() . 'assets/images/' . $item['post_image']; ?>');">
                                </div>
                                <div class="col-12 pl-0   colot-theme-1 pb-10 pt-10" style="font-size:12px;"><span><?php $date = date_create($item['post_date']);
echo date_format($date, "d M Y");?> | <?=min_of_read($item['post_title'], $item['post_contents'])?>
                                        Min Read</span>
                                </div>
                                <div class="col-12 pl-0 text-thema-split-2" style="height:50px;">
                                    <div class="text-theme-1" style="margin-top:0px;font-size:19px;font-weight:bold;">
                                        <a
                                            href="<?php echo base_url() . 'news/detail/' . $item['post_slug']; ?>"><?=$item['post_title']?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>



                    </div>
                    <div class="row pt-20">
                        <div class="col-sm-12 d-flex justify-content-end">
                            <!-- <a href="" class="a-link-c">SEE MORE >></a> -->
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
    <script src="<?php echo base_url('theme/js/jssocials.min.js') ?>"></script>
    <script>
    $(document).ready(function() {
        $(".SocialShareArticle").jsSocials({
            showCount: false,
            showLabel: true,
            shareIn: "popup",
            shares: [{
                    share: "twitter",
                    label: "Twitter"
                },
                {
                    share: "facebook",
                    label: "Facebook"
                },
                {
                    share: "whatsapp",
                    label: "WhatsApp"
                }
            ]
        });
    });
    </script>

</body>

</html>