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

    <div class="container my-4">
        <h1>{{ $title }}</h1>
        <h3 class="my-4">{{ $subtitle }}</h3>

        <h5 class="mb-3">{{ $list_title }}</h5>

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