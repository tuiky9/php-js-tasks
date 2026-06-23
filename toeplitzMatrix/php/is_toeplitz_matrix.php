<?php

declare(strict_types=1);

namespace ToeplitzMatrix;

class Solution
{
    public static function solution($matrix)
    {
        $maxRows = count($matrix);
        $maxCols = count($matrix[0]);

        for ($column = 0; $column < $maxCols; $column++) {
            $isDiagonalConstant = self::isDiagonalConstant($matrix, 0, $column);
            if ($isDiagonalConstant === false) {
                return false;
            }
        }

        for ($row = 0; $row < $maxRows; $row++) {
            $isDiagonalConstant = self::isDiagonalConstant($matrix, $row, 0);
            if ($isDiagonalConstant === false) {
                return false;
            }
        }

        return true;
    }

    private static function isDiagonalConstant(array $matrix, int $row, int $column): bool
    {
        if (!isset($matrix[$row + 1][$column + 1])) {
            return true;
        } else {
            $isNeighborEqual = $matrix[$row][$column] === $matrix[$row + 1][$column + 1];
            if ($isNeighborEqual === false) {
                return false;
            } else {
                return $isNeighborEqual && self::isDiagonalConstant($matrix, $row + 1, $column + 1);
            }
        }
    }
}
