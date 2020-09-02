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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="<?php echo base_url() . 'assets/plugins/datatables/css/jquery.datatables.min.css' ?>" rel="stylesheet"
        type="text/css" />

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
    .c {
        list-style-type: none;
        padding: 0;
        margin: 0;
        -webkit-column-count: 3;
        -moz-column-count: 3;
        column-count: 3;
    }
    </style>
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
                            style="background-image: url('<?php echo base_url() . 'assets/images/' . $thumbnail->detail_category_image; ?>') ;height:430px;">

                        </div>

                        <div class="col-sm-5">
                            <div class="col-sm-12">
                                <div style="color:red;font-size:25px;"> Restaurant</div>

                            </div>
                            <div class="col-sm-12  text-thema-split-7" style="height:330px;">
                                <div class="text-theme-1"
                                    style="margin-top: 0px;font-size:40px;font-weight:bold; line-height: normal;">
                                    <?php echo $thumbnail->detail_category_title; ?>
                                </div>
                            </div>
                            <div class="col-sm-12 pt-40">
                                <div style="color:#919191;font-size:12px;"> Cover Foto :
                                    <?php echo $thumbnail->detail_category_desc; ?>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </section>
            <form method="get" id="catlist-form" action="<?php echo base_url() . 'catlist/restaurant' ?>">
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
                                        <?php foreach ($filter_category as $item): ?>
                                        <div class="col-sm-12 pt-10">
                                            <div class="form-check">
                                                <input class="form-check-input" name="subcategory[]" type="checkbox" <?php if (is_array($get_category)) {
    for ($i = 0; $i < count($get_category); $i++) {
        if ($get_category[$i] == $item->subcategory_id) {
            echo "checked";
        }
    }}?> value=" <?php echo $item->subcategory_id; ?>" onchange="submit()">
                                                <label class="form-check-label colot-theme-1" for="defaultCheck1">
                                                    <?php echo $item->subcategory_name; ?>
                                                </label>
                                            </div>
                                        </div>
                                        <?php endforeach;?>
                                    </div>
                                    <hr>
                                    <div class="row ">
                                        <div class="col-sm-12 t-5-b">
                                            City
                                        </div>
                                        <?php foreach ($filter_city as $item): ?>
                                        <div class="col-sm-12 pt-10">
                                            <div class="form-check">
                                                <input class="form-check-input" name="city[]" type="checkbox" <?php if (is_array($get_city)) {
    for ($i = 0; $i < count($get_city); $i++) {
        if ($get_city[$i] == $item->post_city_id) {
            echo "checked";
        }
    }}?> value="<?php echo $item->post_city_id; ?>" onchange="submit()">
                                                <label class="form-check-label colot-theme-1" for="defaultCheck1">
                                                    <?php echo strtolower($item->city_name); ?>
                                                </label>
                                            </div>
                                        </div>
                                        <?php endforeach;?>
                                    </div>
                                    <hr>
                                    <div class="row ">
                                        <div class="col-sm-12 t-5-b">
                                            Lokasi
                                        </div>
                                        <?php foreach ($filter_location as $item): ?>
                                        <div class="col-sm-12 pt-10">
                                            <div class="form-check">
                                                <input class="form-check-input" name="location[]" type="checkbox" <?php if (is_array($get_location)) {
    for ($i = 0; $i < count($get_location); $i++) {
        if ($get_location[$i] == $item->location_id) {
            echo "checked";
        }
    }}?> value="<?php echo $item->location_id; ?>" onchange="submit()">
                                                <label class="form-check-label colot-theme-1" for="defaultCheck1">
                                                    <?php echo $item->location_name; ?>
                                                </label>
                                            </div>
                                        </div>
                                        <?php endforeach;?>
                                    </div>
                                    <hr>
                                    <div class=" row ">
                                        <div class=" col-sm-12 t-5-b">

                                            Halal
                                        </div>
                                        <?php foreach ([['halal_name' => 'Halal', 'halal_id' => 1], ['halal_name' => 'Non Halal', 'halal_id' => 2]] as $item): ?>
                                        <div class="col-sm-12 pt-10">
                                            <div class="form-check">
                                                <input class="form-check-input" name="halal[]" type="checkbox" <?php if (is_array($get_halal)) {
    for ($i = 0; $i < count($get_halal); $i++) {
        if ($get_halal[$i] == $item['halal_id']) {
            echo "checked";
        }
    }}?> value="<?php echo $item['halal_id']; ?>" onchange="submit()">
                                                <label class="form-check-label colot-theme-1" for="defaultCheck1">
                                                    <?php echo $item['halal_name']; ?>
                                                </label>
                                            </div>
                                        </div>
                                        <?php endforeach;?>
                                    </div>
                                    <hr>

                                    <div class="row ">
                                        <div class="col-sm-12 t-5-b">
                                            Lainnya
                                        </div>
                                        <?php foreach ($filter_additional as $item): ?>
                                        <div class="col-sm-12 pt-10">
                                            <div class="form-check">
                                                <input class="form-check-input" name="additional[]" type="checkbox" <?php if (is_array($get_additional)) {
    for ($i = 0; $i < count($get_additional); $i++) {
        if ($get_additional[$i] == $item->additional_id) {
            echo "checked";
        }
    }}?> value="<?php echo $item->additional_id; ?>" onchange="submit()">
                                                <label class="form-check-label colot-theme-1" for="defaultCheck1">
                                                    <?php echo $item->additional_name; ?>
                                                </label>
                                            </div>
                                        </div>
                                        <?php endforeach;?>
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
                                            <div class="col-sm-7 t-5-b">Menampilkan 1 - <?php echo count($catlist) ?>
                                                dari total <?php echo $catlist_count ?> Resaturants
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="row d-flex justify-content-end">
                                                    <div class="pr-10 pt-0">
                                                        <div class="" style="width:0px;" id="c-search"> <input
                                                                type="text" id="c-search-input"
                                                                value="<?php echo $get_search ?>" name="search"
                                                                class="form-control form-control-sm"
                                                                style="border:0px; outline:0px; border-bottom:1px black solid; border-radius:0px ;padding:0px;">
                                                        </div>
                                                    </div>
                                                    <div class="pr-20 pt-10" onclick="submitme()" id="i-search" pop="0">
                                                        <i class="fas fa-search"></i>

                                                    </div>
                                                    <div>
                                                        <select class="form-control form-control-sm" name="short"
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

                                    <div class="col-sm-12">
                                        <div class="row mt-10">
                                            <?php if (count($catlist) > 0): ?>
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
                                                            <div class="col-sm-12 pl-0 mt-10" style="height:55px;">
                                                                <div class="col-sm-12 pl-10">
                                                                    <?php $count = "";?>
                                                                    <?php $split_tag = explode(",", $item->post_tags);foreach ($split_tag as $tag): ?>
                                                                    <div class="float-left"
                                                                        style="padding:0px 5px 5px 0px">
                                                                        <div class=" "
                                                                            style="background-color:#F0F0F0; color:#919191; padding:2px 5px; border-radius:5px; font-size:10px;">
                                                                            <?php echo $tag; ?>

                                                                            <?php $count .= $tag;?>
                                                                        </div>
                                                                    </div>
                                                                    <?php if (strlen($count) >= 40): ?>
                                                                    <div class="float-left"
                                                                        style="padding:0px 5px 5px 0px">
                                                                        <div class=" "
                                                                            style="background-color:#F0F0F0; color:#919191; padding:2px 5px; border-radius:5px; font-size:10px;">
                                                                            ...
                                                                        </div>
                                                                    </div>
                                                                    <?php break;endif;?>
                                                                    <?php endforeach;?>
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
                                                    <div class="container">
                                                        <div class="row mt-70 mb-30">
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
                                            <?php if (count($catlist) > 0): ?>
                                            <?php if (count($catlist) % $get_perpage == 0): ?>
                                            <a class="a-link-c" style="cursor:pointer;" onclick="submitMore()">MORE</a>
                                            <?php endif;?>
                                            <input type="number" id="perpage" name="perpage"
                                                <?php if ($get_perpage >= 0): ?> value="<?php echo $get_perpage; ?>"
                                                <?php endif;?> style="display: none">
                                            <?php endif;?>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 bc">
                                        <div class="table-responsive" hidden>
                                            <table id="data-table" class="table table-striped table-bordered"
                                                style="width: 100%;">
                                                <thead>
                                                    <tr>

                                                        <th>Title</th>
                                                        <th>Publish Date</th>
                                                        <th>Publish Date</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="3">A</td>
                                                        <td style="display: none;"></td>
                                                        <td style="display: none;"></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Indonse</td>
                                                        <td>data table</td>
                                                        <td>data table</td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <input type="text" id="search-city">
                                        <ul id="myMenu">
                                            <li> a </li>
                                            <li>
                                                <ul class="c">
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                angin
                                                            </label>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                aufna
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                agij
                                                            </label>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li> b </li>
                                            <li>
                                                <ul class="c">
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                bangin
                                                            </label>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                baufna
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                bagij
                                                            </label>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </li>

                                        </ul>
                                        <a href="#" id="order-popover" data-toggle="popover" data-html="true"
                                            data-placement="bottom">OPEN</a>
                                        <div id="popover_content_wrapper" style="display:none;">
                                            <div style="width: 100px;">
                                                <div class="round">
                                                    <input type="checkbox" id="checkbox3" />
                                                    <label for="checkbox3"></label>
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
    <input type="number" id="dtperpage" value="<?php echo $perpage; ?>" style="display: none">
    <!-- JAVASCRIPT
        ==================================================-->

    <script src="<?php echo base_url('assets/js/popper.js') ?>"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
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
    <script src="<?php echo base_url() . 'assets/plugins/datatables/js/jquery.datatables.min.js' ?>"></script>
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
            document.getElementById('catlist-form').submit();
        } else if (containerInput.val() != "" && input.attr('pop') == 1) {
            document.getElementById('catlist-form').submit();
        } else if (containerInput.val() == "" && input.attr('pop') == 1) {
            document.getElementById('catlist-form').submit();
        }
    }

    function submitMore() {

        $dt = parseInt($("#perpage").val()) + parseInt($("#dtperpage").val())
        $("#perpage").val($dt)
        document.getElementById('catlist-form').submit();
    }
    $(function() {
        $('#data-table').dataTable();
        setSearch()

        $('#order-popover').popover({
            html: true,
            content: function() {
                return $('#popover_content_wrapper').html();
            }
        }).on('shown.bs.popover', function() {});


        $('#search-city').keyup(function() {
            var matches = $('ul#myMenu').find('li:contains(' + $(this).val() + ') ');
            $('li', 'ul#myMenu').not(matches).slideUp();
            matches.slideDown();
        });
    })
    </script>

</body>

</html>