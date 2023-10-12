<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('setting') }}">Setting</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Informasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown link
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="bg-dark text-white mt-5">
        <div class="container py-4">
            <div class="row">
                <div class="col-md-4">
                    <h5>Lokasi</h5>
                    <p>Jl. Contoh No. 123</p>
                    <p>Kota Contoh</p>
                    <p>12345</p>
                </div>
                <div class="col-md-4">
                    <h5>Kontak</h5>
                    <p>Telepon: (123) 456-7890</p>
                    <p>Fax: (123) 456-7890</p>
                </div>
                <div class="col-md-4">
                    <h5>Email</h5>
                    <p>info@example.com</p>
                </div>
            </div>
        </div>
        <div class="container">
            <iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12345.678901234567!2dLongitude!3dLatitude!4f13.5!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTjCsDQ0JzQwLjUiTiA2MMKwMTInMTUuMiJF!5e0!3m2!1sid_ID!2sid_ID!4v1632868275345!5m2!1sid_ID!2sid_ID"></iframe>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
