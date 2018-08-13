@extends('layouts.default')
@section('showcase')

@stop
@section('content')
    <div class="container">
        <div class="page">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                </div>
                <div class="col-md-4 col-sm-4 login-form">
                    <h3>Connexion</h3>
                    <form>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" placeholder="Nom utilisateur">
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" class="form-control" placeholder="Mot de passe">
                        </div>
                        <div class="checkbox">
                            <input type="checkbox"> Se souvenir de moi!
                        </div>
                        <button type="submit" class="btn btn-primary">Se connecter</button>
                    </form>
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
                {
                    title: "116 Waverly Place",
                    price: "<strong>$</strong><span>2,800 monthly</span>",
                    lat: 40.73238,
                    lng: -73.99948,
                    thumb: "http://placehold.it/150x100&amp;text=IMAGE+PLACEHOLDER",
                    url: "property-details.php",
                    icon: "images/map-marker.png",
                }

            ];

            /* Map Center Location - From Theme Options */
            var location_center = new google.maps.LatLng(properties[0].lat, properties[0].lng);

            var mapOptions = {
                zoom: 5,
                scrollwheel: false
            }

            var map = new google.maps.Map(document.getElementById("gmap"), mapOptions);

            var bounds = new google.maps.LatLngBounds();

            var markers = new Array();
            var info_windows = new Array();

            for (var i = 0; i < properties.length; i++) {

                markers[i] = new google.maps.Marker({
                    position: new google.maps.LatLng(properties[i].lat, properties[i].lng),
                    map: map,
                    icon: properties[i].icon,
                    title: properties[i].title,
                    animation: google.maps.Animation.DROP
                });

                bounds.extend(markers[i].getPosition());

                info_windows[i] = new google.maps.InfoWindow({
                    content: '<div class="map-property">' +
                        '<h4 class="property-title"><a class="title-link" href="' + properties[i].url + '">' + properties[i].title + '</a></h4>' +
                        '<a class="property-featured-image" href="' + properties[i].url + '"><img class="property-thumb" src="' + properties[i].thumb + '" alt="' + properties[i].title + '"/></a>' +
                        '<p><span class="price">' + properties[i].price + '</span></p>' +
                        '<a class="btn btn-primary btn-sm" href="' + properties[i].url + '">Details</a>' +
                        '</div>'
                });

                attachInfoWindowToMarker(map, markers[i], info_windows[i]);
            }

            map.fitBounds(bounds);

            /* function to attach infowindow with marker */
            function attachInfoWindowToMarker(map, marker, infoWindow) {
                google.maps.event.addListener(marker, 'click', function () {
                    infoWindow.open(map, marker);
                });
            }

        }

        google.maps.event.addDomListener(window, 'load', PropertiesMap);
    </script>
@stop
@stop
