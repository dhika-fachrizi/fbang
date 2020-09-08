<?php if ($category['type_id'] == 2) {
    $dynamic_detail_link = 'catlist/detail/';
} else if ($category['type_id'] == 3) {
    $dynamic_detail_link = 'umkm/detail/';
} else if ($category['type_id'] == 4) {
    $dynamic_detail_link = 'stfood/detail/';
} else if ($category['type_id'] == 5) {
    $dynamic_detail_link = 'hltfood/detail/';
}?>
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

    <style>
    .cty-ul {
        list-style-type: none;
        padding: 10px 0;
        margin: 0;
        -webkit-column-count: 4;
        -moz-column-count: 4;
        column-count: 4;

    }

    .btn-city {
        min-width: 150px !important;
        padding: 0 20px !important;
        line-height: unset !important;
    }

    .cty-li {
        /* margin: 5px 0; */
    }

    .popover {

        /* left:100px !important; */
    }

    .popover>.arrow {
        display: none;
        /* left:100px !important; */
    }

    .popover-body {
        padding: unset;
    }

    .nofocus-input:focus {
        border: 0px;
        background-color: unset;
        outline: unset;
    }

    ul#myMenu {
        padding-left: 10px;
    }

    .box-white {
        background-color: white;
    }

    .b-white {
        background-color: white;
        padding: 3px 40px;
        -webkit-box-shadow: 1px 1px 11px 2px rgba(0, 0, 0, 0.1);
        -moz-box-shadow: 1px 1px 11px 2px rgba(0, 0, 0, 0.1);
        box-shadow: 1px 1px 11px 2px rgba(0, 0, 0, 0.1);
        border: 1px #F0F0F0 solid;
        font-weight: bold;
        cursor: pointer;

    }

    .b-white-btn {
        background-color: white;
        padding: 10px 40px;
        -webkit-box-shadow: 1px 1px 11px 2px rgba(0, 0, 0, 0.1);
        -moz-box-shadow: 1px 1px 11px 2px rgba(0, 0, 0, 0.1);
        box-shadow: 1px 1px 11px 2px rgba(0, 0, 0, 0.1);
        border: 1px #F0F0F0 solid;
        font-weight: bold;
        cursor: pointer;
        border-radius: 5px;
    }

    .catlist-thumb-box {
        max-height: 330px;
    }

    .catlist-thumb-title {
        font-size: 40px;
        font-weight: bold;
        line-height: normal;
    }

    @media only screen and (max-width: 768px) {
        .short-box {
            width: 100%;
        }

        .catlist-thumb-title {
            font-size: 32px;
        }

        .catlist-thumb-box {
            max-height: 260px;
        }

        .mpb-20 {
            padding-bottom: 20px;
        }

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
                <div class="container hide-m">
                    <div class="row">
                        <?php if (!empty($category)): ?>
                        <div class="col-sm-12 pt-30 pb-30 pl-0" style="font-size:12px;">
                            Home/<?php echo $category['type_name'] ?>/<a
                                href=""><u><?php echo $category['category_name'] ?></u> </a>
                        </div>
                        <?php else: ?>
                        <div class="col-sm-12 pt-30 pb-30 pl-0" style="font-size:12px;">
                            Home/Restaurant & Cafe/<a href=""><u>Restautant</u> </a>
                        </div>
                        <?php endif;?>
                    </div>
                </div>
            </section>
            <?php if (!empty($thumbnail)): ?>
            <section name="top-ras">
                <div class="container">
                    <div class="row pb-20 pm-16">
                        <div class="col-sm-7 news-b-image m-0"
                            style="background-image: url('<?php echo base_url() . 'assets/images/' . $thumbnail->detail_category_image; ?>') ;height:430px;">
                        </div>
                        <div class="col-sm-5 rpm-rl">
                            <div class="col-sm-12 rpm-rl unhide-m ">
                                <div class="pt-20 pb-10" style="color:#919191;font-size:12px;"> Cover Foto :
                                    <?php echo $thumbnail->detail_category_desc; ?>
                                </div>
                            </div>
                            <div class="col-sm-12 rpm-rl pb-10">
                                <div style="color:red;font-size:25px;"> <?php echo $category['category_name'] ?></div>
                            </div>
                            <div class="col-sm-12  text-thema-split-7 rpm-rl catlist-thumb-box">
                                <div class="text-theme-1 catlist-thumb-title" style="margin-top: 0px;">
                                    <?php echo $thumbnail->detail_category_title; ?>
                                </div>
                            </div>
                            <div class="col-sm-12 pt-40 rpm-rl hide-m">
                                <div style="color:#919191;font-size:12px;"> Cover Foto :
                                    <?php echo $thumbnail->detail_category_desc; ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <?php endif;?>
            <form method="get" id="catlist-form">
                <section>
                    <div class=" container pt-30">
                        <div class="row mb-30">
                            <div class="col-sm-3 pl-0 hide-m">
                                <div class="col-sm-12 pl-0 t-5-b">
                                    <p>Filter</p>
                                </div>
                                <div class="col-sm-12 pb-20 pt-10 mb-30"
                                    style="border:1px #DDDDDD solid;border-radius:3px;">
                                    <?php if (!empty($filter_category)): ?>
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
                                    <?php endif;?>
                                    <?php if (!empty($filter_city)): ?>
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
                                        <div class="col-sm-12">
                                            <div id="hiddenInput" hidden></div>
                                            <div id="popover-form" hidden>
                                                <div style="width:600px;">
                                                    <div class="col-sm-12 pb-10" style="border: 5px solid #DDDDDD;"
                                                        class="">
                                                        <div class="pt-10 pb-0 pl-20 row">
                                                            <div class="pr-10 colot-theme-1"><i
                                                                    class="fas fa-search"></i></div>
                                                            <div>
                                                                <input type="text" id="search-city" style="border:0px;"
                                                                    class="nofocus-input" value=""
                                                                    onkeydown="cityFind(this)">
                                                            </div>
                                                        </div>
                                                        <hr style="margin-top:5px;">
                                                        <div class="" style="overflow: auto; height:380px;">
                                                            <ul id="myMenu">
                                                                <?php foreach ($city as $key => $value): ?>
                                                                <?php foreach ($value as $key2 => $value2): ?>
                                                                <li> <?php echo $key2 ?></li>
                                                                <li>
                                                                    <ul class="cty-ul">
                                                                        <?php foreach ($value2 as $value3): ?>
                                                                        <li class="cty-li colot-theme-1">
                                                                            <div class="form-check">
                                                                                <input
                                                                                    class="form-check-input city-input"
                                                                                    type="checkbox"
                                                                                    value="<?php echo $value3['city_id'] ?>"
                                                                                    name="city[]"
                                                                                    onchange="cityCheck(this)">
                                                                                <label class="form-check-label"
                                                                                    for="defaultCheck1">
                                                                                    <?php echo strtolower($value3['city_name']) ?>
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <?php endforeach;?>
                                                                    </ul>
                                                                </li>
                                                                <?php endforeach;?>
                                                                <?php endforeach;?>
                                                            </ul>
                                                        </div>
                                                        <hr style="margin-top:10px;margin-bottom:10px;">
                                                        <div class="row  pr-20 d-flex justify-content-end">
                                                            <div><button class="btn-city" onclick="resetCity()"
                                                                    class="btn btn-sm">Reset</button></div>
                                                            <div><button class="btn-city"
                                                                    style="background-color:#F79D46;"
                                                                    onclick="submitMoreCity()"
                                                                    class="btn btn-sm">Submit</button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="a-link-c pt-10">
                                                <a class="a-link-c" data-container="body" data-toggle="popover">
                                                    selengkapnya
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <?php endif;?>
                                    <?php if (!empty($filter_location)): ?>
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
                                    <?php endif;?>
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
                                    <?php if (!empty($filter_additional)): ?>
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
                                    <?php endif;?>
                                </div>

                                <div class="col-sm-12 pl-0 news-b-image m-0 "
                                    style="background-image: url('') ; background-color:#F4F4F4; height: 238px;" hidden>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-7 t-5-b mpb-20">Menampilkan 1 -
                                                <?php echo count($catlist) ?>
                                                dari total <?php echo $catlist_count ?> Resaturants
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="row d-flex justify-content-end">
                                                    <div class="pr-10 pt-0 hide-m">
                                                        <div class="" style="width:0px;" id="c-search"> <input
                                                                type="text" id="c-search-input"
                                                                value="<?php echo $get_search ?>" name="search"
                                                                class="form-control form-control-sm"
                                                                style="border:0px; outline:0px; border-bottom:1px black solid; border-radius:0px ;padding:0px;">
                                                        </div>
                                                    </div>
                                                    <div class="pr-20 pt-10 hide-m" onclick="submitme()" id="i-search"
                                                        pop="0">
                                                        <i class="fas fa-search"></i>
                                                    </div>
                                                    <div class="short-box pm-16 mpb-20">
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

                                    <div class="col-sm-12">
                                        <div class="row mt-10">
                                            <?php if (count($catlist) > 0): ?>
                                            <?php foreach ($catlist as $item): ?>
                                            <div class="col-lg-4 pb-20 hide-m">
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
                                                                        href="<?php echo base_url() . $dynamic_detail_link . $item->post_slug; ?>">
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
                                                                        <?php if ($item->post_type_id == 2) {
    echo $item->detail_catlist_name;
} else if ($item->post_type_id == 3) {
    echo $item->detail_umkm_name;
} else if ($item->post_type_id == 4) {
    echo $item->detail_stfood_name;
} else if ($item->post_type_id == 5) {
    echo $item->detail_hltfood_name;
}?>


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

                                            <div class="col-lg-12 unhide-m pb-10">
                                                <div class="row pb-20 pm-16 pb-0">
                                                    <div class="col-4 news-b-image m-0"
                                                        style="background-image: url('<?php echo base_url() . 'assets/images/' . $item->post_image; ?>');height:124px;">
                                                    </div>
                                                    <div class="col-8 pl-0">
                                                        <div class="col-12 pl-10 text-thema-split-2 "
                                                            style="max-height:65px;">
                                                            <div class="text-theme-1"
                                                                style="margin-top: 0px;font-size:15px;font-weight:bold;">
                                                                <a
                                                                    href="<?php echo base_url() . $dynamic_detail_link . $item->post_slug; ?>"><?=$item->post_title?></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mtc-5 ">
                                                            <div class="row pl-10">
                                                                <div class="col-1 p-0">
                                                                    <i class="fas fa-home"
                                                                        style="font-size:12px;color:red;">
                                                                    </i>

                                                                </div>

                                                                <div class="col-11 colot-theme-1 pl-0"
                                                                    style="font-size:12px;">
                                                                    <?php if ($item->post_type_id == 2) {
    echo $item->detail_catlist_name;
} else if ($item->post_type_id == 3) {
    echo $item->detail_umkm_name;
} else if ($item->post_type_id == 4) {
    echo $item->detail_stfood_name;
} else if ($item->post_type_id == 5) {
    echo $item->detail_hltfood_name;
}?>


                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="row pl-10">
                                                                <div class="col-1 p-0">
                                                                    <i class="fas fas fa-map-marker"
                                                                        style="font-size:12px;color:red;width:10px;padding-left:2px;">
                                                                    </i>
                                                                </div>
                                                                <div class="col-11 colot-theme-1 pl-0"
                                                                    style="font-size:12px; text-transform: capitalize;">
                                                                    <?php echo strtolower($item->city_name); ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 pl-0" style="height:55px;">
                                                            <div class="col-sm-12 pl-10">
                                                                <?php $count = "";?>
                                                                <?php $split_tag = explode(",", $item->post_tags);foreach ($split_tag as $tag): ?>
                                                                <div class="float-left" style="padding:0px 5px 5px 0px">
                                                                    <div class=" "
                                                                        style="background-color:#F0F0F0; color:#919191; padding:2px 5px; border-radius:5px; font-size:10px;">
                                                                        <?php echo $tag; ?>

                                                                        <?php $count .= $tag;?>
                                                                    </div>
                                                                </div>
                                                                <?php if (strlen($count) >= 40): ?>
                                                                <div class="float-left" style="padding:0px 5px 5px 0px">
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




                                </div>
                            </div>
                        </div>
                </section>
            </form>
            <div class="fixed-bottom unhide-m">
                <div class="row d-flex justify-content-center pb-20">
                    <div class="b-white" onclick="filterMobile('on')"> Filter On
                    </div>
                </div>
            </div>
            <form id="form-mobile" method="get">
                <div class="fixed-bottom filterMobile" style=" height:100%; padding:unset;">
                    <div class="row d-flex justify-content-center pb-20"
                        style="width:100%; height:100%;padding:unset; margin:unset;">
                        <div class="box-white" style="width:100%; height:100%; padding:unset;">
                            <div class="col-sm-12 pb-100" style="height:100%;">
                                <div class="col-sm-12 t-5-b">
                                    <p>Filter</p>
                                </div>
                                <div class="col-sm-12 pb-20 pt-10 mb-30" style="overflow: auto; height:100%;">
                                    <?php if (!empty($filter_category)): ?>
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
    }}?> value=" <?php echo $item->subcategory_id; ?>">
                                                <label class="form-check-label colot-theme-1" for="defaultCheck1">
                                                    <?php echo $item->subcategory_name; ?>
                                                </label>
                                            </div>
                                        </div>
                                        <?php endforeach;?>
                                    </div>
                                    <hr>
                                    <?php endif;?>
                                    <?php if (!empty($filter_city)): ?>
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
    }}?> value="<?php echo $item->post_city_id; ?>">
                                                <label class="form-check-label colot-theme-1" for="defaultCheck1">
                                                    <?php echo strtolower($item->city_name); ?>
                                                </label>
                                            </div>
                                        </div>
                                        <?php endforeach;?>
                                        <div class="col-sm-12">
                                            <div id="hiddenInput" hidden></div>
                                            <div id="popover-form" hidden>
                                                <div style="width:600px;">
                                                    <div class="col-sm-12 pb-10" style="border: 5px solid #DDDDDD;"
                                                        class="">
                                                        <div class="pt-10 pb-0 pl-20 row">
                                                            <div class="pr-10 colot-theme-1"><i
                                                                    class="fas fa-search"></i>
                                                            </div>
                                                            <div>
                                                                <input type="text" id="search-city" style="border:0px;"
                                                                    class="nofocus-input" value=""
                                                                    onkeydown="cityFind(this)">
                                                            </div>
                                                        </div>
                                                        <hr style="margin-top:5px;">
                                                        <div class="" style="overflow: auto; height:380px;">
                                                            <ul id="myMenu">
                                                                <?php foreach ($city as $key => $value): ?>
                                                                <?php foreach ($value as $key2 => $value2): ?>
                                                                <li> <?php echo $key2 ?></li>
                                                                <li>
                                                                    <ul class="cty-ul">
                                                                        <?php foreach ($value2 as $value3): ?>
                                                                        <li class="cty-li colot-theme-1">
                                                                            <div class="form-check">
                                                                                <input
                                                                                    class="form-check-input city-input"
                                                                                    type="checkbox"
                                                                                    value="<?php echo $value3['city_id'] ?>"
                                                                                    name="city[]"
                                                                                    onchange="cityCheck(this)">
                                                                                <label class="form-check-label"
                                                                                    for="defaultCheck1">
                                                                                    <?php echo strtolower($value3['city_name']) ?>
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <?php endforeach;?>
                                                                    </ul>
                                                                </li>
                                                                <?php endforeach;?>
                                                                <?php endforeach;?>
                                                            </ul>
                                                        </div>
                                                        <hr style="margin-top:10px;margin-bottom:10px;">
                                                        <div class="row  pr-20 d-flex justify-content-end">
                                                            <div><button class="btn-city" onclick="resetCity()"
                                                                    class="btn btn-sm">Reset</button></div>
                                                            <div><button class="btn-city"
                                                                    style="background-color:#F79D46;"
                                                                    onclick="submitMoreCity()"
                                                                    class="btn btn-sm">Submit</button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="a-link-c pt-10">
                                                <a class="a-link-c" data-container="body" data-toggle="popover">
                                                    selengkapnya
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <?php endif;?>
                                    <?php if (!empty($filter_location)): ?>
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
    }}?> value="<?php echo $item->location_id; ?>">
                                                <label class="form-check-label colot-theme-1" for="defaultCheck1">
                                                    <?php echo $item->location_name; ?>
                                                </label>
                                            </div>
                                        </div>
                                        <?php endforeach;?>
                                    </div>
                                    <hr>
                                    <?php endif;?>
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
    }}?> value="<?php echo $item['halal_id']; ?>">
                                                <label class="form-check-label colot-theme-1" for="defaultCheck1">
                                                    <?php echo $item['halal_name']; ?>
                                                </label>
                                            </div>
                                        </div>
                                        <?php endforeach;?>
                                    </div>
                                    <?php if (!empty($filter_additional)): ?>
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
    }}?> value="<?php echo $item->additional_id; ?>">
                                                <label class="form-check-label colot-theme-1" for="defaultCheck1">
                                                    <?php echo $item->additional_name; ?>
                                                </label>
                                            </div>
                                        </div>
                                        <?php endforeach;?>
                                    </div>
                                    <?php endif;?>
                                </div>

                                <div class="col-sm-12 news-b-image m-0 "
                                    style="background-image: url('') ; background-color:#F4F4F4; height: 238px;" hidden>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="fixed-bottom filterMobile">
                    <div class="row d-flex justify-content-center pb-20">

                        <div class="col-6 pl-50">
                            <div class="b-white-btn pb-20 pt-20" onclick="filterMobile('off')">
                                <center>Close</center>
                            </div>
                        </div>
                        <div class="col-6 pr-50">
                            <div class="b-white-btn pb-20 pt-20" style="background-color: #F79D46;"
                                onclick="submitMobile()">
                                <center>Terapkan</center>
                            </div>
                        </div>
                    </div>
                </div>

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
    <script src="<?php echo base_url('theme/js/jquery-2.2.4.min.js') ?>"></script>
    <script src="<?php echo base_url('theme/js/jquery.easing.min.js') ?>"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
    </script>
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
    let cityParams = [];

    function submitMobile() {
        document.getElementById('form-mobile').submit();
    }

    function filterMobile(status) {
        if (status == 'on') {
            $(".filterMobile").css("display", "unset")
        } else if (status == 'off') {
            $(".filterMobile").css("display", "none")
        }
    }


    function resetCity() {
        $(".nofocus-input").val("");
        $(".city-input").prop('checked', false);
        cityFind("");

    }

    function cityCheck(e) {
        if ($(e).prop("checked") == true) {
            cityParams.push($(e).val());
        } else if ($(e).prop("checked") == false) {
            cityParams = cityParams.filter(city => city != $(e).val());
        }
    }

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

    function toHidden(e) {
        $('#hiddenInput').append(e);
    }

    function cityFind(e) {

        // var filter = $(e).val();
        // $("ul li").each(function() {
        //     if ($(e).text().search(new RegExp(filter, "i")) < 0) {
        //         $(e).hide();
        //     } else {
        //         $(e).show()
        //     }
        // });
        if (e == "") {
            var matches = $('ul#myMenu').find('li:contains(' + e + ') ');
        } else {
            var matches = $('ul#myMenu').find('li:contains(' + $(e).val() + ') ');
        }
        $('li', 'ul#myMenu').not(matches).slideUp();
        matches.slideDown();


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

    function submitMoreCity() {
        $('#hiddenInput').empty();
        cityParams.forEach(e => {
            $('#hiddenInput').append('<input type="hidden" name="city[]" value="' + e + '">');
        });
        document.getElementById('catlist-form').submit();
    }
    $(function() {
        $(".filterMobile").css("display", "none")
        $('body').on('click', function(e) {
            $('[data-toggle="popover"]').each(function() {
                //the 'is' for buttons that trigger popups
                //the 'has' for icons within a button that triggers a popup
                if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover')
                    .has(e.target).length === 0) {
                    $(this).popover('hide');
                }
            });
        });
        setSearch()
        // $("#subscribe").popover({
        //     title: '<h4>Newsletter Subscription</h4>',
        //     container: 'body',
        //     placement: 'bottom',
        //     html: true,
        //     content: function() {
        //         return $('#popover-form').html();
        //     }
        // });

        $('[data-toggle="popover"]').popover({
            html: true,
            placement: 'right',
            content: function() {
                return $('#popover-form').html();
            }
        })

        // $('#order-popover').popover({
        //     html: true,
        //     content: function() {
        //         return $('#popover_content_wrapper').html();
        //     }
        // }).on('shown.bs.popover', function() {});

        $('#search-city').keyup(function() {
            var filter = $(this).val();
            $("ul li").each(function() {
                if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                    $(this).hide();
                } else {
                    $(this).show()
                }
            });
        });
    })
    </script>

</body>

</html>