<div class="slider-mask overlay-transparent"></div>
<div class="hero-slider flexslider clearfix" data-autoplay="yes" data-pagination="no" data-arrows="yes" data-style="fade" data-pause="yes">
    <ul class="slides">
        <li class=" parallax" style="background-image:url('{{ asset('images/slider/01.jpg') }}')">
            <div class="flex-caption">
                <strong class="title">1671 Grand Avenue, <em>NYC</em></strong>
                <div class="price"><span>100 000</span><strong>FCFA</strong></div>
                <a href="{{ url('/propertyDetail') }}" class="btn btn-primary btn-block">Details</a>
                <div class="hero-agent">
                    <img src="{{ asset('images/365x365.png') }}" alt="" class="hero-agent-pic">
                    <a href="{{ url('/agentDetail') }}" class="hero-agent-contact" data-placement="left"  data-toggle="tooltip" title="" data-original-title="Contact Agent"><i class="fa fa-envelope"></i></a>
                </div>
            </div>
        </li>
        <li class="parallax" style="background-image:url('{{ asset('images/slider/02.jpg') }} ')">
            <div class="flex-caption">
                <strong class="title">1671 Grand Avenue, <em>NYC</em></strong>
                <div class="price"><span>100 000</span><strong>FCFA</strong></div> <a href="{{ url('/propertyDetail') }}" class="btn btn-primary btn-block">Details</a>
                <div class="hero-agent">
                    <img src="{{ asset('images/365x365.png') }}" alt="" class="hero-agent-pic">
                    <a href="{{ url('/agentDetail') }}" class="hero-agent-contact" data-placement="left"  data-toggle="tooltip" title="" data-original-title="Contact Agent"><i class="fa fa-envelope"></i></a>
                </div>
            </div>
        </li>
    </ul>
</div>
