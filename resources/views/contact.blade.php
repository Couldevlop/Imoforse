@extends ('layouts.default')
@section('showcase')
    <div class="site-showcase">
        <!-- Start Page Header -->
        <div class="parallax page-header" id="contact-map">
            <iframe src="https://maps.google.com/?ie=UTF8&amp;ll=40.717989,-74.002705&amp;spn=0.043846,0.077162&amp;t=m&amp;z=14&amp;output=embed" width="100%" height="220px"></iframe>
        </div>
        <!-- End Page Header -->
    </div>
@stop
@section('content')
    <div class="container">
        <div class="page">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h3>Laissez nous un message</h3>
                    <div class="row">
                        <form method="post" id="contactform" name="contactform" class="contact-form" action="mail/contact.php">
                            <div class="col-md-6 margin-15">
                                <div class="form-group">
                                    <input type="text" id="name" name="name"  class="form-control input-lg" placeholder="Nom complet*">
                                </div>
                                <div class="form-group">
                                    <input type="email" id="email" name="email"  class="form-control input-lg" placeholder="Email*">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="phone" name="phone" class="form-control input-lg" placeholder="Téléphone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea cols="6" rows="5" id="comments" name="comments" class="form-control input-lg" placeholder="Message"></textarea>
                                    <input id="submit" name="submit" type="submit" class="btn btn-primary btn-lg btn-block" value="Envoyer">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="clearfix"></div>
                    <div id="message"></div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <h3>Adresse</h3>
                    <div class="padding-as25 lgray-bg">
                        <p class="big">Imoforse Cie Sarl<br>
                            Cocody Riviera Faya - Abidjan, Côte d'Ivoire</p>
                        <p>Email <a href="mailto:sales@realspaces.com"><strong>infos@imoforse.com</strong></a> ou Appelez-nous au <strong>00225 08 57 74 64</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('scripts')
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
    @stop
@stop

