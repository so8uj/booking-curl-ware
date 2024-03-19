<header class="bg-body-tertiary">
    <div class="container">
        <nav class="navbar navbar-expand-lg justify-content-between">
            <a class="navbar-brand" href="{{ url('/') }}">
                <h3 class="fw-bold">Booking Website</h3>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavDropdown">

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active fs-5" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5" href="{{ url('/') }}#hotels">Hotels</a>
                    </li>
                </ul>

            </div>

            <div class="login-buttons">
                @auth
                    <ul class="navbar-nav">
                        
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('/user-dashboard') }}">User Dashboard</a></li>
                            <li><a class="dropdown-item" href="{{ url('/logout') }}">Logout</a></li>
                        </ul>
                        </li>
                    </ul>
                @endauth
                @guest
                    <a href="{{ url('/login') }}" class="btn btn-primary">Login</a>
                    <a href="{{ url('/registration') }}" class="btn btn-primary">Register</a>
                    
                @endguest
                
            </div>
            
        </nav>

    </div>
</header>