<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{setting('site.title')}}</title>

    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>

    @section('sidebar')
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">{{setting('site.title')}}</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('musica.index')}}">Musicas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('artista.index')}}">Artistas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Interpretações</a>
                        </li>    
                        <li class="nav-item">
                            <a class="nav-link" href="#">Ritmos</a>
                        </li> 
                    </ul>
                </div>
            </div>
        </nav>
    @show
    
    <div class="container">
        @yield('container')
    </div>
<script src="/js/bootstrap.bundle.js"></script>
</body>
</html>