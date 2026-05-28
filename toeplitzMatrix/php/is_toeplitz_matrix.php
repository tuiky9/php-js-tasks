<?php

class Solution {
    public function isToeplitzMatrix($matrix) {
        $maxRows = count($matrix);
        $maxCols = count($matrix[0]);
        
        for ($column = 0; $column < $maxCols; $column++) {
            $isDiagonalConstant = $this->isDiagonalConstant($matrix, 0, $column);
            if ($isDiagonalConstant === false) {
                return false;
            }
        }
        
        for ($row = 0; $row < $maxRows; $row++) {
            $isDiagonalConstant = $this->isDiagonalConstant($matrix, $row, 0);
            if ($isDiagonalConstant === false) {
                return false;
            }
        }
                    
        return true;
    }
    
    private function isDiagonalConstant(array $matrix, int $row, int $column): bool
    {
        if (!isset($matrix[$row+1][$column+1])) {
            return true;
        } else {
            $isNeighborEqual = $matrix[$row][$column] === $matrix[$row + 1][$column + 1];
            if ($isNeighborEqual === false) {
                return false;
            } else {
                return $isNeighborEqual && $this->isDiagonalConstant($matrix, $row + 1, $column + 1);
            }
        }
    }
}
