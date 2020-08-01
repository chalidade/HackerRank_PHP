<?php

/*
 * Complete the timeConversion function below.
 */
function timeConversion($s) {
   $s       = explode(':',$s);
   $time    = substr($s[2],2,4);
   $s[2]    = substr($s[2],0,2);
   $result  = "";

   if($time == "PM") {
       if($s[0] != "12")
        $s[0] = $s[0]+12;
   }

   if($time == "AM") {
       if($s[0] == "12")
        $s[0] = "00";
   }

    return implode(":",$s);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%[^\n]", $s);

$result = timeConversion($s);

fwrite($fptr, $result . "\n");

fclose($__fp);
fclose($fptr);
