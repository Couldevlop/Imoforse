@extends('layouts.default')
@section('showcase')
    <div class="parallax page-header" style="background-image:url('{{ asset('images/banner/1200X260.png') }}')">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Publier une annonce</h1>
                </div>
            </div>
        </div>
    </div>
@stop
@section('content')
    <div class="container">
        <div class="page">
            <div class="row">
                <div class="col-md-12">
                    <form>
                        <div class="block-heading" id="details">
                            <a href="#additionalinfo" class="btn btn-sm btn-default pull-right">Infos supplémentaires <i class="fa fa-chevron-down"></i></a>
                            <h4><span class="heading-icon"><i class="fa fa-home"></i></span>Détails de l'offre</h4>
                        </div>
                        <div class="padding-as25 margin-30 lgray-bg">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <input type="text" class="form-control" placeholder="Nom de la propriété">
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <input type="text" class="form-control" placeholder="Adresse">
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <input type="text" class="form-control" placeholder="Localisation">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <select name="type" class="form-control margin-0 selectpicker">
                                        <option>Ville</option>
                                        <option>Abidjan</option>
                                        <option>Grand Bassam</option>
                                    </select>
                                </div>
                                <div class="col-md-8 col-sm-8 submit-description">
                                    <textarea name="description" class="form-control margin-0" rows="1" cols="10" placeholder="Description"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="block-heading" id="additionalinfo">
                            <a href="#amenities" class="btn btn-sm btn-default pull-right">Equipements <i class="fa fa-chevron-down"></i></a>
                            <h4><span class="heading-icon"><i class="fa fa-plus"></i></span>Infos supplémentaires</h4>
                        </div>
                        <div class="padding-as25 margin-30 lgray-bg">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <input type="text" class="form-control" placeholder="Prix(FCFA)">
                                </div>
                                <div class="col-md-4 col-sm-4 submit-property-type">
                                    <select name="type" class="form-control margin-0 selectpicker">
                                        <option>Type de propriété</option>
                                        <option>Villa</option>
                                        <option>Maison</option>
                                        <option>Location</option>
                                        <option>Appartement</option>
                                    </select>
                                </div>
                                <div class="col-md-4 col-sm-4 submit-contract-type">
                                    <select name="type" class="form-control margin-0 selectpicker">
                                        <option>Type de contrat</option>
                                        <option>A vendre</option>
                                        <option>A louer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <select name="type" class="form-control selectpicker">
                                        <option>Chambres</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5+</option>
                                    </select>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <select name="type" class="form-control selectpicker">
                                        <option>Douches</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5+</option>
                                    </select>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <select name="type" class="form-control selectpicker">
                                        <option>Cuisines</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3+</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-sm-3">
                                    <label>Télécharger les Images</label>
                                    <p>Upload images that are best clicked for better appearance of your property</p>
                                </div>
                                <div class="col-md-3 col-sm-3 submit-image">
                                    <div class="image-placeholder">600x400 (JPG)</div>
                                    <input type="file" name="image1">
                                </div>
                                <div class="col-md-3 col-sm-3 submit-image">
                                    <div class="image-placeholder">600x400 (JPG)</div>
                                    <input type="file" name="image1">
                                </div>
                                <div class="col-md-3 col-sm-3 submit-image">
                                    <div class="image-placeholder">600x400 (JPG)</div>
                                    <input type="file" name="image1">
                                </div>
                            </div>
                        </div>
                        <div class="block-heading" id="amenities">
                            <a href="#submit-property" class="btn btn-sm btn-default pull-right">Envoyer <i class="fa fa-chevron-down"></i></a>
                            <h4><span class="heading-icon"><i class="fa fa-star"></i></span>Equipements</h4>
                        </div>
                        <div class="padding-as25 margin-30 lgray-bg">
                            <div class="row">
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                    <label class="checkbox">
                                        <input type="checkbox">Air Conditioning
                                    </label>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                    <label class="checkbox">
                                        <input type="checkbox">Heating
                                    </label>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                    <label class="checkbox">
                                        <input type="checkbox">Balcony
                                    </label>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                    <label class="checkbox">
                                        <input type="checkbox">Dishwasher
                                    </label>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                    <label class="checkbox">
                                        <input type="checkbox">Pool
                                    </label>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                    <label class="checkbox">
                                        <input type="checkbox">Internet
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                    <label class="checkbox">
                                        <input type="checkbox">Terrace
                                    </label>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                    <label class="checkbox">
                                        <input type="checkbox">Microwave
                                    </label>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                    <label class="checkbox">
                                        <input type="checkbox">Fridge
                                    </label>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                    <label class="checkbox">
                                        <input type="checkbox">Cable TV
                                    </label>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                    <label class="checkbox">
                                        <input type="checkbox">Security Camera
                                    </label>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                    <label class="checkbox">
                                        <input type="checkbox">Toaster
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                    <label class="checkbox">
                                        <input type="checkbox">Grill
                                    </label>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                    <label class="checkbox">
                                        <input type="checkbox">Oven
                                    </label>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                    <label class="checkbox">
                                        <input type="checkbox">Fans
                                    </label>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                    <label class="checkbox">
                                        <input type="checkbox">Servants
                                    </label>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                    <label class="checkbox">
                                        <input type="checkbox">Furnished
                                    </label>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                    <label class="checkbox">
                                        <input type="checkbox">Cupboards
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="text-align-center" id="submit-property">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg"><i class="fa fa-check"></i> Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
