<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content
        must come *after* these tags -->

    <!-- Meta untuk google -->
    <meta name="description" content="Teh Sulthanah, Teh Daun Kelor, Teh Organic, Teh Herbal Drink, manfaat daun kelor">

    <!-- Meta untuk Facebook -->
    <meta property="og:url" content="http://www.nytimes.com/2015/02/19/arts/international/when-great-minds-dont-think-alike.html" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="When Great Minds Don’t Think Alike" />
    <meta property="og:description" content="How much does culture influence creative thinking?" />
    <meta property="og:image" content="http://static01.nyt.com/images/2015/02/19/arts/international/19iht-btnumbers19A/19iht-btnumbers19A-facebookJumbo-v2.jpg" />

    <link rel="icon" href="{{ asset('assets/img/shulthanah.png') }}" type="image/x-icon" />
    <title>TEH SULTHANAH</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media
        queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]> <script
        src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script> <script
        src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> <![endif]-->

</head>

<body>
    <!-- HEADER -->
    <header id="header">
        <!-- NAV -->
        <div id="nav">
            <!-- Top Nav -->
            <div id="nav-top">
                <div class="container">
                    <!-- social -->
                    <ul class="nav-social">
                        <li>
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /social -->

                    <!-- logo -->
                    <div class="nav-logo">
                        <a href="index.html" class="logo"><img
                                src="{{ asset('assets/img/shulthanah.png') }}" alt=""></a>
                    </div>
                    <!-- /logo -->

                    <!-- search & aside toggle -->
                    <div class="nav-btns">
                        <button class="aside-btn">
                            <i class="fa fa-bars"></i>
                        </button>
                        <button class="search-btn">
                            <i class="fa fa-search"></i>
                        </button>
                        <div id="nav-search">
                            <form action="{{ route('blog.cari') }}" method="GET">
                                <input class="input" name="cari" placeholder="Enter your search...">
                            </form>
                            <button class="nav-close search-close">
                                <span></span>
                            </button>
                        </div>
                    </div>
                    <!-- /search & aside toggle -->
                </div>

            </div>
            <!-- /Top Nav -->

            <!-- Main Nav -->
            <div id="nav-bottom">
                <div class="container">
                    <!-- nav -->
                    <ul class="nav-menu">
                        <li>
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="has-dropdown">
                            <a href="#">Category</a>
                            <div class="dropdown">
                                <div class="dropdown-body">
                                    <ul class="dropdown-list">
                                        @foreach($category_widget as $result )
                                            <li>
                                                <a href="#">{{ $result->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="{{ route('blog.list') }}">List Post</a>
                        </li>
                        <li>
                            <a href="{{ url('/about-me') }}">About</a>
                        </li>
                        <li>
                            <a href="{{ url('/contact-information') }}">Contact</a>
                        </li>
                    </ul>
                    <!-- /nav -->
                </div>

            </div>
            <!-- /Main Nav -->

            <!-- Aside Nav -->
            <div id="nav-aside">
                <ul class="nav-aside-menu">
                    <li>
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="has-dropdown">
                        <a>Categories</a>
                        <ul class="dropdown">
                            @foreach($category_widget as $result )
                                <li>
                                    <a href="#">{{ $result->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('blog.list') }}">List Post</a>
                    </li>
                    <li>
                        <a href="{{ url('/about-me') }}">About</a>
                    </li>
                    <li>
                        <a href="{{ url('/contact-information') }}">Contact</a>
                    </li>
                </ul>
                <button class="nav-close nav-aside-close">
                    <span></span></button>
            </div>
            <!-- /Aside Nav -->
        </div>
        <!-- /NAV -->
    </header>
    <!-- /HEADER -->

    <!-- SECTION -->
    <div class="section">
        @yield('header')
    </div>
    <!-- /SECTION -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-8">
                    @yield('content')
                </div>
                <div class="col-md-4">
                    @yield('widget')
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->
    <!-- FOOTER -->
    <footer id="footer">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="index.html" class="logo"><img
                                    src="{{ asset('assets/img/shulthanah.png') }}" width="90px"
                                    alt=""></a>
                        </div>
                        <p>TEH SULTHANAH Herbal Drink</p>
                        <ul class="contact-social">
                            <li>
                                <a href="#" class="social-facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="social-twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="social-google-plus">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="social-instagram">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-widget">
                        <h3 class="footer-title">Categories</h3>
                        <div class="category-widget">
                            <ul>
                                @foreach( $category_widget as $data )
                                    <li>
                                        <a href="#">{{ $data->name }}
                                            <span>{{ $data->posts->count() }}</span></a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-widget">
                        <h3 class="footer-title">Tags</h3>
                        <div class="tags-widget">
                            <ul>
                                @foreach( $tag as $data )
                                    <li>
                                        <a href="#">{{ $data->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-widget">
                        <h3 class="footer-title">Newsletter</h3>
                        <div class="newsletter-widget">
                            <form>
                                <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium.</p>
                                <input class="input" name="newsletter" placeholder="Enter Your Email">
                                <button class="primary-button">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /row -->

            <!-- row -->
            <div class="footer-bottom row">
                <div class="col-md-6 col-md-push-6">
                    <ul class="footer-nav">
                        <li>
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ url('/about-me') }}">About</a>
                        </li>
                        <li>
                            <a href="{{ url('/contact-information') }}">Contacts</a>
                        </li>
                        <li>
                            <a href="#">Advertise</a>
                        </li>
                        <li>
                            <a href="#">Privacy</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-md-pull-6">
                    <div class="footer-copyright">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY
                            3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script>
                        All rights reserved | Made with
                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                        by
                        <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        &amp; distributed by
                        <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY
                            3.0. -->
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </footer>
    <!-- /FOOTER -->

    <!-- jQuery Plugins -->
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>

</body>

</html>
