<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="{{ asset('csss/style.css') }}"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-3">
        @auth
            {{ Auth::user()->name }}
            <a href="{{ route('blog.index') }}">Go to dashboard</a>
        @endauth
        @guest
        @if (Route::has('login'))
            <a href="{{ route('login') }}">Login</a>
        @endif
        @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
        @endif

        @endguest
        <h1 class="text-primary">Blogs</h1>

        <div class="row">

            @foreach ($blogs as $blog)

                <div class="col-sm-12 mt-1">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <h5 class="card-title">{{ $blog->title }}</h5>
                            <p class="card-text">{{ $blog->description }}</p>
                            <a href="#" class="btn btn-primary">View</a>
                        </div>
                    </div>
                </div>
            @endforeach



        </div>
    </div>

</body>

</html>
