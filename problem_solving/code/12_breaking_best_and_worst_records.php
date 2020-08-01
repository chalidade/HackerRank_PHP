<?php

// Complete the breakingRecords function below.
function breakingRecords($scores) {
    $maxMin = [];
    $count  = [0,0];

    foreach ($scores as $scores) {
        if(empty($maxMin)) {
            $maxMin[0] = $scores;
            $maxMin[1] = $scores;
        } else {
            if(!in_array($scores, $maxMin)) {
                if($scores > $maxMin[0]) {
                    $maxMin[0] = $scores;
                    $count[0]  = $count[0]+1;
                } else if($scores < $maxMin[1]) {
                    $maxMin[1] = $scores;
                    $count[1]  = $count[1]+1;
                }
            }
        }

    }

    return $count;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $scores_temp);

$scores = array_map('intval', preg_split('/ /', $scores_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = breakingRecords($scores);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($stdin);
fclose($fptr);
