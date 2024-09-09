<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>laravel-primi-passi</title>
</head>
<body>
    
    <div class="container my-4 p-5 bg-danger-subtle">
        <!-- barra navigazione -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link fs-3 me-5" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link fs-3 me-5" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link fs-3 me-5" href="/characteristics">Characteristics</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link fs-3 me-5" href="/account">Account</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>

        <h1 class="text-center my-5">{{ $title }}</h1>

        <h5 class="mb-4">{{ $list_title }}</h5>

        @if(count($list) > 0)
            <ul>
            @foreach($list as $item)
                    <li>{{ $item }}</li>
            @endforeach
            </ul>
        @else
            <h6>Non ci sono liste da mostrare</h6>
        @endif  
    </div>

</body>
</html>