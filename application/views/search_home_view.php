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

    .popover.arrow {
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

    .showSearch {
        display: none;
    }

    @media only screen and (max-width: 768px) {
        .short-box {
            width: 100%;
        }

        .hideSearch {
            display: none;
        }

        .showSearch {
            display: block;
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

<body class="content-animate" style="letter-spacing: 0px;word-spacing: -1px;">

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
				================================================== -->


            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 pt-30 pb-30 cpl-0 text-theme-1" style="font-size:15px;">
                            Home/<a href=""><u>Search</u> </a>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12  pb-30 cpl-0 text-theme-1" style="font-size:18px;">
                            Search result for : <b class="ext-theme-2" style="font-size:21px;"><u><?= $keyword ?></u></b>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row mb-30">
                        <div class="col-sm-3 cpl-0">
                            <div class="hideSearch">
                                <form method="get" id="catlist-form">
                                    <div class="col-sm-12 pl-0 t-5-b">
                                        <p>Filter</p>
                                    </div>
                                    <div class="col-sm-12 pb-20 pt-10 mb-30" style="border:1px #DDDDDD solid;border-radius:3px;">
                                        <div class="row ">
                                            <div class="col-sm-12 t-5-b">
                                                Kategori
                                            </div>
                                            <div class="col-sm-12 pt-10">
                                                <input type="hidden" name="search_query" value="<?= $keyword ?>" />
                                                <?php foreach ($type_category as $item) : ?>
                                                    <div class="form-check pb-10">
                                                        <input class="form-check-input" name="category[]" type="checkbox" <?php if (is_array($get_category)) {
                                                                                                                                for ($i = 0; $i < count($get_category); $i++) {
                                                                                                                                    if ($get_category[$i] == $item['type_id']) {
                                                                                                                                        echo "checked";
                                                                                                                                    }
                                                                                                                                }
                                                                                                                            } ?> value=" <?php echo $item['type_id']; ?>" onchange="submit()">
                                                        <label class="form-check-label colot-theme-1" for="defaultCheck1">
                                                            <?php echo $item['type_name']; ?>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-9 short-box">
                            <?php if ($search_result) : ?>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="hideSearch">
                                            <div class="row pb-20">
                                                <div class="col-sm-12 t-5-b">Show 5 of <?= $search_result ?> Results</div>
                                            </div>
                                            <?php foreach ($data as $item) : ?>
                                                <div class="row pb-20 cpl-0">
                                                    <div class="col-5 news-b-image m-0" style="background-image: url('<?php echo base_url() . 'assets/images/' . $item['post_image']; ?>') ;">
                                                    </div>
                                                    <div class="col-7">
                                                        <div class="col-12 colot-theme-1" style="font-size:15px;"><span><?php $date = date_create($item['post_date']);
                                                                                                                        echo date_format($date, "d M Y"); ?>
                                                                | <?= $item['post_views'] ?>
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
                                                            <a class="a-link-c" href="<?php if ($item['post_type_id'] == 1) {
                                                                                            echo base_url() . 'news/detail/' . $item['post_slug'];
                                                                                        } else if ($item['post_type_id'] == 2) {
                                                                                            echo base_url() . 'catlist/detail/' . $item['post_slug'];
                                                                                        } else if ($item['post_type_id'] == 3) {
                                                                                            echo base_url() . 'umkm/detail/' . $item['post_slug'];
                                                                                        } else if ($item['post_type_id'] == 4) {
                                                                                            echo base_url() . 'stfood/detail/' . $item['post_slug'];
                                                                                        } else if ($item['post_type_id'] == 5) {
                                                                                            echo base_url() . 'hltfood/detail/' . $item['post_slug'];
                                                                                        } ?>">Read
                                                                Now</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            <?php endforeach ?>
                                        </div>
                                        <div class="showSearch">
                                            <?php foreach ($data as $item) : ?>
                                                <div class="row pb-20 cpl-0 pr-10">
                                                    <div class="col-12 news-b-image m-0" style="background-image: url('<?php echo base_url() . 'assets/images/' . $item['post_image']; ?>');">
                                                    </div>
                                                    <div class="col-md-12" style="padding-right: 0px;padding-left: 0px;">
                                                        <div class="col-12 colot-theme-1" style="font-size:15px;padding-right: 0px;padding-left: 0px;"><span><?php $date = date_create($item['post_date']);
                                                                                                                                                                echo date_format($date, "d M Y"); ?>
                                                                | <?= $item['post_views'] ?>
                                                                Min Read</span></div>
                                                        <div class="col-12  text-thema-split-2" style="padding-right: 0px;padding-left: 0px;">
                                                            <div class="text-theme-1" style="margin-top: 0px;font-size:24px;font-weight:bold;">
                                                                <?= $item['post_title'] ?>
                                                            </div>
                                                        </div>
                                                        <div class="col-12  text-thema-split-4" style="padding-right: 0px;padding-left: 0px;" text-theme-1>
                                                            <div class="colot-theme-1" style="font-size:15px;">
                                                                <?= $item['post_description'] ?>
                                                            </div>

                                                        </div>
                                                        <div class="col-12 mt-10" style="font-size:15px;padding-right: 0px;padding-left: 0px;">
                                                            <a class="a-link-c" href="<?php if ($item['post_type_id'] == 1) {
                                                                                            echo base_url() . 'news/detail/' . $item['post_slug'];
                                                                                        } else if ($item['post_type_id'] == 2) {
                                                                                            echo base_url() . 'catlist/detail/' . $item['post_slug'];
                                                                                        } else if ($item['post_type_id'] == 3) {
                                                                                            echo base_url() . 'umkm/detail/' . $item['post_slug'];
                                                                                        } else if ($item['post_type_id'] == 4) {
                                                                                            echo base_url() . 'stfood/detail/' . $item['post_slug'];
                                                                                        } else if ($item['post_type_id'] == 5) {
                                                                                            echo base_url() . 'hltfood/detail/' . $item['post_slug'];
                                                                                        } ?>">Read
                                                                Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach ?>
                                        </div>
                                        <div class="row pt-20">
                                            <div class="col-sm-12 d-flex justify-content-end">
                                                <a href="" class="a-link-c">SEE MORE >></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php else : ?>
                                <div class="row">
                                    <div class="col-md-12 d-flex justify-content-center">
                                        <h1 style="color: #919191">Opppss....</h1>
                                    </div>
                                    <div class="col-md-12 d-flex justify-content-center">
                                        <p style="color: #919191">No Article found</p>
                                    </div>
                                </div>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            </section>
            <div class="fixed-bottom unhide-m">
                <div class="row d-flex justify-content-center pb-20">
                    <div class="b-white" onclick="filterMobile('on')"> Filter On
                    </div>
                </div>
            </div>
            <div class="fixed-bottom unhide-m">
                <div class="row d-flex justify-content-center pb-20">
                    <div class="b-white" onclick="filterMobile('on')"> Filter On
                    </div>
                </div>
            </div>
            <form id="form-mobile" method="get">
                <div class="fixed-bottom filterMobile" style=" height:100%; padding:unset;">
                    <div class="row d-flex justify-content-center pb-20" style="width:100%; height:100%;padding:unset; margin:unset;">
                        <div class="box-white" style="width:100%; height:100%; padding:unset;">
                            <div class="col-sm-12 pb-100" style="height:100%;">
                                <div class="col-sm-12 t-5-b">
                                    <p>Filter</p>
                                </div>
                                <div class="col-sm-12 pb-20 pt-10 mb-30" style="overflow: auto; height:100%;">
                                    <?php if (!empty($type_category)) : ?>
                                        <div class="row ">
                                            <div class="col-sm-12 t-5-b">
                                                Kategori
                                            </div>
                                            <input type="hidden" name="search_query" value="<?= $keyword ?>" />
                                            <?php foreach ($type_category as $item) : ?>
                                                <div class="col-sm-12 pt-10">
                                                    <div class="form-check">
                                                        <input class="form-check-input" name="category[]" type="checkbox" <?php if (is_array($get_category)) {
                                                                                                                                for ($i = 0; $i < count($get_category); $i++) {
                                                                                                                                    if ($get_category[$i] == $item['type_id']) {
                                                                                                                                        echo "checked";
                                                                                                                                    }
                                                                                                                                }
                                                                                                                            } ?> value=" <?php echo $item['type_id']; ?>">
                                                        <label class="form-check-label colot-theme-1" for="defaultCheck1">
                                                            <?php echo $item['type_name']; ?>
                                                        </label>
                                                    </div>
                                                    <input type="hidden" name="search_query" value="<?= $keyword ?>" />
                                                    <?php foreach ($type_category as $item) : ?>
                                                        <div class="col-sm-12 pt-10">
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="category[]" type="checkbox" <?php if (is_array($get_category)) {
                                                                                                                                        for ($i = 0; $i < count($get_category); $i++) {
                                                                                                                                            if ($get_category[$i] == $item['type_id']) {
                                                                                                                                                echo "checked";
                                                                                                                                            }
                                                                                                                                        }
                                                                                                                                    } ?> value=" <?php echo $item['type_id']; ?>">
                                                                <label class="form-check-label colot-theme-1" for="defaultCheck1">
                                                                    <?php echo $item['type_name']; ?>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                        <hr>
                                    <?php endif; ?>
                                    <div class="fixed-bottom filterMobile">
                                        <div class="row d-flex justify-content-center pb-20">

                                            <div class="col-6 pl-50">
                                                <div class="b-white-btn pb-20 pt-20" onclick="filterMobile('off')">
                                                    <center>Close</center>
                                                </div>
                                            </div>
                                            <div class="col-6 pr-50">
                                                <div class="b-white-btn pb-20 pt-20" style="background-color: #F79D46;" onclick="submitMobile()">
                                                    <center>Terapkan</center>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
    <div class="modal fade" id="ModalSearch" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="z-index: 10000;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="<?php echo site_url('search'); ?>" method="GET">
                        <div class="input-group">
                            <input type="text" name="search_query" class="form-control input-search" style="height: 40px;" placeholder="Search..." required>
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit" style="height: 40px;background-color: #ccc;"><span class="fa fa-search"></span></button>
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