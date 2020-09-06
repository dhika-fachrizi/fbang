<!DOCTYPE html>
<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "blog_db";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>
<head>
    <!--[if gte mso 9]><xml><o:OfficeDocumentSettings><o:AllowPNG/><o:PixelsPerInch>96</o:PixelsPerInch></o:OfficeDocumentSettings></xml><![endif]-->
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta content="width=device-width" name="viewport" />
    <!--[if !mso]><!-->
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3ac84ec18d.js" crossorigin="anonymous"></script>
    <!--<![endif]-->
    <title></title>
    <!--[if !mso]><!-->
    <!--<![endif]-->
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
        }

        .col,
        .col-1,
        .col-10,
        .col-11,
        .col-12,
        .col-2,
        .col-3,
        .col-4,
        .col-5,
        .col-6,
        .col-7,
        .col-8,
        .col-9,
        .col-auto,
        .col-lg,
        .col-lg-1,
        .col-lg-10,
        .col-lg-11,
        .col-lg-12,
        .col-lg-2,
        .col-lg-3,
        .col-lg-4,
        .col-lg-5,
        .col-lg-6,
        .col-lg-7,
        .col-lg-8,
        .col-lg-9,
        .col-lg-auto,
        .col-md,
        .col-md-1,
        .col-md-10,
        .col-md-11,
        .col-md-12,
        .col-md-2,
        .col-md-3,
        .col-md-4,
        .col-md-5,
        .col-md-6,
        .col-md-7,
        .col-md-8,
        .col-md-9,
        .col-md-auto,
        .col-sm,
        .col-sm-1,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9,
        .col-sm-auto,
        .col-xl,
        .col-xl-1,
        .col-xl-10,
        .col-xl-11,
        .col-xl-12,
        .col-xl-2,
        .col-xl-3,
        .col-xl-4,
        .col-xl-5,
        .col-xl-6,
        .col-xl-7,
        .col-xl-8,
        .col-xl-9,
        .col-xl-auto {
            padding-right: 0px;
            padding-left: 0px;
        }

        table,
        td,
        tr {
            vertical-align: top;
            border-collapse: collapse;
        }

        * {
            line-height: inherit;
        }

        a[x-apple-data-detectors=true] {
            color: inherit !important;
            text-decoration: none !important;
        }

        .header {
            width: 615px;
            height: 50px;
            background: #FFFFFF 0% 0% no-repeat padding-box;
            opacity: 1;
            border: 1px solid #ccc;
            border-bottom: 0px solid #ccc;
            padding: 10px
        }

        .content {
            width: 520px;
            background: #FFFFFF 0% 0% no-repeat padding-box;
            box-shadow: 0px 0px 10px #00000019;
            opacity: 1;
            position: absolute;
            padding: 30px;
            margin-top: 150px;
            margin-left: 30px;
        }
    </style>
    <style id="media-query" type="text/css">
        @media (max-width: 660px) {
            .header {
            width: 600px;
            height: 50px;
            background: #FFFFFF 0% 0% no-repeat padding-box;
            opacity: 1;
            border-bottom: 0px solid #ccc;
            padding: 10px
        }
            .block-grid,
            .col {
                min-width: 320px !important;
                max-width: 100% !important;
                display: block !important;
            }

            .block-grid {
                width: 100% !important;
            }

            .col {
                width: 100% !important;
            }

            .col>div {
                margin: 0 auto;
            }

            img.fullwidth,
            img.fullwidthOnMobile {
                max-width: 100% !important;
            }

            .no-stack .col {
                min-width: 0 !important;
                display: table-cell !important;
            }

            .no-stack.two-up .col {
                width: 50% !important;
            }

            .no-stack .col.num4 {
                width: 33% !important;
            }

            .no-stack .col.num8 {
                width: 66% !important;
            }

            .no-stack .col.num4 {
                width: 33% !important;
            }

            .no-stack .col.num3 {
                width: 25% !important;
            }

            .no-stack .col.num6 {
                width: 50% !important;
            }

            .no-stack .col.num9 {
                width: 75% !important;
            }

            .video-block {
                max-width: none !important;
            }

            .mobile_hide {
                min-height: 0px;
                max-height: 0px;
                max-width: 0px;
                display: none;
                overflow: hidden;
                font-size: 0px;
            }

            .desktop_hide {
                display: block !important;
                max-height: none !important;
            }

            .content {
                /* margin-top: 10px; */
                width: 450px;
                background: #FFFFFF 0% 0% no-repeat padding-box;
                box-shadow: 0px 0px 10px #00000019;
                opacity: 1;
                position: absolute;
                padding: 30px;
                margin-top: 150px;
                margin-left: 30px;
            }
        }
    </style>
</head>

<body class="clean-body" style="margin: 0; padding: 0; -webkit-text-size-adjust: 100%; background-color: #ffffff;">
    <table bgcolor="#f8f8f9" cellpadding="0" cellspacing="0" class="nl-container" role="presentation" style="table-layout: fixed; vertical-align: top; min-width: 320px; Margin: 0 auto; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; width: 100%;" valign="top" width="100%">
        <tbody>
            <tr style="vertical-align: top;" valign="top">
                <td style="word-break: break-word; vertical-align: top;" valign="top" align="center">
                    <div class="header">
                        <img src="<?php echo base_url() . 'assets/images/logo.png'; ?>" alt="" style="top: 10px;left: 48px;width: 139px;height: 30px;" align="left">
                    </div>
                </td>
            </tr>
            <tr style="vertical-align: top;" valign="top">
                <td style="word-break: break-word; vertical-align: top;" valign="top">

                    <div style="background-color:transparent;">
                        <div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 640px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #fff;">
                            <div style="border-top:1px solid transparent; border-left:1px solid #ccc; border-bottom:0px solid transparent; border-right:1px solid #ccc; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">

                                <div class="col num12" style="min-width: 320px; max-width: 640px; display: table-cell; vertical-align: top; width: 640px;">
                                    <div style="width:100% !important;">

                                        <div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">

                                            <div class="content">
                                                <h1>Hi Calvin,</h1>
                                                <p>Aenean non accumsan ante. Duis et risus accumsan sem tempus porta nec sit amet est. Sed ut euismod quam.
                                                    Suspendisse potenti.</p>
                                                <p> Aliquam fringilla orci tincidunt, ullamcorper erat in, malesuada metus. Vivamus
                                                    luctus maximus vestibulum. Donec et enim vitae tellus auctor ornare.</p>
                                                    <?php
                                                    $sql = "SELECT * FROM tbl_post WHERE email_news_update = 1";
                                                    $query = mysqli_query($db, $sql);

                                                    while($item = mysqli_fetch_array($query)){?>
                                                    <div class="row" style="margin-bottom:20px">
                                                        <div class="col-md-3">
                                                            <img src="<?php echo base_url() . 'assets/images/' . $item['post_image']; ?>" alt="" width="100px" height="110px">
                                                        </div>
                                                        <div class="col-md-9">
                                                            <p><?php $date = date_create($item['post_date']);
                                                                echo date_format($date, "d M Y"); ?></p>
                                                            <div class="text-theme-1" style="margin-top:0px;font-size:19px;font-weight:bold; line-height: normal;word-spacing:-3px">
                                                                <a href="<?php if ($item['post_type_id'] == 1) {
                                                                                echo base_url() . 'news/detail/' . $item['post_slug'];
                                                                            } else if ($item['post_type_id'] == 2) {
                                                                                echo base_url() . 'catlist/detail/' . $item['post_slug'];
                                                                            } else if ($item['post_type_id'] == 3) {
                                                                                echo base_url() . 'umkm/detail/' . $item['post_slug'];
                                                                            } else if ($item['post_type_id'] == 4) {
                                                                                echo base_url() . 'stfood/detail/' . $item['post_slug'];
                                                                            } else if ($item['post_type_id'] == 5) {
                                                                                echo base_url() . 'hltfood/detail/' . $item['post_slug'];
                                                                            } ?>"><?= $item['post_title'] ?></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                                <p></p>
                                                <p>Vestibulum blandit viverra convallis. Pellentesque ligula urna, fermentum ut semper in, tincidunt nec
                                                    dui. Morbi mauris lacus, consequat eget justo in, semper gravida enim. Donec ultrices varius ligula. Ut
                                                    non pretium augue. Etiam non rutrum metus. In varius sit amet lorem tempus sagittis. Cras sed maximus
                                                    enim, vel ultricies tortor. </p>
                                                <p></p>
                                                <p></p>
                                                <p>Thank you,</p>
                                                <h5>The Foodbang crew</h5>
                                            </div>
                                            <div align="center" class="img-container center fixedwidth">
                                                <img align="center" alt="I'm an image" border="0" class="center fixedwidth" src="<?php echo base_url() . 'assets/images/sushi-on-brown-wooden-board-2098085.png'; ?>" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: 200px; border: 0; width: 100%; display: block;background: var(--unnamed-color-000000) 0% 0% no-repeat padding-box;" />
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div style="background-color:transparent;">
                        <div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 640px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #fff;">
                            <div style="border-top:1px solid transparent; border-left:1px solid #ccc; border-bottom:0px solid transparent; border-right:1px solid #ccc; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">

                                <div class="col num12" style="min-width: 320px; max-width: 640px; display: table-cell; vertical-align: top; width: 640px;">
                                    <div style="width:100% !important;">

                                        <div style="border-top:1px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">

                                            <table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">
                                                <tbody>
                                                    <tr style="vertical-align: top;" valign="top">

                                                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid #BBBBBB; width: 100%;" valign="top" width="100%">
                                                            <tbody>
                                                                <tr style="vertical-align: top;" valign="top">

                                                                    <td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" height="1110px">

                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div style="background-color:transparent;">
                        <div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 640px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #2b303a;">

                            <div style="background-color:#F7F7F7;border-top:1px solid transparent; border-left:1px solid #ccc; border-bottom:0px solid transparent; border-right:1px solid #ccc; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
                                <div class="col num12" style="min-width: 320px; max-width: 640px; display: table-cell; vertical-align: top; width: 640px;">
                                    <div style="width:100% !important;">

                                        <div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">

                                            <table cellpadding="0" cellspacing="0" class="social_icons" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" valign="top" width="100%">
                                                <tbody>
                                                    <tr style="vertical-align: top;" valign="top">
                                                        <td style="word-break: break-word; vertical-align: top; padding-top: 28px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;" valign="top">
                                                            <table align="center" cellpadding="0" cellspacing="0" class="social_table" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-tspace: 0; mso-table-rspace: 0; mso-table-bspace: 0; mso-table-lspace: 0;" valign="top">
                                                                <tbody>
                                                                    <tr align="center" style="vertical-align: top; display: inline-block; text-align: center;margin-top: 40px;" valign="top">
                                                                        <td style="word-break: break-word; vertical-align: top; padding-bottom: 0; padding-right: 10px; padding-left: 10px;" valign="top">
                                                                            <a href="#" style="color: #000000;margin:5px"><i class="fab fa-instagram"></i></a>
                                                                        </td>
                                                                        <td style="word-break: break-word; vertical-align: top; padding-bottom: 0; padding-right: 10px; padding-left: 10px;" valign="top">
                                                                            <a href="#" style="color: #000000;margin:5px"><i class="fab fa-facebook-f"></i></a>
                                                                        </td>
                                                                        <td style="word-break: break-word; vertical-align: top; padding-bottom: 0; padding-right: 10px; padding-left: 10px;" valign="top">
                                                                            <a href="#" style="color: #000000;margin:5px"><i class="fab fa-twitter"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div style="color:#555555;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:1.2;padding-top:20px;padding-right:40px;padding-bottom:30px;padding-left:40px;">
                                                <div style="line-height: 1.2; font-size: 12px; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; color: #555555; mso-line-height-alt: 14px;" align="center">
                                                    <p style="color: #CCCCCC;">2020&copy; Powered by Foodbang.</p>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </td>
            </tr>
        </tbody>
    </table>

</body>

</html>