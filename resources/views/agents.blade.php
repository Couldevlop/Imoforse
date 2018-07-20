<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}" class="no-js">
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Imoforse</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">
<!-- CSS
  ================================================== -->
<link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('/plugins/prettyphoto/css/prettyPhoto.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('/plugins/owl-carousel/css/owl.carousel.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('/plugins/owl-carousel/css/owl.theme.css') }}" rel="stylesheet" type="text/css">
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
<!-- Color Style -->
<link href="{{ asset('/colors/color9.css') }}" rel="stylesheet" type="text/css">
<!-- SCRIPTS
  ================================================== -->
<script src="{{ asset('/js/modernizr.js') }}"></script><!-- Modernizr -->
</head>
<body>
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
              <li class="dropdown"><a data-toggle="dropdown"><i class="fa fa-user"></i> Mon compte <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="{{ url('/myProperties') }}">Mes propriétés</a></li>
                  <li><a href="{{ url('/submitProperty') }}">Ajouter une propriété</a></li>
                  <li><a href="edit-agent-profile.php">Mon profile</a></li>
                </ul>
              </li>
              <li><a href="{{ url('/login') }}"><i class="fa fa-check-circle"></i> Connexion</a></li>
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
            <h1 class="logo"> <a href="{{ url('/') }}"><img src="{{ asset('/images/logo.png') }}" alt="Logo"></a> </h1>
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
                <li><a href="{{ url('/') }}">Accueil</a>
                  <ul class="dropdown">
                    <li><a href="{{ url('/') }}">Version 1</a></li>
                    <li><a href="index1.php">Version 2</a></li>
                  </ul>
                </li>
                <li><a href="{{ url('/about') }}">A Propos</a></li>
                <li><a href="{{ url('/login') }}">Register as Agent</a></li>
                <li><a href="javascript:;">Pages</a>
                  <ul class="dropdown">
                    <li><a href="{{ url('/agents') }}">Agents</a></li>
                    <li><a href="{{ url('/agent-detail') }}">Agent Single</a></li>
                    <li><a href="{{ url('/my-properties') }}">Agent Properties</a></li>
                    <li><a href="{{ url('/submitProperty') }}">List a property</a></li>
                    <li><a href="{{ url('/pricing') }}">Pricing</a></li>
                    <li><a href="{{ url('/login') }}">Register/Login</a></li>
                    <li><a href="{{ url('/404') }}">404</a></li>
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
                <li><a href="{{ url('/contact') }}">Contact</a></li>
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
    <!-- Start Page Header -->
    <div class="parallax page-header" style="background-image:url(http://placehold.it/1200x260&amp;text=IMAGE+PLACEHOLDER);">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <h1>Our Agents</h1>
                  </div>
             </div>
         </div>
    </div>
    <!-- End Page Header -->
  </div>
  <!-- Start Content -->
  <div class="main" role="main">
      <div id="content" class="content full">
          <div class="container">
              <div class="row">
                  <div class="col-md-9">
                      <div class="block-heading">
                          <a href="register.php" class="btn btn-sm btn-primary pull-right">Become an agent <i class="fa fa-long-arrow-right"></i></a>
                          <h4><span class="heading-icon"><i class="fa fa-users"></i></span>All Agents</h4>
                      </div>
                    <div class="agents-listing">
                        <ul>
                          <li class="col-md-12">
                              <div class="col-md-4">
                                      <a href="agent-detail.php" class="agent-featured-image"> <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                              </div>
                              <div class="col-md-8">
                                      <div class="agent-info">
                                      <div class="counts"><strong>18</strong><span>Properties</span></div>
                                      <h3><a href="agent-detail.php">Brooklyn Coyle</a></h3>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vehicula dapibus mauris, quis ullamcorper enim aliquet sed. Maecenas quis eget tellus dui. Vivamus condimentum egestas.</p>
                                  </div>
                                  <div class="agent-contacts clearfix">
                                          <ul>
                                          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                          <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                                      </ul>
                                  </div>
                                  </div>
                              </li>
                          <li class="col-md-12">
                              <div class="col-md-4">
                                      <a href="agent-detail.php" class="agent-featured-image"> <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                              </div>
                              <div class="col-md-8">
                                      <div class="agent-info">
                                      <div class="counts"><strong>8</strong><span>Properties</span></div>
                                      <h3><a href="agent-detail.php">Ben Patel</a></h3>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vehicula dapibus mauris, quis ullamcorper enim aliquet sed. Maecenas quis eget tellus dui. Vivamus condimentum egestas.</p>
                                  </div>
                                  <div class="agent-contacts clearfix">
                                          <ul>
                                          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                          <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                                      </ul>
                                  </div>
                                  </div>
                              </li>
                          <li class="col-md-12">
                              <div class="col-md-4">
                                      <a href="agent-detail.php" class="agent-featured-image"> <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                              </div>
                              <div class="col-md-8">
                                      <div class="agent-info">
                                      <div class="counts"><strong>23</strong><span>Properties</span></div>
                                      <h3><a href="agent-detail.php">Emma Dumas</a></h3>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vehicula dapibus mauris, quis ullamcorper enim aliquet sed. Maecenas quis eget tellus dui. Vivamus condimentum egestas.</p>
                                  </div>
                                  <div class="agent-contacts clearfix">
                                          <ul>
                                          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                          <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                                      </ul>
                                  </div>
                                  </div>
                              </li>
                          <li class="col-md-12">
                              <div class="col-md-4">
                                      <a href="agent-detail.php" class="agent-featured-image"> <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                              </div>
                              <div class="col-md-8">
                                      <div class="agent-info">
                                      <div class="counts"><strong>5</strong><span>Properties</span></div>
                                      <h3><a href="agent-detail.php">Mia Kennedy</a></h3>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vehicula dapibus mauris, quis ullamcorper enim aliquet sed. Maecenas quis eget tellus dui. Vivamus condimentum egestas.</p>
                                  </div>
                                  <div class="agent-contacts clearfix">
                                          <ul>
                                          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                          <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                                      </ul>
                                  </div>
                                  </div>
                              </li>
                        </ul>
                    </div>
                    <ul class="pagination">
                      <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                  </div>
                  <!-- Start Sidebar -->
                  <div class="sidebar right-sidebar col-md-3">
                      <div class="widget sidebar-widget">
                      <h3 class="widgettitle">Search Properties</h3>
                          <div class="full-search-form">
                              <form action="#">
                                  <select name="propery type" class="form-control input-lg selectpicker">
                                      <option selected>Type</option>
                                    <option>Villa</option>
                                    <option>Family House</option>
                                    <option>Single Home</option>
                                    <option>Cottage</option>
                                    <option>Apartment</option>
                                  </select>
                                  <select name="propery contract type" class="form-control input-lg selectpicker">
                                      <option selected>Contract</option>
                                    <option>Rent</option>
                                    <option>Buy</option>
                                  </select>
                                  <select name="propery location" class="form-control input-lg selectpicker">
                                      <option selected>Location</option>
                                    <option>New York</option>
                                  </select>
                                <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-search"></i> Search</button>
                            </form>
                          </div>
                    </div>
                    <div class="widget sidebar-widget featured-properties-widget">
                        <h3 class="widgettitle">Featured Properties</h3>
                        <ul class="owl-carousel owl-alt-controls1 single-carousel" data-columns="1" data-autoplay="no" data-pagination="no" data-arrows="yes" data-single-item="yes">
                          <li class="item property-block"> <a href="#" class="property-featured-image"> <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Rent</span> </a>
                            <div class="property-info">
                              <h4><a href="#">116 Waverly Place</a></h4>
                              <span class="location">NYC</span>
                              <div class="price"><strong>$</strong><span>2800 Monthly</span></div>
                            </div>
                          </li>
                          <li class="item property-block"> <a href="#" class="property-featured-image"> <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Buy</span> </a>
                            <div class="property-info">
                              <h4><a href="#">232 East 63rd Street</a></h4>
                              <span class="location">NYC</span>
                              <div class="price"><strong>$</strong><span>250000</span></div>
                            </div>
                          </li>
                          <li class="item property-block"> <a href="#" class="property-featured-image"> <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Buy</span> </a>
                            <div class="property-info">
                              <h4><a href="#">55 Warren Street</a></h4>
                              <span class="location">NYC</span>
                              <div class="price"><strong>$</strong><span>300000</span></div>
                            </div>
                          </li>
                          <li class="item property-block"> <a href="#" class="property-featured-image"> <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Rent</span> </a>
                            <div class="property-info">
                              <h4><a href="#">459 West Broadway</a></h4>
                              <span class="location">NYC</span>
                              <div class="price"><strong>$</strong><span>3100 Monthly</span></div>
                            </div>
                          </li>
                        </ul>
                    </div>
                  </div>
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
<script src="{{ asset('/js/jquery-2.0.0.min.js') }}"></script>
<script src="{{ asset('/plugins/prettyphoto/js/prettyphoto.js') }}"></script>
<script src="{{ asset('/plugins/owl-carousel/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('/plugins/flexslider/js/jquery.flexslider.js') }}"></script>
<script src="{{ asset('/js/helper-plugins.js') }}"></script>
<script src="{{ asset('/js/bootstrap.js') }}"></script>
<script src="{{ asset('/js/waypoints.js') }}"></script>
<script src="{{ asset('/js/init.js') }}"></script> <!-- All Scripts -->
<!--[if lte IE 9]><script src="js/script_ie.js"></script><![endif]-->
</body>
</html>
