<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DevMarketer</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="nav has-shadow">
            <div class="container">
              <div class="nav-left">
                  <a href="{{ route('home') }}" class="nav-item">
                    <img src="{{ asset('/images/logo.png') }}" alt="Aztutos Logo">
                  </a>
                  <a href="#" class="nav-item is-tab is-hidden-mobile">Learn</a>
                  <a href="#" class="nav-item is-tab is-hidden-mobile">Discuss</a>
                  <a href="#" class="nav-item is-tab is-hidden-mobile">Share</a>
              </div>

              <div class="nav-right" style="overflow: visible;">
                  @if(!Auth::guest())
                      <a href="#" class="nav-item is-open is-tab">Login</a>
                      <a href="#" class="nav-item is-tab">Join us community</a>
                  @else

                  <!--  <div class="dropdown is-open is-aligned-right m-t-10">
                          <div class="dropdown-trigger">
                                <button class="button" aria-haspopup="true" aria-controls="dropdown-menu">
                                  <span>Hi! Othmane.</span>
                                  <span class="icon is-small">
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                  </span>
                                </button>
                          </div>
                          <div class="dropdown-menu" id="dropdown-menu" role="menu">
                                <div class="dropdown-content">
                                  <a href="#" class="dropdown-item">
                                    Profile
                                  </a>
                                  <a class="dropdown-item">
                                    Notifications
                                  </a>
                                  <a href="#" class="dropdown-item">
                                    Settings
                                  </a>
                                  <hr class="dropdown-divider">
                                  <a href="#" class="dropdown-item">
                                    Log out
                                  </a>
                                </div>
                          </div>
                     </div> -->

                      <button class="dropdown nav-item is-tab is-aligned-right" id="dropdown">
                          Hi Othmane <span class="icon"><i class="fa fa-caret-down"></i></span>
                          <ul class="dropdown-menu">
                              <li><a href="#">
                                  <span><i class="fa fa-fw m-r-10 fa-user-circle-o"></i><span>
                                  Profile</a>
                              </li>
                              <li><a href="#">
                                  <span><i class="fa fa-fw m-r-10 fa-bell"></i><span>
                                  Notifications</a>
                              </li>
                              <li><a href="#">
                                  <span><i class="fa fa-fw m-r-10 fa-cog"></i><span>
                                  Settings</a>
                              </li>
                              <hr class="dropdown-divider">
                              <li><a href="#">
                                  <span><i class="fa fa-fw m-r-10 fa-sign-out"></i><span>
                                  Log out</a>
                              </li>
                          </ul>
                      </button>
                  @endif

              </div>

             </div>
        </nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
