<?php

include "StopWatch.php";
$stopWatch = new StopWatch();

$arr = [];
function createArr($arr)
{

    for ($x = 0; $x < 10000; $x++) {
        array_push($arr, mt_rand(-10000,10000));
    }

    return $arr;

}

createArr($arr);

function selectionSort($arr)
{
    global $stopWatch;
    $stopWatch->start();

    for ($x = 0; $x < count($arr) - 1; $x++) {
        $min = $arr[$x];

        for ($y = $x + 1; $y < count($arr); $y++) {

            if ($min < $arr[$y]) {
                $min = $arr[$y];
            }
        }
        $save = $arr[$x];
        $arr[$x] = $min;
        $min = $save;
    }
    $stopWatch->stop();

    return $stopWatch->getElapsedTime();

}

echo "Times " .selectionSort(createArr($arr)) ." miliseconds </br>" ;
