<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>AmirKabir Studio</title>

    <!-- Bootstrap -->
    <link href="/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/home-page.css" rel="stylesheet">
    <link rel="stylesheet" href="/node_modules/owl.carousel/dist/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="/node_modules/owl.carousel/dist/assets/owl.theme.default.css"/>
    <link href="/css/global.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/shabnam-font@v1.0.2/dist/font-face.css" rel="stylesheet"
          type="text/css"/>
    <link href="/css/ionicons.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
</head>
<body>
<div id="intro" class="row">
    <div id="main-content" class="col-sm-12 col-lg-12 col-md-12 col-xs-12">
        <div id="foregrand" class="col-sm-12 col-lg-12 col-md-12 col-xs-12">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" id="frame">
                <div id="header">
                    @if (Auth::guest())
                        <div class="row text-center">
                            <div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
                                <div class="text-left">
                                    <a href="register.html">
                                        <button type="button" class="btn-primary text-info h4">ثبت نام</button>
                                    </a>
                                    <a href="login.html" class="text-info h4">ورود</a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
                                <a href="./index.html"><p id="page-title" class="text-right text-info h4">امیرکبیر <span
                                                class="studio">استودیو</span>
                                        <i class="icon glyphicon ion-ios-game-controller-b"></i></p></a>
                            </div>
                        </div>
                    @else
                        <div class="row text-center">
                            <div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
                                <div class="text-left">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{ url('/logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    خروج
                                                </a>

                                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                            <li>
                                                <a href="{{url('/profile')}}">
                                                    صفحه شخصی
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
                                <a href="./index.html"><p id="page-title" class="text-right text-info h4">امیرکبیر <span
                                                class="studio">استودیو</span>
                                        <i class="icon glyphicon ion-ios-game-controller-b"></i></p></a>
                            </div>
                        </div>

                    @endif

                </div>
                <div id="content" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div id="subject" class="row text-right text-info h2"><p></p></div>
                    <br>
                    <div id="explain" class="row text-right text-info h4 text-justify">
                        <p><img src="assets/audio.svg" class="loader text-center"></p>
                    </div>
                    <br>
                    <div class="row text-right text-info">
                        <a id="trailer-link" href="./games.html" onclick="enterGamePageBtnHandlerTrailer()"><span class="text-muted" >تریلر این بازی</span></a>
                        <span><i class="material-icons md-24 glyphicon text-muted">play_circle_filled</i></span>
                        <button type="button" class="btn-primary" onclick="enterGamePageBtnHandler()">ورود به صفحه
                            بازی
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="slider" class="col-sm-12 col-md-12 col-xs-12 col-lg-12">
        <div id="owl1" class="owl-carousel owl-theme">
        </div>
    </div>
</div>
<br>
<br>
<div id="new-game" class="row">
    <div id="title" class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <p class="h3 text-right text-primary">جدیدترین بازی ها</p>
    </div>
    <div id="slider-2" class="col-sm-8 col-md-8 col-xs-12 col-lg-8">

        <div id="owl20" class="owl-carousel owl-theme">
        </div>
    </div>
</div>
<br>
<br>
<div id="comment-guide" class="row">
    <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12 container">
        <div class="row col-sm-12 col-xs-12 col-md-12 col-lg-12 text-right container" id="head">
            <p class="h3">نظرات کاربران و راهنمای بازی ها</p>
            <br>
            <p class="h5">لورم ایپشوم به طرحی بی معنی در صنعت چاپ میگویند</p>
        </div>
        <br>
        <br>
        <div class="row col-sm-12 col-xs-12 col-md-12 col-lg-12 text-right">
            <div id="guides" class="col-sm-12 col-lg-6 col-md-6 col-xs-12">
                <p class="h4 row">آخرین راهنماهای بازی ها</p>
                <br>
                <div class="row" id="guide-content-body">

                </div>
            </div>
            <div id="comments" class="col-sm-12 col-lg-6 col-md-6 col-xs-12">
                <p class="h4 row">نظرات و گفت و گو ها</p>
                <br>
                <div class="row" id="comment-content-body">

                </div>
            </div>
        </div>

    </div>
</div>
<div id="contact" class="col-xs-12">
    <div id="frame-on-contact" class="col-xs-12 vertical-align-wrap">
        <div id="panel" class="container col-xs-12 col-md-8 col-lg-8 col-sm-8 text-center vertical-align--middle">
            <div class="">
                <p class="text-info h1">به جامعه بازی سازان امیرکبیر بپیوندید</p>
                <br>
                <p class="text-info h3">بیش از ۵۰۰۰ عضو فعال در سراسر کشور</p>
                <br>
                <br>
                <button type="button" class="btn-default text-muted">به ما بپیوندید</button>
            </div>
        </div>
    </div>
</div>
</div>
<footer>
    <div class="footer-top col-sm-12">
        <div class="container col-lg-8 col-sm-8 col-md-8 col-xs-12">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <a href="./index.html">
                        <p class="h4 text-muted"><i
                                    class="icon glyphicon ion-ios-game-controller-b"></i> امیرکبیر <span
                                    class="studio">استودیو</span></p></a>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8" id="menu">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <ul class="nav navbar-nav">
                                <li><a href="#" class="text-success">حریم خصوصی</a></li>
                                <li><a href="#" class="text-success">سوالات متداول</a></li>
                                <li><a href="#" class="text-success">ارتباط با سازندگان</a></li>
                                <li><a href="#" class="text-success">درباره ما</a></li>
                                <li><a href="./index.html" class="text-success">صفحه اصلی</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12" id="social">
                    <a href="http://facebook.com"><i class="ionicons ion-social-facebook social"></i></a>
                    <a href="http://twitter.com"><i class="ionicons ion-social-twitter social"></i></a>
                    <a href="http://instagram.com"><i class="ionicons ion-social-instagram social"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-down col-sm-12 vertical-align-wrap">
        <p class="text-muted h4 text-center vertical-align--middle">تمامی حقوق محفوظ و متعلق به دانشگاه امیرکبیر است</p>
    </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/node_modules/jquery/dist/jquery.min.js"></script>
<script src="/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="/js/global.js"></script>
<script src="/js/home-page.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>