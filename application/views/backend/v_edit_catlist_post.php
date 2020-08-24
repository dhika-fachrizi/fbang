<?php
error_reporting(0);
$b = $data->row_array();
$b_social = json_decode($b['detail_catlist_social']);
$b_availability = json_decode($b['detail_catlist_availability']);
$b_gmaps = json_decode($b['detail_catlist_gmaps']);
?>
<!DOCTYPE html>
<html>

<head>
    <!-- Title -->
    <title>Edit Post</title>

    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta charset="UTF-8">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Foodbang" />
    <link rel="shortcut icon" href="<?php echo base_url() . 'assets/images/favicon.png' ?>">

    <!-- Styles -->
    <link href="<?php echo base_url() . 'assets/plugins/pace-master/themes/blue/pace-theme-flash.css' ?>"
        rel="stylesheet" />
    <link href="<?php echo base_url() . 'assets/plugins/uniform/css/uniform.default.min.css' ?>" rel="stylesheet" />
    <link href="<?php echo base_url() . 'assets/plugins/bootstrap/css/bootstrap.min.css' ?>" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo base_url() . 'assets/plugins/fontawesome/css/font-awesome.css' ?>" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo base_url() . 'assets/plugins/fontawesome/css/all.css' ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() . 'assets/plugins/line-icons/simple-line-icons.css' ?>" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo base_url() . 'assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css' ?>"
        rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() . 'assets/plugins/waves/waves.min.css' ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() . 'assets/plugins/switchery/switchery.min.css' ?>" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo base_url() . 'assets/plugins/3d-bold-navigation/css/style.css' ?>" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo base_url() . 'assets/plugins/slidepushmenus/css/component.css' ?>" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo base_url() . 'assets/plugins/datatables/css/jquery.datatables.min.css' ?>" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo base_url() . 'assets/plugins/datatables/css/jquery.datatables_themeroller.css' ?>"
        rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() . 'assets/plugins/summernote-master/summernote.css' ?>" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/tag-input/' ?>bootstrap-tagsinput.css">
    <link href="<?php echo base_url() . 'assets/css/dropify.min.css' ?>" rel="stylesheet" type="text/css">

    <!-- Theme Styles -->
    <link href="<?php echo base_url() . 'assets/css/modern.min.css' ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() . 'assets/css/themes/green.css' ?>" class="theme-color" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo base_url() . 'assets/css/custom.css' ?>" rel="stylesheet" type="text/css" />

    <script src="<?php echo base_url() . 'assets/plugins/3d-bold-navigation/js/modernizr.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/offcanvasmenueffects/js/snap.svg-min.js' ?>"></script>


</head>

<body class="page-header-fixed  compact-menu  pace-done page-sidebar-fixed">
    <div class="overlay"></div>
    <main class="page-content content-wrap">
        <div class="navbar">
            <div class="navbar-inner">
                <div class="sidebar-pusher">
                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
                <div class="logo-box">
                    <a href="<?php echo site_url('backend/dashboard'); ?>" class="logo-text"><span>MBLOG</span></a>
                </div><!-- Logo Box -->
                <div class="topmenu-outer">
                    <div class="top-menu">
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <a href="javascript:void(0);"
                                    class="waves-effect waves-button waves-classic sidebar-toggle"><i
                                        class="fa fa-bars"></i></a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <?php
$count_inbox = $this->db->get_where('tbl_inbox', array('inbox_status' => '0'));
?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic"
                                    data-toggle="dropdown"><i class="fa fa-envelope"></i><span
                                        class="badge badge-success pull-right"><?php echo $count_inbox->num_rows(); ?></span></a>
                                <ul class="dropdown-menu title-caret dropdown-lg" role="menu">

                                    <li>
                                        <p class="drop-title">Anda memiliki <?php echo $count_inbox->num_rows(); ?>
                                            pesan baru !</p>
                                    </li>
                                    <li class="dropdown-menu-list slimscroll messages">
                                        <ul class="list-unstyled">
                                            <?php
$query_msg = $this->db->get_where('tbl_inbox', array('inbox_status' => '0'), 6);
foreach ($query_msg->result() as $row):
?>
                                            <li>
                                                <a href="<?php echo site_url('backend/inbox'); ?>">
                                                    <div class="msg-img">
                                                        <div class="online on"></div><img class="img-circle"
                                                            src="<?php echo base_url() . 'assets/images/user_blank.png'; ?>"
                                                            alt="">
                                                    </div>
                                                    <p class="msg-name"><?php echo $row->inbox_name; ?></p>
                                                    <p class="msg-text">
                                                        <?php echo word_limiter($row->inbox_message, 5); ?></p>
                                                    <p class="msg-time">
                                                        <?php echo date('d-m-Y H:i:s', strtotime($row->inbox_created_at)); ?>
                                                    </p>
                                                </a>
                                            </li>
                                            <?php endforeach;?>

                                        </ul>
                                    </li>
                                    <li class="drop-all"><a href="<?php echo site_url('backend/inbox'); ?>"
                                            class="text-center">All Messages</a></li>
                                </ul>
                            </li>
                            <?php
$count_comment = $this->db->get_where('tbl_comment', array('comment_status' => '0'));
?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic"
                                    data-toggle="dropdown"><i class="fa fa-comment"></i><span
                                        class="badge badge-success pull-right"><?php echo $count_comment->num_rows(); ?></span></a>
                                <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                                    <li>
                                        <p class="drop-title">Anda memiliki <?php echo $count_comment->num_rows(); ?>
                                            komentar baru !</p>
                                    </li>
                                    <li class="dropdown-menu-list slimscroll messages">
                                        <ul class="list-unstyled">
                                            <?php
$query_cmt = $this->db->get_where('tbl_comment', array('comment_status' => '0'), 6);
foreach ($query_cmt->result() as $row):
?>
                                            <li>
                                                <a href="<?php echo site_url('backend/comment/unpublish'); ?>">
                                                    <div class="msg-img">
                                                        <div class="online on"></div><img class="img-circle"
                                                            src="<?php echo base_url() . 'assets/images/user_blank.png'; ?>"
                                                            alt="">
                                                    </div>
                                                    <p class="msg-name"><?php echo $row->comment_name; ?></p>
                                                    <p class="msg-text">
                                                        <?php echo word_limiter($row->comment_message, 5); ?></p>
                                                    <p class="msg-time">
                                                        <?php echo date('d-m-Y H:i:s', strtotime($row->comment_date)); ?>
                                                    </p>
                                                </a>
                                            </li>
                                            <?php endforeach;?>

                                        </ul>
                                    </li>
                                    <li class="drop-all"><a href="<?php echo site_url('backend/comment/unpublish'); ?>"
                                            class="text-center">All Comments</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic"
                                    data-toggle="dropdown">
                                    <span class="user-name"><?php echo $this->session->userdata('name'); ?><i
                                            class="fa fa-angle-down"></i></span>
                                    <?php
$user_id = $this->session->userdata('id');
$query = $this->db->get_where('tbl_user', array('user_id' => $user_id));
if ($query->num_rows() > 0):
    $row = $query->row_array();
    ?>
                                    <img class="img-circle avatar"
                                        src="<?php echo base_url() . 'assets/images/' . $row['user_photo']; ?>"
                                        width="40" height="40" alt="">
                                    <?php else: ?>
                                    <img class="img-circle avatar"
                                        src="<?php echo base_url() . 'assets/images/user_blank.png'; ?>" width="40"
                                        height="40" alt="">
                                    <?php endif;?>
                                </a>
                                <ul class="dropdown-menu dropdown-list" role="menu">
                                    <li role="presentation"><a href="<?php echo site_url('backend/change_pass'); ?>"><i
                                                class="fa fa-key"></i>Change Password</a></li>
                                    <li role="presentation"><a
                                            href="<?php echo site_url('backend/comment/unpublish'); ?>"><i
                                                class="fa fa-comment"></i>Comments<span
                                                class="badge badge-success pull-right"><?php echo $count_comment->num_rows(); ?></span></a>
                                    </li>
                                    <li role="presentation"><a href="<?php echo site_url('backend/inbox'); ?>"><i
                                                class="fa fa-envelope"></i>Inbox<span
                                                class="badge badge-success pull-right"><?php echo $count_inbox->num_rows(); ?></span></a>
                                    </li>
                                    <li role="presentation" class="divider"></li>
                                    <li role="presentation"><a href="<?php echo site_url('logout'); ?>"><i
                                                class="fa fa-sign-out m-r-xs"></i>Log out</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo site_url('logout'); ?>"
                                    class="log-out waves-effect waves-button waves-classic">
                                    <span><i class="fa fa-sign-out m-r-xs"></i>Log out</span>
                                </a>
                            </li>
                        </ul><!-- Nav -->
                    </div><!-- Top Menu -->
                </div>
            </div>
        </div><!-- Navbar -->
        <div class="page-sidebar sidebar">
            <div class="page-sidebar-inner slimscroll">
                <div class="sidebar-header">
                    <div class="sidebar-profile">
                        <?php
$user_id = $this->session->userdata('id');
$query = $this->db->get_where('tbl_user', array('user_id' => $user_id));
if ($query->num_rows() > 0):
    $row = $query->row_array();
    ?>
                        <a href="javascript:void(0);">
                            <div class="sidebar-profile-image">
                                <img src="<?php echo base_url() . 'assets/images/' . $row['user_photo']; ?>"
                                    class="img-circle img-responsive" alt="">
                            </div>
                            <div class="sidebar-profile-details">
                                <span><?php echo $this->session->userdata('name'); ?><br>
                                    <?php if ($row['user_level'] == '1'): ?>
                                    <small>Administrator</small>
                                    <?php else: ?>
                                    <small>Author</small>
                                    <?php endif;?>
                                </span>
                            </div>
                        </a>
                        <?php else: ?>
                        <a href="javascript:void(0);">
                            <div class="sidebar-profile-image">
                                <img src="<?php echo base_url() . 'assets/images/user_blank.png'; ?>"
                                    class="img-circle img-responsive" alt="">
                            </div>
                            <div class="sidebar-profile-details">
                                <span><?php echo $this->session->userdata('name'); ?><br>
                                    <?php if ($row['user_level'] == '1'): ?>
                                    <small>Administrator</small>
                                    <?php else: ?>
                                    <small>Author</small>
                                    <?php endif;?>
                                </span>
                            </div>
                        </a>
                        <?php endif;?>
                    </div>
                </div>
                <ul class="menu accordion-menu">
                    <li><a href="<?php echo site_url('backend/dashboard'); ?>" class="waves-effect waves-button"><span
                                class="menu-icon icon-home"></span>
                            <p>Dashboard</p>
                        </a></li>
                    <li class="droplink active open"><a href="#" class="waves-effect waves-button"><span
                                class="menu-icon icon-pin"></span>
                            <p>Post</p><span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="active"><a href="<?php echo site_url('backend/post/add_new'); ?>">Add New
                                    News</a>
                            </li>
                            <li class=""><a href="<?php echo site_url('backend/post/add_catlist_new'); ?>">Add New
                                    Catlist</a>
                            </li>
                            <li class=""><a href="<?php echo site_url('backend/post/add_promo_new'); ?>">Add New
                                    Promo</a>
                            </li>
                            <li><a href="<?php echo site_url('backend/post'); ?>">Post List</a></li>
                            <li><a href="<?php echo site_url('backend/category'); ?>">Category</a></li>
                            <li><a href="<?php echo site_url('backend/future_article'); ?>">Feature Article</a></li>
                            <li><a href="<?php echo site_url('backend/city'); ?>">City</a></li>
                            <li><a href="<?php echo site_url('backend/additional'); ?>">Additional</a></li>
                            <li><a href="<?php echo site_url('backend/location'); ?>">Location</a></li>
                            <li><a href="<?php echo site_url('backend/tag'); ?>">Tag</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo site_url('backend/inbox'); ?>" class="waves-effect waves-button"><span
                                class="menu-icon icon-envelope"></span>
                            <p>Inbox</p>
                        </a></li>
                    <li><a href="<?php echo site_url('backend/comment'); ?>" class="waves-effect waves-button"><span
                                class="menu-icon icon-bubbles"></span>
                            <p>Comments</p>
                        </a></li>
                    <li><a href="<?php echo site_url('backend/subscriber'); ?>" class="waves-effect waves-button"><span
                                class="menu-icon icon-users"></span>
                            <p>Subscribers</p>
                        </a></li>
                    <li><a href="<?php echo site_url('backend/testimonial'); ?>" class="waves-effect waves-button"><span
                                class="menu-icon icon-like"></span>
                            <p>Testimonials</p>
                        </a></li>
                    <?php if ($this->session->userdata('access') == '1'): ?>
                    <li><a href="<?php echo site_url('backend/users'); ?>" class="waves-effect waves-button"><span
                                class="menu-icon icon-user"></span>
                            <p>Users</p>
                        </a></li>
                    <li class="droplink"><a href="<?php echo site_url('backend/settings'); ?>"
                            class="waves-effect waves-button"><span class="menu-icon icon-settings"></span>
                            <p>Settings</p><span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="<?php echo site_url('backend/settings'); ?>">Basic</a></li>
                            <li><a href="<?php echo site_url('backend/home_setting'); ?>">Home</a></li>
                            <li><a href="<?php echo site_url('backend/about_setting'); ?>">About</a></li>
                            <li><a href="<?php echo site_url('backend/navbar'); ?>">Navbar</a></li>
                        </ul>
                    </li>
                    <?php else: ?>
                    <?php endif;?>
                    <li><a href="<?php echo site_url('logout'); ?>" class="waves-effect waves-button"><span
                                class="menu-icon icon-logout"></span>
                            <p>Log Out</p>
                        </a></li>

                </ul>
            </div><!-- Page Sidebar Inner -->
        </div><!-- Page Sidebar -->
        <div class="page-inner">
            <div class="page-title">
                <h3>Edit Post</h3>
                <div class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="<?php echo site_url('backend/dashboard'); ?>">Dashboard</a></li>
                        <li><a href="#">Post</a></li>
                        <li class="active">Edit</li>
                    </ol>
                </div>
            </div>
            <div id="main-wrapper">
                <div class="row">
                    <form action="<?php echo base_url() . 'backend/post/edit_catlist' ?>" method="post"
                        enctype="multipart/form-data">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-white">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" name="title" value="<?php echo $b['post_title']; ?>"
                                                    class="form-control title" placeholder="Title" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="slug" class="form-control slug "
                                                    value="<?php echo $b['post_slug']; ?>" placeholder="Permalink"
                                                    style="background-color: #F8F8F8;outline-color: none;border:0;color:blue;"
                                                    required>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Contents</label>
                                                <textarea name="contents"
                                                    id="summernote"><?php echo $b['post_contents']; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="panel panel-white">
                                        <div class="panel-body">
                                            <div class="row">
                                                <?php foreach ($social->result() as $row): ?>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label><?php echo $row->social_name; ?></label>
                                                        <input type="text"
                                                            detail_name='<?php echo json_encode($row); ?>'
                                                            <?php foreach ($b_social as $soc): ?>
                                                            <?php if ($soc->social_id == $row->social_id): ?>
                                                            value="<?php echo $soc->social_value ?>" <?php endif;?>
                                                            <?php endforeach;?> class="form-control social_post"
                                                            placeholder="<?php echo $row->social_name; ?> link">
                                                    </div>
                                                    <?php endforeach;?>
                                                </div>
                                                <input id="social" type="hidden" name="social" value="[]">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="panel panel-white">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <?php foreach ($availability->result() as $row): ?>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label><?php echo $row->availability_name; ?></label>
                                                            <input type="text"
                                                                detail_name='<?php echo json_encode($row, 0); ?>'
                                                                <?php foreach ($b_availability as $soc): ?>
                                                                <?php if ($soc->availability_id == $row->availability_id): ?>
                                                                value="<?php echo $soc->availability_value ?>"
                                                                <?php endif;?> <?php endforeach;?>
                                                                class="form-control availability_post"
                                                                placeholder="<?php echo $row->availability_name; ?> Link">
                                                        </div>
                                                        <?php endforeach;?>
                                                    </div>
                                                    <input id="availability" type="hidden" name="availability"
                                                        value="[]">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="panel panel-white">

                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label>Image</label>
                                                <input type="file" name="filefoto" class="dropify" data-height="190"
                                                    data-default-file="<?php echo base_url() . 'assets/images/' . $b['post_image']; ?>">
                                            </div>

                                            <input type="hidden" name="type" value="2">
                                            <div class="form-group">
                                                <label>Category</label>
                                                <select class="form-control" id="category" name="category" required
                                                    onchange="dynamicAttribute(this)">
                                                    <option value="">-Select Option-</option>
                                                    <?php foreach ($category->result() as $row): ?>
                                                    <?php if ($b['post_category_id'] == $row->category_id): ?>
                                                    <option value="<?php echo $row->category_id; ?>" selected>
                                                        <?php echo $row->category_name; ?></option>
                                                    <?php else: ?>
                                                    <option value="<?php echo $row->category_id; ?>">
                                                        <?php echo $row->category_name; ?></option>
                                                    <?php endif;?>
                                                    <?php endforeach;?>
                                                </select>
                                            </div>
                                            <div id="dynamic-attribute">
                                                <div class="form-group">
                                                    <label>Location</label>
                                                    <select class="form-control" name="location" required>
                                                        <option value="">-Select Option-</option>
                                                        <?php foreach ($location->result() as $row): ?>
                                                        <?php if ($b['post_location_id'] == $row->location_id): ?>
                                                        <option value="<?php echo $row->location_id; ?>" selected>
                                                            <?php echo $row->location_name; ?></option>
                                                        <?php else: ?>
                                                        <option value="<?php echo $row->location_id; ?>">
                                                            <?php echo $row->location_name; ?></option>
                                                        <?php endif;?>
                                                        <?php endforeach;?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Halal</label>
                                                    <select class="form-control" name="halal" required>
                                                        <option value="">-Select Option-</option>
                                                        <option value="1" <?php if ($b['post_halal_id'] == 1): ?>
                                                            selected <?php else: ?> <?php endif;?>> Halal</option>
                                                        <option value="2" <?php if ($b['post_halal_id'] == 2): ?>
                                                            selected <?php else: ?> <?php endif;?>>Non Halal</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Additional</label>
                                                    <select class="form-control" name="additional" required>
                                                        <option value="">-Select Option-</option>
                                                        <?php foreach ($additional->result() as $row): ?>
                                                        <?php if ($b['post_additional_id'] == $row->additional_id): ?>
                                                        <option value="<?php echo $row->additional_id; ?>" selected>
                                                            <?php echo $row->additional_name; ?></option>
                                                        <?php else: ?>
                                                        <option value="<?php echo $row->additional_id; ?>">
                                                            <?php echo $row->additional_name; ?></option>
                                                        <?php endif;?>
                                                        <?php endforeach;?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Tags</label>
                                                <div class="bs-example">
                                                    <input class="tags" name="tags" type="text" data-role="tagsinput"
                                                        value="<?php echo $b['post_tags']; ?>" />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>City</label>
                                                <select class="form-control" name="city"
                                                    style="text-transform: capitalize;" required>
                                                    <option value="">-Select Option-</option>
                                                    <?php foreach ($city->result() as $row): ?>
                                                    <?php if ($b['post_city_id'] == $row->city_id): ?>
                                                    <option value="<?php echo $row->city_id; ?>" selected>
                                                        <?php echo strtolower($row->city_name); ?></option>
                                                    <?php else: ?>
                                                    <option value="<?php echo $row->city_id; ?>">
                                                        <?php echo strtolower($row->city_name); ?>
                                                    </option>
                                                    <?php endif;?>
                                                    <?php endforeach;?>
                                                </select>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="panel panel-white">
                                        <div class="panel-body">


                                            <div class="form-group">
                                                <label>Restaurant / Cafe Name</label>
                                                <input type="Restaurant" name="catlist_name" class="form-control"
                                                    value="<?php echo $b['detail_catlist_name'] ?>" placeholder=""
                                                    required>
                                            </div>


                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="Address" name="catlist_address" class="form-control"
                                                    value="<?php echo $b['detail_catlist_address'] ?>" placeholder=""
                                                    required>
                                            </div>


                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="Phone" name="catlist_phone" class="form-control"
                                                    placeholder="" value="<?php echo $b['detail_catlist_phone'] ?>"
                                                    required>
                                            </div>
                                            <div class="btn-group btn-group-justified" role="group">
                                                <input type="hidden" name="post_id" value="<?php echo $b['post_id']; ?>"
                                                    required>
                                                <input type="hidden" name="post_detail_id"
                                                    value="<?php echo $b['post_detail_id']; ?>" required>
                                                <button type="submit" class="btn btn-primary btn-lg"
                                                    style="width:100%"><span class="icon-cursor"></span>Update</button>
                                            </div>

                                        </div>
                                    </div>


                                    <div class="panel panel-white">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label>Meta Description</label>
                                                <textarea name="description" cols="6" rows="6" class="form-control"
                                                    placeholder="Meta Description"><?php echo $b['post_description']; ?></textarea>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                    </form>
                </div><!-- Row -->
            </div><!-- Main Wrapper -->
            <div class="page-footer">
                <p class="no-s"><?php echo date('Y'); ?> &copy; Powered by Foodbang.</p>
            </div>
        </div><!-- Page Inner -->
    </main><!-- Page Content -->

    <!-- Javascripts -->
    <script src="<?php echo base_url() . 'assets/plugins/jquery/jquery-2.1.4.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/jquery-ui/jquery-ui.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/pace-master/pace.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/jquery-blockui/jquery.blockui.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/bootstrap/js/bootstrap.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/switchery/switchery.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/uniform/jquery.uniform.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/offcanvasmenueffects/js/classie.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/offcanvasmenueffects/js/main.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/waves/waves.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/3d-bold-navigation/js/main.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/jquery-mockjax-master/jquery.mockjax.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/moment/moment.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/datatables/js/jquery.datatables.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/modern.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/dropify.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/summernote-master/summernote.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/tag-input/' ?>bootstrap-tagsinput.js"></script>
    <script src="<?php echo base_url() . 'assets/plugins/tag-input/' ?>bootstrap-tagsinput-angular.js"></script>
    <script>
    function dynamicAttribute() {

        category_id = $('#category').val();
        var dt =
            "/<?php echo $b['post_subcategory_id']; ?>/<?php echo $b['post_location_id']; ?>/<?php echo $b['post_additional_id']; ?>/<?php echo $b['post_halal_id']; ?>"

        $.ajax({
            dataType: 'text',
            type: "POST",
            url: "<?php echo base_url() . 'backend/post/dynamic_attribute/' ?>" + category_id + dt,
            success: function(response) {

                $("#dynamic-attribute").html(response);

            }
        });
    }

    function c(dt) {
        console.log(dt);
    }

    function trigger_social() {
        var input_social = $(".social_post");
        var temp_post = [];
        for (var i = 0; i < input_social.length; i++) {
            if ($(input_social[i]).val() !== "" && $(input_social[i]).val() !== null) {
                var temp_data = JSON.parse($(input_social[i]).attr('detail_name'))
                temp_data.social_value = $(input_social[i]).val();
                temp_post.push(temp_data);
            }
            $("#social").val(JSON.stringify(temp_post))

            // c($("#social").val());
        }

        function trigger_availability() {
            var input_availability = $(".availability_post");
            var temp_post = [];
            for (var i = 0; i < input_availability.length; i++) {
                if ($(input_availability[i]).val() !== "" && $(input_availability[i]).val() !== null) {
                    var temp_data = JSON.parse($(input_availability[i]).attr('detail_name'))
                    temp_data.availability_value = $(input_availability[i]).val();
                    temp_post.push(temp_data);
                }
            }
            $("#availability").val(JSON.stringify(temp_post))
            // console.log($("#availability").val());
        } <<
        << << < HEAD
        $("#availability").val(JSON.stringify(temp_post))
        // console.log($("#availability").val());
    }
    $(document).ready(function() {
                dynamicAttribute();
                trigger_social();
                trigger_availability();
                $('#summernote').summernote({
                            height: 590,
                            toolbar: [
                                ['style', ['style']],
                                ['font', ['bold', 'italic', 'underline', 'clear']],
                                ['fontsize', ['fontsize']],
                                ['color', ['color']],
                                ['para', ['ul', 'ol', 'paragraph']],
                                ['insert', ['link', 'picture', 'hr']],
                                ['view', ["fullscreen", "codeview", "help"]],
                            ],

                            onImageUpload: function(files, editor, welEditable) {
                                    sendFile(files[0], editor, welEditable);
                                } ===
                                === =
                                $(document).ready(function() {
                                    trigger_social();
                                    trigger_availability();
                                    $('#summernote').summernote({
                                        height: 590,
                                        toolbar: [
                                            ['style', ['style']],
                                            ['font', ['bold', 'italic', 'underline', 'clear']],
                                            ['fontsize', ['fontsize']],
                                            ['color', ['color']],
                                            ['para', ['ul', 'ol', 'paragraph']],
                                            ['insert', ['link', 'picture', 'hr']],
                                            ['view', ["fullscreen", "codeview", "help"]],
                                        ],

                                        onImageUpload: function(files, editor, welEditable) {
                                                sendFile(files[0], editor, welEditable);
                                            } >>>
                                            >>> > e4e8f1e229cd3eb12722da38a9b22f985ad8f499

                                    });

                                    function sendFile(file, editor, welEditable) {
                                        data = new FormData();
                                        data.append("file", file);
                                        $.ajax({
                                            data: data,
                                            type: "POST",
                                            url: "<?php echo site_url() ?>backend/post/upload_image",
                                            cache: false,
                                            contentType: false,
                                            processData: false,
                                            success: function(url) {
                                                editor.insertImage(welEditable, url);
                                            }
                                        });
                                    }

                                    $('.dropify').dropify({
                                        messages: {
                                            default: 'Drag atau drop untuk memilih gambar',
                                            replace: 'Ganti',
                                            remove: 'Hapus',
                                            error: 'error'
                                        }
                                    });

                                    $(".availability_post").change(function() {
                                        trigger_availability();
                                    });

                                    $(".social_post").change(function() {
                                        trigger_social();
                                    });

                                    $('.tags').tagsinput({
                                        trimValue: true
                                    });

                                    $(".tags").change(function() {
                                        console.log($(".tags").tagsinput('items'))
                                    });

                                    $('.title').keyup(function() {
                                        var title = $(this).val().toLowerCase().replace(
                                            /[&\/\\#^, +()$~%.'":*?<>{}]/g, '-');
                                        $('.slug').val(title);
                                    });

                                });
    </script>

</body>

</html>