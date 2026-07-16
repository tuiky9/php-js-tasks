<?php

declare(strict_types=1);

namespace SecondMinimumInTree;

class TreeNode
{
    public function __construct(
        public int $val = 0,
        public ?TreeNode $left = null,
        public ?TreeNode $right = null
    ) {
    }
}

class Solution
{
    public static function solution(?TreeNode $root): ?int
    {
        if ($root === null) {
            return null;
        }

        $min = null;
        $secondMin = null;

        $traverse = static function (?TreeNode $node) use (&$traverse, &$min, &$secondMin): void {
            if ($node === null) {
                return;
            }

            $value = $node->val;

            if ($min === null || $value < $min) {
                $secondMin = $min;
                $min = $value;
            } elseif ($value > $min && ($secondMin === null || $value < $secondMin)) {
                $secondMin = $value;
            }

            $traverse($node->left);
            $traverse($node->right);
        };

        $traverse($root);

        return $secondMin;
    }
}
