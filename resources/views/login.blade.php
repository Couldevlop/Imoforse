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
<link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('/plugins/prettyphoto/css/prettyPhoto.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('/plugins/owl-carousel/css/owl.carousel.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('/plugins/owl-carousel/css/owl.theme.css') }}" rel="stylesheet" type="text/css">
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
<!-- Color Style -->
<link href="{{ asset('/colors/color1.css') }}" rel="stylesheet" type="text/css">
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
                  <li><a href="{{ url('/editAgentProfile') }}">Mon profile</a></li>
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
                    <li><a href="{{ url('/myProperties') }}">Agent Properties</a></li>
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
  					<h1>Login/Register</h1>
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
              			<div class="col-md-4 col-sm-4">
            				<div class="alert alert-default fade in">
            					<h4>Before you Login/Register!</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam euismod sollicitudin nunc, eget pretium massa. Ut sed adipiscing enim, pellentesque ultrices erat. Integer placerat felis neque, et semper augue ullamcorper in. Pellentesque iaculis leo iaculis aliquet ultrices. Suspendisse potenti. Aenean ac magna faucibus, consectetur ligula vel, feugiat est. Nullam imperdiet semper neque eget euismod. Nunc commodo volutpat semper.</p>
                         </div>
            			</div>
              			<div class="col-md-4 col-sm-4 login-form">
                        	<h3>Login</h3>
                        	<form>
                        		<div class="input-group">
  									<span class="input-group-addon"><i class="fa fa-user"></i></span>
  									<input type="text" class="form-control" placeholder="Username">
								</div>
                             <br>
                        		<div class="input-group">
  									<span class="input-group-addon"><i class="fa fa-lock"></i></span>
  									<input type="password" class="form-control" placeholder="Password">
								</div>
                             <div class="checkbox">
                             	<input type="checkbox"> Remember Me!
                             </div>
                             <button type="submit" class="btn btn-primary">Login Now</button>
                     		</form>
            			</div>
              			<div class="col-md-4 col-sm-4 register-form">
                        	<h3>Register</h3>
                        	<form>
                        		<div class="input-group">
  									<span class="input-group-addon"><i class="fa fa-user"></i></span>
  									<input type="text" class="form-control" placeholder="Username">
								</div>
                             <br>
                        		<div class="input-group">
  									<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
  									<input type="email" class="form-control" placeholder="Email">
								</div>
                             <br>
                        		<div class="input-group">
  									<span class="input-group-addon"><i class="fa fa-lock"></i></span>
  									<input type="password" class="form-control" placeholder="Password">
								</div>
                             <br>
                        		<div class="input-group">
  									<span class="input-group-addon"><i class="fa fa-refresh"></i></span>
  									<input type="password" class="form-control" placeholder="Repeat Password">
								</div>
                             <br>
                             <button type="submit" class="btn btn-primary">Register Now</button>
                     		</form>
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
<script src="http://maps.google.com/maps/api/js?sensor=false"></script> <!-- Google Map --> 
<script type="text/javascript">
        function PropertiesMap() {

            /* Properties Array */
            var properties = [
                { title:"116 Waverly Place",  price:"<strong>$</strong><span>2,800 monthly</span>",  lat:40.73238,  lng:-73.99948,  thumb:"http://placehold.it/150x100&amp;text=IMAGE+PLACEHOLDER",  url:"property-details.php",  icon:"images/map-marker.png", }
				
				];

            /* Map Center Location - From Theme Options */
            var location_center = new google.maps.LatLng(properties[0].lat,properties[0].lng);

            var mapOptions = {
                zoom: 5,
                scrollwheel: false
            }

            var map = new google.maps.Map(document.getElementById("gmap"), mapOptions);

            var bounds = new google.maps.LatLngBounds();

            var markers = new Array();
            var info_windows = new Array();

            for (var i=0; i < properties.length; i++) {

                markers[i] = new google.maps.Marker({
                    position: new google.maps.LatLng(properties[i].lat,properties[i].lng),
                    map: map,
                    icon: properties[i].icon,
                    title: properties[i].title,
                    animation: google.maps.Animation.DROP
                });

                bounds.extend(markers[i].getPosition());

                info_windows[i] = new google.maps.InfoWindow({
                    content:    '<div class="map-property">'+
                        '<h4 class="property-title"><a class="title-link" href="'+properties[i].url+'">'+properties[i].title+'</a></h4>'+
                        '<a class="property-featured-image" href="'+properties[i].url+'"><img class="property-thumb" src="'+properties[i].thumb+'" alt="'+properties[i].title+'"/></a>'+
                        '<p><span class="price">'+properties[i].price+'</span></p>'+
                        '<a class="btn btn-primary btn-sm" href="'+properties[i].url+'">Details</a>'+
                        '</div>'
                });

                attachInfoWindowToMarker(map, markers[i], info_windows[i]);
            }

            map.fitBounds(bounds);

            /* function to attach infowindow with marker */
            function attachInfoWindowToMarker( map, marker, infoWindow ){
                google.maps.event.addListener( marker, 'click', function(){
                    infoWindow.open( map, marker );
                });
            }

        }

        google.maps.event.addDomListener(window, 'load', PropertiesMap);
    </script> 
</body>
</html>