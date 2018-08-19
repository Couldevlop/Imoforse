@extends('layouts.default')
@section('title')

@stop
@section('content')
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
                                <th>Nom</th>
                                <th>Type</th>
                                <th>Contrat</th>
                                <th>Prix</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <a href="{{ url('/propertyDetail') }}"><img src="http://placehold.it/150x100&amp;text=IMAGE+PLACEHOLDER" alt="" width="100"></a>
                                </td>
                                <td><a href="{{ url('/propertyDetail') }}">116 Waverly Place</a></td>
                                <td>Maison familiale</td>
                                <td>Louer</td>
                                <td><div class="price"><span>280.000 / mois</span><strong> FCFA</strong></div></td>
                                <td>
                                    <a href="#" class="action-button"><i class="fa fa-pencil"></i> <span>Editer</span></a>
                                    <a href="{{ url('/propertyDetail') }}" class="action-button"><i class="fa fa-eye"></i> <span>Voir</span></a>
                                    <a href="#" class="action-button"><i class="fa fa-ban"></i> <span>Supprimer</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="{{ url('/propertyDetail') }}"><img src="http://placehold.it/150x100&amp;text=IMAGE+PLACEHOLDER" alt="" width="100"></a>
                                </td>
                                <td><a href="{{ url('/propertyDetail') }}">232 East 63rd Street</a></td>
                                <td>Villa</td>
                                <td>Louer</td>
                                <td><div class="price"><span>250.000 / mois</span><strong> FCFA</strong></div></td>
                                <td>
                                    <a href="#" class="action-button"><i class="fa fa-pencil"></i> <span>Editer</span></a>
                                    <a href="{{ url('/propertyDetail') }}" class="action-button"><i class="fa fa-eye"></i> <span>Voir</span></a>
                                    <a href="#" class="action-button"><i class="fa fa-ban"></i> <span>Supprimer</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="{{ url('/propertyDetail') }}"><img src="http://placehold.it/150x100&amp;text=IMAGE+PLACEHOLDER" alt="" width="100"></a>
                                </td>
                                <td><a href="{{ url('/propertyDetail') }}">459 West Broadway</a></td>
                                <td>Maison familiale</td>
                                <td>Louer</td>
                                <td><div class="price"><span>300.000 / mois²</span><strong> FCFA</strong></div></td>
                                <td>
                                    <a href="#" class="action-button"><i class="fa fa-pencil"></i> <span>Editer</span></a>
                                    <a href="{{ url('/propertyDetail') }}" class="action-button"><i class="fa fa-eye"></i> <span>Voir</span></a>
                                    <a href="#" class="action-button"><i class="fa fa-ban"></i> <span>Supprimer</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="{{ url('/propertyDetail') }}"><img src="http://placehold.it/150x100&amp;text=IMAGE+PLACEHOLDER" alt="" width="100"></a>
                                </td>
                                <td><a href="{{ url('/propertyDetail') }}">459 West Broadway</a></td>
                                <td>Maison familiale</td>
                                <td>Louer</td>
                                <td><div class="price"><span>110.000 / mois</span> <strong> FCFA</strong></div></td>
                                <td>
                                    <a href="#" class="action-button"><i class="fa fa-pencil"></i> <span>Editer</span></a>
                                    <a href="{{ url('/propertyDetail') }}" class="action-button"><i class="fa fa-eye"></i> <span>Voir</span></a>
                                    <a href="#" class="action-button"><i class="fa fa-ban"></i> <span>Supprimer</span></a>                                        </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="{{ url('/propertyDetail') }}"><img src="http://placehold.it/150x100&amp;text=IMAGE+PLACEHOLDER" alt="" width="100"></a>
                                </td>
                                <td><a href="{{ url('/propertyDetail') }}">70 Greene Street</a></td>
                                <td>Villa</td>
                                <td>Louer</td>
                                <td><div class="price"><span>500.000 / mois</span><strong> FCFA</strong></div></td>
                                <td>
                                    <a href="#" class="action-button"><i class="fa fa-pencil"></i> <span>Editer</span></a>
                                    <a href="{{ url('/propertyDetail') }}" class="action-button"><i class="fa fa-eye"></i> <span>Voir</span></a>
                                    <a href="#" class="action-button"><i class="fa fa-ban"></i> <span>Supprimer</span></a>
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
@stop
