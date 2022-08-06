<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Movies</title>
</head>
<body>
        <header>
            <div class="conteiner d-flex justify-content-center">
                <h1 class="text-center m-5">Movies</h1>
            </div>
        </header>
        <main class="h-100">
            <div class="container h-100">
                <div class="row">
                    @foreach ($movies as $movie)
                        <div class="col-3 p-3">
                            <div class="card shadow p-5 d-flex text-center" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="cart-title">{{ $movie["title"] }}</h5>
                                    <p class="card-text">Vote:{{ $movie["vote"]}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </main>


<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>