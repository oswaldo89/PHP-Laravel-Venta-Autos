@extends('layouts.main')

@section('content')

<div class="col-md-9 col-sm-8">
    <div class="right-sec">

        @include('layouts.menu_listings')

        <ul class="media-list">
            <li class="media premium-item">
                <a class="pull-left" href="{{URL::to('/detalle-anuncio')}}">
                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="" src="http://photos.foter.com/68/new-money-movement_300x300.jpg">
                </a>
                <div class="media-body">
                    <h4>Example heading <span class="label label-info">Premium</span> <span class="label label-success pull-right">$123,456</span></h4>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                </div>
            </li>

            <li class="media premium-item">
                <a class="pull-left" href="{{URL::to('/detalle-anuncio')}}">
                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="" src="http://photos.foter.com/bmw-z4-sdrive-23i-hdr_300x300.jpg">
                </a>
                <div class="media-body">
                    <h4 class="media-heading">Nulla vel metus <span class="label label-info">Premium</span> <span class="label label-success pull-right">$34,000</span></h4>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                </div>
            </li>


            <li class="media premium-item">
                <a class="pull-left" href="{{URL::to('/detalle-anuncio')}}">
                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="" src="http://24.media.tumblr.com/d349779e7216167e7c0ca3af66817794/tumblr_mufrlh9WqW1st5lhmo1_1280.jpg">
                </a>
                <div class="media-body">
                    <h4 class="media-heading">Dolor sit amet <span class="label label-info">Premium</span> <span class="label label-success pull-right">$65,000</span></h4>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                </div>
            </li>


            <li class="media">
                <a class="pull-left" href="{{URL::to('/detalle-anuncio')}}">
                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="" src="http://photos.foter.com/66/carcacha_300x300.jpg">
                </a>
                <div class="media-body">
                    <h4 class="media-heading">Egestas eget quam  <span class="label label-success pull-right">$12,000</span></h4>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                </div>
            </li>




            <li class="media">
                <a class="pull-left" href="{{URL::to('/detalle-anuncio')}}">
                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="" src="http://photos.foter.com/68/r8_300x300.jpg">
                </a>
                <div class="media-body">
                    <h4 class="media-heading">Vestibulum in vulputate  <span class="label label-success pull-right">$25,000</span></h4>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                </div>
            </li>


            <li class="media">
                <a class="pull-left" href="{{URL::to('/detalle-anuncio')}}">
                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="" src="http://photos.foter.com/89/the-one-3_300x300.jpg">
                </a>
                <div class="media-body">
                    <h4 class="media-heading">Id nibh ultricies  <span class="label label-success pull-right">$15,000</span></h4>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                </div>
            </li>




            <li class="media">
                <a class="pull-left" href="{{URL::to('/detalle-anuncio')}}">
                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="" src="http://photos.foter.com/68/ford-mustang-on-felixstowe-beach_l.jpg">
                </a>
                <div class="media-body">
                    <h4 class="media-heading">Cras purus odio <span class="label label-success pull-right">$9,000</span></h4>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                </div>
            </li>





            <li class="media">
                <a class="pull-left" href="{{URL::to('/detalle-anuncio')}}">
                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="" src="http://foter.com/image/display/861911/300x300/">
                </a>
                <div class="media-body">
                    <h4 class="media-heading">Amet nibh libero <span class="label label-success pull-right">$56,000</span></h4>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                </div>
            </li>





        </ul>





    </div>
</div>

@stop