<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Özel CSS dosyalarınızı burada ekleyebilirsiniz -->

    <link rel="stylesheet" href="{{asset('/')}}assets/css/style.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-qvYABN2NvZLl0tG4eTRvppRT/1g1Ie3e4xXu5jQlFOG+rnWiA/DOyF42nA+iSP2H" crossorigin="anonymous">
</head>
<body>
<!-- Navbar -->


<nav class="navbar navbar-expand-md navbar-dark" >
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('index')}}">
            <img src="{{asset('/')}}assets/images/white-logo.png" alt="Thia Online Logo">
        </a>


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Ana Sayfa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Haberler</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sıralama</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">İndir</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Ödüller</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


@yield('content')


<!-- Bootstrap JS ve diğer JS dosyalarınızı burada ekleyebilirsiniz -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
