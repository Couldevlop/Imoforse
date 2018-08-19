@extends('layouts.default')
@section('showcase')
    <div class="slider-mask overlay-transparent"></div>
    <!-- Start Hero Slider -->
    <div class="hero-slider flexslider clearfix" data-autoplay="yes" data-pagination="no" data-arrows="yes" data-style="fade" data-pause="yes">
        <ul class="slides">
            <li class=" parallax" style="background-image:url('{{ asset('data/slider/01.jpg') }}')">
                <div class="flex-caption">
                    <strong class="title">1671 Grand Avenue, <em>Cocody Riviera</em></strong>
                    <div class="price"><span>210 000 / mois</span><strong>FCFA</strong></div>
                    <a href="{{ url('/propertyDetail') }}" class="btn btn-primary btn-block">Details</a>
                    <!--<div class="hero-agent">
                        <img src="{{ asset('data/agents/avatar.jpg') }}" alt="" class="hero-agent-pic">
                        <a href="{{ url('/agentDetail') }}" class="hero-agent-contact" data-placement="left"  data-toggle="tooltip" title="" data-original-title="Contact Agent"><i class="fa fa-envelope"></i></a>
                    </div>-->
                </div>
            </li>
            <li class="parallax" style="background-image:url('{{ asset('data/slider/02.jpg') }} ')">
                <div class="flex-caption">
                    <strong class="title">1671 Grand Avenue, <em>Marcory</em></strong>
                    <div class="price"><span>150.000 / mois</span><strong>FCFA</strong></div> <a href="{{ url('/propertyDetail') }}" class="btn btn-primary btn-block">Details</a>
                <!--<div class="hero-agent">
                        <img src="{{ asset('data/agents/avatar.jpg') }}" alt="" class="hero-agent-pic">
                        <a href="{{ url('/agentDetail') }}" class="hero-agent-contact" data-placement="left"  data-toggle="tooltip" title="" data-original-title="Contact Agent"><i class="fa fa-envelope"></i></a>
                    </div>-->
                </div>
            </li>
        </ul>
    </div>
    <!-- End Hero Slider -->
    <!-- Site Search Module -->
    <div class="site-search-module">
        <div class="container">
            <div class="site-search-module-inside">
                <form role="search" action="#" method="post">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <select name="propery type" class="form-control input-lg selectpicker">
                                    <option selected>Type de propriété</option>
                                    <option selected>Type</option>
                                    <option value="apartment">Appartement</option>
                                    <option value="bureau">Bureau</option>
                                    <option value="triplex">Triplex</option>
                                    <option value="studio">Studio</option>
                                    <option value="deux-pieces">Deux pièces</option>
                                    <option value="trois-pieces">Trois pièces</option>
                                    <option value="more-pieces">Quatre, cinq pièces</option>
                                    <option value="villa">Villa basse</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select name="propery contract type" class="form-control input-lg selectpicker">
                                    <option selected>Type de Contrat</option>
                                    <option>Location</option>
                                    <option>Achat</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select name="propery location" class="form-control input-lg selectpicker">
                                    <option selected>Localisation</option>
                                    <option>Abidjan</option>
                                    <option>Grand Bassam</option>
                                </select>
                            </div>
                            <div class="col-md-2"> <button type="submit" class="btn btn-primary btn-block btn-lg"><i class="fa fa-search"></i> Rechercher</button> </div>
                            <div class="col-md-2"> <a href="#" id="ads-trigger" class="btn btn-default btn-block"><i class="fa fa-plus"></i> <span>Avancée</span></a> </div>
                        </div>
                        <div class="row hidden-xs hidden-sm">
                            <div class="col-md-2">
                                <label>Min Chambres</label>
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
                                <label>Min Douches</label>
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
                                <label>Min Prix</label>
                                <select name="beds" class="form-control input-lg selectpicker">
                                    <option>Peu importe</option>
                                    <option>1000FCFA</option>
                                    <option>5000FCFA</option>
                                    <option>10000FCFA</option>
                                    <option>50000FCFA</option>
                                    <option>100000FCFA</option>
                                    <option>500000FCFA</option>
                                    <option>1000000FCFA</option>
                                    <option>3000000FCFA</option>
                                    <option>5000000FCFA</option>
                                    <option>10000000FCFA</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label>Max Prix</label>
                                <select name="beds" class="form-control input-lg selectpicker">
                                    <option>Peu importe</option>
                                    <option>1000FCFA</option>
                                    <option>5000FCFA</option>
                                    <option>10000FCFA</option>
                                    <option>50000FCFA</option>
                                    <option>100000FCFA</option>
                                    <option>500000FCFA</option>
                                    <option>1000000FCFA</option>
                                    <option>3000000FCFA</option>
                                    <option>5000000FCFA</option>
                                    <option>10000000FCFA</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label>Min Superficie (Sq Ft)</label>
                                <input type="text" class="form-control input-lg" placeholder="tout">
                            </div>
                            <div class="col-md-2">
                                <label>Max Superficie (Sq Ft)</label>
                                <input type="text" class="form-control input-lg" placeholder="tout">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
@section('content')
    <div class="featured-blocks">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 featured-block"> <img src="{{ asset('images/services/gestion-de-bien.jpg') }}" alt="Gestiond de biens" class="img-thumbnail">
                    <h3>Gestion de bien</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
                </div>
                <div class="col-md-4 col-sm-4 featured-block"> <img src="{{ asset('images/services/location.jpg') }}" alt="Location" class="img-thumbnail">
                    <h3>Location</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
                </div>
                <div class="col-md-4 col-sm-4 featured-block"> <img src="{{ asset('images/services/vente-de-maison.jpg') }}" alt="Achat/vente maison" class="img-thumbnail">
                    <h3>Achat/Vente</h3>
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
                        <h4><span class="heading-icon"><i class="fa fa-leaf"></i></span>Annonces récentes</h4>
                        <a href="{{ url('/moreProperty') }}" class="btn btn-primary btn-sm pull-right">Voir plus de propriétés <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <ul>
                    <li class="col-md-4 col-sm-6 type-rent">
                        <div class="property-block">
                            <a href="{{ url('/propertyDetail') }}" class="property-featured-image">
                                <img src="{{ asset('data/place/location-saisonniere.jpg') }}" alt="">
                                <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                                <span class="badges">Louer</span>
                            </a>
                            <div class="property-info">
                                <h4><a href="{{ url('/propertyDetail') }}">Location de maison</a></h4>
                                <span class="location">Yopougon Millionnaire</span>
                                <div class="price"><span>150.000/Mois</span><strong>FCFA</strong></div>
                            </div>
                            <div class="property-amenities clearfix">
                                <span class="area"><strong>5000</strong>m2</span>
                                <span class="baths"><strong>3</strong>Douches</span>
                                <span class="beds"><strong>3</strong>Chambres</span>
                                <span class="parking"><strong>3</strong>Cuisines</span>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-4 col-sm-6 type-buy">
                        <div class="property-block">
                            <a href="{{ url('/propertyDetail') }}" class="property-featured-image">
                                <img src="{{ asset('data/place/vente-maison.jpg') }}" alt="">
                                <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                                <span class="badges">Acheter</span>
                            </a>
                            <div class="property-info">
                                <h4><a href="{{ url('/propertyDetail') }}">Vente de maison</a></h4>
                                <span class="location">Cocody Angré 8e Tranche</span>
                                <div class="price"><span>25.000.000</span><strong>FCFA</strong></div>
                            </div>
                            <div class="property-amenities clearfix">
                                <span class="area"><strong>5000</strong>m2</span>
                                <span class="baths"><strong>3</strong>Douches</span>
                                <span class="beds"><strong>3</strong>Chambres</span>
                                <span class="parking"><strong>3</strong>Cuisines</span>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-4 col-sm-6 type-rent">
                        <div class="property-block">
                            <a href="{{ url('/propertyDetail') }}" class="property-featured-image">
                                <img src="{{ asset('data/place/vente-maison-3.jpg') }}" alt="">
                                <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                                <span class="badges">Acheter</span>
                            </a>
                            <div class="property-info">
                                <h4><a href="{{ url('/propertyDetail') }}">Vente de Villa Duplex</a></h4>
                                <span class="location">Cocory Riviera 4 </span>
                                <div class="price"><span>30.000.000</span><strong>FCFA</strong></div>
                            </div>
                            <div class="property-amenities clearfix">
                                <span class="area"><strong>5000</strong>m2</span>
                                <span class="baths"><strong>3</strong>Douches</span>
                                <span class="beds"><strong>3</strong>Chambres</span>
                                <span class="parking"><strong>3</strong>Cuisines</span>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-4 col-sm-6 type-rent">
                        <div class="property-block">
                            <a href="{{ url('/propertyDetail') }}" class="property-featured-image">
                                <img src="{{ asset('data/place/location-saisonniere-2.jpg') }}" alt="">
                                <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                                <span class="badges">Louer</span>
                            </a>
                            <div class="property-info">
                                <h4><a href="{{ url('/propertyDetail') }}">Location d'Appartement</a></h4>
                                <span class="location">Marcory Résidentiel</span>
                                <div class="price"><span>120.000/Mois</span><strong>FCFA</strong></div>
                            </div>
                            <div class="property-amenities clearfix">
                                <span class="area"><strong>5000</strong>m2</span>
                                <span class="baths"><strong>3</strong>Douches</span>
                                <span class="beds"><strong>3</strong>Chambres</span>
                                <span class="parking"><strong>3</strong>Cuisines</span>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-4 col-sm-6 type-buy">
                        <div class="property-block">
                            <a href="{{ url('/propertyDetail') }}" class="property-featured-image">
                                <img src="{{ asset('data/place/vente-terrain.jpg') }}" alt="">
                                <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                                <span class="badges">Acheter</span>
                            </a>
                            <div class="property-info">
                                <h4><a href="{{ url('/propertyDetail') }}">Vente de Terrain</a></h4>
                                <span class="location">Abobo Baoulé</span>
                                <div class="price"><span>5.000.000</span><strong>FCFA</strong></div>
                            </div>
                            <div class="property-amenities clearfix">
                                <span class="area"><strong>5000</strong>m2</span>
                                <span class="date">[Date de publication}</span>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-4 col-sm-6 type-rent">
                        <div class="property-block">
                            <a href="{{ url('/propertyDetail') }}" class="property-featured-image">
                                <img src="{{ asset('data/place/vente-maison-2.jpg') }}" alt="">
                                <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                                <span class="badges">Acheter</span>
                            </a>
                            <div class="property-info">
                                <h4><a href="{{ url('/propertyDetail') }}">Vente de maison duplex</a></h4>
                                <span class="location">Cocody Angré 8e Tranche</span>
                                <div class="price"><span>185.000.000</span><strong>FCFA</strong></div>
                            </div>
                            <div class="property-amenities clearfix">
                                <span class="area"><strong>2000</strong>m2</span>
                                <span class="baths"><strong>3</strong>Douches</span>
                                <span class="beds"><strong>3</strong>Chambres</span>
                                <span class="parking"><strong>3</strong>Cuisines</span>
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
                        <h4><span class="heading-icon"><i class="fa fa-star"></i></span>Propriétés en vedette</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <ul class="owl-carousel owl-alt-controls" data-columns="4" data-autoplay="no" data-pagination="no" data-arrows="yes" data-single-item="no">
                    <li class="item property-block">
                        <a href="{{ url('/propertyDetail') }}" class="property-featured-image">
                            <img src="{{ asset('data/specimen.jpg') }}" alt="">
                            <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                            <span class="badges">Louer</span>
                        </a>
                        <div class="property-info">
                            <h4><a href="{{ url('/propertyDetail') }}">116 Waverly Place</a></h4>
                            <span class="location">Cocody</span>
                            <div class="price"><span>2800/Mois</span><strong>FCFA</strong></div>
                        </div>
                    </li>
                    <li class="item property-block">
                        <a href="{{ url('/propertyDetail') }}" class="property-featured-image">
                            <img src="{{ asset('data/specimen.jpg') }}" alt="">
                            <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                            <span class="badges">Acheter</span>
                        </a>
                        <div class="property-info">
                            <h4><a href="{{ url('/propertyDetail') }}">232 East 63rd Street</a></h4>
                            <span class="location">Cocody</span>
                            <div class="price"><span>250000</span><strong>FCFA</strong></div>
                        </div>
                    </li>
                    <li class="item property-block">
                        <a href="{{ url('/propertyDetail') }}" class="property-featured-image">
                            <img src="{{ asset('data/specimen.jpg') }}" alt="">
                            <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                            <span class="badges">Acheter</span>
                        </a>
                        <div class="property-info">
                            <h4><a href="{{ url('/propertyDetail') }}">Vente de maison</a></h4>
                            <span class="location">Cocody</span>
                            <div class="price"><span>30000000</span><strong>FCFA</strong></div>
                        </div>
                    </li>
                    <li class="item property-block">
                        <a href="{{ url('/propertyDetail') }}" class="property-featured-image">
                            <img src="{{ asset('data/specimen.jpg') }}" alt="">
                            <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                            <span class="badges">Louer</span>
                        </a>
                        <div class="property-info">
                            <h4><a href="{{ url('/propertyDetail') }}">Appartement</a></h4>
                            <span class="location">Cocody</span>
                            <div class="price"><span>310000/Mois</span><strong>FCFA</strong></div>
                        </div>
                    </li>
                    <li class="item property-block">
                        <a href="{{ url('/propertyDetail') }}" class="property-featured-image">
                            <img src="{{ asset('data/specimen.jpg') }}" alt="">
                            <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                            <span class="badges">Acheter</span>
                        </a>
                        <div class="property-info">
                            <h4><a href="{{ url('/propertyDetail') }}">Villa Duplex</a></h4>
                            <span class="location">Cocody</span>
                            <div class="price"><span>500000</span><strong>FCFA</strong></div>
                        </div>
                    </li>
                    <li class="item property-block">
                        <a href="{{ url('/propertyDetail') }}" class="property-featured-image">
                            <img src="{{ asset('data/specimen.jpg') }}" alt="">
                            <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                            <span class="badges">Louer</span>
                        </a>
                        <div class="property-info">
                            <h4><a href="{{ url('/propertyDetail') }}">Appartement</a></h4>
                            <span class="location">Cocody</span>
                            <div class="price"><span>500000/Mois</span><strong>FCFA</strong></div>
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
                    <h3>Pourquoi nous choisir ?</h3>
                    <ul>
                        <li>
                            <div class="icon"><i class="fa fa-umbrella"></i></div>
                            <div class="text">
                                <h4>Offres variées</h4>
                                <p>Découvrez de nombreuses ofrres.</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon"><i class="fa fa-list"></i></div>
                            <div class="text">
                                <h4>Paiements sécurisés</h4>
                                <p>Vos paiements en ligne sont sécurisés et garanties</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon"><i class="fa fa-search"></i></div>
                            <div class="text">
                                <h4>Recherche avancée</h4>
                                <p>Effectuer des recherches plus sophistiquées</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-4 popular-agent column">
                    <h3>Nos Agents</h3>
                    <a href="{{ url('/agentDetail')}}"><img src="{{ asset('/data/specimen.jpg') }}" alt="" class="img-thumbnail"></a>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <h4><a href="{{ url('/agentDetail') }}">John doe</a></h4>
                            <a href="{{ url('/agentDetail') }}" class="btn btn-sm btn-primary">Plus d'infos</a>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <ul class="contact-info">
                                <li><i class="fa fa-phone"></i> +225 6543 210</li>
                                <li><i class="fa fa-envelope"></i> infos@imoforse.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 latest-testimonials column">
                    <h3>Témoignages</h3>
                    <ul class="testimonials">
                        <li>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                            <img src="{{ asset('/data/testimonials/img-1.jpg') }}" alt="Témoignages clients" class="testimonial-sender">
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
            <h4><span class="heading-icon"><i class="fa fa-users"></i></span>Nos Partenaires</h4>
            <a href="{{url('/about')}}" class="btn btn-primary btn-sm pull-right">Voir tout <i class="fa fa-long-arrow-right"></i></a>
        </div>
        <div class="row">
            <ul class="owl-carousel" id="clients-slider" data-columns="6" data-autoplay="yes" data-pagination="no" data-arrows="no" data-single-item="no" data-items-desktop="6" data-items-desktop-small="4" data-items-mobile="2" data-items-tablet="4">
                <li class="item"> <a href="#"><img src="{{ asset('images/partner-1.png') }}" alt=""></a> </li>
                <li class="item"> <a href="#"><img src="{{ asset('images/partner-2.png') }}" alt=""></a> </li>
                <li class="item"> <a href="#"><img src="{{ asset('images/partner-3.png') }}" alt=""></a> </li>
                <li class="item"> <a href="#"><img src="{{ asset('images/partner-4.png') }}" alt=""></a> </li>
                <li class="item"> <a href="#"><img src="{{ asset('images/partner-5.png') }}" alt=""></a> </li>
                <li class="item"> <a href="#"><img src="{{ asset('images/partner-1.png') }}" alt=""></a> </li>
                <li class="item"> <a href="#"><img src="{{ asset('images/partner-2.png') }}" alt=""></a> </li>
                <li class="item"> <a href="#"><img src="{{ asset('images/partner-3.png') }}" alt=""></a> </li>
                <li class="item"> <a href="#"><img src="{{ asset('images/partner-4.png') }}" alt=""></a> </li>
                <li class="item"> <a href="#"><img src="{{ asset('images/partner-5.png') }}" alt=""></a> </li>
            </ul>
        </div>
    </div>
@stop
