<nav class="navbar navbar-default" role="navigation">
    <div class="container mainnav">
        <div class="navbar-header">
            <!-- offcanvas-trigger -->
            <button type="button" class="navbar-toggle collapsed pull-right">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars"></i>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-collapse">
            <h1 class="logo"><a class="navbar-brand" href="#"><img src="img/Logos.png" alt=""></a></h1>

            <span class="search-button pull-right"></span>

            <ul class="nav navbar-nav navbar-right">
                <!-- Home -->
                <li class="dropdown active"><a href="{{ url('/') }}">Home</a></li>
                <!-- /Home -->
                <!-- Services -->
                <li class="dropdown"><a href="#">Services <span class="fa fa-angle-down"></span></a>
                    <!-- submenu-wrapper -->
                    <div class="submenu-wrapper">
                        <div class="submenu-inner">
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('/air') }}">Air transportation</a></li>
                                <li><a href="{{ url('/marine') }}">Marine transportation</a></li>
                                <li><a href="{{ url('/moving') }}">Moving & storage</a></li>
                                <li><a href="{{ url('/shipping') }}">Shipping & operations</a></li>
                                <li><a href="{{ url('/transport') }}">Transportation logistics</a></li>
                                <li><a href="{{ url('/truck') }}">Trucking</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /submenu-wrapper -->
                </li>

                <!-- MEGA MENU -->
                <li class="dropdown mega-fw has-megamenu"><a href="#" data-toggle="dropdown"
                        class="dropdown-toggle">Features <span class="fa fa-angle-down"></span></a>
                    <!-- megamenu-wrapper -->
                    <div class="submenu-wrapper megamenu-wrapper">
                        <div class="submenu-inner megamenu-inner">
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="mega-content">
                                        <div class="row">
                                            <div class="col-sm-3 mega-col">
                                                <ul>
                                                    <li class="dropdown-header">Features</li>
                                                    <li><a href="{{ url('/shipment') }}">Create Shipping</a></li>
                                                    <li><a href="{{ url('/contact') }}">Customer Support</a></li>
                                                    <li><a href="{{ url('/feedback') }}">FeedBack</a></li>
                                                </ul>
                                            </div><!-- /.col -->
                                            <div class="col-sm-3 mega-col">
                                                <ul>
                                                    <li class="dropdown-header">Pages</li>
                                                    <li><a href="{{ url('/about') }}">About</a></li>
                                                    <li><a href="{{ url('/service') }}">Service</a></li>
                                                    <li><a href="{{ url('/members') }}">Our people</a></li>
                                                    <li><a href="{{ url('/career') }}">Career</a></li>
                                                    <li><a href="{{ url('/faq') }}">FAQ Page</a></li>
                                                </ul>
                                            </div><!-- /.col-->
                                            <div class="col-sm-3 mega-col">
                                                <ul>
                                                    <li class="dropdown-header">Services</li>
                                                    <li><a href="{{ url('/air') }}">Air transportation</a></li>
                                                    <li><a href="{{ url('/marine') }}">Marine transportation</a></li>
                                                    <li><a href="{{ url('/moving') }}">Moving & storage</a></li>
                                                    <li><a href="{{ url('/shipping') }}">Shipping & operations</a></li>
                                                    <li><a href="{{ url('/transport') }}">Transportation logistics</a>
                                                    </li>
                                                    <li><a href="{{ url('/truck') }}">Trucking</a></li>
                                                </ul>
                                            </div><!-- /.col-->
                                            <div class="col-sm-3 mega-col">
                                                <ul>
                                                    <li class="dropdown-header">Additional</li>
                                                    <li><a href="{{ url('/Truck') }}">Type of Truck</a></li>
                                                    <li><a href="{{ url('/ship') }}">Type of Ship</a></li>
                                                    <li><a href="{{ url('/plane') }}">Type of Airplane</a></li>

                                                </ul>
                                            </div><!-- /.col -->
                                        </div><!-- /.row -->
                                    </div><!-- /.mega-content -->
                                </li>
                            </ul><!-- /.dropdown menu -->
                        </div><!-- /.megamenu-inner -->
                    </div> <!-- /.megamenu-wrapper -->
                </li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
                <li class="dropdown">
                    <a href="#">
                        <img src="{{ asset('img/user.png') }}" alt="User Icon" style="width: 24px; height: 24px;">
                        <!-- Adjust width and height as needed -->
                    </a>
                    <!-- submenu-wrapper -->
                    <div class="submenu-wrapper">
                        <div class="submenu-inner">
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li>
                                <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /submenu-wrapper -->
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>