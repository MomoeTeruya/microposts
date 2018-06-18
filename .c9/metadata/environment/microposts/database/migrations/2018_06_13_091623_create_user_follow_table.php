{"filter":false,"title":"2018_06_13_091623_create_user_follow_table.php","tooltip":"/microposts/database/migrations/2018_06_13_091623_create_user_follow_table.php","undoManager":{"mark":1,"position":1,"stack":[[{"start":{"row":15,"column":8},"end":{"row":18,"column":11},"action":"remove","lines":["Schema::create('user_follow', function (Blueprint $table) {","            $table->increments('id');","            $table->timestamps();","        });"],"id":2}],[{"start":{"row":15,"column":8},"end":{"row":27,"column":11},"action":"insert","lines":["Schema::create('user_follow', function (Blueprint $table) {","            $table->increments('id');","            $table->integer('user_id')->unsigned()->index();","            $table->integer('follow_id')->unsigned()->index();","            $table->timestamps();","","            // Foreign key setting","            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');","            $table->foreign('follow_id')->references('id')->on('users')->onDelete('cascade');","","            // Do not allow duplication of combination of user_id and follow_id","            $table->unique(['user_id', 'follow_id']);","        });"],"id":3}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":28,"column":5},"end":{"row":28,"column":5},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":7,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1528849107080,"hash":"5e7e5956f041b3c3a1449f7e6793d0acefb0545f"}