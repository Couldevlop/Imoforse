<div class="widget sidebar-widget">
    <h3 class="widgettitle">Rechercher un bien</h3>
    <div class="full-search-form">
        <form action="#">
            <select name="propery type" class="form-control input-lg selectpicker">
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
            <select name="propery contract type" class="form-control input-lg selectpicker">
                <option selected>Type de contrat</option>
                <option>Location</option>
                <option>Achat</option>
            </select>
            <select name="propery location" class="form-control input-lg selectpicker">
                <option selected>Localisation</option>
                <option>Abidjan</option>
                <option>Grand Bassam</option>
            </select>
            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-search"></i> Rechercher</button>
        </form>
    </div>
</div>
<div class="widget sidebar-widget featured-properties-widget">
    <h3 class="widgettitle">Les dernières offres</h3>
    <ul class="owl-carousel owl-alt-controls1 single-carousel" data-columns="1" data-autoplay="no" data-pagination="no" data-arrows="yes" data-single-item="yes">
        <li class="item property-block"> <a href="{{url('/propertyDetail')}}" class="property-featured-image"> <img src="{{ asset('/data/specimen.jpg') }}" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Louer</span> </a>
            <div class="property-info">
                <h4><a href="{{url('/propertyDetail')}}">116 Waverly Place</a></h4>
                <span class="location">Cocody Riviera 3</span>
                <div class="price"><span>280.000/Mois</span><strong>FCFA</strong></div>
            </div>
        </li>
        <li class="item property-block"> <a href="{{url('/propertyDetail')}}" class="property-featured-image"> <img src="{{ asset('/data/specimen.jpg') }}" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Acheter</span> </a>
            <div class="property-info">
                <h4><a href="{{url('/propertyDetail')}}">232 East 63rd Street</a></h4>
                <span class="location">Cocody Saint Jean</span>
                <div class="price"><span>250.000.000</span><strong>FCFA</strong></div>
            </div>
        </li>
        <li class="item property-block"> <a href="{{url('/propertyDetail')}}" class="property-featured-image"> <img src="{{ asset('/data/specimen.jpg') }}" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Acheter</span> </a>
            <div class="property-info">
                <h4><a href="{{ url('/propertyDetail') }}">Villa Triplex</a></h4>
                <span class="location">Treichville</span>
                <div class="price"><span>300.000.000</span><strong>FCFA</strong></div>
            </div>
        </li>
        <li class="item property-block"> <a href="{{url('/propertyDetail')}}" class="property-featured-image"> <img src="{{ asset('/data/specimen.jpg') }}" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Acheter</span> </a>
            <div class="property-info">
                <h4><a href="{{url('/propertyDetail')}}">Villa Duplex</a></h4>
                <span class="location">Cocody Riviera 4</span>
                <div class="price"><span>310.000.000</span><strong>FCFA</strong></div>
            </div>
        </li>
    </ul>
</div>
