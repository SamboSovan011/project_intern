<style>
    .navbar-brand img {
        width: 20vh;
        height: auto;
    }

    .nav-item {
        list-style: none;
    }

    .navbar {
        background: white !important;
    }

    /* .nav-item a{
        color: red !important;
    } */
</style>

<nav class="navbar navbar-expand-md navbar-light">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="img/potted-pan_logo_full.jpg" class="d-inline-block align-top" alt="logo">
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#Navbar" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="Navbar">

            <ul class="nav navbar-nav">
                <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">New Arrivals</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Promotion</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Service</a>
                </li>

            </ul>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item ">
                    <a href="" class="nav-link"><i class="fas fa-search"></i></a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link"><i class="fas fa-bell"></i></a>
                </li>
                <li class="nav-item {{request()->routeIs('Login') ? 'active' : ''}}">
                    <a href="{{route('login')}}" class="nav-link"><i class="fas fa-user"></i></a>
                </li>
            </ul>
        </div>

    </div>
</nav>
