<?php

declare(strict_types=1);

namespace IsBinarySearchTree;

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
    public static function solution(?TreeNode $root): bool
    {
        return self::isValidBst($root, null, null);
    }

    private static function isValidBst(?TreeNode $node, ?int $min, ?int $max): bool
    {
        if ($node === null) {
            return true;
        }

        if (($min !== null && $node->val <= $min) || ($max !== null && $node->val >= $max)) {
            return false;
        }

        return self::isValidBst($node->left, $min, $node->val)
            && self::isValidBst($node->right, $node->val, $max);
    }
}
