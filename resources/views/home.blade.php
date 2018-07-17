<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}" class="no-js">
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Real Spaces - Responsive Real Estate Template</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">
<!-- CSS
  ================================================== -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="plugins/prettyphoto/css/prettyPhoto.css" rel="stylesheet" type="text/css">
<link href="plugins/owl-carousel/css/owl.carousel.css" rel="stylesheet" type="text/css">
<link href="plugins/owl-carousel/css/owl.theme.css" rel="stylesheet" type="text/css">
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
<!-- Color Style -->
<link href="colors/color1.css" rel="stylesheet" type="text/css">
<!-- SCRIPTS
  ================================================== -->
<script src="js/modernizr.js"></script><!-- Modernizr -->
</head>
<body class="home">
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
<div class="body">
  <!-- Start Site Header -->
  <header class="site-header">
    <div class="top-header hidden-xs">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <ul class="horiz-nav pull-left">
              <li class="dropdown"><a data-toggle="dropdown"><i class="fa fa-user"></i> Login <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="my-properties.php">My properties</a></li>
                  <li><a href="submit.php">Add a property</a></li>
                  <li><a href="edit-agent-profile.php">My Profile</a></li>
                </ul>
              </li>
              <li><a href="login.php"><i class="fa fa-check-circle"></i> Register</a></li>
              </ul>
          </div>
          <div class="col-md-8 col-sm-6">
            <ul class="horiz-nav pull-right">
                  <li><a href="http://instagram.com" target="_blank"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="http://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="http://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li>
              </ul>
            </div>
        </div>
      </div>
    </div>
    <div class="middle-header">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-8 col-xs-8">
            <h1 class="logo"> <a href="index.php"><img src="images/logo.png" alt="Logo"></a> </h1>
          </div>
          <div class="col-md-8 col-sm-4 col-xs-4">
              <div class="contact-info-blocks hidden-sm hidden-xs">
                  <div>
                      <i class="fa fa-phone"></i> Free Line For You
                    <span>080 378678 90</span>
                </div>
                  <div>
                      <i class="fa fa-envelope"></i> Email Us
                    <span>sales@realspaces.com</span>
                </div>
                  <div>
                      <i class="fa fa-clock-o"></i> Working Hours
                    <span>09:00 to 17:00</span>
                </div>
             </div>
              <a href="#" class="visible-sm visible-xs menu-toggle"><i class="fa fa-bars"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="main-menu-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <nav class="navigation">
              <ul class="sf-menu">
                <li><a href="index.php">Home</a>
                  <ul class="dropdown">
                    <li><a href="index.php">Version 1</a></li>
                    <li><a href="index1.php">Version 2</a></li>
                  </ul>
                </li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="login.php">Register as Agent</a></li>
                <li><a href="javascript:;">Pages</a>
                  <ul class="dropdown">
                    <li><a href="agents.php">Agents</a></li>
                    <li><a href="agent-detail.php">Agent Single</a></li>
                    <li><a href="my-properties.php">Agent Properties</a></li>
                    <li><a href="submit.php">List a property</a></li>
                    <li><a href="pricing.php">Pricing</a></li>
                    <li><a href="login.php">Register/Login</a></li>
                    <li><a href="404.php">404</a></li>
                  </ul>
                </li>
                <li><a href="javascript:;">Properties</a>
                  <ul class="dropdown">
                    <li><a href="javascript:;">Listing</a>
                      <ul>
                          <li><a href="simple-listing.php">Simple Listing</a></li>
                          <li><a href="listing-map.php">Simple Listing with map</a></li>
                          <li><a href="simple-listing-fw.php">Full Width Listing</a></li>
                          <li><a href="grid-listing.php">Grid Listing</a></li>
                          <li><a href="grid-map.php">Grid Listing with map</a></li>
                          <li><a href="grid-listing-fw.php">Full Width Grid</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:;">Types</a>
                      <ul>
                          <li><a href="property-type.php">Villa</a></li>
                          <li><a href="property-type.php">Single Home</a></li>
                          <li><a href="property-type.php">Cottage</a></li>
                          <li><a href="property-type.php">Family House</a></li>
                          <li><a href="property-type.php">Apartment</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:;">Contract type</a>
                      <ul>
                          <li><a href="contract-type.php">Sale</a></li>
                          <li><a href="contract-type.php">Rent</a></li>
                          <li><a href="contract-type.php">Sold</a></li>
                        </ul>
                    </li>
                    <li><a href="property-detail.php">Single Property</a></li>
                    <li><a href="property-detail-fw.php">Single Property Full Width</a></li>
                  </ul>
                </li>
                <li><a href="javascript:;">Features</a>
                  <ul class="dropdown">
                    <li><a href="shortcodes.php">Shortcodes</a></li>
                    <li><a href="typography.php">Typography</a></li>
                  </ul>
                </li>
                <li><a href="javascript:;">Gallery</a>
                  <ul class="dropdown">
                    <li><a href="gallery-2cols.php">2 Columns</a></li>
                    <li><a href="gallery-3cols.php">3 Columns</a></li>
                    <li><a href="gallery-4cols.php">4 Columns</a></li>
                    <li><a href="gallery-masonry.php">Masonry Grid</a></li>
                  </ul>
                </li>
                <li><a href="javascript:;">Blog</a>
                  <ul class="dropdown">
                    <li><a href="blog-masonry.php">Masonry</a></li>
                    <li><a href="blog-timeline.php">Timeline</a></li>
                    <li><a href="blog-thumbnails.php">Classic</a></li>
                    <li><a href="blog-post.php">Single Post</a></li>
                  </ul>
                </li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End Site Header -->
  <!-- Site Showcase -->
  <div class="site-showcase">
    <div class="slider-mask overlay-transparent"></div>
    <!-- Start Hero Slider -->
    <div class="hero-slider flexslider clearfix" data-autoplay="yes" data-pagination="no" data-arrows="yes" data-style="fade" data-pause="yes">
      <ul class="slides">
        <li class=" parallax" style="background-image:url(http://placehold.it/1200x500&amp;text=IMAGE+PLACEHOLDER);">
          <div class="flex-caption">
              <strong class="title">1671 Grand Avenue, <em>NYC</em></strong>
             <div class="price"><strong>$</strong><span>100000</span></div>
             <a href="property-detail.php" class="btn btn-primary btn-block">Details</a>
              <div class="hero-agent">
                  <img src="http://placehold.it/365x365&amp;text=IMAGE+PLACEHOLDER" alt="" class="hero-agent-pic">
                  <a href="agent-detail.php" class="hero-agent-contact" data-placement="left"  data-toggle="tooltip" title="" data-original-title="Contact Agent"><i class="fa fa-envelope"></i></a>
             </div>
          </div>
        </li>
        <li class="parallax" style="background-image:url(http://placehold.it/1200x500&amp;text=IMAGE+PLACEHOLDER);">
          <div class="flex-caption">
              <strong class="title">1671 Grand Avenue, <em>NYC</em></strong>
             <div class="price"><strong>$</strong><span>100000</span></div> <a href="property-detail.php" class="btn btn-primary btn-block">Details</a>
              <div class="hero-agent">
                  <img src="http://placehold.it/365x365&amp;text=IMAGE+PLACEHOLDER" alt="" class="hero-agent-pic">
                  <a href="agent-detail.php" class="hero-agent-contact" data-placement="left"  data-toggle="tooltip" title="" data-original-title="Contact Agent"><i class="fa fa-envelope"></i></a>
              </div>
          </div>
        </li>
      </ul>
    </div>
    <!-- End Hero Slider --> 
    <!-- Site Search Module -->
    <div class="site-search-module">
      <div class="container">
        <div class="site-search-module-inside">
          <form action="#">
            <div class="form-group">
              <div class="row">
                <div class="col-md-2">
                    <select name="propery type" class="form-control input-lg selectpicker">
                        <option selected>Type</option>
                      	<option>Villa</option>
                      	<option>Family House</option>
                      	<option>Single Home</option>
                      	<option>Cottage</option>
                      	<option>Apartment</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select name="propery contract type" class="form-control input-lg selectpicker">
                        <option selected>Contract</option>
                      <option>Rent</option>
                      <option>Buy</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select name="propery location" class="form-control input-lg selectpicker">
                        <option selected>Location</option>
                      <option>New York</option>
                    </select>
                </div>
                <div class="col-md-2"> <button type="submit" class="btn btn-primary btn-block btn-lg"><i class="fa fa-search"></i> Search</button> </div>
                <div class="col-md-2"> <a href="#" id="ads-trigger" class="btn btn-default btn-block"><i class="fa fa-plus"></i> <span>Advanced</span></a> </div>
              </div>
              <div class="row hidden-xs hidden-sm">
                <div class="col-md-2">
                  <label>Min Beds</label>
                    <select name="beds" class="form-control input-lg selectpicker">
                      <option>Any</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                      <option>9</option>
                      <option>10</option>
                    </select>
                </div>
                <div class="col-md-2">
                  <label>Min Baths</label>
                    <select name="beds" class="form-control input-lg selectpicker">
                      <option>Any</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                      <option>9</option>
                      <option>10</option>
                    </select>
                </div>
                <div class="col-md-2">
                  <label>Min Price</label>
                    <select name="beds" class="form-control input-lg selectpicker">
                      <option>Any</option>
                      <option>$1000</option>
                      <option>$5000</option>
                      <option>$10000</option>
                      <option>$50000</option>
                      <option>$100000</option>
                      <option>$500000</option>
                      <option>$1000000</option>
                      <option>$3000000</option>
                      <option>$5000000</option>
                      <option>$10000000</option>
                    </select>
                </div>
                <div class="col-md-2">
                  <label>Max Price</label>
                    <select name="beds" class="form-control input-lg selectpicker">
                      <option>Any</option>
                      <option>$1000</option>
                      <option>$5000</option>
                      <option>$10000</option>
                      <option>$50000</option>
                      <option>$100000</option>
                      <option>$500000</option>
                      <option>$1000000</option>
                      <option>$3000000</option>
                      <option>$5000000</option>
                      <option>$10000000</option>
                    </select>
                </div>
                <div class="col-md-2">
                  <label>Min Area (Sq Ft)</label>
                  <input type="text" class="form-control input-lg" placeholder="Any">
                </div>
                <div class="col-md-2">
                  <label>Max Area (Sq Ft)</label>
                  <input type="text" class="form-control input-lg" placeholder="Any">
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="featured-blocks">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-4 featured-block"> <img src="http://placehold.it/600x600&amp;text=IMAGE+PLACEHOLDER" alt="Search Anywhere" class="img-thumbnail">
              <h3>Search From Anywhere</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
            </div>
            <div class="col-md-4 col-sm-4 featured-block"> <img src="http://placehold.it/600x600&amp;text=IMAGE+PLACEHOLDER" alt="Friendly Agents" class="img-thumbnail">
              <h3>Friendly Agents</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
            </div>
            <div class="col-md-4 col-sm-4 featured-block"> <img src="http://placehold.it/600x600&amp;text=IMAGE+PLACEHOLDER" alt="Search Anywhere" class="img-thumbnail">
              <h3>Buy or Rent</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="spacer-40"></div>
    <div class="container">
      <div class="row">
          <div class="property-columns" id="latest-properties">
              <div class="col-md-12">
                <div class="block-heading">
                  <h4><span class="heading-icon"><i class="fa fa-leaf"></i></span>Recently Listed</h4>
                  <a href="simple-listing-fw.php" class="btn btn-primary btn-sm pull-right">View more properties <i class="fa fa-long-arrow-right"></i></a>
                </div>
              </div>
              <ul>
                <li class="col-md-4 col-sm-6 type-rent">
                      <div class="property-block">
                          <a href="property-detail.php" class="property-featured-image">
                              <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                              <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                              <span class="badges">Rent</span>
                          </a>
                      <div class="property-info">
                              <h4><a href="property-detail.php">116 Waverly Place</a></h4>
                              <span class="location">NYC</span>
                              <div class="price"><strong>$</strong><span>2800 Monthly</span></div>
                      </div>
                      <div class="property-amenities clearfix">
                              <span class="area"><strong>5000</strong>Area</span>
                              <span class="baths"><strong>3</strong>Baths</span>
                              <span class="beds"><strong>3</strong>Beds</span>
                              <span class="parking"><strong>1</strong>Parking</span>
                          </div>
                      </div>
                </li>
                <li class="col-md-4 col-sm-6 type-buy">
                      <div class="property-block">
                          <a href="property-detail.php" class="property-featured-image">
                          <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                              <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                              <span class="badges">Buy</span>
                          </a>
                      <div class="property-info">
                              <h4><a href="property-detail.php">232 East 63rd Street</a></h4>
                              <span class="location">NYC</span>
                              <div class="price"><strong>$</strong><span>250000</span></div>
                      </div>
                      <div class="property-amenities clearfix">
                          <span class="area"><strong>5000</strong>Area</span>
                              <span class="baths"><strong>3</strong>Baths</span>
                              <span class="beds"><strong>3</strong>Beds</span>
                              <span class="parking"><strong>1</strong>Parking</span>
                          </div>
                      </div>
                </li>
                <li class="col-md-4 col-sm-6 type-rent">
                      <div class="property-block">
                          <a href="property-detail.php" class="property-featured-image">
                              <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                              <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                              <span class="badges">Buy</span>
                      </a>
                      <div class="property-info">
                              <h4><a href="property-detail.php">55 Warren Street</a></h4>
                              <span class="location">NYC</span>
                              <div class="price"><strong>$</strong><span>300000</span></div>
                      </div>
                      <div class="property-amenities clearfix">
                          <span class="area"><strong>5000</strong>Area</span>
                          <span class="baths"><strong>3</strong>Baths</span>
                              <span class="beds"><strong>3</strong>Beds</span>
                              <span class="parking"><strong>1</strong>Parking</span>
                          </div>
                      </div>
                </li>
                <li class="col-md-4 col-sm-6 type-rent">
                      <div class="property-block">
                      <a href="property-detail.php" class="property-featured-image">
                          <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                          <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                          <span class="badges">Rent</span>
                          </a>
                      <div class="property-info">
                              <h4><a href="property-detail.php">459 West Broadway</a></h4>
                              <span class="location">NYC</span>
                              <div class="price"><strong>$</strong><span>3100 Monthly</span></div>
                      </div>
                      <div class="property-amenities clearfix">
                          <span class="area"><strong>5000</strong>Area</span>
                              <span class="baths"><strong>3</strong>Baths</span>
                              <span class="beds"><strong>3</strong>Beds</span>
                              <span class="parking"><strong>1</strong>Parking</span>
                          </div>
                      </div>
                </li>
                <li class="col-md-4 col-sm-6 type-buy">
                      <div class="property-block">
                      <a href="property-detail.php" class="property-featured-image">
                              <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                              <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                              <span class="badges">Buy</span>
                          </a>
                      <div class="property-info">
                              <h4><a href="property-detail.php">70 Greene Street</a></h4>
                              <span class="location">NYC</span>
                              <div class="price"><strong>$</strong><span>500000</span></div>
                      </div>
                      <div class="property-amenities clearfix">
                          <span class="area"><strong>5000</strong>Area</span>
                          <span class="baths"><strong>3</strong>Baths</span>
                          <span class="beds"><strong>3</strong>Beds</span>
                          <span class="parking"><strong>1</strong>Parking</span>
                          </div>
                      </div>
                </li>
                <li class="col-md-4 col-sm-6 type-rent">
                      <div class="property-block">
                      <a href="property-detail.php" class="property-featured-image">
                          <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                              <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                              <span class="badges">Rent</span>
                          </a>
                      <div class="property-info">
                              <h4><a href="property-detail.php">115 Allen Street</a></h4>
                              <span class="location">NYC</span>
                              <div class="price"><strong>$</strong><span>5000 Monthly</span></div>
                      </div>
                      <div class="property-amenities clearfix">
                          <span class="area"><strong>5000</strong>Area</span>
                          <span class="baths"><strong>3</strong>Baths</span>
                          <span class="beds"><strong>3</strong>Beds</span>
                          <span class="parking"><strong>1</strong>Parking</span>
                          </div>
                      </div>
                </li>
              </ul>
          </div>
        </div>
      </div>
      <div id="featured-properties">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="block-heading">
                <h4><span class="heading-icon"><i class="fa fa-star"></i></span>Featured Properties</h4>
              </div>
            </div>
          </div>
          <div class="row">
              <ul class="owl-carousel owl-alt-controls" data-columns="4" data-autoplay="no" data-pagination="no" data-arrows="yes" data-single-item="no">
                  <li class="item property-block">
                      <a href="property-detail.php" class="property-featured-image">
                      <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                      <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                      <span class="badges">Rent</span>
                      </a>
                      <div class="property-info">
                          <h4><a href="property-detail.php">116 Waverly Place</a></h4>
                          <span class="location">NYC</span>
                          <div class="price"><strong>$</strong><span>2800 Monthly</span></div>
                      </div>
                  </li>
                  <li class="item property-block">
                  <a href="property-detail.php" class="property-featured-image">
                      <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                      <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                          <span class="badges">Buy</span>
                      </a>
                      <div class="property-info">
                          <h4><a href="property-detail.php">232 East 63rd Street</a></h4>
                          <span class="location">NYC</span>
                          <div class="price"><strong>$</strong><span>250000</span></div>
                      </div>
                  </li>
                  <li class="item property-block">
                      <a href="property-detail.php" class="property-featured-image">
                          <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                          <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                          <span class="badges">Buy</span>
                      </a>
                      <div class="property-info">
                          <h4><a href="property-detail.php">55 Warren Street</a></h4>
                          <span class="location">NYC</span>
                          <div class="price"><strong>$</strong><span>300000</span></div>
                      </div>
                  </li>
                  <li class="item property-block">
                      <a href="property-detail.php" class="property-featured-image">
                          <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                          <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                          <span class="badges">Rent</span>
                      </a>
                      <div class="property-info">
                          <h4><a href="property-detail.php">459 West Broadway</a></h4>
                          <span class="location">NYC</span>
                          <div class="price"><strong>$</strong><span>3100 Monthly</span></div>
                      </div>
                  </li>
                  <li class="item property-block">
                  <a href="property-detail.php" class="property-featured-image">
                          <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                          <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                          <span class="badges">Buy</span>
                      </a>
                      <div class="property-info">
                          <h4><a href="property-detail.php">70 Greene Street</a></h4>
                          <span class="location">NYC</span>
                          <div class="price"><strong>$</strong><span>500000</span></div>
                      </div>
                  </li>
                  <li class="item property-block">
                      <a href="property-detail.php" class="property-featured-image">
                          <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                          <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                          <span class="badges">Rent</span>
                      </a>
                      <div class="property-info">
                          <h4><a href="property-detail.php">115 Allen Street</a></h4>
                          <span class="location">NYC</span>
                          <div class="price"><strong>$</strong><span>5000 Monthly</span></div>
                      </div>
                  </li>
              </ul>
          </div>
        </div>
      </div>
      <div class="padding-tb45 bottom-blocks">
          <div class="container">
              <div class="row">
                  <div class="col-md-4 col-sm-4 features-list column">
                      <h3>Theme features</h3>
                    <ul>
                      <li>
                              <div class="icon"><i class="fa fa-umbrella"></i></div>
                           <div class="text">
                                  <h4>Lots of possibilities</h4>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                           </div>
                       </li>
                      <li>
                              <div class="icon"><i class="fa fa-list"></i></div>
                           <div class="text">
                                  <h4>Property list view</h4>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                           </div>
                       </li>
                      <li>
                              <div class="icon"><i class="fa fa-search"></i></div>
                           <div class="text">
                                  <h4>Advance Search Options</h4>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                           </div>
                       </li>
                      <li>
                              <div class="icon"><i class="fa fa-users"></i></div>
                           <div class="text">
                                  <h4>Agents Profile</h4>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                           </div>
                       </li>
                    </ul> 
                </div>
                  <div class="col-md-4 col-sm-4 popular-agent column">
                      <h3>Popular Agent</h3>
                    <a href="agent-detail.php"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="" class="img-thumbnail"></a> 
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-6">
                          <h4><a href="agent-detail.php">Brooklyn Coyle</a></h4>
                              <a href="agent-detail.php" class="btn btn-sm btn-primary">more details</a>
                       </div>
                       <div class="col-md-6 col-sm-6 col-xs-6">
                              <ul class="contact-info">
                                  <li><i class="fa fa-phone"></i> +87 6543 210</li>
                               <li><i class="fa fa-envelope"></i> brook@gmail.com</li>
                           </ul>
                       </div>
                    </div>
                </div>
                  <div class="col-md-4 col-sm-4 latest-testimonials column">
                      <h3>Client Testimonials</h3>
                    <ul class="testimonials">
                      <li>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                          <img src="http://placehold.it/80x80&amp;text=IMAGE+PLACEHOLDER" alt="Happy Client" class="testimonial-sender">
                              <cite>Mellisa - <strong>My company</strong>
                              <br><a href="#">www.companyurl.com</a>
                           </cite>
                        </li>
                    </ul> 
                </div>
             </div>
         </div>
      </div>
     	<div class="container">
         <div class="block-heading">
            <h4><span class="heading-icon"><i class="fa fa-users"></i></span>Our Partners</h4>
            <a href="about.php" class="btn btn-primary btn-sm pull-right">All partners <i class="fa fa-long-arrow-right"></i></a>
         </div>
         <div class="row">
            <ul class="owl-carousel" id="clients-slider" data-columns="6" data-autoplay="yes" data-pagination="no" data-arrows="no" data-single-item="no" data-items-desktop="6" data-items-desktop-small="4" data-items-mobile="2" data-items-tablet="4">
              <li class="item"> <a href="#"><img src="images/partner-1.png" alt=""></a> </li>
              <li class="item"> <a href="#"><img src="images/partner-2.png" alt=""></a> </li>
              <li class="item"> <a href="#"><img src="images/partner-3.png" alt=""></a> </li>
              <li class="item"> <a href="#"><img src="images/partner-4.png" alt=""></a> </li>
              <li class="item"> <a href="#"><img src="images/partner-5.png" alt=""></a> </li>
              <li class="item"> <a href="#"><img src="images/partner-1.png" alt=""></a> </li>
              <li class="item"> <a href="#"><img src="images/partner-2.png" alt=""></a> </li>
              <li class="item"> <a href="#"><img src="images/partner-3.png" alt=""></a> </li>
              <li class="item"> <a href="#"><img src="images/partner-4.png" alt=""></a> </li>
              <li class="item"> <a href="#"><img src="images/partner-5.png" alt=""></a> </li>
            </ul>
         </div>
      </div>
    </div>
  </div>
  <!-- Start Site Footer -->
  <footer class="site-footer">
      <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-6 footer-widget widget">
                <h3 class="widgettitle">Latest News</h3>
                  <ul>
                      <li>
                          <a href="blog-post.php">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                          <span class="meta-data">1 March, 2014</span>
                      </li>
                      <li>
                      <a href="blog-post.php">Lorem ipsum dolor sit amet elit, consectetur adipiscing.</a>
                          <span class="meta-data">28 February, 2014</span>
                      </li>
                      <li>
                      <a href="blog-post.php">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                          <span class="meta-data">26 February, 2014</span>
                      </li>
                  </ul>
              </div>
            <div class="col-md-3 col-sm-6 footer-widget widget">
                <h3 class="widgettitle">Useful Links</h3>
               <ul>
                <li><a href="submit.php">Add your listing</a></li>
                <li><a href="login.php">Become an agent</a></li>
                <li><a href="pricing.php">Pricing</a></li>
                <li><a href="about.php">About us</a></li>
                <li><a href="shortcodes.php">Theme features</a></li>
               </ul>
           </div>
            <div class="col-md-3 col-sm-6 footer-widget widget">
              <h3 class="widgettitle">Twitter Updates</h3>
                  <ul class="twitter-widget"></ul>
           </div>
            <div class="col-md-3 col-sm-6 footer-widget widget">
                <h3 class="widgettitle">Our Newsletter</h3>
               	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
               	<form method="post" id="newsletterform" name="newsletterform" class="newsletter-form" action="mail/newsletter.php">
                  	<input type="email" name="nl-email" id="nl-email" placeholder="Enter your email" class="form-control">
                  	<input type="submit" name="nl-submit" id="nl-submit" class="btn btn-primary btn-block btn-lg" value="Subscribe">
               	</form>
              	<div class="clearfix"></div>
              	<div id="nl-message"></div>
           </div>
       </div>
   </div>
  </footer>
  <footer class="site-footer-bottom">
    <div class="container">
      <div class="row">
        <div class="copyrights-col-left col-md-6 col-sm-6">
          <p>&copy; 2014 RealSpaces. All Rights Reserved</p>
        </div>
        <div class="copyrights-col-right col-md-6 col-sm-6">
          <div class="social-icons">
              <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
             <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
             <a href="http://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a>
             <a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a>
             <a href="http://www.pinterest.com/" target="_blank"><i class="fa fa-youtube"></i></a>
             <a href="#"><i class="fa fa-rss"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Site Footer -->
  <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a>
</div>
<script src="js/jquery-2.0.0.min.js"></script> <!-- Jquery Library Call --> 
<script src="plugins/prettyphoto/js/prettyphoto.js"></script> <!-- PrettyPhoto Plugin --> 
<script src="plugins/owl-carousel/js/owl.carousel.min.js"></script> <!-- Owl Carousel --> 
<script src="plugins/flexslider/js/jquery.flexslider.js"></script> <!-- FlexSlider --> 
<script src="js/helper-plugins.js"></script> <!-- Plugins --> 
<script src="js/bootstrap.js"></script> <!-- UI --> 
<script src="js/waypoints.js"></script> <!-- Waypoints --> 
<script src="js/init.js"></script> <!-- All Scripts -->
<!--[if lte IE 9]><script src="js/script_ie.js"></script><![endif]-->
</body>
</html>