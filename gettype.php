<?php
    $str = "文字列です。"; // $strはstring（文字列）型
    $int_number = 4; // $int_numberはinteger（整数）型
    $arr = array(1,2,3,4); // $arrはarray（配列）型
    $a_bool = TRUE;
    $var = NULL;

    echo gettype($str) . PHP_EOL;
    echo gettype($int_number) . PHP_EOL;
    echo gettype($arr) . PHP_EOL;
    echo gettype($a_bool) . PHP_EOL;
    echo gettype($var) . PHP_EOL;
?>