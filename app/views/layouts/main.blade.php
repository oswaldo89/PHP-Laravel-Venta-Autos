<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ElTianguisdelAutomovil</title>

    <!-- Bootstrap core CSS -->
    {{HTML::style('assets/css/bootstrap.css')}}

    <!-- Custom CSS Assets -->

    {{HTML::style('assets/css/scojs.css')}}
    {{HTML::style('assets/css/jquery.fs.picker.css')}}
    {{HTML::style('assets/css/jquery.fs.selecter.css')}}
    {{HTML::style('assets/css/assets/css/jquery.fs.scroller.css')}}
    {{HTML::style('assets/css/font-awesome.css')}}
    {{HTML::style('assets/css/theme.css')}}
    @if(Route::currentRouteName() == 'detalle')
        {{HTML::style('assets/css/refineslide.css')}}
        {{HTML::style('assets/css/refineslide-theme-dark.css.css')}}
    @endif

</head>

<body>
    <!-- /Wrap -->
    <div id="wrap">

        <div id="login" class="collapse">
            <div class="container">
                <div class="top-form-inner">

                    <form class="form-inline" role="form">
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputEmail2">Dirección de correo</label>
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputPassword2">Contraseña</label>
                            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                        </div>
                        <a href="login.html" class="btn btn-primary">Login</a>
                    </form>
                </div>
            </div>
        </div>

        <nav class="navbar  navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{URL::to('/')}}"><span class="glyphicon glyphicon-dashboard"></span> ElTianguisdelAutomovil</span></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control input-sm" placeholder="Search...">
                        </div>
                    </form>

                    <p class="navbar-text pull-right">Ya tienes una cuenta? <a data-toggle="collapse" data-target="#login" class="navbar-link">Ingresar</a>
                    </p>

                    <div class="btn-toolbar pull-right">
                        <div class="btn-group"><a href="#" class="btn btn-primary navbar-btn btn-sm"><i class="fa fa-plus-circle"></i> Agregar anuncio</a>
                        </div>
                        <div class="btn-group"><a href="{{URL::to('/registro')}}" class="btn btn-success navbar-btn btn-sm"><span class="glyphicon glyphicon-user"></span> Crear una cuenta</a>
                        </div>
                    </div>

                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>


        <div id="top">
            <nav class="secondary navbar navbar-default" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex5-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex5-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="{{URL::to('/')}}">Portada</a>
                            </li>
                            <li><a href="#">Busqueda Avanzada</a>
                            </li>
                            <li><a href="#">Agencias</a>
                            </li>
                            <li><a href="#">Contacto</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
            </nav>
        </div>

        <div class="container">
            <div class="row">

                @if(Route::currentRouteName() == 'inicio' or Route::currentRouteName() == 'listado')
                    @include('layouts.left_sidebar')
                @endif

                @yield('content')

            </div>
        </div>
        <!-- /.container -->

        <div class="sub-foot">


            <div class="container">
                <h4>Publicidad <small>quieres anunciarte, contactanos...</small></h4>

                <div class="row">

                    <div class="col-sm-6 col-md-3">
                        <a href="#" class="thumbnail">
                            <img alt="Thumbnail" src="http://placehold.it/350x150">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <a href="#" class="thumbnail">
                            <img alt="Thumbnail" src="http://placehold.it/350x150">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <a href="#" class="thumbnail">
                            <img alt="Thumbnail" src="http://placehold.it/350x150">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <a href="#" class="thumbnail">
                            <img alt="Thumbnail" src="http://placehold.it/350x150">
                        </a>
                    </div>
                </div>
                <hr>

                <p class="text-center">
                    <button type="button" class="btn btn-success btn-lg">Contactanos</button>
                </p>
            </div>
        </div>

    </div>

    <!-- /Wrap -->



    <!-- Footer -->

    <div id="footer">
        <div class="container">

            <ul class="list-inline">
                <li><a href="index.html">Home</a>
                </li>
                <li><a href="#">Terms</a>
                </li>
                <li><a href="#">About</a>
                </li>
                <li><a href="#">Our Blog</a>
                </li>
                <li><a href="#">Contact Us</a>
                </li>
                <li><a href="#">List your Vehicle</a>
                </li>
                <li><a href="browse-listings-grid.html">Browse Vehicles</a>
                </li>
            </ul>
            <p class="text-muted credit">&copy; 2013 <strong>ElTianguisdelAutomovil</strong> &middot; Created by: <a href="https://wrapbootstrap.com/user/themestrap">Themestrap</a> &middot; Powered by: <a href="http://getbootstrap.com/">Bootstrap</a> 
            </p>
        </div>
    </div>

    <!-- /Footer -->




    <!-- javascript -->
    {{HTML::script('assets/js/jquery.js')}}
    {{HTML::script('assets/js/jquery.fs.selecter.js')}}
    {{HTML::script('assets/js/jquery.fs.picker.js')}}
    {{HTML::script('assets/js/jquery.fs.scroller.js')}}

    {{HTML::script('assets/js/bootstrap.js')}}
    {{HTML::script('assets/js/theme.js')}}
    {{HTML::script('assets/js/sco.modal.js')}}
    {{HTML::script('assets/js/sco.confirm.js')}}
    {{HTML::script('assets/js/sco.ajax.js')}}
    {{HTML::script('assets/js/sco.collapse.js')}}
    {{HTML::script('assets/js/sco.countdown.js')}}
    {{HTML::script('assets/js/sco.message.js')}}

    @if(Route::currentRouteName() == 'detalle')
        {{HTML::script('assets/js/jquery.refineslide.js')}}
        <script>
            $(function () {
                var $upper = $('#upper');

                $('#images').refineSlide({
                    transition: 'fade',
                    onInit: function () {
                        var slider = this.slider,
                            $triggers = $('.translist').find('> li > a');

                        $triggers.parent().find('a[href="#_' + this.slider.settings['transition'] + '"]').addClass('active');

                        $triggers.on('click', function (e) {
                            e.preventDefault();

                            if (!$(this).find('.unsupported').length) {
                                $triggers.removeClass('active');
                                $(this).addClass('active');
                                slider.settings['transition'] = $(this).attr('href').replace('#_', '');
                            }
                        });

                        function support(result, bobble) {
                            var phrase = '';

                            if (!result) {
                                phrase = ' not';
                                $upper.find('div.bobble-' + bobble).addClass('unsupported');
                                $upper.find('div.bobble-js.bobble-css.unsupported').removeClass('bobble-css unsupported').text('JS');
                            }
                        }

                        support(this.slider.cssTransforms3d, '3d');
                        support(this.slider.cssTransitions, 'css');
                    }
                });
            });
        </script>
    @else
        <script>
            $(document).ready(function (e) {

                $(".selecter_label_1").selecter({
                    defaultLabel: "Select a Make"
                });

                $(".selecter_label_2").selecter({
                    defaultLabel: "Select A Model"
                });

                $(".selecter_label_3").selecter({
                    defaultLabel: "Condition"
                });

                $(".selecter_label_4").selecter({
                    defaultLabel: "Transmission"
                });

                $("input[type=checkbox], input[type=radio]").picker();

            });
        </script>
    @endif
    <!-- /Javascript -->
    @yield('script')



</body>

</html>