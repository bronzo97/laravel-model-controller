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
            <nav>
                <div class="container">
                    <div class="row">
                        <div class="col">Movies</div>
                        <div class="col">
                            <ul>
                                <li>Menu</li>
                                <li>Contacts</li>
                                <li>About us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            <div class="container">
                <div class="row">
                    @foreach ($movies as $movie)
                        <div class="col-3 gap-1">
                            <div class="card" style="width: 18rem;">
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