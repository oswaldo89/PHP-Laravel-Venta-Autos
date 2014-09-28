<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ElTianguisdelAutomovil - Acceso</title>


    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/theme.css" rel="stylesheet">
    <link href="assets/css/jquery.fs.selecter.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/scojs.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">


</head>

<body>

    <!-- Wrap -->

    <div id="wrap">


        <div id="landing">
            <div class="header-image">
                <div class="container">
                    <div class="auth-unit">

                        <h3 class="text-brand"><span class="glyphicon glyphicon-dashboard"></span> ElTianguisdelAutomovil</span></h3>


                        <div class="auth-unit-top">
                            <h3>Acceso</h3>
                            <p>a tu cuenta</p>
                        </div>


                        <div class="auth-unit-inner">
                            <form role="form" class="tooltip-demo">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Dirección de correo</label>
                                    <input type="email" class="form-control " id="exampleInputEmail1" placeholder="email@example.com" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Contraseña <a class="pull-right" href="{{URL::to('/recuperar-password')}}">recuperar contraseña?</a>
                                    </label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" name="pass">
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">Recordarme
                                    </label>
                                </div>
                                <button id="message_trigger_err" class="btn btn-primary btn-block" type="submit"><strong>Accesa</strong> a tu cuenta</button>
                                <hr>

                                <div class="btn-group btn-group-justified">
                                    <a class="btn btn-default btn-lg" data-toggle="tooltip" title="Sign in with Twitter" role="button"><i class="fa fa-twitter"></i></a>
                                    <a class="btn btn-default btn-lg" data-toggle="tooltip" title="Sign in with Facebook" role="button"><i class="fa fa-facebook"></i></a>
                                    <a class="btn btn-default btn-lg" data-toggle="tooltip" title="Sign in with Google+" role="button"><i class="fa fa-google-plus"></i></a>
                                    <a class="btn btn-default btn-lg" data-toggle="tooltip" title="Sign in with Linkedin" role="button"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </form>

                        </div>
                        <br>

                        <a href="{{URL::to('/registro')}}" class="btn btn-success btn-block btn-lg"><strong>Registrate</strong> es gratis!</a>

                    </div>
                </div>
            </div>
            <!-- /header-image -->
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
            <p class="text-muted credit">&copy; 2013 <strong>AutoMarket</strong> &middot; Created by: <a href="https://wrapbootstrap.com/user/themestrap">Themestrap</a> &middot; Powered by: <a href="http://getbootstrap.com/">Bootstrap</a> 
            </p>
        </div>
    </div>

    <!-- /Footer -->



    <!-- JS Assets -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/sco.modal.js"></script>
    <script src="assets/js/sco.confirm.js"></script>
    <script src="assets/js/sco.ajax.js"></script>
    <script src="assets/js/sco.collapse.js"></script>
    <script src="assets/js/sco.countdown.js"></script>
    <script src="assets/js/sco.message.js"></script>


</body>

</html>