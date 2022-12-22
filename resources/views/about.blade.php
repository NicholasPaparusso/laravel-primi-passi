<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Scada:wght@400;700&display=swap" rel="stylesheet">
    <title>about</title>
</head>
<body>

    <header>
        <div class="container">
            <h1>
                {{$title}}
            </h1>

            <nav>
                <ul>
                    @foreach ($navLinks as $navLink )
                        @if ($loop->first)
                            <li><a href="/">{{$navLink}}</a></li>
                        @elseif ($loop->last)
                            <li><a href="/about">{{$navLink}}</a></li>
                        @else
                            <li><a href="#">{{$navLink}}</a></li>
                        @endif
                    @endforeach
                </ul>
            </nav>

        </div>
    </header>
    <main>

    </main>
</body>
</html>
