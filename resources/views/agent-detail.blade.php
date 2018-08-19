@extends('layouts.agent-layout')
@section('title')
    Agents détails - Imoforse
@stop
@section('showcase')

@stop
@section('content')
    <div class="single-agent">
        <div class="counts pull-right"><strong>18</strong><span>Propriétés</span></div>
        <h2 class="page-title">John Doe</h2>
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <img src="{{ asset('/data/agents/img-1.jpg') }}" alt="image agence" class="img-thumbnail">
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
                        <li class="list-group-item"> <span class="badge">00225 78 678 903</span>Contact Mobile </li>
                        <li class="list-group-item"> <span class="badge">00225 22 865 587</span> Téléphone </li>
                        <li class="list-group-item"> <span class="badge">john@imoforse.com</span> Email </li>
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
                        <input type="email" name="Email Address" class="form-control" placeholder="Email">
                        <textarea name="comments" class="form-control" placeholder="Votre message" cols="10" rows="5"></textarea>
                        <button type="submit" class="btn btn-primary pull-right">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="spacer-20"></div>
    <!-- Start Annonces similaires -->
    <h3>Les dernières propriétés par <a href="{{ url('/agentDetail') }}">John Doe</a></h3>
    <hr>
    <div class="property-grid">
        <ul class="grid-holder col-3">
            <li class="grid-item type-rent">
                <div class="property-block"> <a href="{{ url('/propertyDetail') }}" class="property-featured-image"> <img src="{{ asset('/data/specimen.jpg') }}" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Acheter</span> </a>
                    <div class="property-info">
                        <h4><a href="#">Vente de Terrain 1500m2</a></h4>
                        <span class="location">Bingerville</span>
                        <div class="price"><span>10.000.000</span><strong>FCFA</strong></div>
                    </div>
                    <div class="property-amenities clearfix"> <span class="area"><strong>1500</strong>m2</span> <span class="date">{Date de publication}</span> </div>
                </div>
            </li>
            <li class="grid-item type-buy">
                <div class="property-block"> <a href="{{ url('/propertyDetail') }}" class="property-featured-image"> <img src="{{ asset('/data/specimen.jpg') }}" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Acheter</span> </a>
                    <div class="property-info">
                        <h4><a href="#">Villa Duplex</a></h4>
                        <span class="location">Treichville</span>
                        <div class="price"><span>150.000.000</span><strong>FCFA</strong></div>
                    </div>
                    <div class="property-amenities clearfix"> <span class="area"><strong>1500</strong>m2</span> <span class="baths"><strong>3</strong>Douches</span> <span class="Chambres"><strong>3</strong>Chambres</span><span class="parking"><strong>3</strong>Cuisines</span></div>
                </div>
            </li>
            <li class="grid-item type-rent">
                <div class="property-block"> <a href="{{ url('/propertyDetail') }}" class="property-featured-image"> <img src="{{ asset('/data/specimen.jpg') }}" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Louer</span> </a>
                    <div class="property-info">
                        <h4><a href="#">Location appartement</a></h4>
                        <span class="location">Cocody Riviera Palmeraie</span>
                        <div class="price"><span>300.000</span><strong>FCFA</strong></div>
                    </div>
                    <div class="property-amenities clearfix"> <span class="area"><strong>700</strong>m2</span> <span class="baths"><strong>3</strong>Douches</span> <span class="Chambres"><strong>3</strong>Chambres</span><span class="parking"><strong>3</strong>Cuisines</span> </div>
                </div>
            </li>
        </ul>
    </div>
@stop

