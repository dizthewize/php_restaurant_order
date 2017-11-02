<nav class="navbar navbar-custom navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }} <i class="ion-wineglass" aria-hidden="true"></i>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/contact')}}">Contact</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
              {{-- <li><a href=""><i class="ion-ios-cart-outline" aria-hidden="true"></i> <span class="alert badge"> 8</span></a></li> --}}
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}"><i class="ion-person" aria-hidden="true"></i> Login</a></li>
                    <li><a href="{{ route('register') }}"><i class="ion-person-add" aria-hidden="true"></i> Register</a></li>
                @else
                    <li>
                      <a class="cart" href="{{route('cart.index')}}">
                        <i class="ion-ios-cart-outline" aria-hidden="true"></i><span class="alert badge">{{Cart::count()}}</span>
                      </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                          @role('superadministrator|administrator')
                            <li>
                              <a href="{{route('manage.dashboard')}}">
                              <span><i class="ion-ios-cog">
                              </i>
                              </span>Manage
                              </a>
                            </li>
                          @endrole

                          <li>
                              <a href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                  Logout
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                              </form>
                          </li>
                      </ul>
                    </li>
                 @endif
            </ul>
        </div>
    </div>
</nav>
