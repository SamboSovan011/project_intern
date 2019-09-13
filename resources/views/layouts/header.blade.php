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

    #searchbar {
        border-radius: 20px;
    }
</style>

<nav class="navbar navbar-expand-md navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="img/potted-pan_logo_full.jpg" class="d-inline-block align-top" alt="logo">
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#Navbar" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="Navbar">
            <form class="form-inline" action="">
                <input id="searchbar" class="form-control mr-sm-2" type="text" placeholder="Search">
            </form>

            <ul class="nav navbar-nav">
                <li class="nav-item">
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
                <li class="nav-item">
                <a href="{{route('SignUp')}}" class="nav-link"><i class="fas fa-user-plus pr-1"></i>Sign Up</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link"><i class="fas fa-sign-in-alt pr-1"></i>Login</a>
                </li>
            </ul>
        </div>

    </div>
</nav>
