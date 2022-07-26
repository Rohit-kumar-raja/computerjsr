<div class="pre-header">
    <div class="container">
        <div class="row">
            <!-- BEGIN TOP BAR LEFT PART -->
            <div class="col-md-6 col-sm-6 additional-shop-info">
                <ul class="list-unstyled list-inline">
                    <li>

                        <a style="font-size: 23px;font-weight: 900;" class='pop-outin' href=""><i
                                class="fa fa-phone"></i>TollFree: <span>18003097011</span></a>

                    </li>
              
                </ul>
            </div>
            <!-- END TOP BAR LEFT PART -->
            <span id="feedback"></span>
            <style>
              
                .pop-outin {
                    animation: 1s anim-popoutin ease infinite;
                }

                @keyframes anim-popoutin {
                    0% {
                        color: #fff;
                        transform: scale(0);
                        opacity: 0;
                        text-shadow: 0 0 0 rgba(0, 0, 0, 0);
                    }

                    25% {
                        color: red;
                        transform: scale(2);
                        opacity: 1;
                        text-shadow: 3px 10px 5px rgba(0, 0, 0, 0.5);
                    }

                    50% {
                        color: #ffeb00;
                        transform: scale(1);
                        opacity: 1;
                        text-shadow: 1px 0 0 rgba(0, 0, 0, 0);
                    }

                    100% {
                        /* animate nothing to add pause at the end of animation */
                        transform: scale(1);
                        opacity: 1;
                        text-shadow: 1px 0 0 rgba(255, 255, 255, 0);
                    }
                }
            </style>
            <!-- BEGIN TOP BAR MENU -->
            <style>
                span.index {
                    background-color: grey;
                    padding: 0px 4px;
                }

                i.fa.fa-heart {
                    color: red;
                }
            </style>
            <div class="col-md-6 col-sm-6 additional-nav">
                <ul class="list-unstyled list-inline pull-right">
                    @livewire('wishlist-count-component')
               
                    @if (Route::has('login'))
                        @auth
                            @if (Auth::user()->utype === 'ADM')
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#"
                                        href="javascript:;">
                                        <i class="fas fa-user-cog"></i> ({{ Auth::user()->name }})
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                        <li>
                                            <a href="{{ route('admin.categories') }}">Categories</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.order') }}">All Orders</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.products') }}">All Products</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.homecategories') }}">Manage Home Category</a>
                                        </li>


                                        <li>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                        </li>
                                        <form action="{{ route('logout') }}" method="POST" id="logout-form">
                                            @csrf
                                        </form>
                                    </ul>
                                </li>
                            @else
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#"
                                        href="javascript:;">
                                        <i class="fas fa-user-circle"></i> ({{ Auth::user()->name }})
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                                        <li><a href="{{ route('user.profile') }}">My Profile</a></li>
                                        <li><a href="{{ route('user.orders') }}">My Orders</a></li>
                                        <li><a href="{{ route('amc.package.user.history') }}">AMC Orders</a></li>
                                        <li><a href="{{ route('rent.user.history') }}">Rent History</a></li>
                                        <li><a href="{{ route('customise.fetchUser') }}">Custtome Pc History</a></li>

                                        <li>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                        </li>
                                        <form action="{{ route('logout') }}" method="POST" id="logout-form">
                                            @csrf
                                        </form>
                                    </ul>
                                </li>
                            @endif
                        @else
                            <li><a href="{{ route('login') }}">Log In</a></li>


                        @endif
                        @endif


                    </ul>

                </div>
                <!-- END TOP BAR MENU -->

            </div>
        </div>
    </div>
    <!-- END TOP BAR -->


    <!-- BEGIN HEADER -->
    <div class="header">
        <div class="container">
            <a class="site-logo" href="{{ route('index') }}"><img
                    src="{{ asset('assets/corporate/img/logos/qs_full_logo (2).png') }}" alt="Metronic Shop UI"></a>

            <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>
            
            
            
                <a href="javascript:void(0);" class="header-search-bar" >
                 @livewire('header-search-component')
                 </a>
            
            
            <!-- BEGIN CART -->
            @livewire('cart-count-component')
            <!--END CART -->

            <!-- BEGIN NAVIGATION -->
            <div class="header-navigation">
                <ul>
                    <li>
                        <a href="{{ route('index') }}">Home </a>
                    </li>
                    <li>
                        @livewire('mega-menu-component')
                    </li>
                    <!--<li><a href="{{ route('amc.package') }}">AMC'S</a></li>-->
                    <!--<li><a href="{{ route('rent') }}">Rent</a></li>-->
                    <li><a href="https://quicksecureindia.com/product-category/peripherals">Accessories</a></li>
                    
                    
                    
                    <div class="mobiles-menu" style="font-size: 12px;
    padding: 10px 0px;
    font-family: fangsong;">
                    <!--mobile menu-->
                     @if (Route::has('login'))
                        @auth
                            @if (Auth::user()->utype === 'ADM')
                                <li class="dropdown mobile-menu" >
                                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#"
                                        href="javascript:;">
                                        <i class="fas fa-user-cog"></i> ({{ Auth::user()->name }})
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                        <li>
                                            <a href="{{ route('admin.categories') }}">Categories</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.order') }}">All Orders</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.products') }}">All Products</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.homecategories') }}">Manage Home Category</a>
                                        </li>


                                        <li>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                        </li>
                                        <form action="{{ route('logout') }}" method="POST" id="logout-form">
                                            @csrf
                                        </form>
                                    </ul>
                                </li>
                            @else
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#"
                                        href="javascript:;">
                                        <i class="fas fa-user-circle"></i> ({{ Auth::user()->name }})
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                                        <li><a href="{{ route('user.profile') }}">My Profile</a></li>
                                        <li><a href="{{ route('user.orders') }}">My Orders</a></li>
                                        <li><a href="{{ route('amc.package.user.history') }}">AMC Orders</a></li>
                                        <li><a href="{{ route('rent.user.history') }}">Rent History</a></li>

                                        <li>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                        </li>
                                        <form action="{{ route('logout') }}" method="POST" id="logout-form">
                                            @csrf
                                        </form>
                                    </ul>
                                </li>
                            @endif
                        @else
                            <li><a href="{{ route('login') }}">Log In</a></li>
                        @endif
                        @endif
                    <!--// mobile menu-->
                    </div>
                    
                    
                    
                  
                    <!-- BEGIN TOP SEARCH -->
                    @livewire('header-search-component')
                    <!-- END TOP SEARCH -->
                </ul>
            </div>
            <!-- END NAVIGATION -->
        </div>
    </div>
    <!-- Header END -->



    <!-- sticky logih button -->
    <!--<div id="feedback">-->
    <!--    <a href="https://partners.quicksecureindia.com/new-reg/dealer-login.php">Dealer Login</a>-->
    <!--</div>-->

    <!--<div id="feedback" style="margin-top:200px;">-->
    <!--    <a href="https://partners.quicksecureindia.com/new-reg/staff-login.php">AMC Login</a>-->
    <!--</div>-->

    <!-- employee login -->
    <div id="popup1" class="overlay">
        <div class="popup">
            <div class="div1" style="background:#fff">

                <a class="close" href="#">×</a>

                <div class="content" id="quickenquire">
                    <h3 style="text-align:center">Dealer Login</h3>
                    <form action="#">
                        <label for="name">User Name</label>
                        <input type="text" id="name" name="name">
                        <label for="email">Password</label>
                        <input type="password" id="email" name="email">

                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>




        </div>
    </div>

    <!-- Amc login -->
    <div id="popup2" class="overlay">
        <div class="popup">
            <div class="div1" style="background:#fff">

                <a class="close" href="#">×</a>

                <div class="content" id="quickenquire">
                    <h3 style="text-align:center">AMC Login</h3>
                    <form action="#">
                        <label for="name">User Name</label>
                        <input type="text" id="name" name="name">
                        <label for="email">Password</label>
                        <input type="password" id="email" name="email">

                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>