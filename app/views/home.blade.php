@extends('layouts.main')

@section('content')

<div class="row">

    <div class="col-md-3 col-sm-4">
        <!-- left sec -->
        <div class="left-sec">

            <div class="left-cont">
                <h6><span class="glyphicon glyphicon-search"></span> Refine Search</h6>
                <form class="filter-sec">

                    <select name="selecter_basic" class="selecter_label_1">
                        <option value="1">Model</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="4">Four</option>
                        <option value="5">Five</option>
                        <option value="6">Six</option>
                        <option value="7">Seven</option>
                        <option value="8">Eight</option>
                        <option value="9">Nine</option>
                        <option value="10">Ten</option>
                    </select>
                    <select name="selecter_basic form-control" class="selecter_label_2">
                        <option value="1">Make</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="4">Four</option>
                        <option value="5">Five</option>
                        <option value="6">Six</option>
                        <option value="7">Seven</option>
                        <option value="8">Eight</option>
                        <option value="9">Nine</option>
                        <option value="10">Ten</option>
                    </select>

                    <select name="selecter_basic form-control" class="selecter_label_3">
                        <option value="1">Condition</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="4">Four</option>
                        <option value="5">Five</option>
                        <option value="6">Six</option>
                        <option value="7">Seven</option>
                        <option value="8">Eight</option>
                        <option value="9">Nine</option>
                        <option value="10">Ten</option>
                    </select>

                    <select name="selecter_basic form-control" class="selecter_label_4">
                        <option value="1">Transmission</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="4">Four</option>
                        <option value="5">Five</option>
                        <option value="6">Six</option>
                        <option value="7">Seven</option>
                        <option value="8">Eight</option>
                        <option value="9">Nine</option>
                        <option value="10">Ten</option>
                    </select>

                    <input type="text" class="form-control" placeholder="Keyword (Optional)">

                    <h5>Price:</h5>
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <input type="text" class="form-control input-sm" placeholder="Low">
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <input type="text" class="form-control input-sm" placeholder="High">
                        </div>
                    </div>

                    <h5>Year:</h5>
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <input type="text" class="form-control input-sm" placeholder="1999">
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <input type="text" class="form-control input-sm" placeholder="2013">
                        </div>
                    </div>

                    <div class="input-control">

                        <input checked="checked" class="checkbox" id="checkbox_1" name="checkbox_1" type="checkbox" value="One" />
                        <label for="checkbox_1">Include Listings w/o Photos</label>
                        <input class="checkbox" id="checkbox_2" name="checkbox_2" type="checkbox" value="Two" />
                        <label for="checkbox_2">Include Dealers</label>
                    </div>

                    <button type="button" class="btn btn-primary btn-sm">Search</button>
                </form>
            </div>

            <div class="left-cont">
                <h4>Subscribe for updates </h4>
                <p>nec eu singulis petentium. Ea quo modus officiis, tation mucius conclusionemque an vix. Ad vix deserunt consequat quaerendum.</p>
                <form action="valid.json" id="valid_form" role="form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name">
                        <br>
                        <input type="text" class="form-control" placeholder="Your Email Address">

                        <br>
                        <button id="message_trigger_ok" type="button" class="btn btn-warning  btn-block">Subscribe</button>


                    </div>
                </form>

            </div>

        </div>
        <!-- /left sec -->
    </div>

    <!--content-->
    <div class="col-md-9 col-sm-8">
        <div class="right-sec">

            <div class="top">
                <ul class="nav nav-tabs tooltip-demo">
                    <li class="active"><a href="#">All Listings  <strong>432</strong></a>
                    </li>
                    <li><a href="#">Most Popular </a>
                    </li>
                    <li><a href="#">Recently Posted</a>
                    </li>
                    <li class="pull-right"><a href="browse-listings-list.html" data-toggle="tooltip" data-placement="top" title="" data-original-title="List View"><span class="glyphicon glyphicon-list"></span></a>
                    </li>
                    <li class="active pull-right"><a href="index.html" data-toggle="tooltip" data-placement="top" title="" data-original-title="Grid View"><span class="glyphicon glyphicon-th"></span></a>
                    </li>
                </ul>
            </div>




            <div class="row">





                <div class="col-md-4 col-sm-6">
                    <div class=" premium thumbnail">
                        <a href="listing-page.html">
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
                        <a href="listing-page.html">
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
                        <a href="listing-page.html">
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
                        <a href="listing-page.html">
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
                        <a href="listing-page.html">
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
                        <a href="listing-page.html">
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
                        <a href="listing-page.html">
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
                        <a href="listing-page.html">
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
                        <a href="listing-page.html">
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
                        <a href="listing-page.html">
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
                        <a href="listing-page.html">
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
                        <a href="listing-page.html">
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
                        <a href="listing-page.html">
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
                        <a href="listing-page.html">
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
                        <a href="listing-page.html">
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
                        <a href="listing-page.html">
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
                        <a href="listing-page.html">
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
                        <a href="listing-page.html">
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
</div>
<!--end content-->

@stop