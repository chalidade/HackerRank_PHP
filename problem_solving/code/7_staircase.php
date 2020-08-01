<?php

// Complete the staircase function below.
function staircase($n) {
    for($i=0; $i<$n; $i++) {
        for($j=$i+1;$j<$n; $j++) echo " ";
        for($k=0; $k<=$i; $k++) echo "#";
        echo "\n";
    }

}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

staircase($n);

fclose($stdin);
