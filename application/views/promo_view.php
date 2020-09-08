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
    <style>
    .city-input-promo {
        width: 167px;
        padding-right: 10px;
    }

    .h-img-promo-modal {
        height: 368px;
    }


    .padding-promo-modal-info {

        padding-left: 0px;
    }


    @media only screen and (max-width: 768px) {
        .city-input-promo {
            width: 100%;
            padding-right: 15px;
            padding-left: 25px;
            padding-top: 25px;
            padding-bottom: 15px;

        }

        .short-input-promo {
            padding-right: 15px;
            padding-left: 25px;

            padding-bottom: 15px;
            width: 100%;
        }

        .padding-promo {
            padding-right: 15px;
            padding-left: 25px;
        }

        .promo-modal {
            padding-right: 0px !important;
        }

        .promo-submit {
            padding-top: 15px;
        }

        .h-img-promo-modal {
            height: 231px;
        }

        .padding-promo-modal-info {
            padding-right: 15px;
            padding-left: 15px;
        }

    }
    </style>
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
                <div class="container hide-m">
                    <div class="row">
                        <div class="col-sm-12 pt-30 pb-30 pl-0 top-nav-menu">
                            Home/<a href=""><u>Promo</u> </a>
                        </div>
                    </div>
                </div>
            </section>


            <section>
                <form method="get" id="promo-form">
                    <div class="container">
                        <div class="row mb-30">

                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-12 pl-0">
                                        <div class="row">
                                            <div class="col-md-4 t-5-b text-theme-2 fz-25 padding-promo"><i>Diskon Yang
                                                    Bakal Loe
                                                    Suka
                                                    !</i>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="row d-flex justify-content-end">
                                                    <div class="pr-10 pt-0 hide-m">
                                                        <div class="" style="width:0px;" id="c-search"> <input
                                                                type="text" value="<?php echo $get_search ?>"
                                                                id="c-search-input" name="search"
                                                                class="form-control form-control-sm"
                                                                style="border:0px; outline:0px; border-bottom:1px black solid; border-radius:0px ;padding:0px;">
                                                        </div>
                                                    </div>
                                                    <div class="pr-20 pt-10 hide-m" onclick="submitme()" id="i-search"
                                                        pop="0">
                                                        <i class="fas fa-search"></i>
                                                    </div>
                                                    <div class="city-input-promo">
                                                        <select class="form-control form-control-sm" onchange="submit()"
                                                            name="city"
                                                            style="border:0px; outline:0px; border-bottom:1px black solid; border-radius:0px;text-transform: capitalize;">
                                                            <option value="" disable>Pilih Kota</option>
                                                            <?php foreach ($filter_city as $item): ?>
                                                            <option value="<?php echo $item->city_id ?>"
                                                                <?php echo $item->city_id == $get_city ? "selected" : ""; ?>>
                                                                <?php echo strtolower($item->city_name) ?></option>
                                                            <?php endforeach;?>
                                                        </select>
                                                    </div>
                                                    <div class="short-input-promo">
                                                        <select class="form-control form-control-sm " name="short"
                                                            style="border:0px; outline:0px; border-bottom:1px black solid; border-radius:0px"
                                                            onchange="submit()">
                                                            <option value="" disable>Urutkan Berdasarkan</option>
                                                            <option value="DESC"
                                                                <?php echo $get_short == "DESC" ? "selected" : ""; ?>>
                                                                Postingan Terbaru</option>
                                                            <option value="ASC"
                                                                <?php echo $get_short == "ASC" ? "selected" : ""; ?>>
                                                                Postingan Terlawas</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-12 pl-0">
                                        <div class="row mt-10">
                                            <?php if (count($promo) > 0): ?>
                                            <?php foreach ($promo as $item): ?>
                                            <div class="col-md-4 pb-20 hide-m">
                                                <div class="row pl-10">
                                                    <div class="col-sm-12">
                                                        <div class="row"
                                                            style="border:1px #DDDDDD solid;border-radius:3px;">
                                                            <div class="col-sm-12 popular-b-image m-0 pl-10"
                                                                style="background-image: url('<?php echo base_url() . 'assets/images/' . $item->post_image; ?>') ; height:250px;">
                                                            </div>
                                                            <div class="col-sm-12 mt-10 pl-10 text-thema-split-2"
                                                                style="height:60px;">
                                                                <div class="text-theme-1"
                                                                    style="margin-top:0px;font-size:18px;font-weight:bold;">
                                                                    <?=$item->post_title;?>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 mtc-5 ">
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div class="row  pl-10">
                                                                            <div class="pr-10 ">
                                                                                <i class="fas fa-home c-t-1"
                                                                                    style="font-size:12px;width:10px">
                                                                                </i>
                                                                            </div>
                                                                            <div class="color-theme-1 f-t-12">
                                                                                <?=$item->detail_promo_name;?>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row  pl-10">
                                                                            <div class="pr-10 ">
                                                                                <i class="fas fas fa-map-marker c-t-1"
                                                                                    style="font-size:12px;width:10px">
                                                                                </i>
                                                                            </div>
                                                                            <div class="color-theme-1 f-t-12"
                                                                                style="text-transform: capitalize;">
                                                                                <?=strtolower($item->city_name)?>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="row  pl-10">
                                                                            <div class="pr-10 ">
                                                                                <i class="fas fa-clock c-t-1"
                                                                                    style="font-size:12px;width:10px">
                                                                                </i>
                                                                            </div>
                                                                            <div class="color-theme-1 f-t-12">
                                                                                <?=$item->detail_promo_time;?>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <div class="col-sm-12 mt-30  d-flex align-items-center d-flex justify-content-center btn"
                                                                id="post-<?=$item->post_id;?>" data-toggle="modal"
                                                                onclick="goModal(this)"
                                                                data-title="<?=$item->post_title;?>"
                                                                data-time="<?=$item->detail_promo_time;?>"
                                                                data-short-desc="<?=$item->detail_promo_short_desc;?>"
                                                                data-address="<?=$item->detail_promo_address;?>"
                                                                data-name="<?=$item->detail_promo_name;?>"
                                                                data-content='<?=$item->post_contents;?>'
                                                                data-city='<?=strtolower($item->city_name);?>'
                                                                data-img="<?php echo base_url() . 'assets/images/' . $item->post_image; ?>"
                                                                style=" background-color:
                                                            #F79D46;height:40px;border-radius:0px;">

                                                                <div class="">
                                                                    CHECK PROMO
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-lg-12 unhide-m pb-10 ">
                                                <div class="row pb-20 pm-16 pb-0 padding-promo">
                                                    <div class="col-4 news-b-image m-0"
                                                        style="background-image: url('<?php echo base_url() . 'assets/images/' . $item->post_image; ?>');height:150px;">
                                                    </div>
                                                    <div class="col-8 pl-0">
                                                        <div class="col-12 pl-10 text-thema-split-2 "
                                                            style="height:33px;">
                                                            <div class="text-theme-1"
                                                                style="margin-top: 0px;font-size:15px;font-weight:bold;">
                                                                <a href=""><?=$item->post_title?></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 mtc-5 ">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="row  pl-10">
                                                                        <div class="pr-10 ">
                                                                            <i class="fas fa-home c-t-1"
                                                                                style="font-size:12px;width:10px">
                                                                            </i>
                                                                        </div>
                                                                        <div class="color-theme-1 f-t-12">
                                                                            <?=$item->detail_promo_name;?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row  pl-10">
                                                                        <div class="pr-10 ">
                                                                            <i class="fas fas fa-map-marker c-t-1"
                                                                                style="font-size:12px;width:10px">
                                                                            </i>
                                                                        </div>
                                                                        <div class="color-theme-1 f-t-12"
                                                                            style="text-transform: capitalize;">
                                                                            <?=strtolower($item->city_name)?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="row  pl-10">
                                                                        <div class="pr-10 ">
                                                                            <i class="fas fa-clock c-t-1"
                                                                                style="font-size:12px;width:10px">
                                                                            </i>
                                                                        </div>
                                                                        <div class="color-theme-1 f-t-12">
                                                                            <?=$item->detail_promo_time;?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pl-10  promo-submit">
                                                            <div class="col-sm-12 d-flex align-items-center d-flex justify-content-center btn"
                                                                id="post-<?=$item->post_id;?>" data-toggle="modal"
                                                                onclick="goModal(this)"
                                                                data-title="<?=$item->post_title;?>"
                                                                data-time="<?=$item->detail_promo_time;?>"
                                                                data-short-desc="<?=$item->detail_promo_short_desc;?>"
                                                                data-address="<?=$item->detail_promo_address;?>"
                                                                data-name="<?=$item->detail_promo_name;?>"
                                                                data-content='<?=$item->post_contents;?>'
                                                                data-city='<?=strtolower($item->city_name);?>'
                                                                data-img="<?php echo base_url() . 'assets/images/' . $item->post_image; ?>"
                                                                style=" background-color:
                                                            #F79D46;height:30px;border-radius:0px;">

                                                                <div class="">
                                                                    CHECK PROMO
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach;?>
                                            <?php else: ?>
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="container" style="height:100vh;">
                                                        <div class="row mt-70 mb-70">
                                                            <div class="col-md-12 d-flex justify-content-center">
                                                                <h1 style="color: #919191">Opppss....</h1>
                                                            </div>
                                                            <div class="col-md-12 d-flex justify-content-center">
                                                                <p style="color: #919191">No Article found</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endif;?>
                                        </div>
                                    </div>

                                    <div class="col-md-12 d-flex justify-content-center pb-60 pt-30">
                                        <div class="row">
                                            <?php if (count($promo) > 0): ?>
                                            <?php if (count($promo) % $get_perpage == 0): ?>
                                            <a class="a-link-c" style="cursor:pointer;" onclick="submitMore()">MORE</a>
                                            <?php endif;?>
                                            <input type="number" id="perpage" name="perpage"
                                                <?php if ($get_perpage >= 0): ?> value="<?php echo $get_perpage; ?>"
                                                <?php endif;?> style="display: none">
                                            <?php endif;?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>

            </section>



            <!-- FOOTER
				================================================== -->
            <?php echo $footer; ?>

        </main>

    </div>
    <!-- Modal -->
    <div class="modal fade bd-example-modal-xl" id="promo-modal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">

                <div class="modal-body" style="padding:30px;">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="col-12 news-b-image m-0 img-promo-modal data-img h-img-promo-modal"
                                style=" width:100%;">

                            </div>
                        </div>
                        <div class="col-md-5  padding-promo-modal-info">
                            <div class="container" style="border:1px #DDDDDD solid;border-radius:1px;height:100%">
                                <div class="row">
                                    <div class="col-12 text-theme-2 f-promo-title">
                                        Info Promo
                                    </div>
                                    <div class="col-12 pl-30">
                                        <div class="row overflow-hidden">
                                            <div class="col-12 f-t-18 pb-10">
                                                <div class="row">
                                                    <div><i class="fas fa-home c-t-1">
                                                        </i></div>
                                                    <div class="pl-10 c-t-2 data-name">Lorem Ipsum Dolor</div>
                                                </div>

                                            </div>
                                            <div class="col-12 f-t-18 pb-10">
                                                <div class="row">
                                                    <div><i class="fas fa-map-marker c-t-1">
                                                        </i></div>
                                                    <div class="pl-10 c-t-2 data-city"
                                                        style="text-transform: capitalize;">Jakarta</div>
                                                </div>

                                            </div>
                                            <div class="col-12 f-t-18 pb-10">
                                                <div class="row">
                                                    <div><i class="fas fa-clock c-t-1">
                                                        </i></div>
                                                    <div class="pl-10 c-t-2 data-time">00.00 - 00.00</div>
                                                </div>

                                            </div>
                                            <div class="col-12 f-t-18 pb-10">
                                                <div class="row">
                                                    <div><i class="fas fa-home c-t-1">
                                                        </i></div>
                                                    <div class="pl-10 c-t-2 data-address">(021) 1234 5678</div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12" style="font-size:18px">
                                        <hr>
                                    </div>
                                    <div class="col-12  f-t-18">
                                        <div style="width: 100%; height:80px; overflow:hidden;">
                                            <div class="data-short-desc data-title"
                                                style="width: 100%; height:100%;  overflow-y: scroll; padding-right:18px; box-sizing: content-box;">
                                                Vivamus eget aliquam dui. Integer eu arcu vel arcu suscipit ultrices
                                                quis
                                                non
                                                mauris. Aenean scelerisque, sem eu dictum.
                                                Vivamus eget aliquam dui. Integer eu arcu vel arcu suscipit ultrices
                                                quis
                                                non
                                                mauris. Aenean scelerisque, sem eu dictum.
                                                Vivamus eget aliquam dui. Integer eu arcu vel arcu suscipit ultrices
                                                quis
                                                non
                                                mauris. Aenean scelerisque, sem eu dictum.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-12 mb-30">
                            <div class="row pt-20">
                                <div class="col-12 f-t-18">
                                    <b> Syarat & Ketentuan </b>
                                </div>
                                <div class="col-12 data-content pt-10">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <input type="number" id="dtperpage" value="<?php echo $perpage; ?>" style="display: none">
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
    <script>
    let searchParams = new URLSearchParams(window.location.search)

    function setSearch() {
        input = $('#i-search');
        container = $('#c-search');
        containerInput = $('#c-search-input');

        if (searchParams.has('search')) {
            if (containerInput.val() != "") {
                containerInput.css({
                    'padding': '.25rem .5rem',
                })
                container.css({
                    'width': '110px',
                })
                input.attr('pop', 1)
            }
        }
    }

    function submitMore() {

        $dt = parseInt($("#perpage").val()) + parseInt($("#dtperpage").val())
        $("#perpage").val($dt)
        document.getElementById('promo-form').submit();
    }

    function submitme() {
        input = $('#i-search');
        container = $('#c-search');
        containerInput = $('#c-search-input');

        if (containerInput.val() == "" && input.attr('pop') == 0) {
            containerInput.css({
                'padding': '.25rem .5rem',
            })
            container.css({
                'width': '110px',
            })
            input.attr('pop', 1)
        } else if (containerInput.val() != "" && input.attr('pop') == 0) {
            document.getElementById('promo-form').submit();
        } else if (containerInput.val() != "" && input.attr('pop') == 1) {
            document.getElementById('promo-form').submit();
        } else if (containerInput.val() == "" && input.attr('pop') == 1) {
            document.getElementById('promo-form').submit();
        }

        console.log(containerInput.val())
        // document.getElementById('promo-form').submit();
    }

    function goModal(e) {
        $('.data-content').html($(e).data(`content`))
        $('.data-time').html($(e).data(`time`))
        $('.data-title').html($(e).data(`title`))
        $('.data-name').html($(e).data(`name`))
        $('.data-address').html($(e).data(`address`))
        $('.data-city').html($(e).data(`city`))
        $('.data-img').css({
            "background-image": "url('" + $(e).data(`img`) + "')"
        })


        console.log($(e).data(`title`));
        $('#promo-modal').modal('toggle')

    }

    function getModalPromo() {
        let searchParams = new URLSearchParams(window.location.search)
        if (searchParams.has('id_promo')) {
            let post_id = searchParams.get('id_promo');
            goModal('#post-' + post_id)
        }
    }


    $(document).ready(function() {
        setSearch()

        getModalPromo();

    });
    </script>

</body>

</html>