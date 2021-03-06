<!doctype html>
<html lang="en">
<head>
    <base href="http://dungoanh.vn/">
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Spice Shoppe Stores - Bootstrap 3 Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Web Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- CSS Files -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
        <script src="js/ie8-responsive-file-warning.js"></script>
    <![endif]-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/fav-144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/fav-114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/fav-72.png">
    <link rel="apple-touch-icon-precomposed" href="images/fav-57.png">
    <link rel="shortcut icon" href="images/fav.png">

</head>
<body>
<!-- Wrapper Starts -->
    <div id="wrapper" class="container">
    <!-- Header Section Starts -->
        <header id="header-area">
        <!-- Nested Row Starts -->
            <div class="row">
            <!-- Logo Starts -->
                <div class="col-md-4 col-xs-12">
                    <div id="logo">
                        <a href="index.html"><img src="images/logo.png" title="Grocery Shoppe" alt="Grocery Shoppe" class="img-responsive" /></a>
                    </div>
                </div>
            <!-- Logo Ends -->
            <!-- Header Right Starts -->
                <div class="col-md-8 col-xs-12">
                    <div class="row header-top">
                    <!-- Header Links Starts -->
                        <div class="col-md-9 col-xs-12">
                            <div class="header-links">
                                <ul class="list-unstyled list-inline pull-left">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="#">Wish List(0)</a></li>
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="cart.html">Shopping Cart</a></li>
                                    <li><a href="#">Checkout</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="login.html">Login</a></li>
                                </ul>
                            </div>
                        </div>
                    <!-- Header Links Ends -->
                    <!-- Currency & Languages Starts -->
                        <div class="col-md-3 col-xs-12">
                            <div class="pull-right">
                            <!-- Languages Starts -->
                                <div class="btn-group">
                                    <button class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                        ENG
                                        <i class="fa fa-caret-down"></i>
                                    </button>
                                    <ul class="pull-right dropdown-menu">
                                        <li>
                                            <a tabindex="-1" href="#">English</a>
                                        </li>
                                        <li>
                                            <a tabindex="-1" href="#">French</a>
                                        </li>
                                    </ul>
                                </div>
                            <!-- Languages Ends -->
                            <!-- Currency Starts -->
                                <div class="btn-group">
                                    <button class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                        $
                                        <i class="fa fa-caret-down"></i>
                                    </button>
                                    <ul class="pull-right dropdown-menu">
                                        <li><a tabindex="-1" href="#">Pound </a></li>
                                        <li><a tabindex="-1" href="#">US Dollar</a></li>
                                        <li><a tabindex="-1" href="#">Euro</a></li>
                                    </ul>
                                </div>
                            <!-- Currency Ends -->
                            </div>
                        </div>
                    <!-- Currency & Languages Ends -->
                </div>
                <div class="row">
                    <!-- Search Starts -->
                        <div class="col-md-7 col-xs-12">
                            <div id="search">
                                <div class="input-group">
                                  <input type="text" class="form-control input-lg" placeholder="Search">
                                  <span class="input-group-btn">
                                    <button class="btn btn-lg" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                  </span>
                                </div>
                            </div>
                        </div>
                    <!-- Search Ends -->
                    <!-- Shopping Cart Starts -->
                        <div class="col-md-5 col-xs-12">
                            <div id="cart" class="btn-group btn-block">
                                <button type="button" data-toggle="dropdown" class="btn btn-block btn-lg dropdown-toggle">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="hidden-xs">Cart:</span>
                                    <span id="cart-total">0 item(s) - $0.00</span>
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <p class="text-center">Your shopping cart is empty!</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    <!-- Shopping Cart Ends -->
                    </div>
                </div>
            <!-- Header Right Ends -->
            </div>
        <!-- Nested Row Ends -->
        </header>
    <!-- Header Section Ends -->
    <!-- Main Menu Starts -->
        <nav id="main-menu" class="navbar" role="navigation">
        <!-- Nav Header Starts -->
            <div class="navbar-header">
                <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-cat-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-bars"></i>
                </button>
            </div>
        <!-- Nav Header Ends -->
        <!-- Navbar Cat collapse Starts -->
            <div class="collapse navbar-collapse navbar-cat-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="category-list.html">Asian Food</a></li>
                    <li class="dropdown">
                        <a href="category-list.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">
                            Bread &amp; Bakery
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a tabindex="-1" href="#">Brown Bread</a></li>
                            <li><a tabindex="-1" href="#">Milk Break</a></li>
                            <li><a tabindex="-1" href="#">Spl Bread</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="category-list.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">Drinks</a>
                        <div class="dropdown-menu">
                            <div class="dropdown-inner">
                                <ul class="list-unstyled">
                                    <li class="dropdown-header">Sub Category</li>
                                    <li><a tabindex="-1" href="#">item 1</a></li>
                                    <li><a tabindex="-1" href="#">item 2</a></li>
                                    <li><a tabindex="-1" href="#">item 3</a></li>
                                </ul>
                                <ul class="list-unstyled">
                                    <li class="dropdown-header">Sub Category</li>
                                    <li><a tabindex="-1" href="#">item 1</a></li>
                                    <li><a tabindex="-1" href="#">item 2</a></li>
                                    <li><a tabindex="-1" href="#">item 3</a></li>
                                </ul>
                                <ul class="list-unstyled">
                                    <li class="dropdown-header">Sub Category</li>
                                    <li><a tabindex="-1" href="#">item 1</a></li>
                                    <li><a tabindex="-1" href="#">item 2</a></li>
                                    <li><a tabindex="-1" href="#">item 3</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="category-list.html">Fresh Meats</a></li>
                    <li><a href="category-list.html">Fresh Fish</a></li>
                    <li><a href="category-list.html">Fruits</a></li>
                    <li><a href="category-list.html">Vegetables</a></li>
                    <li class="dropdown">
                        <a href="category-list.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">
                            Pages
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a tabindex="-1" href="index.html">Home</a></li>
                            <li><a tabindex="-1" href="about.html">About</a></li>
                            <li><a tabindex="-1" href="category-list.html">Category List</a></li>
                            <li><a tabindex="-1" href="category-grid.html">Category Grid</a></li>
                            <li><a tabindex="-1" href="product.html">Product</a></li>
                            <li><a tabindex="-1" href="product-full.html">Product Full Width</a></li>
                            <li><a tabindex="-1" href="cart.html">Cart</a></li>
                            <li><a tabindex="-1" href="login.html">Login</a></li>
                            <li><a tabindex="-1" href="compare.html">Compare Products</a></li>
                            <li><a tabindex="-1" href="typography.html">Typography</a></li>
                            <li><a tabindex="-1" href="register.html">Register</a></li>
                            <li><a tabindex="-1" href="contact.html">Contact</a></li>
                            <li><a tabindex="-1" href="404.html">404</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        <!-- Navbar Cat collapse Ends -->
        </nav>
    <!-- Main Menu Ends -->
    <!-- Main Container Starts -->
        <div id="main-container">
        <!-- Breadcrumb Starts -->
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Register</li>
            </ol>
        <!-- Breadcrumb Ends -->
        <!-- Main Heading Starts -->
            <h2 class="main-heading text-center">
                Login or create new account
            </h2>
        <!-- Main Heading Ends -->
        <!-- Login Form Section Starts -->
            <section class="login-area">
                <div class="row">
                    <div class="col-sm-6">
                    <!-- Login Panel Starts -->
                        <div class="panel panel-smart">
                            <div class="panel-heading">
                                <h3 class="panel-title">Login</h3>
                            </div>
                            <div class="panel-body">
                                <p>
                                    Please login using your existing account
                                </p>
                            <!-- Login Form Starts -->
                                <form class="form-inline" role="form" action="{{url('login')}}" method="POST">
                                   <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputEmail2">Username</label>
                                        <input type="text" name="id" value="{{old('id')}}" class="form-control" id="exampleInputEmail2" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputPassword2">Password</label>
                                        <input type="password" name="password" value="" class="form-control" id="exampleInputPassword2" placeholder="Password">
                                    </div>
                                    <button type="submit" class="btn btn-danger">
                                        Login
                                    </button>
                                    @if ($errors->any())
                                        <div class="">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    @if (session('message'))
                                        <div class="">
                                            <p class="text-danger">{{ session('message') }}</p>
                                        </div>
                                    @endif
                                </form>
                            <!-- Login Form Ends -->
                            </div>
                        </div>
                    <!-- Login Panel Ends -->
                    </div>
                    <div class="col-sm-6">
                    <!-- Account Panel Starts -->
                        <div class="panel panel-smart">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    Create new account
                                </h3>
                            </div>
                            <div class="panel-body">
                                <p>
                                    Registration allows you to avoid filling in billing and shipping forms every time you checkout on this website
                                </p>
                                <a href="register.html" class="btn btn-danger">
                                    Register
                                </a>
                            </div>
                        </div>
                    <!-- Account Panel Ends -->
                    <!-- Guest Checkout Panel Starts -->
                        <div class="panel panel-smart">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    Checkout as Guest
                                </h3>
                            </div>
                            <div class="panel-body">
                                <p>
                                    Checkout as a guest instead!
                                </p>
                                <button class="btn btn-danger">As Guest</button>
                            </div>
                        </div>
                    <!-- Guest Checkout Panel Ends -->
                    </div>
                </div>
            </section>
        <!-- Login Form Section Ends -->
        </div>
    <!-- Main Container Ends -->
    <!-- Footer Section Starts -->
        <footer id="footer-area">
        <!-- Footer Links Starts -->
            <div class="footer-links row">
            <!-- Information Links Starts -->
                <div class="col-md-2 col-sm-6">
                    <h5>Information</h5>
                    <ul>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="#">Delivery Information</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms &amp; Conditions</a></li>
                    </ul>
                </div>
            <!-- Information Links Ends -->
            <!-- My Account Links Starts -->
                <div class="col-md-2 col-sm-6">
                    <h5>My Account</h5>
                    <ul>
                        <li><a href="#">My orders</a></li>
                        <li><a href="#">My merchandise returns</a></li>
                        <li><a href="#">My credit slips</a></li>
                        <li><a href="#">My addresses</a></li>
                        <li><a href="#">My personal info</a></li>
                    </ul>
                </div>
            <!-- My Account Links Ends -->
            <!-- Customer Service Links Starts -->
                <div class="col-md-2 col-sm-6">
                    <h5>Service</h5>
                    <ul>
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="#">Returns</a></li>
                        <li><a href="#">Site Map</a></li>
                        <li><a href="#">Affiliates</a></li>
                        <li><a href="#">Specials</a></li>
                    </ul>
                </div>
            <!-- Customer Service Links Ends -->
            <!-- Follow Us Links Starts -->
                <div class="col-md-2 col-sm-6">
                    <h5>Follow Us</h5>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">RSS</a></li>
                        <li><a href="#">YouTube</a></li>
                    </ul>
                </div>
            <!-- Follow Us Links Ends -->
            <!-- Contact Us Starts -->
                <div class="col-md-4 col-sm-12 last">
                    <h5>Contact Us</h5>
                    <ul>
                        <li>My Company</li>
                        <li>
                            1247 LB Nagar Road, Hyderabad, Telangana - 35
                        </li>
                        <li>
                            Email: <a href="#">info@demolink.com</a>
                        </li>
                    </ul>
                    <h4 class="lead">
                        Tel: <span>1(234) 567-9842</span>
                    </h4>
                </div>
            <!-- Contact Us Ends -->
            </div>
        <!-- Footer Links Ends -->
        </footer>
    <!-- Footer Section Ends -->
    </div>
<!-- Wrapper Ends -->
<!-- Copyright Area Starts -->
    <div class="copyright container">
        <div class="clearfix">
        <!-- Starts -->
            <p class="pull-left">
                &copy; 2014 Grocery Shoppe Stores. Bootstrap Designed By <a href="http://sainathchillapuram.com">Sainath Chillapuram</a>
            </p>
        <!-- Ends -->
        <!-- Payment Gateway Links Starts -->
            <ul class="pull-right list-inline">
                <li>
                    <img src="images/payment-icon/cirrus.png" alt="PaymentGateway" />
                </li>
                <li>
                    <img src="images/payment-icon/paypal.png" alt="PaymentGateway" />
                </li>
                <li>
                    <img src="images/payment-icon/visa.png" alt="PaymentGateway" />
                </li>
                <li>
                    <img src="images/payment-icon/mastercard.png" alt="PaymentGateway" />
                </li>
                <li>
                    <img src="images/payment-icon/americanexpress.png" alt="PaymentGateway" />
                </li>
            </ul>
        <!-- Payment Gateway Links Ends -->
        </div>
    </div>
<!-- Copyright Area Ends -->
<!-- JavaScript Files -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-hover-dropdown.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>