@extends('layouts.default')
@section('title')
    A propos - Imoforse
@stop
@section('showcase')
    <!--<div class="parallax page-header" style="background-image:url('{{ asset('/images/banner/1200x260.png') }}');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>A Propos</h1>
                </div>
            </div>
        </div>
    </div>-->
@stop
@section('content')
    <div class="container">
        <div class="page">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h3>Mission &amp; Vision</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam euismod sollicitudin nunc, eget pretium massa. Ut sed adipiscing enim, pellentesque ultrices erat. Integer placerat felis neque, et semper augue ullamcorper in. Pellentesque iaculis leo iaculis aliquet ultrices. Suspendisse potenti. Aenean ac magna faucibus, consectetur ligula vel, feugiat est. Nullam imperdiet semper neque eget euismod. Nunc commodo volutpat semper.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam euismod sollicitudin nunc, eget pretium massa. Ut sed adipiscing enim, pellentesque ultrices erat. Integer placerat felis neque, et semper augue ullamcorper in. Pellentesque iaculis leo iaculis aliquet ultrices. Suspendisse potenti. Aenean ac magna faucibus, consectetur ligula vel, feugiat est. Nullam imperdiet semper neque eget euismod. Nunc commodo volutpat semper.</p>
                </div>
                <div class="col-md-6 col-sm-6">
                    <h3>Pourquoi nous choisit?</h3>
                    <!-- Start Accordion -->
                    <div class="accordion" id="accordionArea">
                        <div class="accordion-group panel">
                            <div class="accordion-heading accordionize"> <a class="accordion-toggle active" data-toggle="collapse" data-parent="#accordionArea" href="#oneArea"> Offres variées <i class="fa fa-angle-down"></i> </a> </div>
                            <div id="oneArea" class="accordion-body in collapse">
                                <div class="accordion-inner"> Donec sed odio dui. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue.</div>
                            </div>
                        </div>
                        <div class="accordion-group panel">
                            <div class="accordion-heading accordionize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#twoArea"> Paiement mobile sécurisé <i class="fa fa-angle-down"></i> </a> </div>
                            <div id="twoArea" class="accordion-body collapse">
                                <div class="accordion-inner"> Donec sed odio dui. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue.</div>
                            </div>
                        </div>
                        <div class="accordion-group panel">
                            <div class="accordion-heading accordionize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#threeArea"> Recherche avancéez <i class="fa fa-angle-down"></i> </a> </div>
                            <div id="threeArea" class="accordion-body collapse">
                                <div class="accordion-inner"> Donec sed odio dui. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue.</div>
                            </div>
                        </div>
                    </div>
                    <!-- End Accordion -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="block-heading">
                        <h4><span class="heading-icon"><i class="fa fa-question"></i></span>FAQ</h4>
                    </div>
                    <div class="accordion" id="toggleArea">
                        <div class="accordion-group panel">
                            <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseOne"> Question will come here <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                            <div id="collapseOne" class="accordion-body collapse">
                                <div class="accordion-inner"> Donec sed odio dui. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                                    Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Donec ullamcorper nulla non metus auctor fringilla.
                                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet. Donec sed odio dui.
                                    Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue.
                                    Donec ullamcorper nulla non metus auctor fringilla. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet. </div>
                            </div>
                        </div>
                        <div class="accordion-group panel">
                            <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseTwo"> Question will come here <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                            <div id="collapseTwo" class="accordion-body collapse">
                                <div class="accordion-inner"> Donec sed odio dui. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                                    Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Donec ullamcorper nulla non metus auctor fringilla.
                                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet. Donec sed odio dui.
                                    Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue.
                                    Donec ullamcorper nulla non metus auctor fringilla. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet. </div>
                            </div>
                        </div>
                        <div class="accordion-group">
                            <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseThird"> Question will come here <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                            <div id="collapseThird" class="accordion-body collapse">
                                <div class="accordion-inner"> Donec sed odio dui. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                                    Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Donec ullamcorper nulla non metus auctor fringilla.
                                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet. Donec sed odio dui.
                                    Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue.
                                    Donec ullamcorper nulla non metus auctor fringilla. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet. </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Toggle -->
                </div>
            </div>
        </div>
    </div>
@stop
