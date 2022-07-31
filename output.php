<?php
    require('input.php');
    
    if ($i % 3 == 0) {
        echo "Fizz";
    }else if($i % 5 == 0){
        echo "Buzz";
    } 
    else {
            echo $i;
    }
    echo PHP_EOL;
    

    print_r($numbers);
?>