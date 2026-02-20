<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

</body>
<div class="container">
    <h1>Movies</h1>

    <div class="row">
        @foreach ($movies as $movie)
        <div class="col-4">
            <div class="card mb-3">
                <div class="card-header alert alert-primary fw-bold text-primary">{{ $movie->title }}</div>
                <div class="card-body">
                    <h6 class="mb-2 text-muted">{{ $movie->original_title }}</h6>
                    <p class="card-text">{{ $movie->nationality }}</p>
                    <p class="card-text fw-bold">{{ $movie->date }}</p>
                </div>
                <div class="card-footer fw-bold alert alert-primary mb-0 text-primary">
                    <p>rating:
                        @for($i = 1; $i <= round($movie->vote); $i++)
                            <i class="bi bi-star-fill text-primary"></i>
                            @endfor

                            @for($i = round($movie->vote); $i < 10; $i++)
                                <i class="bi bi-star text-primary"></i>
                                @endfor
                    </p>
                </div>
            </div>
        </div>
        @endforeach

</html>