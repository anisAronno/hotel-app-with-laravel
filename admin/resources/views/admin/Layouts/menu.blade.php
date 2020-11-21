    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <li class="nav-item "> <a class="nav-link nav-toggler  hidden-md-up  waves-effect waves-dark" href="javascript:void(0)"><i class="fas  fa-bars"></i></a></li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="fas fa-bars"></i></a> </li>
                        <a href="/dashboard"> <li class="nav-item mt-3 font-weight-bold">ADMIN</li></a>
                        <a href="/" target="_blank"> <li class="nav-item  ml-5 font-weight-bold btn btn-primary">Visit Your Site</li></a>
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item"><a href="{{ url('/logout') }}" class="btn btn-sm btn-danger">Logout</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider mt-0" style="margin-bottom: 5px"></li>
                        <li> <a href="{{ url('/dashboard') }}"><span> <i class="fas fa-home"></i> </span><span class="hide-menu">Home</span></a></li>
                        <li> <a href="{{ url('/admin') }}"><span> <i class="fas fa-user"></i> </span><span class="hide-menu">Admin</span></a></li>
                        <li> <a href="{{ url('/visitor') }}"><span> <i class="fas fa-users"></i> </span><span class="hide-menu">Visitor</span></a></li>
                        <li> <a href="{{ url('/booking') }}"><span> <i class="fas fa-mail-bulk"></i></span><span class="hide-menu">Booking</span></a></li>
                        <li> <a href="{{ url('/newslatter') }}"><span> <i class="fas fa-bell"></i></span><span class="hide-menu">Newslatter</span></a></li>
                        <li> <a href="{{ url('/contact') }}"><span> <i class="fas fa-envelope"></i> </span><span class="hide-menu">Contact</span></a></li>
                        <li> <a href="{{ url('/slider') }}"><span> <i class="fas fa-image"></i> </span><span class="hide-menu">Slider</span></a></li>
                        <li> <a href="{{ url('/homePage') }}"><span> <i class="fas fa-igloo"></i> </span><span class="hide-menu">Home Page</span></a></li>
                        <li> <a href="{{ url('/adminAbout') }}"><span> <i class="fas fa-address-card"></i></i> </span><span class="hide-menu">About</span></a></li>
                        <li> <a href="{{ url('/resturantPage') }}"><span> <i class="fas fa-utensils"></i> </span><span class="hide-menu">Resturant</span></a></li>
                        <li> <a href="{{ url('/others') }}"><span> <i class="fas fa-cog"></i> </span><span class="hide-menu">Generale Settings</span></a></li>
                        <li> <a href="{{ url('/social') }}"><span> <i class="fas fa-thumbs-up"></i> </span><span class="hide-menu">Social Settings</span></a></li>
                      
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-wrapper">
