<?php

function absoluteValuesSumMinimization($a)
{

    return $a[ceil(sizeof($a) / 2) - 1];
}

$a = [2, 4, 157, 52, 19, 8];

$res = absoluteValuesSumMinimization($a);

print_r($res . PHP_EOL);
