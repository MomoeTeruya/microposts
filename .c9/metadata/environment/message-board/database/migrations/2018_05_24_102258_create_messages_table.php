{"filter":false,"title":"2018_05_24_102258_create_messages_table.php","tooltip":"/message-board/database/migrations/2018_05_24_102258_create_messages_table.php","undoManager":{"mark":1,"position":1,"stack":[[{"start":{"row":15,"column":7},"end":{"row":18,"column":11},"action":"remove","lines":[" Schema::create('messages', function (Blueprint $table) {","            $table->increments('id');","            $table->timestamps();","        });"],"id":2}],[{"start":{"row":15,"column":7},"end":{"row":19,"column":11},"action":"insert","lines":["Schema::create('messages', function (Blueprint $table) {","            $table->increments('id');","            $table->string('content');    // content add column","            $table->timestamps();","        });"],"id":3}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":19,"column":11},"end":{"row":19,"column":11},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":3,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1527125040641,"hash":"055a5c3962fda075f1ea1507ccbdd5d0074b2535"}