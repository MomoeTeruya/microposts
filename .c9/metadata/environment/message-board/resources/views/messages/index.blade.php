{"filter":false,"title":"index.blade.php","tooltip":"/message-board/resources/views/messages/index.blade.php","undoManager":{"mark":53,"position":53,"stack":[[{"start":{"row":0,"column":0},"end":{"row":6,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","","<!-- Write content for each page here -->","","@endsection"],"id":1}],[{"start":{"row":6,"column":11},"end":{"row":7,"column":0},"action":"insert","lines":["",""],"id":2}],[{"start":{"row":2,"column":19},"end":{"row":3,"column":0},"action":"insert","lines":["",""],"id":3},{"start":{"row":3,"column":0},"end":{"row":4,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":4,"column":0},"end":{"row":12,"column":10},"action":"insert","lines":[" <h1>メッセージ一覧</h1>","","    @if (count($messages) > 0)","        <ul>","            @foreach ($messages as $message)","                <li>{{ $message->content }}</li>","            @endforeach","        </ul>","    @endif"],"id":4}],[{"start":{"row":12,"column":10},"end":{"row":13,"column":0},"action":"insert","lines":["",""],"id":5},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]},{"start":{"row":13,"column":4},"end":{"row":14,"column":0},"action":"insert","lines":["",""]},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":14,"column":4},"end":{"row":16,"column":23},"action":"insert","lines":["  @foreach ($messages as $message)","                <li>{!! link_to_route('messages.show', $message->id, ['id' => $message->id]) !!} : {{ $message->content }}</li>","            @endforeach"],"id":6}],[{"start":{"row":18,"column":40},"end":{"row":18,"column":41},"action":"remove","lines":[">"],"id":7},{"start":{"row":18,"column":39},"end":{"row":18,"column":40},"action":"remove","lines":["-"]},{"start":{"row":18,"column":38},"end":{"row":18,"column":39},"action":"remove","lines":["-"]},{"start":{"row":18,"column":37},"end":{"row":18,"column":38},"action":"remove","lines":[" "]},{"start":{"row":18,"column":36},"end":{"row":18,"column":37},"action":"remove","lines":["e"]},{"start":{"row":18,"column":35},"end":{"row":18,"column":36},"action":"remove","lines":["r"]},{"start":{"row":18,"column":34},"end":{"row":18,"column":35},"action":"remove","lines":["e"]},{"start":{"row":18,"column":33},"end":{"row":18,"column":34},"action":"remove","lines":["h"]},{"start":{"row":18,"column":32},"end":{"row":18,"column":33},"action":"remove","lines":[" "]},{"start":{"row":18,"column":31},"end":{"row":18,"column":32},"action":"remove","lines":["e"]},{"start":{"row":18,"column":30},"end":{"row":18,"column":31},"action":"remove","lines":["g"]},{"start":{"row":18,"column":29},"end":{"row":18,"column":30},"action":"remove","lines":["a"]},{"start":{"row":18,"column":28},"end":{"row":18,"column":29},"action":"remove","lines":["p"]},{"start":{"row":18,"column":27},"end":{"row":18,"column":28},"action":"remove","lines":[" "]},{"start":{"row":18,"column":26},"end":{"row":18,"column":27},"action":"remove","lines":["h"]},{"start":{"row":18,"column":25},"end":{"row":18,"column":26},"action":"remove","lines":["c"]},{"start":{"row":18,"column":24},"end":{"row":18,"column":25},"action":"remove","lines":["a"]},{"start":{"row":18,"column":23},"end":{"row":18,"column":24},"action":"remove","lines":["e"]},{"start":{"row":18,"column":22},"end":{"row":18,"column":23},"action":"remove","lines":[" "]},{"start":{"row":18,"column":21},"end":{"row":18,"column":22},"action":"remove","lines":["r"]},{"start":{"row":18,"column":20},"end":{"row":18,"column":21},"action":"remove","lines":["o"]},{"start":{"row":18,"column":19},"end":{"row":18,"column":20},"action":"remove","lines":["f"]},{"start":{"row":18,"column":18},"end":{"row":18,"column":19},"action":"remove","lines":[" "]},{"start":{"row":18,"column":17},"end":{"row":18,"column":18},"action":"remove","lines":["t"]},{"start":{"row":18,"column":16},"end":{"row":18,"column":17},"action":"remove","lines":["n"]},{"start":{"row":18,"column":15},"end":{"row":18,"column":16},"action":"remove","lines":["e"]},{"start":{"row":18,"column":14},"end":{"row":18,"column":15},"action":"remove","lines":["t"]},{"start":{"row":18,"column":13},"end":{"row":18,"column":14},"action":"remove","lines":["n"]},{"start":{"row":18,"column":12},"end":{"row":18,"column":13},"action":"remove","lines":["o"]},{"start":{"row":18,"column":11},"end":{"row":18,"column":12},"action":"remove","lines":["c"]},{"start":{"row":18,"column":10},"end":{"row":18,"column":11},"action":"remove","lines":[" "]},{"start":{"row":18,"column":9},"end":{"row":18,"column":10},"action":"remove","lines":["e"]},{"start":{"row":18,"column":8},"end":{"row":18,"column":9},"action":"remove","lines":["t"]},{"start":{"row":18,"column":7},"end":{"row":18,"column":8},"action":"remove","lines":["i"]},{"start":{"row":18,"column":6},"end":{"row":18,"column":7},"action":"remove","lines":["r"]},{"start":{"row":18,"column":5},"end":{"row":18,"column":6},"action":"remove","lines":["W"]},{"start":{"row":18,"column":4},"end":{"row":18,"column":5},"action":"remove","lines":[" "]},{"start":{"row":18,"column":3},"end":{"row":18,"column":4},"action":"remove","lines":["-"]},{"start":{"row":18,"column":2},"end":{"row":18,"column":3},"action":"remove","lines":["-"]}],[{"start":{"row":18,"column":1},"end":{"row":18,"column":2},"action":"remove","lines":["!"],"id":8},{"start":{"row":18,"column":0},"end":{"row":18,"column":1},"action":"remove","lines":["<"]}],[{"start":{"row":18,"column":0},"end":{"row":18,"column":55},"action":"insert","lines":[" {!! link_to_route('messages.create', '新規メッセージの投稿') !!}"],"id":9}],[{"start":{"row":6,"column":3},"end":{"row":12,"column":10},"action":"remove","lines":[" @if (count($messages) > 0)","        <ul>","            @foreach ($messages as $message)","                <li>{{ $message->content }}</li>","            @endforeach","        </ul>","    @endif"],"id":17}],[{"start":{"row":6,"column":3},"end":{"row":25,"column":10},"action":"insert","lines":["  @if (count($messages) > 0)","        <table class=\"table table-striped\">","            <thead>","                <tr>","                    <th>id</th>","                    <th>タイトル</th>","                    <th>メッセージ</th>","                </tr>","            </thead>","            <tbody>","                @foreach ($messages as $message)","                    <tr>","                        <td>{!! link_to_route('messages.show', $message->id, ['id' => $message->id]) !!}</td>","                        <td>{{ $message->title }}</td>","                        <td>{{ $message->content }}</td>","                    </tr>","                @endforeach","            </tbody>","        </table>","    @endif"],"id":18}],[{"start":{"row":29,"column":23},"end":{"row":30,"column":0},"action":"insert","lines":["",""],"id":19},{"start":{"row":30,"column":0},"end":{"row":30,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":30,"column":12},"end":{"row":30,"column":13},"action":"insert","lines":["<"],"id":20},{"start":{"row":30,"column":13},"end":{"row":30,"column":14},"action":"insert","lines":["/"]},{"start":{"row":30,"column":14},"end":{"row":30,"column":15},"action":"insert","lines":["t"]}],[{"start":{"row":30,"column":15},"end":{"row":30,"column":16},"action":"insert","lines":["b"],"id":21},{"start":{"row":30,"column":16},"end":{"row":30,"column":17},"action":"insert","lines":["o"]},{"start":{"row":30,"column":17},"end":{"row":30,"column":18},"action":"insert","lines":["d"]},{"start":{"row":30,"column":18},"end":{"row":30,"column":19},"action":"insert","lines":["y"]},{"start":{"row":30,"column":19},"end":{"row":30,"column":20},"action":"insert","lines":[">"]}],[{"start":{"row":30,"column":20},"end":{"row":31,"column":0},"action":"insert","lines":["",""],"id":22},{"start":{"row":31,"column":0},"end":{"row":31,"column":12},"action":"insert","lines":["            "]},{"start":{"row":31,"column":12},"end":{"row":31,"column":13},"action":"insert","lines":["<"]}],[{"start":{"row":31,"column":13},"end":{"row":31,"column":14},"action":"insert","lines":["w"],"id":23},{"start":{"row":31,"column":14},"end":{"row":31,"column":15},"action":"insert","lines":["f"]}],[{"start":{"row":31,"column":14},"end":{"row":31,"column":15},"action":"remove","lines":["f"],"id":24},{"start":{"row":31,"column":13},"end":{"row":31,"column":14},"action":"remove","lines":["w"]}],[{"start":{"row":31,"column":13},"end":{"row":31,"column":14},"action":"insert","lines":["/"],"id":25},{"start":{"row":31,"column":14},"end":{"row":31,"column":15},"action":"insert","lines":["t"]},{"start":{"row":31,"column":15},"end":{"row":31,"column":16},"action":"insert","lines":["a"]},{"start":{"row":31,"column":16},"end":{"row":31,"column":17},"action":"insert","lines":["b"]},{"start":{"row":31,"column":17},"end":{"row":31,"column":18},"action":"insert","lines":["l"]},{"start":{"row":31,"column":18},"end":{"row":31,"column":19},"action":"insert","lines":["e"]}],[{"start":{"row":31,"column":19},"end":{"row":31,"column":20},"action":"insert","lines":[">"],"id":26}],[{"start":{"row":31,"column":19},"end":{"row":31,"column":20},"action":"remove","lines":[">"],"id":27},{"start":{"row":31,"column":18},"end":{"row":31,"column":19},"action":"remove","lines":["e"]},{"start":{"row":31,"column":17},"end":{"row":31,"column":18},"action":"remove","lines":["l"]},{"start":{"row":31,"column":16},"end":{"row":31,"column":17},"action":"remove","lines":["b"]},{"start":{"row":31,"column":15},"end":{"row":31,"column":16},"action":"remove","lines":["a"]},{"start":{"row":31,"column":14},"end":{"row":31,"column":15},"action":"remove","lines":["t"]},{"start":{"row":31,"column":13},"end":{"row":31,"column":14},"action":"remove","lines":["/"]},{"start":{"row":31,"column":12},"end":{"row":31,"column":13},"action":"remove","lines":["<"]},{"start":{"row":31,"column":8},"end":{"row":31,"column":12},"action":"remove","lines":["    "]},{"start":{"row":31,"column":4},"end":{"row":31,"column":8},"action":"remove","lines":["    "]},{"start":{"row":31,"column":0},"end":{"row":31,"column":4},"action":"remove","lines":["    "]},{"start":{"row":30,"column":20},"end":{"row":31,"column":0},"action":"remove","lines":["",""]},{"start":{"row":30,"column":19},"end":{"row":30,"column":20},"action":"remove","lines":[">"]},{"start":{"row":30,"column":18},"end":{"row":30,"column":19},"action":"remove","lines":["y"]},{"start":{"row":30,"column":17},"end":{"row":30,"column":18},"action":"remove","lines":["d"]},{"start":{"row":30,"column":16},"end":{"row":30,"column":17},"action":"remove","lines":["o"]},{"start":{"row":30,"column":15},"end":{"row":30,"column":16},"action":"remove","lines":["b"]},{"start":{"row":30,"column":14},"end":{"row":30,"column":15},"action":"remove","lines":["t"]},{"start":{"row":30,"column":13},"end":{"row":30,"column":14},"action":"remove","lines":["/"]}],[{"start":{"row":30,"column":12},"end":{"row":30,"column":13},"action":"remove","lines":["<"],"id":28}],[{"start":{"row":23,"column":12},"end":{"row":25,"column":10},"action":"remove","lines":["</tbody>","        </table>","    @endif"],"id":29}],[{"start":{"row":27,"column":23},"end":{"row":28,"column":0},"action":"insert","lines":["",""],"id":30},{"start":{"row":28,"column":0},"end":{"row":28,"column":12},"action":"insert","lines":["            "]},{"start":{"row":28,"column":12},"end":{"row":29,"column":0},"action":"insert","lines":["",""]},{"start":{"row":29,"column":0},"end":{"row":29,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":29,"column":12},"end":{"row":31,"column":10},"action":"insert","lines":["</tbody>","        </table>","    @endif"],"id":31}],[{"start":{"row":23,"column":12},"end":{"row":23,"column":13},"action":"insert","lines":["<"],"id":32},{"start":{"row":23,"column":13},"end":{"row":23,"column":14},"action":"insert","lines":["/"]}],[{"start":{"row":23,"column":14},"end":{"row":23,"column":15},"action":"insert","lines":["t"],"id":33},{"start":{"row":23,"column":15},"end":{"row":23,"column":16},"action":"insert","lines":["b"]},{"start":{"row":23,"column":16},"end":{"row":23,"column":17},"action":"insert","lines":["o"]},{"start":{"row":23,"column":17},"end":{"row":23,"column":18},"action":"insert","lines":["d"]},{"start":{"row":23,"column":18},"end":{"row":23,"column":19},"action":"insert","lines":["y"]}],[{"start":{"row":23,"column":19},"end":{"row":23,"column":20},"action":"insert","lines":[">"],"id":34}],[{"start":{"row":23,"column":20},"end":{"row":24,"column":0},"action":"insert","lines":["",""],"id":35},{"start":{"row":24,"column":0},"end":{"row":24,"column":12},"action":"insert","lines":["            "]},{"start":{"row":24,"column":12},"end":{"row":24,"column":13},"action":"insert","lines":["<"]}],[{"start":{"row":24,"column":13},"end":{"row":24,"column":14},"action":"insert","lines":["/"],"id":36},{"start":{"row":24,"column":14},"end":{"row":24,"column":15},"action":"insert","lines":["t"]},{"start":{"row":24,"column":15},"end":{"row":24,"column":16},"action":"insert","lines":["a"]},{"start":{"row":24,"column":16},"end":{"row":24,"column":17},"action":"insert","lines":["b"]},{"start":{"row":24,"column":17},"end":{"row":24,"column":18},"action":"insert","lines":["l"]},{"start":{"row":24,"column":18},"end":{"row":24,"column":19},"action":"insert","lines":["e"]}],[{"start":{"row":24,"column":19},"end":{"row":24,"column":20},"action":"insert","lines":[">"],"id":37}],[{"start":{"row":24,"column":20},"end":{"row":25,"column":0},"action":"insert","lines":["",""],"id":38},{"start":{"row":25,"column":0},"end":{"row":25,"column":12},"action":"insert","lines":["            "]},{"start":{"row":25,"column":12},"end":{"row":26,"column":0},"action":"insert","lines":["",""]},{"start":{"row":26,"column":0},"end":{"row":26,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":26,"column":12},"end":{"row":26,"column":13},"action":"insert","lines":["2"],"id":39}],[{"start":{"row":26,"column":12},"end":{"row":26,"column":13},"action":"remove","lines":["2"],"id":40}],[{"start":{"row":26,"column":12},"end":{"row":26,"column":13},"action":"insert","lines":["@"],"id":41},{"start":{"row":26,"column":13},"end":{"row":26,"column":14},"action":"insert","lines":["e"]},{"start":{"row":26,"column":14},"end":{"row":26,"column":15},"action":"insert","lines":["c"]}],[{"start":{"row":26,"column":14},"end":{"row":26,"column":15},"action":"remove","lines":["c"],"id":42}],[{"start":{"row":26,"column":14},"end":{"row":26,"column":15},"action":"insert","lines":["n"],"id":43},{"start":{"row":26,"column":15},"end":{"row":26,"column":16},"action":"insert","lines":["d"]},{"start":{"row":26,"column":16},"end":{"row":26,"column":17},"action":"insert","lines":["i"]},{"start":{"row":26,"column":17},"end":{"row":26,"column":18},"action":"insert","lines":["f"]}],[{"start":{"row":28,"column":5},"end":{"row":28,"column":38},"action":"remove","lines":[" @foreach ($messages as $message)"],"id":44},{"start":{"row":28,"column":4},"end":{"row":28,"column":5},"action":"remove","lines":[" "]},{"start":{"row":28,"column":0},"end":{"row":28,"column":4},"action":"remove","lines":["    "]},{"start":{"row":27,"column":4},"end":{"row":28,"column":0},"action":"remove","lines":["",""]},{"start":{"row":27,"column":0},"end":{"row":27,"column":4},"action":"remove","lines":["    "]},{"start":{"row":26,"column":18},"end":{"row":27,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":26,"column":18},"end":{"row":27,"column":0},"action":"insert","lines":["",""],"id":45},{"start":{"row":27,"column":0},"end":{"row":27,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":29,"column":22},"end":{"row":29,"column":23},"action":"remove","lines":["h"],"id":46},{"start":{"row":29,"column":21},"end":{"row":29,"column":22},"action":"remove","lines":["c"]},{"start":{"row":29,"column":20},"end":{"row":29,"column":21},"action":"remove","lines":["a"]},{"start":{"row":29,"column":19},"end":{"row":29,"column":20},"action":"remove","lines":["e"]},{"start":{"row":29,"column":18},"end":{"row":29,"column":19},"action":"remove","lines":["r"]},{"start":{"row":29,"column":17},"end":{"row":29,"column":18},"action":"remove","lines":["o"]},{"start":{"row":29,"column":16},"end":{"row":29,"column":17},"action":"remove","lines":["f"]},{"start":{"row":29,"column":15},"end":{"row":29,"column":16},"action":"remove","lines":["d"]},{"start":{"row":29,"column":14},"end":{"row":29,"column":15},"action":"remove","lines":["n"]},{"start":{"row":29,"column":13},"end":{"row":29,"column":14},"action":"remove","lines":["e"]},{"start":{"row":29,"column":12},"end":{"row":29,"column":13},"action":"remove","lines":["@"]},{"start":{"row":29,"column":8},"end":{"row":29,"column":12},"action":"remove","lines":["    "]}],[{"start":{"row":29,"column":4},"end":{"row":29,"column":8},"action":"remove","lines":["    "],"id":47},{"start":{"row":29,"column":0},"end":{"row":29,"column":4},"action":"remove","lines":["    "]},{"start":{"row":28,"column":127},"end":{"row":29,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":33,"column":12},"end":{"row":34,"column":0},"action":"remove","lines":["",""],"id":48},{"start":{"row":33,"column":8},"end":{"row":33,"column":12},"action":"remove","lines":["    "]}],[{"start":{"row":28,"column":19},"end":{"row":28,"column":20},"action":"remove","lines":[">"],"id":49},{"start":{"row":28,"column":18},"end":{"row":28,"column":19},"action":"remove","lines":["i"]},{"start":{"row":28,"column":17},"end":{"row":28,"column":18},"action":"remove","lines":["l"]},{"start":{"row":28,"column":16},"end":{"row":28,"column":17},"action":"remove","lines":["<"]},{"start":{"row":28,"column":12},"end":{"row":28,"column":16},"action":"remove","lines":["    "]},{"start":{"row":28,"column":8},"end":{"row":28,"column":12},"action":"remove","lines":["    "]}],[{"start":{"row":34,"column":1},"end":{"row":34,"column":55},"action":"remove","lines":["{!! link_to_route('messages.create', '新規メッセージの投稿') !!}"],"id":50}],[{"start":{"row":27,"column":12},"end":{"row":27,"column":66},"action":"insert","lines":["{!! link_to_route('messages.create', '新規メッセージの投稿') !!}"],"id":51}],[{"start":{"row":28,"column":0},"end":{"row":28,"column":76},"action":"remove","lines":["        {!! link_to_route('messages.show', $message->id, ['id' => $message->"],"id":52}],[{"start":{"row":28,"column":0},"end":{"row":29,"column":12},"action":"remove","lines":["id]) !!} : {{ $message->content }}</li>","            "],"id":53}],[{"start":{"row":28,"column":0},"end":{"row":30,"column":16},"action":"remove","lines":["","            </tbody>","        </table>"],"id":54}],[{"start":{"row":31,"column":1},"end":{"row":32,"column":0},"action":"remove","lines":["",""],"id":55},{"start":{"row":31,"column":0},"end":{"row":31,"column":1},"action":"remove","lines":[" "]},{"start":{"row":30,"column":8},"end":{"row":31,"column":0},"action":"remove","lines":["",""]},{"start":{"row":30,"column":4},"end":{"row":30,"column":8},"action":"remove","lines":["    "]},{"start":{"row":30,"column":0},"end":{"row":30,"column":4},"action":"remove","lines":["    "]},{"start":{"row":29,"column":10},"end":{"row":30,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":27,"column":66},"end":{"row":28,"column":0},"action":"remove","lines":["",""],"id":56}],[{"start":{"row":24,"column":10},"end":{"row":24,"column":11},"action":"remove","lines":[" "],"id":57},{"start":{"row":24,"column":9},"end":{"row":24,"column":10},"action":"remove","lines":[" "]}],[{"start":{"row":25,"column":8},"end":{"row":25,"column":9},"action":"remove","lines":[" "],"id":58},{"start":{"row":25,"column":4},"end":{"row":25,"column":8},"action":"remove","lines":["    "]},{"start":{"row":25,"column":0},"end":{"row":25,"column":4},"action":"remove","lines":["    "]},{"start":{"row":24,"column":18},"end":{"row":25,"column":3},"action":"remove","lines":["","   "]}],[{"start":{"row":27,"column":9},"end":{"row":27,"column":10},"action":"remove","lines":["f"],"id":59},{"start":{"row":27,"column":8},"end":{"row":27,"column":9},"action":"remove","lines":["i"]},{"start":{"row":27,"column":7},"end":{"row":27,"column":8},"action":"remove","lines":["d"]},{"start":{"row":27,"column":6},"end":{"row":27,"column":7},"action":"remove","lines":["n"]},{"start":{"row":27,"column":5},"end":{"row":27,"column":6},"action":"remove","lines":["e"]},{"start":{"row":27,"column":4},"end":{"row":27,"column":5},"action":"remove","lines":["@"]},{"start":{"row":27,"column":0},"end":{"row":27,"column":4},"action":"remove","lines":["    "]},{"start":{"row":26,"column":66},"end":{"row":27,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":26,"column":61},"end":{"row":26,"column":100},"action":"insert","lines":[", null, ['class' => 'btn btn-primary'])"],"id":60}],[{"start":{"row":26,"column":99},"end":{"row":26,"column":100},"action":"remove","lines":[")"],"id":61}]]},"ace":{"folds":[],"scrolltop":113,"scrollleft":0,"selection":{"start":{"row":28,"column":0},"end":{"row":28,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1527750644251,"hash":"d4b201ef3200da81e15b6a23d08e770ea17a365d"}