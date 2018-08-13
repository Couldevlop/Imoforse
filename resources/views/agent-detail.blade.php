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
<link href="{{ asset('/css/bootstrap.css') }} " rel="stylesheet" type="text/css">
<link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('/plugins/prettyphoto/css/prettyPhoto.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('/plugins/owl-carousel/css/owl.carousel.css') }} " rel="stylesheet" type="text/css">
<link href=" {{ asset('/plugins/owl-carousel/css/owl.theme.css')}} " rel="stylesheet" type="text/css">
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
<!-- Color Style -->
<link href=" {{ asset('/colors/color9.css') }} " rel="stylesheet" type="text/css">

<link rel="apple-touch-icon" sizes="57x57" href="{{ asset('images/app/apple-icon-57x57.png') }}">
<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('images/app/apple-icon-60x60.png') }}">
<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/app/apple-icon-72x72.png') }}">
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/app/apple-icon-76x76.png') }}">
<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/app/apple-icon-114x114.png') }}">
<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/app/apple-icon-120x120.png') }}">
<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('images/app/apple-icon-144x144.png') }}">
<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/app/apple-icon-152x152.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/app/apple-icon-180x180.png') }}">
<link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('images/app/android-icon-192x192.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/app/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/app/favicon-96x96.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/app/favicon-16x16.png') }}">
<link rel="manifest" href="{{ asset('images/app/manifest.json') }}">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="{{ asset('images/app/ms-icon-144x144.png') }}">
<meta name="theme-color" content="#ffffff">

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
              <li class="dropdown"><a data-toggle="dropdown"><i class="fa fa-user"></i> Login <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="my-properties.php">My properties</a></li>
                  <li><a href="submit.php">Add a property</a></li>
                  <li><a href="edit-agent-profile.php">My Profile</a></li>
                </ul>
              </li>
              <li><a href="{{ url('/login')}}"><i class="fa fa-check-circle"></i> Connexion</a></li>
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
            <h1 class="logo"> <a href="{{ url('/')}}"><img src="{{ asset('/images/logo.png') }}" alt="Imoforse Logo"></a> </h1>
          </div>
          <div class="col-md-8 col-sm-4 col-xs-4">
              <div class="contact-info-blocks hidden-sm hidden-xs">
                  <div>
                      <i class="fa fa-phone"></i> Téléphone:
                    <span>00225 08 57 74 64</span>
                </div>
                  <div>
                      <i class="fa fa-envelope"></i> Email
                    <span>infos@imoforse.com</span>
                </div>
                  <div>
                      <i class="fa fa-clock-o"></i> Heures d'ouvertures
                    <span>09:00 à 17:00</span>
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
                <li><a href="{ url('/')}">Accueil</a></li>
                <li><a href="{{ url('/about')}}">A Propos</a></li>
                <li><a href="javascript:;">Pages</a>
                  <ul class="dropdown">
                    <li><a href="agents.php">Agents</a></li>
                    <li><a href="{{ url('/agentDetail') }}">Agent Single</a></li>
                    <li><a href="my-properties.php">Agent Properties</a></li>
                    <li><a href="{{ url('/submit')}}">List a property</a></li>
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
                    <li><a href="{{ url('/propertyDetail') }}">Single Property</a></li>
                    <li><a href="property-detail-fw.php">Single Property Full Width</a></li>
                  </ul>
                </li>
                <li><a href="{{ url('/galerie')}}">Gallery</a></li>
                <li><a href="{{ url('/blog')}}">Blog</a> </li>
                <li><a href="{{ url('/contact')}}">Contact</a></li>
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
    <div class="parallax page-header"style="background-image:url('{{ asset('images/banner/1200X260.png') }}')">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <h1>Infos Agent</h1>
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
                      <div class="single-agent">
                          <div class="counts pull-right"><strong>18</strong><span>Properties</span></div>
                          <h2 class="page-title">Mia Kennedy</h2>
                          <div class="row">
                              <div class="col-md-6 col-sm-6">
                                      <img src="{{ asset('/images/600x400.png') }}" alt="Mia Kennedy" class="img-thumbnail">
                              </div>
                              <div class="col-md-6 col-sm-6">
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vehicula dapibus mauris, quis ullamcorper enim aliquet sed. Maecenas quis eget tellus dui. Vivamus condimentum egestas.</p>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam euismod sollicitudin nunc, eget pretium massa. Ut sed adipiscing enim, pellentesque ultrices erat. Integer placerat felis neque, et semper augue ullamcorper in. Pellentesque iaculis leo iaculis aliquet ultrices. Suspendisse potenti. Aenean ac magna faucibus, consectetur ligula vel, feugiat est. Nullam imperdiet semper neque eget euismod. Nunc commodo volutpat semper.</p>
                              </div>
                          </div>
                          <div class="row">
                                  <div class="col-md-6 col-sm-6">
                                  <div class="agent-contact-details">
                                          <h4>Contact Details</h4>
                                          <ul class="list-group">
                                          <li class="list-group-item"> <span class="badge">080 378678 90</span> Mobile Phone </li>
                                          <li class="list-group-item"> <span class="badge">080 378655</span> Work Phone </li>
                                          <li class="list-group-item"> <span class="badge">mia@kennedy.com</span> Email </li>
                                          <li class="list-group-item">
                                              <div class="social-icons">
                                                  <a href="#"><i class="fa fa-facebook"></i></a>
                                                  <a href="#"><i class="fa fa-twitter"></i></a>
                                                  <a href="#"><i class="fa fa-google-plus"></i></a>
                                                  <a href="#"><i class="fa fa-envelope"></i></a>
                                             </div>
                                          </li>
                                          </ul>
                                      </div>
                               </div>
                               <div class="col-md-6 col-sm-6">
                                  <div class="agent-contact-form">
                                          <h4>Contactez l'Agent</h4>
                                      <form>
                                              <input type="email" name="Email Address" class="form-control" placeholder="Email Address">
                                          <textarea name="comments" class="form-control" placeholder="Your message" cols="10" rows="5"></textarea>
                                          <button type="submit" class="btn btn-primary pull-right">Envoyer</button>
                                          </form>
                                  </div>
                               </div>
                          </div>
                    </div>
                    <div class="spacer-20"></div>
                    <!-- Start Annonces similaires -->
                    <h3>Latest properties listed by <a href="#">Mia Kennedy</a></h3>
                    <hr>
                    <div class="property-grid">
                      <ul class="grid-holder col-3">
                        <li class="grid-item type-rent">
                          <div class="property-block"> <a href="#" class="property-featured-image"> <img src="{{ asset('/images/600x400.png') }}" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Louer</span> </a>
                            <div class="property-info">
                              <h4><a href="#">116 Waverly Place</a></h4>
                              <span class="location">NYC</span>
                              <div class="price"><span>2800/Mois</span><strong>CFA</strong></div>
                            </div>
                            <div class="property-amenities clearfix"> <span class="area"><strong>5000</strong>m2</span> <span class="baths"><strong>3</strong>Douches</span> <span class="Chambres"><strong>3</strong>Chambres</span> </div>
                          </div>
                        </li>
                        <li class="grid-item type-buy">
                          <div class="property-block"> <a href="#" class="property-featured-image"> <img src="{{ asset('/images/600x400.png') }}" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Acheter</span> </a>
                            <div class="property-info">
                              <h4><a href="#">232 East 63rd Street</a></h4>
                              <span class="location">NYC</span>
                              <div class="price"><span>250000</span><strong>CFA</strong></div>
                            </div>
                            <div class="property-amenities clearfix"> <span class="area"><strong>5000</strong>m2</span> <span class="baths"><strong>3</strong>Douches</span> <span class="Chambres"><strong>3</strong>Chambres</span></div>
                          </div>
                        </li>
                        <li class="grid-item type-rent">
                          <div class="property-block"> <a href="#" class="property-featured-image"> <img src="{{ asset('/images/600x400.png') }}" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Buy</span> </a>
                            <div class="property-info">
                              <h4><a href="#">55 Warren Street</a></h4>
                              <span class="location">NYC</span>
                              <div class="price"><span>300000</span><strong>CFA</strong></div>
                            </div>
                            <div class="property-amenities clearfix"> <span class="area"><strong>5000</strong>m2</span> <span class="baths"><strong>3</strong>Douches</span> <span class="Chambres"><strong>3</strong>Chambres</span> </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!-- Start Sidebar -->
                  <div class="sidebar right-sidebar col-md-3">
                      <!-- Agents Widget -->
                      <div class="widget sidebar-widget widget-agents">
                      <h3 class="widgettitle">Plus Agents</h3>
                          <ul>
                              <li>
                                  <div class="row">
                                      <div class="col-md-5 col-sm-5 col-xs-5">
                                          <a href="{{ url('/agentDetail') }}"><img src="{{ asset('/images/600x400.png') }}" alt="Brooklyn Coyle" class="img-thumbnail"></a>
                                  </div>
                                  <div class="col-md-7 col-sm-7 col-xs-7">
                                      <strong><a href="{{ url('/agentDetail') }}">Brooklyn Coyle</a></strong>
                                      <span class="badge"><i class="fa fa-phone"></i> 080 378678 90</span>
                                  </div>
                                  </div>
                              </li>
                              <li>
                                  <div class="row">
                                      <div class="col-md-5 col-sm-5 col-xs-5">
                                          <a href="{{ url('/agentDetail') }}"><img src="{{ asset('/images/600x400.png') }}" alt="Ben Patel" class="img-thumbnail"></a>
                                  </div>
                                  <div class="col-md-7 col-sm-7 col-xs-7">
                                      <strong><a href="{{ url('/agentDetail') }}">Ben Patel</a></strong>
                                      <span class="badge"><i class="fa fa-phone"></i> 080 378678 90</span>
                                  </div>
                                  </div>
                              </li>
                              <li>
                                  <div class="row">
                                      <div class="col-md-5 col-sm-5 col-xs-5">
                                          <a href="{{ url('/agentDetail') }}"><img src="{{ asset('/images/600x400.png') }}" alt="Emma Dumas" class="img-thumbnail"></a>
                                  </div>
                                  <div class="col-md-7 col-sm-7 col-xs-7">
                                      <strong><a href="{{ url('/agentDetail') }}">Emma Dumas</a></strong>
                                      <span class="badge"><i class="fa fa-phone"></i> 080 378678 90</span>
                                  </div>
                                  </div>
                              </li>
                          </ul>
                    </div>
                    <!-- Featured Properties Widget -->
                    <div class="widget sidebar-widget widget-properties">
                        <h3 class="widgettitle">Featured Properties</h3>
                        <ul>
                              <li>
                                  <div class="row">
                                      <div class="col-md-5 col-sm-5 col-xs-5">
                                      <a href="{{ url('/propertyDetail') }}"><img src="{{ asset('/images/600x400.png') }}" alt="" class="img-thumbnail"></a>
                                  </div>
                                  <div class="col-md-7 col-sm-7 col-xs-7">
                                      <strong><a href="{{ url('/propertyDetail') }}">116 Waverly Place</a></strong>
                                      <div class="price"><span>28000/Mois</span><strong>CFA</strong></div>
                                  </div>
                                  </div>
                              </li>
                              <li>
                                  <div class="row">
                                      <div class="col-md-5 col-sm-5 col-xs-5">
                                      <a href="{{ url('/propertyDetail') }}"><img src="{{ asset('/images/600x400.png') }}" alt="" class="img-thumbnail"></a>
                                  </div>
                                  <div class="col-md-7 col-sm-7 col-xs-7">
                                      <strong><a href="{{ url('/propertyDetail') }}">70 Greene Street</a></strong>
                                      <div class="price"><span>500000</span><strong>CFA</strong></div>
                                  </div>
                                  </div>
                              </li>
                              <li>
                                  <div class="row">
                                      <div class="col-md-5 col-sm-5 col-xs-5">
                                      <a href="{{ url('/propertyDetail') }}"><img src="{{ asset('/images/600x400.png') }}" alt="" class="img-thumbnail"></a>
                                  </div>
                                  <div class="col-md-7 col-sm-7 col-xs-7">
                                      <strong><a href="{{ url('/propertyDetail') }}">55 Warren Street</a></strong>
                                      <div class="price"><span>300000</span><strong>CFA</strong></div>
                                  </div>
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
                <h3 class="widgettitle">Imoforse</h3>
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
                <h3 class="widgettitle">Liens utiles</h3>
               <ul>
                <li><a href="submit.php">Add your listing</a></li>
                <li><a href="login.php">Become an agent</a></li>
                <li><a href="pricing.php">Pricing</a></li>
                <li><a href="about.php">About us</a></li>
                <li><a href="shortcodes.php">Theme features</a></li>
               </ul>
           </div>
            <div class="col-md-3 col-sm-6 footer-widget widget">
              <h3 class="widgettitle">Articles récents</h3>
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
                <h3 class="widgettitle">Newsletter</h3>
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
<script src="{{ asset('/js/helper-plugins.js') }}"></script> <!-- Plugins -->
<script src="{{ asset('/js/bootstrap.js) }}"></script> <!-- UI -->
<script src="{{ asset('/js/waypoints.js') }}"></script> <!-- Waypoints -->
<script src="{{ asset('/js/init.js') }}"></script> <!-- All Scripts -->
<!--[if lte IE 9]><script src="js/script_ie.js"></script><![endif]-->
</body>
</html>
