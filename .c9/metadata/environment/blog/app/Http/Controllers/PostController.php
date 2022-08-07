{"filter":false,"title":"PostController.php","tooltip":"/blog/app/Http/Controllers/PostController.php","undoManager":{"mark":32,"position":32,"stack":[[{"start":{"row":3,"column":0},"end":{"row":4,"column":0},"action":"insert","lines":["",""],"id":4},{"start":{"row":4,"column":0},"end":{"row":4,"column":1},"action":"insert","lines":["u"]},{"start":{"row":4,"column":1},"end":{"row":4,"column":2},"action":"insert","lines":["s"]},{"start":{"row":4,"column":2},"end":{"row":4,"column":3},"action":"insert","lines":["e"]}],[{"start":{"row":4,"column":3},"end":{"row":4,"column":4},"action":"insert","lines":[" "],"id":5},{"start":{"row":4,"column":4},"end":{"row":4,"column":5},"action":"insert","lines":["A"]}],[{"start":{"row":4,"column":5},"end":{"row":4,"column":6},"action":"insert","lines":["P"],"id":6},{"start":{"row":4,"column":6},"end":{"row":4,"column":7},"action":"insert","lines":["P"]}],[{"start":{"row":4,"column":7},"end":{"row":4,"column":8},"action":"insert","lines":["_"],"id":7}],[{"start":{"row":4,"column":7},"end":{"row":4,"column":8},"action":"remove","lines":["_"],"id":8}],[{"start":{"row":4,"column":7},"end":{"row":4,"column":8},"action":"insert","lines":["\\"],"id":9}],[{"start":{"row":4,"column":8},"end":{"row":4,"column":9},"action":"insert","lines":["P"],"id":10},{"start":{"row":4,"column":9},"end":{"row":4,"column":10},"action":"insert","lines":["O"]},{"start":{"row":4,"column":10},"end":{"row":4,"column":11},"action":"insert","lines":["S"]},{"start":{"row":4,"column":11},"end":{"row":4,"column":12},"action":"insert","lines":["T"]}],[{"start":{"row":4,"column":11},"end":{"row":4,"column":12},"action":"remove","lines":["T"],"id":11},{"start":{"row":4,"column":10},"end":{"row":4,"column":11},"action":"remove","lines":["S"]},{"start":{"row":4,"column":9},"end":{"row":4,"column":10},"action":"remove","lines":["O"]}],[{"start":{"row":4,"column":9},"end":{"row":4,"column":10},"action":"insert","lines":["o"],"id":12},{"start":{"row":4,"column":10},"end":{"row":4,"column":11},"action":"insert","lines":["s"]},{"start":{"row":4,"column":11},"end":{"row":4,"column":12},"action":"insert","lines":["t"]}],[{"start":{"row":4,"column":8},"end":{"row":4,"column":12},"action":"remove","lines":["Post"],"id":13},{"start":{"row":4,"column":8},"end":{"row":4,"column":12},"action":"insert","lines":["Post"]}],[{"start":{"row":4,"column":12},"end":{"row":4,"column":13},"action":"insert","lines":[";"],"id":14}],[{"start":{"row":9,"column":5},"end":{"row":9,"column":6},"action":"remove","lines":["/"],"id":15},{"start":{"row":9,"column":4},"end":{"row":9,"column":5},"action":"remove","lines":["/"]}],[{"start":{"row":9,"column":4},"end":{"row":12,"column":1},"action":"insert","lines":["public function index(Post $post)","{","    return $post->get();","}"],"id":16}],[{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"insert","lines":["    "],"id":17}],[{"start":{"row":11,"column":4},"end":{"row":11,"column":8},"action":"insert","lines":["    "],"id":18}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "],"id":19}],[{"start":{"row":4,"column":6},"end":{"row":4,"column":7},"action":"remove","lines":["P"],"id":20},{"start":{"row":4,"column":5},"end":{"row":4,"column":6},"action":"remove","lines":["P"]}],[{"start":{"row":4,"column":5},"end":{"row":4,"column":6},"action":"insert","lines":["p"],"id":21},{"start":{"row":4,"column":6},"end":{"row":4,"column":7},"action":"insert","lines":["p"]}],[{"start":{"row":4,"column":4},"end":{"row":4,"column":7},"action":"remove","lines":["App"],"id":22},{"start":{"row":4,"column":4},"end":{"row":4,"column":7},"action":"insert","lines":["App"]}],[{"start":{"row":0,"column":0},"end":{"row":14,"column":0},"action":"remove","lines":["<?php","","namespace App\\Http\\Controllers;","","use App\\Post;","use Illuminate\\Http\\Request;","","class PostController extends Controller","{","    public function index(Post $post)","    {","        return $post->get();","    }","}",""],"id":23},{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"insert","lines":["v"]}],[{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"remove","lines":["v"],"id":24}],[{"start":{"row":0,"column":0},"end":{"row":14,"column":2},"action":"insert","lines":["<?php","","namespace App\\Http\\Controllers;","","use App\\Post;","use Illuminate\\Http\\Request;","","class PostController extends Controller","{","    public function index(Post $post)","    {","        return view('posts/index')->with(['posts' => $post->get()]);  ","    }","}","?>"],"id":25}],[{"start":{"row":11,"column":52},"end":{"row":11,"column":66},"action":"remove","lines":[" $post->get()]"],"id":27},{"start":{"row":11,"column":52},"end":{"row":11,"column":71},"action":"insert","lines":["$post->getByLimit()"]}],[{"start":{"row":9,"column":4},"end":{"row":12,"column":5},"action":"remove","lines":["public function index(Post $post)","    {","        return view('posts/index')->with(['posts' =>$post->getByLimit());  ","    }"],"id":28},{"start":{"row":9,"column":4},"end":{"row":12,"column":1},"action":"insert","lines":["public function index(Post $post)","{","    return view('posts/index')->with(['posts' => $post->getByLimit()]);","}"]}],[{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"insert","lines":["    "],"id":29}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "],"id":30}],[{"start":{"row":12,"column":5},"end":{"row":13,"column":0},"action":"insert","lines":["",""],"id":31},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":13,"column":4},"end":{"row":16,"column":2},"action":"insert","lines":["public function index(Post $post)","{","    return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);","} "],"id":32}],[{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "],"id":33}],[{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["    "],"id":34}],[{"start":{"row":9,"column":4},"end":{"row":12,"column":5},"action":"remove","lines":["public function index(Post $post)","    {","    return view('posts/index')->with(['posts' => $post->getByLimit()]);","    }"],"id":35}],[{"start":{"row":12,"column":75},"end":{"row":12,"column":76},"action":"insert","lines":["1"],"id":36},{"start":{"row":12,"column":76},"end":{"row":12,"column":77},"action":"insert","lines":["S"]}],[{"start":{"row":12,"column":76},"end":{"row":12,"column":77},"action":"remove","lines":["S"],"id":37}]]},"ace":{"folds":[],"scrolltop":60,"scrollleft":0,"selection":{"start":{"row":4,"column":4},"end":{"row":4,"column":4},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":3,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1659506844404,"hash":"ff29f3e90bc41499acce30d754cdeedc3a912b94"}