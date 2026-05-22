<?php

function findEmailDomain($address)
{
    $parts = explode('@', $address);

    return array_pop($parts);
}
