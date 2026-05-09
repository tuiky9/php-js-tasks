<?php

function absoluteValuesSumMinimization(array $input): int {
    return $input[ceil(count($input) / 2) - 1];
}