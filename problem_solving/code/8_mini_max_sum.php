<?php

// Complete the miniMaxSum function below.
function miniMaxSum($arr) {
    $max       = [];
    $min       = [];
    $n         = count($arr);

    sort($arr);

    for($i=$n-1; $i>=0; $i--) {
        if(count($max) < 4)
            $max[] = $arr[$i];
    }

    for($i=0; $i<$n; $i++) {
        if(count($min) < 4)
            $min[] = $arr[$i];
    }

    echo array_sum($min)." ".array_sum($max);
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);

fclose($stdin);
