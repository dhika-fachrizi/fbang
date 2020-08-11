<!DOCTYPE html>
<html lang="en">
	<head>

		<!-- Page Title -->
		<title><?php echo $site_title; ?></title>

		<!-- Page header -->
		<meta charset="utf-8"/>
		<meta name="description" content=""/>
		<meta name="keywords" content=""/>
		<meta name="author" content=""/>
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
		<meta name="viewport" content="width=device-width"/>
		<!-- CSS -->
		<link rel="stylesheet" href="<?php echo base_url('theme/css/bootstrap.min.css') ?>"/>
		<link rel="stylesheet" href="<?php echo base_url('theme/css/style.css') ?>"/>
		<link rel="stylesheet" href="<?php echo base_url('theme/css/style-custome-dhika.css') ?>"/>
		<link rel="stylesheet" href="<?php echo base_url('theme/css/padding-margin.css') ?>"/>
		<!-- Favicons -->
		<link rel="shortcut icon" href="<?php echo base_url('theme/images/' . $icon); ?>">
		<!-- SEO Tag -->
	    <meta name="description" content="<?php echo $site_desc; ?>"/>
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
	    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/font-awesome.min.css' ?>"/>
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

				<!-- HOME SECTION
				================================================== -->
				<section id="homepage" class="home page-section parallax-2 overlay-light-alpha-10" style="border:2px red solid;">
					<div class="table-content">
						<div class="table-center-text">
							<div class="container">
								<h2 class="font-face1 heading1 fw700 mb-40 mb-xs-30"><?php echo $caption_1; ?></h2>
								<h1 class="font-face1 heading2 fw700 mb-40 mb-xs-30"><?php echo $caption_2; ?></h1>
								<div class="local-scroll">
									<a href="<?php echo site_url('about'); ?>" class="btn bg-black white-color">About</a>
									<span class="btn_seperator"></span>
									<a href="<?php echo site_url('blog'); ?>" class="btn bg-black whitre-color hidden-xs">Blog</a>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section  style="border:2px red solid;" >
					<div class="container">
						<div class="row">
							<div class="col-sm-3 bc"  style="height:1600px">2</div>
							<div class="col-sm-9 bc" >
							</div>
						</div>
					</div>
				</section>

				<section  style="border:2px red solid;" >
					<div class="container">
						<div class="row">
							<div class="col-sm-3 bc"  style="height:200px">2</div>
							<div class="col-sm-9 bc" >
							</div>
						</div>
					</div>
				</section>


				<section  style="border:2px red solid;" >
					<div class="container">
						<div class="row">
							<div class="col-sm-12 bc" style="height:150px">2</div>
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

		</script>

	</body>
</html>