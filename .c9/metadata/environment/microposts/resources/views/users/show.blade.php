{"filter":false,"title":"show.blade.php","tooltip":"/microposts/resources/views/users/show.blade.php","undoManager":{"mark":5,"position":5,"stack":[[{"start":{"row":31,"column":14},"end":{"row":32,"column":0},"action":"insert","lines":["",""],"id":4},{"start":{"row":32,"column":0},"end":{"row":32,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":32,"column":8},"end":{"row":32,"column":65},"action":"insert","lines":[" @include('user_follow.follow_button', ['user' => $user])"],"id":5}],[{"start":{"row":12,"column":18},"end":{"row":13,"column":0},"action":"insert","lines":["",""],"id":6},{"start":{"row":13,"column":0},"end":{"row":13,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":13,"column":12},"end":{"row":13,"column":69},"action":"insert","lines":[" @include('user_follow.follow_button', ['user' => $user])"],"id":7}],[{"start":{"row":17,"column":229},"end":{"row":18,"column":0},"action":"insert","lines":["",""],"id":8},{"start":{"row":18,"column":0},"end":{"row":18,"column":16},"action":"insert","lines":["                "]}],[{"start":{"row":18,"column":16},"end":{"row":19,"column":233},"action":"insert","lines":["<li role=\"presentation\" class=\"{{ Request::is('users/*/followings') ? 'active' : '' }}\"><a href=\"{{ route('users.followings', ['id' => $user->id]) }}\">Followings <span class=\"badge\">{{ $count_followings }}</span></a></li>","                <li role=\"presentation\" class=\"{{ Request::is('users/*/followers') ? 'active' : '' }}\"><a href=\"{{ route('users.followers', ['id' => $user->id]) }}\">Followers <span class=\"badge\">{{ $count_followers }}</span></a></li>"],"id":9}]]},"ace":{"folds":[],"scrolltop":90,"scrollleft":0,"selection":{"start":{"row":19,"column":233},"end":{"row":19,"column":233},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":7,"state":"start","mode":"ace/mode/php"}},"timestamp":1529285741439,"hash":"07bb88fe0da8de0dd59652aa81e37bdf7905d3d6"}