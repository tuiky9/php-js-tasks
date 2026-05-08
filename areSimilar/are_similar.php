<?php

function areSimilar($a, $b)
{
    $ad = array_diff_assoc($a, $b);
    sort($ad);
    $bd = array_diff_assoc($b, $a);
    sort($bd);

    return sizeof($ad) < 3 && $ad == $bd;
}


$a = [1, 2, 5, "qw"];
$b = [1, 2, "qw", 5];
var_dump(areSimilar($a, $b));
var_dump(array_diff_assoc($a, $b));