			<nav class="main-nav sticky-top">
			    <div class="container">
			        <div class="full-wrapper relative clearfix">

			            <!-- Logo -->
			            <div class="header-logo-wrap">
			                <a href="<?php echo site_url(); ?>" class="logo">
			                    <img src="<?php echo base_url() . 'theme/images/' . $logo; ?>" width="145" height="40" alt="" />
			                </a>
			            </div>
			            <!-- Mobile nav bars -->
			            <div class="mobile-nav">
			                <i class="fa lnr lnr-menu"></i>
			            </div>

			            <!-- Main Menu -->
			            <div class="nav-wrapper large-nav">
			                <ul class="clearlist local-scroll">

			                    <!-- Multiple column menu example -->
			                    <?php
$query = $this->db->get_where('tbl_navbar', array('navbar_parent_id' => 0));
if ($query->num_rows() > 0):
?>
			                    <?php foreach ($query->result() as $row): ?>
			                    <?php
$nav_id = $row->navbar_id;
$query2 = $this->db->get_where('tbl_navbar', array('navbar_parent_id' => $nav_id));
?>
			                    <?php if ($query2->num_rows() > 0): ?>
			                    <li>
			                        <a href="<?php echo site_url($row->navbar_slug); ?>"
			                            class="menu-down"><?php echo $row->navbar_name; ?> <i class="fa fa-angle-down"></i></a>

			                        <!-- Sub -->
			                        <ul class="nav-sub">
			                            <?php foreach ($query2->result() as $row2): ?>
			                            <li>
			                                <a
			                                    href="<?php echo site_url($row2->navbar_slug); ?>"><?php echo $row2->navbar_name; ?></a>
			                            </li>
			                            <?php endforeach;?>
			                        </ul>
			                        <!-- End Sub -->

			                    </li>
			                    <?php else: ?>
			                    <li>
			                        <a href="<?php echo site_url($row->navbar_slug); ?>"><?php echo $row->navbar_name; ?></a>
			                    </li>
			                    <?php endif;?>
			                    <?php endforeach;?>
			                    <?php else: ?>
			                    <li>
			                        <a href="#">Belum ada menu</a>
			                    </li>
			                    <?php endif;?>
			                    <!-- End Multiple column menu example -->
			                    <li><a class="btn-search"><span><img
			                                    src="<?php echo base_url() . 'assets/images/header/Icon ioniciossearch.svg'; ?>"
			                                    height="15" /></span></a></li>
			                    <li><a class="btn-search"><span><img
			                                    src="<?php echo base_url() . 'assets/images/header/Icon feather-phone-call.svg'; ?>"
			                                    height="15" /></span></a></li>

			                    <li>
			                        <a href="#">About Us</a>
			                    </li>
			                </ul>
			            </div>
			            <!-- End Main Menu -->


			        </div>
			    </div>
			    <section class="menu-container">
			        <div class="container">
			            <div class="row menu-category font-header-m">
			                <div class="col-sm-2 first">
			                    <div class="col-sm-12">
			                        <center>
			                            <img src="<?php echo base_url() . 'assets/images/header/Group 13.svg'; ?>"
			                                alt="triangle with all three sides equal" height="40" />
			                        </center>
			                    </div>
			                    <div class="col-sm-12">
			                        <center>News</center>
			                    </div>


			                </div>
			                <div class="col-sm-2 sub">
			                    <div class="col-sm-12">
			                        <center>
			                            <img src="<?php echo base_url() . 'assets/images/header/Group 8.svg'; ?>"
			                                alt="triangle with all three sides equal" height="40" />
			                        </center>
			                    </div>
			                    <div class="col-sm-12">
			                        <center>Restaurant And Cafe</center>
			                    </div>
			                </div>
			                <div class="col-sm-2 sub">
			                    <div class="col-sm-12">
			                        <center>
			                            <img src="<?php echo base_url() . 'assets/images/header/Group 15.svg'; ?>"
			                                alt="triangle with all three sides equal" height="40" />
			                        </center>
			                    </div>
			                    <div class="col-sm-12">
			                        <center>UMKM</center>
			                    </div>
			                </div>
			                <div class="col-sm-2 sub">
			                    <div class="col-sm-12">
			                        <center>
			                            <img src="<?php echo base_url() . 'assets/images/header/Group 16.svg'; ?>"
			                                alt="triangle with all three sides equal" height="40" />
			                        </center>
			                    </div>
			                    <div class="col-sm-12">
			                        <center>Street Food</center>
			                    </div>
			                </div>
			                <div class="col-sm-2 sub">
			                    <div class="col-sm-12">
			                        <center>
			                            <img src="<?php echo base_url() . 'assets/images/header/Group 18.svg'; ?>"
			                                alt="triangle with all three sides equal" height="40" />
			                        </center>
			                    </div>
			                    <div class="col-sm-12">
			                        <center>Healthy Food</center>
			                    </div>
			                </div>
			                <div class="col-sm-2 sub">
			                    <div class="col-sm-12">
			                        <center>
			                            <img src="<?php echo base_url() . 'assets/images/header/Group 21.svg'; ?>"
			                                alt="triangle with all three sides equal" height="40" />
			                        </center>
			                    </div>
			                    <div class="col-sm-12">
			                        <center>Promo</center>
			                    </div>
			                </div>
			            </div>
			        </div>
			    </section>

			</nav>