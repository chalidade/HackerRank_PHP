<?php

// Complete the kangaroo function below.
function kangaroo($x1, $v1, $x2, $v2) {
    $diff         = abs($v1-$x1)*abs($v2-$x2);
    $step         = [abs($v1+$x1),abs($v2+$x2)];
    if($v2 > $v1) {
        return "NO";
    } else if($x1 > $x2) {
        return "NO";
    } else if($v2 == $v1 AND $x1 != $x2) {
        return "NO";
    } else if($v2 != $v1 AND $x1 == $x2) {
        return "NO";
    } else if($step[0] > $step[1]) {
        return "NO";
    } else if($v1 == 0 || $v2 == 0) {
        return "NO";
    } else {
        if($diff % 1 == 0) {
            return "YES";
        } else if($diff % 2 == 0) {
            return "YES";
        } else if($diff % 3 == 0) {
            return "YES";
        } else if($diff % 5 == 0) {
            return "YES";
        } else if($diff % 7 == 0) {
            return "YES";
        } else if($diff % 9 == 0) {
            return "YES";
        } else {
            return "NO";
        }
    }

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $x1V1X2V2_temp);
$x1V1X2V2 = explode(' ', $x1V1X2V2_temp);

$x1 = intval($x1V1X2V2[0]);

$v1 = intval($x1V1X2V2[1]);

$x2 = intval($x1V1X2V2[2]);

$v2 = intval($x1V1X2V2[3]);

$result = kangaroo($x1, $v1, $x2, $v2);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
