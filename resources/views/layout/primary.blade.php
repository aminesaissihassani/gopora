<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gopora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('ressources/css/app.css') }}">
</head>
<body>
    <!-- ####################################################### -->
    <!-- Navbar Start -->
    <!-- ####################################################### -->

    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container-fluid">
            <a class="navbar-brand" style="font-family: 'Comic Sans MS', 'Arial'" href="{{ route('home') }}">Gopora</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-dark" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Articles</a>
                    </li>
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    @endauth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-auth">
                    @auth
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="post" class="nav-link">
                            @csrf
                            <button type="submit" class="btn btn-auth">Logout</button>
                        </form>
                    </li>
                    @endauth
                    @guest
                    <li class="nav-item px-1">
                        <a class="nav-link btn btn-auth" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-auth" href="{{ route('register') }}">Register</a>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <!-- ####################################################### -->
    <!-- Navbar End -->
    <!-- ####################################################### -->


    @yield('content')


    <!-- ####################################################### -->
    <!-- Footer Start -->
    <!-- ####################################################### -->

    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="row mb-4" style="font-family: 'Comic Sans MS', 'Arial'"><strong>Gopora</strong></div>
                    <p>The best site for the esports news in the world!</p>
                </div>
                <div class="col-3">
                    <div class="row mb-4"><strong>Games</strong></div>
                    <p>League Of Legends</p>
                    <p>Valorant</p>
                </div>
                <div class="col-3">
                    <div class="row mb-4"><strong>Legal</strong></div>
                    <p><a href="{{ route('privacy') }}" style="text-decoration: none; color: white;">Privacy Policy</a></p>
                    <p><a href="{{ route('terms') }}" style="text-decoration: none; color: white;">Terms and Conditions</a></p>
                </div>
                <div class="col-3">
                    <div class="row mb-4"><strong>Contact</strong></div>
                    <p><i class="fas fa-home mr-3"></i> El Jadida, Morocco</p>
                    <p><i class="fas fa-envelope mr-3"></i> contact@gopora.com</p>
                    <p><i class="fas fa-phone mr-3"></i> +212 708 2001 15</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- ####################################################### -->
    <!-- Footer End -->
    <!-- ####################################################### -->

    <!-- Scrpits Start-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Scrpits End-->
</body>
</html>
