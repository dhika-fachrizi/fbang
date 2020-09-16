<!DOCTYPE html>
<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "blog_db";

$db = mysqli_connect($server, $user, $password, $nama_database);

if (!$db) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>
<html>

<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/fontawesome/css/all.css' ?>" />
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/bootstrap.min.css' ?>" />
    <style type="text/css">
        @media screen {
            @font-face {
                font-family: 'Lato';
                font-style: normal;
                font-weight: 400;
                src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format('woff');
            }

            @font-face {
                font-family: 'Lato';
                font-style: normal;
                font-weight: 700;
                src: local('Lato Bold'), local('Lato-Bold'), url(https://fonts.gstatic.com/s/lato/v11/qdgUG4U09HnJwhYI-uK18wLUuEpTyoUstqEm5AMlJo4.woff) format('woff');
            }

            @font-face {
                font-family: 'Lato';
                font-style: italic;
                font-weight: 400;
                src: local('Lato Italic'), local('Lato-Italic'), url(https://fonts.gstatic.com/s/lato/v11/RYyZNoeFgb0l7W3Vu1aSWOvvDin1pK8aKteLpeZ5c0A.woff) format('woff');
            }

            @font-face {
                font-family: 'Lato';
                font-style: italic;
                font-weight: 700;
                src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://fonts.gstatic.com/s/lato/v11/HkF_qI1x_noxlxhrhMQYELO3LdcAZYWl9Si6vvxL-qU.woff) format('woff');
            }
        }

        /* CLIENT-SPECIFIC STYLES */
        body,
        table,
        td,
        a {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table,
        td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            -ms-interpolation-mode: bicubic;
        }

        /* RESET STYLES */
        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
        }

        table {
            border-collapse: collapse !important;
        }

        body {
            height: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            width: 100% !important;
        }

        .button {
            background-color: #F79D46;
            border-radius: 10px;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        /* iOS BLUE LINKS */
        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* MOBILE STYLES */
        @media screen and (max-width:600px) {
            h1 {
                font-size: 32px !important;
                line-height: 32px !important;
            }

            .t-mobile-1 {
                min-width: 100%;
            }

            .t-mobile-2 {
                min-width: 90%;
            }
        }

        /* ANDROID CENTER FIX */
        div[style*="margin: 16px 0;"] {
            margin: 0 !important;
        }
    </style>
</head>

<body style="background-color: #f4f4f4; margin: 0 !important; padding: 0 !important;width:60%" align="center">
    <!-- HIDDEN PREHEADER TEXT -->
    <div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: 'Lato', Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;"> </div>
    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin-left:0;margin-right:0">
        <!-- LOGO -->
        <tr>
            <td bgcolor="#ffffff" align="center">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 50%" class="t-mobile-1">
                    <tr>
                        <td align="center" valign="top" style="padding: 40px 10px 40px 10px;">
                            <img src="<?php echo base_url() . 'assets/images/logo.png'; ?>" alt="" style="top: 10px;left: 48px;width: 139px;height: 30px;" align="left">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" align="center">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 50%" class="t-mobile-1">
                    <tr>
                        <td align="center" valign="top" style="padding: 40px 10px 40px 10px;height:150px;background:url('<?php echo base_url() . 'assets/images/sushi-on-brown-wooden-board-2098085.png'; ?>') no-repeat;background-size: cover;">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" align="center" style="padding: 0px 10px 0px 10px">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 40%" class="t-mobile-2">
                    <tr>
                        <td bgcolor="#ffffff" valign="top" style="padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font: normal normal normal 15px/22px Noto Sans JP;">
                            <h1 style="font-size: 48px; font-weight: 400; margin: 2;">Hy muslimin</h1>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" align="center" style="padding: 0px 10px 0px 10px;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 40%" class="t-mobile-2">
                    <tr>
                        <td bgcolor="#ffffff" align="left" style="padding: 20px 30px 40px 30px; color: #666666; font: normal normal normal 15px/22px Noto Sans JP;color:#919191">
                            <p style="margin: 0;">Ada yang baru nih di Foodbang! Hope it can enrich your foodies reference and make your day yah!</p>
                            <p style="margin: 0;">Masukan, pertanyaan, rekomendasi tempat dan makanan, atau mau di-review sama kita, feel free to email us at hello@foodbang.co.id</p>
                        </td>
                    </tr>
                    <?php
                    $date =  date('Y-m-d 00:00:00');
                    $sql = "SELECT * FROM tbl_post WHERE email_news_update = 1 and post_date >= '$date'  ORDER BY post_id LIMIT 5";
                    $query = mysqli_query($db, $sql);
                    while ($item = mysqli_fetch_array($query)) { ?>
                        <tr>
                            <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 0px 30px; color: #666666; font: normal normal normal 15px/22px Noto Sans JP;color:#919191">
                        <tr>
                            <td>
                                <div class="row" style="margin-bottom: 2%;">
                                    <div class="col-md-3" style="margin-left:5%">
                                        <img src="<?php echo base_url() . 'assets/images/' . $item['post_image']; ?>" alt="" style="width: 98px;height: 117px;margin-left:10%">
                                    </div>
                                    <div class="col-md-7" style="margin-left:5%;padding:2%">
                                        <p><?php $date = date_create($item['post_date']);
                                            echo date_format($date, "d M Y"); ?></p>
                                        <a style="font: normal normal normal 20px/26px DM Serif Display;letter-spacing: 0px;color: #000000;" href="<?php if ($item['post_type_id'] == 1) {
                                                                                                                                                        echo base_url() . 'news/detail/' . $item['post_slug'];
                                                                                                                                                    } else if ($item['post_type_id'] == 2) {
                                                                                                                                                        echo base_url() . 'catlist/detail/' . $item['post_slug'];
                                                                                                                                                    } else if ($item['post_type_id'] == 3) {
                                                                                                                                                        echo base_url() . 'umkm/detail/' . $item['post_slug'];
                                                                                                                                                    } else if ($item['post_type_id'] == 4) {
                                                                                                                                                        echo base_url() . 'stfood/detail/' . $item['post_slug'];
                                                                                                                                                    } else if ($item['post_type_id'] == 5) {
                                                                                                                                                        echo base_url() . 'hltfood/detail/' . $item['post_slug'];
                                                                                                                                                    } ?>" style="color: #000000"><?= $item['post_title'] ?></a>
                                    </div>
                                </div>
                            </td>
                        </tr>
            </td>
        </tr>
    <?php } ?>
    <tr>
        <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 40px 30px; border-radius: 0px 0px 4px 4px; color: #666666; font: normal normal normal 15px/22px Noto Sans JP;color:#919191">
        </td>
    </tr>
    <tr>
        <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 40px 30px; border-radius: 0px 0px 4px 4px; color: #666666; font: normal normal normal 15px/22px Noto Sans JP;color:#919191">
            <p style="margin: 0;" style="background-color:#F79D46">Thanks You,<br>The Foodbang Crew</p>
        </td>
    </tr>

    </table>
    </td>
    </tr>
    <tr>
        <td bgcolor="#ffffff" align="center" style="padding: 30px 10px 0px 10px;">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 50%" class="t-mobile-1">
                <tr>
                    <td bgcolor="#F7F7F7" align="center" style="padding: 30px 30px 30px 30px; border-radius: 4px 4px 4px 4px; color: #666666; font: normal normal normal 15px/22px Noto Sans JP;color:#919191">
                        <a href="#" style="color: #000000;margin:5px">About Us</a>
                        <a href="#" style="color: #000000;margin:5px">FAQ</a>
                        <a href="#" style="color: #000000;margin:5px">Contact Us</a>
                        <p></p>
                        <a href="#" style="color: #000000;margin:5px"><img src="<?php echo base_url() . 'assets/images/instagram.png'; ?>" alt=""></i></a>
                        <a href="#" style="color: #000000;margin:5px"><img src="<?php echo base_url() . 'assets/images/tweeter.png'; ?>" alt=""></i></a>
                        <a href="#" style="color: #000000;margin:5px"><img src="<?php echo base_url() . 'assets/images/facebook.png'; ?>" alt=""></i></a>
                        <h2 style="font: normal normal normal 12px/18px Noto Sans JP; color: #CCCCCC; margin-top: 10px;">2020&copy; Powered by Foodbang.</h2>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    </table>
</body>

</html>