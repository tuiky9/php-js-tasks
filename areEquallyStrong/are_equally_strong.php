<?php

function areEquallyStrong($yourLeft, $yourRight, $friendsLeft, $friendsRight)
{

    return sizeof(array_intersect([$yourLeft, $yourRight], [$friendsLeft, $friendsRight])) === 2;
}


$res = array_intersect([10, 15], [14, 10]);
var_dump($res);
