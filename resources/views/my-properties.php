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
                  <li><a href="{{ url('/submit')}}">Ajouter une propriété</a></li>
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
            <h1 class="logo"> <a href="{{ url('/')}}"><img src="{{ asset('/images/logo.png') }}" alt="Logo"></a> </h1>
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
                <li><a href="{{ url('/') }}">Accueil</a></li>
                <li><a href="{{ url('/about') }}">A Propos</a></li>
                <li><a href="{{ url('/achatMaison') }}">Achat/Location</a> </li>
                <li><a href="{{ url('/locationSaisonniere') }}">Location Saisonnière</a> </li>
                <li><a href="{{ url('/venteTerrain') }}">Achat de Terrain</a></li>
                <li><a href="{{ url('/galerie') }}">Galérie</a> </li>
                <li><a href="{{ url('/blog') }}">Blog</a></li>
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
  <div class="parallax page-header" style="background-image:url('{{ asset('/images/banner/1200x260.png')}}');">
  		<div class="container">
        	<div class="row">
            	<div class="col-md-12">
  					<h1>My properties</h1>
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
          		<div class="page">
        			<div class="row">
              			<div class="col-md-12">
                  		<div class="block-heading" id="details">
                     			<a href="#additionalinfo" class="btn btn-sm btn-primary pull-right">Add new property <i class="fa fa-long-arrow-right"></i></a>
                         		<h4><span class="heading-icon"><i class="fa fa-home"></i></span>Listed Properties</h4>
                     		</div>
        					<div class="properties-table">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Contract</th>
                                        <th>Price</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="property-detail.php"><img src="http://placehold.it/150x100&amp;text=IMAGE+PLACEHOLDER" alt="" width="100"></a>
                                        </td>
                                        <td><a href="property-detail.php">116 Waverly Place</a></td>
                                        <td>Family Home</td>
                                        <td>Rent</td>
                                        <td><div class="price"><strong>$</strong><span>$2800 Monthly</span></div></td>
                                        <td>
                                            <a href="#" class="action-button"><i class="fa fa-pencil"></i> <span>Edit</span></a>
                                            <a href="property-detail.php" class="action-button"><i class="fa fa-eye"></i> <span>View</span></a>
                                            <a href="#" class="action-button"><i class="fa fa-ban"></i> <span>Remove</span></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="property-detail.php"><img src="http://placehold.it/150x100&amp;text=IMAGE+PLACEHOLDER" alt="" width="100"></a>
                                        </td>
                                        <td><a href="property-detail.php">232 East 63rd Street</a></td>
                                        <td>Villa</td>
                                        <td>Rent</td>
                                        <td><div class="price"><strong>$</strong><span>$250000</span></div></td>
                                        <td>
                                            <a href="#" class="action-button"><i class="fa fa-pencil"></i> <span>Edit</span></a>
                                            <a href="property-detail.php" class="action-button"><i class="fa fa-eye"></i> <span>View</span></a>
                                            <a href="#" class="action-button"><i class="fa fa-ban"></i> <span>Remove</span></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="property-detail.php"><img src="http://placehold.it/150x100&amp;text=IMAGE+PLACEHOLDER" alt="" width="100"></a>
                                        </td>
                                        <td><a href="property-detail.php">459 West Broadway</a></td>
                                        <td>Family Home</td>
                                        <td>Rent</td>
                                        <td><div class="price"><strong>$</strong><span>$300000</span></div></td>
                                        <td>
                                            <a href="#" class="action-button"><i class="fa fa-pencil"></i> <span>Edit</span></a>
                                            <a href="property-detail.php" class="action-button"><i class="fa fa-eye"></i> <span>View</span></a>
                                            <a href="#" class="action-button"><i class="fa fa-ban"></i> <span>Remove</span></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="property-detail.php"><img src="http://placehold.it/150x100&amp;text=IMAGE+PLACEHOLDER" alt="" width="100"></a>
                                        </td>
                                        <td><a href="property-detail.php">459 West Broadway</a></td>
                                        <td>Family Home</td>
                                        <td>Rent</td>
                                        <td><div class="price"><strong>$</strong><span>$3100 Monthly</span></div></td>
                                        <td>
                                            <a href="#" class="action-button"><i class="fa fa-pencil"></i> <span>Edit</span></a>
                                            <a href="property-detail.php" class="action-button"><i class="fa fa-eye"></i> <span>View</span></a>
                                            <a href="#" class="action-button"><i class="fa fa-ban"></i> <span>Remove</span></a>                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="property-detail.php"><img src="http://placehold.it/150x100&amp;text=IMAGE+PLACEHOLDER" alt="" width="100"></a>
                                        </td>
                                        <td><a href="property-detail.php">70 Greene Street</a></td>
                                        <td>Villa</td>
                                        <td>Rent</td>
                                        <td><div class="price"><strong>$</strong><span>$500000</span></div></td>
                                        <td>
                                            <a href="#" class="action-button"><i class="fa fa-pencil"></i> <span>Edit</span></a>
                                            <a href="property-detail.php" class="action-button"><i class="fa fa-eye"></i> <span>View</span></a>
                                            <a href="#" class="action-button"><i class="fa fa-ban"></i> <span>Remove</span></a>
                                        </td>
                                    </tr>
                                </tbody>
                             </table>
                          </div>
                          <div class="text-align-center">
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
<script src="{{ asset('/js/bootstrap.js') }}"></script> <!-- UI -->
<script src="{{ asset('/js/waypoints.js') }}"></script> <!-- Waypoints -->
<script src="{{ asset('/js/init.js') }}"></script> <!-- All Scripts -->
<!--[if lte IE 9]><script src="js/script_ie.js"></script><![endif]-->
</body>
</html>
