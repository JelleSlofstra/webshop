<nav class="navbar navbar-expand-md navbar-dark bg-primary shadow-sm">
    <div class="container">
        <a class="navbar-logo" href="{{ url('/') }}">
            <img src="../images/logo.png" class="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                @isset($categories)
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/" id="categoryDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categorieen
                        </a>
                        <div class="dropdown-menu" aria-labelledby="categoryDropdown">
                            @foreach($categories as $navcat)
                                <a class="dropdown-item"
                                    href="{{ route('categories.show', $navcat) }}">{{ $navcat->name }}</a>
                            @endforeach
                        </div>
                    </li>
                @endisset

                @isset($manufacturers)
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/" id="manufacturerDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Merken
                        </a>
                        <div class="dropdown-menu" aria-labelledby="manufacturerDropdown">
                            @foreach($manufacturers as $navmanu)
                                <a class="dropdown-item"
                                    href="{{ route('manufacturers.show', $navmanu) }}">{{ $navmanu->name }}</a>
                            @endforeach
                        </div>
                    </li>
                @endisset
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="relative flex lg:inline-flex items-center rounded-xl mt-1">
                    <form method="GET" action='/#'>
                        <input type="text" name="search" placeholder="Zoek Iets"
                            class="placeholder-black font-semibold text-sm">
                    </form>
                </li>
                <!-- Authentication Links -->
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <i class="fas fa-user"></i>
                        <div class="d-md-none">Gebruiker</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        @guest
                            @if(Route::has('login'))
                                <a class="dropdown-item"
                                    href="{{ route('login') }}">{{ __('Login') }}</a>
                            @endif

                            @if(Route::has('register'))
                                <a class="dropdown-item"
                                    href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        @else
                            <a class="dropdown-item" href="{{ route('orders.index') }}">
                                Order-overzicht
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                    </div>
                </li>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                @endguest

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cart') }}" id="cart" role="button"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-shopping-cart"></i>
                        <div class="d-md-none">Winkelwagen</div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
