<?php

// Complete the plusMinus function below.
function plusMinus($arr) {
    $save   = [0,0,0];
    $n      = count($arr);

    foreach($arr as $data) {
        if($data > 0) {
            $save[0] = $save[0]+1;
        } else if($data < 0) {
            $save[1] = $save[1]+1;
        } else {
            $save[2] = $save[2]+1;
        }
    }

    foreach($save as $data) {
        echo round($data/$n,6)."\n";
    }
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);

fclose($stdin);
