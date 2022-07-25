<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <title>QuickComputer Solution</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta content="Metronic Shop UI description" name="description">
    <meta content="Metronic Shop UI keywords" name="keywords">
    <meta content="keenthemes" name="author">

    <meta property="og:site_name" content="-CUSTOMER VALUE-">
    <meta property="og:title" content="-CUSTOMER VALUE-">
    <meta property="og:description" content="-CUSTOMER VALUE-">
    <meta property="og:type" content="website">
    <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
    <meta property="og:url" content="-CUSTOMER VALUE-">

    <link rel="shortcut icon" href="favicon.html">
    <link href="{{ asset('assets/pages/css/bootstrap.min.css') }}" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonts START -->

    <!--- fonts for slider on the index page -->
    <!-- Fonts END -->

    <!-- Global styles START -->

    <link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Global styles END -->

    <!-- Page level plugin styles START -->
    <link href="{{ asset('assets/pages/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/fancybox/source/jquery.fancybox.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/owl.carousel/assets/owl.carousel.css') }}" rel="stylesheet">
    <!-- Page level plugin styles END -->

    <!-- Theme styles START -->
    <link href="{{ asset('assets/pages/css/components.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/pages/css/slider.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/pages/css/style-shop.css') }}" rel="stylesheet" type="text/css">


    <link href="{{ asset('assets/corporate/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/corporate/css/style-responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/corporate/css/themes/red.css') }}" rel="stylesheet" id="style-color">
    <link href="{{ asset('assets/corporate/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/corporate/css/customm.css') }}" rel="stylesheet">
     <!--<link rel="stylesheet" href="{{ asset('assets/pages/css/quicksecure.css') }}"> -->
    <!-- Theme styles END -->

    <!-- product magnific -->
    <script src="{{ asset('js/vendor/modernizr.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery.js') }}"></script>
    <!-- xzoom plugin here -->
    <script type="text/javascript" src="{{ asset('dist/xzoom.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/xzoom.css') }}" media="all" />
    <!-- hammer plugin here -->
    <script type="text/javascript" src="{{ asset('hammer.js/1.0.5/jquery.hammer.min.js') }}"></script>
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link type="text/css" rel="stylesheet" media="all"
        href="{{ asset('fancybox/source/jquery.fancybox.css') }}" />
    <link type="text/css" rel="stylesheet" media="all"
        href="{{ asset('magnific-popup/css/magnific-popup.css') }}" />
    <script type="text/javascript" src="{{ asset('fancybox/source/jquery.fancybox.js') }}"></script>
    <script type="text/javascript" src="{{ asset('magnific-popup/js/magnific-popup.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/pages/css/quicksecure.css') }}">

</head>
<!-- Head END -->





<!-- animation -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
{{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.5.1/nouislider.min.css"
    integrity="sha512-qveKnGrvOChbSzAdtSs8p69eoLegyh+1hwOMbmpCViIwj7rn4oJjdmMvWOuyQlTOZgTlZA0N2PXA7iA8/2TUYA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
@livewireStyles
</head>
<!-- Head END -->

<!-- Body BEGIN -->

<body class="ecommerce ">

    <style>
        .dropbtn {
            background-color: #04AA6D;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
        }

        /* The container <div> - needed to position the dropdown content */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {
            background-color: #ddd;
        }

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Change the background color of the dropdown button when the dropdown content is shown */
        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }
    </style>
    <!-- BEGIN TOP BAR -->
    @include('include.web-nav')
    {{ $slot }}

    <!-- BEGIN STEPS -->
    <div class="steps-block steps-block-red">
        <div class="container">
            <div class="row">
                <div class="col-md-4 steps-block-col">
                    <i class="fa fa-truck"></i>
                    <div>
                        <h2>Free shipping</h2>
                        <em>Express delivery withing 3 days</em>
                    </div>
                    <span>&nbsp;</span>
                </div>
                <div class="col-md-4 steps-block-col">
                    <i class="fa fa-gift"></i>
                    <div>
                        <h2>Daily Gifts</h2>
                        <em>3 Gifts daily for lucky customers</em>
                    </div>
                    <span>&nbsp;</span>
                </div>
                <div class="col-md-4 steps-block-col">
                    <i class="fa fa-phone"></i>
                    <div>
                        <h2>18003097011</h2>
                        <em>24/7 customer care available</em>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END STEPS -->
    @include('include.web-footer')


    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
                            <script src="assets/plugins/respond.min.js"></script>
                            <![endif]-->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="{{ asset('assets/plugins/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/jquery-migrate.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/corporate/scripts/back-to-top.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript">
    </script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="{{ asset('assets/plugins/fancybox/source/jquery.fancybox.pack.js') }}" type="text/javascript"></script><!-- pop up -->
    <script src="{{ asset('assets/plugins/owl.carousel/owl.carousel.min.js') }}" type="text/javascript"></script><!-- slider for products -->
    <script src="{{ asset('assets/plugins/zoom/jquery.zoom.min.js') }}" type="text/javascript"></script><!-- product zoom -->
    <script src="{{ asset('assets/plugins/bootstrap-touchspin/bootstrap.touchspin.js') }}" type="text/javascript">
    </script><!-- Quantity -->

    <script src="{{ asset('assets/corporate/scripts/layout.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/pages/scripts/bs-carousel.js') }}" type="text/javascript"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.5.1/nouislider.min.js"
        integrity="sha512-T5Bneq9hePRO8JR0S/0lQ7gdW+ceLThvC80UjwkMRz+8q+4DARVZ4dqKoyENC7FcYresjfJ6ubaOgIE35irf4w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.tiny.cloud/1/i4y3r806hozux4iqj9ej33xdmqmlg83pe2yimkgjpzg5lvg0/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script> --}}




    @stack('scripts')
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();
            Layout.initOWL();
            Layout.initImageZoom();
            Layout.initTouchspin();
            Layout.initTwitter();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->

    <!-- google translator -->
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
    <script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    @livewireScripts

</body>
<!-- END BODY -->

<!--footer menu-->
<nav class="nav_footer">
        <a href="https://quicksecureindia.com/" class="nav__link nav__link--active">
            <i class="fa fa-home nav__icon"></i>
            <span class="nav__text">Home</span>
        </a>
        <a href="https://quicksecureindia.com/cart" class="nav__link">
            <i class="fa fa-shopping-cart nav__icon"></i>
            <span class="nav__text">Cart</span>
        </a>
            <a href="https://quicksecureindia.com/wishlist" class="nav__link">
            <i class="fa fa-heart-o nav__icon"></i>
            <span class="nav__text">Wishlist</span>
        </a>
        <a id="" class="nav__link" href="https://quicksecureindia.com/user/profile">
            <i class="fa fa-user nav__icon"></i>
             <span class="nav__text">Profile</span>
        </a>
    </nav>
    
    <!--footer menu end-->

    
</html>
