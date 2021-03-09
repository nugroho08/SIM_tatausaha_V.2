<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>

        <link rel="shortcut icon" href="assets/images/iconwk.png">
        <link href="assets/plugins/morris/morris.css" rel="stylesheet">

        @yield('css')

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

        <style>
            input{height:30px;opacity:.5;}
            textarea{height:30px;opacity:.5;}
        </style>
    </head>

    <body>
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <div class="logo">
                        <a class="logo">
                            <img src="assets/images/iconwk.png" alt="" height="20" class="logo-small">
                            <img src="assets/images/iconwk.png" alt="" height="32" class="logo-large">
                        </a>
                    </div>

                    <div class="menu-extras topbar-custom">
                        <ul class="list-inline float-right mb-0">
                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown">
                                   {{Auth::user()->name}} <i class="mdi mdi-chevron-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <div class="dropdown-item noti-title">
                                        <h5>Welcome</h5>
                                    </div>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i>{{Auth::user()->name}}</a>
                                    <div class="dropdown-divider"></div>

                                    <form action="{{route('logout')}}" method="POST" method="POST" onclick="return confirm('Anda yakin ingin keluar ?');">
                                        @csrf
                                        <button class="dropdown-item btn btn-link" type="submit"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</button>
                                        {{-- <button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-confirm">Click me</button> --}}
                                    </form>

                                </div>
                            </li>
                            <li class="menu-item list-inline-item">
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            @yield('nav-bar')
            
        </header>

        <div class="wrapper">
            <div class="container-fluid">

                @yield('containt')
                
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        © 2021 SMK Wikrama 1 Garut.
                    </div>
                </div>
            </div>
        </footer>

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        
        <script src="assets/pages/dashborad.js"></script>

        <script src="assets/plugins/alertify/js/alertify.js"></script>
        <script src="assets/pages/alertify-init.js"></script>

        @yield('js')

        <script src="assets/js/app.js"></script>

        <script>
            if (typeof Skycons !== 'undefined'){
            var icons = new Skycons(
               {"color": "#fff"},
               {"resizeClear": true}
               ),
                   list  = [
                       "clear-day", "clear-night", "partly-cloudy-day",
                       "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                       "fog"
                   ],
                   i;

               for(i = list.length; i--; )
               icons.set(list[i], list[i]);
               icons.play();
           };

            $(document).ready(function() {
            
            $("#boxscroll").niceScroll({cursorborder:"",cursorcolor:"#cecece",boxzoom:true});
            $("#boxscroll2").niceScroll({cursorborder:"",cursorcolor:"#cecece",boxzoom:true}); 
            
            });
       </script>
    </body>
</html>