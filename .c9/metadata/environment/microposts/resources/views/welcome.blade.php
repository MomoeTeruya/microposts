{"filter":false,"title":"welcome.blade.php","tooltip":"/microposts/resources/views/welcome.blade.php","undoManager":{"mark":11,"position":11,"stack":[[{"start":{"row":0,"column":0},"end":{"row":95,"column":0},"action":"remove","lines":["<!doctype html>","<html lang=\"{{ app()->getLocale() }}\">","    <head>","        <meta charset=\"utf-8\">","        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">","        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">","","        <title>Laravel</title>","","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Raleway:100,600\" rel=\"stylesheet\" type=\"text/css\">","","        <!-- Styles -->","        <style>","            html, body {","                background-color: #fff;","                color: #636b6f;","                font-family: 'Raleway', sans-serif;","                font-weight: 100;","                height: 100vh;","                margin: 0;","            }","","            .full-height {","                height: 100vh;","            }","","            .flex-center {","                align-items: center;","                display: flex;","                justify-content: center;","            }","","            .position-ref {","                position: relative;","            }","","            .top-right {","                position: absolute;","                right: 10px;","                top: 18px;","            }","","            .content {","                text-align: center;","            }","","            .title {","                font-size: 84px;","            }","","            .links > a {","                color: #636b6f;","                padding: 0 25px;","                font-size: 12px;","                font-weight: 600;","                letter-spacing: .1rem;","                text-decoration: none;","                text-transform: uppercase;","            }","","            .m-b-md {","                margin-bottom: 30px;","            }","        </style>","    </head>","    <body>","        <div class=\"flex-center position-ref full-height\">","            @if (Route::has('login'))","                <div class=\"top-right links\">","                    @auth","                        <a href=\"{{ url('/home') }}\">Home</a>","                    @else","                        <a href=\"{{ route('login') }}\">Login</a>","                        <a href=\"{{ route('register') }}\">Register</a>","                    @endauth","                </div>","            @endif","","            <div class=\"content\">","                <div class=\"title m-b-md\">","                    Laravel","                </div>","","                <div class=\"links\">","                    <a href=\"https://laravel.com/docs\">Documentation</a>","                    <a href=\"https://laracasts.com\">Laracasts</a>","                    <a href=\"https://laravel-news.com\">News</a>","                    <a href=\"https://forge.laravel.com\">Forge</a>","                    <a href=\"https://github.com/laravel/laravel\">GitHub</a>","                </div>","            </div>","        </div>","    </body>","</html>",""],"id":2}],[{"start":{"row":0,"column":0},"end":{"row":8,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","    <div class=\"center jumbotron\">","        <div class=\"text-center\">","            <h1>Welcome to the Microposts</h1>","        </div>","    </div>","@endsection"],"id":3}],[{"start":{"row":5,"column":46},"end":{"row":6,"column":0},"action":"insert","lines":["",""],"id":4},{"start":{"row":6,"column":0},"end":{"row":6,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":6,"column":12},"end":{"row":6,"column":108},"action":"insert","lines":["{!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}"],"id":5}],[{"start":{"row":2,"column":19},"end":{"row":3,"column":0},"action":"insert","lines":["",""],"id":6},{"start":{"row":3,"column":0},"end":{"row":4,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":4,"column":0},"end":{"row":7,"column":9},"action":"insert","lines":[" @if (Auth::check())","        <?php $user = Auth::user(); ?>","        {{ $user->name }}","    @else"],"id":7}],[{"start":{"row":13,"column":10},"end":{"row":14,"column":0},"action":"insert","lines":["",""],"id":8},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":14,"column":4},"end":{"row":14,"column":5},"action":"insert","lines":["@"],"id":9},{"start":{"row":14,"column":5},"end":{"row":14,"column":6},"action":"insert","lines":["e"]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"insert","lines":["n"]}],[{"start":{"row":14,"column":7},"end":{"row":14,"column":8},"action":"insert","lines":["d"],"id":10},{"start":{"row":14,"column":8},"end":{"row":14,"column":9},"action":"insert","lines":["i"]},{"start":{"row":14,"column":9},"end":{"row":14,"column":10},"action":"insert","lines":["f"]}],[{"start":{"row":4,"column":1},"end":{"row":4,"column":2},"action":"insert","lines":[" "],"id":11},{"start":{"row":4,"column":2},"end":{"row":4,"column":3},"action":"insert","lines":[" "]}],[{"start":{"row":0,"column":0},"end":{"row":15,"column":11},"action":"remove","lines":["@extends('layouts.app')","","@section('content')","","   @if (Auth::check())","        <?php $user = Auth::user(); ?>","        {{ $user->name }}","    @else","    <div class=\"center jumbotron\">","        <div class=\"text-center\">","            <h1>Welcome to the Microposts</h1>","            {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}","        </div>","    </div>","    @endif","@endsection"],"id":12}],[{"start":{"row":0,"column":0},"end":{"row":21,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","    @if (Auth::check())","        <div class=\"row\">","            <aside class=\"col-md-4\">","            </aside>","            <div class=\"col-xs-8\">","                @if (count($microposts) > 0)","                    @include('microposts.microposts', ['microposts' => $microposts])","                @endif","            </div>","        </div>","    @else","        <div class=\"center jumbotron\">","            <div class=\"text-center\">","                <h1>Welcome to the Microposts</h1>","                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}","            </div>","        </div>","    @endif","@endsection"],"id":13}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":21,"column":11},"end":{"row":21,"column":11},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1528171829363,"hash":"49382dfabc3bd4927ced98d25e649c343fbdad79"}