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

            <!-- RESTAURANT AND CAFE SECTION
				================================================== -->
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 pt-30 pb-30 pl-0" style="font-size:12px;">
                            Home/Restaurant & Cafe/<a href=""><u>Restautant</u> </a>
                        </div>
                    </div>
                </div>
            </section>

            <section name="top-ras">
                <div class="container">
                    <div class="row pb-20">

                        <div class="col-sm-7 news-b-image m-0"
                            style="background-image: url('<?php echo base_url() . 'assets/images/sushi-on-brown-wooden-board-2098085.png'; ?>') ;height:430px;">

                        </div>

                        <div class="col-sm-5">
                            <div class="col-sm-12">
                                <div style="color:red;font-size:25px;"> Restaurant</div>

                            </div>
                            <div class="col-sm-12  text-thema-split-7" style="height:330px;">
                                <div class="text-theme-1"
                                    style="margin-top: 0px;font-size:40px;font-weight:bold; line-height: normal;">
                                    Lorem ipsum
                                    dolor sit amet
                                    consectetur
                                    adipisicing
                                    elit. Laboriosam quasi
                                    repudiandae error in unde delectus corporis atque nisi voluptates
                                    architecto,
                                    nulla ad dolore harum id voluptate incidunt fugiat et saepe.
                                </div>
                            </div>
                            <div class="col-sm-12 pt-40">
                                <div style="color:#919191;font-size:12px;"> Cover Foto : Restoran Lorem Ipsum Jakarta
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </section>
            <form method="get">
                <section>
                    <div class="container pt-30">
                        <div class="row mb-30">
                            <div class="col-sm-3 pl-0">
                                <div class="col-sm-12 pl-0 t-5-b">
                                    <p>Filter</p>
                                </div>
                                <div class="col-sm-12 pb-20 pt-10 mb-30"
                                    style="border:1px #DDDDDD solid;border-radius:3px;">
                                    <div class="row ">
                                        <div class="col-sm-12 t-5-b">
                                            Kategori
                                        </div>
                                        <div class="col-sm-12 pt-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="defaultCheck1">
                                                <label class="form-check-label colot-theme-1" for="defaultCheck1">
                                                    null
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                    <hr>
                                    <div class="row ">
                                        <div class="col-sm-12 t-5-b">
                                            Lokasi
                                        </div>
                                        <div class="col-sm-12 pt-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="defaultCheck1">
                                                <label class="form-check-label colot-theme-1" for="defaultCheck1">
                                                    null
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                    <hr>
                                    <div class=" row ">
                                        <div class=" col-sm-12 t-5-b">

                                            Halal
                                        </div>
                                        <div class="col-sm-12 pt-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="defaultCheck1">
                                                <label class="form-check-label colot-theme-1" for="defaultCheck1">
                                                    null
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row ">
                                        <div class="col-sm-12 t-5-b">
                                            Lainnya
                                        </div>
                                        <div class="col-sm-12 pt-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="defaultCheck1">
                                                <label class="form-check-label colot-theme-1" for="defaultCheck1">
                                                    null
                                                </label>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <div class="col-sm-12 pl-0 news-b-image m-0 "
                                    style="background-image: url('') ; background-color:#F4F4F4; height: 238px;">
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-7 t-5-b">Menampilkan 1 - 12 dari total 200 Resaturants
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="row d-flex justify-content-end">
                                                    <div class="pr-10 pt-10">
                                                        <div class="" style="width:110px;"> <input type=" text"
                                                                name="search" class="form-control form-control-sm"
                                                                id="search_query"
                                                                style="border-radius:20px;height: 21px;">
                                                        </div>
                                                    </div>
                                                    <div class="pr-20 pt-10"><i class="fas fa-search"></i>

                                                    </div>
                                                    <div>
                                                        <select class="form-control form-control-sm" name="filter"
                                                            style="border:0px; outline:0px; border-bottom:1px black solid; border-radius:0px">
                                                            <option>Urutkan Berdasarkan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="row mt-10">
                                            <?php foreach ($catlist as $item): ?>
                                            <div class="col-md-4 pb-20">
                                                <div class="row pl-10">
                                                    <div class="col-sm-12">
                                                        <div class="row"
                                                            style="border:1px #DDDDDD solid;border-radius:3px;">
                                                            <div class="col-sm-12 popular-b-image m-0 pl-10"
                                                                style="background-image: url('<?php echo base_url() . 'assets/images/' . $item->post_image; ?>') ; height:266px;">
                                                            </div>
                                                            <div class="col-sm-12 mt-10 pl-10 text-thema-split-2"
                                                                style="height:45px;">
                                                                <div class="text-theme-1"
                                                                    style="margin-top:0px;font-size:18px;font-weight:bold;letter-spacing: 0px; line-height: normal;">
                                                                    <a
                                                                        href="<?php echo base_url() . 'catlist/detail/' . $item->post_slug; ?>">
                                                                        <?php echo $item->post_title; ?>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 mtc-5 ">
                                                                <div class="row pl-10">
                                                                    <div class="col-sm-1 p-0">
                                                                        <i class="fas fa-home"
                                                                            style="font-size:12px;color:red;">
                                                                        </i>

                                                                    </div>
                                                                    <div class="col-sm-11 colot-theme-1 pl-0"
                                                                        style="font-size:12px;">
                                                                        <?php echo $item->detail_catlist_name; ?>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="row pl-10">
                                                                    <div class="col-sm-1 p-0">
                                                                        <i class="fas fas fa-map-marker"
                                                                            style="font-size:12px;color:red;">
                                                                        </i>
                                                                    </div>
                                                                    <div class="col-sm-11 colot-theme-1 pl-0"
                                                                        style="font-size:12px; text-transform: capitalize;">
                                                                        <?php echo strtolower($item->city_name); ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 pl-0 mt-10" style="height:50px;">
                                                                <div class="col-sm-12 pl-10">
                                                                    <?php $split_tag = explode(",", $item->post_tags);foreach ($split_tag as $tag): ?>
                                                                    <div class="float-left"
                                                                        style="padding:0px 5px 5px 0px">
                                                                        <div class=" "
                                                                            style="background-color:#F0F0F0; color:#919191; padding:2px 5px; border-radius:5px; font-size:10px;">
                                                                            <?php echo $tag; ?>
                                                                        </div>
                                                                    </div>

                                                                    <?php endforeach;?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <?php endforeach;?>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 bc" hidden>
                                        <div class="container pb-10 pt-10">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="row">
                                                        <div class="pr-10">
                                                            Kota
                                                        </div>
                                                        <div>
                                                            <i class="fas fa-search"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <hr>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row">
                                                        <?php foreach ([1, 3, 4, 5, 6] as $kota): ?>
                                                        <div class="col-4 pl-0">

                                                            <div class="form-group">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" value="2" name="chbxTerms"
                                                                        class="custom-control-input">
                                                                    <span class="custom-control-label"
                                                                        for="chbxTerms">Custom checkbox</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <?php endforeach;?>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <hr>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row">
                                                        <div><a href=""><u> reset</u> </a></div>
                                                        <div></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
            </form>

            <!-- FOOTER
				================================================== -->
            <?php echo $footer; ?>

        </main>

    </div>

    <!-- Modal Search-->
    <div class="modal fade" id="ModalSearch" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        style="z-index: 10000;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="<?php echo site_url('search'); ?>" method="GET">
                        <div class="input-group">
                            <input type="text" name="search_query" class="form-control input-search"
                                style="height: 40px;" placeholder="Search..." required>
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit"
                                    style="height: 40px;background-color: #ccc;"><span
                                        class="fa fa-search"></span></button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
    <script>
    $(function() {
        $(".pop-show").popover({
            container: "body",
            html: true,
            trigger: "click",
            content: function() {
                return $('.pop-inn').html();
            }
        });
    })
    </script>

</body>

</html>