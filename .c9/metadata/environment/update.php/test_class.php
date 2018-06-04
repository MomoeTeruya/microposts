{"filter":false,"title":"test_class.php","tooltip":"/update.php/test_class.php","undoManager":{"mark":13,"position":13,"stack":[[{"start":{"row":0,"column":0},"end":{"row":16,"column":18},"action":"insert","lines":["<?php","","class Slime {","    public $type = 'スライム';","    public $hp = 10;","    public $power = 3;","","    function attack($character_name) {","        print $this->type . 'が' . $character_name . 'を攻撃して' . $this->power . 'ポイントのダメージを与えた！' . PHP_EOL;","    }","}","","$slime_A = new Slime();","","$slime_A->attack('主人公');","","print_r($slime_A);"],"id":1}],[{"start":{"row":16,"column":18},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":17,"column":0},"end":{"row":18,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":17,"column":0},"end":{"row":18,"column":0},"action":"remove","lines":["",""],"id":3},{"start":{"row":16,"column":18},"end":{"row":17,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":16,"column":18},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":4}],[{"start":{"row":17,"column":0},"end":{"row":18,"column":0},"action":"insert","lines":["",""],"id":5},{"start":{"row":18,"column":0},"end":{"row":18,"column":1},"action":"insert","lines":["?"]}],[{"start":{"row":18,"column":1},"end":{"row":18,"column":2},"action":"insert","lines":[">"],"id":6}],[{"start":{"row":18,"column":1},"end":{"row":18,"column":2},"action":"remove","lines":[">"],"id":7},{"start":{"row":18,"column":0},"end":{"row":18,"column":1},"action":"remove","lines":["?"]},{"start":{"row":17,"column":0},"end":{"row":18,"column":0},"action":"remove","lines":["",""]},{"start":{"row":16,"column":18},"end":{"row":17,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":0,"column":0},"end":{"row":16,"column":18},"action":"remove","lines":["<?php","","class Slime {","    public $type = 'スライム';","    public $hp = 10;","    public $power = 3;","","    function attack($character_name) {","        print $this->type . 'が' . $character_name . 'を攻撃して' . $this->power . 'ポイントのダメージを与えた！' . PHP_EOL;","    }","}","","$slime_A = new Slime();","","$slime_A->attack('主人公');","","print_r($slime_A);"],"id":8}],[{"start":{"row":0,"column":0},"end":{"row":16,"column":18},"action":"insert","lines":["<?php","","class Slime {","    public $type = 'スライム';","    public $hp = 10;","    public $power = 3;","","    function attack($character_name) {","        print $this->type . 'が' . $character_name . 'を攻撃して' . $this->power . 'ポイントのダメージを与えた！' . PHP_EOL;","    }","}","","$slime_A = new Slime();","","$slime_A->attack('主人公');","","print_r($slime_A);"],"id":9}],[{"start":{"row":0,"column":0},"end":{"row":16,"column":18},"action":"remove","lines":["<?php","","class Slime {","    public $type = 'スライム';","    public $hp = 10;","    public $power = 3;","","    function attack($character_name) {","        print $this->type . 'が' . $character_name . 'を攻撃して' . $this->power . 'ポイントのダメージを与えた！' . PHP_EOL;","    }","}","","$slime_A = new Slime();","","$slime_A->attack('主人公');","","print_r($slime_A);"],"id":10}],[{"start":{"row":0,"column":0},"end":{"row":24,"column":24},"action":"insert","lines":["<?php","","class Slime {","    public $type = 'スライム';","    public $suffix = '';","","    public $hp = 10;","    public $power = 3;","","    function __construct($suffix) {","        $this->suffix = $suffix;","    }","","    function name() {","        return $this->type . $this->suffix;","    }","","    function attack($character_name) {","        print $this->name() . 'が' . $character_name . 'を攻撃して' . $this->power . 'ポイントのダメージを与えた！' . PHP_EOL;","    }","}","","$slime_A = new Slime('A');","","$slime_A->attack('主人公');"],"id":11}],[{"start":{"row":0,"column":0},"end":{"row":24,"column":24},"action":"remove","lines":["<?php","","class Slime {","    public $type = 'スライム';","    public $suffix = '';","","    public $hp = 10;","    public $power = 3;","","    function __construct($suffix) {","        $this->suffix = $suffix;","    }","","    function name() {","        return $this->type . $this->suffix;","    }","","    function attack($character_name) {","        print $this->name() . 'が' . $character_name . 'を攻撃して' . $this->power . 'ポイントのダメージを与えた！' . PHP_EOL;","    }","}","","$slime_A = new Slime('A');","","$slime_A->attack('主人公');"],"id":12}],[{"start":{"row":0,"column":0},"end":{"row":78,"column":21},"action":"insert","lines":["<?php","","class Character {","    // クラス変数","    public static $type = '';","","    // インスタンス変数","    public $hp = 1;","    public $power = 1;","","    function __construct($hp, $power) {","        $this->hp = $hp;","        $this->power = $power;","    }","","    function name() {","        // $this:: によってインスタンス変数ではなく、クラス変数を呼び出している","        // （$this-> だとインスタンス変数を呼び出してしまう）","        return $this::$type;","    }","","    function attack($character) {","        $character->hp = $character->hp - $this->power;","        print $this->name() . 'が' . $character->name() . 'を攻撃して' . $this->power . 'ポイントのダメージを与えた！' . PHP_EOL;","","        if ($character->hp <= 0) {","            $this->defeat($character);","        }","    }","","    function defeat($character) {","        print $this->name() . 'は' . $character->name() . 'を倒した！' . PHP_EOL;","    }","}","","class Slime extends Character {","    // クラスの種類そのものなので、最初から代入して、以後変更しない","    public static $type = 'スライム';","","    public $suffix = '';","","    function __construct($suffix) {","        parent::__construct(10, 3);","        $this->suffix = $suffix;","    }","","    function name() {","        // parent::name() は、 $this::$type を返すので、","        // この Slime クラスのクラス変数 $type ('スライム') を返す","        return parent::name() . $this->suffix;","    }","","    // クラス関数","    static function description() {","        print self::$type . 'は、最弱のモンスターだ！' . PHP_EOL;","    }","}","","class Hero extends Character {","    // クラスの種類そのものなので、最初から代入して、以後変更しない","    public static $type = '主人公';","","    function __construct() {","        parent::__construct(1000, 30);","    }","    ","    static function description() {","        print self::$type . 'は、この世界を守る勇者だ！' . PHP_EOL;","    }","}","","$hero = new Hero();","$slime_A = new Slime('A');","","$slime_A->attack($hero);","$hero->attack($slime_A);","","Hero::description();","Slime::description();"],"id":13}],[{"start":{"row":78,"column":21},"end":{"row":79,"column":0},"action":"insert","lines":["",""],"id":14}]]},"ace":{"folds":[],"scrolltop":672.5,"scrollleft":0,"selection":{"start":{"row":79,"column":0},"end":{"row":79,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":47,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1526458252905,"hash":"245cd92e4ce9451641e324b78955f47cad5c4ec3"}