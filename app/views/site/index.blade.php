@extends('layouts.main')

@section('content')

<!--content-->
<div class="col-md-9 col-sm-8">
    <div class="right-sec">

        @include('layouts.menu_listings')

        <div class="row">

            <div class="col-md-4 col-sm-6">
                <div class=" premium thumbnail">
                    <a href="{{URL::to('/detalle-anuncio')}}">
                        <img data-src="holder.js/300x200" alt="300x200" src="http://photos.foter.com/68/new-money-movement_300x300.jpg">
                    </a>
                    <span class="label label-success">$123,456</span>

                    <div class="caption">
                        <h4 class="title"><a href="">Lorem ipsum dolor sit amet</a></h4>
                        <ul class="list-inline">
                            <li><span class="glyphicon glyphicon-road"></span> 37,789</li>
                            <li>&middot;</li>
                            <li> <span class="glyphicon glyphicon-map-marker"></span> US</li>
                            <li>&middot;</li>
                            <li><span class="glyphicon glyphicon-time"></span> 1 day ago</li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-md-4 col-sm-6">
                <div class="thumbnail premium">
                    <a href="{{URL::to('/detalle-anuncio')}}">
                        <img data-src="holder.js/300x200" alt="300x200" src="http://photos.foter.com/bmw-z4-sdrive-23i-hdr_300x300.jpg">
                    </a>
                    <span class="label label-success">$5,678</span>
                    <div class="caption">
                        <h4 class="title"><a href="">Lorem ipsum dolor sit amet</a></h4>
                        <ul class="list-inline">
                            <li><span class="glyphicon glyphicon-road"></span> 37,789</li>
                            <li>&middot;</li>
                            <li> <span class="glyphicon glyphicon-map-marker"></span> Canada</li>
                            <li>&middot;</li>
                            <li><span class="glyphicon glyphicon-time"></span> 1 day ago</li>
                        </ul>
                    </div>
                </div>
            </div>




            <div class="col-md-4 col-sm-6">
                <div class="thumbnail premium">
                    <a href="{{URL::to('/detalle-anuncio')}}">
                        <img data-src="holder.js/300x200" alt="300x200" src="http://24.media.tumblr.com/d349779e7216167e7c0ca3af66817794/tumblr_mufrlh9WqW1st5lhmo1_1280.jpg">
                    </a>
                    <span class="label label-success">$123,456</span>

                    <div class="caption">
                        <h4 class="title"><a href="">dolor id nibh ultricies vehicula</a></h4>
                        <ul class="list-inline">
                            <li><span class="glyphicon glyphicon-road"></span> 37,789</li>
                            <li>&middot;</li>
                            <li> <span class="glyphicon glyphicon-map-marker"></span> UK</li>
                            <li>&middot;</li>
                            <li><span class="glyphicon glyphicon-time"></span> 1 day ago</li>
                        </ul>
                    </div>
                </div>
            </div>




            <div class="col-md-4 col-sm-6">
                <div class="thumbnail">
                    <a href="{{URL::to('/detalle-anuncio')}}">
                        <img data-src="holder.js/300x200" alt="300x200" src="http://photos.foter.com/66/carcacha_300x300.jpg">
                    </a>
                    <span class="label label-primary">Please Contact</span>
                    <div class="caption">
                        <h4 class="title"><a href="">Lorem ipsum dolor sit amet</a></h4>
                        <ul class="list-unstyled">
                            <li><span><strong>Condition:</strong> New</span>
                            </li>
                            <li><span><strong>Miles:</strong> 123,456</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>





            <div class="col-md-4 col-sm-6">
                <div class="thumbnail">
                    <a href="{{URL::to('/detalle-anuncio')}}">
                        <img data-src="holder.js/300x200" alt="300x200" src="http://photos.foter.com/68/r8_300x300.jpg">
                    </a>
                    <span class="label label-success">$123,456</span>
                    <div class="caption">
                        <h4 class="title"><a href="">Lorem ipsum dolor sit amet</a></h4>
                        <ul class="list-unstyled">
                            <li><span><strong>Condition:</strong> New</span>
                            </li>
                            <li><span><strong>Miles:</strong> 123,456</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>




            <div class="col-md-4 col-sm-6">
                <div class="thumbnail">
                    <a href="{{URL::to('/detalle-anuncio')}}">
                        <img data-src="holder.js/300x200" alt="300x200" src="http://photos.foter.com/89/the-one-3_300x300.jpg">
                    </a>
                    <span class="label label-primary">Please Contact</span>
                    <div class="caption">
                        <h4 class="title"><a href="">Lorem ipsum dolor sit amet</a></h4>
                        <ul class="list-unstyled">
                            <li><span><strong>Condition:</strong> New</span>
                            </li>
                            <li><span><strong>Miles:</strong> 123,456</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>




            <div class="col-md-4 col-sm-6">
                <div class="thumbnail">
                    <a href="{{URL::to('/detalle-anuncio')}}">
                        <img data-src="holder.js/300x200" alt="300x200" src="http://photos.foter.com/68/ford-mustang-on-felixstowe-beach_l.jpg">
                    </a>
                    <div class="caption">
                        <h4 class="title"><a href="">Lorem ipsum dolor sit amet</a></h4>
                        <ul class="list-unstyled">
                            <li><span><strong>Condition:</strong> New</span>
                            </li>
                            <li><span><strong>Miles:</strong> 123,456</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>



            <div class="col-md-4 col-sm-6">
                <div class="thumbnail">
                    <a href="{{URL::to('/detalle-anuncio')}}">
                        <img data-src="holder.js/300x200" alt="300x200" src="http://foter.com/image/display/861911/300x300/">
                    </a>
                    <div class="caption">
                        <h4 class="title"><a href="">Lorem ipsum dolor sit amet</a></h4>
                        <ul class="list-unstyled">
                            <li><span><strong>Condition:</strong> New</span>
                            </li>
                            <li><span><strong>Miles:</strong> 123,456</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>





            <div class="col-md-4 col-sm-6">
                <div class="thumbnail">
                    <a href="{{URL::to('/detalle-anuncio')}}">
                        <img data-src="holder.js/300x200" alt="300x200" src="http://photos.foter.com/68/new-money-movement_300x300.jpg">
                    </a>
                    <span class="label label-success">$123,456</span>

                    <div class="caption">
                        <h4 class="title"><a href="">Lorem ipsum dolor sit amet</a></h4>
                        <ul class="list-unstyled">
                            <li><span><strong>Condition:</strong> New</span>
                            </li>
                            <li><span><strong>Miles:</strong> 123,456</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-md-4 col-sm-6">
                <div class="thumbnail">
                    <a href="{{URL::to('/detalle-anuncio')}}">
                        <img data-src="holder.js/300x200" alt="300x200" src="http://photos.foter.com/bmw-z4-sdrive-23i-hdr_300x300.jpg">
                    </a>
                    <span class="label label-success">$5,678</span>

                    <div class="caption">
                        <h4 class="title"><a href="">Lorem ipsum dolor sit amet</a></h4>
                        <ul class="list-unstyled">
                            <li><span><strong>Condition:</strong> New</span>
                            </li>
                            <li><span><strong>Miles:</strong> 123,456</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>




            <div class="col-md-4 col-sm-6">
                <div class="thumbnail">
                    <a href="{{URL::to('/detalle-anuncio')}}">
                        <img data-src="holder.js/300x200" alt="300x200" src="http://24.media.tumblr.com/d349779e7216167e7c0ca3af66817794/tumblr_mufrlh9WqW1st5lhmo1_1280.jpg">
                    </a>
                    <span class="label label-success">$123,456</span>

                    <div class="caption">
                        <h4 class="title"><a href="">Lorem ipsum dolor sit amet</a></h4>
                        <ul class="list-unstyled">
                            <li><span><strong>Condition:</strong> New</span>
                            </li>
                            <li><span><strong>Miles:</strong> 123,456</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>




            <div class="col-md-4 col-sm-6">
                <div class="thumbnail">
                    <a href="{{URL::to('/detalle-anuncio')}}">
                        <img data-src="holder.js/300x200" alt="300x200" src="http://photos.foter.com/66/carcacha_300x300.jpg">
                    </a>
                    <span class="label label-primary">Please Contact</span>
                    <div class="caption">
                        <h4 class="title"><a href="">Lorem ipsum dolor sit amet</a></h4>
                        <ul class="list-unstyled">
                            <li><span><strong>Condition:</strong> New</span>
                            </li>
                            <li><span><strong>Miles:</strong> 123,456</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>





            <div class="col-md-4 col-sm-6">
                <div class="thumbnail">
                    <a href="{{URL::to('/detalle-anuncio')}}">
                        <img data-src="holder.js/300x200" alt="300x200" src="http://photos.foter.com/68/r8_300x300.jpg">
                    </a>
                    <span class="label label-success">$123,456</span>
                    <div class="caption">
                        <h4 class="title"><a href="">Lorem ipsum dolor sit amet</a></h4>
                        <ul class="list-unstyled">
                            <li><span><strong>Condition:</strong> New</span>
                            </li>
                            <li><span><strong>Miles:</strong> 123,456</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>




            <div class="col-md-4 col-sm-6">
                <div class="thumbnail">
                    <a href="{{URL::to('/detalle-anuncio')}}">
                        <img data-src="holder.js/300x200" alt="300x200" src="http://photos.foter.com/89/the-one-3_300x300.jpg">
                    </a>
                    <span class="label label-primary">Please Contact</span>
                    <div class="caption">
                        <h4 class="title"><a href="">Lorem ipsum dolor sit amet</a></h4>
                        <ul class="list-unstyled">
                            <li><span><strong>Condition:</strong> New</span>
                            </li>
                            <li><span><strong>Miles:</strong> 123,456</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>




            <div class="col-md-4 col-sm-6">
                <div class="thumbnail">
                    <a href="{{URL::to('/detalle-anuncio')}}">
                        <img alt="300x200" src="http://photos.foter.com/68/ford-mustang-on-felixstowe-beach_l.jpg">
                    </a>
                    <div class="caption">
                        <h4 class="title"><a href="">Lorem ipsum dolor sit amet</a></h4>
                        <ul class="list-unstyled">
                            <li><span><strong>Condition:</strong> New</span>
                            </li>
                            <li><span><strong>Miles:</strong> 123,456</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>



            <div class="col-md-4 col-sm-6">
                <div class="thumbnail">
                    <a href="{{URL::to('/detalle-anuncio')}}">
                        <img alt="300x200" src="http://foter.com/image/display/861911/300x300/">
                    </a>
                    <div class="caption">
                        <h4 class="title"><a href="">Lorem ipsum dolor sit amet</a></h4>
                        <ul class="list-unstyled">
                            <li><span><strong>Condition:</strong> New</span>
                            </li>
                            <li><span><strong>Miles:</strong> 123,456</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>



            <div class="col-md-4 col-sm-6">
                <div class="thumbnail">
                    <a href="{{URL::to('/detalle-anuncio')}}">
                        <img alt="300x200" src="http://foter.com/image/display/322417/300x300/">
                    </a>
                    <div class="caption">
                        <h4 class="title"><a href="">Lorem ipsum dolor sit amet</a></h4>
                        <ul class="list-unstyled">
                            <li><span><strong>Condition:</strong> New</span>
                            </li>
                            <li><span><strong>Miles:</strong> 123,456</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>




            <div class="col-md-4 col-sm-6">
                <div class="thumbnail">
                    <a href="{{URL::to('/detalle-anuncio')}}">
                        <img data-src="holder.js/300x200" alt="300x200" src="http://foter.com/image/display/1463887/300x300/">
                    </a>
                    <div class="caption">
                        <h4 class="title"><a href="">Lorem ipsum dolor sit amet</a></h4>
                        <ul class="list-unstyled">
                            <li><span><strong>Condition:</strong> New</span>
                            </li>
                            <li><span><strong>Miles:</strong> 123,456</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <hr>


        </div>
    </div>
</div>

@stop