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
                        <div class="col-sm-12 pt-30 pb-30 pl-0 top-nav-menu">
                            Home/<a href=""><u>Promo</u> </a>
                        </div>
                    </div>
                </div>
            </section>


            <section>
                <div class="container">
                    <div class="row mb-30">

                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-12 pl-0">
                                    <div class="row">
                                        <div class="col-4 t-5-b text-theme-2 fz-25"><i>New Promo</i></div>
                                        <div class="col-8">
                                            <div class="row d-flex justify-content-end">
                                                <div class="pr-20 pt-10"><i class="fas fa-search"></i>
                                                </div>
                                                <div class="pr-10">
                                                    <select class="form-control form-control-sm"
                                                        style="border:0px; outline:0px; border-bottom:1px black solid; border-radius:0px">
                                                        <option>Lokasi</option>
                                                        <option>Jakarta</option>
                                                        <option>Bandung</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <select class="form-control form-control-sm"
                                                        style="border:0px; outline:0px; border-bottom:1px black solid; border-radius:0px">
                                                        <option>Urutkan Berdasarkan</option>
                                                        <option>Harga</option>
                                                        <option>Tempat</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-12 pl-0">
                                    <div class="row mt-10">
                                        <?php foreach ([1, 2, 3, 4, 6, 3, 1, 2, 3, 4, 6, 3] as $item): ?>
                                        <div class="col-md-4 pb-20">
                                            <div class="row pl-10">
                                                <div class="col-sm-12">
                                                    <div class="row"
                                                        style="border:1px #DDDDDD solid;border-radius:3px;">
                                                        <div class="col-sm-12 popular-b-image m-0 pl-10"
                                                            style="background-image: url('<?php echo base_url() . 'assets/images/sushi-on-brown-wooden-board-2098085.png'; ?>') ; height:250px;">
                                                        </div>
                                                        <div class="col-sm-12 mt-10 pl-10 text-thema-split-2"
                                                            style="height:60px;">
                                                            <div class="text-theme-1"
                                                                style="margin-top:0px;font-size:18px;font-weight:bold;">
                                                                Lorem ipsum
                                                                dolor sit amet
                                                                con
                                                                adipisicing
                                                                elit. Laboriosam quasi
                                                                repudiandae error in unde delectus corporis atque nisi
                                                                voluptates
                                                                architecto,
                                                                nulla ad dolore harum id voluptate incidunt fugiat et
                                                                saepe.
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
                                                                            Lorem Ipsum Dolor
                                                                        </div>
                                                                    </div>
                                                                    <div class="row  pl-10">
                                                                        <div class="pr-10 ">
                                                                            <i class="fas fas fa-map-marker c-t-1"
                                                                                style="font-size:12px;width:10px">
                                                                            </i>
                                                                        </div>
                                                                        <div class="color-theme-1 f-t-12">
                                                                            Jakarta
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
                                                                            00.00 - 00.00
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="col-sm-12 mt-30  d-flex align-items-center d-flex justify-content-center btn"
                                                            data-toggle="modal" data-target="#exampleModalCenter"
                                                            style=" background-color: #F79D46;height:40px;border-radius:0px;">

                                                            <div class="">
                                                                CHECK PROMO
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <?php endforeach;?>
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
    <!-- Modal -->
    <div class="modal fade bd-example-modal-xl" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="row">
                        <div class="col-7">
                            <div class="col-12 news-b-image m-0 img-promo-modal"
                                style="background-image: url('<?php echo base_url() . 'assets/images/sushi-on-brown-wooden-board-2098085.png'; ?>') ; width:100%;">

                            </div>
                        </div>
                        <div class="col-5 pl-0">
                            <div class="container" style="border:1px #DDDDDD solid;border-radius:1px;height:100%">
                                <div class="row">
                                    <div class="col-12 text-theme-2 f-promo-title">
                                        Info Promo
                                    </div>
                                    <div class="col-12 pl-30">
                                        <div class="row overflow-hidden">
                                            <div class="col-12 f-t-18">
                                                <div class="row">
                                                    <div><i class="fas fa-home c-t-1">
                                                        </i></div>
                                                    <div class="pl-10 c-t-2">Lorem Ipsum Dolor</div>
                                                </div>

                                            </div>
                                            <div class="col-12 f-t-18">
                                                <div class="row">
                                                    <div><i class="fas fa-map-marker c-t-1">
                                                        </i></div>
                                                    <div class="pl-10 c-t-2">Jakarta</div>
                                                </div>

                                            </div>
                                            <div class="col-12 f-t-18">
                                                <div class="row">
                                                    <div><i class="fas fa-clock c-t-1">
                                                        </i></div>
                                                    <div class="pl-10 c-t-2">00.00 - 00.00</div>
                                                </div>

                                            </div>
                                            <div class="col-12 f-t-18">
                                                <div class="row">
                                                    <div><i class="fas fa-phone c-t-1">
                                                        </i></div>
                                                    <div class="pl-10 c-t-2">(021) 1234 5678</div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12" style="font-size:18px">
                                        <hr>
                                    </div>
                                    <div class="col-12  f-t-18">
                                        <div style="width: 100%; height:80px; overflow:hidden;">
                                            <div
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
                        <div class="col-12">
                            <div class="row pt-20">
                                <div class="col-12">
                                    <ol>
                                        <li>Promo Cicilan 0% berlaku untuk semua member blanja.com dan pengguna kartu
                                            kredit dari Bank yang bekerjasama dengan blanja.com</li>
                                        <li>Promo Cicilan 0% hanya untuk tenor 3 bulan dan 6 bulan ( Berlaku hanya untuk
                                            bank yang di promokan). Diluar dari Tenor tersebut, dikenakan biaya cicilan
                                            bunga ringan sesuai dengan ketentuan masing masing Bank penerbit</li>
                                        <li>Khusus pengguna kartu kredit AEON cicilan 0% hanya berlaku untuk tenor 3
                                            bulan</li>
                                        <li>Minimum transaksi setelah potongan diskon atau pemakaian voucher tambahan
                                            adalah IDR 1.000.000 untuk tenor 3 bulan, IDR 3.000.000 untuk tenor 6 bulan
                                        </li>
                                        <li>Persetujuan permohonan cicilan adalah hak pihak Bank sepenuhnya</li>
                                        <li>Proses pengubahan transaksi ke cicilan dilakukan oleh masing-masing Bank,
                                            dan waktunya tergantung Bank penerbit. Anda bisa menanyakan proses
                                            pengubahan ke cicilan ini ke Call Center Bank penerbit masing-masing</li>
                                        <li>Khusus untuk pemegang Kartu Kredit BRI:
                                            <ul>
                                                <li>Biaya administrasi sebesar Rp 50.000 akan dikenakan untuk setiap
                                                    transaksi yang diubah menjadi cicilan, sesuai dengan kebijakan yang
                                                    dikeluarkan oleh BRI</li>
                                                <li>Fee transaksi Rp. 50.000 akan di debit otomatis dan di informasikan
                                                    dalam billing tagihan</li>
                                                <li>Untuk info lebih lanjut silahkan hubungin Customer Service BRI di
                                                    14017 / 021-57987400</li>
                                            </ul>
                                        </li>
                                        <li>Khusus untuk pemegang Kartu Kredit ANZ:
                                            <ul>
                                                <li>Biaya administrasi sebesar Rp 10.000 akan dikenakan untuk setiap
                                                    transaksi yang diubah menjadi cicilan, sesuai dengan kebijakan yang
                                                    dikeluarkan oleh ANZ</li>
                                                <li>Fee transaksi Rp. 10.000 akan di debit otomatis dan di informasikan
                                                    dalam billing tagihan</li>
                                                <li>Cicilan 0% tidak berlaku untuk Kartu iPay dan Kartu Cicilan</li>
                                                <li>Untuk info lebih lanjut silahkan hubungin Customer Service ANZ di
                                                    0804 1000 269 / 021-2758 6777</li>
                                            </ul>
                                        </li>
                                        <li>Promo berlaku untuk semua produk di situs blanja.com yang mengikuti syarat
                                            dan ketentuan, tidak hanya terbatas pada produk di dalam halaman ini</li>
                                        <li>Periode 6 Januari &ndash; 31 Maret 2017 untuk MNC BANK, Danamon, AEON, BRI,
                                            UOB, Permata, Panin, ANZ, OCBC, CitiBank, BCA, HSBC, BUKOPIN, BNI, CIMB
                                            NIAGA dan Standard Chartered</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
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