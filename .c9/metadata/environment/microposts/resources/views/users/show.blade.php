{"filter":false,"title":"show.blade.php","tooltip":"/microposts/resources/views/users/show.blade.php","undoManager":{"mark":8,"position":8,"stack":[[{"start":{"row":31,"column":14},"end":{"row":32,"column":0},"action":"insert","lines":["",""],"id":4},{"start":{"row":32,"column":0},"end":{"row":32,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":32,"column":8},"end":{"row":32,"column":65},"action":"insert","lines":[" @include('user_follow.follow_button', ['user' => $user])"],"id":5}],[{"start":{"row":12,"column":18},"end":{"row":13,"column":0},"action":"insert","lines":["",""],"id":6},{"start":{"row":13,"column":0},"end":{"row":13,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":13,"column":12},"end":{"row":13,"column":69},"action":"insert","lines":[" @include('user_follow.follow_button', ['user' => $user])"],"id":7}],[{"start":{"row":17,"column":229},"end":{"row":18,"column":0},"action":"insert","lines":["",""],"id":8},{"start":{"row":18,"column":0},"end":{"row":18,"column":16},"action":"insert","lines":["                "]}],[{"start":{"row":18,"column":16},"end":{"row":19,"column":233},"action":"insert","lines":["<li role=\"presentation\" class=\"{{ Request::is('users/*/followings') ? 'active' : '' }}\"><a href=\"{{ route('users.followings', ['id' => $user->id]) }}\">Followings <span class=\"badge\">{{ $count_followings }}</span></a></li>","                <li role=\"presentation\" class=\"{{ Request::is('users/*/followers') ? 'active' : '' }}\"><a href=\"{{ route('users.followers', ['id' => $user->id]) }}\">Followers <span class=\"badge\">{{ $count_followers }}</span></a></li>"],"id":9}],[{"start":{"row":35,"column":12},"end":{"row":35,"column":65},"action":"remove","lines":["clude('user_follow.follow_button', ['user' => $user])"],"id":14},{"start":{"row":35,"column":11},"end":{"row":35,"column":12},"action":"remove","lines":["n"]},{"start":{"row":35,"column":10},"end":{"row":35,"column":11},"action":"remove","lines":["i"]}],[{"start":{"row":35,"column":9},"end":{"row":35,"column":10},"action":"remove","lines":["@"],"id":15}],[{"start":{"row":20,"column":16},"end":{"row":21,"column":50},"action":"remove","lines":["<li><a href=\"#\">Followings</a></li>","                <li><a href=\"#\">Followers</a></li>"],"id":16}]]},"ace":{"folds":[],"scrolltop":40.660003662109375,"scrollleft":0,"selection":{"start":{"row":20,"column":16},"end":{"row":20,"column":16},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":1,"state":"start","mode":"ace/mode/php"}},"timestamp":1529298355918,"hash":"d516375702db91f4e22fe338777f0c05c8f33372"}