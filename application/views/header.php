			<nav class="main-nav position-sticky">
			    <div class="container">
			        <section class="">
			            <div class="row rtt">
			                <div class="col-md-4 md-right-to-ceter d-flex c-justify-content-start">
			                    <div class="header-logo-wrap">
			                        <a href="<?php echo site_url(); ?>" class="logo">
			                            <img src="<?php echo base_url() . 'theme/images/' . $logo; ?>" width="145" height="40"
			                                alt="" />
			                        </a>
			                    </div>
			                </div>
			                <div class="col-md-8 d-flex c-justify-content-end align-self-end md-left-to-ceter">

			                    <ul class="clearlist local-scroll header-m pl-0">
			                        <!-- End Multiple column menu example -->

			                        <li class="pl-0">
			                            <form action="<?php echo base_url() . 'home/search'; ?>" method="get" id="form-search">
			                                <div class="c-i-s"> <input type="text" name="search_query"
			                                        class="form-control form-control-sm h-search c-i-h" id="search_query"
			                                        style="border-radius:20px;">
			                                </div>
			                            </form>
			                        </li>
			                        <li><img src="<?php echo base_url() . 'assets/images/header/Icon ioniciossearch.svg'; ?>"
			                                height="15" onclick="w_search_resize()" id="img-s-h" pop="0" /></li>
			                        <li><a class="btn-search"><span><img
			                                        src="<?php echo base_url() . 'assets/images/header/Icon feather-phone-call.svg'; ?>"
			                                        height="15" /></span></a></li>
			                        <li>
			                            <a class="rtt fz-15" href="<?php echo base_url() . 'home/about'; ?>">About Us</a>
			                        </li>

			                    </ul>

			                    <!-- End Main Menu -->
			                </div>
			            </div>
			        </section>



			    </div>
			</nav>


			<section class="menu-container pt-20">
			    <div class="container">
			        <div class="row menu-category font-header-m">
			            <div class="col-2 first c-p">
			                <div class="col-12">
			                    <center>
			                        <img src="<?php echo base_url() . 'assets/images/header/Group 13.svg'; ?>"
			                            alt="triangle with all three sides equal" height="40" />
			                    </center>
			                </div>
			            </div>

			            <div class="col-2 sub c-p">
			                <div class="col-12">
			                    <center>
			                        <img src="<?php echo base_url() . 'assets/images/header/Group 8.svg'; ?>"
			                            alt="triangle with all three sides equal" height="40" />
			                    </center>
			                </div>

			            </div>
			            <div class="col-2 sub c-p">
			                <div class="col-12">
			                    <center>
			                        <img src="<?php echo base_url() . 'assets/images/header/Group 15.svg'; ?>"
			                            alt="triangle with all three sides equal" height="40" />
			                    </center>
			                </div>

			            </div>
			            <div class="col-2 sub c-p">
			                <div class="col-12">
			                    <center>
			                        <img src="<?php echo base_url() . 'assets/images/header/Group 16.svg'; ?>"
			                            alt="triangle with all three sides equal" height="40" />
			                    </center>
			                </div>

			            </div>
			            <div class="col-2 sub c-p">
			                <div class="col-12">
			                    <center>
			                        <img src="<?php echo base_url() . 'assets/images/header/Group 18.svg'; ?>"
			                            alt="triangle with all three sides equal" height="40" />
			                    </center>
			                </div>

			            </div>
			            <div class="col-2 sub c-p">
			                <div class="col-12">
			                    <center>
			                        <img src="<?php echo base_url() . 'assets/images/header/Group 21.svg'; ?>"
			                            alt="triangle with all three sides equal" height="40" />
			                    </center>
			                </div>

			            </div>
			            <div class="col-12 r-p f-head-1 mb-10">
			                <nav class=" navbar navbar-expand r-p">


			                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
			                        <ul class="navbar-nav  menu-category mr-auto col-12 r-p">
			                            <li class="first col-2 dropdown">
			                                <a class="nav-link togglea" href="#" id="navbarNews" role="button"
			                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			                                    <center>News</center>
			                                </a>
			                                <div class="dropdown-menu" aria-labelledby="navbarNews">
			                                    <a class="dropdown-item" href="<?php echo base_url() . 'news'; ?>">Daily News</a>
			                                </div>
			                            </li>
			                            <li class="sub col-2 pl-0 pr-0 dropdown">
			                                <a class="nav-link dropdown-togglea" href="#" id="navbarRestaurant" role="button"
			                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			                                    <center class="rnc">Restaurant & Cafe</center>
			                                </a>
			                                <div class="dropdown-menu" aria-labelledby="navbarRestaurant">
			                                    <a class="dropdown-item"
			                                        href="<?php echo base_url() . 'catlist/home/restaurant'; ?>">Restaurant</a>
			                                    <div class="dropdown-divider"></div>
			                                    <a class="dropdown-item"
			                                        href="<?php echo base_url() . 'catlist/home/cafe'; ?>">Cafe</a>
			                                    <div class="dropdown-divider"></div>
			                                    <a class="dropdown-item"
			                                        href="<?php echo base_url() . 'catlist/home/coffe-shop'; ?>">Coffe Shop</a>
			                                    <div class="dropdown-divider"></div>
			                                    <a class="dropdown-item"
			                                        href="<?php echo base_url() . 'catlist/home/nightlife'; ?>">Nightlife</a>
			                                    <div class="dropdown-divider"></div>
			                                </div>
			                            </li>
			                            <li class="sub col-2 dropdown">
			                                <a class="nav-link dropdown-togglea" href="#" id="navbarUMKM" role="button"
			                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			                                    <center>UMKM</center>
			                                </a>
			                                <div class="dropdown-menu" aria-labelledby="navbarUMKM">
			                                    <a class="dropdown-item"
			                                        href="<?php echo base_url() . 'umkm/home/homefood'; ?>">Homefood</a>
			                                    <div class="dropdown-divider"></div>
			                                    <a class="dropdown-item"
			                                        href="<?php echo base_url() . 'umkm/home/frozen-food'; ?>">Frozen Food</a>
			                                    <div class="dropdown-divider"></div>
			                                    <a class="dropdown-item"
			                                        href="<?php echo base_url() . 'umkm/home/snack-oleh-oleh'; ?>">Snack/Oleh-oleh</a>
			                                    <div class="dropdown-divider"></div>
			                                </div>
			                            </li>
			                            <li class="sub col-2 dropdown">
			                                <a class="nav-link dropdown-togglea" href="#" id="navbarStreetFood" role="button"
			                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			                                    <center>Street Food</center>
			                                </a>
			                                <div class="dropdown-menu" aria-labelledby="navbarStreetFood">
			                                    <a class="dropdown-item"
			                                        href="<?php echo base_url() . 'stfood/home/makan-kenyang'; ?>">Makanan
			                                        Kenyang</a>
			                                    <div class="dropdown-divider"></div>
			                                    <a class="dropdown-item"
			                                        href="<?php echo base_url() . 'stfood/home/makan-ringan'; ?>">Makanan
			                                        Ringan</a>
			                                    <div class="dropdown-divider"></div>
			                                    <a class="dropdown-item"
			                                        href="<?php echo base_url() . 'stfood/home/snacks-drinks'; ?>">Sweets &
			                                        Drink</a>
			                                    <div class="dropdown-divider"></div>
			                                </div>
			                            </li>
			                            <li class="sub col-2">
			                                <a class="nav-link " href="<?php echo base_url() . 'hltfood/home/healthy-food'; ?>">
			                                    <center>Healty Food</center>
			                                </a>
			                            </li>
			                            <li class="sub col-2 ">
			                                <a class="nav-link " href="<?php echo base_url() . 'promo'; ?>">
			                                    <center>Promo</center>
			                                </a>

			                            </li>

			                        </ul>

			                    </div>
			                </nav>
			            </div>
			        </div>

			    </div>



			</section>
			<section class="menu-container">

			</section>