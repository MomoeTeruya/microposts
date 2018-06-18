{"filter":false,"title":"welcome.blade.php","tooltip":"/kadai-tasklist/resources/views/welcome.blade.php","ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":14,"column":11},"end":{"row":14,"column":11},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":3,"state":"start","mode":"ace/mode/php"}},"hash":"aec4a69e01e6fd5c660ce9c7bf3ed0fc85d812b9","undoManager":{"mark":57,"position":57,"stack":[[{"start":{"row":0,"column":0},"end":{"row":95,"column":0},"action":"remove","lines":["<!doctype html>","<html lang=\"{{ app()->getLocale() }}\">","    <head>","        <meta charset=\"utf-8\">","        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">","        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">","","        <title>Laravel</title>","","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Raleway:100,600\" rel=\"stylesheet\" type=\"text/css\">","","        <!-- Styles -->","        <style>","            html, body {","                background-color: #fff;","                color: #636b6f;","                font-family: 'Raleway', sans-serif;","                font-weight: 100;","                height: 100vh;","                margin: 0;","            }","","            .full-height {","                height: 100vh;","            }","","            .flex-center {","                align-items: center;","                display: flex;","                justify-content: center;","            }","","            .position-ref {","                position: relative;","            }","","            .top-right {","                position: absolute;","                right: 10px;","                top: 18px;","            }","","            .content {","                text-align: center;","            }","","            .title {","                font-size: 84px;","            }","","            .links > a {","                color: #636b6f;","                padding: 0 25px;","                font-size: 12px;","                font-weight: 600;","                letter-spacing: .1rem;","                text-decoration: none;","                text-transform: uppercase;","            }","","            .m-b-md {","                margin-bottom: 30px;","            }","        </style>","    </head>","    <body>","        <div class=\"flex-center position-ref full-height\">","            @if (Route::has('login'))","                <div class=\"top-right links\">","                    @auth","                        <a href=\"{{ url('/home') }}\">Home</a>","                    @else","                        <a href=\"{{ route('login') }}\">Login</a>","                        <a href=\"{{ route('register') }}\">Register</a>","                    @endauth","                </div>","            @endif","","            <div class=\"content\">","                <div class=\"title m-b-md\">","                    Laravel","                </div>","","                <div class=\"links\">","                    <a href=\"https://laravel.com/docs\">Documentation</a>","                    <a href=\"https://laracasts.com\">Laracasts</a>","                    <a href=\"https://laravel-news.com\">News</a>","                    <a href=\"https://forge.laravel.com\">Forge</a>","                    <a href=\"https://github.com/laravel/laravel\">GitHub</a>","                </div>","            </div>","        </div>","    </body>","</html>",""],"id":2}],[{"start":{"row":0,"column":0},"end":{"row":8,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","    <div class=\"center jumbotron\">","        <div class=\"text-center\">","            <h1>Welcome to the Microposts</h1>","        </div>","    </div>","@endsection"],"id":3}],[{"start":{"row":8,"column":11},"end":{"row":8,"column":12},"action":"insert","lines":["g"],"id":4}],[{"start":{"row":5,"column":40},"end":{"row":5,"column":41},"action":"remove","lines":["s"],"id":5},{"start":{"row":5,"column":39},"end":{"row":5,"column":40},"action":"remove","lines":["t"]},{"start":{"row":5,"column":38},"end":{"row":5,"column":39},"action":"remove","lines":["s"]},{"start":{"row":5,"column":37},"end":{"row":5,"column":38},"action":"remove","lines":["o"]},{"start":{"row":5,"column":36},"end":{"row":5,"column":37},"action":"remove","lines":["p"]},{"start":{"row":5,"column":35},"end":{"row":5,"column":36},"action":"remove","lines":["o"]},{"start":{"row":5,"column":34},"end":{"row":5,"column":35},"action":"remove","lines":["r"]},{"start":{"row":5,"column":33},"end":{"row":5,"column":34},"action":"remove","lines":["c"]},{"start":{"row":5,"column":32},"end":{"row":5,"column":33},"action":"remove","lines":["i"]},{"start":{"row":5,"column":31},"end":{"row":5,"column":32},"action":"remove","lines":["M"]}],[{"start":{"row":5,"column":31},"end":{"row":5,"column":32},"action":"insert","lines":["T"],"id":11},{"start":{"row":5,"column":32},"end":{"row":5,"column":33},"action":"insert","lines":["a"]},{"start":{"row":5,"column":33},"end":{"row":5,"column":34},"action":"insert","lines":["s"]},{"start":{"row":5,"column":34},"end":{"row":5,"column":35},"action":"insert","lines":["k"]},{"start":{"row":5,"column":35},"end":{"row":5,"column":36},"action":"insert","lines":["l"]},{"start":{"row":5,"column":36},"end":{"row":5,"column":37},"action":"insert","lines":["i"]},{"start":{"row":5,"column":37},"end":{"row":5,"column":38},"action":"insert","lines":["s"]}],[{"start":{"row":5,"column":38},"end":{"row":5,"column":39},"action":"insert","lines":["t"],"id":12}],[{"start":{"row":8,"column":11},"end":{"row":8,"column":12},"action":"remove","lines":["g"],"id":15}],[{"start":{"row":5,"column":44},"end":{"row":6,"column":0},"action":"insert","lines":["",""],"id":16},{"start":{"row":6,"column":0},"end":{"row":6,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":6,"column":12},"end":{"row":6,"column":109},"action":"insert","lines":[" {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}"],"id":17}],[{"start":{"row":0,"column":0},"end":{"row":9,"column":11},"action":"remove","lines":["@extends('layouts.app')","","@section('content')","    <div class=\"center jumbotron\">","        <div class=\"text-center\">","            <h1>Welcome to the Tasklist</h1>","             {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}","        </div>","    </div>","@endsection"],"id":18}],[{"start":{"row":0,"column":0},"end":{"row":14,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","    @if (Auth::check())","        <?php $user = Auth::user(); ?>","        {{ $user->name }}","    @else","        <div class=\"center jumbotron\">","            <div class=\"text-center\">","                <h1>Welcome to the Microposts</h1>","                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}","            </div>","        </div>","    @endif","@endsection"],"id":19}],[{"start":{"row":9,"column":43},"end":{"row":9,"column":44},"action":"remove","lines":["t"],"id":20},{"start":{"row":9,"column":42},"end":{"row":9,"column":43},"action":"remove","lines":["s"]},{"start":{"row":9,"column":41},"end":{"row":9,"column":42},"action":"remove","lines":["o"]},{"start":{"row":9,"column":40},"end":{"row":9,"column":41},"action":"remove","lines":["p"]},{"start":{"row":9,"column":39},"end":{"row":9,"column":40},"action":"remove","lines":["o"]},{"start":{"row":9,"column":38},"end":{"row":9,"column":39},"action":"remove","lines":["r"]},{"start":{"row":9,"column":37},"end":{"row":9,"column":38},"action":"remove","lines":["c"]},{"start":{"row":9,"column":36},"end":{"row":9,"column":37},"action":"remove","lines":["i"]},{"start":{"row":9,"column":35},"end":{"row":9,"column":36},"action":"remove","lines":["M"]}],[{"start":{"row":9,"column":35},"end":{"row":9,"column":36},"action":"insert","lines":["T"],"id":21},{"start":{"row":9,"column":36},"end":{"row":9,"column":37},"action":"insert","lines":["s"]},{"start":{"row":9,"column":37},"end":{"row":9,"column":38},"action":"insert","lines":["k"]},{"start":{"row":9,"column":38},"end":{"row":9,"column":39},"action":"insert","lines":["l"]},{"start":{"row":9,"column":39},"end":{"row":9,"column":40},"action":"insert","lines":["i"]},{"start":{"row":9,"column":40},"end":{"row":9,"column":41},"action":"insert","lines":["s"]},{"start":{"row":9,"column":41},"end":{"row":9,"column":42},"action":"insert","lines":["t"]}],[{"start":{"row":9,"column":36},"end":{"row":9,"column":37},"action":"insert","lines":["a"],"id":22}],[{"start":{"row":9,"column":35},"end":{"row":9,"column":44},"action":"remove","lines":["Tasklists"],"id":23},{"start":{"row":9,"column":35},"end":{"row":9,"column":44},"action":"insert","lines":["Tasklists"]}],[{"start":{"row":0,"column":0},"end":{"row":14,"column":11},"action":"remove","lines":["@extends('layouts.app')","","@section('content')","    @if (Auth::check())","        <?php $user = Auth::user(); ?>","        {{ $user->name }}","    @else","        <div class=\"center jumbotron\">","            <div class=\"text-center\">","                <h1>Welcome to the Tasklists</h1>","                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}","            </div>","        </div>","    @endif","@endsection"],"id":24}],[{"start":{"row":0,"column":0},"end":{"row":21,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","    @if (Auth::check())","        <div class=\"row\">","            <aside class=\"col-md-4\">","            </aside>","            <div class=\"col-xs-8\">","                @if (count($microposts) > 0)","                    @include('microposts.microposts', ['microposts' => $microposts])","                @endif","            </div>","        </div>","    @else","        <div class=\"center jumbotron\">","            <div class=\"text-center\">","                <h1>Welcome to the Microposts</h1>","                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}","            </div>","        </div>","    @endif","@endsection"],"id":25}],[{"start":{"row":9,"column":39},"end":{"row":9,"column":40},"action":"remove","lines":["s"],"id":26},{"start":{"row":9,"column":38},"end":{"row":9,"column":39},"action":"remove","lines":["t"]},{"start":{"row":9,"column":37},"end":{"row":9,"column":38},"action":"remove","lines":["s"]},{"start":{"row":9,"column":36},"end":{"row":9,"column":37},"action":"remove","lines":["o"]},{"start":{"row":9,"column":35},"end":{"row":9,"column":36},"action":"remove","lines":["p"]},{"start":{"row":9,"column":34},"end":{"row":9,"column":35},"action":"remove","lines":["o"]},{"start":{"row":9,"column":33},"end":{"row":9,"column":34},"action":"remove","lines":["r"]},{"start":{"row":9,"column":32},"end":{"row":9,"column":33},"action":"remove","lines":["c"]},{"start":{"row":9,"column":31},"end":{"row":9,"column":32},"action":"remove","lines":["i"]},{"start":{"row":9,"column":30},"end":{"row":9,"column":31},"action":"remove","lines":["m"]}],[{"start":{"row":9,"column":30},"end":{"row":9,"column":31},"action":"insert","lines":["t"],"id":27},{"start":{"row":9,"column":31},"end":{"row":9,"column":32},"action":"insert","lines":["a"]},{"start":{"row":9,"column":32},"end":{"row":9,"column":33},"action":"insert","lines":["s"]},{"start":{"row":9,"column":33},"end":{"row":9,"column":34},"action":"insert","lines":["k"]},{"start":{"row":9,"column":34},"end":{"row":9,"column":35},"action":"insert","lines":["l"]},{"start":{"row":9,"column":35},"end":{"row":9,"column":36},"action":"insert","lines":["i"]},{"start":{"row":9,"column":36},"end":{"row":9,"column":37},"action":"insert","lines":["s"]},{"start":{"row":9,"column":37},"end":{"row":9,"column":38},"action":"insert","lines":["t"]}],[{"start":{"row":9,"column":38},"end":{"row":9,"column":39},"action":"insert","lines":["s"],"id":28}],[{"start":{"row":9,"column":48},"end":{"row":9,"column":49},"action":"remove","lines":["t"],"id":29},{"start":{"row":9,"column":47},"end":{"row":9,"column":48},"action":"remove","lines":["s"]},{"start":{"row":9,"column":46},"end":{"row":9,"column":47},"action":"remove","lines":["o"]},{"start":{"row":9,"column":45},"end":{"row":9,"column":46},"action":"remove","lines":["p"]},{"start":{"row":9,"column":44},"end":{"row":9,"column":45},"action":"remove","lines":["o"]},{"start":{"row":9,"column":43},"end":{"row":9,"column":44},"action":"remove","lines":["r"]},{"start":{"row":9,"column":42},"end":{"row":9,"column":43},"action":"remove","lines":["c"]},{"start":{"row":9,"column":41},"end":{"row":9,"column":42},"action":"remove","lines":["i"]},{"start":{"row":9,"column":40},"end":{"row":9,"column":41},"action":"remove","lines":["m"]}],[{"start":{"row":9,"column":40},"end":{"row":9,"column":41},"action":"insert","lines":["t"],"id":30},{"start":{"row":9,"column":41},"end":{"row":9,"column":42},"action":"insert","lines":["a"]},{"start":{"row":9,"column":42},"end":{"row":9,"column":43},"action":"insert","lines":["s"]},{"start":{"row":9,"column":43},"end":{"row":9,"column":44},"action":"insert","lines":["k"]},{"start":{"row":9,"column":44},"end":{"row":9,"column":45},"action":"insert","lines":["l"]},{"start":{"row":9,"column":45},"end":{"row":9,"column":46},"action":"insert","lines":["i"]},{"start":{"row":9,"column":46},"end":{"row":9,"column":47},"action":"insert","lines":["s"]},{"start":{"row":9,"column":47},"end":{"row":9,"column":48},"action":"insert","lines":["t"]}],[{"start":{"row":9,"column":62},"end":{"row":9,"column":63},"action":"remove","lines":["t"],"id":31},{"start":{"row":9,"column":61},"end":{"row":9,"column":62},"action":"remove","lines":["s"]},{"start":{"row":9,"column":60},"end":{"row":9,"column":61},"action":"remove","lines":["o"]},{"start":{"row":9,"column":59},"end":{"row":9,"column":60},"action":"remove","lines":["p"]},{"start":{"row":9,"column":58},"end":{"row":9,"column":59},"action":"remove","lines":["o"]},{"start":{"row":9,"column":57},"end":{"row":9,"column":58},"action":"remove","lines":["r"]},{"start":{"row":9,"column":56},"end":{"row":9,"column":57},"action":"remove","lines":["c"]},{"start":{"row":9,"column":55},"end":{"row":9,"column":56},"action":"remove","lines":["i"]},{"start":{"row":9,"column":54},"end":{"row":9,"column":55},"action":"remove","lines":["m"]}],[{"start":{"row":9,"column":54},"end":{"row":9,"column":55},"action":"insert","lines":["t"],"id":32},{"start":{"row":9,"column":55},"end":{"row":9,"column":56},"action":"insert","lines":["a"]},{"start":{"row":9,"column":56},"end":{"row":9,"column":57},"action":"insert","lines":["s"]},{"start":{"row":9,"column":57},"end":{"row":9,"column":58},"action":"insert","lines":["k"]},{"start":{"row":9,"column":58},"end":{"row":9,"column":59},"action":"insert","lines":["l"]},{"start":{"row":9,"column":59},"end":{"row":9,"column":60},"action":"insert","lines":["i"]},{"start":{"row":9,"column":60},"end":{"row":9,"column":61},"action":"insert","lines":["s"]},{"start":{"row":9,"column":61},"end":{"row":9,"column":62},"action":"insert","lines":["t"]}],[{"start":{"row":9,"column":77},"end":{"row":9,"column":78},"action":"remove","lines":["t"],"id":33},{"start":{"row":9,"column":76},"end":{"row":9,"column":77},"action":"remove","lines":["s"]},{"start":{"row":9,"column":75},"end":{"row":9,"column":76},"action":"remove","lines":["o"]},{"start":{"row":9,"column":74},"end":{"row":9,"column":75},"action":"remove","lines":["p"]},{"start":{"row":9,"column":73},"end":{"row":9,"column":74},"action":"remove","lines":["o"]},{"start":{"row":9,"column":72},"end":{"row":9,"column":73},"action":"remove","lines":["r"]},{"start":{"row":9,"column":71},"end":{"row":9,"column":72},"action":"remove","lines":["c"]},{"start":{"row":9,"column":70},"end":{"row":9,"column":71},"action":"remove","lines":["i"]},{"start":{"row":9,"column":69},"end":{"row":9,"column":70},"action":"remove","lines":["m"]}],[{"start":{"row":9,"column":69},"end":{"row":9,"column":70},"action":"insert","lines":["t"],"id":34},{"start":{"row":9,"column":70},"end":{"row":9,"column":71},"action":"insert","lines":["a"]},{"start":{"row":9,"column":71},"end":{"row":9,"column":72},"action":"insert","lines":["w"]},{"start":{"row":9,"column":72},"end":{"row":9,"column":73},"action":"insert","lines":["s"]},{"start":{"row":9,"column":73},"end":{"row":9,"column":74},"action":"insert","lines":["k"]},{"start":{"row":9,"column":74},"end":{"row":9,"column":75},"action":"insert","lines":["l"]},{"start":{"row":9,"column":75},"end":{"row":9,"column":76},"action":"insert","lines":["i"]},{"start":{"row":9,"column":76},"end":{"row":9,"column":77},"action":"insert","lines":["s"]},{"start":{"row":9,"column":77},"end":{"row":9,"column":78},"action":"insert","lines":["t"]}],[{"start":{"row":9,"column":77},"end":{"row":9,"column":78},"action":"remove","lines":["t"],"id":35},{"start":{"row":9,"column":76},"end":{"row":9,"column":77},"action":"remove","lines":["s"]},{"start":{"row":9,"column":75},"end":{"row":9,"column":76},"action":"remove","lines":["i"]},{"start":{"row":9,"column":74},"end":{"row":9,"column":75},"action":"remove","lines":["l"]},{"start":{"row":9,"column":73},"end":{"row":9,"column":74},"action":"remove","lines":["k"]},{"start":{"row":9,"column":72},"end":{"row":9,"column":73},"action":"remove","lines":["s"]},{"start":{"row":9,"column":71},"end":{"row":9,"column":72},"action":"remove","lines":["w"]}],[{"start":{"row":9,"column":71},"end":{"row":9,"column":72},"action":"insert","lines":["s"],"id":36},{"start":{"row":9,"column":72},"end":{"row":9,"column":73},"action":"insert","lines":["a"]}],[{"start":{"row":9,"column":72},"end":{"row":9,"column":73},"action":"remove","lines":["a"],"id":37}],[{"start":{"row":9,"column":72},"end":{"row":9,"column":73},"action":"insert","lines":["k"],"id":38},{"start":{"row":9,"column":73},"end":{"row":9,"column":74},"action":"insert","lines":["l"]},{"start":{"row":9,"column":74},"end":{"row":9,"column":75},"action":"insert","lines":["i"]},{"start":{"row":9,"column":75},"end":{"row":9,"column":76},"action":"insert","lines":["s"]},{"start":{"row":9,"column":76},"end":{"row":9,"column":77},"action":"insert","lines":["t"]}],[{"start":{"row":8,"column":36},"end":{"row":8,"column":37},"action":"remove","lines":["t"],"id":39},{"start":{"row":8,"column":35},"end":{"row":8,"column":36},"action":"remove","lines":["s"]},{"start":{"row":8,"column":34},"end":{"row":8,"column":35},"action":"remove","lines":["o"]},{"start":{"row":8,"column":33},"end":{"row":8,"column":34},"action":"remove","lines":["p"]},{"start":{"row":8,"column":32},"end":{"row":8,"column":33},"action":"remove","lines":["o"]},{"start":{"row":8,"column":31},"end":{"row":8,"column":32},"action":"remove","lines":["r"]},{"start":{"row":8,"column":30},"end":{"row":8,"column":31},"action":"remove","lines":["c"]},{"start":{"row":8,"column":29},"end":{"row":8,"column":30},"action":"remove","lines":["i"]},{"start":{"row":8,"column":28},"end":{"row":8,"column":29},"action":"remove","lines":["m"]}],[{"start":{"row":8,"column":28},"end":{"row":8,"column":29},"action":"insert","lines":["t"],"id":40},{"start":{"row":8,"column":29},"end":{"row":8,"column":30},"action":"insert","lines":["a"]},{"start":{"row":8,"column":30},"end":{"row":8,"column":31},"action":"insert","lines":["s"]},{"start":{"row":8,"column":31},"end":{"row":8,"column":32},"action":"insert","lines":["k"]},{"start":{"row":8,"column":32},"end":{"row":8,"column":33},"action":"insert","lines":["l"]},{"start":{"row":8,"column":33},"end":{"row":8,"column":34},"action":"insert","lines":["i"]},{"start":{"row":8,"column":34},"end":{"row":8,"column":35},"action":"insert","lines":["s"]},{"start":{"row":8,"column":35},"end":{"row":8,"column":36},"action":"insert","lines":["t"]}],[{"start":{"row":16,"column":43},"end":{"row":16,"column":44},"action":"remove","lines":["t"],"id":41},{"start":{"row":16,"column":42},"end":{"row":16,"column":43},"action":"remove","lines":["s"]},{"start":{"row":16,"column":41},"end":{"row":16,"column":42},"action":"remove","lines":["o"]},{"start":{"row":16,"column":40},"end":{"row":16,"column":41},"action":"remove","lines":["p"]},{"start":{"row":16,"column":39},"end":{"row":16,"column":40},"action":"remove","lines":["o"]},{"start":{"row":16,"column":38},"end":{"row":16,"column":39},"action":"remove","lines":["r"]},{"start":{"row":16,"column":37},"end":{"row":16,"column":38},"action":"remove","lines":["c"]},{"start":{"row":16,"column":36},"end":{"row":16,"column":37},"action":"remove","lines":["i"]},{"start":{"row":16,"column":35},"end":{"row":16,"column":36},"action":"remove","lines":["M"]}],[{"start":{"row":16,"column":35},"end":{"row":16,"column":36},"action":"insert","lines":["T"],"id":42},{"start":{"row":16,"column":36},"end":{"row":16,"column":37},"action":"insert","lines":["a"]},{"start":{"row":16,"column":37},"end":{"row":16,"column":38},"action":"insert","lines":["s"]},{"start":{"row":16,"column":38},"end":{"row":16,"column":39},"action":"insert","lines":["k"]},{"start":{"row":16,"column":39},"end":{"row":16,"column":40},"action":"insert","lines":["l"]},{"start":{"row":16,"column":40},"end":{"row":16,"column":41},"action":"insert","lines":["i"]},{"start":{"row":16,"column":41},"end":{"row":16,"column":42},"action":"insert","lines":["s"]},{"start":{"row":16,"column":42},"end":{"row":16,"column":43},"action":"insert","lines":["t"]}],[{"start":{"row":0,"column":0},"end":{"row":21,"column":11},"action":"remove","lines":["@extends('layouts.app')","","@section('content')","    @if (Auth::check())","        <div class=\"row\">","            <aside class=\"col-md-4\">","            </aside>","            <div class=\"col-xs-8\">","                @if (count($tasklists) > 0)","                    @include('tasklists.tasklists', ['tasklists' => $tasklists])","                @endif","            </div>","        </div>","    @else","        <div class=\"center jumbotron\">","            <div class=\"text-center\">","                <h1>Welcome to the Tasklists</h1>","                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}","            </div>","        </div>","    @endif","@endsection"],"id":43}],[{"start":{"row":0,"column":0},"end":{"row":86,"column":7},"action":"insert","lines":["<!doctype html>","<html lang=\"{{ app()->getLocale() }}\">","    <head>","        <meta charset=\"utf-8\">","        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">","        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">","","        <title>Laravel</title>","","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Raleway:100,600\" rel=\"stylesheet\" type=\"text/css\">","","        <!-- Styles -->","        <style>","            html, body {","                background-color: #fff;","                color: #636b6f;","                font-family: 'Raleway', sans-serif;","                font-weight: 100;","                height: 100vh;","                margin: 0;","            }","            .full-height {","                height: 100vh;","            }","            .flex-center {","                align-items: center;","                display: flex;","                justify-content: center;","            }","            .position-ref {","                position: relative;","            }","            .top-right {","                position: absolute;","                right: 10px;","                top: 18px;","            }","            .content {","                text-align: center;","            }","            .title {","                font-size: 84px;","            }","            .links > a {","                color: #636b6f;","                padding: 0 25px;","                font-size: 12px;","                font-weight: 600;","                letter-spacing: .1rem;","                text-decoration: none;","                text-transform: uppercase;","            }","            .m-b-md {","                margin-bottom: 30px;","            }","        </style>","    </head>","    <body>","        <div class=\"flex-center position-ref full-height\">","            @if (Route::has('login'))","                <div class=\"top-right links\">","                    @auth","                        <a href=\"{{ url('/home') }}\">Home</a>","                    @else","                        <a href=\"{{ route('login') }}\">Login</a>","                        <a href=\"{{ route('register') }}\">Register</a>","                    @endauth","                </div>","            @endif","","            <div class=\"content\">","                <div class=\"title m-b-md\">","                    Laravel","                </div>","","                <div class=\"links\">","                    <a href=\"https://laravel.com/docs\">Documentation</a>","                    <a href=\"https://laracasts.com\">Laracasts</a>","                    <a href=\"https://laravel-news.com\">News</a>","                    <a href=\"https://forge.laravel.com\">Forge</a>","                    <a href=\"https://github.com/laravel/laravel\">GitHub</a>","                </div>","            </div>","        </div>","    </body>","</html>"],"id":44}],[{"start":{"row":86,"column":7},"end":{"row":87,"column":0},"action":"insert","lines":["",""],"id":45}],[{"start":{"row":0,"column":0},"end":{"row":87,"column":0},"action":"remove","lines":["<!doctype html>","<html lang=\"{{ app()->getLocale() }}\">","    <head>","        <meta charset=\"utf-8\">","        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">","        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">","","        <title>Laravel</title>","","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Raleway:100,600\" rel=\"stylesheet\" type=\"text/css\">","","        <!-- Styles -->","        <style>","            html, body {","                background-color: #fff;","                color: #636b6f;","                font-family: 'Raleway', sans-serif;","                font-weight: 100;","                height: 100vh;","                margin: 0;","            }","            .full-height {","                height: 100vh;","            }","            .flex-center {","                align-items: center;","                display: flex;","                justify-content: center;","            }","            .position-ref {","                position: relative;","            }","            .top-right {","                position: absolute;","                right: 10px;","                top: 18px;","            }","            .content {","                text-align: center;","            }","            .title {","                font-size: 84px;","            }","            .links > a {","                color: #636b6f;","                padding: 0 25px;","                font-size: 12px;","                font-weight: 600;","                letter-spacing: .1rem;","                text-decoration: none;","                text-transform: uppercase;","            }","            .m-b-md {","                margin-bottom: 30px;","            }","        </style>","    </head>","    <body>","        <div class=\"flex-center position-ref full-height\">","            @if (Route::has('login'))","                <div class=\"top-right links\">","                    @auth","                        <a href=\"{{ url('/home') }}\">Home</a>","                    @else","                        <a href=\"{{ route('login') }}\">Login</a>","                        <a href=\"{{ route('register') }}\">Register</a>","                    @endauth","                </div>","            @endif","","            <div class=\"content\">","                <div class=\"title m-b-md\">","                    Laravel","                </div>","","                <div class=\"links\">","                    <a href=\"https://laravel.com/docs\">Documentation</a>","                    <a href=\"https://laracasts.com\">Laracasts</a>","                    <a href=\"https://laravel-news.com\">News</a>","                    <a href=\"https://forge.laravel.com\">Forge</a>","                    <a href=\"https://github.com/laravel/laravel\">GitHub</a>","                </div>","            </div>","        </div>","    </body>","</html>",""],"id":46}],[{"start":{"row":0,"column":0},"end":{"row":8,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","    <div class=\"center jumbotron\">","        <div class=\"text-center\">","            <h1>Welcome to the Microposts</h1>","        </div>","    </div>","@endsection"],"id":47}],[{"start":{"row":5,"column":39},"end":{"row":5,"column":40},"action":"remove","lines":["t"],"id":48},{"start":{"row":5,"column":38},"end":{"row":5,"column":39},"action":"remove","lines":["s"]},{"start":{"row":5,"column":37},"end":{"row":5,"column":38},"action":"remove","lines":["o"]},{"start":{"row":5,"column":36},"end":{"row":5,"column":37},"action":"remove","lines":["p"]},{"start":{"row":5,"column":35},"end":{"row":5,"column":36},"action":"remove","lines":["o"]},{"start":{"row":5,"column":34},"end":{"row":5,"column":35},"action":"remove","lines":["r"]},{"start":{"row":5,"column":33},"end":{"row":5,"column":34},"action":"remove","lines":["c"]},{"start":{"row":5,"column":32},"end":{"row":5,"column":33},"action":"remove","lines":["i"]},{"start":{"row":5,"column":31},"end":{"row":5,"column":32},"action":"remove","lines":["M"]}],[{"start":{"row":5,"column":31},"end":{"row":5,"column":32},"action":"insert","lines":["T"],"id":49},{"start":{"row":5,"column":32},"end":{"row":5,"column":33},"action":"insert","lines":["a"]},{"start":{"row":5,"column":33},"end":{"row":5,"column":34},"action":"insert","lines":["s"]},{"start":{"row":5,"column":34},"end":{"row":5,"column":35},"action":"insert","lines":["k"]},{"start":{"row":5,"column":35},"end":{"row":5,"column":36},"action":"insert","lines":["l"]},{"start":{"row":5,"column":36},"end":{"row":5,"column":37},"action":"insert","lines":["i"]},{"start":{"row":5,"column":37},"end":{"row":5,"column":38},"action":"insert","lines":["s"]},{"start":{"row":5,"column":38},"end":{"row":5,"column":39},"action":"insert","lines":["t"]}],[{"start":{"row":5,"column":45},"end":{"row":6,"column":0},"action":"insert","lines":["",""],"id":50},{"start":{"row":6,"column":0},"end":{"row":6,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":6,"column":12},"end":{"row":6,"column":109},"action":"insert","lines":[" {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}"],"id":51}],[{"start":{"row":6,"column":13},"end":{"row":6,"column":109},"action":"remove","lines":["{!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}"],"id":52}],[{"start":{"row":6,"column":13},"end":{"row":6,"column":109},"action":"insert","lines":["{!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}"],"id":53}],[{"start":{"row":0,"column":0},"end":{"row":9,"column":11},"action":"remove","lines":["@extends('layouts.app')","","@section('content')","    <div class=\"center jumbotron\">","        <div class=\"text-center\">","            <h1>Welcome to the Tasklists</h1>","             {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}","        </div>","    </div>","@endsection"],"id":54}],[{"start":{"row":0,"column":0},"end":{"row":9,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","    <div class=\"center jumbotron\">","        <div class=\"text-center\">","            <h1>Welcome to the Microposts</h1>","            {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}","        </div>","    </div>","@endsection"],"id":55}],[{"start":{"row":5,"column":39},"end":{"row":5,"column":40},"action":"remove","lines":["t"],"id":56},{"start":{"row":5,"column":38},"end":{"row":5,"column":39},"action":"remove","lines":["s"]},{"start":{"row":5,"column":37},"end":{"row":5,"column":38},"action":"remove","lines":["o"]},{"start":{"row":5,"column":36},"end":{"row":5,"column":37},"action":"remove","lines":["p"]},{"start":{"row":5,"column":35},"end":{"row":5,"column":36},"action":"remove","lines":["o"]},{"start":{"row":5,"column":34},"end":{"row":5,"column":35},"action":"remove","lines":["r"]},{"start":{"row":5,"column":33},"end":{"row":5,"column":34},"action":"remove","lines":["c"]},{"start":{"row":5,"column":32},"end":{"row":5,"column":33},"action":"remove","lines":["i"]},{"start":{"row":5,"column":31},"end":{"row":5,"column":32},"action":"remove","lines":["M"]}],[{"start":{"row":5,"column":31},"end":{"row":5,"column":32},"action":"insert","lines":["t"],"id":61}],[{"start":{"row":5,"column":31},"end":{"row":5,"column":32},"action":"remove","lines":["t"],"id":62}],[{"start":{"row":5,"column":31},"end":{"row":5,"column":32},"action":"insert","lines":["T"],"id":63},{"start":{"row":5,"column":32},"end":{"row":5,"column":33},"action":"insert","lines":["a"]},{"start":{"row":5,"column":33},"end":{"row":5,"column":34},"action":"insert","lines":["s"]},{"start":{"row":5,"column":34},"end":{"row":5,"column":35},"action":"insert","lines":["l"]}],[{"start":{"row":5,"column":34},"end":{"row":5,"column":35},"action":"remove","lines":["l"],"id":64}],[{"start":{"row":5,"column":34},"end":{"row":5,"column":35},"action":"insert","lines":["k"],"id":65},{"start":{"row":5,"column":35},"end":{"row":5,"column":36},"action":"insert","lines":["l"]},{"start":{"row":5,"column":36},"end":{"row":5,"column":37},"action":"insert","lines":["i"]},{"start":{"row":5,"column":37},"end":{"row":5,"column":38},"action":"insert","lines":["s"]},{"start":{"row":5,"column":38},"end":{"row":5,"column":39},"action":"insert","lines":["t"]}],[{"start":{"row":0,"column":0},"end":{"row":9,"column":11},"action":"remove","lines":["@extends('layouts.app')","","@section('content')","    <div class=\"center jumbotron\">","        <div class=\"text-center\">","            <h1>Welcome to the Tasklists</h1>","            {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}","        </div>","    </div>","@endsection"],"id":66}],[{"start":{"row":0,"column":0},"end":{"row":14,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","    @if (Auth::check())","        <?php $user = Auth::user(); ?>","        {{ $user->name }}","    @else","        <div class=\"center jumbotron\">","            <div class=\"text-center\">","                <h1>Welcome to the Microposts</h1>","                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}","            </div>","        </div>","    @endif","@endsection"],"id":67}],[{"start":{"row":14,"column":11},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":68}],[{"start":{"row":9,"column":43},"end":{"row":9,"column":44},"action":"remove","lines":["t"],"id":69},{"start":{"row":9,"column":42},"end":{"row":9,"column":43},"action":"remove","lines":["s"]},{"start":{"row":9,"column":41},"end":{"row":9,"column":42},"action":"remove","lines":["o"]},{"start":{"row":9,"column":40},"end":{"row":9,"column":41},"action":"remove","lines":["p"]},{"start":{"row":9,"column":39},"end":{"row":9,"column":40},"action":"remove","lines":["o"]},{"start":{"row":9,"column":38},"end":{"row":9,"column":39},"action":"remove","lines":["r"]},{"start":{"row":9,"column":37},"end":{"row":9,"column":38},"action":"remove","lines":["c"]},{"start":{"row":9,"column":36},"end":{"row":9,"column":37},"action":"remove","lines":["i"]},{"start":{"row":9,"column":35},"end":{"row":9,"column":36},"action":"remove","lines":["M"]}],[{"start":{"row":9,"column":35},"end":{"row":9,"column":36},"action":"insert","lines":["T"],"id":75},{"start":{"row":9,"column":36},"end":{"row":9,"column":37},"action":"insert","lines":["a"]},{"start":{"row":9,"column":37},"end":{"row":9,"column":38},"action":"insert","lines":["s"]},{"start":{"row":9,"column":38},"end":{"row":9,"column":39},"action":"insert","lines":["k"]},{"start":{"row":9,"column":39},"end":{"row":9,"column":40},"action":"insert","lines":["l"]},{"start":{"row":9,"column":40},"end":{"row":9,"column":41},"action":"insert","lines":["i"]},{"start":{"row":9,"column":41},"end":{"row":9,"column":42},"action":"insert","lines":["s"]},{"start":{"row":9,"column":42},"end":{"row":9,"column":43},"action":"insert","lines":["t"]}]]},"timestamp":1528349566948}