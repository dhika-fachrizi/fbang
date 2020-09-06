
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
							Home/<a href=""><u>Tag</u> </a>
						</div>
					</div>
				</div>
			</section>

			<section>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12  pb-30 cpl-0 text-theme-1" style="font-size:18px;">
                            Search result for Tag : <b class="ext-theme-2" style="font-size:21px;"><u><?=$tag?></u></b>
                        </div>
                    </div>
				</div>
            </section>
				<form method="get" id="catlist-form">
				<section>
					<div class="container">
						<div class="row mb-30">
							<div class="col-sm-3 cpl-0">
								<div class="col-sm-12 pl-0 t-5-b">
									<p>Filter</p>
								</div>
								<div class="col-sm-12 pb-20 pt-10 mb-30" style="border:1px #DDDDDD solid;border-radius:3px;">
									<div class="row ">
										<div class="col-sm-12 t-5-b">
											Kategori
										</div>
										<div class="col-sm-12 pt-10">
											<?php foreach ($category as $item) : ?>
												<div class="form-check pb-10">
													<input class="form-check-input" name="category[]"  onchange="submit()" type="checkbox" value="<?= $item['category_id'] ?>" id="<?= $item['category_name'] ?>">
													<label class="form-check-label colot-theme-1" for="<?= $item['category_name'] ?>">
														<?= $item['category_name'] ?>
													</label>
												</div>
											<?php endforeach; ?>

										</div>

									</div>

								</div>

								<div class="col-sm-12 cpl-0 news-b-image m-0 " style="background-image: url('') ; background-color:#F4F4F4; height: 238px; width:100%" hidden>
								</div>
							</div>
						</form>
							<div class="col-sm-9">
								<div class="row">
									<div class="col-sm-12">
										<?php foreach ($data->result() as $item) : ?>
											<div class="row pb-20 cpl-0">

												<div class="col-5 news-b-image m-0" style="background-image: url('<?php echo base_url() . 'assets/images/' . $item->post_image ?>') ;">

												</div>

												<div class="col-7">
													<div class="col-12 colot-theme-1" style="font-size:15px;"><span><?php $date = date_create($item->post_date);
																													echo date_format($date, "d M Y"); ?>
															| <?= $item->post_views ?>
															Min Read</span></div>
													<div class="col-12  text-thema-split-2" style="height:86px;">
														<div class="text-theme-1" style="margin-top: 0px;font-size:24px;font-weight:bold;">
															<?= $item->post_title ?>
														</div>
													</div>
													<div class="col-12  text-thema-split-4" text-theme-1>
														<div class="colot-theme-1" style="font-size:15px;">
															<?= $item->post_description ?>
														</div>

													</div>
													<div class="col-12 mt-10" style="font-size:15px;">
														<a class="a-link-c" href="<?php if ($item->post_type_id == 1) {
                                                                                echo base_url() . 'news/detail/' . $item->post_slug;
                                                                            } else if ($item->post_type_id == 2) {
                                                                                echo base_url() . 'catlist/detail/' . $item->post_slug;
                                                                            } else if ($item->post_type_id == 3) {
                                                                                echo base_url() . 'umkm/detail/' . $item->post_slug;
                                                                            } else if ($item->post_type_id == 4) {
                                                                                echo base_url() . 'stfood/detail/' . $item->post_slug;
                                                                            } else if ($item->post_type_id == 5) {
                                                                                echo base_url() . 'hltfood/detail/' . $item->post_slug;
                                                                            } ?>">Read
															Now</a>
													</div>
												</div>

											</div>
										<?php endforeach ?>
										<div class="row pt-20">
											<div class="col-sm-12 d-flex justify-content-end">
												<a href="" class="a-link-c">SEE MORE >></a>
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
    let cityParams = [];

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
        var matches = $('ul#myMenu').find('li:contains(' + $(e).val() + ') ');
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